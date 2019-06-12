<?php

namespace Eva\ClientBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller {
    
    
     //**************************       Add to  cart     ******************************
    //******************************************************************************
    public function addAction($id) {
        $session = $this->getRequest()->getSession();
        
        $test=false;

        if (!$session->has('cart')) {
            $session->set('cart', array());
        }
        $cart = $session->get('cart');

        if (array_key_exists($id, $cart)) {
          
        } else {
            $cart[$id] = 1;
            $test=true;
        }

        $session->set('cart', $cart);
        $response = new JsonResponse();
        
        
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('EvaAdminBundle:Product')->find($id);
        $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
        $response->setData(array('test'=>$test,'name'=>$product->getName(),'image'=>$imageDefault->getUrl()));
        
        //$response->setData();
        return $response;
    }
    
    
    
    
     //**************************       update cart quantity     ******************************
    //******************************************************************************
    public function updateQtyAction($id,$qte) {
        
        $session = $this->getRequest()->getSession();

        if (!$session->has('cart')) {
            $session->set('cart', array());
        }
        
        $cart = $session->get('cart');

        if (array_key_exists($id, $cart)) {
             $cart[$id] = $qte;
        }

        $session->set('cart', $cart);
        $response = new JsonResponse();
        return $response;
    }
    
    
    
    
    
    
    
    //**************************       show cart     ******************************
    //******************************************************************************
    
    
    public function showAction(){
        
      $session= $this->getRequest()->getSession();
      if(!$session->has('cart')){
          $session->set('cart',array());
      }
      $em =$this->getDoctrine()->getManager();
      $products= $em->getRepository('EvaAdminBundle:Product')->findArray(array_keys($session->get('cart')));
        
      
      foreach ($products as $product){
           $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
           $product->setDefaultImage($imageDefault);  
           $availableOffer = $em->getRepository('EvaAdminBundle:Offer')->getAvailableOfferByProduct($product);
           $product->setAvailableOffer($availableOffer); 
      }
      
      $cart=$session->get('cart');   
      
       return $this->render('EvaClientBundle:Cart:show.html.twig',array('products'=>$products,'cart'=>$cart));
    }
    
    //**************************       Remove from  cart     ******************************
    //******************************************************************************
    public function removeAction($id) {
         $session= $this->getRequest()->getSession();
         $cart = $session->get('cart');
         
          $response = new JsonResponse();
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            $session->set('cart',$cart); 
        }
        return $response->setData(array('empty' => 1));
    }
    
    
    
    
    
    

}
