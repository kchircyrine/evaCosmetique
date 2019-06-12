<?php



namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ModePayment
 * @ORM\Table(name="mode_payment")
 * @ORM\Entity
 */
class ModePayment {
   
    
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    
      /**
     * @var string
     * @ORM\Column(name="name", type="string", length=25, nullable=true)
     */
    private $name;
    
    
      /**
     * @var string
     * @ORM\Column(name="specification", type="text", nullable=true)
     */
    private $specification;
    
    
    
      /**
     * @var string
     * @ORM\Column(name="price", type="float",nullable=true)
     */
    private $price;
    
    
    /**
     * One ModePayment has Many orders.
     * @ORM\OneToMany(targetEntity="OrderBuy", mappedBy="modePayment")
     */
    private $orders;
    
    
    
    
    public function __construct() {
        $this->orders = new ArrayCollection();
    }
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSpecification() {
        return $this->specification;
    }

    function getPrice() {
        return $this->price;
    }

    function getOrders() {
        return $this->orders;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSpecification($specification) {
        $this->specification = $specification;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setOrders($orders) {
        $this->orders = $orders;
    }
    
     public function __toString() {
       return  $this->name;
    }



    
}
