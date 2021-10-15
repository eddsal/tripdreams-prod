<?php

namespace ContainerKPgbUsu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_FixturesLoadCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Command/LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataFixtures/ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Loader/SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Fixture.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/ActivityFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/AdresseFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/DependentFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/AvisFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/InfoPratiqueFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/PaysFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/ProgrammeFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/SaisonFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/TarifFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/UserFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/VilleFixtures.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/VoyageFixtures.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        $a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($container);
        $a->addFixtures([0 => ['fixture' => new \App\DataFixtures\ActivityFixtures(), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\AdresseFixtures(), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\AvisFixtures(), 'groups' => []], 3 => ['fixture' => new \App\DataFixtures\InfoPratiqueFixtures(), 'groups' => []], 4 => ['fixture' => new \App\DataFixtures\PaysFixtures(), 'groups' => []], 5 => ['fixture' => new \App\DataFixtures\ProgrammeFixtures(), 'groups' => []], 6 => ['fixture' => new \App\DataFixtures\SaisonFixtures(), 'groups' => []], 7 => ['fixture' => new \App\DataFixtures\TarifFixtures(), 'groups' => []], 8 => ['fixture' => new \App\DataFixtures\UserFixtures(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService'))), 'groups' => []], 9 => ['fixture' => new \App\DataFixtures\VilleFixtures(), 'groups' => []], 10 => ['fixture' => new \App\DataFixtures\VoyageFixtures(), 'groups' => []]]);

        $container->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a, ($container->services['doctrine'] ?? $container->getDoctrineService()), ['default' => new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }
}
