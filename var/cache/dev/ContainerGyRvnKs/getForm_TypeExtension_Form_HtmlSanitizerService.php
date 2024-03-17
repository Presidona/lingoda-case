<?php

namespace ContainerGyRvnKs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_HtmlSanitizerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.form.html_sanitizer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HtmlSanitizer\Type\TextTypeHtmlSanitizerExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HtmlSanitizer/Type/TextTypeHtmlSanitizerExtension.php';

        return $container->privates['form.type_extension.form.html_sanitizer'] = new \Symfony\Component\Form\Extension\HtmlSanitizer\Type\TextTypeHtmlSanitizerExtension(($container->privates['.service_locator.VZmeTnN'] ?? self::get_ServiceLocator_VZmeTnNService($container)));
    }
}
