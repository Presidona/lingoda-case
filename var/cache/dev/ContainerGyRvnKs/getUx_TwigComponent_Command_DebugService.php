<?php

namespace ContainerGyRvnKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_Command_DebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.command.debug' shared service.
     *
     * @return \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/Command/TwigComponentDebugCommand.php';

        $container->privates['ux.twig_component.command.debug'] = $instance = new \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand((\dirname(__DIR__, 4).'/templates'), ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService')), ($container->privates['twig'] ?? self::getTwigService($container)), ['App\\Twig\\Components\\BlogSearchComponent' => 'blog_search'], 'components/');

        $instance->setName('debug:twig-component');
        $instance->setDescription('Display components and them usages for an application');

        return $instance;
    }
}
