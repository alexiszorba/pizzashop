<?php

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\PizzaBundle\Entity\Kosten;

class LoadKostenData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em) {
        $kosten1 = new Kosten();
        $kosten1->setBedrag('5');
        $kosten1->setGratistarief('12');
        $kosten1->setPostnr($em->merge($this->getReference('Brugge')));

        $em->persist($kosten1);

        $kosten2 = new Kosten();
        $kosten2->setBedrag('7');
        $kosten2->setGratistarief('20');
        $kosten2->setPostnr($em->merge($this->getReference('Oostkamp'))); // Oostkamp, Hertsberge, Ruddervoorde, Waardamme

        $em->persist($kosten2);

        $kosten3 = new Kosten();
        $kosten3->setBedrag('7');
        $kosten3->setGratistarief('20');
        $kosten3->setPostnr($em->merge($this->getReference('Sint-Michiels'))); // Sint-Michiels , Sint-Andries

        $em->persist($kosten3);

        $kosten4 = new Kosten();
        $kosten4->setBedrag('10');
        $kosten4->setGratistarief('30');
        $kosten4->setPostnr($em->merge($this->getReference('Loppem'))); // Loppem, Veldegem, Zedelgem

        $em->persist($kosten4);

        $kosten5 = new Kosten();
        $kosten5->setBedrag('15');
        $kosten5->setGratistarief('50');
        $kosten5->setPostnr($em->merge($this->getReference('Aartrijke'))); // Aartrijke

        $em->persist($kosten5);

        $kosten6 = new Kosten();
        $kosten6->setBedrag('15');
        $kosten6->setGratistarief('50');
        $kosten6->setPostnr($em->merge($this->getReference('Knokke'))); // Knokke-Heist, Knokke , Westkapelle

        $em->persist($kosten6);

        $kosten7 = new Kosten();
        $kosten7->setBedrag('15');
        $kosten7->setGratistarief('50');
        $kosten7->setPostnr($em->merge($this->getReference('Ramskapelle'))); // Ramskapelle , Heist-aan-Zee

        $em->persist($kosten7);

        $kosten8 = new Kosten();
        $kosten8->setBedrag('7');
        $kosten8->setGratistarief('20');
        $kosten8->setPostnr($em->merge($this->getReference('Assebroek'))); // Assebroek  , Sint-Kruis 

        $em->persist($kosten8);

        $kosten9 = new Kosten();
        $kosten9->setBedrag('15');
        $kosten9->setGratistarief('50');
        $kosten9->setPostnr($em->merge($this->getReference('Damme'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten9);

        $kosten10 = new Kosten();
        $kosten10->setBedrag('15');
        $kosten10->setGratistarief('50');
        $kosten10->setPostnr($em->merge($this->getReference('Uitkerke'))); //Uitkerke, Blankenberge

        $em->persist($kosten10);

        $kosten11 = new Kosten();
        $kosten11->setBedrag('15');
        $kosten11->setGratistarief('50');
        $kosten11->setPostnr($em->merge($this->getReference('Houtave'))); // Houtave, Meetkerke, Nieuwmunster, Zuienkerke

        $em->persist($kosten11);

        $kosten12 = new Kosten();
        $kosten12->setBedrag('15');
        $kosten12->setGratistarief('30');
        $kosten12->setPostnr($em->merge($this->getReference('Dudzele'))); // Dudzele, Lissewege, Zeebrugge 

        $em->persist($kosten12);



        $em->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 4; // the order in which fixtures will be loaded Type loads before Pizza
    }

}
