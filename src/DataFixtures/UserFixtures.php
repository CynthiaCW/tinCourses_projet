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
        $this->userPasswordHasher= $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setEmail("admin@admin.fr");
        $user->setPassword($this->userPasswordHasher->hashPassword($user,"coucou"));
        $user->addRole(self::ROLE_ADMIN);

        $manager->persist($user);

        $user = new User();
        $user->setEmail("member@member.fr");
        $user->setPassword($this->userPasswordHasher->hashPassword($user,"coucou"));
        $user->addRole(self::ROLE_MEMBER);

        $manager->persist($user);
        $manager->flush();
    }
}
