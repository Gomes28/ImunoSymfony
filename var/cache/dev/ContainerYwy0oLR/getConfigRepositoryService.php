<?php

namespace ContainerYwy0oLR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Repository\ConfigRepository' shared autowired service.
     *
     * @return \App\Repository\ConfigRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/ConfigRepository.php';

        return $container->services['App\\Repository\\ConfigRepository'] = new \App\Repository\ConfigRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
