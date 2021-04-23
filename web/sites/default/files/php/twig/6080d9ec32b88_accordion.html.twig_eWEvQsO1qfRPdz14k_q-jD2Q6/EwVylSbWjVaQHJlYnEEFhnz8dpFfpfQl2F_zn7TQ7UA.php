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

/* modules/examples/js_example/templates/accordion.html.twig */
class __TwigTemplate_59f607e942228d900964c9bc806e12b30e3908018eff738a9d876fd324aa465c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 8
        echo "<div class=\"accordionWrapper\">
  <div class=\"accordionItem open\">
    <h2 class=\"accordionItemHeading\">About accordions</h2>
    <div class=\"accordionItemContent\">
      <p>JavaScript accordions let you squeeze a lot of content into a small space in a Web page.</p>
      <p>This simple accordion degrades gracefully in browsers that don't support JavaScript or CSS.</p>
    </div>
  </div>

  <div class=\"accordionItem close\">
    <h2 class=\"accordionItemHeading\">Accordion items</h2>
    <div class=\"accordionItemContent\">
      <p>A JavaScript accordion is made up of a number of expandable/collapsible items. Only one item is ever shown at a time.</p>
      <p>You can include any content you want inside an accordion item. Here's a bullet list:</p>
      <ul>
        <li>List item #1</li>
        <li>List item #2</li>
        <li>List item #3</li>
      </ul>
    </div>
  </div>

  <div class=\"accordionItem close\">
    <h2 class=\"accordionItemHeading\">How to use a JavaScript accordion</h2>
    <div class=\"accordionItemContent\">
      <p>Click an accordion item's heading to expand it. To collapse the item, click it again, or click another item heading.</p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/examples/js_example/templates/accordion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,);
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
 * Template file for js_example module.
 */
#}
<div class=\"accordionWrapper\">
  <div class=\"accordionItem open\">
    <h2 class=\"accordionItemHeading\">About accordions</h2>
    <div class=\"accordionItemContent\">
      <p>JavaScript accordions let you squeeze a lot of content into a small space in a Web page.</p>
      <p>This simple accordion degrades gracefully in browsers that don't support JavaScript or CSS.</p>
    </div>
  </div>

  <div class=\"accordionItem close\">
    <h2 class=\"accordionItemHeading\">Accordion items</h2>
    <div class=\"accordionItemContent\">
      <p>A JavaScript accordion is made up of a number of expandable/collapsible items. Only one item is ever shown at a time.</p>
      <p>You can include any content you want inside an accordion item. Here's a bullet list:</p>
      <ul>
        <li>List item #1</li>
        <li>List item #2</li>
        <li>List item #3</li>
      </ul>
    </div>
  </div>

  <div class=\"accordionItem close\">
    <h2 class=\"accordionItemHeading\">How to use a JavaScript accordion</h2>
    <div class=\"accordionItemContent\">
      <p>Click an accordion item's heading to expand it. To collapse the item, click it again, or click another item heading.</p>
    </div>
  </div>
</div>
", "modules/examples/js_example/templates/accordion.html.twig", "/var/www/html/drupal/web/modules/examples/js_example/templates/accordion.html.twig");
    }
}
