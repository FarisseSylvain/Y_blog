<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Contact;
use Blogger\BlogBundle\Form\ContactType;

class PageController extends Controller{
    public function indexAction() {
      return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }

    public function aboutAction(){
      return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

    public function contactAction(Request $request){
      $contact = new Contact();
      $form = $this->get('form.factory')->create(ContactType::class,$contact);
      if($request->isMethod('POST') && $form->handleRequest($request->isValid())){
        return $this->redirect($this->generateUrl('blogger_blog_contact'));
      }
      return $this->render('BloggerBlogBundle:Page:contact.html.twig', array('form'=>$form->createView()));
    }
}

 ?>
