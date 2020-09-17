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

/* product/index.html.twig */
class __TwigTemplate_62de863234378beef8f89a7a5d05cf83e294f4ac8b9f98f47862d3c012c1db17 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        // line 1
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 7);
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
    <h2 class=\"display-4 text-center mb-0\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.website.section_title"), "html", null, true);
        echo "</h2>
    ";
        // line 13
        $this->loadTemplate("components/text-and-image.html.twig", "product/index.html.twig", 13)->display(twig_array_merge($context, ["slug" => "product-website", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.website.title"), "title_in_panel" => true, "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.website.text"), "img" => ["position" => "left", "source" => "/build/images/product/product-block-1-img.png"]]));
        // line 23
        echo "
    <h2 class=\"display-4 text-center mb-0\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.mobile_app.section_title"), "html", null, true);
        echo "</h2>
    ";
        // line 25
        $this->loadTemplate("components/text-and-image.html.twig", "product/index.html.twig", 25)->display(twig_array_merge($context, ["slug" => "product-mobile-app", "section_class" => "pb-0", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.mobile_app.title"), "title_in_panel" => true, "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.mobile_app.text"), "img" => ["position" => "right", "source" => "/build/images/product/product-block-2-img.png"]]));
        // line 36
        echo "  </div>
</div>

<div class=\"app-section app-section--product-features bg-gradient-primary-reverse text-white\">
  <div class=\"container\">
    <h2 class=\"display-4 text-white text-center\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.features.title"), "html", null, true);
        echo "</h2>
    ";
        // line 42
        if (((isset($context["features"]) || array_key_exists("features", $context)) &&  !twig_test_empty((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 42, $this->source); })())))) {
            // line 43
            echo "      <ul class=\"list-icons\">
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 44, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["feat"]) {
                // line 45
                echo "          <li class=\"-item row align-items-center";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45), false)) {
                    echo " pb-2 mb-3 mb-md-4";
                }
                echo "\">
            <div class=\"-icon col-auto col-md-3 col-lg-5 text-center\">
              <span class=\"icon-";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feat"], "icon", [], "any", false, false, false, 47), "html", null, true);
                echo "\"></span>
            </div>
            <div class=\"-text col\">
              <h3 class=\"mb-0\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feat"], "title", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", [0 => "_locale"], "method", false, false, false, 50), [], "array", false, false, false, 50), "html", null, true);
                echo "</h3>
              <p class=\"mb-0\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["feat"], "text", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", [0 => "_locale"], "method", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
                echo "</p>
            </div>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "      </ul>
    ";
        } else {
            // line 57
            echo "    <div class=\"alert alert-dark text-center w-75 mx-auto\">
      ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.features.empty"), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 61
        echo "  </div>
</div>

<div class=\"app-section app-section--milestones container pb-0\">
  <h2 class=\"display-4 text-center\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.milestones.title"), "html", null, true);
        echo "</h2>
  ";
        // line 66
        if (((isset($context["milestones"]) || array_key_exists("milestones", $context)) &&  !twig_test_empty((isset($context["milestones"]) || array_key_exists("milestones", $context) ? $context["milestones"] : (function () { throw new RuntimeError('Variable "milestones" does not exist.', 66, $this->source); })())))) {
            // line 67
            echo "    <ul class=\"list-timeline\">
      ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["milestones"]) || array_key_exists("milestones", $context) ? $context["milestones"] : (function () { throw new RuntimeError('Variable "milestones" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ms"]) {
                // line 69
                echo "        <li class=\"-item";
                if ((twig_get_attribute($this->env, $this->source, $context["ms"], "is_old", [], "any", true, true, false, 69) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ms"], "is_old", [], "any", false, false, false, 69), true))) {
                    echo " -item-old";
                }
                echo "\">
          <div class=\"-date\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ms"], "date", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", [0 => "_locale"], "method", false, false, false, 70), [], "array", false, false, false, 70), "html", null, true);
                echo "</div>
          <div class=\"-text\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ms"], "text", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", [0 => "_locale"], "method", false, false, false, 71), [], "array", false, false, false, 71);
                echo "</div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ms'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "    </ul>
  ";
        } else {
            // line 76
            echo "  <div class=\"alert alert-dark text-center w-75 mx-auto\">
    ";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.milestones.empty"), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 80
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 80,  218 => 77,  215 => 76,  211 => 74,  202 => 71,  198 => 70,  191 => 69,  187 => 68,  184 => 67,  182 => 66,  178 => 65,  172 => 61,  166 => 58,  163 => 57,  159 => 55,  141 => 51,  137 => 50,  131 => 47,  123 => 45,  106 => 44,  103 => 43,  101 => 42,  97 => 41,  90 => 36,  88 => 25,  84 => 24,  81 => 23,  79 => 13,  75 => 12,  71 => 10,  61 => 9,  50 => 7,  48 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{% set meta = {
  title:  'page.product.meta.title'|trans,
  desc:   'page.product.meta.description'|trans,
  robots: 'index, follow'
} %}

{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"app-section\">
    <h2 class=\"display-4 text-center mb-0\">{{ 'page.product.website.section_title'|trans }}</h2>
    {% include 'components/text-and-image.html.twig' with {
      slug            : 'product-website',
      title           : 'page.product.website.title'|trans,
      title_in_panel  : true,
      text            : 'page.product.website.text'|trans,
      img             : {
        position  : 'left',
        source    : '/build/images/product/product-block-1-img.png'
      }
    } %}

    <h2 class=\"display-4 text-center mb-0\">{{ 'page.product.mobile_app.section_title'|trans }}</h2>
    {% include 'components/text-and-image.html.twig' with {
      slug            : 'product-mobile-app',
      section_class   : 'pb-0',
      title           : 'page.product.mobile_app.title'|trans,
      title_in_panel  : true,
      text            : 'page.product.mobile_app.text'|trans,
      img             : {
        position  : 'right',
        source    : '/build/images/product/product-block-2-img.png'
      }
    } %}
  </div>
</div>

<div class=\"app-section app-section--product-features bg-gradient-primary-reverse text-white\">
  <div class=\"container\">
    <h2 class=\"display-4 text-white text-center\">{{ 'page.product.features.title'|trans }}</h2>
    {% if features is defined and features is not empty %}
      <ul class=\"list-icons\">
        {% for feat in features %}
          <li class=\"-item row align-items-center{% if loop.last == false %} pb-2 mb-3 mb-md-4{% endif %}\">
            <div class=\"-icon col-auto col-md-3 col-lg-5 text-center\">
              <span class=\"icon-{{ feat.icon }}\"></span>
            </div>
            <div class=\"-text col\">
              <h3 class=\"mb-0\">{{ feat.title[app.request.attributes.get('_locale')] }}</h3>
              <p class=\"mb-0\">{{ feat.text[app.request.attributes.get('_locale')] }}</p>
            </div>
          </li>
        {% endfor %}
      </ul>
    {% else %}
    <div class=\"alert alert-dark text-center w-75 mx-auto\">
      {{ 'page.product.features.empty'|trans }}
    </div>
    {% endif %}
  </div>
</div>

<div class=\"app-section app-section--milestones container pb-0\">
  <h2 class=\"display-4 text-center\">{{ 'page.product.milestones.title'|trans }}</h2>
  {% if milestones is defined and milestones is not empty %}
    <ul class=\"list-timeline\">
      {% for ms in milestones %}
        <li class=\"-item{% if ms.is_old is defined and ms.is_old == true %} -item-old{% endif %}\">
          <div class=\"-date\">{{ ms.date[app.request.attributes.get('_locale')] }}</div>
          <div class=\"-text\">{{ (ms.text[app.request.attributes.get('_locale')])|raw }}</div>
        </li>
      {% endfor %}
    </ul>
  {% else %}
  <div class=\"alert alert-dark text-center w-75 mx-auto\">
    {{ 'page.product.milestones.empty'|trans }}
  </div>
  {% endif %}
</div>
{% endblock %}
", "product/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/product/index.html.twig");
    }
}
