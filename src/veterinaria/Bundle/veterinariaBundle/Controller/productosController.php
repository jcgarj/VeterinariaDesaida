<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use veterinaria\Bundle\veterinariaBundle\Entity\productos;
use veterinaria\Bundle\veterinariaBundle\Form\productosType;

/**
 * productos controller.
 *
 */
class productosController extends Controller
{

    /**
     * Lists all productos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('veterinariaBundle:productos')->findAll();

        return $this->render('veterinariaBundle:productos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new productos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new productos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('productos_show', array('id' => $entity->getId())));
        }

        return $this->render('veterinariaBundle:productos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a productos entity.
     *
     * @param productos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(productos $entity)
    {
        $form = $this->createForm(new productosType(), $entity, array(
            'action' => $this->generateUrl('productos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new productos entity.
     *
     */
    public function newAction()
    {
        $entity = new productos();
        $form   = $this->createCreateForm($entity);

        return $this->render('veterinariaBundle:productos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a productos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:productos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing productos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find productos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('veterinariaBundle:productos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a productos entity.
    *
    * @param productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(productos $entity)
    {
        $form = $this->createForm(new productosType(), $entity, array(
            'action' => $this->generateUrl('productos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing productos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('veterinariaBundle:productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('productos_edit', array('id' => $id)));
        }

        return $this->render('veterinariaBundle:productos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a productos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('veterinariaBundle:productos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find productos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('productos'));
    }

    /**
     * Creates a form to delete a productos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
