<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__635083f2e74dfb6f5313826a59b9b3625918e164882c2222079167372ffc92fb */
class __TwigTemplate_312e86a460800db91f9f4ab8dbbd10cfef5b4d56c7fbe39d8a6f55f12d7394ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 10];
        $filters = ["escape" => 18];
        $functions = ["path" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
";
        // line 7
        $context["js_weights"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("js_example.weights");
        // line 8
        $context["js_accordion"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("js_example.accordion");
        // line 9
        echo "
";
        // line 10
        echo t("<p>Drupal includes jQuery and jQuery UI.</p>

<p>We have two examples of using these:</p>

<ol>
  <li>
    <p><a href=@js_accordion>An accordion-style section reveal effect</a>:
        This demonstrates calling a JavaScript function using Drupal rendering
        system.
  </li>
  <li>
    <p><a href=@js_weights>Sorting according to numeric weight</a>: This
        demonstrates attaching your own JavaScript code to individual page
        elements using Drupal rendering system.</p>
  </li>
</ol>", array("@js_accordion" =>         // line 18
($context["js_accordion"] ?? null), "@js_weights" =>         // line 23
($context["js_weights"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "__string_template__635083f2e74dfb6f5313826a59b9b3625918e164882c2222079167372ffc92fb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  81 => 18,  65 => 10,  62 => 9,  60 => 8,  58 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}{#

Description text for the JavaScript Example.

#}

{% set js_weights = path('js_example.weights') %}
{% set js_accordion = path('js_example.accordion') %}

{% trans %}

<p>Drupal includes jQuery and jQuery UI.</p>

<p>We have two examples of using these:</p>

<ol>
  <li>
    <p><a href={{ js_accordion }}>An accordion-style section reveal effect</a>:
        This demonstrates calling a JavaScript function using Drupal rendering
        system.
  </li>
  <li>
    <p><a href={{ js_weights }}>Sorting according to numeric weight</a>: This
        demonstrates attaching your own JavaScript code to individual page
        elements using Drupal rendering system.</p>
  </li>
</ol>

{% endtrans %}
", "__string_template__635083f2e74dfb6f5313826a59b9b3625918e164882c2222079167372ffc92fb", "");
    }
}
