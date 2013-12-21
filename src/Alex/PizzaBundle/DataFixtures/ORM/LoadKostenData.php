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
        $kosten2->setBedrag('5');
        $kosten2->setGratistarief('12');
        $kosten2->setPostnr($em->merge($this->getReference('Koolkerke')));

        $em->persist($kosten2);


        $kosten3 = new Kosten();
        $kosten3->setBedrag('7');
        $kosten3->setGratistarief('20');
        $kosten3->setPostnr($em->merge($this->getReference('Oostkamp'))); // Oostkamp, Hertsberge, Ruddervoorde, Waardamme

        $em->persist($kosten3);

        $kosten4 = new Kosten();
        $kosten4->setBedrag('7');
        $kosten4->setGratistarief('20');
        $kosten4->setPostnr($em->merge($this->getReference('Hertsberge'))); // Oostkamp, Hertsberge, Ruddervoorde, Waardamme

        $em->persist($kosten4);

        $kosten5 = new Kosten();
        $kosten5->setBedrag('7');
        $kosten5->setGratistarief('20');
        $kosten5->setPostnr($em->merge($this->getReference('Ruddervoorde'))); // Oostkamp, Hertsberge, Ruddervoorde, Waardamme

        $em->persist($kosten5);

        $kosten6 = new Kosten();
        $kosten6->setBedrag('7');
        $kosten6->setGratistarief('20');
        $kosten6->setPostnr($em->merge($this->getReference('Waardamme'))); // Oostkamp, Hertsberge, Ruddervoorde, Waardamme

        $em->persist($kosten6);

        $kosten7 = new Kosten();
        $kosten7->setBedrag('7');
        $kosten7->setGratistarief('20');
        $kosten7->setPostnr($em->merge($this->getReference('Sint-Michiels'))); // Sint-Michiels , Sint-Andries

        $em->persist($kosten7);

        $kosten8 = new Kosten();
        $kosten8->setBedrag('7');
        $kosten8->setGratistarief('20');
        $kosten8->setPostnr($em->merge($this->getReference('Sint-Andries'))); // Sint-Michiels , Sint-Andries

        $em->persist($kosten8);
        
        $kosten9 = new Kosten();
        $kosten9->setBedrag('10');
        $kosten9->setGratistarief('30');
        $kosten9->setPostnr($em->merge($this->getReference('Loppem'))); // Loppem, Veldegem, Zedelgem

        $em->persist($kosten9);

        $kosten10 = new Kosten();
        $kosten10->setBedrag('10');
        $kosten10->setGratistarief('30');
        $kosten10->setPostnr($em->merge($this->getReference('Veldegem'))); // Loppem, Veldegem, Zedelgem

        $em->persist($kosten10);

        $kosten11 = new Kosten();
        $kosten11->setBedrag('10');
        $kosten11->setGratistarief('30');
        $kosten11->setPostnr($em->merge($this->getReference('Zedelgem'))); // Loppem, Veldegem, Zedelgem

        $em->persist($kosten11);

        $kosten12 = new Kosten();
        $kosten12->setBedrag('15');
        $kosten12->setGratistarief('50');
        $kosten12->setPostnr($em->merge($this->getReference('Aartrijke'))); // Aartrijke

        $em->persist($kosten12);

        $kosten13 = new Kosten();
        $kosten13->setBedrag('15');
        $kosten13->setGratistarief('50');
        $kosten13->setPostnr($em->merge($this->getReference('Knokke-Heist'))); // Knokke-Heist, Knokke , Westkapelle

        $em->persist($kosten13);

        $kosten14 = new Kosten();
        $kosten14->setBedrag('15');
        $kosten14->setGratistarief('50');
        $kosten14->setPostnr($em->merge($this->getReference('Knokke'))); // Knokke-Heist, Knokke , Westkapelle

        $em->persist($kosten14);

        $kosten15 = new Kosten();
        $kosten15->setBedrag('15');
        $kosten15->setGratistarief('50');
        $kosten15->setPostnr($em->merge($this->getReference('Westkapelle'))); // Knokke-Heist, Knokke , Westkapelle

        $em->persist($kosten15);


        $kosten16 = new Kosten();
        $kosten16->setBedrag('15');
        $kosten16->setGratistarief('50');
        $kosten16->setPostnr($em->merge($this->getReference('Ramskapelle'))); // Ramskapelle , Heist-aan-Zee

        $em->persist($kosten16);

        $kosten17 = new Kosten();
        $kosten17->setBedrag('15');
        $kosten17->setGratistarief('50');
        $kosten17->setPostnr($em->merge($this->getReference('Heist-aan-Zee'))); // Ramskapelle , Heist-aan-Zee

        $em->persist($kosten17);

        $kosten18 = new Kosten();
        $kosten18->setBedrag('7');
        $kosten18->setGratistarief('20');
        $kosten18->setPostnr($em->merge($this->getReference('Assebroek'))); // Assebroek  , Sint-Kruis 

        $em->persist($kosten18);

        $kosten19 = new Kosten();
        $kosten19->setBedrag('7');
        $kosten19->setGratistarief('20');
        $kosten19->setPostnr($em->merge($this->getReference('Sint-Kruis'))); // Assebroek  , Sint-Kruis 

        $em->persist($kosten19);

        $kosten20 = new Kosten();
        $kosten20->setBedrag('15');
        $kosten20->setGratistarief('50');
        $kosten20->setPostnr($em->merge($this->getReference('Damme'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten20);

        $kosten21 = new Kosten();
        $kosten21->setBedrag('15');
        $kosten21->setGratistarief('50');
        $kosten21->setPostnr($em->merge($this->getReference('Hoeke'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten21);

        $kosten22 = new Kosten();
        $kosten22->setBedrag('15');
        $kosten22->setGratistarief('50');
        $kosten22->setPostnr($em->merge($this->getReference('Lapscheure'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten22);

        $kosten23 = new Kosten();
        $kosten23->setBedrag('15');
        $kosten23->setGratistarief('50');
        $kosten23->setPostnr($em->merge($this->getReference('Moerkerke'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten23);

        $kosten24 = new Kosten();
        $kosten24->setBedrag('15');
        $kosten24->setGratistarief('50');
        $kosten24->setPostnr($em->merge($this->getReference('Oostkerke'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten24);

        $kosten25 = new Kosten();
        $kosten25->setBedrag('15');
        $kosten25->setGratistarief('50');
        $kosten25->setPostnr($em->merge($this->getReference('Sijsele'))); // Damme  , Hoeke ,Lapscheure , Moerkerke, Oostkerke ,Sijsele

        $em->persist($kosten25);

        $kosten26 = new Kosten();
        $kosten26->setBedrag('15');
        $kosten26->setGratistarief('50');
        $kosten26->setPostnr($em->merge($this->getReference('Uitkerke'))); //Uitkerke, Blankenberge

        $em->persist($kosten26);

        $kosten27 = new Kosten();
        $kosten27->setBedrag('15');
        $kosten27->setGratistarief('50');
        $kosten27->setPostnr($em->merge($this->getReference('Blankenberge'))); //Uitkerke, Blankenberge

        $em->persist($kosten27);

        $kosten28 = new Kosten();
        $kosten28->setBedrag('15');
        $kosten28->setGratistarief('50');
        $kosten28->setPostnr($em->merge($this->getReference('Houtave'))); // Houtave, Meetkerke, Nieuwmunster, Zuienkerke

        $em->persist($kosten28);

        $kosten29 = new Kosten();
        $kosten29->setBedrag('15');
        $kosten29->setGratistarief('50');
        $kosten29->setPostnr($em->merge($this->getReference('Meetkerke'))); // Houtave, Meetkerke, Nieuwmunster, Zuienkerke

        $em->persist($kosten29);

        $kosten30 = new Kosten();
        $kosten30->setBedrag('15');
        $kosten30->setGratistarief('50');
        $kosten30->setPostnr($em->merge($this->getReference('Nieuwmunster'))); // Houtave, Meetkerke, Nieuwmunster, Zuienkerke

        $em->persist($kosten30);

        $kosten31 = new Kosten();
        $kosten31->setBedrag('15');
        $kosten31->setGratistarief('50');
        $kosten31->setPostnr($em->merge($this->getReference('Zuienkerke'))); // Houtave, Meetkerke, Nieuwmunster, Zuienkerke

        $em->persist($kosten31);

        $kosten32 = new Kosten();
        $kosten32->setBedrag('15');
        $kosten32->setGratistarief('30');
        $kosten32->setPostnr($em->merge($this->getReference('Dudzele'))); // Dudzele, Lissewege, Zeebrugge 

        $em->persist($kosten32);
        
        $kosten33 = new Kosten();
        $kosten33->setBedrag('15');
        $kosten33->setGratistarief('30');
        $kosten33->setPostnr($em->merge($this->getReference('Lissewege'))); // Dudzele, Lissewege, Zeebrugge 

        $em->persist($kosten33);
        
        $kosten34 = new Kosten();
        $kosten34->setBedrag('15');
        $kosten34->setGratistarief('30');
        $kosten34->setPostnr($em->merge($this->getReference('Zeebrugge'))); // Dudzele, Lissewege, Zeebrugge 

        $em->persist($kosten34);



        $em->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 4; // the order in which fixtures will be loaded Type loads before Pizza
    }

}
