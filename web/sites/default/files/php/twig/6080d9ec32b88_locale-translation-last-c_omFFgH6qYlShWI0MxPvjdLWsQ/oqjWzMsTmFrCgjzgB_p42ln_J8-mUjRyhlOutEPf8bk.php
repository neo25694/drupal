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

/* core/themes/stable/templates/admin/locale-translation-last-check.html.twig */
class __TwigTemplate_cd63276cdc28dbfe6e853f565843ccd6191106eed189d712ec81d88c54ed6a65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17, "trans" => 18];
        $filters = ["escape" => 18, "t" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't'],
                []
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
        // line 15
        echo "<div class=\"locale checked\">
  <p>
  ";
        // line 17
        if (($context["last_checked"] ?? null)) {
            // line 18
            echo "    ";
            echo t("Last checked: @time ago", array("@time" => ($context["time"] ?? null), ));
            // line 19
            echo "  ";
        } else {
            // line 20
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last checked: never"));
            echo "
  ";
        }
        // line 22
        echo "  <span class=\"check-manually\">(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null)), "html", null, true);
        echo ")</span></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/locale-translation-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  67 => 20,  64 => 19,  61 => 18,  59 => 17,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the last time we checked for update data.
 *
 * Available variables:
 * - last_checked: Whether or not locale updates have been checked before.
 * - time: The formatted time ago when the site last checked for available
 *   updates.
 * - link: A link to manually check available updates.
 *
 * @see template_preprocess_locale_translation_last_check()
 */
#}
<div class=\"locale checked\">
  <p>
  {% if last_checked %}
    {% trans %} Last checked: {{ time }} ago {% endtrans %}
  {% else %}
    {{ 'Last checked: never'|t }}
  {% endif %}
  <span class=\"check-manually\">({{ link }})</span></p>
</div>
", "core/themes/stable/templates/admin/locale-translation-last-check.html.twig", "/var/www/html/drupal/web/core/themes/stable/templates/admin/locale-translation-last-check.html.twig");
    }
}
