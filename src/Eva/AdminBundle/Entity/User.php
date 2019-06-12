<?php


namespace Eva\AdminBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser; 
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * User
 * @ORM\Table(name="user", indexes={@ORM\Index(name="address", columns={"address_id"})})
 * @ORM\Entity
 */
class User  extends BaseUser  {
   
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    
    
    /**
     * @var string
     * @ORM\Column(name="first_name", type="string", length=25, nullable=true)
     * @Assert\NotBlank()
     */
    private $firstName;
    
    
    /**
     * @var string
     * @ORM\Column(name="last_name", type="string", length=25, nullable=true)
     * @Assert\NotBlank()
     */
    private $lastName;
    
    
    
    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=25, nullable=true)
     * @Assert\NotBlank()
     */
    private $telephone;
    
    
    
    /**
     * One user has Many orders.
     * @ORM\OneToMany(targetEntity="OrderBuy", mappedBy="user")
     */
    private $orders;
    
    
    
     /**
     * @var \Address
     *
     * @ORM\OneToOne(targetEntity="Address",cascade={"persist", "remove"})
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;
    
    
    
    
    
    
    
       public function __construct()     {         
           parent::__construct();    
           $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
           
       } 
       
       
       
       function getFirstName() {
           return $this->firstName;
       }

       function getLastName() {
           return $this->lastName;
       }

       function setFirstName($firstName) {
           $this->firstName = $firstName;
       }

       function setLastName($lastName) {
           $this->lastName = $lastName;
       }

           
    
    
       function getId() {
           return $this->id;
       }

       function getOrders() {
           return $this->orders;
       }

       function setId($id) {
           $this->id = $id;
       }

       function setOrders($orders) {
           $this->orders = $orders;
       }


       function getAddress() {
           return $this->address;
       }

       function setAddress($address) {
           $this->address = $address;
       }

       
       function getTelephone() {
           return $this->telephone;
       }

       function setTelephone($telephone) {
           $this->telephone = $telephone;
       }
       
        public function __toString() {
       return  $this->firstName;
    }


    
   
    
}
