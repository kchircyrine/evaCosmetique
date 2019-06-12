<?php


namespace Eva\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/** 
* @ORM\Entity
* @ORM\Table(name="reclamation", indexes={@ORM\Index(name="user_id", columns={"user_id"})}))
*/
class Reclamation {
    
    
    /**
    * @var integer
    * @ORM\Column(name="id", type="integer", nullable=false)
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    protected $id;
       

    /**
     * @var string
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;
    
    
     /**
     * @var string
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;
    
    
    
    /**
     * @var string
     * @ORM\Column(name="response", type="text", nullable=true)
     */
    private $response;
    
    
    
    /**
    * @var \DateTime
    * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;
    
    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;
    
    
     public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }
    
    
    
    
    function getDateCreation() {
        return $this->dateCreation;
    }

   

    function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;
    }
   
    
    
    function getId() {
        return $this->id;
    }

    function getSubject() {
        return $this->subject;
    }

    function getContent() {
        return $this->content;
    }

    function getUser() {
        return $this->user;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function getResponse() {
        return $this->response;
    }

    function setResponse($response) {
        $this->response = $response;
    }

          public function __toString() {
       return  $this->content;
    }
    
    
    
    
}
