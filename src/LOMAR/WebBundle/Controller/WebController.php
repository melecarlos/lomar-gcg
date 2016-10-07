<?php

namespace LOMAR\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WebController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('LOMARWebBundle:Web:coming-soon.html.twig');
    }
    
    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        return $this->render('LOMARWebBundle:Web:index.html.twig');
    }
    
    /**
     * @Route("service/de")
     */
    public function deAction()
    {
        return $this->render('LOMARWebBundle:Web:de.html.twig');
    }
    
    /**
     * @Route("service/ol")
     */
    public function olAction()
    {
        return $this->render('LOMARWebBundle:Web:ol.html.twig');
    }
    
    /**
     * @Route("service/wg")
     */
    public function wgAction()
    {
        return $this->render('LOMARWebBundle:Web:wg.html.twig');
    }
    
    /**
     * @Route("service/sv")
     */
    public function svAction()
    {
        return $this->render('LOMARWebBundle:Web:sv.html.twig');
    }
    
    /**
     * @Route("service/fg")
     */
    public function fgAction()
    {
        return $this->render('LOMARWebBundle:Web:fg.html.twig');
    }
    
    /**
     * @Route("service/pp")
     */
    public function ppAction()
    {
        return $this->render('LOMARWebBundle:Web:pp.html.twig');
    }
    
    /**
     * @Route("/gallery")
     */
    public function galleryAction()
    {
        return $this->render('LOMARWebBundle:Web:gallery.html.twig');
    }
    
    /**
     * @Route("/about")
     */
    public function aboutAction()
    {
        return $this->render('LOMARWebBundle:Web:about.html.twig');
    }
    
    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        return $this->render('LOMARWebBundle:Web:contact.html.twig');
    }
    
    /**
     * @Route("/quote")
     */
    public function quoteAction()
    {
        return $this->render('LOMARWebBundle:Web:quote.html.twig');
    }
}
