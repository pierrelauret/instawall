<?php

namespace DC3\InstawallBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DC3\InstawallBundle\Entity\Event;
use DC3\InstawallBundle\Form\EventType;
use Symfony\Component\HttpFoundation\Response;
use DC3\InstawallBundle\Entity\Pic;

/**
 * Event controller.
 *
 * @Route("/event")
 */
class EventController extends Controller
{

    /**
     * Lists all Event entities.
     *
     * @Route("/", name="event")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DC3InstawallBundle:Event')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Event entity.
     *
     * @Route("/", name="event_create")
     * @Method("POST")
     * @Template("DC3InstawallBundle:Event:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Event();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('event_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Event entity.
    *
    * @param Event $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Event entity.
     *
     * @Route("/new", name="event_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Event();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Event entity.
     *
     * @Route("/{id}", name="event_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Event')->find($id);
        
        // pour order les pic by la date
        
        $pics = $em->getRepository("DC3InstawallBundle:Pic")
            ->createQueryBuilder("p")
            ->where('p.event = :event')
			->setParameter('event',$entity)
			->orderBy('p.created', 'ASC')
			->setMaxResults(100)
            ->getQuery()
            ->getResult();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'pics' => $pics,
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Finds and displays a Event entity.
     *
     * @Route("/{id}/refresh", name="event_refresh")
     * @Method("GET")
     * @Template()
     */
    public function refreshAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Event')->find($id);
        
        $countNew = $this->getInstagramPics($entity);
        $em->refresh($entity);
        // pour order les pic by la date
        
        $pics = $em->getRepository("DC3InstawallBundle:Pic")
            ->createQueryBuilder("p")
            ->where('p.event = :event')
			->setParameter('event',$entity)
			->orderBy('p.created', 'DESC')
			->setMaxResults(10)
            ->getQuery()
            ->getResult();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

		$PicArray = array();
		
		foreach($pics as $pic) {
			
			$PicTempArray['URL'] = $pic->getUrl();
			$PicTempArray['PICID'] = $pic->getId();
			$PicTempArray['ID'] = $pic->getPictureId();
			$PicTempArray['USERPIC'] = $pic->getUserPic();
			$PicTempArray['USERNAME'] = $pic->getUserName();
			$PicTempArray['LIKES'] = $pic->getLikeCount();
			
			
			$PicArray[] = $PicTempArray;
			
		}
		
		$response = array('count_new' => $countNew, 'pics' => $PicArray);
		
        return new Response(json_encode($response));
       
     }
     
    protected function getInstagramPics($event)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$eventid = $event->getId();
        $tag = $event->getHTag();
        $lng = $event->getLng();
        $lat = $event->getLat();
         
         
        $Insta = new \Instagram(array(
			'apiKey'=>'087c4dedc9e942179d973ba767648488',
			'apiSecret'=>'f83ef66f9cd3494db572c70705a341c7',
			'apiCallback'=>'http://intagram.nicolasa.dc3'
		));
		$count = 0;
		
		$pics_location = $Insta->searchMedia($lat, $lng, 500);
		if(isset($pics_location->data)) {
			
			foreach ($pics_location->data as $pic) {
				
				$like_count = $pic->likes->count;
				$url = $pic->images->low_resolution->url; // qualité de l'image
				$comment = '';
				if(isset($pic->caption->text) && !empty($pic->caption->text)){
					$comment = $pic->caption->text;
				}
				
			    
				$user_name = $pic->user->username;
				$user_pic = $pic->user->profile_picture;
				$picture_id = $pic->id;
				$created_time = new \Datetime(); // Attention format timestamp
				$created_time->setTimestamp($pic->created_time); 
				
				$picObject = $em->getRepository("DC3InstawallBundle:Pic")
				->createQueryBuilder("p")
				->where('p.pictureId = :picture_id')
				->setParameter('picture_id',$picture_id)
				->getQuery()
				->getResult();
				
				if (!$picObject) {
					$count++;
					$instpic = new Pic();
					$instpic->setUrl($url);
					$instpic->setLikeCount($like_count);
					$instpic->setComment($comment);
					$instpic->setUserName($user_name);
					$instpic->setUserPic($user_pic);
					$instpic->setCreated($created_time);
					$instpic->setPictureId($picture_id);
					$instpic->setEvent($event);
					$em->persist($instpic);	
				}
				
			}
		}

		$pics_tag = $Insta->searchMediaByTag($tag);

		if(isset($pics_tag->data)) {
			foreach ($pics_tag->data as $pic) {
				$like_count = $pic->likes->count;
				$url = $pic->images->low_resolution->url;
				$comment = '';
				if(isset($pic->caption->text) && !empty($pic->caption->text)){
					$comment = $pic->caption->text;
				}
				$user_name = $pic->user->username;
				$user_pic = $pic->user->profile_picture;
				$picture_id = $pic->id;
				$created_time = new \Datetime(); // Attention format timestamp
				$created_time->setTimestamp($pic->created_time); 
											
				$picObject = $em->getRepository("DC3InstawallBundle:Pic")
				->createQueryBuilder("p")
				->where('p.pictureId = :picture_id')
				->setParameter('picture_id',$picture_id)
				->getQuery()
				->getResult();
				
				if (!$picObject) {
					$count++;
					$instpic = new Pic();
					$instpic->setUrl($url);
					$instpic->setLikeCount($like_count);
					$instpic->setComment($comment);
					$instpic->setUserName($user_name);
					$instpic->setUserPic($user_pic);
					$instpic->setCreated($created_time);
					$instpic->setPictureId($picture_id);
					$instpic->setEvent($event);
					$em->persist($instpic);	
				};
			}
		}
		
		$em->flush();
		
		return $count;
    }

    /**
     * Displays a form to edit an existing Event entity.
     *
     * @Route("/{id}/edit", name="event_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Event entity.
    *
    * @param Event $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Event entity.
     *
     * @Route("/{id}", name="event_update")
     * @Method("PUT")
     * @Template("DC3InstawallBundle:Event:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('event_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Event entity.
     *
     * @Route("/{id}", name="event_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DC3InstawallBundle:Event')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Event entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('event'));
    }

    /**
     * Creates a form to delete a Event entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
