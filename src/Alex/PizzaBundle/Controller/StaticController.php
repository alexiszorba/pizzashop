<?php

namespace Alex\PizzaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Static controller.
 *
 */
class StaticController extends Controller
{
    /**
     * Return home page
     *
     */
    public function HomeAction()
    {

        return $this->render('AlexPizzaBundle:Static:home.html.twig');
    }    

    /**
     * Return overons page
     *
     */
    public function OveronsAction()
    {

        return $this->render('AlexPizzaBundle:Static:overons.html.twig');
    }
    
    /**
     * Return voorwaarden page
     *
     */
    public function VoorwaardenAction()
    {

        return $this->render('AlexPizzaBundle:Static:voorwaarden.html.twig');
    }
    
    /**
     * Return contact page
     *
     */
    public function ContactAction()
    {

        return $this->render('AlexPizzaBundle:Static:contact.html.twig');
    }
    
    
    
}
