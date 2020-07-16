<?php

namespace ContainerQKM3jKQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3z_LWdJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3z.lWdJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3z.lWdJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FamilyController::deleteFamily' => ['privates', '.service_locator.FPvqqnh', 'get_ServiceLocator_FPvqqnhService', true],
            'App\\Controller\\FamilyController::deleteFamilyChild' => ['privates', '.service_locator.C_lH.AB', 'get_ServiceLocator_CLH_ABService', true],
            'App\\Controller\\FamilyController::listFamily' => ['privates', '.service_locator.63_7RuB', 'get_ServiceLocator_637RuBService', true],
            'App\\Controller\\FamilyController::listFamilyChild' => ['privates', '.service_locator.63_7RuB', 'get_ServiceLocator_637RuBService', true],
            'App\\Controller\\FamilyController::newFamily' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\FamilyController::newFamilyChild' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\FamilyController::updateFamily' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\FamilyController::updateFamilyChild' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\HomeController::familyShow' => ['privates', '.service_locator.63_7RuB', 'get_ServiceLocator_637RuBService', true],
            'App\\Controller\\PersonController::deletePerson' => ['privates', '.service_locator.w3MCI1S', 'get_ServiceLocator_W3MCI1SService', true],
            'App\\Controller\\PersonController::listPerson' => ['privates', '.service_locator.JDImN0I', 'get_ServiceLocator_JDImN0IService', true],
            'App\\Controller\\PersonController::newPerson' => ['privates', '.service_locator.bZ30AFg', 'get_ServiceLocator_BZ30AFgService', true],
            'App\\Controller\\PersonController::updatePerson' => ['privates', '.service_locator.w3MCI1S', 'get_ServiceLocator_W3MCI1SService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\FamilyController:deleteFamily' => ['privates', '.service_locator.FPvqqnh', 'get_ServiceLocator_FPvqqnhService', true],
            'App\\Controller\\FamilyController:deleteFamilyChild' => ['privates', '.service_locator.C_lH.AB', 'get_ServiceLocator_CLH_ABService', true],
            'App\\Controller\\FamilyController:listFamily' => ['privates', '.service_locator.63_7RuB', 'get_ServiceLocator_637RuBService', true],
            'App\\Controller\\FamilyController:listFamilyChild' => ['privates', '.service_locator.63_7RuB', 'get_ServiceLocator_637RuBService', true],
            'App\\Controller\\FamilyController:newFamily' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\FamilyController:newFamilyChild' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\FamilyController:updateFamily' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\FamilyController:updateFamilyChild' => ['privates', '.service_locator.zt9eDTc', 'get_ServiceLocator_Zt9eDTcService', true],
            'App\\Controller\\HomeController:familyShow' => ['privates', '.service_locator.63_7RuB', 'get_ServiceLocator_637RuBService', true],
            'App\\Controller\\PersonController:deletePerson' => ['privates', '.service_locator.w3MCI1S', 'get_ServiceLocator_W3MCI1SService', true],
            'App\\Controller\\PersonController:listPerson' => ['privates', '.service_locator.JDImN0I', 'get_ServiceLocator_JDImN0IService', true],
            'App\\Controller\\PersonController:newPerson' => ['privates', '.service_locator.bZ30AFg', 'get_ServiceLocator_BZ30AFgService', true],
            'App\\Controller\\PersonController:updatePerson' => ['privates', '.service_locator.w3MCI1S', 'get_ServiceLocator_W3MCI1SService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\FamilyController::deleteFamily' => '?',
            'App\\Controller\\FamilyController::deleteFamilyChild' => '?',
            'App\\Controller\\FamilyController::listFamily' => '?',
            'App\\Controller\\FamilyController::listFamilyChild' => '?',
            'App\\Controller\\FamilyController::newFamily' => '?',
            'App\\Controller\\FamilyController::newFamilyChild' => '?',
            'App\\Controller\\FamilyController::updateFamily' => '?',
            'App\\Controller\\FamilyController::updateFamilyChild' => '?',
            'App\\Controller\\HomeController::familyShow' => '?',
            'App\\Controller\\PersonController::deletePerson' => '?',
            'App\\Controller\\PersonController::listPerson' => '?',
            'App\\Controller\\PersonController::newPerson' => '?',
            'App\\Controller\\PersonController::updatePerson' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\FamilyController:deleteFamily' => '?',
            'App\\Controller\\FamilyController:deleteFamilyChild' => '?',
            'App\\Controller\\FamilyController:listFamily' => '?',
            'App\\Controller\\FamilyController:listFamilyChild' => '?',
            'App\\Controller\\FamilyController:newFamily' => '?',
            'App\\Controller\\FamilyController:newFamilyChild' => '?',
            'App\\Controller\\FamilyController:updateFamily' => '?',
            'App\\Controller\\FamilyController:updateFamilyChild' => '?',
            'App\\Controller\\HomeController:familyShow' => '?',
            'App\\Controller\\PersonController:deletePerson' => '?',
            'App\\Controller\\PersonController:listPerson' => '?',
            'App\\Controller\\PersonController:newPerson' => '?',
            'App\\Controller\\PersonController:updatePerson' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
