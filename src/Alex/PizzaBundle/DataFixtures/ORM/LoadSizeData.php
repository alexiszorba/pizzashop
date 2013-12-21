<?php

// src/Alex/PizzaBundle/DataFixtures/ORM/LoadSizeData.php

namespace Alex\PizzaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\PizzaBundle\Entity\Size;

class LoadSizeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $size1 = new Size();
        $size1->setOmschrijving('Small');
        $size1->setExtrakost('0');

        $em->persist($size1);
        
        $size2 = new Size();
        $size2->setOmschrijving('Medium');
        $size2->setExtrakost('2');

        $em->persist($size2);
        
        $size3 = new Size();
        $size3->setOmschrijving('Large');
        $size3->setExtrakost('4');

        $em->persist($size3);
        
              
        $em->flush();
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded Size loads before Pizza
    }
}