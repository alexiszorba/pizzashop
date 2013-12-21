<?php

namespace Alex\PizzaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Alex\PizzaBundle\Entity\Pizza;
use Alex\PizzaBundle\Form\PizzaType;

/**
 * Details controller.
 *
 */
class DeliveryController extends Controller
{

    /**
     * Lists all Pizza entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AlexPizzaBundle:Pizza')->findAllOrderedByPrice();
         if (!$entities) {
        throw $this->createNotFoundException('Unable to find pizzas entity. Add the pizzas to the database.');
    }

        return $this->render('AlexPizzaBundle:Delivery:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
}


