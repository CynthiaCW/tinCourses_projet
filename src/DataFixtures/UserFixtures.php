<?php

namespace App\DataFixtures;

use App\Entity\User; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User;
        $user->setPseudo("anne");
        $user->setEmail("anne@user.fr");
        $user->setPassword($this->userPasswordHasher->hashPassword(
            $user, 
            "coucou"
            )
        );
        $manager->persist($user);

        $user = new User;
        $user->setPseudo("estelle");
        $user->setEmail("estelle@user.fr");
        $user->setPassword($this->userPasswordHasher->hashPassword(
            $user, 
            "estelle123"
        )
    );
        $manager->persist($user);
        $manager->flush();
    }
}
