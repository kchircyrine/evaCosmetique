<?php

namespace Eva\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EvaAdminBundle:Default:index.html.twig');
    }
}
