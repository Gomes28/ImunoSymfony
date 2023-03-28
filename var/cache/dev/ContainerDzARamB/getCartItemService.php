<?php

namespace ContainerDzARamB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartItemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Item\CartItem' shared autowired service.
     *
     * @return \App\Item\CartItem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Item/CartItem.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Products.php';

        return $container->services['App\\Item\\CartItem'] = new \App\Item\CartItem(($container->services['App\\Entity\\Products'] ??= new \App\Entity\Products()));
    }
}