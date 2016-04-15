<?php

namespace P\CarnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PCarnetBundle:Default:index.html.twig');
    }
}
