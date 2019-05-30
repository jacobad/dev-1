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
class __TwigTemplate_aae8d657e3ef532a9c03eb909667e89288679c2fd7f31287dbdd6a6b5dd5ce4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"jumbotron text-center\">
    <h1>bienvenue sur votre blog</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias dolore, magni voluptas odit officia nulla, sapiente beatae porro iure eaque suscipit repellat veritatis ullam. Necessitatibus eaque corporis culpa similique?</p>
</div>

<div class=\"container\">
    <h2>Les derniers Biens</h2>
    <div class=\"row flex\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 13, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  115 => 29,  103 => 23,  97 => 22,  91 => 21,  83 => 16,  79 => 14,  75 => 13,  65 => 5,  56 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<div class=\"jumbotron text-center\">
    <h1>bienvenue sur votre blog</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias dolore, magni voluptas odit officia nulla, sapiente beatae porro iure eaque suscipit repellat veritatis ullam. Necessitatibus eaque corporis culpa similique?</p>
</div>

<div class=\"container\">
    <h2>Les derniers Biens</h2>
    <div class=\"row flex\">
        {% for property in properties %}
            <div class=\"col-3\">
                <div class=\"card\">
                    <img src=\"{{asset('uploads/pictures/' ~ property.picture) }}\" alt=\"\" style=\"width:100%; height:auto;\">
                    <div class=\"card-body\">
                        
                        <h5 class=\"card-title\">
                            
                           <a href=\"{{ path('property.show', {id: property.id , slug: property.slug}) }}\">{{ property.title }} </a>
                           <p class=\"card-text\">{{ property.city }} ({{ property.postalCode }})</p>
                           <div class=\"text-primary\">{{ property.formatedPrice }} €</div>
                        </h5>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

{% endblock %}", "pages/home.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\pages\\home.html.twig");
    }
}
