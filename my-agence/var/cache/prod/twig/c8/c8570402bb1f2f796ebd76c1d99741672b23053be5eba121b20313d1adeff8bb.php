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

/* admin/options/index.html.twig */
class __TwigTemplate_c5cb0b92ab0e1c95fa97d3b9d644e14d12425b2c7ca1242145a7d630fa6398ac extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/options/index.html.twig", 1);
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

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo "Gérer les option";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        // line 7
        echo "    <div class=\"container mt-4\">
        <h1>gérer les option</h1>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", []), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.options.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["option"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
                            <form method=\"POST\" action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.options.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["option"], "id", [])]), "html", null, true);
            echo "\" style=\"display:inline-block\" onsubmit=\" return confirm('Etes vous vraiment sur de vouloir supprimer ce bien ?')\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["option"], "id", []))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
        <div class=\"text-right\">
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.options.new");
        echo "\" class=\"btn btn-primary\">Créer un nouveau bien</a>
            
        </div>
    </div>
        


";
    }

    public function getTemplateName()
    {
        return "admin/options/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  118 => 36,  106 => 30,  101 => 28,  97 => 27,  92 => 25,  89 => 24,  85 => 23,  75 => 15,  66 => 12,  63 => 11,  59 => 10,  54 => 7,  51 => 6,  45 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/options/index.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\admin\\options\\index.html.twig");
    }
}
