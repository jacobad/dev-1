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

/* security/login.html.twig */
class __TwigTemplate_1db3105704e04b8e2412a0017646371d0d40c8cd5f7c0500a7483eff6aa6dd86 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "    
    <div class=\"container mt-4\">
        ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", []), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", []), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 12
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
            <div class=\"form-group\">
                <label for=\"username\">Nom d'utilisateur :</label>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"password\">Nom d'utilisateur :</label>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
            </div>

            <button class=\"btn btn-primary\">Connexion</button>
        </form>
    </div>
    

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  47 => 5,  44 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\security\\login.html.twig");
    }
}
