<?php

namespace NX\BlogBundle\Controller;
namespace NX\BlogBundle\Entity;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller 
{
    public function indexAction() {
          // Les articles :
        // $articles = array(
        //   array(
        //     'title'   => 'Mon weekend a Phi Phi Island !',
        //     'id'      => 1,
        //     'author'  => 'winzou',
        //     'content' => 'Ce weekend était trop bien. Blabla…',
        //     'date'    => new \Datetime()),
        //   array(
        //     'title'   => 'Repetition du National Day de Singapour',
        //     'id'      => 2,
        //     'author' => 'winzou',
        //     'content' => 'Bientôt prêt pour le jour J. Blabla…',
        //     'date'    => new \Datetime()),
        //   array(
        //     'title'   => 'Chiffre d\'affaire en hausse',
        //     'id'      => 3, 
        //     'author' => 'M@teo21',
        //     'content' => '+500% sur 1 an, fabuleux. Blabla…',
        //     'date'    => new \Datetime())
        // );

        // antispam service
        $antispam = $this->container->get('NX_blog.antispam');

        // test data
        $text = "aaa@aaapris.com, nie@163.com, xin@aaaparis.com";

        if ($antispam->isSpam($text)) {
            throw new \Exception('The message is recognized as a spam');
        }


        // return $this->render('BlogBundle:Blog:index.html.twig', array('articles' => $articles ));
    }
    
    public function quitAction() {
        return $this->render('BlogBundle:Blog:quit.html.twig', array('name' => 'NIE Xin'), true);
    }
    
    public function readAction($id) {
//        $response = new Response;
//        
//        $response->setContent('404 no page found');
//        
//        $response->setStatusCode(404);
//        
//        return $response;
        
//        $request = $this->getRequest();
//        
//        $tag = $request->query->get('tag');
//        
//        return new Response("Article id :" . $id . " to display, with tag " . $tag);
        
 //       return $this->render('BlogBundle:Blog:read.html.twig', array('id' => $id));
        
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
        
        $article = array(
            'id'      => 1,
            'title'   => 'Mon weekend a Phi Phi Island !',
            'author'  => 'winzou',
            'content' => 'Ce weekend était trop bien. Blabla…',
            'date'    => new \Datetime()
         );
     
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('BlogBundle:Blog:read.html.twig', array(
          'article' => $article
        ));       
    }
    
    public function readSlugAction($year, $slug, $format) {
        return new Response("We can display the article: slug:" . $slug . " in ". $year . " with format " . $format);
    }
    
    public function addAction() {
//        $this->get('session')->getFlashBag()->add('info', 'Article has been added');
//        $this->get('session')->getFlashBag()->add('info', 'Yes, it has been saved');
//        
//        return $this->redirect($this->generateUrl('blog_read', array('id' => 5)));
        
        if ($this->get('request')->getMethod() == 'POST') {
            $this->get('session')->getFlashBag()->add('notice', 'Article added');
            
            return $this->redirect( $this->generateUrl('blog_read', array('id' => 5)) );
        }
        
        return $this->render('BlogBundle:Blog:add.html.twig');
    }
    
    public function modifyAction($id) {
        $article = array(
          'id'      => 1,
          'title'   => 'Mon weekend a Phi Phi Island !',
          'author'  => 'winzou',
          'content' => 'Ce weekend était trop bien. Blabla…',
          'date'    => new \Datetime()
        );
        
        return $this->render('BlogBundle:Blog:modify.html.twig', array('article' => $article));
    }
    
    public function deleteAction($id) {
        // ToDo
        return $this->render('BlogBundle:Blog:delete.html.twig');
    }
    
    public function menuAction() {
        $list = array(
            array('id' => 2, 'title' => 'My last weekend'),
            array('id' => 5, 'title' => 'Start with symfony 2'),
            array('id' => 9, 'title' => 'Just a test')
        );
        
        return $this->render('BlogBundle:Blog:menu.html.twig', array('list_articles' => $list));
    }
    
    public function testAction() {
        $article = new Article;
        $article->setDate(new \Datetime());
        $article->setTitle('ORM test');
        $article->setAuthor('NIE Xin');
        $article->setContent("What are you looking at? I am just a test action!");

        return $this->render('BlogBundle:Article:test.html.twig', array('article' => $article));
    }
}
