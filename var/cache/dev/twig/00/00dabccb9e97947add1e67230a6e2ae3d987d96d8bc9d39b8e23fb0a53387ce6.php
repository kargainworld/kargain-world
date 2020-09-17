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

/* team/index.html.twig */
class __TwigTemplate_dede0fe57250906486be08fab939a1c6d0ca88feff4493db824d10743072b27a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        // line 1
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 7);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.intro.title"), "html", null, true);
        echo "</h2>
    ";
        // line 13
        if (((isset($context["team"]) || array_key_exists("team", $context)) &&  !twig_test_empty((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 13, $this->source); })())))) {
            // line 14
            echo "      <ul class=\"list-team row align-items-stretch\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 16
                echo "        <li class=\"-item col-12 col-sm-6 col-md-4\">
          <div class=\"-avatar\">
            <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "avatar", [], "any", false, false, false, 18), "html", null, true);
                echo "\" class=\"img-fluid w-100\">
          </div>
          <div class=\"-content\">
            <h3 class=\"-name -lastname\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "lastname", [], "any", false, false, false, 21), "html", null, true);
                echo "</h3>
            <h4 class=\"-name -firstname\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "firstname", [], "any", false, false, false, 22), "html", null, true);
                echo "</h4>

            <hr class=\"mini -separator\">

            <div class=\"-job\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "job", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_locale"], "method", false, false, false, 26), [], "array", false, false, false, 26), "html", null, true);
                echo "</div>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </ul>
    ";
        } else {
            // line 32
            echo "    <div class=\"alert alert-dark text-center w-75 mx-auto\">
      ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.list_team.empty"), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 36
        echo "  </div>

  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.list_partners.title"), "html", null, true);
        echo "</h2>
    ";
        // line 40
        if (((isset($context["partners"]) || array_key_exists("partners", $context)) &&  !twig_test_empty((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 40, $this->source); })())))) {
            // line 41
            echo "      <ul class=\"list-partners row justify-content-center\">
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 43
                echo "        <li class=\"-item col-6 col-md-3\">
          <h3 class=\"-name\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</h3>
          <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "logo", [], "any", false, false, false, 45), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "\" class=\"-logo\">
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "      </ul>
    ";
        } else {
            // line 50
            echo "    <div class=\"alert alert-dark text-center w-75 mx-auto\">
      ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.list_partners.empty"), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 54
        echo "  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 54,  175 => 51,  172 => 50,  168 => 48,  157 => 45,  153 => 44,  150 => 43,  146 => 42,  143 => 41,  141 => 40,  137 => 39,  132 => 36,  126 => 33,  123 => 32,  119 => 30,  109 => 26,  102 => 22,  98 => 21,  92 => 18,  88 => 16,  84 => 15,  81 => 14,  79 => 13,  75 => 12,  71 => 10,  61 => 9,  50 => 7,  48 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% set meta = {
  title:  'page.team.meta.title'|trans,
  desc:   'page.team.meta.description'|trans,
  robots: 'index, follow'
} %}

{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">{{ 'page.team.intro.title'|trans }}</h2>
    {% if team is defined and team is not empty %}
      <ul class=\"list-team row align-items-stretch\">
      {% for member in team %}
        <li class=\"-item col-12 col-sm-6 col-md-4\">
          <div class=\"-avatar\">
            <img src=\"{{ member.avatar }}\" class=\"img-fluid w-100\">
          </div>
          <div class=\"-content\">
            <h3 class=\"-name -lastname\">{{ member.lastname }}</h3>
            <h4 class=\"-name -firstname\">{{ member.firstname }}</h4>

            <hr class=\"mini -separator\">

            <div class=\"-job\">{{ member.job[app.request.attributes.get('_locale')] }}</div>
          </div>
        </li>
      {% endfor %}
      </ul>
    {% else %}
    <div class=\"alert alert-dark text-center w-75 mx-auto\">
      {{ 'page.team.list_team.empty'|trans }}
    </div>
    {% endif %}
  </div>

  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">{{ 'page.team.list_partners.title'|trans }}</h2>
    {% if partners is defined and partners is not empty %}
      <ul class=\"list-partners row justify-content-center\">
      {% for partner in partners %}
        <li class=\"-item col-6 col-md-3\">
          <h3 class=\"-name\">{{ partner.name }}</h3>
          <img src=\"{{ partner.logo }}\" alt=\"{{ partner.name }}\" class=\"-logo\">
        </li>
      {% endfor %}
      </ul>
    {% else %}
    <div class=\"alert alert-dark text-center w-75 mx-auto\">
      {{ 'page.team.list_partners.empty'|trans }}
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}
", "team/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/team/index.html.twig");
    }
}
