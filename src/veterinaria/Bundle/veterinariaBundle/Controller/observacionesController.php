<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use veterinaria\Bundle\veterinariaBundle\Entity\observaciones;
use veterinaria\Bundle\veterinariaBundle\Form\observacionesType;

/**
 * observaciones controller.
 *
 */
class observacionesController extends Controller
{

    /**
     * Lists all observaciones entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('veterinariaBundle:observaciones')->findAll();

        return $this->render('veterinariaBundle:observaciones:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new observaciones entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new observaciones();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('observaciones_show', array('id' => $entity->getId())));
        }

        return $this->render('veterinariaBundle:observaciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a observaciones entity.
     *
     * @param observaciones $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(observaciones $entity)
    {
        $form = $this->createForm(new observacionesType(), $entity, array(
            'action' => $this->generateUrl('observaciones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new observaciones entity.
     *
     */
    public function newAction()
    {
        $entity = new observaciones();
        $form   = $this->createCreateForm($entity);

        return $this->render('veterinariaBundle:observaciones:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a observaciones entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:observaciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find observaciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:observaciones:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing observaciones entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:observaciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find observaciones entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:observaciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a observaciones entity.
    *
    * @param observaciones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(observaciones $entity)
    {
        $form = $this->createForm(new observacionesType(), $entity, array(
            'action' => $this->generateUrl('observaciones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing observaciones entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:observaciones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find observaciones entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('observaciones_edit', array('id' => $id)));
        }

        return $this->render('veterinariaBundle:observaciones:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a observaciones entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('veterinariaBundle:observaciones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find observaciones entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('observaciones'));
    }

    /**
     * Creates a form to delete a observaciones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('observaciones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
