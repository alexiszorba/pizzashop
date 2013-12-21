<?php

// src/Alex/PizzaBundle/DataFixtures/ORM/LoadExtrasData.php

namespace Alex\PizzaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\PizzaBundle\Entity\Extras;

class LoadExtrasData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $extras1 = new Extras();
        $extras1->setOmschrijving('Ui');
        $extras1->setKost('1.75');

        $em->persist($extras1);
        
        $extras2 = new Extras();
        $extras2->setOmschrijving('Tomatenblokjes');
        $extras2->setKost('1.75');

        $em->persist($extras2);
        
        $extras3 = new Extras();
        $extras3->setOmschrijving('Kappertjes');
        $extras3->setKost('1.75');

        $em->persist($extras3);
        
        $extras4 = new Extras();
        $extras4->setOmschrijving('Ananas');
        $extras4->setKost('1.75');

        $em->persist($extras4);
        
        $extras5 = new Extras();
        $extras5->setOmschrijving('Mozzarella');
        $extras5->setKost('1.75');

        $em->persist($extras5);
        
        $extras6 = new Extras();
        $extras6->setOmschrijving('Grimbergen Abdijkaas');
        $extras6->setKost('1.75');

        $em->persist($extras6);
        
        $extras7 = new Extras();
        $extras7->setOmschrijving('Feta');
        $extras7->setKost('1.75');

        $em->persist($extras7);
        
        $extras8 = new Extras();
        $extras8->setOmschrijving('Ansjovis');
        $extras8->setKost('1.75');

        $em->persist($extras8);
        
        $extras9 = new Extras();
        $extras9->setOmschrijving('Tonijn');
        $extras9->setKost('1.75');

        $em->persist($extras9);
        
        $extras10 = new Extras();
        $extras10->setOmschrijving('Merguez');
        $extras10->setKost('1.75');

        $em->persist($extras10);
        
        $extras11 = new Extras();
        $extras11->setOmschrijving('Looksaus');
        $extras11->setKost('1.75');

        $em->persist($extras11);
        
        $extras12 = new Extras();
        $extras12->setOmschrijving('Zachte currysaus');
        $extras12->setKost('1.75');

        $em->persist($extras12);
        
        $extras13 = new Extras();
        $extras13->setOmschrijving('Pepersaus');
        $extras13->setKost('1.75');

        $em->persist($extras13);
        
        $extras14 = new Extras();
        $extras14->setOmschrijving('Kip Kebab');
        $extras14->setKost('1.75');

        $em->persist($extras14);
        
        $extras15 = new Extras();
        $extras15->setOmschrijving('Varkensvlees');
        $extras15->setKost('1.75');

        $em->persist($extras15);
        
        $extras16 = new Extras();
        $extras16->setOmschrijving('Ham');
        $extras16->setKost('1.75');

        $em->persist($extras16);
        
        $extras17 = new Extras();
        $extras17->setOmschrijving('Pepperoni');
        $extras17->setKost('1.75');

        $em->persist($extras17);
        
        $extras18 = new Extras();
        $extras18->setOmschrijving('Kruidig rundvlees');
        $extras18->setKost('1.75');

        $em->persist($extras18);
        
        $extras19 = new Extras();
        $extras19->setOmschrijving('Gegrilde kip');
        $extras19->setKost('1.75');

        $em->persist($extras19);
        
        $extras20 = new Extras();
        $extras20->setOmschrijving('Gerookte spekblokjes');
        $extras20->setKost('1.75');

        $em->persist($extras20);
        
        $extras21 = new Extras();
        $extras21->setOmschrijving('Gerookte baconreepjes');
        $extras21->setKost('1.75');

        $em->persist($extras21);
        
         
        $extras22 = new Extras();
        $extras22->setOmschrijving('Italiaanse PARMA ham');
        $extras22->setKost('1.75');

        $em->persist($extras22);
        
        $extras23 = new Extras();
        $extras23->setOmschrijving('Champignons');
        $extras23->setKost('1.75');

        $em->persist($extras23);
        
        
        $extras24 = new Extras();
        $extras24->setOmschrijving('Groene paprika');
        $extras24->setKost('1.75');

        $em->persist($extras24);
        
        $extras25 = new Extras();
        $extras25->setOmschrijving('Zwarte olijven');
        $extras25->setKost('1.75');

        $em->persist($extras25);
        
        $extras26 = new Extras();
        $extras26->setOmschrijving('Chilipepers');
        $extras26->setKost('1.75');

        $em->persist($extras26);
        
        
        $em->flush();
        
        $this->addReference('extras-Ui', $extras1);
        $this->addReference('extras-Tomatenblokjes', $extras2);
        $this->addReference('extras-Kappertjes', $extras3);
        $this->addReference('extras-Ananas', $extras4);
        $this->addReference('extras-Mozzarella', $extras5);
        $this->addReference('extras-Grimbergen_Abdijkaas', $extras6);
        $this->addReference('extras-Feta', $extras7);
        $this->addReference('extras-Ansjovis', $extras8);
        $this->addReference('extras-Tonijn', $extras9);
        $this->addReference('extras-Merguez', $extras10);
        $this->addReference('extras-Looksaus', $extras11);
        $this->addReference('extras-Zachte_currysaus', $extras12);
        $this->addReference('extras-Pepersaus', $extras13);
        $this->addReference('extras-Kip_Kebab', $extras14);
        $this->addReference('extras-Varkensvlees', $extras15);
        $this->addReference('extras-Ham', $extras16);
        $this->addReference('extras-Pepperoni', $extras17);
        $this->addReference('extras-Kruidig_rundvlees', $extras18);
        $this->addReference('extras-Gegrilde_kip', $extras19);
        $this->addReference('extras-Gerookte_spekblokjes', $extras20);
        $this->addReference('extras-Gerookte_baconreepjes', $extras21);
        $this->addReference('extras-Italiaanse_PARMA_ham', $extras22);
        $this->addReference('extras-Champignons', $extras23);
        $this->addReference('extras-Groene_paprika', $extras24);
        $this->addReference('extras-Zwarte_olijven', $extras25);
        $this->addReference('extras-Chilipepers', $extras26);
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded Extras loads before Pizza
    }
}