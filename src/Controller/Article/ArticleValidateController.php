<?php

namespace App\Controller\Article;

use App\Entity\Ticket;
use App\Form\TicketType;
use App\Entity\Article;
use App\Repository\TicketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article/validate')]
class ArticleValidateController extends AbstractController
{

    #[Route('/new', name: 'app_article_validate_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TicketRepository $ticketRepository): Response
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ticketRepository->add($ticket, true);
            
            return $this->redirectToRoute('app_article_validate_index', [], Response::HTTP_SEE_OTHER);
        }

        

        return $this->renderForm('article_validate/new.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
            "articleRandom" => $article
        ]);
    }






}
