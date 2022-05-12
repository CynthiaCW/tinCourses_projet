<?php

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
            ->add('user')
            ->add('article')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void // Permetbde spécifier l'utilisation de l'input pour le form
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
