<?php

namespace Eva\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Governorate
 * @ORM\Table 
 * @ORM\Entity(repositoryClass="Eva\AdminBundle\Entity\GovernorateRepository")
 */
class Governorate {

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

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    public function __toString() {
        return $this->name;
    }

    
    
}
