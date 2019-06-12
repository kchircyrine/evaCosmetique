<?php

namespace Eva\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfferController extends Controller {


     public function availableOffersAction() { 
         
        $em = $this->getDoctrine()->getManager();  
        $availableOffers = $em->getRepository('EvaAdminBundle:Offer')->getAvailableOffers();
       
        $offers = array();
        
        if (sizeof($availableOffers)>0){
        
         foreach ($availableOffers as $offer) {  
             $products=$offer->getProducts();
            foreach ($products as $product){   
                 $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
                 array_push($offers, array('offer' => $offer, 'imageDefault' => $imageDefault));
            }   
         }
        }
        return $this->render('EvaClientBundle:Offer:show_available.html.twig', array('offers' => $offers));
    } 

}
