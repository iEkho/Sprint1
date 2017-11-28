<?php

namespace Hopital\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HopitalAdministrationBundle:Default:base.html.twig');
    }
}
