<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use App\Service\ViewAllArticles;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(ArticleRepository $articleRepository, ViewAllArticles $myService)
    {
		//$repo = $this->getDoctrine()->getRepository(Article::class); // possible method of obtaining articles from repo
		//dump($repo);
		
        //$articles = $articleRepository->findAll(); //obtain ALL articles from repo

        $articles = $myService->getAllArticles();

        //dump ($myService->getAllArticles()); die;

        return $this->render('blog/index.html.twig', compact('articles'));
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function article($id, ArticleRepository $articleRepository)
    {
		
        $article = $articleRepository->find($id); //obtain article from repo
        dump($article);

        return $this->render('blog/article.html.twig', compact('article'));
    }
    
}
