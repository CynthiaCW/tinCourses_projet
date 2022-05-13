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
        $article->setImage("https://www.aprifel.com/wp-content/uploads/2019/02/carotte.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("tomate");
        $article->setDescription("bonne tomate");
        $article->setImage("https://static9.depositphotos.com/1628352/1107/i/600/depositphotos_11071361-stock-photo-tomato.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("coca");
        $article->setDescription("bonne coca");
        $article->setImage("https://media.istockphoto.com/photos/plastic-bottle-of-coca-picture-id537059224?k=20&m=537059224&s=170667a&w=0&h=FD2NoCuJNIw3I5fYG8z0-JB9TFBjJG_3NCVb8l7p4HM=");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("fanta");
        $article->setDescription("bonne fanta");
        $article->setImage("https://media.carrefour.fr/medias/2231bfb0b73f30a288cd5057a61f0021/p_540x540/00000040822938-a1c1-s01.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("cafe");
        $article->setDescription("bonne cafe");
        $article->setImage("https://file1.topsante.com/var/topsante/storage/images/1/3/1/5/1315592/cafe.jpg?alias=exact1024x768_p");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("the");
        $article->setDescription("bonne the");
        $article->setImage("https://www.aprifel.com/wp-content/uploads/2019/02/carotte.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("poulet");
        $article->setDescription("bonne poulet");
        $article->setImage("https://www.aprifel.com/wp-content/uploads/2019/02/carotte.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("patates");
        $article->setDescription("bonne patates");
        $article->setImage("https://www.aprifel.com/wp-content/uploads/2019/02/carotte.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("cacao");
        $article->setDescription("bonne cacao");
        $article->setImage("https://www.aprifel.com/wp-content/uploads/2019/02/carotte.jpg");
        $manager->persist($article);

        $manager->flush();
    }
}
