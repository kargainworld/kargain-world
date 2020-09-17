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

/* terms-service/index.html.twig */
class __TwigTemplate_4d558c5ab8544e7d43a3cb5dafc9b687180cca98e8370782df30275122e0aba4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms-service/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms-service/index.html.twig"));

        // line 1
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "terms-service/index.html.twig", 7);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.title"), "html", null, true);
        echo "</h2>
    <div class=\"text-contextual\">
      <div class=\"text-muted text-center mb-4\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.last_update"), "html", null, true);
        echo "</div>

      <div class=\"mb-4\">
        ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.intro");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.access_to_site.title"), "html", null, true);
        echo "</h3>
        ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.access_to_site.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.indemnification.title"), "html", null, true);
        echo "</h3>
        ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.indemnification.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.third_party.title"), "html", null, true);
        echo "</h3>
        ";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.third_party.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.disclaimers.title"), "html", null, true);
        echo "</h3>
        ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.disclaimers.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.liability_limit.title"), "html", null, true);
        echo "</h3>
        ";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.liability_limit.text");
        echo "
      </div>

      <div>
        <h3 class=\"h6\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.general.title"), "html", null, true);
        echo "</h3>
        ";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.general.text");
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
        return "terms-service/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  148 => 46,  141 => 42,  137 => 41,  130 => 37,  126 => 36,  119 => 32,  115 => 31,  108 => 27,  104 => 26,  97 => 22,  93 => 21,  86 => 17,  80 => 14,  75 => 12,  71 => 10,  61 => 9,  50 => 7,  48 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% set meta = {
  title:  'page.terms_service.meta.title'|trans,
  desc:   'page.terms_service.meta.description'|trans,
  robots: 'index, follow'
} %}

{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">{{ 'page.terms_service.title'|trans }}</h2>
    <div class=\"text-contextual\">
      <div class=\"text-muted text-center mb-4\">{{ 'page.terms_service.last_update'|trans }}</div>

      <div class=\"mb-4\">
        {{ 'page.terms_service.intro'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.terms_service.access_to_site.title'|trans }}</h3>
        {{ 'page.terms_service.access_to_site.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.terms_service.indemnification.title'|trans }}</h3>
        {{ 'page.terms_service.indemnification.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.terms_service.third_party.title'|trans }}</h3>
        {{ 'page.terms_service.third_party.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.terms_service.disclaimers.title'|trans }}</h3>
        {{ 'page.terms_service.disclaimers.text'|trans|raw }}
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">{{ 'page.terms_service.liability_limit.title'|trans }}</h3>
        {{ 'page.terms_service.liability_limit.text'|trans|raw }}
      </div>

      <div>
        <h3 class=\"h6\">{{ 'page.terms_service.general.title'|trans }}</h3>
        {{ 'page.terms_service.general.text'|trans|raw }}
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "terms-service/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/terms-service/index.html.twig");
    }
}
