<?php

namespace ContainerGyRvnKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\DeleteUserCommand' shared autowired service.
     *
     * @return \App\Command\DeleteUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/DeleteUserCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Utils/Validator.php';

        $container->privates['App\\Command\\DeleteUserCommand'] = $instance = new \App\Command\DeleteUserCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Utils\\Validator'] ??= new \App\Utils\Validator()), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        $instance->setName('app:delete-user');
        $instance->setDescription('Deletes users from the database');

        return $instance;
    }
}
