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

        $em->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 6; // the order in which fixtures will be loaded Type loads before Pizza
    }

}