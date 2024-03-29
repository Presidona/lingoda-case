<?php

namespace ContainerGyRvnKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7pVff4hService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7pVff4h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7pVff4h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'posts' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.7pVff4h.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.7pVff4h": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'posts' => 'App\\Repository\\PostRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
