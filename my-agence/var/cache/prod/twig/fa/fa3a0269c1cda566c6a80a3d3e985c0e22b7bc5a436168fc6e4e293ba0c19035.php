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

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_a7728704b22f75fb26e4827a7579c9d2138460c8b95d1438500edb7d1256f925 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 4
            echo "    <div class=\"pagination\">
        ";
            // line 5
            if (((isset($context["first"]) || array_key_exists("first", $context)) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 6
                echo "            <span class=\"first\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 10
            echo "
        ";
            // line 11
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 12
                echo "            <span class=\"previous\">
                <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 16
            echo "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 19
                    echo "                <span class=\"page\">
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 23
                    echo "                <span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
        ";
            // line 27
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 28
                echo "            <span class=\"next\">
                <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if (((isset($context["last"]) || array_key_exists("last", $context)) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 34
                echo "            <span class=\"last\">
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 38
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  123 => 35,  120 => 34,  118 => 33,  115 => 32,  109 => 29,  106 => 28,  104 => 27,  101 => 26,  95 => 25,  89 => 23,  81 => 20,  78 => 19,  75 => 18,  71 => 17,  68 => 16,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  38 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/sliding.html.twig", "C:\\wamp64\\www\\my-agence\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sliding.html.twig");
    }
}
