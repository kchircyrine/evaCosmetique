<?php

namespace Eva\ClientBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WishListController extends Controller {

    //**************************       Add to  wishlist     ******************************
    //******************************************************************************
    public function addAction($id) {
        
        $session = $this->getRequest()->getSession();
        $test=false;
        
        if (!$session->has('wishlist')) {
            $session->set('wishlist', array());
        }
        $wishlist = $session->get('wishlist');

        if (array_key_exists($id, $wishlist)) {
          
        } else {
            
            $wishlist[$id] = 1;
            $test=true;
        }

        $session->set('wishlist', $wishlist);
        $response = new JsonResponse;
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('EvaAdminBundle:Product')->find($id);
        $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
        $response->setData(array('test'=>$test,'name'=>$product->getName(),'image'=>$imageDefault->getUrl()));       
      
        return $response;
    }

    public function showAction() {

        $session = $this->getRequest()->getSession();
        if (!$session->has('wishlist')) {
            $session->set('wishlist', array());
        }
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('EvaAdminBundle:Product')->findArray(array_keys($session->get('wishlist')));

        foreach ($products as $product) {
            $imageDefault = $em->getRepository('EvaAdminBundle:ImageProduct')->getDefautImage($product);
            $product->setDefaultImage($imageDefault);
        }

        $wishlist = $session->get('wishlist');

        return $this->render('EvaClientBundle:WishList:show.html.twig', array('products' => $products, 'wishlist' => $wishlist));
    }

    //**************************       Remove from  wishlit     ******************************
    //******************************************************************************
    public function removeAction($id) {
        $session = $this->getRequest()->getSession();
        $wishlist = $session->get('wishlist');
        $response = new JsonResponse();
        if (array_key_exists($id, $wishlist)) {
            unset($wishlist[$id]);
            $session->set('wishlist', $wishlist);
        }
        if (sizeof($wishlist) == 0) {
            return $response->setData(array('empty' => 0));
        }
        return $response->setData(array('empty' => 1));
    }

    //**************************      move wishlit To Cart      ******************************
    //******************************************************************************
    public function moveToCartAction($id) {


        $session = $this->getRequest()->getSession();
        $wishlist = $session->get('wishlist');

        if (!$session->has('cart')) {
            $session->set('cart', array());
        }
        $cart = $session->get('cart');


        $response = new JsonResponse();


        if (array_key_exists($id, $wishlist)) {
            unset($wishlist[$id]);

            if (!array_key_exists($id, $cart)) {
                $cart[$id] = 1;
                $session->set('cart', $cart);
            }
            $session->set('wishlist', $wishlist);
        }
        if (sizeof($wishlist) == 0) {
            return $response->setData(array('empty' => 0));
        }
        return $response->setData(array('empty' => 1));
    }

}
