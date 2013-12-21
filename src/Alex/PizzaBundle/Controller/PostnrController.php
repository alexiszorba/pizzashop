<?php

namespace Alex\PizzaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Alex\PizzaBundle\Entity\Postnr;
use Alex\PizzaBundle\Form\PostnrType;

/**
 * Postnr controller.
 *
 */
class PostnrController extends Controller
{

    /**
     * Lists all Postnr entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlexPizzaBundle:Postnr')->findAllOrderedByPostnr();

        return $this->render('AlexPizzaBundle:Postnr:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Postnr entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Postnr();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('postnr_show', array('id' => $entity->getId())));
        }

        return $this->render('AlexPizzaBundle:Postnr:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Postnr entity.
    *
    * @param Postnr $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Postnr $entity)
    {
        $form = $this->createForm(new PostnrType(), $entity, array(
            'action' => $this->generateUrl('postnr_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Postnr entity.
     *
     */
    public function newAction()
    {
        $entity = new Postnr();
        $form   = $this->createCreateForm($entity);

        return $this->render('AlexPizzaBundle:Postnr:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Postnr entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Postnr')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postnr entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexPizzaBundle:Postnr:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Postnr entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Postnr')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postnr entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AlexPizzaBundle:Postnr:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Postnr entity.
    *
    * @param Postnr $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Postnr $entity)
    {
        $form = $this->createForm(new PostnrType(), $entity, array(
            'action' => $this->generateUrl('postnr_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Postnr entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AlexPizzaBundle:Postnr')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postnr entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('postnr_edit', array('id' => $id)));
        }

        return $this->render('AlexPizzaBundle:Postnr:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Postnr entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AlexPizzaBundle:Postnr')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Postnr entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('postnr'));
    }

    /**
     * Creates a form to delete a Postnr entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('postnr_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
