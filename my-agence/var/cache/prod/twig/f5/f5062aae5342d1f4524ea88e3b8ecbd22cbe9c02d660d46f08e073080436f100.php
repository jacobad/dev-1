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

/* admin/options/_form.html.twig */
class __TwigTemplate_d742641b910922883c5b757d81287624aef3125c9fdece49989a3c067e07f38b extends \Twig\Template
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
        echo "<div class=\"container mt-2\">
       
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

        
    
        <button class=\"btn btn-primary\">";
        // line 8
        echo twig_escape_filter($this->env, (((isset($context["button"]) || array_key_exists("button", $context))) ? (_twig_default_filter(($context["button"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>

    <div class=\"picturesShow\">

    </div>";
    }

    public function getTemplateName()
    {
        return "admin/options/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/options/_form.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\admin\\options\\_form.html.twig");
    }
}
