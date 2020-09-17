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

/* components/flashes.html.twig */
class __TwigTemplate_8deae32060a04c08478f3307f7321a6d407db8ff1ef19926b30235a28fbb739c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/flashes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/flashes.html.twig"));

        // line 1
        $context["type_flashes"] = ["error" => ["label" => "erreur", "css_class" => "danger"], "notice" => ["label" => "notice", "css_class" => "warning"], "success" => ["label" => "réussi", "css_class" => "success"]];
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_flashes"]) || array_key_exists("type_flashes", $context) ? $context["type_flashes"] : (function () { throw new RuntimeError('Variable "type_flashes" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["slug_flash"] => $context["type_flash"]) {
            // line 17
            echo "  ";
            $context["flash_messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "flashbag", [], "any", false, false, false, 17), "get", [0 => $context["slug_flash"]], "method", false, false, false, 17);
            // line 18
            echo "  ";
            if ( !twig_test_empty((isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "  <div class=\"alert alert-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type_flash"], "css_class", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "      <div>";
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "  </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug_flash'], $context['type_flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  67 => 21,  63 => 20,  58 => 19,  55 => 18,  52 => 17,  48 => 16,  45 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set type_flashes = {
  'error' : {
    'label'     : 'erreur',
    'css_class' : 'danger'
  },
  'notice' : {
    'label'     : 'notice',
    'css_class' : 'warning'
  },
  'success' : {
    'label'     : 'réussi',
    'css_class' : 'success'
  }
} %}

{% for slug_flash, type_flash in type_flashes %}
  {% set flash_messages = app.session.flashbag.get(slug_flash) %}
  {% if flash_messages is not empty %}
  <div class=\"alert alert-{{ type_flash.css_class }}\">
    {% for message in flash_messages %}
      <div>{{ message }}</div>
    {% endfor %}
  </div>
  {% endif %}
{% endfor %}
", "components/flashes.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/flashes.html.twig");
    }
}
