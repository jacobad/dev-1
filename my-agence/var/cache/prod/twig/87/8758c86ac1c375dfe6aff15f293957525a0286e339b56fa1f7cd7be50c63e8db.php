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

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_f42e1b77d33a5da370da6571d36edf245bc0376e273cfc3da5e9924dd3241b6c extends \Twig\Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => isset(\$type) ? \$type : 'range']);
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Framework/Form/range_widget.html.php", "C:\\wamp64\\www\\my-agence\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
