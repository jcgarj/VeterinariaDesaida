<?php

namespace veterinaria\Bundle\veterinariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('veterinariaBundle:Default:index.html.twig', array('name' => $name));
    }
}
