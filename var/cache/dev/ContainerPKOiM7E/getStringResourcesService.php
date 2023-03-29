<?php

namespace ContainerPKOiM7E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStringResourcesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Helper\StringResources' shared autowired service.
     *
     * @return \App\Helper\StringResources
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Helper/StringResources.php';

        return $container->services['App\\Helper\\StringResources'] = new \App\Helper\StringResources();
    }
}
