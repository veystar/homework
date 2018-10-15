<?php

namespace App\Service;
use App\Repository\ArticleRepository;

class ViewAllArticles
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
        {
            $this->articleRepository = $articleRepository;
        }

    public function getAllArticles()
        {
            return $this->articleRepository->findAll();
        }

}

