<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $a): Response
    {
        $articles = $a->findAll();
        
        /*
        $id = array_rand($articles);
        $article = $a->find($id);
        
        while($article === null)
        {
            $id = array_rand($articles);
            $article = $a->find($id);
        }*/
        $id = rand($articles[0]->getId(), $articles[count($articles)-1]->getId());
        
        foreach($articles as $var )
        {
            if($var->getId() == $id)
            {
                $id = $var->getId();
            }
        }

        $article = $a->find($id);
        return $this->render('home/index.html.twig', [
            "article" => $article,
            'controller_name' => 'HomeController',
        ]);
    }
}
