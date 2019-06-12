<?php

namespace Eva\ClientBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller {

    public function newestProductsAction() {
        $em = $this->getDoctrine()->getManager();
        $newestProducts = $em->getRepository('EvaAdminBundle:Product')->getNewestProducts();

        $products = array();

        if (sizeof($newestProducts) > 0) {
            foreach ($newestProducts as $product) {

                $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
                $imageProduct = $em->getRepository('EvaAdminBundle:ImageProduct')->getImage($product);
                array_push($products, array('newproduct' => $product, 'imageDefault' => $imageDefault, 'image' => $imageProduct));
            }
        }

        return $this->render('EvaClientBundle:Product:show_newest.html.twig', array('newestProducts' => $products));
    }

    public function bestSellerProductsAction() {
        $em = $this->getDoctrine()->getManager();
        $bestSellers = $em->getRepository('EvaAdminBundle:Product')->getbestSellerProducts();

        $products = array();

        if (sizeof($bestSellers) > 0) {
            foreach ($bestSellers as $product) {
                $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
                $imageProduct = $em->getRepository('EvaAdminBundle:ImageProduct')->getImage($product);
                array_push($products, array('bestSeller' => $product, 'imageDefault' => $imageDefault, 'image' => $imageProduct));
            }
        }

        return $this->render('EvaClientBundle:Product:show_best_seller.html.twig', array('bestSellers' => $products));
    }
    
    
     public function showDetailAction($id) {
         
          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('EvaAdminBundle:Product')->find($id);
          $offer =$em->getRepository('EvaAdminBundle:Offer')->getAvailableOfferByProduct($product);
          
          //var_dump($offer->getPercent());
          
        return $this->render('EvaClientBundle:Product:show_detail.html.twig',array('product'=>$product,'offer'=>$offer));
         
     }

}
