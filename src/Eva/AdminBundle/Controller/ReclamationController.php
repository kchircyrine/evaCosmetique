<?php

namespace Eva\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eva\AdminBundle\Entity\Reclamation;
use Eva\AdminBundle\Form\ReclamationType;

/**
 * Reclamation controller.
 *
 */
class ReclamationController extends Controller {

    /**
     * Lists all Reclamation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Reclamation')->findAll();

        return $this->render('EvaAdminBundle:Reclamation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Reclamation entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Reclamation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reclamation_show', array('id' => $entity->getId())));
        }

        return $this->render('EvaAdminBundle:Reclamation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reclamation entity.
     *
     * @param Reclamation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reclamation $entity) {
        $form = $this->createForm(new ReclamationType(), $entity, array(
            'action' => $this->generateUrl('reclamation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reclamation entity.
     *
     */
    public function newAction() {
        $entity = new Reclamation();
        $form = $this->createCreateForm($entity);

        return $this->render('EvaAdminBundle:Reclamation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reclamation entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Reclamation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reclamation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:Reclamation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reclamation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Reclamation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reclamation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:Reclamation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Reclamation entity.
     *
     * @param Reclamation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Reclamation $entity) {
        $form = $this->createForm(new ReclamationType(), $entity, array(
            'action' => $this->generateUrl('reclamation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Reclamation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Reclamation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reclamation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reclamation_edit', array('id' => $id)));
        }

        return $this->render('EvaAdminBundle:Reclamation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Reclamation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EvaAdminBundle:Reclamation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reclamation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reclamation'));
    }

    /**
     * Creates a form to delete a Reclamation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('reclamation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    /**
     * Counts all Reclamation entities.
     *
     */
    public function countAllAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Reclamation')->findAll();
        return new \Symfony\Component\HttpFoundation\Response(sizeof($entities));
    }

    /**
     * Counts done Reclamation entities.
     *
     */
    public function countDoneAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Reclamation')->findBy(array('response' => !null));
        return new \Symfony\Component\HttpFoundation\Response(sizeof($entities));
    }
    public function indexDoneAction() {
        $em = $this->getDoctrine()->getManager();

        $doneEntities = $em->getRepository('EvaAdminBundle:Reclamation')->findBy(array('response' => !null));
        return new \Symfony\Component\HttpFoundation\Response($doneEntities);
    }

    /**
     * Counts pending Reclamation entities.
     *
     */
    public function countPendingAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Reclamation')->findBy(array('response' => null));
        return new \Symfony\Component\HttpFoundation\Response(sizeof($entities));
    }
    public function indexPendingAction() {
        $em = $this->getDoctrine()->getManager();

        $pendingEntities = $em->getRepository('EvaAdminBundle:Reclamation')->findBy(array('response' => null));
        return new \Symfony\Component\HttpFoundation\Response($pendingEntities);
    }

    /**
     * Lists all Reclamation entities.
     *
     */
    public function dropDownListAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Reclamation')->findBy(array('response'=>null),array('dateCreation'=>'DESC'));

        return $this->render('EvaAdminBundle:Reclamation:dropdown.html.twig', array(
                    'entities' => $entities,
        ));
    }

}
