<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'admin.options.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionsController::index'], [], [['text', '/admin/options/']], [], []],
        'admin.options.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionsController::new'], [], [['text', '/admin/options/new']], [], []],
        'admin.options.show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/options']], [], []],
        'admin.options.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/options']], [], []],
        'admin.options.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/options']], [], []],
        'admin.property.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::index'], [], [['text', '/admin']], [], []],
        'admin.property.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::new'], [], [['text', '/admin/property/create']], [], []],
        'admin.property.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/property']], [], []],
        'admin.property.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminPropertyController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/property']], [], []],
        'property.index' => [[], ['_controller' => 'App\\Controller\\PropertyController::index'], [], [['text', '/biens']], [], []],
        'property.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\PropertyController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/biens']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'logout' => [[], [], [], [['text', '/logout']], [], []],
        'fos_js_routing_js' => [['_format'], ['_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format' => 'js|json'], [['variable', '.', 'js|json', '_format', true], ['text', '/js/routing']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}