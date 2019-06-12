<?php

namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ImageProduct
 * @ORM\Table(name="image_product", indexes={@ORM\Index(name="product", columns={"product_id"}) })
 * @ORM\Entity(repositoryClass="Eva\AdminBundle\Repository\ImageProductRepository")
 */
class ImageProduct {
   
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
     * @ORM\Column(name="url", type="string", length=25, nullable=true)
     */
    private $url;
    
    
    /**
     * @var boolean
     * @ORM\Column(name="is_default", type="boolean", nullable=true)
     */
    private $isDefault;
    
    
     /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="images")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;
    
    
    
    
    function getId() {
        return $this->id;
    }

    function getUrl() {
        return $this->url;
    }

    function getIsDefault() {
        return $this->isDefault;
    }

    function getProduct() {
        return $this->product;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
    }

    function setProduct($product) {
        $this->product = $product;
    }

      public function __toString() {
       return  $this->url;
    }

    
    
    
    
}
