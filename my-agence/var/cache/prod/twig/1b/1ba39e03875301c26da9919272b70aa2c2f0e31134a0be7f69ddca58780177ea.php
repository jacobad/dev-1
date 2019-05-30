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

/* admin/property/edit.html.twig */
class __TwigTemplate_1238d39a7a05a2138da0441568d91b05f9274fa7e02aa4e6a7527051999e1d8e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/property/edit.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"container mt-4\">
    <h1>Editer les biens</h1>
    ";
        // line 9
        echo twig_include($this->env, $context, "admin/property/_form.html.twig", ["form" => ($context["form"] ?? null), "button" => "Editer"]);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/property/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  47 => 7,  44 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/property/edit.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\admin\\property\\edit.html.twig");
    }
}
