<?php

namespace Eva\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EvaClientBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function testAction()
    {
        return $this->render('EvaClientBundle:Default:test.html.twig');
    }
    
    
    
    
   
    
    
}
