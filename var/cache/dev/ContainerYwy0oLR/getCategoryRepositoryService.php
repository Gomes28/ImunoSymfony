<?php

namespace ContainerYwy0oLR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Repository\CategoryRepository' shared autowired service.
     *
     * @return \App\Repository\CategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/CategoryRepository.php';

        return $container->services['App\\Repository\\CategoryRepository'] = new \App\Repository\CategoryRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
