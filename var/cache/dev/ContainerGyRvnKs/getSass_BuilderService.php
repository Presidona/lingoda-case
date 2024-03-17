<?php

namespace ContainerGyRvnKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_BuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sass.builder' shared service.
     *
     * @return \Symfonycasts\SassBundle\SassBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/sass-bundle/src/SassBuilder.php';

        return $container->privates['sass.builder'] = new \Symfonycasts\SassBundle\SassBuilder([(\dirname(__DIR__, 4).'/assets/styles/app.scss')], (\dirname(__DIR__, 3).'/sass'), \dirname(__DIR__, 4), NULL, true);
    }
}