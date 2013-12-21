<?php

// src/Alex/PizzaBundle/Menu/Builder.php

namespace Alex\PizzaBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'home'));
        $menu->addChild('Over Ons', array('route' => 'overons'));
        $menu->addChild('Delivery', array('route' => 'delivery'));
        $menu->addChild('Voorwaarden', array('route' => 'voorwaarden'));
        $menu->addChild('Contact', array('route' => 'contact'));
        // ... add more children

        return $menu;
    }

}
