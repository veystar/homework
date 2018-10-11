<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function aboutUs()
    {
        return $this->render('main/about.html.twig', [
            'title' => 'About Us',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactUs()
    {
        return $this->render('main/contact.html.twig', [
            'title' => 'Contact Us',
        ]);
    }
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('main/portfolio.html.twig', [
            'title' => 'Portfolio',
        ]);
    }
}
