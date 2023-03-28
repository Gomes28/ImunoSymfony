<?php

namespace ContainerDzARamB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9R5lv1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9R_5lv1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9R_5lv1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.admin' => ['privates', 'debug.security.event_dispatcher.admin', 'getDebug_Security_EventDispatcher_AdminService', false],
            'security.event_dispatcher.front' => ['privates', 'debug.security.event_dispatcher.front', 'getDebug_Security_EventDispatcher_FrontService', false],
        ], [
            'event_dispatcher' => '?',
            'security.event_dispatcher.admin' => '?',
            'security.event_dispatcher.front' => '?',
        ]);
    }
}
