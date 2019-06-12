<?php

namespace Eva\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Offre
 * @ORM\Table(name="offer")
 * @ORM\Entity(repositoryClass="Eva\AdminBundle\Repository\OfferRepository")
 */
class Offer {

    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="percent", type="integer",nullable=true)
     * @Assert\Range(
     *      min = 1,
     *      max = 99,
     *      minMessage = "minimum est {{ limit }}",
     *      maxMessage = "maximum est {{ limit }}"
     * )
     */
    private $percent;
    

    /**
     * @var \DateTime
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * Many Offers have Many Products.
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="offers")
     * @ORM\JoinTable(name="offer_product")
     */
    private $products;
    
    
    function getProducts() {
        return $this->products;
    }

    function setProducts($products) {
        $this->products = $products;
    }

    
    function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getPercent() {
        return $this->percent;
    }

    function getDateStart() {
        return $this->dateStart;
    }

    function getDateEnd() {
        return $this->dateEnd;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPercent($percent) {
        $this->percent = $percent;
    }

    function setDateStart(\DateTime $dateStart) {
        $this->dateStart = $dateStart;
    }

    function setDateEnd(\DateTime $dateEnd) {
        $this->dateEnd = $dateEnd;
    }
    
     public function __toString() {
       return "Réduction de ".strval($this->percent). "%";
    }

}
