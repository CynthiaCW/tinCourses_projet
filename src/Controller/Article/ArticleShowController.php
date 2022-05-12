<?php

namespace App\Controller\Article;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

#[Route('/article')]
class ArticleShowController extends AbstractController
{

    #[Route('/{article}', name: 'app_article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {

        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/', name: 'app_article', methods: ['GET'])]
    public function index(ArticleRepository $a) : Response
    {
        $articles = $a->findAll();

        $id = array_rand($articles);
        $article = $a->find($id);
        while($article === null)
        {
            $id = array_rand($articles);
            $article = $a->find($id);
        }

        //dd($article);
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
            "articleRandom" => $article
        ]);
    }

    
}
