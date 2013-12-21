<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PostnrRepository extends EntityRepository {

    public function findAllOrderedByPostnr() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT p FROM AlexPizzaBundle:Postnr p ORDER BY p.postnr ASC'
                        )
                        ->getResult();
    }

}
