<?php

namespace App\Controller\Article;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ButtonController extends AbstractController
{
    #[Route('/button', name: 'button')]
    public function index(): Response
    {
        return $this->render('button/index.html.twig', [
            'controller_name' => 'ButtonController',
        ]);
    }
}
