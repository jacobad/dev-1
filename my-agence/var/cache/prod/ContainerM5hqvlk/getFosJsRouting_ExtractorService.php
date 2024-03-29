<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_js_routing.extractor' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\jsrouting-bundle\\Extractor\\ExposedRoutesExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\jsrouting-bundle\\Extractor\\ExposedRoutesExtractor.php';

return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(($this->services['router'] ?? $this->getRouterService()), [], $this->targetDirs[0], $this->parameters['kernel.bundles']);
