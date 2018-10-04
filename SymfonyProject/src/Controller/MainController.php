<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'title' => 'Home',
        ]);
    }
    
    /**
     * @Route("/about", name="aboutUs")
     */
    public function aboutUs()
    {
        return $this->render('main/about.html.twig', [
            'title' => 'About Us',
        ]);
    }
    
    /**
     * @Route("/contact", name="contactUs")
     */
    public function contactUs()
    {
        return $this->render('main/contact.html.twig', [
            'title' => 'Contact Us',
        ]);
    }
    
    /**
     * @Route("/services", name="services")
     */
    public function services()
    {
        return $this->render('main/services.html.twig', [
            'title' => 'Our Services',
        ]);
    }
}
