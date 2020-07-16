<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/newFamily' => [[['_route' => 'new_family', '_controller' => 'App\\Controller\\FamilyController::newFamily'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/listFamily' => [[['_route' => 'list_family', '_controller' => 'App\\Controller\\FamilyController::listFamily'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/newFamilyChild' => [[['_route' => 'new_family_child', '_controller' => 'App\\Controller\\FamilyController::newFamilyChild'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/listFamilyChild' => [[['_route' => 'list_family_child', '_controller' => 'App\\Controller\\FamilyController::listFamilyChild'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::familyShow'], null, ['GET' => 0], null, false, false, null]],
        '/newPerson' => [[['_route' => 'new_person', '_controller' => 'App\\Controller\\PersonController::newPerson'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/listPerson' => [[['_route' => 'list_person', '_controller' => 'App\\Controller\\PersonController::listPerson'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/update(?'
                    .'|Family(?'
                        .'|/([^/]++)(*:197)'
                        .'|Child/([^/]++)(*:219)'
                    .')'
                    .'|Person/([^/]++)(*:243)'
                .')'
                .'|/delete(?'
                    .'|Family(?'
                        .'|/([^/]++)(*:280)'
                        .'|Child/([^/]++)(*:302)'
                    .')'
                    .'|Person/([^/]++)(*:326)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'update_family', '_controller' => 'App\\Controller\\FamilyController::updateFamily'], ['id'], ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, false, true, null]],
        219 => [[['_route' => 'update_family_child', '_controller' => 'App\\Controller\\FamilyController::updateFamilyChild'], ['id'], ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, false, true, null]],
        243 => [[['_route' => 'update_person', '_controller' => 'App\\Controller\\PersonController::updatePerson'], ['id'], ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, false, true, null]],
        280 => [[['_route' => 'delete_family', '_controller' => 'App\\Controller\\FamilyController::deleteFamily'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'delete_family_child', '_controller' => 'App\\Controller\\FamilyController::deleteFamilyChild'], ['id'], ['GET' => 0], null, false, true, null]],
        326 => [
            [['_route' => 'delete_person', '_controller' => 'App\\Controller\\PersonController::deletePerson'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
