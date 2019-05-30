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

/* pages/home.html.twig */
class __TwigTemplate_90be4aa08d0e20b457fd4c9880c5a643e22ea251119ab4090aaead4630bea360 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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
        echo "<div id=\"homePresentation\" class=\"jumbotron text-center\">
    <h1>bienvenue sur votre blog</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias dolore, magni voluptas odit officia nulla, sapiente beatae porro iure eaque suscipit repellat veritatis ullam. Necessitatibus eaque corporis culpa similique?</p>
</div>

<div class=\"container\">
    <h2>Les derniers Biens</h2>
    <div class=\"row flex\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 14
            echo "            <div class=\"col-3\">
                <div class=\"card\">
                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->source, $context["property"], "picture", []))), "html", null, true);
            echo "\" alt=\"\" style=\"width:100%; height:auto;\">
                    <div class=\"card-body\">
                        
                        <h5 class=\"card-title\">
                            
                           <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", []), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", []), "html", null, true);
            echo " </a>
                           <p class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "postalCode", []), "html", null, true);
            echo ")</p>
                           <div class=\"text-primary\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "formatedPrice", []), "html", null, true);
            echo " €</div>
                        </h5>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  85 => 23,  79 => 22,  73 => 21,  65 => 16,  61 => 14,  57 => 13,  47 => 5,  44 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\pages\\home.html.twig");
    }
}
