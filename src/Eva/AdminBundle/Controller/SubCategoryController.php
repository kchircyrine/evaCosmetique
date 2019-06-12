<?php

namespace Eva\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Eva\AdminBundle\Entity\SubCategory;
use Eva\AdminBundle\Form\SubCategoryType;

/**
 * SubCategory controller.
 *
 */
class SubCategoryController extends Controller
{

    /**
     * Lists all SubCategory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:SubCategory')->findAll();

        return $this->render('EvaAdminBundle:SubCategory:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SubCategory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SubCategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subcategory_show', array('id' => $entity->getId())));
        }

        return $this->render('EvaAdminBundle:SubCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a SubCategory entity.
     *
     * @param SubCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SubCategory $entity)
    {
        $form = $this->createForm(new SubCategoryType(), $entity, array(
            'action' => $this->generateUrl('subcategory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SubCategory entity.
     *
     */
    public function newAction()
    {
        $entity = new SubCategory();
        $form   = $this->createCreateForm($entity);

        return $this->render('EvaAdminBundle:SubCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SubCategory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }

        return $this->render('EvaAdminBundle:SubCategory:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing SubCategory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('EvaAdminBundle:SubCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SubCategory entity.
    *
    * @param SubCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SubCategory $entity)
    {
        $form = $this->createForm(new SubCategoryType(), $entity, array(
            'action' => $this->generateUrl('subcategory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SubCategory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('subcategory_edit', array('id' => $id)));
        }

        return $this->render('EvaAdminBundle:SubCategory:edit.html.twig', array(
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

        $entity = $em->getRepository('EvaAdminBundle:SubCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SubCategory entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:SubCategory:delete.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SubCategory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EvaAdminBundle:SubCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SubCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subcategory'));
    }

    /**
     * Creates a form to delete a SubCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subcategory_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
