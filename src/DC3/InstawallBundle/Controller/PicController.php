<?php

namespace DC3\InstawallBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DC3\InstawallBundle\Entity\Pic;
use DC3\InstawallBundle\Form\PicType;
use Symfony\Component\HttpFoundation\Response;


/**
 * Pic controller.
 *
 * @Route("/pic")
 */
class PicController extends Controller
{

    /**
     * Lists all Pic entities.
     *
     * @Route("/", name="pic")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DC3InstawallBundle:Pic')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Pic entity.
     *
     * @Route("/", name="pic_create")
     * @Method("POST")
     * @Template("DC3InstawallBundle:Pic:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Pic();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pic_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Pic entity.
    *
    * @param Pic $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Pic $entity)
    {
        $form = $this->createForm(new PicType(), $entity, array(
            'action' => $this->generateUrl('pic_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pic entity.
     *
     * @Route("/new", name="pic_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Pic();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Pic entity.
     *
     * @Route("/{id}", name="pic_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Pic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pic entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Finds and update instagram information.
     *
     * @Route("/{id}/instagram-update", name="pic_instagram_update")
     * @Method("GET")
     * @Template()
     */
    public function instagramUpdateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Pic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pic entity.');
        }
        
        $Insta = new \Instagram(array(
			'apiKey'=>'087c4dedc9e942179d973ba767648488',
			'apiSecret'=>'f83ef66f9cd3494db572c70705a341c7',
			'apiCallback'=>'http://intagram.nicolasa.dc3'
		));
		
		$resp = $Insta->getMedia($entity->getPictureId());		
		$like_count = $resp->data->likes->count;
		$entity->setLikeCount($like_count);
		$em->persist($entity);
		$em->flush(); // sauvegarde moi les données dans la base de donnée
		
		$PicTempArray['URL'] = $entity->getUrl();
		$PicTempArray['ID'] = $entity->getPictureId();
		$PicTempArray['USERPIC'] = $entity->getUserPic();
		$PicTempArray['USERNAME'] = $entity->getUserName();
		$PicTempArray['LIKES'] = $entity->getLikeCount();
		
		return new Response(json_encode($PicTempArray));
    }

    /**
     * Displays a form to edit an existing Pic entity.
     *
     * @Route("/{id}/edit", name="pic_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Pic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pic entity.');
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
    * Creates a form to edit a Pic entity.
    *
    * @param Pic $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pic $entity)
    {
        $form = $this->createForm(new PicType(), $entity, array(
            'action' => $this->generateUrl('pic_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pic entity.
     *
     * @Route("/{id}", name="pic_update")
     * @Method("PUT")
     * @Template("DC3InstawallBundle:Pic:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Pic')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pic entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pic_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Pic entity.
     *
     * @Route("/{id}", name="pic_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DC3InstawallBundle:Pic')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pic entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pic'));
    }

    /**
     * Creates a form to delete a Pic entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pic_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
