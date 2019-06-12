<?php

namespace Eva\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Eva\AdminBundle\Entity\Offer;
use Eva\AdminBundle\Form\OfferType;

/**
 * Offer controller.
 *
 */
class OfferController extends Controller
{

    /**
     * Lists all Offer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EvaAdminBundle:Offer')->findAll();

        return $this->render('EvaAdminBundle:Offer:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Offer entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Offer();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offer'));
        }

        return $this->render('EvaAdminBundle:Offer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Offer entity.
     *
     * @param Offer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Offer $entity)
    {
        $form = $this->createForm(new OfferType(), $entity, array(
            'action' => $this->generateUrl('offer_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Offer entity.
     *
     */
    public function newAction()
    {
        $entity = new Offer();
        $form   = $this->createCreateForm($entity);

        return $this->render('EvaAdminBundle:Offer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Offer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Offer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offer entity.');
        }

        return $this->render('EvaAdminBundle:Offer:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing Offer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Offer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offer entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('EvaAdminBundle:Offer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Offer entity.
    *
    * @param Offer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Offer $entity)
    {
        $form = $this->createForm(new OfferType(), $entity, array(
            'action' => $this->generateUrl('offer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Offer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EvaAdminBundle:Offer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offer entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('offer'));
        }

        return $this->render('EvaAdminBundle:Offer:edit.html.twig', array(
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

        $entity = $em->getRepository('EvaAdminBundle:Offer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offer entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EvaAdminBundle:Offer:delete.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Offer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EvaAdminBundle:Offer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Offer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('offer'));
    }

    /**
     * Creates a form to delete a Offer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
