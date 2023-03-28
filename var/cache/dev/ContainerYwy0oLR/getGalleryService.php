<?php

namespace ContainerYwy0oLR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGalleryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Model\Gallery' shared autowired service.
     *
     * @return \App\Model\Gallery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Interfaces/Serializable.php';
        include_once \dirname(__DIR__, 4).'/src/Model/Gallery.php';

        return $container->services['App\\Model\\Gallery'] = new \App\Model\Gallery();
    }
}
