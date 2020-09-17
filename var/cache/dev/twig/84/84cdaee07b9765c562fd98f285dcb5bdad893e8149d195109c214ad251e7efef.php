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

/* components/footer.html.twig */
class __TwigTemplate_9ea2ab2f6f6466c44fc9463681d903ccbef29e01fb0d507e0b5a46725dbb7903 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer.html.twig"));

        // line 1
        echo "<div class=\"app-footer my-4\">
  <div class=\"container\">
    <div class=\"row text-center align-items-center\">
      <div class=\"col-12 col-md-6 text-md-left\">
        &copy;&nbsp;Kargain World ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
      </div>
      <div class=\"col-12 col-md-6 text-md-right\">
        <nav class=\"navbar navbar-light p-0\">
          <ul class=\"navbar-nav d-block w-100 ml-md-auto\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "about", 1 => "product", 2 => "team"]);
        foreach ($context['_seq'] as $context["_key"] => $context["menu_slug"]) {
            // line 11
            echo "              <li class=\"nav-item d-inline-block\">
                <a class=\"nav-link px-2 py-1 ml-md-2 ml-lg-4 ml-xl-5\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["menu_slug"]);
            echo "\">
                  ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("menu_footer.top." . $context["menu_slug"]) . ".label")), "html", null, true);
            echo "
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_slug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "          </ul>
        </nav>
      </div>
    </div>

    <hr class=\"my-lg-4\">

    <div class=\"row text-center align-items-center py-2\">
      <div class=\"col-12 col-md-6 text-md-left\">
        <nav class=\"navbar navbar-light p-0\">
          <ul class=\"navbar-nav d-block w-100 ml-md-auto\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "terms_service", 1 => "privacy_policy", 2 => "contact"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu_bis_slug"]) {
            // line 29
            echo "              ";
            if (0 === twig_compare($context["menu_bis_slug"], "contact")) {
                // line 30
                echo "                ";
                $context["url"] = ("mailto:" . (isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 30, $this->source); })()));
                // line 31
                echo "              ";
            } else {
                // line 32
                echo "                ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["menu_bis_slug"]);
                // line 33
                echo "              ";
            }
            // line 34
            echo "              <li class=\"nav-item d-inline-block\">
                <a class=\"nav-link px-2 py-0";
            // line 35
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35), false)) {
                echo " mr-md-2 pr-md-3 border-dark border-right";
            }
            echo "\"
                    href=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\"  style=\"line-height: 1\">
                  ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("menu_footer.bottom." . $context["menu_bis_slug"]) . ".label")), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_bis_slug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          </ul>
        </nav>
      </div>
      <div class=\"col-12 col-md-6 text-md-right mt-2 mt-md-0\">
        <ul class=\"list-inline mb-0\">
          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["social_networks"]) || array_key_exists("social_networks", $context) ? $context["social_networks"] : (function () { throw new RuntimeError('Variable "social_networks" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 47
            echo "            <li class=\"d-inline-block\">
              <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["network"], "url", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"btn btn-lg btn-pill btn-icon btn-outline-primary mx-1\" style=\"line-height:1\">
                <span class=\"icon-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["network"], "icon", [], "any", false, false, false, 49), "html", null, true);
            echo "\"></span>
              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </ul>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 53,  172 => 49,  168 => 48,  165 => 47,  161 => 46,  154 => 41,  136 => 37,  132 => 36,  126 => 35,  123 => 34,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  91 => 28,  78 => 17,  68 => 13,  64 => 12,  61 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"app-footer my-4\">
  <div class=\"container\">
    <div class=\"row text-center align-items-center\">
      <div class=\"col-12 col-md-6 text-md-left\">
        &copy;&nbsp;Kargain World {{ \"now\"|date('Y') }}
      </div>
      <div class=\"col-12 col-md-6 text-md-right\">
        <nav class=\"navbar navbar-light p-0\">
          <ul class=\"navbar-nav d-block w-100 ml-md-auto\">
            {% for menu_slug in [ 'about', 'product', 'team' ] %}
              <li class=\"nav-item d-inline-block\">
                <a class=\"nav-link px-2 py-1 ml-md-2 ml-lg-4 ml-xl-5\" href=\"{{ path(menu_slug) }}\">
                  {{ ('menu_footer.top.' ~ menu_slug ~ '.label')|trans }}
                </a>
              </li>
            {% endfor %}
          </ul>
        </nav>
      </div>
    </div>

    <hr class=\"my-lg-4\">

    <div class=\"row text-center align-items-center py-2\">
      <div class=\"col-12 col-md-6 text-md-left\">
        <nav class=\"navbar navbar-light p-0\">
          <ul class=\"navbar-nav d-block w-100 ml-md-auto\">
            {% for menu_bis_slug in [ 'terms_service', 'privacy_policy', 'contact' ] %}
              {% if menu_bis_slug == 'contact' %}
                {% set url = 'mailto:' ~ contact_email %}
              {% else %}
                {% set url = path(menu_bis_slug) %}
              {% endif %}
              <li class=\"nav-item d-inline-block\">
                <a class=\"nav-link px-2 py-0{% if loop.last == false %} mr-md-2 pr-md-3 border-dark border-right{% endif %}\"
                    href=\"{{ url }}\"  style=\"line-height: 1\">
                  {{ ('menu_footer.bottom.' ~ menu_bis_slug ~ '.label')|trans }}
                </a>
              </li>
            {% endfor %}
          </ul>
        </nav>
      </div>
      <div class=\"col-12 col-md-6 text-md-right mt-2 mt-md-0\">
        <ul class=\"list-inline mb-0\">
          {% for network in social_networks %}
            <li class=\"d-inline-block\">
              <a href=\"{{ network.url }}\" class=\"btn btn-lg btn-pill btn-icon btn-outline-primary mx-1\" style=\"line-height:1\">
                <span class=\"icon-{{ network.icon }}\"></span>
              </a>
            </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
</div>
", "components/footer.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/footer.html.twig");
    }
}
