<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SizeRepository extends EntityRepository {

    public function findAllOrderedBySize() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT s FROM AlexPizzaBundle:Size s ORDER BY s.omschrijving ASC'
                        )
                        ->getResult();
    }

}
