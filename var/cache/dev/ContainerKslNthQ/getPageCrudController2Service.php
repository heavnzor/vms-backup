<?php

namespace ContainerKslNthQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageCrudController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PageCrudController' shared autowired service.
     *
     * @return \App\Controller\PageCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PageCrudController.php';

        $container->services['App\\Controller\\PageCrudController'] = $instance = new \App\Controller\PageCrudController();

        $instance->setContainer(($container->privates['.service_locator.clybzLt'] ?? $container->load('get_ServiceLocator_ClybzLtService'))->withContext('App\\Controller\\PageCrudController', $container));

        return $instance;
    }
}
