<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use veterinaria\Bundle\veterinariaBundle\Entity\mascota;
use veterinaria\Bundle\veterinariaBundle\Form\mascotaType;

/**
 * mascota controller.
 *
 */
class mascotaController extends Controller
{

    /**
     * Lists all mascota entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('veterinariaBundle:mascota')->findAll();

        return $this->render('veterinariaBundle:mascota:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new mascota entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new mascota();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mascota_show', array('id' => $entity->getId())));
        }

        return $this->render('veterinariaBundle:mascota:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a mascota entity.
     *
     * @param mascota $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(mascota $entity)
    {
        $form = $this->createForm(new mascotaType(), $entity, array(
            'action' => $this->generateUrl('mascota_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new mascota entity.
     *
     */
    public function newAction()
    {
        $entity = new mascota();
        $form   = $this->createCreateForm($entity);

        return $this->render('veterinariaBundle:mascota:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mascota entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find mascota entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:mascota:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mascota entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find mascota entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:mascota:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a mascota entity.
    *
    * @param mascota $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(mascota $entity)
    {
        $form = $this->createForm(new mascotaType(), $entity, array(
            'action' => $this->generateUrl('mascota_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing mascota entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find mascota entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mascota_edit', array('id' => $id)));
        }

        return $this->render('veterinariaBundle:mascota:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a mascota entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('veterinariaBundle:mascota')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find mascota entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mascota'));
    }

    /**
     * Creates a form to delete a mascota entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mascota_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
