<?php

namespace Eva\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Eva\AdminBundle\Entity\Marque;
use Eva\AdminBundle\Form\MarqueType;

/**
 * Marque controller.
 *
 */
class MarqueController extends Controller
{

    /**
     * Lists all Marque entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Marque')->findAll();

        return $this->render('EvaAdminBundle:Marque:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Marque entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Marque();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('marque_show', array('id' => $entity->getId())));
        }

        return $this->render('EvaAdminBundle:Marque:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Marque entity.
     *
     * @param Marque $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Marque $entity)
    {
        $form = $this->createForm(new MarqueType(), $entity, array(
            'action' => $this->generateUrl('marque_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Marque entity.
     *
     */
    public function newAction()
    {
        $entity = new Marque();
        $form   = $this->createCreateForm($entity);

        return $this->render('EvaAdminBundle:Marque:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Marque entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Marque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marque entity.');
        }

        return $this->render('EvaAdminBundle:Marque:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Marque entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Marque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marque entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('EvaAdminBundle:Marque:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Marque entity.
    *
    * @param Marque $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Marque $entity)
    {
        $form = $this->createForm(new MarqueType(), $entity, array(
            'action' => $this->generateUrl('marque_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Marque entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Marque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marque entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('marque'));
        }

        return $this->render('EvaAdminBundle:Marque:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
     /**
     * Displays a form to delete an existing Category entity.
     *
     */
    public function removeAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Marque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marque entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:Marque:delete.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Marque entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EvaAdminBundle:Marque')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Marque entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('marque'));
    }

    /**
     * Creates a form to delete a Marque entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('marque_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
