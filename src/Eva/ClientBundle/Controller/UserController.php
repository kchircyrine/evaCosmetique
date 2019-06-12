<?php


namespace Eva\ClientBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller {
    
    
     public function emailExistAction($email) {

        $em = $this->getDoctrine()->getManager();

        $emails = $em->getRepository('EvaAdminBundle:User')->findBy(array("email" => $email));
        $nb = sizeof($emails);

        $json = new JsonResponse();
        return $json->setData(array('nb' => $nb));
    }
    
    
    public function signInAction()
    {
        return $this->render('EvaClientBundle:Layout:layout_login.html.twig');
    }
    
    
    
}
