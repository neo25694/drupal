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

/* @help_topics/core.ui_accessibility.html.twig */
class __TwigTemplate_15d35af041a02c47409519040791e22c64c289ce403856a6a8fb7f2d87ee090b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 6];
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
        // line 6
        echo "<h2>";
        echo t("Overview of accessibility", array());
        echo "</h2>
<p>";
        // line 7
        echo t("The core administrative interface has built-in compliance with many accessibility standards, so that most pages are accessible to most users in their default state. However, certain pages become more accessible to some users through the use of a non-default interface. These replacement interfaces include:", array());
        echo "</p>
<dl>
  <dt>";
        // line 9
        echo t("Disabling drag-and-drop functionality", array());
        echo "</dt>
  <dd>";
        // line 10
        echo t("The default drag-and-drop user interface for ordering tables in the administrative interface presents a challenge for some users, including keyboard-only users and users of screen readers and other assistive technology. The drag-and-drop interface can be disabled in a table by clicking a link labeled <em>Show row weights</em> above the table. The replacement interface allows users to order the table by choosing numerical weights (with increasing numbers) instead of dragging table rows.", array());
        echo "</dd>
</dl>";
    }

    public function getTemplateName()
    {
        return "@help_topics/core.ui_accessibility.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  65 => 9,  60 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 6 %}<h2>{% trans %}Overview of accessibility{% endtrans %}</h2>
<p>{% trans %}The core administrative interface has built-in compliance with many accessibility standards, so that most pages are accessible to most users in their default state. However, certain pages become more accessible to some users through the use of a non-default interface. These replacement interfaces include:{% endtrans %}</p>
<dl>
  <dt>{% trans %}Disabling drag-and-drop functionality{% endtrans %}</dt>
  <dd>{% trans %}The default drag-and-drop user interface for ordering tables in the administrative interface presents a challenge for some users, including keyboard-only users and users of screen readers and other assistive technology. The drag-and-drop interface can be disabled in a table by clicking a link labeled <em>Show row weights</em> above the table. The replacement interface allows users to order the table by choosing numerical weights (with increasing numbers) instead of dragging table rows.{% endtrans %}</dd>
</dl>", "@help_topics/core.ui_accessibility.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/core.ui_accessibility.html.twig");
    }
}
