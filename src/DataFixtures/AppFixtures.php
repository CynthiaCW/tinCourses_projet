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
        $article->setImage("https://upload.wikimedia.org/wikipedia/commons/b/b5/Carrots_on_Display.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Tomate");
        $article->setDescription("Jolie Tomate");
        $article->setImage("https://static.750g.com/images/1200-630/bad098f9c46993229ff947eb3694e3cd/gettyimages-531973006.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Coca");
        $article->setDescription("Bon Coca");
        $article->setImage("https://images.rtl.fr/~c/1200v800/rtl/www/1320636-canettes-de-coca-cola-illustration.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Fanta");
        $article->setDescription("Bon Fanta");
        $article->setImage("https://m.media-amazon.com/images/I/71rNnwaLvpL._AC_SX679_PIbundle-24,TopRight,0,0_SH20_.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Café");
        $article->setDescription("Bon Café");
        $article->setImage("https://img.freepik.com/photos-gratuite/cafe-grains-torrefies-cafe-savoureux_23-2148441170.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Thé");
        $article->setDescription("Bon Thé");
        $article->setImage("https://www.consoglobe.com/wp-content/uploads/2019/12/the-bienfaits_shutterstock_1844307922.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Poulet");
        $article->setDescription("Poulet grillé");
        $article->setImage("https://cdn.pratico-pratiques.com/app/uploads/sites/3/2019/02/28100343/poulet-style-rotisserie.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Patates");
        $article->setDescription("Bonnes Patates");
        $article->setImage("https://gourmandiz.dhnet.be/app/uploads/2019/01/patate-909x471.jpg");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Cacao");
        $article->setDescription("Bon Chocolat");
        $article->setImage("https://www.cdiscount.com/pdt2/2/8/8/1/700x700/zca884288/rw/poudre-de-cacao-500-g-nesquik.jpg");
        $manager->persist($article);

        $manager->flush();
    }
}
