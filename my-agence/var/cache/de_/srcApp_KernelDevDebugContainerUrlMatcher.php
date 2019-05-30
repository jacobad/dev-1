<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                    .'|/admin/(?'
                        .'|options/([^/]++)(?'
                            .'|(*:198)'
                            .'|/edit(*:211)'
                            .'|(*:219)'
                        .')'
                        .'|property/([^/]++)(?'
                            .'|(*:248)'
                        .')'
                    .')'
                    .'|/biens/([a-z0-9\\-]*)\\-([^/]++)(*:288)'
                    .'|/js/routing(?:\\.(js|json))?(*:323)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            198 => [[['_route' => 'admin.options.show', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            211 => [[['_route' => 'admin.options.edit', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            219 => [[['_route' => 'admin.options.delete', '_controller' => 'App\\Controller\\Admin\\AdminOptionsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            248 => [
                [['_route' => 'admin.property.edit', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
                [['_route' => 'admin.property.delete', '_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            ],
            288 => [[['_route' => 'property.show', '_controller' => 'App\\Controller\\PropertyController::show'], ['slug', 'id'], null, null, false, true, null]],
            323 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        ];
    }
}
