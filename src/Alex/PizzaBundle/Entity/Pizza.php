<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Alex\PizzaBundle\Entity\PizzaRepository")
 */
class Pizza {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=250, nullable=false)
     */
    private $naam;

    /**
     * @ORM\Column(type="string", length=250, nullable=false)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="float", length=20, nullable=false)
     */
    private $basisprijs;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection $extras
     * @ORM\ManyToMany(targetEntity="Alex\PizzaBundle\Entity\Extras", inversedBy="pizzas")
     * @ORM\JoinTable(name="pizza_extras", 
     *     joinColumns={@ORM\JoinColumn(name="pizza_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="extras_id", referencedColumnName="id")}
     *     )
     */
    private $extras;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Pizza
     */
    public function setNaam($naam) {
        $this->naam = $naam;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function __toString() {
        return $this->getNaam();
    }

    /**
     * Get naam
     *
     * @return string 
     */
    public function getNaam() {
        return $this->naam;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     * @return Pizza
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
     * Set basisprijs
     *
     * @param float $basisprijs
     * @return Pizza
     */
    public function setBasisprijs($basisprijs) {
        $this->basisprijs = $basisprijs;

        return $this;
    }

    /**
     * Get basisprijs
     *
     * @return float 
     */
    public function getBasisprijs() {
        return $this->basisprijs;
    }

    /**
     * Set extras
     *
     * @param \Alex\PizzaBundle\Entity\extras $extras
     * @return Pizza
     */
    public function setExtras(\Alex\PizzaBundle\Entity\extras $extras = null) {
        $this->extras = $extras;

        return $this;
    }

    /**
     * Get extras
     *
     * @return \Alex\PizzaBundle\Entity\extras 
     */
    public function getExtras() {
        return $this->extras;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->extras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add extras
     *
     * @param \Alex\PizzaBundle\Entity\Extras $extras
     * @return Pizza
     */
    public function addExtra(\Alex\PizzaBundle\Entity\Extras $extras) {
        $this->extras[] = $extras;

        return $this;
    }

    /**
     * Remove extras
     *
     * @param \Alex\PizzaBundle\Entity\Extras $extras
     */
    public function removeExtra(\Alex\PizzaBundle\Entity\Extras $extras) {
        $this->extras->removeElement($extras);
    }

}