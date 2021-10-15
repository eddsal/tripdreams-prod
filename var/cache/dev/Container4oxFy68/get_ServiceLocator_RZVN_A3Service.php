<?php

namespace Container4oxFy68;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RZVN_A3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RZVN.a3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RZVN.a3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'programmeRepository' => ['privates', 'App\\Repository\\ProgrammeRepository', 'getProgrammeRepositoryService', true],
        ], [
            'programmeRepository' => 'App\\Repository\\ProgrammeRepository',
        ]);
    }
}
