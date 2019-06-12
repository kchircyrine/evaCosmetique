<?php



namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Address
 * @ORM\Table(name="address", indexes={@ORM\Index(name="governorate", columns={"governorate_id"})})
 * @ORM\Entity
 */
class Address {
  
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
     * @Assert\NotBlank()
     * @ORM\Column(name="street", type="string", length=25, nullable=true)
     */
    private $street;
    
    
    /**
     * @var integer
     * @Assert\NotBlank()
     * @ORM\Column(name="zip_code", type="integer", nullable=true)
     */
    private $zipCode;
    
    
    
     /**
     * @var \Governorate
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Governorate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="governorate_id", referencedColumnName="id")
     * })
     */
    private $governorate;
    
    
    function getId() {
        return $this->id;
    }

    function getStreet() {
        return $this->street;
    }

    function getZipCode() {
        return $this->zipCode;
    }

    function getGovernorate() {
        return $this->governorate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStreet($street) {
        $this->street = $street;
    }

    function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    function setGovernorate($governorate) {
        $this->governorate = $governorate;
    }
    
    public function __toString() {
       return  $this->street;
    }


}
