<?php



namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Category
 * @ORM\Table(name="SubCategory", indexes={@ORM\Index(name="category", columns={"category_id"}), @ORM\Index(name="subcategory", columns={"subcategory_id"})  })
 * @ORM\Entity
 */
class SubCategory {
    
    
    /**
     * @var integer
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
     * @ORM\Column(name="image", type="string", length=25, nullable=true)
     */
    private $image;
    
    
    /**
     * Many SubCategories have One Category.
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="subCategories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    
    
    
     /**
     * One SubCategories has Many children subcategories.
     * @ORM\OneToMany(targetEntity="SubCategory", mappedBy="parent")
     */
    private $children;

    /**
     * Many children (subcategories) have One parent (SubCategory) .
     * @ORM\ManyToOne(targetEntity="SubCategory", inversedBy="children")
     * @ORM\JoinColumn(name="subcategory_id", referencedColumnName="id")
     */
    private $parent;
    
    
    
     public function __construct() {
        //$this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getImage() {
        return $this->image;
    }

    function getCategory() {
        return $this->category;
    }

    function getChildren() {
        return $this->children;
    }

    function getParent() {
        return $this->parent;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setChildren($children) {
        $this->children = $children;
    }

    function setParent($parent) {
        $this->parent = $parent;
    }
    
      public function __toString() {
       return  $this->name;
    }

    
    
    
}
