<?php

namespace ContainerPKOiM7E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\user\BuyController' shared autowired service.
     *
     * @return \App\Controller\user\BuyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/user/BuyController.php';

        $container->services['App\\Controller\\user\\BuyController'] = $instance = new \App\Controller\user\BuyController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\user\\BuyController', $container));

        return $instance;
    }
}
