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

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_92ef27e312fd29a9e1b29eb6db30c3a8f15241ee7c38e45ea10595721dba5a18 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('choice_label', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('radio_label', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 106
        echo "
";
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_row', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('button_row', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('choice_row', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('date_row', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('time_row', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('radio_row', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('form_errors', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 6
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        // line 18
        $context["prepend"] =  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["money_pattern"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "{{") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["money_pattern"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "}}") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))));
        // line 20
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 36
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 47
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 59
    public function block_form_label($context, array $blocks = [])
    {
        // line 60
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " control-label"))]);
        // line 61
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 64
    public function block_choice_label($context, array $blocks = [])
    {
        // line 66
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 67
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 70
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 71
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 73
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 76
    public function block_radio_label($context, array $blocks = [])
    {
        // line 77
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 79
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 82
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 84
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 85
            if (($context["required"] ?? null)) {
                // line 86
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 88
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 89
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
            }
            // line 91
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 92
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 93
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 94
($context["name"] ?? null), "%id%" =>                     // line 95
($context["id"] ?? null)]);
                } else {
                    // line 98
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 101
            echo "<label";
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ["attr" => ($context["label_attr"] ?? null)];
            if ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof \Traversable) {
                $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = iterator_to_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4);
            }
            if (!is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 101, $this->source);
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4);
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 102
            echo ($context["widget"] ?? null);
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            // line 103
            echo "</label>";
        }
    }

    // line 109
    public function block_form_row($context, array $blocks = [])
    {
        // line 110
        $context["widget_attr"] = [];
        // line 111
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 112
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 114
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 119
        echo "</div>";
    }

    // line 122
    public function block_button_row($context, array $blocks = [])
    {
        // line 123
        echo "<div class=\"form-group\">";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 125
        echo "</div>";
    }

    // line 128
    public function block_choice_row($context, array $blocks = [])
    {
        // line 129
        $context["force_error"] = true;
        // line 130
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 133
    public function block_date_row($context, array $blocks = [])
    {
        // line 134
        $context["force_error"] = true;
        // line 135
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 138
    public function block_time_row($context, array $blocks = [])
    {
        // line 139
        $context["force_error"] = true;
        // line 140
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 143
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 144
        $context["force_error"] = true;
        // line 145
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 148
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 149
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 152
        echo "</div>";
    }

    // line 155
    public function block_radio_row($context, array $blocks = [])
    {
        // line 156
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 159
        echo "</div>";
    }

    // line 164
    public function block_form_errors($context, array $blocks = [])
    {
        // line 165
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 166
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 167
            echo "    <ul class=\"list-unstyled\">";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 169
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</ul>
    ";
            // line 172
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 178
    public function block_form_help($context, array $blocks = [])
    {
        // line 179
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 180
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", []), "")) : ("")) . " help-block"))]);
            // line 181
            echo "<span id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ["attr" => ($context["help_attr"] ?? null)];
            if ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof \Traversable) {
                $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = iterator_to_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666);
            }
            if (!is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 181, $this->source);
            }
            $context['_parent'] = $context;
            $context = array_merge($context, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666);
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 182
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 183
                echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            } else {
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 187
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  548 => 187,  545 => 185,  542 => 183,  540 => 182,  524 => 181,  522 => 180,  520 => 179,  517 => 178,  508 => 172,  505 => 171,  497 => 169,  493 => 168,  491 => 167,  485 => 166,  483 => 165,  480 => 164,  476 => 159,  474 => 158,  472 => 157,  466 => 156,  463 => 155,  459 => 152,  457 => 151,  455 => 150,  449 => 149,  446 => 148,  442 => 145,  440 => 144,  437 => 143,  433 => 140,  431 => 139,  428 => 138,  424 => 135,  422 => 134,  419 => 133,  415 => 130,  413 => 129,  410 => 128,  406 => 125,  404 => 124,  402 => 123,  399 => 122,  395 => 119,  393 => 118,  391 => 117,  389 => 116,  387 => 115,  381 => 114,  378 => 112,  376 => 111,  374 => 110,  371 => 109,  366 => 103,  362 => 102,  348 => 101,  344 => 98,  341 => 95,  340 => 94,  339 => 93,  337 => 92,  335 => 91,  332 => 89,  330 => 88,  327 => 86,  325 => 85,  323 => 84,  320 => 82,  316 => 79,  314 => 77,  311 => 76,  307 => 73,  305 => 71,  302 => 70,  298 => 67,  296 => 66,  293 => 64,  289 => 61,  287 => 60,  284 => 59,  279 => 53,  277 => 52,  275 => 51,  272 => 49,  270 => 48,  268 => 47,  265 => 46,  260 => 42,  258 => 41,  256 => 40,  253 => 38,  251 => 37,  249 => 36,  246 => 35,  241 => 31,  237 => 29,  231 => 27,  229 => 26,  227 => 25,  221 => 23,  219 => 22,  216 => 21,  213 => 20,  210 => 19,  208 => 18,  205 => 17,  201 => 14,  199 => 13,  196 => 12,  192 => 9,  189 => 7,  187 => 6,  184 => 5,  180 => 178,  177 => 177,  174 => 175,  172 => 164,  169 => 163,  166 => 161,  164 => 155,  161 => 154,  159 => 148,  156 => 147,  154 => 143,  151 => 142,  149 => 138,  146 => 137,  144 => 133,  141 => 132,  139 => 128,  136 => 127,  134 => 122,  131 => 121,  129 => 109,  126 => 108,  123 => 106,  121 => 82,  118 => 81,  116 => 76,  113 => 75,  111 => 70,  108 => 69,  106 => 64,  103 => 63,  101 => 59,  98 => 58,  95 => 56,  93 => 46,  90 => 45,  88 => 35,  85 => 34,  83 => 17,  80 => 16,  78 => 12,  75 => 11,  73 => 5,  70 => 4,  67 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\my-agence\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
