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
        
        return $this->render('BlogBundle:Blog:read.html.twig', array('id' => $id));
        
//        return $this->redirect( $this->generateUrl('blog_welcome', array('page' => 2)) );
        
//        $response = new Response(json_encode(array('id' => $id)));
//        
//        $response->headers->set('Content-Type', 'application/json');
//        
//        return $response;
        
//        $mailer = $this->get('mailer');
//
//        $message = \Swift_Message::newInstance()
//          ->setSubject('Hello NIE !')
//          ->setFrom('tutorial@symfony2.com')
//          ->setTo('nie_xin@msn.com')
//          ->setBody('Coucou, voici un email que vous venez de recevoir !');
//
//        // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
//        $mailer->send($message);
//        
//        return new Response('Email has been sent');
        
//        $templating = $this->get('templating');
//        
//        $content= $templating->render('BlogBundle:Blog:read.html.twig');
//        
//        return new Response($content);
        
//        $session = $this->get('session');
//        
//        $user_id = $session->get('user_id');
//        
//        $session->set('user_id', 91);
//        
//        return new Response('What are you looking at?');
    }
    
    public function readSlugAction($year, $slug, $format) {
        return new Response("We can display the article: slug:" . $slug . " in ". $year . " with format " . $format);
    }
    
    public function addAction() {
        $this->get('session')->getFlashBag()->add('info', 'Article has been added');
        $this->get('session')->getFlashBag()->add('info', 'Yes, it has been saved');
        
        return $this->redirect($this->generateUrl('blog_read', array('id' => 5)));
    }
}
