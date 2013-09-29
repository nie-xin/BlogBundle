<?php

namespace NX\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller 
{
    public function indexAction() {
//        return $this->render('BlogBundle:Blog:index.html.twig', array('name' => 'NIE Xin'));
        $id = 5;
        $url = $this->generateUrl('blog_read', array('id' => $id));
        
        return $this->redirect($url);
    }
    
    public function quitAction() {
        return $this->render('BlogBundle:Blog:quit.html.twig', array('name' => 'NIE Xin'), true);
    }
    
    public function readAction($id) {
//        $response = new Response;
//        
//        $response->setContent('404 页面未找到');
//        
//        $response->setStatusCode(404);
//        
//        return $response;
        
//        $request = $this->getRequest();
//        
//        $tag = $request->query->get('tag');
//        
//        return new Response("Article id :" . $id . " to display, with tag " . $tag);
        
//        return $this->render('BlogBundle:Blog:read.html.twig', array('id' => $id));
        
//        return $this->redirect( $this->generateUrl('blog_welcome', array('page' => 2)) );
        
        $response = new Response(json_encode(array('id' => $id)));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
    
    public function readSlugAction($year, $slug, $format) {
        return new Response("We can display the article: slug:" . $slug . " in ". $year . " with format " . $format);
    }
}
