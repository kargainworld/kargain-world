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

/* components/text-and-image.html.twig */
class __TwigTemplate_9e7f0ec35e71cceafb344f59f4961e8f9f0f497392b055ad03071baebc526361 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/text-and-image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/text-and-image.html.twig"));

        // line 1
        if (((isset($context["text"]) || array_key_exists("text", $context)) && (isset($context["img"]) || array_key_exists("img", $context)))) {
            // line 2
            $context["has_title"] = ((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })())));
            // line 3
            echo "<div class=\"app-section app-section--text-and-image";
            if ((isset($context["slug"]) || array_key_exists("slug", $context))) {
                echo " app-section--";
                echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 3, $this->source); })()), "html", null, true);
            }
            if ((isset($context["section_class"]) || array_key_exists("section_class", $context))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["section_class"]) || array_key_exists("section_class", $context) ? $context["section_class"] : (function () { throw new RuntimeError('Variable "section_class" does not exist.', 3, $this->source); })()), "html", null, true);
            }
            echo " container\">
  <div class=\"row row-title\">
    <div class=\"col-12 col-md-6\">
      ";
            // line 6
            if (((isset($context["has_title"]) || array_key_exists("has_title", $context) ? $context["has_title"] : (function () { throw new RuntimeError('Variable "has_title" does not exist.', 6, $this->source); })()) &&  !(isset($context["title_in_panel"]) || array_key_exists("title_in_panel", $context)))) {
                // line 7
                echo "        <h3 class=\"-title display-6 no-border\">";
                echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })());
                echo "</h3>
      ";
            }
            // line 9
            echo "    </div>
  </div>
  <div class=\"row row-content align-items-";
            // line 11
            if ((isset($context["valign"]) || array_key_exists("valign", $context))) {
                echo twig_escape_filter($this->env, (isset($context["valign"]) || array_key_exists("valign", $context) ? $context["valign"] : (function () { throw new RuntimeError('Variable "valign" does not exist.', 11, $this->source); })()), "html", null, true);
            } else {
                echo "center";
            }
            echo "\">
    <div class=\"col-12 col-md-6 col-text\">
      <div class=\"panel panel--classic\">
        ";
            // line 14
            if (((isset($context["has_title"]) || array_key_exists("has_title", $context) ? $context["has_title"] : (function () { throw new RuntimeError('Variable "has_title" does not exist.', 14, $this->source); })()) && ((isset($context["title_in_panel"]) || array_key_exists("title_in_panel", $context)) && 0 === twig_compare((isset($context["title_in_panel"]) || array_key_exists("title_in_panel", $context) ? $context["title_in_panel"] : (function () { throw new RuntimeError('Variable "title_in_panel" does not exist.', 14, $this->source); })()), true)))) {
                // line 15
                echo "          <h3 class=\"-title h5\">";
                echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })());
                echo "</h3>
        ";
            }
            // line 17
            echo "
        <hr class=\"mini mt-0 mb-4 ml-0\">

        <div class=\"-text\">";
            // line 20
            echo (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 20, $this->source); })());
            echo "</div>
        ";
            // line 21
            if (((isset($context["list"]) || array_key_exists("list", $context)) &&  !twig_test_empty((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 21, $this->source); })())))) {
                // line 22
                echo "          <ul class=\"-list text-secondary\">
            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 23, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "              <li>
                ";
                    // line 25
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 25)) {
                        // line 26
                        echo "                  <span class=\"-item-icon icon-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 26), "html", null, true);
                        echo "\"></span>
                ";
                    }
                    // line 28
                    echo "                <span class=\"-item-text\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 28), "html", null, true);
                    echo "</span>
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "          </ul>
        ";
            }
            // line 33
            echo "        ";
            if (((isset($context["actions"]) || array_key_exists("actions", $context)) &&  !twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 33, $this->source); })())))) {
                // line 34
                echo "        <div class=\"-actions\">
          ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 35, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 36
                    echo "            <a class=\"btn btn-xl btn-pill btn-gradient-primary btn-big-icon btn-big-icon--right";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 36), false)) {
                        echo " mb-2";
                    }
                    echo "\"
              href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", false, false, false, 37), "html", null, true);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["action"], "target", [], "any", true, true, false, 37)) {
                        echo " target=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "target", [], "any", false, false, false, 37), "html", null, true);
                        echo "\"";
                    }
                    echo " >
              ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 38), "html", null, true);
                    echo "
              <span class=\"icon icon-arrow-right\"></span>
            </a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "        </div>
        ";
            }
            // line 44
            echo "      </div>
    </div>
    <div class=\"col-12 col-md-6 col-image text-center mt-5 mt-md-0";
            // line 46
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 46, $this->source); })()), "position", [], "any", false, false, false, 46), "left")) {
                echo " order-md-first";
            }
            echo "\">
      <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 47, $this->source); })()), "source", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"img-fluid\">
    </div>
  </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/text-and-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 47,  200 => 46,  196 => 44,  192 => 42,  174 => 38,  164 => 37,  157 => 36,  140 => 35,  137 => 34,  134 => 33,  130 => 31,  120 => 28,  114 => 26,  112 => 25,  109 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  91 => 17,  85 => 15,  83 => 14,  73 => 11,  69 => 9,  63 => 7,  61 => 6,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if text is defined and img is defined %}
{% set has_title = (title is defined and title is not empty) %}
<div class=\"app-section app-section--text-and-image{% if slug is defined %} app-section--{{ slug }}{% endif %}{% if section_class is defined %} {{ section_class }}{% endif %} container\">
  <div class=\"row row-title\">
    <div class=\"col-12 col-md-6\">
      {% if has_title and title_in_panel is not defined %}
        <h3 class=\"-title display-6 no-border\">{{ title|raw }}</h3>
      {% endif %}
    </div>
  </div>
  <div class=\"row row-content align-items-{% if valign is defined %}{{ valign }}{% else %}center{% endif %}\">
    <div class=\"col-12 col-md-6 col-text\">
      <div class=\"panel panel--classic\">
        {% if has_title and (title_in_panel is defined and title_in_panel == true) %}
          <h3 class=\"-title h5\">{{ title|raw }}</h3>
        {% endif %}

        <hr class=\"mini mt-0 mb-4 ml-0\">

        <div class=\"-text\">{{ text|raw }}</div>
        {% if list is defined and list is not empty %}
          <ul class=\"-list text-secondary\">
            {% for item in list %}
              <li>
                {% if item.icon is defined %}
                  <span class=\"-item-icon icon-{{ item.icon }}\"></span>
                {% endif %}
                <span class=\"-item-text\">{{ item.text }}</span>
              </li>
            {% endfor %}
          </ul>
        {% endif %}
        {% if actions is defined and actions is not empty %}
        <div class=\"-actions\">
          {% for action in actions %}
            <a class=\"btn btn-xl btn-pill btn-gradient-primary btn-big-icon btn-big-icon--right{% if loop.last == false %} mb-2{% endif %}\"
              href=\"{{ action.link }}\"{% if action.target is defined %} target=\"{{ action.target }}\"{% endif %} >
              {{ action.label }}
              <span class=\"icon icon-arrow-right\"></span>
            </a>
          {% endfor %}
        </div>
        {% endif %}
      </div>
    </div>
    <div class=\"col-12 col-md-6 col-image text-center mt-5 mt-md-0{% if img.position == 'left' %} order-md-first{% endif %}\">
      <img src=\"{{ img.source }}\" class=\"img-fluid\">
    </div>
  </div>
</div>
{% endif %}
", "components/text-and-image.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/text-and-image.html.twig");
    }
}
