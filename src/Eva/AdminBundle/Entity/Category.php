<?php

namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category {
    
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
     * @var integer
     * @ORM\Column(name="_index", type="integer", nullable=true)
     */
    private $index;
    
    
    
    
    /**
     * @var string
     * @ORM\Column(name="icon", type="string", length=25, nullable=true)
     */
    private $icon;
    
    
    /**
     * One Category has Many SubCategories.
     * @ORM\OneToMany(targetEntity="SubCategory", mappedBy="category")
     */
    private $subCategories;
    
      public function __toString() {
       return  $this->name;
    }
    
    
    public function __construct() {
        //$this->subCategories = new ArrayCollection();
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getIndex() {
        return $this->index;
    }

    function getIcon() {
        return $this->icon;
    }

    function getSubCategories() {
        return $this->subCategories;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setIndex($index) {
        $this->index = $index;
    }

    function setIcon($icon) {
        $this->icon = $icon;
    }

    function setSubCategories($subCategories) {
        $this->subCategories = $subCategories;
    }


    
    
    
    
    
}
