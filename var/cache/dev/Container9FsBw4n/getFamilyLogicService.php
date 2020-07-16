<?php

namespace Container9FsBw4n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFamilyLogicService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Logic\FamilyLogic' shared autowired service.
     *
     * @return \App\Logic\FamilyLogic
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Logic\\FamilyLogic.php';

        return $container->privates['App\\Logic\\FamilyLogic'] = new \App\Logic\FamilyLogic(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}