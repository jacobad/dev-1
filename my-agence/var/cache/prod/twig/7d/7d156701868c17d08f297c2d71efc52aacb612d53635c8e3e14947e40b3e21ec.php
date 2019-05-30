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

/* property/index.html.twig */
class __TwigTemplate_10878c2110b6761faf3b9fc5f9b1b575b89bc303ce46e43381cc56e2860082e6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "property/index.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        // line 6
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"form-row align-items-end\">
            <div class=\"col\">
                 ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minSurface", []), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "maxPrice", []), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "options", []), 'row');
        echo "
            </div>
            <div class=\"col\">
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">Rechercher</button>
                </div>
                
            </div>
           
        </div>

        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</div>
<div class=\"container mt-4\">
    <h1>Nos Biens</h1>
    <div class=\"row\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["properties"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 35
            echo "            <div class=\"col-md-4\">
                ";
            // line 36
            $this->loadTemplate("property/_property.html.twig", "property/index.html.twig", 36)->display($context);
            // line 37
            echo "            </div>
            
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
    <div class=\"pagination\">
            ";
        // line 42
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["properties"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  130 => 40,  114 => 37,  112 => 36,  109 => 35,  92 => 34,  83 => 28,  69 => 17,  63 => 14,  57 => 11,  51 => 8,  47 => 6,  44 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "property/index.html.twig", "C:\\wamp64\\www\\my-agence\\templates\\property\\index.html.twig");
    }
}
