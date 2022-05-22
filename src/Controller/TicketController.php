<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class TicketController extends AbstractController
{
    #[Route('/ticket', name: 'app_ticket')]
    public function index(SessionInterface $session, ArticleRepository $articleRepository): Response
    {
        $ticket = $session->get('ticket', []);

        $ticketUser = [];

        foreach ($ticket as $id => $quantite){
            $description = $articleRepository->$description;
            $nom = $articleRepository -> $nom;
            $image = $articleRepository -> $image;

            $ticketUser[] = [
                'article'=> $articleRepository->find($id),
                'nom'=> $articleRepository->find($nom),
                'description'=> $articleRepository->find($description),
                'image'=>$articleRepository->find($image),
                'quantite' => $quantite
            ];
        }

        return $this->render('ticket/index.html.twig', [
            'controller_name' => 'TicketController',
            'article' => $ticketUser
        ]);
    }

    #[Route('/ticket/add/{id}', name: 'app_ticket_add')]
    public function add($id, SessionInterface $session)
    {
        $ticket = $session->get('ticket', []);

        if(!empty($ticket[$id])) {
            $ticket[$id]++;
        } else {
            $ticket[$id]=1;
        }

        $ticket[$id] = 1;
        $session->set('ticket', $ticket);
        dd($session->get('ticket'));
    }
}
