<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* privacy-policy/index.html.twig */
class __TwigTemplate_8289460c57935f4fe902204c26a89d6b9d014389664bcec1005cb4cf4de022ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privacy-policy/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privacy-policy/index.html.twig"));

        // line 1
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "privacy-policy/index.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container\">
  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.title"), "html", null, true);
        echo "</h2>
    <div class=\"text-contextual\">
      <div class=\"text-muted text-center mb-4\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.last_update"), "html", null, true);
        echo "</div>

      <div class=\"mb-4\">
        ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.intro");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.what_collect.title"), "html", null, true);
        echo "</h3>
        ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.what_collect.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.use_personal_info.title"), "html", null, true);
        echo "</h3>
        ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.use_personal_info.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.sharing_personal_info.title"), "html", null, true);
        echo "</h3>
        ";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.sharing_personal_info.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.info_choices_changes.title"), "html", null, true);
        echo "</h3>
        ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.info_choices_changes.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.contact.title"), "html", null, true);
        echo "</h3>
        ";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.contact.text");
        echo "
      </div>

      <div>
        ";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.changes_to_policy.text");
        echo "
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "privacy-policy/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  141 => 42,  137 => 41,  130 => 37,  126 => 36,  119 => 32,  115 => 31,  108 => 27,  104 => 26,  97 => 22,  93 => 21,  86 => 17,  80 => 14,  75 => 12,  71 => 10,  61 => 9,  50 => 7,  48 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% set meta = {
  title:  'page.privacy_policy.meta.title'|trans,
  desc:   'page.privacy_policy.meta.description'|trans,
  robots: 'index, follow'
} %}

{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">{{ 'page.privacy_policy.title'|trans }}</h2>
    <div class=\"text-contextual\">
      <div class=\"text-muted text-center mb-4\">{{ 'page.privacy_policy.last_update'|trans }}</div>

      <div class=\"mb-4\">
        {{ 'page.privacy_policy.intro'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.privacy_policy.what_collect.title'|trans }}</h3>
        {{ 'page.privacy_policy.what_collect.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.privacy_policy.use_personal_info.title'|trans }}</h3>
        {{ 'page.privacy_policy.use_personal_info.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.privacy_policy.sharing_personal_info.title'|trans }}</h3>
        {{ 'page.privacy_policy.sharing_personal_info.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.privacy_policy.info_choices_changes.title'|trans }}</h3>
        {{ 'page.privacy_policy.info_choices_changes.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.privacy_policy.contact.title'|trans }}</h3>
        {{ 'page.privacy_policy.contact.text'|trans|raw }}
      </div>

      <div>
        {{ 'page.privacy_policy.changes_to_policy.text'|trans|raw }}
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "privacy-policy/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/privacy-policy/index.html.twig");
    }
}
