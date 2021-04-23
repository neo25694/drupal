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

/* @help_topics/user.create.html.twig */
class __TwigTemplate_2b21c0c652ea05438f42b480bc2ebdf13458d418d9db589c5a8ef80638c041d8 extends \Twig\Template
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
        echo t("Create a new user account.", array());
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
        echo t("Click <em>Add user</em>.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Enter the <em>Email address</em>, <em>Username</em>, and <em>Password</em> (twice) for the new user.", array());
        echo "</li>
  <li>";
        // line 15
        echo t("Verify that the <em>Roles</em> checked for the new user are correct.", array());
        echo "</li>
  <li>";
        // line 16
        echo t("If you want the new user to receive an email message notifying them of the new account, check <em>Notify user of new account</em>.", array());
        echo "</li>
  <li>";
        // line 17
        echo t("Optionally, change other settings on the form.", array());
        echo "</li>
  <li>";
        // line 18
        echo t("Click <em>Create new account</em>.", array());
        echo "</li>
  <li>";
        // line 19
        echo t("You will be left on the <em>Add user</em> page; repeat these steps if you have more user accounts to create.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/user.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
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
<p>{% trans %}Create a new user account.{% endtrans %}</p>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <a href=\"{{ people_url}}\"><em>People</em></a>.{% endtrans %}</li>
  <li>{% trans %}Click <em>Add user</em>.{% endtrans %}</li>
  <li>{% trans %}Enter the <em>Email address</em>, <em>Username</em>, and <em>Password</em> (twice) for the new user.{% endtrans %}</li>
  <li>{% trans %}Verify that the <em>Roles</em> checked for the new user are correct.{% endtrans %}</li>
  <li>{% trans %}If you want the new user to receive an email message notifying them of the new account, check <em>Notify user of new account</em>.{% endtrans %}</li>
  <li>{% trans %}Optionally, change other settings on the form.{% endtrans %}</li>
  <li>{% trans %}Click <em>Create new account</em>.{% endtrans %}</li>
  <li>{% trans %}You will be left on the <em>Add user</em> page; repeat these steps if you have more user accounts to create.{% endtrans %}</li>
</ol>", "@help_topics/user.create.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/user.create.html.twig");
    }
}
