<?php


namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * marque
 * @ORM\Table(name="marque")
 * @ORM\Entity
 */
class Marque {
    
    
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
     * @ORM\Column(name="icon", type="string", length=25, nullable=true)
     */
    private $icon;
    
    
    /**
     * One Marque has Many products.
     * @ORM\OneToMany(targetEntity="Product", mappedBy="marque")
     */
    private $products;
    
    
      public function __construct() {
        //$this->products = new ArrayCollection();
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getIcon() {
        return $this->icon;
    }

    function getProducts() {
        return $this->products;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setIcon($icon) {
        $this->icon = $icon;
    }

    function setProducts($products) {
        $this->products = $products;
    }
    
    public function __toString() {
       return  $this->name;
    }

   
}
