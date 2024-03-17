<?php

namespace ContainerGyRvnKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogSearchComponentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Twig\Components\BlogSearchComponent' autowired service.
     *
     * @return \App\Twig\Components\BlogSearchComponent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-live-component/src/DefaultActionTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Twig/Components/BlogSearchComponent.php';

        $container->factories['App\\Twig\\Components\\BlogSearchComponent'] = function ($container) {
            return new \App\Twig\Components\BlogSearchComponent(($container->privates['App\\Repository\\PostRepository'] ?? $container->load('getPostRepositoryService')));
        };

        return $container->factories['App\\Twig\\Components\\BlogSearchComponent']($container);
    }
}
