<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\User;
use App\Entity\MicroPost;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $userPasswordHasher
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setName('user1');
        $user1->setEmail('test@test.com');
        $user1->setTelefone('649909860048');
        $user1->setCpf('05523120832');
        $user1->setRoles(['ROLE_USER']);
        $user1->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user1,
                '12345678'
            )
        );
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('user2');
        $user2->setEmail('john@test.com');
        $user2->setTelefone('649909860048');
        $user2->setCpf('05523120832');
        $user2->setRoles(['ROLE_USER']);
        $user2->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user2,
                '12345678'
            )
        );
        $manager->persist($user2);
        $manager->flush();
    }
}