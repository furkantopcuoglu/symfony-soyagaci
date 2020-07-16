<?php

namespace Container94mHoPT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonLogicService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Logic\PersonLogic' shared autowired service.
     *
     * @return \App\Logic\PersonLogic
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Logic\\PersonLogic.php';

        return $container->privates['App\\Logic\\PersonLogic'] = new \App\Logic\PersonLogic(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['twig'] ?? $container->load('getTwigService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
