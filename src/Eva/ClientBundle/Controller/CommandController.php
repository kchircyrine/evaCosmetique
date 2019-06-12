<?php



namespace Eva\ClientBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CommandController extends Controller {
    
    public function addCommandAction() {
         $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
         $cart = $session->get('cart');
        $products = $em->getRepository('EvaAdminBundle:Product')->findArray(array_keys($session->get('cart')));
       
        
        $html = $this->renderView('EvaClientBundle:Default:test.html.twig',array('products'=>$products,'cart'=>$cart));
         
        $html2pdf = $this->get('html2pdf_factory')->create();
$html2pdf->pdf->SetDisplayMode('real');
$html2pdf->writeHTML($html);
$filename='Facture.pdf';


//return new Response($html2pdf->Output('facture.pdf'), 200, array('Content-Type' => 'application/pdf'));
       return new Response($html2pdf->Output(__DIR__ . '/../../../../web/uploads/facture/cc.pdf', 'F') , 200, array('Content-Type' => 'application/pdf'));   
        
       
    }
    
}
