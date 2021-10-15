<?php

namespace Container4oxFy68;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Rememberme_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.provider.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/RememberMeAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/UserChecker.php';

        return $container->privates['security.authentication.provider.rememberme.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider(($container->privates['App\\Security\\UserChecker'] ?? ($container->privates['App\\Security\\UserChecker'] = new \App\Security\UserChecker())), $container->getEnv('APP_SECRET'), 'main');
    }
}
