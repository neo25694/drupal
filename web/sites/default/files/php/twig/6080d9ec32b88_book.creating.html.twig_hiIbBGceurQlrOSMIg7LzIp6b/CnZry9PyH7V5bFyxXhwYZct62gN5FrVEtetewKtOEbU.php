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

/* @help_topics/book.creating.html.twig */
class __TwigTemplate_19381539a15bc4a0df514df0bb496ccdf74cacf49b7fff5fb98416a0d5b5f237 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 9];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
        // line 9
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Create a new book.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 13
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <em>Add content</em> &gt; <em>Book page</em>. If you have configured additional content types that can be added to books, you can substitute a different content type for <em>Book page</em>.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Enter a title for the book, and if desired, some text for the body of the book's title page.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("In the vertical tabs area, click <em>Book Outline</em>. Select <em>- Create a new book -</em> from the <em>Book</em> select list.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Click <em>Save</em> to create the book.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/book.creating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  77 => 15,  73 => 14,  69 => 13,  64 => 11,  60 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 9 %}<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Create a new book.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Content</em> &gt; <em>Add content</em> &gt; <em>Book page</em>. If you have configured additional content types that can be added to books, you can substitute a different content type for <em>Book page</em>.{% endtrans %}</li>
  <li>{% trans %}Enter a title for the book, and if desired, some text for the body of the book's title page.{% endtrans %}</li>
  <li>{% trans %}In the vertical tabs area, click <em>Book Outline</em>. Select <em>- Create a new book -</em> from the <em>Book</em> select list.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save</em> to create the book.{% endtrans %}</li>
</ol>", "@help_topics/book.creating.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/book.creating.html.twig");
    }
}
