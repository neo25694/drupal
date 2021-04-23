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

/* @help_topics/user.security_account_settings.html.twig */
class __TwigTemplate_8e9c7843651e52eba6ad1b390820a064e4990a3d6a8695875127f3ba1f45ba12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 8];
        $filters = ["escape" => 29];
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
        $context["account_settings_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.admin_form"));
        // line 8
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 9
        echo t("Configure settings related to how user accounts are created and deleted.", array());
        echo "</p>
<h2>";
        // line 10
        echo t("What are the settings related to user account creation and deletion?", array());
        echo "</h2>
<ul>
  <li>";
        // line 12
        echo t("You can make it possible for new users to register themselves for accounts, with or without email verification or administrative approval. Or, you can make it so only administrators with <em>Administer users</em> permission can register new users.", array());
        echo "</li>
  <li>";
        // line 13
        echo t("You can configure what happens to content that a user created, if their account is <em>canceled</em> (deleted).", array());
        echo "</li>
  <li>";
        // line 14
        echo t("You can edit the email messages that are sent to users when their accounts are pending, approved, created, blocked, or canceled, or when they request a password reset.", array());
        echo "</li>
</ul>
<h2>";
        // line 16
        echo t("What are variables in email message text?", array());
        echo "</h2>
<p>";
        // line 17
        echo t("<em>Variables</em> are short text strings, enclosed in square brackets [], that you can insert into configured email message text. When an individual message is generated, data from your site is substituted for the variables. Some commonly-used variables are:", array());
        echo "</p>
<ul>
  <li>";
        // line 19
        echo t("[site:name]: The name of your web site.", array());
        echo "</li>
  <li>";
        // line 20
        echo t("[site:url]: The URL of your web site.", array());
        echo "</li>
  <li>";
        // line 21
        echo t("[site:login-url]: The URL where users can log in to your site.", array());
        echo "</li>
  <li>";
        // line 22
        echo t("[user:display-name]: The user's displayed name.", array());
        echo "</li>
  <li>";
        // line 23
        echo t("[user:account-name]: The users's account name.", array());
        echo "</li>
  <li>";
        // line 24
        echo t("[user:mail]: The user's email alias.", array());
        echo "</li>
  <li>";
        // line 25
        echo t("[user:one-time-login-url]: An expiring URL that a user can use to log in once, if they need to reset their password.", array());
        echo "</li>
</ul>
<h2>";
        // line 27
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 29
        echo t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <a href=\"@account_settings_url\"><em>Account settings</em></a>.", array("@account_settings_url" => ($context["account_settings_url"] ?? null), ));
        echo "</li>
  <li>";
        // line 30
        echo t("Select the method you want to use for creating user accounts, and check or uncheck the box that requires email verification, to match the settings you want for your site.", array());
        echo "</li>
  <li>";
        // line 31
        echo t("Select the desired option for what happens to content that a user created if their account is canceled.", array());
        echo "</li>
  <li>";
        // line 32
        echo t("Optionally, edit the text of email messages related to user accounts.", array());
        echo "</li>
  <li>";
        // line 33
        echo t("Verify that the other settings are correct.", array());
        echo "</li>
  <li>";
        // line 34
        echo t("Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.", array());
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "@help_topics/user.security_account_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  122 => 27,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  88 => 17,  84 => 16,  79 => 14,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% line 7 %}{% set account_settings_url = render_var(url('entity.user.admin_form')) %}
<h2>{% trans %}Goal{% endtrans %}</h2>
<p>{% trans %}Configure settings related to how user accounts are created and deleted.{% endtrans %}</p>
<h2>{% trans %}What are the settings related to user account creation and deletion?{% endtrans %}</h2>
<ul>
  <li>{% trans %}You can make it possible for new users to register themselves for accounts, with or without email verification or administrative approval. Or, you can make it so only administrators with <em>Administer users</em> permission can register new users.{% endtrans %}</li>
  <li>{% trans %}You can configure what happens to content that a user created, if their account is <em>canceled</em> (deleted).{% endtrans %}</li>
  <li>{% trans %}You can edit the email messages that are sent to users when their accounts are pending, approved, created, blocked, or canceled, or when they request a password reset.{% endtrans %}</li>
</ul>
<h2>{% trans %}What are variables in email message text?{% endtrans %}</h2>
<p>{% trans %}<em>Variables</em> are short text strings, enclosed in square brackets [], that you can insert into configured email message text. When an individual message is generated, data from your site is substituted for the variables. Some commonly-used variables are:{% endtrans %}</p>
<ul>
  <li>{% trans %}[site:name]: The name of your web site.{% endtrans %}</li>
  <li>{% trans %}[site:url]: The URL of your web site.{% endtrans %}</li>
  <li>{% trans %}[site:login-url]: The URL where users can log in to your site.{% endtrans %}</li>
  <li>{% trans %}[user:display-name]: The user's displayed name.{% endtrans %}</li>
  <li>{% trans %}[user:account-name]: The users's account name.{% endtrans %}</li>
  <li>{% trans %}[user:mail]: The user's email alias.{% endtrans %}</li>
  <li>{% trans %}[user:one-time-login-url]: An expiring URL that a user can use to log in once, if they need to reset their password.{% endtrans %}</li>
</ul>
<h2>{% trans %}Steps{% endtrans %}</h2>
<ol>
  <li>{% trans %}In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>People</em> &gt; <a href=\"{{ account_settings_url}}\"><em>Account settings</em></a>.{% endtrans %}</li>
  <li>{% trans %}Select the method you want to use for creating user accounts, and check or uncheck the box that requires email verification, to match the settings you want for your site.{% endtrans %}</li>
  <li>{% trans %}Select the desired option for what happens to content that a user created if their account is canceled.{% endtrans %}</li>
  <li>{% trans %}Optionally, edit the text of email messages related to user accounts.{% endtrans %}</li>
  <li>{% trans %}Verify that the other settings are correct.{% endtrans %}</li>
  <li>{% trans %}Click <em>Save configuration</em>. You should see a message indicating that the settings were saved.{% endtrans %}</li>
</ol>", "@help_topics/user.security_account_settings.html.twig", "/var/www/html/drupal/web/core/modules/help_topics/help_topics/user.security_account_settings.html.twig");
    }
}
