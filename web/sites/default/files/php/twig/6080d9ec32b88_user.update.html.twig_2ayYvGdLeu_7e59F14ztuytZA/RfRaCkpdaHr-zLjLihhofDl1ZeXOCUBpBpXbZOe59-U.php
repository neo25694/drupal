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

/* @help_topics/user.update.html.twig */
class __TwigTemplate_05c34f455f0de329f931ac3750dda7d9dad35b2f9e2e9bcc67f6d7a168add6ee extends \Twig\Template
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
        $context["people_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.collection"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Update or delete an existing user account.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 12
        echo t("In the <em>Manage</em> administrative menu, navigate to <a href=\"@people_url\"><em>People</em></a>.", array("@people_url" => ($context["people_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 13
        echo t("Enter all or part of the user name or email address of the user account you want to update or delete, and click <em>Filter</em>. A short list of user accounts, including the account of interest, should be shown in the table; if not, modify the filter text until you can find the account of interest.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Click <em>Edit</em> in the <em>Operations</em> area of the account of interest.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("To delete the user account, scroll to the bottom and click <em>Cancel account</em>. Select what you want to happen to the user's content on the next screen, and click <em>Cancel account</em>.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("To update the user account, enter new values in the form and click <em>Save</em>.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/user.update.html.twig";
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
        return new Source("{% line 7 %}{% set people_url = render_var(url('entity.user.collection')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Update or delete an existing user account.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <a href=\"{{ people_url}}\"><em>People</em></a>.{% endtrans %}</li>
  <li>{% trans %}Enter all or part of the user name or email address of the user account you want to update or delete, and click <em>Filter</em>. A short list of user accounts, including the account of interest, should be shown in the table; if not, modify the filter text until you can find the account of interest.{% endtrans %}</li>
  <li>{% trans %}Click <em>Edit</em> in the <em>Operations</em> area of the account of interest.{% endtrans %}</li>
  <li>{% trans %}To delete the user account, scroll to the bottom and click <em>Cancel account</em>. Select what you want to happen to the user's content on the next screen, and click <em>Cancel account</em>.{% endtrans %}</li>
  <li>{% trans %}To update the user account, enter new values in the form and click <em>Save</em>.{% endtrans %}</li>
</ol>", "@help_topics/user.update.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/user.update.html.twig");
    }
}
