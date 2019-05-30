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

/* property/show.html.twig */
class __TwigTemplate_203dcb4a6b085f2ee6565a9b70c564787543571e0685a17017bd37a2b5d773ae extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">

                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                              <div class=\"carousel-item active\">
                                <img class=\"d-block w-100\" src=\"...\" alt=\"First slide\">
                              </div>
                              <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"...\" alt=\"Second slide\">
                              </div>
                              <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"...\" alt=\"Third slide\">
                              </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                            </a>
                          </div>
                          
            </div>
            <div class=\"col-md-4\">
                <h1>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>
                <h2>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "room", []), "html", null, true);
        echo " pieces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "surface", []), "html", null, true);
        echo " m²</h2>
            <div class=\"text-primary\" style=\"font-size : 4rem; font-weight: bold\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 37, $this->source); })()), "formatedPrice", []), "html", null, true);
        echo "</div>
            <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
        </div>
        </div>
    </div>
</div>
<div class=\"container mt-4\">
    
        <p>
            ";
        // line 46
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 46, $this->source); })()), "description", []), "html", null, true));
        echo "
        </p>

        <div class=\"row\">
            
            <div class=\"col-md-8\">
                <h3>Caractéristiques</h3>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 56, $this->source); })()), "surface", []), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 60, $this->source); })()), "room", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 64, $this->source); })()), "bedrooms", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 68, $this->source); })()), "floor", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 72, $this->source); })()), "heatType", []), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            
            <div class=\"col-md-4\">
                <h3>Spécificité</h3>
            </div>

        </div>
    
    
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 72,  171 => 68,  164 => 64,  157 => 60,  150 => 56,  137 => 46,  125 => 37,  119 => 36,  115 => 35,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block body %}
<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">

                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                              <div class=\"carousel-item active\">
                                <img class=\"d-block w-100\" src=\"...\" alt=\"First slide\">
                              </div>
                              <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"...\" alt=\"Second slide\">
                              </div>
                              <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"...\" alt=\"Third slide\">
                              </div>
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                            </a>
                          </div>
                          
            </div>
            <div class=\"col-md-4\">
                <h1>{{ property.title }}</h1>
                <h2>{{ property.room }} pieces - {{ property.surface}} m²</h2>
            <div class=\"text-primary\" style=\"font-size : 4rem; font-weight: bold\">{{ property.formatedPrice }}</div>
            <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
        </div>
        </div>
    </div>
</div>
<div class=\"container mt-4\">
    
        <p>
            {{ property.description |nl2br }}
        </p>

        <div class=\"row\">
            
            <div class=\"col-md-8\">
                <h3>Caractéristiques</h3>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ property.room }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ property.floor }}</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>
            </div>
            
            <div class=\"col-md-4\">
                <h3>Spécificité</h3>
            </div>

        </div>
    
    
</div>


{% endblock %}
", "property/show.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\property\\show.html.twig");
    }
}
