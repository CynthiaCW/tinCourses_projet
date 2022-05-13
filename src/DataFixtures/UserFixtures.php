<?php

namespace App\DataFixtures;

use App\Entity\Interfaces\IRole;
use App\Entity\User; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture implements IRole
{
    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher) 
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

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
        $user->addRole(self::ROLE_ADMIN);
        $user->setPassword($this->userPasswordHasher->hashPassword(
            $user, 
            "estelle123"
            )
    );
        $manager->persist($user);
        $manager->flush();
    }
}
