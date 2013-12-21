<?php

// src/Alex/PizzaBundle/DataFixtures/ORM/LoadPostnrData.php

namespace Alex\PizzaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\PizzaBundle\Entity\Postnr;

class LoadPostnrData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em) {
        $postnr1 = new Postnr();
        $postnr1->setPostnr('8000');
        $postnr1->setGemeente('Brugge');

        $em->persist($postnr1);

        $postnr2 = new Postnr();
        $postnr2->setPostnr('8000');
        $postnr2->setGemeente('Koolkerke (Brugge)');

        $em->persist($postnr2);

        $postnr3 = new Postnr();
        $postnr3->setPostnr('8020');
        $postnr3->setGemeente('Hertsberge');

        $em->persist($postnr3);

        $postnr4 = new Postnr();
        $postnr4->setPostnr('8020');
        $postnr4->setGemeente('Oostkamp');

        $em->persist($postnr4);

        $postnr5 = new Postnr();
        $postnr5->setPostnr('8020');
        $postnr5->setGemeente('Ruddervoorde');

        $em->persist($postnr5);

        $postnr6 = new Postnr();
        $postnr6->setPostnr('8020');
        $postnr6->setGemeente('Waardamme');

        $em->persist($postnr6);

        $postnr7 = new Postnr();
        $postnr7->setPostnr('8200');
        $postnr7->setGemeente('Sint-Andries (Brugge)');

        $em->persist($postnr7);

        $postnr8 = new Postnr();
        $postnr8->setPostnr('8200');
        $postnr8->setGemeente('Sint-Michiels (Brugge)');

        $em->persist($postnr8);

        $postnr9 = new Postnr();
        $postnr9->setPostnr('8210');
        $postnr9->setGemeente('Loppem');

        $em->persist($postnr9);

        $postnr10 = new Postnr();
        $postnr10->setPostnr('8210');
        $postnr10->setGemeente('Veldegem');

        $em->persist($postnr10);

        $postnr11 = new Postnr();
        $postnr11->setPostnr('8210');
        $postnr11->setGemeente('Zedelgem');

        $em->persist($postnr11);

        $postnr12 = new Postnr();
        $postnr12->setPostnr('8211');
        $postnr12->setGemeente('Aartrijke');

        $em->persist($postnr12);

        $postnr13 = new Postnr();
        $postnr13->setPostnr('8300');
        $postnr13->setGemeente('Knokke');

        $em->persist($postnr13);

        $postnr14 = new Postnr();
        $postnr14->setPostnr('8300');
        $postnr14->setGemeente('Knokke-Heist');

        $em->persist($postnr14);

        $postnr15 = new Postnr();
        $postnr15->setPostnr('8300');
        $postnr15->setGemeente('Westkapelle');

        $em->persist($postnr15);

        $postnr16 = new Postnr();
        $postnr16->setPostnr('8301');
        $postnr16->setGemeente('Heist-aan-Zee');

        $em->persist($postnr16);

        $postnr17 = new Postnr();
        $postnr17->setPostnr('8301');
        $postnr17->setGemeente('Ramskapelle (Knokke-Heist)');

        $em->persist($postnr17);

        $postnr18 = new Postnr();
        $postnr18->setPostnr('8310');
        $postnr18->setGemeente('Assebroek (Brugge)');

        $em->persist($postnr18);

        $postnr19 = new Postnr();
        $postnr19->setPostnr('8310');
        $postnr19->setGemeente('Sint-Kruis (Brugge)');

        $em->persist($postnr19);

        $postnr20 = new Postnr();
        $postnr20->setPostnr('8340');
        $postnr20->setGemeente('Damme');

        $em->persist($postnr20);

        $postnr21 = new Postnr();
        $postnr21->setPostnr('8340');
        $postnr21->setGemeente('Hoeke');

        $em->persist($postnr21);

        $postnr22 = new Postnr();
        $postnr22->setPostnr('8340');
        $postnr22->setGemeente('Lapscheure');

        $em->persist($postnr22);

