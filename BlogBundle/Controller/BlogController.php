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
    
    public function readAction($id) {
        return new Response("Article id :" . $id . " to display.");
    }
    
    public function readSlugAction($year, $slug, $format) {
        return new Response("We can display the article: slug:" . $slug . " in ". $year . " with format " . $format);
    }
}
