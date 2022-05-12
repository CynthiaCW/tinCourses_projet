<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setNom("carotte");
        $article->setDescription("bonne carotte");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("tomate");
        $article->setDescription("bonne tomate");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("coca");
        $article->setDescription("bonne coca");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("fanta");
        $article->setDescription("bonne fanta");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("cafe");
        $article->setDescription("bonne cafe");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("the");
        $article->setDescription("bonne the");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("poulet");
        $article->setDescription("bonne poulet");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("patates");
        $article->setDescription("bonne patates");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("cacao");
        $article->setDescription("bonne cacao");
        $manager->persist($article);

        $manager->flush();
    }
}
