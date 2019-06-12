<?php

namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Offre
 * @ORM\Table(name="orderbuy", indexes={@ORM\Index(name="mode_payment", columns={"mode_payment_id"}), @ORM\Index(name="user", columns={"user_id"})  })
 * @ORM\Entity
 */
class OrderBuy {
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    
    
     /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;
    
    
      /**
     * @var string
     * @ORM\Column(name="json", type="text", nullable=true)
     */
    private $json;
    
    
     /**
     * @var float
     * @ORM\Column(name="total_price", type="float",nullable=true)
     */
    private $totalPrice;
    
    
     /**
     * @var string
     * @ORM\Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;
    
    
  
    
    
    /**
     * @ORM\ManyToOne(targetEntity="ModePayment", inversedBy="orders")
     * @ORM\JoinColumn(name="mode_payment_id", referencedColumnName="id")
     */
    private $modePayment;
    
    
    /**
     * Many orders have One user.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orders")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    
    public function __construct() {
        $this->date= new \DateTime();
        $this->state=0;
    }
    
    
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getJson() {
        return $this->json;
    }

    function getTotalPrice() {
        return $this->totalPrice;
    }

    function getState() {
        return $this->state;
    }

    function getModePayment() {
        return $this->modePayment;
    }

    function getUser() {
        return $this->user;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setJson($json) {
        $this->json = $json;
    }

    function setTotalPrice($totalPrice) {
        $this->totalPrice = $totalPrice;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setModePayment($modePayment) {
        $this->modePayment = $modePayment;
    }

    function setUser($user) {
        $this->user = $user;
    }

     public function __toString() {
       return  $this->json;
    }

    
  
}
