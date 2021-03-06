<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Alex\PizzaBundle\Entity\ExtrasRepository")
 */
class Extras {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=false)
     */
    private $kost;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection $pizzas
     * @ORM\ManyToMany(targetEntity="Alex\PizzaBundle\Entity\Pizza", mappedBy="extras")
     */
    private $pizzas;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @return string
     */
    public function __toString() {
        return $this->getOmschrijving();
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     * @return Extras
     */
    public function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string 
     */
    public function getOmschrijving() {
        return $this->omschrijving;
    }

    /**
     * Set kost
     *
     * @param float $kost
     * @return Extras
     */
    public function setKost($kost) {
        $this->kost = $kost;

        return $this;
    }

    /**
     * Get kost
     *
     * @return float 
     */
    public function getKost() {
        return $this->kost;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->pizzas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pizzas
     *
     * @param \Alex\PizzaBundle\Entity\Pizza $pizzas
     * @return Extras
     */
    public function addPizza(\Alex\PizzaBundle\Entity\Pizza $pizzas) {
        $this->pizzas[] = $pizzas;

        return $this;
    }

    /**
     * Remove pizzas
     *
     * @param \Alex\PizzaBundle\Entity\Pizza $pizzas
     */
    public function removePizza(\Alex\PizzaBundle\Entity\Pizza $pizzas) {
        $this->pizzas->removeElement($pizzas);
    }

    /**
     * Get pizzas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPizzas() {
        return $this->pizzas;
    }

}