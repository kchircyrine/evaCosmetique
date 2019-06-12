<?php



namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Category
 * @ORM\Table(name="tag")
 * @ORM\Entity
 */   
class Tag {
    
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
     * Many Tags have Many Products.
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="tags")
     * @ORM\JoinTable(name="tag_product")
     */
    private $products;
    
    
     public function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
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

    function setProducts($products) {
        
        $this->products = $products;
    }

       public function __toString() {
       return  $this->tag;
    }

}
