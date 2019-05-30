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
class __TwigTemplate_34e7b35f18713e45021258b3b0bbdcb4684c158434c6a31fbbe0934f6f320e6c extends \Twig\Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "title", []), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "title", []), "html", null, true);
        echo "</h1>
                <h2>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "room", []), "html", null, true);
        echo " pieces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "surface", []), "html", null, true);
        echo " m²</h2>
            <div class=\"text-primary\" style=\"font-size : 4rem; font-weight: bold\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "formatedPrice", []), "html", null, true);
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
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "description", []), "html", null, true));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "surface", []), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "room", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "bedrooms", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "floor", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "heatType", []), "html", null, true);
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
        return array (  148 => 72,  141 => 68,  134 => 64,  127 => 60,  120 => 56,  107 => 46,  95 => 37,  89 => 36,  85 => 35,  54 => 6,  51 => 5,  45 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "property/show.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\property\\show.html.twig");
    }
}
