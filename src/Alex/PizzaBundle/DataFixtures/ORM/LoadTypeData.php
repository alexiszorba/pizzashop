<?php

// src/Alex/PizzaBundle/DataFixtures/ORM/LoadTypeData.php

namespace Alex\PizzaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\PizzaBundle\Entity\Type;

class LoadTypeData extends AbstractFixture implements OrderedFixtureInterface 
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $type1 = new Type();
        $type1->setOmschrijving('Pan');
        $type1->setExtrakost('0');

        $em->persist($type1);
        
        $type2 = new Type();
        $type2->setOmschrijving('Classic');
        $type2->setExtrakost('0');

        $em->persist($type2);
        
        $type3 = new Type();
        $type3->setOmschrijving('Cheezy Crust');
        $type3->setExtrakost('1.5');

        $em->persist($type3);
        
              
        $em->flush();
        
        
    }
     /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded Type loads before Pizza
    }
}