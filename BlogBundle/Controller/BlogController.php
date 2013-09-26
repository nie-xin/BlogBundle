<?php

namespace NX\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller 
{
    public function indexAction() {
        return $this->render('BlogBundle:Blog:index.html.twig', array('name' => 'NIE Xin'));
    }
    
    public function quitAction() {
        return $this->render('BlogBundle:Blog:quit.html.twig', array('name' => 'NIE Xin'));
    }
}
