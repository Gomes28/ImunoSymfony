<?php

namespace ContainerYwy0oLR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.pdo_session_handler_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/PdoSessionHandlerSchemaListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php';

        return $container->privates['doctrine.orm.listeners.pdo_session_handler_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($container->targetDir.''.'/sessions'))));
    }
}