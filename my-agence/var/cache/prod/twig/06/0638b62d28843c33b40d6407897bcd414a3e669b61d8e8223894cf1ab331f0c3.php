<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Twig/images/icon-plus-square.svg */
class __TwigTemplate_1020b7bcd60534e98cbdfc38373941b1a3351f76344ccaa307fdaeba04e662af extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<svg width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1408 960v-128q0-26-19-45t-45-19h-320v-320q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v320h-320q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z\"/></svg>
";
    }

    public function getTemplateName()
    {
        return "@Twig/images/icon-plus-square.svg";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/images/icon-plus-square.svg", "C:\\wamp64\\www\\my-agence\\vendor\\symfony\\twig-bundle\\Resources\\views\\images\\icon-plus-square.svg");
    }
}
