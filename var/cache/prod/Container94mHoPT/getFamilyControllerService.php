<?php

namespace Container94mHoPT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFamilyControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FamilyController' shared autowired service.
     *
     * @return \App\Controller\FamilyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\FamilyController.php';

        $container->services['App\\Controller\\FamilyController'] = $instance = new \App\Controller\FamilyController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\FamilyController', $container));

        return $instance;
    }
}