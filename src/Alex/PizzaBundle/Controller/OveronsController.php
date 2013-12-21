<?php

namespace Alex\PizzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OveronsController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('AlexPizzaBundle:Overons:index.html.twig');
    }
}

