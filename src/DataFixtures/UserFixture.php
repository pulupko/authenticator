<?php

declare(strict_types = 1);

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixture extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $passwordHasher)
    { }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('test@mail.com');
        $user->setRoles(['ROLE_USER']);

        $user->setPassword($this->passwordHasher->hashPassword($user, '12345678'));

        $manager->persist($user);

        $manager->flush();
    }
}
