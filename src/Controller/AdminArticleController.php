<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class AdminArticleController extends AbstractController
{
    #[Route('/article2', name: 'app_admin_article')]
    public function index(ArticleRepository $a): Response
    {
        $articles = $a->findAll();

        return $this->render('admin/article/index.html.twig', [
            'controller_name' => 'AdminArticleController',
            "articles" => $articles
        ]);
    }
}
