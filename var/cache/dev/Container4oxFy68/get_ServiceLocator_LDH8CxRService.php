<?php

namespace Container4oxFy68;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LDH8CxRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lDH8CxR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lDH8CxR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tarif' => ['privates', '.errored..service_locator.lDH8CxR.App\\Entity\\Tarif', NULL, 'Cannot autowire service ".service_locator.lDH8CxR": it references class "App\\Entity\\Tarif" but no such service exists.'],
        ], [
            'tarif' => 'App\\Entity\\Tarif',
        ]);
    }
}