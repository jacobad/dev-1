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

/* @KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_e00b089701d27a09bc77bc71077c3cf885bd1138a2bdf471db8b996635719301 extends \Twig\Template
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
        // line 16
        echo "
";
        // line 17
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 18
            echo "    <ul class=\"pagination justify-content-center\">

    ";
            // line 20
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 21
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled page-item\">
            <a class=\"page-link\">&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if ((($context["startPage"] ?? null) > 1)) {
                // line 31
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 35
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 38
($context["startPage"] ?? null) != 2)) {
                    // line 39
                    echo "        <li class=\"disabled page-item\">
            <a class=\"page-link\">&hellip;</a>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 47
                    echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <a class=\"page-link\">";
                    // line 52
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 59
                echo "        ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 60
                    echo "            ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 61
                        echo "                <li class=\"disabled page-item\">
                    <a class=\"page-link\">&hellip;</a>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 76
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" rel=\"next\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled page-item\">
            <a class=\"page-link\">";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 84,  198 => 81,  195 => 80,  187 => 77,  184 => 76,  182 => 75,  179 => 74,  171 => 71,  168 => 70,  165 => 69,  157 => 66,  154 => 65,  148 => 61,  145 => 60,  142 => 59,  140 => 58,  137 => 57,  130 => 55,  124 => 52,  121 => 51,  113 => 48,  110 => 47,  107 => 46,  103 => 45,  100 => 44,  97 => 43,  91 => 39,  89 => 38,  84 => 36,  81 => 35,  79 => 34,  74 => 32,  71 => 31,  69 => 30,  66 => 29,  60 => 26,  57 => 25,  49 => 22,  46 => 21,  44 => 20,  40 => 18,  38 => 17,  35 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig", "C:\\wamp64\\www\\my-agence\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\twitter_bootstrap_v3_pagination.html.twig");
    }
}
