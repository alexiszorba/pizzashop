<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Alex\PizzaBundle\Entity\BestellingRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Bestelling {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $datum;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $levering;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $leveringskost;

    /**
     * @ORM\ManyToOne(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * 
     * @return string
     */
    public function __toString() {

        return "$this->id";
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return Bestelling
     */
    public function setDatum($datum) {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime formatted
     */
    public function getDatum() {
        return $this->datum;
    }
    
    /**
     * Set levering
     *
     * @param \DateTime $levering
     * @return Bestelling
     */
    public function setLevering($levering) {
        $this->levering = $levering;

        return $this;
    }

    /**
     * Get levering
     *
     * @return \DateTime  formatted
     */
    public function getLevering() {

        return $this->levering;//->format('Y-m-d H:i');

    }

    /**
     * Set leveringskost
     *
     * @param string $leveringskost
     * @return Bestelling
     */
    public function setLeveringskost($leveringskost) {
        $this->leveringskost = $leveringskost;

        return $this;
    }

    /**
     * Get leveringskost
     *
     * @return string 
     */
    public function getLeveringskost() {
        return $this->leveringskost;
    }

    /**
     * Set user
     *
     * @param \Alex\PizzaBundle\Entity\user $user
     * @return Bestelling
     */
    public function setUser(\Alex\PizzaBundle\Entity\user $user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get klanten
     *
     * @return \Alex\PizzaBundle\Entity\user
     */
    public function getUser() {
        return $this->user;
    }

    /**
     *
     * @ORM\PrePersist
     */
    public function setInitValue() {

        //$this->datum = (new \DateTime('now'));
        //$this->levering = $this->datum->add(new \DateInterval("PT1H"));
        //$this->datum->format('Y-m-d H:i');
        return $this;
    }

}

