<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CommentFormType;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
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
        return $this->render('blog/index.html.twig', compact('articles'));
    }

    /**
     * @Route("/comment/{id}", name="comment")
     */
    public function newComment($id, ArticleRepository $articleRepository, Request $request)
    {
        $article = $articleRepository->find($id); //obtain article from repo
        $user = $this->getUser();
        $comment = (new Comment())
            ->setArticle($article)
            ->setAuthor($user);
            ;
        $form = $this->createForm(CommentFormType::class, $comment, [
            'action' => $this->generateUrl(
                'comment',
                array('id' => $request->get('id'))),
            'method' => 'POST',
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('article', ['id' => $article->getId()]);
        }
        return $this->render('blog/comment.html.twig', ['comment_form' => $form->createView()]);
    }

    /**
     * @Route("/article/{id}", name="article")
     */
    public function article($id, ArticleRepository $articleRepository)
    {
		
        $article = $articleRepository->find($id); //obtain article from repo
        return $this->render('blog/article.html.twig', compact('article'));
    }
    
    
}