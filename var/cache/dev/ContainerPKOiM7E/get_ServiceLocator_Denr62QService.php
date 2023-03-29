<?php

namespace ContainerPKOiM7E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Denr62QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.denr62Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.denr62Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'schools' => ['services', 'App\\Repository\\SchoolVacinRepository', 'getSchoolVacinRepositoryService', true],
        ], [
            'schools' => 'App\\Repository\\SchoolVacinRepository',
        ]);
    }
}