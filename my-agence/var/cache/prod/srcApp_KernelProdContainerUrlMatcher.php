<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin/options' => [[['_route' => 'admin.options.index', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::index'], null, ['GET' => 0], null, true, false, null]],
            '/admin/options/new' => [[['_route' => 'admin.options.new', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin' => [[['_route' => 'admin.property.index', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], null, null, null, false, false, null]],
            '/admin/property/create' => [[['_route' => 'admin.property.new', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], null, null, null, false, false, null]],
            '/biens' => [[['_route' => 'property.index', '_controller' => 'App\\Controller\\PropertyController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|options/([^/]++)(?'
                            .'|(*:36)'
                            .'|/edit(*:48)'
                            .'|(*:55)'
                        .')'
                        .'|property/([^/]++)(?'
                            .'|(*:83)'
                        .')'
                    .')'
                    .'|/biens/([a-z0-9\\-]*)\\-([^/]++)(*:122)'
                    .'|/js/routing(?:\\.(js|json))?(*:157)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            36 => [[['_route' => 'admin.options.show', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            48 => [[['_route' => 'admin.options.edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            55 => [[['_route' => 'admin.options.delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            83 => [
                [['_route' => 'admin.property.edit', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
                [['_route' => 'admin.property.delete', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            ],
            122 => [[['_route' => 'property.show', '_controller' => 'App\\Controller\\PropertyController::show'], ['slug', 'id'], null, null, false, true, null]],
            157 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        ];
    }
}