        $postnr23 = new Postnr();
        $postnr23->setPostnr('8340');
        $postnr23->setGemeente('Moerkerke');

        $em->persist($postnr23);

        $postnr24 = new Postnr();
        $postnr24->setPostnr('8340');
        $postnr24->setGemeente('Oostkerke (Damme)');

        $em->persist($postnr24);

        $postnr25 = new Postnr();
        $postnr25->setPostnr('8340');
        $postnr25->setGemeente('Sijsele');

        $em->persist($postnr25);

        $postnr26 = new Postnr();
        $postnr26->setPostnr('8370');
        $postnr26->setGemeente('Blankenberge');

        $em->persist($postnr26);

        $postnr27 = new Postnr();
        $postnr27->setPostnr('8370');
        $postnr27->setGemeente('Uitkerke');

        $em->persist($postnr27);

        $postnr28 = new Postnr();
        $postnr28->setPostnr('8377');
        $postnr28->setGemeente('Houtave');

        $em->persist($postnr28);

        $postnr29 = new Postnr();
        $postnr29->setPostnr('8377');
        $postnr29->setGemeente('Meetkerke');

        $em->persist($postnr29);

        $postnr30 = new Postnr();
        $postnr30->setPostnr('8377');
        $postnr30->setGemeente('Nieuwmunster');

        $em->persist($postnr30);

        $postnr31 = new Postnr();
        $postnr31->setPostnr('8377');
        $postnr31->setGemeente('Zuienkerke');

        $em->persist($postnr31);

        $postnr32 = new Postnr();
        $postnr32->setPostnr('8380');
        $postnr32->setGemeente('Dudzele (Brugge)');

        $em->persist($postnr32);

        $postnr33 = new Postnr();
        $postnr33->setPostnr('8380');
        $postnr33->setGemeente('Lissewege (Brugge)');

        $em->persist($postnr33);

        $postnr34 = new Postnr();
        $postnr34->setPostnr('8380');
        $postnr34->setGemeente('Zeebrugge (Brugge)');

        $em->persist($postnr34);

        $em->flush();

        $this->addReference('Brugge', $postnr1);
        $this->addReference('Koolkerke', $postnr2);
        $this->addReference('Hertsberge', $postnr3);
        $this->addReference('Oostkamp', $postnr4);
        $this->addReference('Ruddervoorde', $postnr5);
        $this->addReference('Waardamme', $postnr6);
        $this->addReference('Sint-Andries', $postnr7);
        $this->addReference('Sint-Michiels', $postnr8);
        $this->addReference('Loppem', $postnr9);
        $this->addReference('Veldegem', $postnr10);
        $this->addReference('Zedelgem', $postnr11);
        $this->addReference('Aartrijke', $postnr12);
        $this->addReference('Knokke', $postnr13);
        $this->addReference('Knokke-Heist', $postnr14);
        $this->addReference('Westkapelle', $postnr15);
        $this->addReference('Heist-aan-Zee', $postnr16);
        $this->addReference('Ramskapelle', $postnr17);
        $this->addReference('Assebroek', $postnr18);
        $this->addReference('Sint-Kruis', $postnr19);
        $this->addReference('Damme', $postnr20);
        $this->addReference('Hoeke', $postnr21);
        $this->addReference('Lapscheure', $postnr22);
        $this->addReference('Moerkerke', $postnr23);
        $this->addReference('Oostkerke', $postnr24);
        $this->addReference('Sijsele', $postnr25);
        $this->addReference('Blankenberge', $postnr26);
        $this->addReference('Uitkerke', $postnr27);
        $this->addReference('Houtave', $postnr28);
        $this->addReference('Meetkerke', $postnr29);
        $this->addReference('Nieuwmunster', $postnr30);
        $this->addReference('Zuienkerke', $postnr31);
        $this->addReference('Dudzele', $postnr32);
        $this->addReference('Lissewege', $postnr33);
        $this->addReference('Zeebrugge', $postnr34);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 3; // the order in which fixtures will be loaded Size loads before Pizza
    }

}