<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ExtrasRepository extends EntityRepository {

    public function findAllOrderedByOmschrijving() {
        return $this->getEntityManager()
                        ->createQuery(
                                'SELECT e FROM AlexPizzaBundle:Extras e ORDER BY e.omschrijving ASC'
                        )
                        ->getResult();
    }

}
