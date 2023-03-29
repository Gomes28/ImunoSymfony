<?php

namespace ContainerPKOiM7E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\User' shared autowired service.
     *
     * @return \App\Entity\User
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordAuthenticatedUserInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/User.php';

        return $container->services['App\\Entity\\User'] = new \App\Entity\User();
    }
}
