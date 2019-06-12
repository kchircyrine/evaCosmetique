<?php



namespace Eva\ClientBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller{
    
    
     public function homePageAction()
    {
      return $this->render('EvaClientBundle:Home:home.html.twig');
    }
    
    
}
