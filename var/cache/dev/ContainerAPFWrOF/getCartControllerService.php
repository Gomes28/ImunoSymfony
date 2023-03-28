<?php

namespace ContainerAPFWrOF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\user\CartController' shared autowired service.
     *
     * @return \App\Controller\user\CartController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/user/CartController.php';

        $container->services['App\\Controller\\user\\CartController'] = $instance = new \App\Controller\user\CartController(($container->privates['twig'] ?? self::getTwigService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\user\\CartController', $container));

        return $instance;
    }
}
