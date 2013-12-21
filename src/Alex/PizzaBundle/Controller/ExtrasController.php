<?php

namespace Alex\PizzaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Alex\PizzaBundle\Entity\Extras;
use Alex\PizzaBundle\Form\ExtrasType;

/**
 * Extras controller.
 *
 */
class ExtrasController extends Controller
{

    /**
     * Lists all Extras entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlexPizzaBundle:Extras')->findAll();

        return $this->render('AlexPizzaBundle:Extras:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Extras entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Extras();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('extras_show', array('id' => $entity->getId())));
        }

        return $this->render('AlexPizzaBundle:Extras:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Extras entity.
    *
    * @param Extras $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Extras $entity)
    {
        $form = $this->createForm(new ExtrasType(), $entity, array(
            'action' => $this->generateUrl('extras_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Extras entity.
     *
     */
    public function newAction()
    {
        $entity = new Extras();
        $form   = $this->createCreateForm($entity);

        return $this->render('AlexPizzaBundle:Extras:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Extras entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Extras')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Extras entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexPizzaBundle:Extras:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Extras entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Extras')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Extras entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexPizzaBundle:Extras:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Extras entity.
    *
    * @param Extras $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Extras $entity)
    {
        $form = $this->createForm(new ExtrasType(), $entity, array(
            'action' => $this->generateUrl('extras_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Extras entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Extras')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Extras entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('extras_edit', array('id' => $id)));
        }

        return $this->render('AlexPizzaBundle:Extras:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Extras entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AlexPizzaBundle:Extras')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Extras entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('extras'));
    }

    /**
     * Creates a form to delete a Extras entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('extras_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
