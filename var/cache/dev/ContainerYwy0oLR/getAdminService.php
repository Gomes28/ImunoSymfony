<?php

namespace ContainerYwy0oLR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Admin' shared autowired service.
     *
     * @return \App\Entity\Admin
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Admin.php';

        return $container->services['App\\Entity\\Admin'] = new \App\Entity\Admin();
    }
}
