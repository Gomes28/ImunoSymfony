<?php

namespace ContainerPKOiM7E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMercadoPagoServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\MercadoPagoService' shared autowired service.
     *
     * @return \App\Service\MercadoPagoService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/MercadoPagoService.php';

        return $container->services['App\\Service\\MercadoPagoService'] = new \App\Service\MercadoPagoService();
    }
}
