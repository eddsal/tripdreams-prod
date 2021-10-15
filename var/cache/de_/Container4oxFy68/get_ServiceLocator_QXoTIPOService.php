<?php

namespace Container4oxFy68;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QXoTIPOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qXoTIPO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qXoTIPO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'favorieRepository' => ['privates', 'App\\Repository\\FavorieRepository', 'getFavorieRepositoryService', true],
        ], [
            'favorieRepository' => 'App\\Repository\\FavorieRepository',
        ]);
    }
}
