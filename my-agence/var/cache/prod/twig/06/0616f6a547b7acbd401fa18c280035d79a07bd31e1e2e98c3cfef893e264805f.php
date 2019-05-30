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

/* admin/options/new.html.twig */
class __TwigTemplate_49d2051875d8d68d5919123873f6f589a2275f837bf8fcffbb42064bd4568512 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/options/new.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "<h2>Créer une nouvelle Option</h2>
";
        // line 6
        echo twig_include($this->env, $context, "admin/options/_form.html.twig", ["form" => ($context["form"] ?? null), "button" => "Enregistrer"]);
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/options/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  47 => 5,  44 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/options/new.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\admin\\options\\new.html.twig");
    }
}
