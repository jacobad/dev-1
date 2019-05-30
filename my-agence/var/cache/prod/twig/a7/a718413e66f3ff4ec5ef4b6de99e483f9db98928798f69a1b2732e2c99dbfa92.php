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

/* property/_property.html.twig */
class __TwigTemplate_5ea357310461a6927b07d0998d36e94184db0c0b55df7ce3b0b03460afca620b extends \Twig\Template
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
        echo "<div class=\"card mb-4\">
    
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "picture", []))), "html", null, true);
        echo "\" alt=\"\">
    <div class=\"card-body\">
        
    
        <h5 class=\"card-title\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", []), "id" => twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "id", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "title", []), "html", null, true);
        echo "</a>
        </h5>
        <p class=\"card-text\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "surface", []), "html", null, true);
        echo " m² -";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "city", []), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "postalCode", []), "html", null, true);
        echo "</p>
        <div class=\"text-primary\" style=\"font-size:2rem; font-weight: bold;\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "formatedPrice", []), "html", null, true);
        echo " €
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "property/_property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  54 => 10,  47 => 8,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "property/_property.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\property\\_property.html.twig");
    }
}
