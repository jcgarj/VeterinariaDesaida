<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use veterinaria\Bundle\veterinariaBundle\Entity\medicamentos;
use veterinaria\Bundle\veterinariaBundle\Form\medicamentosType;

/**
 * medicamentos controller.
 *
 */
class medicamentosController extends Controller
{

    /**
     * Lists all medicamentos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('veterinariaBundle:medicamentos')->findAll();

        return $this->render('veterinariaBundle:medicamentos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new medicamentos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new medicamentos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('medicamentos_show', array('id' => $entity->getId())));
        }

        return $this->render('veterinariaBundle:medicamentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a medicamentos entity.
     *
     * @param medicamentos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(medicamentos $entity)
    {
        $form = $this->createForm(new medicamentosType(), $entity, array(
            'action' => $this->generateUrl('medicamentos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new medicamentos entity.
     *
     */
    public function newAction()
    {
        $entity = new medicamentos();
        $form   = $this->createCreateForm($entity);

        return $this->render('veterinariaBundle:medicamentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a medicamentos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:medicamentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find medicamentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:medicamentos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing medicamentos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:medicamentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find medicamentos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:medicamentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a medicamentos entity.
    *
    * @param medicamentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(medicamentos $entity)
    {
        $form = $this->createForm(new medicamentosType(), $entity, array(
            'action' => $this->generateUrl('medicamentos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing medicamentos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:medicamentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find medicamentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('medicamentos_edit', array('id' => $id)));
        }

        return $this->render('veterinariaBundle:medicamentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a medicamentos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('veterinariaBundle:medicamentos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find medicamentos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('medicamentos'));
    }

    /**
     * Creates a form to delete a medicamentos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('medicamentos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
