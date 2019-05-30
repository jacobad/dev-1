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

/* base.html.twig */
class __TwigTemplate_914bd74d72af23a488bfd8cab15bfa157e86a1658ae684f742ff7a1da6d5f6a5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css
\">      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />

      ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" >
                    <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">MonAgence</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                      <span class=\"navbar-toggler-icon\"></span>
                    </button>
                  
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                      <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item \">
                          <a class=\"nav-link ";
        // line 25
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context)) && (($context["current_menu"] ?? null) == "properties"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.index");
        echo "\">Acheter</a>
                        </li>

                        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [])) {
            // line 29
            echo "                        <ul class=\"navbar-nav\">
                          <li class=\"nav-item\">
                            <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\">Deconnexion</a>
                          </li>
                        </ul>

                        ";
        }
        // line 36
        echo "                        
                    </div>
                  </nav>

        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
    
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        // line 42
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/app.js"), "html", null, true);
        echo "\" ></script>

<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\" ></script>

 <script>
        \$('select').select2();
    </script>

";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  151 => 47,  142 => 42,  139 => 41,  134 => 40,  129 => 13,  123 => 5,  115 => 56,  112 => 41,  110 => 40,  104 => 36,  96 => 31,  92 => 29,  90 => 28,  80 => 25,  69 => 17,  64 => 14,  62 => 13,  58 => 12,  53 => 10,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\base.html.twig");
    }
}
