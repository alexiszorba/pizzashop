<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class KostenRepository extends EntityRepository
{
    /**
     * 
     * find kosten bedrag en kosten gratistarief from a postnrId .
     * @ $id  
     * 
     * return 
     */
     public function findOneByPostnrId($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.bedrag, p.gratistarief FROM AlexPizzaBundle:Kosten p JOIN AlexPizzaBundle:Postnr n WHERE p.id = $id'
            )
            ->getResult();
    }
   
}