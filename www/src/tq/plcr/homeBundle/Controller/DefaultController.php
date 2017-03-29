<?php

namespace tq\plcr\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tqplcrhomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
