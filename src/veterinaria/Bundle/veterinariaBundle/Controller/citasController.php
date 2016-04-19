<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use veterinaria\Bundle\veterinariaBundle\Entity\citas;
use veterinaria\Bundle\veterinariaBundle\Form\citasType;

/**
 * citas controller.
 *
 */
class citasController extends Controller
{

    /**
     * Lists all citas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('veterinariaBundle:citas')->findAll();

        return $this->render('veterinariaBundle:citas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new citas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new citas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('citas_show', array('id' => $entity->getId())));
        }

        return $this->render('veterinariaBundle:citas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a citas entity.
     *
     * @param citas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(citas $entity)
    {
        $form = $this->createForm(new citasType(), $entity, array(
            'action' => $this->generateUrl('citas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new citas entity.
     *
     */
    public function newAction()
    {
        $entity = new citas();
        $form   = $this->createCreateForm($entity);

        return $this->render('veterinariaBundle:citas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a citas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:citas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find citas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:citas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing citas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:citas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find citas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:citas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a citas entity.
    *
    * @param citas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(citas $entity)
    {
        $form = $this->createForm(new citasType(), $entity, array(
            'action' => $this->generateUrl('citas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing citas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:citas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find citas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('citas_edit', array('id' => $id)));
        }

        return $this->render('veterinariaBundle:citas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a citas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('veterinariaBundle:citas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find citas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('citas'));
    }

    /**
     * Creates a form to delete a citas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('citas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
