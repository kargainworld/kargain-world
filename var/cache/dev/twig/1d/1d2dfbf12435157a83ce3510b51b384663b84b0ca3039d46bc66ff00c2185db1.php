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

/* components/header.html.twig */
class __TwigTemplate_31c62a81e752ee5460d9e78b184c97827a1854f103f7a750822aadbd7b5c1dae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header.html.twig"));

        // line 1
        $context["size_display_menu"] = "md";
        // line 2
        echo "
<div class=\"app-header\">
  <nav class=\"navbar navbar-light navbar-expand-";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["size_display_menu"]) || array_key_exists("size_display_menu", $context) ? $context["size_display_menu"] : (function () { throw new RuntimeError('Variable "size_display_menu" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " py-lg-4\">
    <div class=\"container py-lg-1\">
      <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">
        ";
        // line 7
        $this->loadTemplate("components/logo.html.twig", "components/header.html.twig", 7)->display($context);
        // line 8
        echo "      </a>

      <button class=\"navbar-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse order-";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["size_display_menu"]) || array_key_exists("size_display_menu", $context) ? $context["size_display_menu"] : (function () { throw new RuntimeError('Variable "size_display_menu" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "-1\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
          ";
        // line 19
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "about", 1 => "team", 2 => "product", 3 => "ico"]);
        foreach ($context['_seq'] as $context["_key"] => $context["menu_slug"]) {
            // line 20
            echo "            <li class=\"nav-item";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20), $context["menu_slug"])) {
                echo " active";
            }
            echo "\">
              <a class=\"nav-link px-2 ml-md-2 ml-lg-4 ml-xl-5\" href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["menu_slug"]);
            echo "\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("menu." . $context["menu_slug"]) . ".label")), "html", null, true);
            echo "
                ";
            // line 23
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", [0 => "_route"], "method", false, false, false, 23), $context["menu_slug"])) {
                echo " <span class=\"sr-only\">(current)</span>";
            }
            // line 24
            echo "              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_slug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          <li class=\"nav-item\">
            <a class=\"nav-link px-2 ml-md-2 ml-lg-4 ml-xl-5\"
              href=\"/build/files/whitepaper.pdf\" target=\"_blank\">
              Whitepaper
            </a>
          </li>
          <li class=\"nav-divider d-md-none\">
            <hr>
          </li>
          ";
        // line 36
        $context["current_url_slug"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36);
        // line 37
        echo "          ";
        $context["current_url_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["current_url_slug"]) || array_key_exists("current_url_slug", $context) ? $context["current_url_slug"] : (function () { throw new RuntimeError('Variable "current_url_slug" does not exist.', 37, $this->source); })()));
        // line 38
        echo "
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "en", 1 => "fr"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 40
            echo "            ";
            $context["url_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["current_url_slug"]) || array_key_exists("current_url_slug", $context) ? $context["current_url_slug"] : (function () { throw new RuntimeError('Variable "current_url_slug" does not exist.', 40, $this->source); })()), ["_locale" => $context["lang"]]);
            // line 41
            echo "            <li class=\"nav-item";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 41)) {
                echo " ml-md-2 ml-lg-4 ml-xl-5";
            }
            if (0 === twig_compare((isset($context["url_path"]) || array_key_exists("url_path", $context) ? $context["url_path"] : (function () { throw new RuntimeError('Variable "url_path" does not exist.', 41, $this->source); })()), (isset($context["current_url_path"]) || array_key_exists("current_url_path", $context) ? $context["current_url_path"] : (function () { throw new RuntimeError('Variable "current_url_path" does not exist.', 41, $this->source); })()))) {
                echo " active";
            }
            echo "\">
              ";
            // line 42
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42), false)) {
                echo "<span class=\"d-none d-md-inline\">&nbsp|</span>";
            }
            // line 43
            echo "              <a class=\"nav-link px-2 px-md-0 py-1 py-md-2 d-inline-block\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url_path"]) || array_key_exists("url_path", $context) ? $context["url_path"] : (function () { throw new RuntimeError('Variable "url_path" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["lang"]), "html", null, true);
            echo "
              </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </ul>
      </div>
    </div>
  </nav>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 48,  163 => 44,  158 => 43,  154 => 42,  144 => 41,  141 => 40,  124 => 39,  121 => 38,  118 => 37,  116 => 36,  105 => 27,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  78 => 20,  73 => 19,  68 => 14,  60 => 8,  58 => 7,  54 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set size_display_menu = 'md' %}

<div class=\"app-header\">
  <nav class=\"navbar navbar-light navbar-expand-{{ size_display_menu }} py-lg-4\">
    <div class=\"container py-lg-1\">
      <a class=\"navbar-brand\" href=\"{{ path('about') }}\">
        {% include 'components/logo.html.twig' %}
      </a>

      <button class=\"navbar-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse order-{{ size_display_menu }}-1\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav ml-auto\">
          {#<li class=\"nav-item d-block d-{{ size_display_menu }}-none\">
            {% include 'components/logo.html.twig' with { custom_class : 'text-primary' } %}
          </li>#}
          {% for menu_slug in [ 'about', 'team', 'product', 'ico' ] %}
            <li class=\"nav-item{% if app.request.attributes.get('_route') == menu_slug %} active{% endif %}\">
              <a class=\"nav-link px-2 ml-md-2 ml-lg-4 ml-xl-5\" href=\"{{ path(menu_slug) }}\">
                {{ ('menu.' ~ menu_slug ~ '.label')|trans }}
                {% if app.request.attributes.get('_route') == menu_slug %} <span class=\"sr-only\">(current)</span>{% endif %}
              </a>
            </li>
          {% endfor %}
          <li class=\"nav-item\">
            <a class=\"nav-link px-2 ml-md-2 ml-lg-4 ml-xl-5\"
              href=\"/build/files/whitepaper.pdf\" target=\"_blank\">
              Whitepaper
            </a>
          </li>
          <li class=\"nav-divider d-md-none\">
            <hr>
          </li>
          {% set current_url_slug = app.request.attributes.get('_route') %}
          {% set current_url_path = path(current_url_slug) %}

          {% for lang in [ 'en', 'fr' ] %}
            {% set url_path = path(current_url_slug, { '_locale': lang }) %}
            <li class=\"nav-item{% if loop.first %} ml-md-2 ml-lg-4 ml-xl-5{% endif %}{% if url_path == current_url_path %} active{% endif %}\">
              {% if loop.first == false %}<span class=\"d-none d-md-inline\">&nbsp|</span>{% endif %}
              <a class=\"nav-link px-2 px-md-0 py-1 py-md-2 d-inline-block\" href=\"{{ url_path }}\">
                {{ lang|upper }}
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </nav>
</div>
", "components/header.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/header.html.twig");
    }
}
