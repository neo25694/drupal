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

/* @help_topics/system.module_install.html.twig */
class __TwigTemplate_f4dda300447af4696e8d9d9fc5d0f47de99124f8e2eaca63f9ee1b604b72b07b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 8];
        $filters = ["escape" => 12];
        $functions = ["render_var" => 7, "url" => 7];

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
        // line 7
        $context["extend_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("system.modules_list"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Install a core module, or a contributed module that has already been downloaded.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("In the <em>Manage</em> administrative menu, navigate to <a href=\"@extend_url\"><em>Extend</em></a>.", array("@extend_url" => ($context["extend_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 13
        echo t("Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to install.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Check the box next to the name of the module you want to install; you can also check more than one box to install multiple modules at the same time. If the checkbox is disabled for the module you are trying to install, expand the information to see why -- you may need to download an additional module that your module requires.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Click <em>Install</em> at the bottom of the page. If you chose to install a module with dependencies that were not already installed, or if you chose an Experimental module, confirm your choice on the next page.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("Wait for the module (or modules) to be installed. You should be returned to the <em>Extend</em> page with a message saying the module or modules were installed.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/system.module_install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set extend_url = render_var(url('system.modules_list')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Install a core module, or a contributed module that has already been downloaded.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <a href=\"{{ extend_url }}\"><em>Extend</em></a>.{% endtrans %}</li>
  <li>{% trans %}Enter a word from the module name or description into the filter box, to make the list of modules smaller. Locate the module you want to install.{% endtrans %}</li>
  <li>{% trans %}Check the box next to the name of the module you want to install; you can also check more than one box to install multiple modules at the same time. If the checkbox is disabled for the module you are trying to install, expand the information to see why -- you may need to download an additional module that your module requires.{% endtrans %}</li>
  <li>{% trans %}Click <em>Install</em> at the bottom of the page. If you chose to install a module with dependencies that were not already installed, or if you chose an Experimental module, confirm your choice on the next page.{% endtrans %}</li>
  <li>{% trans %}Wait for the module (or modules) to be installed. You should be returned to the <em>Extend</em> page with a message saying the module or modules were installed.{% endtrans %}</li>
</ol>", "@help_topics/system.module_install.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/system.module_install.html.twig");
    }
}
