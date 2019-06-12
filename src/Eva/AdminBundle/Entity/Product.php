<?php



namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Category
 * @ORM\Table(name="product", indexes={@ORM\Index(name="marque", columns={"marque_id"}), @ORM\Index(name="subcategory", columns={"subcategory_id"})  })
 * @ORM\Entity(repositoryClass="Eva\AdminBundle\Repository\ProductRepository")
 */
class Product {
    
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
    
     /**
     * @var string
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;
    
    
     /**
     * @var string
     * @ORM\Column(name="quantity", type="integer",nullable=true)
     */
    private $quantity;
    
    
    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    
    
    /**
     * @var string
     * @ORM\Column(name="user_guide", type="text", nullable=true)
     */
    private $userGuide;
    
    
    /**
     * @var string
     * @ORM\Column(name="composition", type="text", nullable=true)
     */
    private $composition;
    
    
     /**
     * @var float
     * @ORM\Column(name="price", type="float",nullable=true)
     */
    private $price;
    
    
    /**
     * @var \DateTime
     * @ORM\Column(name="date_creation", type="datetime",nullable=true )
     */
    private $dateCreation;
    
    /**
     * @var string
     * @ORM\Column(name="video", type="string", length=100,nullable=true )
     */
    private $video;
    
    
    /**
     * Many products have One subcategory.
     * @ORM\ManyToOne(targetEntity="SubCategory", inversedBy="products")
     * @ORM\JoinColumn(name="subcategory_id", referencedColumnName="id")
     */
    private $subCategory;
    
    
    /**
     * Many products have One marque.
     * @ORM\ManyToOne(targetEntity="Marque", inversedBy="products")
     * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     */
    private $marque;
    
    
      /**
     * One Product has Many images.
     * @ORM\OneToMany(targetEntity="ImageProduct", mappedBy="product")
     */
    private $images;
    
    
    
    /**
     * Many Products have Many Tags.
     * @ORM\ManyToMany(targetEntity="Tag", mappedBy="products",fetch="EAGER")
     */
    private $tags;
    
     /**
     * @var integer
     * @ORM\Column(name="nb_sales", type="integer",nullable=true)
     */
    private $nbSales;
    
    /**
     * Many Tags have Many Products.
     * @ORM\ManyToMany(targetEntity="Offer", mappedBy="products")
     */
    private $offers;
    
    
    
    
    /**
     * @var string
     */
    private $defaultImage;
    
    
     /**
     * @var Offer
     */
    private $availableOffer;
    
    
    
    public function __construct() {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->offers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation= new \DateTime();
    }
    
    
    function getDefaultImage() {
        return $this->defaultImage;
    }

    function setDefaultImage($defaultImage) {
        $this->defaultImage = $defaultImage;
    }

        
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getDescription() {
        return $this->description;
    }

    function getComposition() {
        return $this->composition;
    }

    function getPrice() {
        return $this->price;
    }

    function getDateCreation() {
        return $this->dateCreation;
    }

    function getVideo() {
        return $this->video;
    }

    function getSubCategory() {
        return $this->subCategory;
    }

    function getMarque() {
        return $this->marque;
    }

    function getImages() {
        return $this->images;
    }

    function getTags() {
        return $this->tags;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setComposition($composition) {
        $this->composition = $composition;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setDateCreation(\DateTime $dateCreation) {
        $this->dateCreation = $dateCreation;
    }

    function setVideo($video) {
        $this->video = $video;
    }

    function setSubCategory($subCategory) {
        $this->subCategory = $subCategory;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    function setImages($images) {
        $this->images = $images;
    }

    function setTags($tags) {
        $this->tags = $tags;
    }


    function getNbSales() {
        return $this->nbSales;
    }

    function setNbSales($nbSales) {
        $this->nbSales = $nbSales;
    }

    
    function getReference() {
        return $this->reference;
    }

    function getUserGuide() {
        return $this->userGuide;
    }

    function getOffers() {
        return $this->offers;
    }

    function setReference($reference) {
        $this->reference = $reference;
    }

    function setUserGuide($userGuide) {
        $this->userGuide = $userGuide;
    }

    function setOffers($offers) {
        $this->offers = $offers;
    }

     public function __toString() {
       return  $this->name;
    }

    function getAvailableOffer() {
        return $this->availableOffer;
    }

    function setAvailableOffer($availableOffer) {
        $this->availableOffer = $availableOffer;
    }


    
}
