<?php

namespace DC3\InstawallBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DC3\InstawallBundle\Entity\Queue;
use DC3\InstawallBundle\Form\QueueType;

/**
 * Queue controller.
 *
 * @Route("/queue")
 */
class QueueController extends Controller
{

    /**
     * Lists all Queue entities.
     *
     * @Route("/", name="queue")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DC3InstawallBundle:Queue')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Queue entity.
     *
     * @Route("/", name="queue_create")
     * @Method("POST")
     * @Template("DC3InstawallBundle:Queue:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Queue();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('queue_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Queue entity.
    *
    * @param Queue $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Queue $entity)
    {
        $form = $this->createForm(new QueueType(), $entity, array(
            'action' => $this->generateUrl('queue_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Queue entity.
     *
     * @Route("/new", name="queue_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Queue();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Queue entity.
     *
     * @Route("/{id}", name="queue_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Queue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Queue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Queue entity.
     *
     * @Route("/{id}/edit", name="queue_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Queue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Queue entity.');
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
    * Creates a form to edit a Queue entity.
    *
    * @param Queue $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Queue $entity)
    {
        $form = $this->createForm(new QueueType(), $entity, array(
            'action' => $this->generateUrl('queue_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Queue entity.
     *
     * @Route("/{id}", name="queue_update")
     * @Method("PUT")
     * @Template("DC3InstawallBundle:Queue:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DC3InstawallBundle:Queue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Queue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('queue_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Queue entity.
     *
     * @Route("/{id}", name="queue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DC3InstawallBundle:Queue')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Queue entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('queue'));
    }

    /**
     * Creates a form to delete a Queue entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('queue_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
