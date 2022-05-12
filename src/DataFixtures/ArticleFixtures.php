<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setNom("Nom " . $i);
            $article->setDescription("Description" . $i);
            $manager->persist($article);
        }
        $manager->flush();
    }
}
