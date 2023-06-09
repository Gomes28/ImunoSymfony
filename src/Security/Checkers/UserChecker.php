<?php


namespace App\Security\Checkers;


use App\Entity\User;

use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof User) return;
        if (!$user->getStatus()) throw new CustomUserMessageAccountStatusException('Access blocked!');
    }

    public function checkPostAuth(UserInterface $user): bool
    {
        return !($user instanceof  User);
    }
}