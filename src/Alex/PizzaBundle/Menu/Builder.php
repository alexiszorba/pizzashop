<?php

// src/Alex/PizzaBundle/Menu/Builder.php

namespace Alex\PizzaBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'pizza'));
        $menu->addChild('Over Ons', array('route' => 'bestelling'));
        $menu->addChild('Delivery', array('route' => 'pizza'));
        $menu->addChild('Voorwaarden', array('route' => 'pizza'));
        $menu->addChild('Contact', array('route' => 'pizza'));
        // ... add more children

        return $menu;
    }

}
