<?php

// src/Alex/PizzaBundle/Entity/User.php

namespace Alex\PizzaBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * 
     * @Assert\NotBlank(message="Please enter your surname.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The surname is too short.",
     *     maxMessage="The surname is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $surname;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * 
     * @Assert\NotBlank(message="Please enter your address (street and number).", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The adress is too short.",
     *     maxMessage="The address is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $address;

    /**
     * @ORM\ManyToOne(targetEntity="postnr")
     * @ORM\JoinColumn(name="postnr_id", referencedColumnName="id", nullable=false)
     * 
     * 
     * @Assert\NotBlank(message="Please select your postcode.", groups={"Registration", "Profile"})
     * )
     */
    protected $postnr;

    /**
     * @ORM\Column(type="string", length=10, nullable=false)
     * 
     * @Assert\NotBlank(message="Please enter your phonenumber.", groups={"Registration", "Profile"})
     */
    protected $telnr;

    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $promotie;
    
    // $geblokkeerd wordt niet gebruikt we gebruiken $locked van fosUserBundle
    
    
    /** 
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $bemerking;
    
    

    public function __construct() {
        parent::__construct();
        // your own logic
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
     * Set telnr
     *
     * @param string $telnr
     * @return User
     */
    public function setTelnr($telnr)
    {
        $this->telnr = $telnr;
    
        return $this;
    }

    /**
     * Get telnr
     *
     * @return string 
     */
    public function getTelnr()
    {
        return $this->telnr;
    }

    /**
     * Set promotie
     *
     * @param string $promotie
     * @return User
     */
    public function setPromotie($promotie)
    {
        $this->promotie = $promotie;
    
        return $this;
    }

    /**
     * Get promotie
     *
     * @return string 
     */
    public function getPromotie()
    {
        return $this->promotie;
    }


    /**
     * Set bemerking
     *
     * @param string $bemerking
     * @return User
     */
    public function setBemerking($bemerking)
    {
        $this->bemerking = $bemerking;
    
        return $this;
    }

    /**
     * Get bemerking
     *
     * @return string 
     */
    public function getBemerking()
    {
        return $this->bemerking;
    }

    /**
     * Set postnr
     *
     * @param \Alex\PizzaBundle\Entity\postnr $postnr
     * @return User
     */
    public function setPostnr(\Alex\PizzaBundle\Entity\postnr $postnr)
    {
        $this->postnr = $postnr;
    
        return $this;
    }

    /**
     * Get postnr
     *
     * @return \Alex\PizzaBundle\Entity\postnr 
     */
    public function getPostnr()
    {
        return $this->postnr;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    
        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
}