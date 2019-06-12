<?php



namespace Eva\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * CarousselImage
 * @ORM\Table(name="caroussel_image")
 * @ORM\Entity
 */
class CarousselImage {
  
    
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
     * @var string
     * @ORM\Column(name="state", type="string", length=25, nullable=true)
     */
    private $state;
    
    
    function getId() {
        return $this->id;
    }

    function getUrl() {
        return $this->url;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setState($state) {
        $this->state = $state;
    }
    public function __toString() {
        return   $this->url;
    }

    
    
    
}
