<?php

namespace ContainerKPgbUsu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayementService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\Payement' shared autowired service.
     *
     * @return \App\Services\Payement
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/Payement.php';

        return $container->privates['App\\Services\\Payement'] = new \App\Services\Payement();
    }
}
