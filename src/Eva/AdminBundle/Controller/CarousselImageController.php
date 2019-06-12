<?php

namespace Eva\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Eva\AdminBundle\Entity\CarousselImage;
use Eva\AdminBundle\Form\CarousselImageType;

/**
 * CarousselImage controller.
 *
 */
class CarousselImageController extends Controller
{

    /**
     * Lists all CarousselImage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:CarousselImage')->findAll();

        return $this->render('EvaAdminBundle:CarousselImage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CarousselImage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CarousselImage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carousselimage_show', array('id' => $entity->getId())));
        }

        return $this->render('EvaAdminBundle:CarousselImage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CarousselImage entity.
     *
     * @param CarousselImage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CarousselImage $entity)
    {
        $form = $this->createForm(new CarousselImageType(), $entity, array(
            'action' => $this->generateUrl('carousselimage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CarousselImage entity.
     *
     */
    public function newAction()
    {
        $entity = new CarousselImage();
        $form   = $this->createCreateForm($entity);

        return $this->render('EvaAdminBundle:CarousselImage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CarousselImage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:CarousselImage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CarousselImage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:CarousselImage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CarousselImage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:CarousselImage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CarousselImage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:CarousselImage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CarousselImage entity.
    *
    * @param CarousselImage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CarousselImage $entity)
    {
        $form = $this->createForm(new CarousselImageType(), $entity, array(
            'action' => $this->generateUrl('carousselimage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CarousselImage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:CarousselImage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CarousselImage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('carousselimage_edit', array('id' => $id)));
        }

        return $this->render('EvaAdminBundle:CarousselImage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CarousselImage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EvaAdminBundle:CarousselImage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CarousselImage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('carousselimage'));
    }

    /**
     * Creates a form to delete a CarousselImage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carousselimage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
