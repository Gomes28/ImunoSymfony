<?php

namespace ContainerPKOiM7E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReturnMpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\ReturnMp' shared autowired service.
     *
     * @return \App\Entity\ReturnMp
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/ReturnMp.php';

        return $container->services['App\\Entity\\ReturnMp'] = new \App\Entity\ReturnMp();
    }
}
