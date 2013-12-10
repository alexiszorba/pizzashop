<?php
namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity
 */
class Kosten
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $bedrag;

    /** 
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $gratistarief;

    /** 
     * @ORM\ManyToOne(targetEntity="postnr")
     * @ORM\JoinColumn(name="postnr_id", referencedColumnName="id", nullable=false)
     */
    private $postnr;

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
     * Set bedrag
     *
     * @param float $bedrag
     * @return Kosten
     */
    public function setBedrag($bedrag)
    {
        $this->bedrag = $bedrag;
    
        return $this;
    }

    /**
     * Get bedrag
     *
     * @return float 
     */
    public function getBedrag()
    {
        return $this->bedrag;
    }

    /**
     * Set gratistarief
     *
     * @param float $gratistarief
     * @return Kosten
     */
    public function setGratistarief($gratistarief)
    {
        $this->gratistarief = $gratistarief;
    
        return $this;
    }

    /**
     * Get gratistarief
     *
     * @return float 
     */
    public function getGratistarief()
    {
        return $this->gratistarief;
    }

    /**
     * Set postnr
     *
     * @param \Alex\PizzaBundle\Entity\postnr $postnr
     * @return Kosten
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
}