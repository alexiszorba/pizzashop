<?php

namespace Alex\PizzaBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Alex\PizzaBundle\Entity\DetailsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Details {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aantal;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $prijs;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $promotie;

    /**
     * @ORM\ManyToOne(targetEntity="bestelling")
     * @ORM\JoinColumn(name="bestelling_id", referencedColumnName="id", nullable=false)
     */
    private $bestelling;

    /**
     * @ORM\ManyToOne(targetEntity="type")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="size")
     * @ORM\JoinColumn(name="size_id", referencedColumnName="id", nullable=false)
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity="pizza")
     * @ORM\JoinColumn(name="pizza_id", referencedColumnName="id", nullable=false)
     */
    private $pizza;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection $extras
     * @ORM\ManyToMany(targetEntity="Alex\PizzaBundle\Entity\Extras", inversedBy="pizzas")
     * @ORM\JoinTable(name="detail_extras", 
     *     joinColumns={@ORM\JoinColumn(name="detail_id", referencedColumnName="id")},
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
     * Set aantal
     *
     * @param integer $aantal
     * @return Details
     */
    public function setAantal($aantal) {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return integer 
     */
    public function getAantal() {
        return $this->aantal;
    }

    /**
     * Set prijs
     *
     * @param float $prijs
     * @return Details
     */
    public function setPrijs($prijs) {
        $this->prijs = $prijs;

        return $this;
    }

    /**
     * Get prijs
     *
     * @return float 
     */
    public function getPrijs() {
        return $this->prijs;
    }

    /**
     * Set promotie
     *
     * @param string $promotie
     * @return Details
     */
    public function setPromotie($promotie) {
        $this->promotie = $promotie;

        return $this;
    }

    /**
     * Get promotie
     *
     * @return string 
     */
    public function getPromotie() {
        return $this->promotie;
    }

    /**
     * Set bestelling
     *
     * @param \Alex\PizzaBundle\Entity\bestelling $bestelling
     * @return Details
     */
    public function setBestelling(\Alex\PizzaBundle\Entity\bestelling $bestelling) {
        $this->bestelling = $bestelling;

        return $this;
    }

    /**
     * Get bestelling
     *
     * @return \Alex\PizzaBundle\Entity\bestelling 
     */
    public function getBestelling() {
        return $this->bestelling;
    }

    /**
     * Set pizza
     *
     * @param \Alex\PizzaBundle\Entity\pizza $pizza
     * @return Details
     */
    public function setPizza(\Alex\PizzaBundle\Entity\pizza $pizza) {
        $this->pizza = $pizza;

        return $this;
    }

    /**
     * Get pizza
     *
     * @return \Alex\PizzaBundle\Entity\pizza 
     */
    public function getPizza() {
        return $this->pizza;
    }

    /**
     * Set type
     *
     * @param \Alex\PizzaBundle\Entity\type $type
     * @return Details
     */
    public function setType(\Alex\PizzaBundle\Entity\type $type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Alex\PizzaBundle\Entity\type 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set size
     *
     * @param \Alex\PizzaBundle\Entity\size $size
     * @return Details
     */
    public function setSize(\Alex\PizzaBundle\Entity\size $size) {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return \Alex\PizzaBundle\Entity\size 
     */
    public function getSize() {
        return $this->size;
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
     * @return Details
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

    /**
     * Get extras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExtras() {
        return $this->extras;
    }

    /**
     *
     * @ORM\PrePersist
     */
    public function setInitValue() {
        
       
        return $this;
    }

}