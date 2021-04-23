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

/* @help_topics/book.configuring.html.twig */
class __TwigTemplate_251a7bf8d41486fbf0a03322bf86852a4a534a23d286361422860ae20b520ce2 extends \Twig\Template
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
        $context["settings"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("book.settings"));
        // line 10
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 11
        echo t("Configure settings related to books.", array());
        echo "</p>
<h2>";
        // line 12
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 14
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Books</em> &gt; <a href=\"@settings\"><em>Settings</em></a>.", array("@settings" => ($context["settings"] ?? null), ));
        echo "</li>
  <li>";
        // line 15
        echo t("Check all of the content types that you would like to use as book pages in the <em>Content types allowed in book outlines</em> field.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("In the <em>Content type for the Add child page link</em> field, select the content type that will be created from the <em>Add child page</em> link on a book page.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Click <em>Save configuration</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/book.configuring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  62 => 11,  57 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}{% set settings = render_var(url('book.settings')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure settings related to books.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Books</em> &gt; <a href=\"{{ settings }}\"><em>Settings</em></a>.{% endtrans %}</li>
  <li>{% trans %}Check all of the content types that you would like to use as book pages in the <em>Content types allowed in book outlines</em> field.{% endtrans %}</li>
  <li>{% trans %}In the <em>Content type for the Add child page link</em> field, select the content type that will be created from the <em>Add child page</em> link on a book page.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>.{% endtrans %}</li>
</ol>", "@help_topics/book.configuring.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/book.configuring.html.twig");
    }
}
