<?php
namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity
 */
class Size
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", unique=true, length=50, nullable=false)
     */
    private $omschrijving;

    /** 
     * @ORM\Column(type="decimal", scale=2, nullable=false)
     */
    private $extrakost;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
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
     * @return Size
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
    
        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string 
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set extrakost
     *
     * @param float $extrakost
     * @return Size
     */
    public function setExtrakost($extrakost)
    {
        $this->extrakost = $extrakost;
    
        return $this;
    }

    /**
     * Get extrakost
     *
     * @return float 
     */
    public function getExtrakost()
    {
        return $this->extrakost;
    }
}