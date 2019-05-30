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

/* admin/options/edit.html.twig */
class __TwigTemplate_aac2a30422d09eb689296a853ddad76388f5294900ce906441d5105c9d99bb0a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/options/edit.html.twig", 1);
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
    <h1>Editer l'option'</h1>
    ";
        // line 9
        echo twig_include($this->env, $context, "admin/options/_form.html.twig", ["form" => ($context["form"] ?? null), "button" => "Editer"]);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/options/edit.html.twig";
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
        return new Source("", "admin/options/edit.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\admin\\options\\edit.html.twig");
    }
}
