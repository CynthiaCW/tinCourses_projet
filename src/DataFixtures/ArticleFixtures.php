<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


// Génération de datas en boucle
//class ArticleFixtures extends Fixture
//{
//    public function load(ObjectManager $manager): void
//    {
//       for ($i = 0; $i < 20; $i++) {
//            $article = new Article();
//            $article->setNom("Nom " . $i);
//            $article->setDescription("Description" . $i);
//            $article->setImage("Image".$i);
//            $manager->persist($article);
//        }
//        $manager->flush();
//    }
//}

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setNom("vanille");
        $article->setDescription('De la vraie vanille de Madagascar pour tout ce qui est bon');
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("carotte");
        $article->setDescription('ça vous vendra aimable, ou presque');
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Chocolat");
        $article->setDescription('Pas de bras, pas de chocolat');
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("St Morêt");
        $article->setDescription('Si et seulement si vous avez un esprit fort, sinon thcatchatte');
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Pain");
        $article->setDescription("Le pain c'est la vie");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Soupe mamie");
        $article->setDescription("C'est dans la liste, mais t'en aura pas 😈");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Pickles");
        $article->setDescription("Da best, ne pas en donner à Isa, sous peine d'y être encore le mois d'après krkrkrkr");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Café");
        $article->setDescription("C'est trop bon");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Papier toilette");
        $article->setDescription("Sinon c'est la merde");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Pâtes");
        $article->setDescription("Salé ou sucré si t'es chelou");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Waza");
        $article->setDescription("C'est bon et bien, alterner avec le pain");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Miel");
        $article->setDescription("pops");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Coucou");
        $article->setDescription("Si tu m'as mis dans ta liste c'est que t'as vraiment faim de rien");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Avocat");
        $article->setDescription("Du diable");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $article = new Article();
        $article->setNom("Fraise");
        $article->setDescription("Au champ");
        $article->setImage("https://picsum.photos/200");
        $manager->persist($article);

        $manager->flush();
    }
}