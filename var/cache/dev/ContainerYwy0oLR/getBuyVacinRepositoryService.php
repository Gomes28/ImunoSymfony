<?php

namespace ContainerYwy0oLR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuyVacinRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Repository\BuyVacinRepository' shared autowired service.
     *
     * @return \App\Repository\BuyVacinRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/BuyVacinRepository.php';

        return $container->services['App\\Repository\\BuyVacinRepository'] = new \App\Repository\BuyVacinRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}