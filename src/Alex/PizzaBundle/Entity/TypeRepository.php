<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TypeRepository extends EntityRepository {

    public function findAllOrderedByType() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT t FROM AlexPizzaBundle:Type t ORDER BY t.omschrijving ASC'
                        )
                        ->getResult();
    }

}
