<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use veterinaria\Bundle\veterinariaBundle\Entity\mvz;
use veterinaria\Bundle\veterinariaBundle\Form\mvzType;

/**
 * mvz controller.
 *
 */
class mvzController extends Controller
{

    /**
     * Lists all mvz entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('veterinariaBundle:mvz')->findAll();

        return $this->render('veterinariaBundle:mvz:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new mvz entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new mvz();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mvz_show', array('id' => $entity->getId())));
        }

        return $this->render('veterinariaBundle:mvz:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a mvz entity.
     *
     * @param mvz $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(mvz $entity)
    {
        $form = $this->createForm(new mvzType(), $entity, array(
            'action' => $this->generateUrl('mvz_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new mvz entity.
     *
     */
    public function newAction()
    {
        $entity = new mvz();
        $form   = $this->createCreateForm($entity);

        return $this->render('veterinariaBundle:mvz:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mvz entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:mvz')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find mvz entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:mvz:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mvz entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:mvz')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find mvz entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:mvz:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a mvz entity.
    *
    * @param mvz $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(mvz $entity)
    {
        $form = $this->createForm(new mvzType(), $entity, array(
            'action' => $this->generateUrl('mvz_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing mvz entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:mvz')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find mvz entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mvz_edit', array('id' => $id)));
        }

        return $this->render('veterinariaBundle:mvz:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a mvz entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('veterinariaBundle:mvz')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find mvz entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mvz'));
    }

    /**
     * Creates a form to delete a mvz entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mvz_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
