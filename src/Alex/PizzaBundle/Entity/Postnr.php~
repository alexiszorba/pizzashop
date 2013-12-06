<?php
namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity
 */
class Postnr
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** 
     * @ORM\Column(type="string", length=5, nullable=false)
     */
    private $postnr;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $gemeente;

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
        return $this->getGemeente();
    }
    /**
     * Set postnr
     *
     * @param string $postnr
     * @return Postnr
     */
    public function setPostnr($postnr)
    {
        $this->postnr = $postnr;
    
        return $this;
    }

    /**
     * Get postnr
     *
     * @return string 
     */
    public function getPostnr()
    {
        return $this->postnr;
    }

    /**
     * Set gemeente
     *
     * @param string $gemeente
     * @return Postnr
     */
    public function setGemeente($gemeente)
    {
        $this->gemeente = $gemeente;
    
        return $this;
    }

    /**
     * Get gemeente
     *
     * @return string 
     */
    public function getGemeente()
    {
        return $this->gemeente;
    }
}