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

/* @help_topics/book.organizing.html.twig */
class __TwigTemplate_3f632c4ab2c390adc02e6eceb75d1f0df7d244165f869d0a687721647aad891c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "trans" => 10];
        $filters = ["escape" => 14];
        $functions = ["render_var" => 9, "url" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url']
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
        // line 9
        $context["overview"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("book.admin"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Change the order and titles of pages within a book.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"@overview\"><em>Books</em></a>.", array("@overview" => ($context["overview"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Click <em>Edit order and titles</em> for the book you would like to change.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Drag the book pages to the desired order.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("If desired, enter new text for one or more of the page titles within the book.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Click <em>Save book pages</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/book.organizing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  62 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set overview = render_var(url('book.admin')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Change the order and titles of pages within a book.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <a href=\"{{ overview }}\"><em>Books</em></a>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Edit order and titles</em> for the book you would like to change.{% endtrans %}</li>
  <li>{% trans %}Drag the book pages to the desired order.{% endtrans %}</li>
  <li>{% trans %}If desired, enter new text for one or more of the page titles within the book.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save book pages</em>.{% endtrans %}</li>
</ol>", "@help_topics/book.organizing.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/book.organizing.html.twig");
    }
}
