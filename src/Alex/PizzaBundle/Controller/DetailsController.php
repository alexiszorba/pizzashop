<?php

namespace Alex\PizzaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Alex\PizzaBundle\Entity\Details;
use Alex\PizzaBundle\Form\DetailsType;

/**
 * Details controller.
 *
 */
class DetailsController extends Controller
{

    /**
     * Lists all Details entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlexPizzaBundle:Details')->findAll();

        return $this->render('AlexPizzaBundle:Details:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Details entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Details();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('details_show', array('id' => $entity->getId())));
        }

        return $this->render('AlexPizzaBundle:Details:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Details entity.
    *
    * @param Details $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Details $entity)
    {
        $form = $this->createForm(new DetailsType(), $entity, array(
            'action' => $this->generateUrl('details_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Details entity.
     *
     */
    public function newAction()
    {
        $entity = new Details();
        $form   = $this->createCreateForm($entity);

        return $this->render('AlexPizzaBundle:Details:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Details entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Details')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Details entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexPizzaBundle:Details:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Details entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Details')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Details entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexPizzaBundle:Details:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Details entity.
    *
    * @param Details $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Details $entity)
    {
        $form = $this->createForm(new DetailsType(), $entity, array(
            'action' => $this->generateUrl('details_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Details entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Details')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Details entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('details_edit', array('id' => $id)));
        }

        return $this->render('AlexPizzaBundle:Details:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Details entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AlexPizzaBundle:Details')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Details entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('details'));
    }

    /**
     * Creates a form to delete a Details entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('details_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
