<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $article = new Article();
        $article->setNom("Carotte");
        $article->setDescription("Jolie Carotte");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Tomate");
        $article->setDescription("Jolie Tomate");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Coca");
        $article->setDescription("Bon Coca");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Fanta");
        $article->setDescription("Bon Fanta");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Café");
        $article->setDescription("Bon Café");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Thé");
        $article->setDescription("Bon Thé");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Poulet");
        $article->setDescription("Tranches de poulet");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Patates");
        $article->setDescription("Bonnes Patates");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Cacao");
        $article->setDescription("Bon Chocolat");
        $manager->persist($article);

        $manager->flush();
    }
}
