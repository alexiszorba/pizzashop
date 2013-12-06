<?php

// src/Alex/PizzaBundle/DataFixtures/ORM/LoadPizzaData.php

namespace Alex\PizzaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\PizzaBundle\Entity\Pizza;

class LoadPizzaData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em) {
        $pizza1 = new Pizza();
        $pizza1->setNaam('CHEESE LOVERS');
        $pizza1->setOmschrijving('Mozzarella, Cantal AOP, Fourme d\'Ambert AOC, geitenkaas en tomatensaus.');
        $pizza1->setBasisprijs('16.45');
        $pizza1->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        
        $em->persist($pizza1);
//------------------------------------------------------------------------------
        $pizza2 = new Pizza();
        $pizza2->setNaam('MARGHERITA');
        $pizza2->setOmschrijving('De originele, ovenverse basispizza met tomatensaus en mozzarella.');
        $pizza2->setBasisprijs('10.25');
        $pizza2->addExtra($em->merge($this->getReference('extras-Mozzarella')));

        $em->persist($pizza2);
//------------------------------------------------------------------------------
        $pizza3 = new Pizza();
        $pizza3->setNaam('PEPPERONI LOVERS');
        $pizza3->setOmschrijving('Lekker veel pepperoniworst, mozzarella en tomatensaus.');
        $pizza3->setBasisprijs('11.85');
        $pizza3->addExtra($em->merge($this->getReference('extras-Mozzarella'))); 
        $pizza3->addExtra($em->merge($this->getReference('extras-Pepperoni')));

        $em->persist($pizza3);
//------------------------------------------------------------------------------
        $pizza4 = new Pizza();
        $pizza4->setNaam('CHEESAM');
        $pizza4->setOmschrijving('Mozzarella, Cantal AOP, Fourme d\'Ambert AOC, geitenkaas en tomatensaus.');
        $pizza4->setBasisprijs('11.85');
        $pizza4->addExtra($em->merge($this->getReference('extras-Mozzarella'))); 
        $pizza4->addExtra($em->merge($this->getReference('extras-Ham')));

        $em->persist($pizza4);
//------------------------------------------------------------------------------
        $pizza5 = new Pizza();
        $pizza5->setNaam('NAPOLI');
        $pizza5->setOmschrijving('Met ansjovis, kappertjes, zwarte olijven, tomatenblokjes, mozzarella en tomatensaus. Gul bestrooid met oregano.');
        $pizza5->setBasisprijs('13.15');
        $pizza5->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza5->addExtra($em->merge($this->getReference('extras-Tomatenblokjes'))); 
        $pizza5->addExtra($em->merge($this->getReference('extras-Ansjovis'))); 
        $pizza5->addExtra($em->merge($this->getReference('extras-Zwarte_olijven')));                

        $em->persist($pizza5);
//------------------------------------------------------------------------------
        $pizza6 = new Pizza();
        $pizza6->setNaam('GARDEN LOVERS');
        $pizza6->setOmschrijving('Mozzarella, Cantal AOP, Fourme d\'Ambert AOC, geitenkaas en tomatensaus');
        $pizza6->setBasisprijs('13.15');
        $pizza6->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza6->addExtra($em->merge($this->getReference('extras-Tomatenblokjes')));
        $pizza6->addExtra($em->merge($this->getReference('extras-Ui')));
        $pizza6->addExtra($em->merge($this->getReference('extras-Groene_paprika')));
        $pizza6->addExtra($em->merge($this->getReference('extras-Champignons')));
        

        $em->persist($pizza6);
//------------------------------------------------------------------------------
        $pizza7 = new Pizza();
        $pizza7->setNaam('FORESTIERE');
        $pizza7->setOmschrijving('Sneetjes ham, champignons, tomatenblokjes, tomatensaus en mozzarella.');
        $pizza7->setBasisprijs('13.15');
        $pizza7->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza7->addExtra($em->merge($this->getReference('extras-Tomatenblokjes')));
        $pizza7->addExtra($em->merge($this->getReference('extras-Champignons')));
        $pizza7->addExtra($em->merge($this->getReference('extras-Ham')));
        
        $em->persist($pizza7);
//------------------------------------------------------------------------------
        $pizza8 = new Pizza();
        $pizza8->setNaam('HAWAIIAN');
        $pizza8->setOmschrijving('Ananas, sneetjes ham, champignons, mozzarella en tomatensaus.');
        $pizza8->setBasisprijs('15.00');
        $pizza8->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza8->addExtra($em->merge($this->getReference('extras-Ananas')));
        $pizza8->addExtra($em->merge($this->getReference('extras-Champignons')));
        $pizza8->addExtra($em->merge($this->getReference('extras-Ham')));              

        $em->persist($pizza8);
//------------------------------------------------------------------------------
        $pizza9 = new Pizza();
        $pizza9->setNaam('HOT \'N SPICY');
        $pizza9->setOmschrijving('Kruidig rundsvlees, chilipepers, ui, tomatenblokjes, mozzarella en tomatensaus.');
        $pizza9->setBasisprijs('15.00');
        $pizza9->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza9->addExtra($em->merge($this->getReference('extras-Tomatenblokjes')));
        $pizza9->addExtra($em->merge($this->getReference('extras-Ui')));
        $pizza9->addExtra($em->merge($this->getReference('extras-Chilipepers')));
        $pizza9->addExtra($em->merge($this->getReference('extras-Kruidig_rundvlees')));

        $em->persist($pizza9);
//------------------------------------------------------------------------------
        $pizza10 = new Pizza();
        $pizza10->setNaam('SWEET CHICKEN CURRY');
        $pizza10->setOmschrijving('Gegrilde kip, ananas, tomatenblokjes, zachte currysaus, mozzarella en tomatensaus.');
        $pizza10->setBasisprijs('15.00');
        $pizza10->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza10->addExtra($em->merge($this->getReference('extras-Tomatenblokjes')));
        $pizza10->addExtra($em->merge($this->getReference('extras-Ananas')));
        $pizza10->addExtra($em->merge($this->getReference('extras-Zachte_currysaus')));
        $pizza10->addExtra($em->merge($this->getReference('extras-Gegrilde_kip')));                

        $em->persist($pizza10);
//------------------------------------------------------------------------------
        $pizza11 = new Pizza();
        $pizza11->setNaam('BARBECUE CHICKEN');
        $pizza11->setOmschrijving('Stukjes gegrilde kip, champignons, groene paprika, ui, mozzarella en barbecuesaus.');
        $pizza11->setBasisprijs('15.00');
        $pizza11->addExtra($em->merge($this->getReference('extras-Mozzarella')));
        $pizza11->addExtra($em->merge($this->getReference('extras-Tomatenblokjes')));
        $pizza11->addExtra($em->merge($this->getReference('extras-Ui')));
        $pizza11->addExtra($em->merge($this->getReference('extras-Groene_paprika')));
        $pizza11->addExtra($em->merge($this->getReference('extras-Champignons')));              

        $em->persist($pizza11);
//------------------------------------------------------------------------------
        $em->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 7; // the order in which fixtures will be loaded  Pizza loads last
    }

}
