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

/* @KnpPaginator/Pagination/foundation_v5_pagination.html.twig */
class __TwigTemplate_4731645eebe9328c829c21a7ce9809df490ae610e43365cde96afacfd6c46439 extends \Twig\Template
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
        // line 20
        echo "
";
        // line 21
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 22
            echo "    <ul class=\"pagination\">
        ";
            // line 23
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 24
                echo "                 <li class=\"arrow\">
                     <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                 </li>
        ";
            } else {
                // line 28
                echo "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            if ((($context["startPage"] ?? null) > 1)) {
                // line 36
                echo "            <li>
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 39
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 40
                    echo "                <li>
                    <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 43
($context["startPage"] ?? null) != 2)) {
                    // line 44
                    echo "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 48
                echo "        ";
            }
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 52
                    echo "                <li>
                    <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">
                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } else {
                    // line 58
                    echo "                <li class=\"current\">
                    <a>";
                    // line 59
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 62
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
        ";
            // line 65
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 66
                echo "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 67
                    echo "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 68
                        echo "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 72
                        echo "                    <li>
                        <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">
                            ";
                        // line 74
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 78
                    echo "            ";
                }
                // line 79
                echo "            <li>
                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 85
                echo "            <li class=\"arrow\">
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                    ";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 91
                echo "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 97
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  209 => 93,  205 => 91,  198 => 87,  194 => 86,  191 => 85,  189 => 84,  186 => 83,  178 => 80,  175 => 79,  172 => 78,  165 => 74,  161 => 73,  158 => 72,  152 => 68,  149 => 67,  146 => 66,  144 => 65,  141 => 64,  134 => 62,  128 => 59,  125 => 58,  118 => 54,  114 => 53,  111 => 52,  108 => 51,  104 => 50,  101 => 49,  98 => 48,  92 => 44,  90 => 43,  85 => 41,  82 => 40,  80 => 39,  75 => 37,  72 => 36,  70 => 35,  67 => 34,  60 => 30,  56 => 28,  48 => 25,  45 => 24,  43 => 23,  40 => 22,  38 => 21,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v5_pagination.html.twig", "C:\\wamp64\\www\\my-agence\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\foundation_v5_pagination.html.twig");
    }
}
