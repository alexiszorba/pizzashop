<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PizzaRepository extends EntityRepository
{
     public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AlexPizzaBundle:Pizza p ORDER BY p.naam ASC'
            )
            ->getResult();
    }
    public function findAllOrderedByPrice()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AlexPizzaBundle:Pizza p ORDER BY p.basisprijs ASC'
            )
            ->getResult();
    }
}