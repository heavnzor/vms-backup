<?php

namespace ContainerZy5jiLb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MJvCNOaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MJvCNOa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MJvCNOa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'page' => ['privates', '.errored..service_locator.MJvCNOa.App\\Entity\\Page', NULL, 'Cannot autowire service ".service_locator.MJvCNOa": it references class "App\\Entity\\Page" but no such service exists.'],
        ], [
            'page' => 'App\\Entity\\Page',
        ]);
    }
}
