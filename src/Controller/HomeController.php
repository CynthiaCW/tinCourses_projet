<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();
        //dd($articles);
        if(!($articles === null)){

            //dd($id);
            $article = null;
            while($article === null)
            {
                $id = rand(0, $articles[count($articles)-1]->getId() );
                $article = $articleRepository->find($id);
            }

            return $this->render('home/index.html.twig', [
                "article" => $article,
                "articles"=> $articles,
                'controller_name' => 'HomeController'
            ]);
        }
        else{
            dd("je suis dans le else");
        }
    }



}
