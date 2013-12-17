<?php
namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

/** 
 * @ORM\Entity(repositoryClass="Alex\PizzaBundle\Entity\PostnrRepository")
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
     * 
     * @Assert\NotBlank(message="Please enter your postcode.", groups={"Admin"})
     */
    private $postnr;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     * 
     * @Assert\NotBlank(message="Please enter your town.", groups={"Admin"})
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
        $postnrGemeente=  $this->getPostnr();
        $postnrGemeente.=  " " ;
        $postnrGemeente.=  $this->getGemeente();
        return $postnrGemeente;
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