<?php

namespace tq\plcr\aboutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
#    public function indexAction($name)
    public function indexAction()
    {
        return $this->render('tqplcraboutBundle:Default:index.html.twig', array('name' => "Sistema de reportes PLC v0.1"));
    }
}
