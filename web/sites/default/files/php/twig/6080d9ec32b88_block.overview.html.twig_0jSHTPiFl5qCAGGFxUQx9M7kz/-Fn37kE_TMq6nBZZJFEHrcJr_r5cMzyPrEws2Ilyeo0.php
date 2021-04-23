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

/* @help_topics/block.overview.html.twig */
class __TwigTemplate_6977e7c1fe6a5fda38f192e306611669d864e011505626388def304038689fdf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 7];
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
        // line 7
        echo "<h2>";
        echo t("What are blocks?", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Blocks are boxes of content rendered into an area, or region, of a web page of your site. Blocks are placed and configured specifically for each theme.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("What are custom blocks?", array());
        echo "</h2>
<p>";
        // line 10
        echo t("Custom blocks are blocks whose content you can edit. You can define one or more <em>custom block types</em>, and attach fields to each custom block type. Custom blocks can be placed just like blocks provided by other modules.", array());
        echo "</p>
<h2>";
        // line 11
        echo t("What is the block description?", array());
        echo "</h2>
<p>";
        // line 12
        echo t("The block description is an identification name for a block, which is shown in the administrative interface. It is not displayed on the site.", array());
        echo "</p>
<h2>";
        // line 13
        echo t("What is the block title?", array());
        echo "</h2>
<p>";
        // line 14
        echo t("The block title is the heading that is optionally shown to site visitors when the block is placed in a region.", array());
        echo "</p>
<h2>";
        // line 15
        echo t("Managing blocks overview", array());
        echo "</h2>
<p>";
        // line 16
        echo t("The <em>Block</em> module allows you to place blocks in regions of your installed themes, and configure block settings. The <em>Custom Block</em> module allows you to custom block types and custom blocks. See the related topics listed below for specific tasks.", array());
        echo "</p>
<h2>";
        // line 17
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li>";
        // line 19
        echo t("<a href=\"https://www.drupal.org/docs/user_guide/en/blocks-chapter.html\">Blocks chapter of the User Guide</a>", array());
        echo "</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@help_topics/block.overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}<h2>{% trans %}What are blocks?{% endtrans %}</h2>
<p>{% trans %}Blocks are boxes of content rendered into an area, or region, of a web page of your site. Blocks are placed and configured specifically for each theme.{% endtrans %}</p>
<h2>{% trans %}What are custom blocks?{% endtrans %}</h2>
<p>{% trans %}Custom blocks are blocks whose content you can edit. You can define one or more <em>custom block types</em>, and attach fields to each custom block type. Custom blocks can be placed just like blocks provided by other modules.{% endtrans %}</p>
<h2>{% trans %}What is the block description?{% endtrans %}</h2>
<p>{% trans %}The block description is an identification name for a block, which is shown in the administrative interface. It is not displayed on the site.{% endtrans %}</p>
<h2>{% trans %}What is the block title?{% endtrans %}</h2>
<p>{% trans %}The block title is the heading that is optionally shown to site visitors when the block is placed in a region.{% endtrans %}</p>
<h2>{% trans %}Managing blocks overview{% endtrans %}</h2>
<p>{% trans %}The <em>Block</em> module allows you to place blocks in regions of your installed themes, and configure block settings. The <em>Custom Block</em> module allows you to custom block types and custom blocks. See the related topics listed below for specific tasks.{% endtrans %}</p>
<h2>{% trans %}Additional resources{% endtrans %}</h2>
<ul>
  <li>{% trans %}<a href=\"https://www.drupal.org/docs/user_guide/en/blocks-chapter.html\">Blocks chapter of the User Guide</a>{% endtrans %}</li>
</ul>", "@help_topics/block.overview.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/block.overview.html.twig");
    }
}
