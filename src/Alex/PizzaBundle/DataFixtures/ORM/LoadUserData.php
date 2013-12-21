<?php

// src/Alex/PizzaBundle/DataFixtures/ORM/LoadStandardUserData.php

namespace Alex\PizzaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Alex\PizzaBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}loaduserdata
     * 
     */
    public function load(ObjectManager $em) {
        $user = new User();
        $user->setUsername('admin');
        $user->setPlainPassword('admin');

        $user->setName('Alex');
        $user->setSurname('Perselis');
        $user->setAddress('Hoefijzerlaan 59 bus 2');
        $user->setPostnr($this->getReference('Brugge'));        
        $user->setTelnr('0492055925');
        $user->setEmail('test@test.com');
        $user->setEnabled('true');
        $user->setExpired('0');
        $user->setRoles(array('ROLE_SUPER_ADMIN'));


        $em->persist($user);
        
        $user1 = new User();
        $user1->setUsername('test');
        $user1->setPlainPassword('test');

        $user1->setName('Probeer');
        $user1->setSurname('Tester');
        $user1->setAddress('Test 1 bus 1');
        $user1->setPostnr($this->getReference('Brugge'));        
        $user1->setTelnr('0411011111');
        $user1->setEmail('test1@test.com');
        $user1->setEnabled('true');
        $user1->setExpired('0');
        $user1->setRoles(array('ROLE_USER'));


        $em->persist($user1);

        $em->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 6; // the order in which fixtures will be loaded Type loads before Pizza
    }

}