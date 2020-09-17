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
class __TwigTemplate_02c7ec3dbbbc14093edc74dc0da7743c0e2446eab1887f78e565545a2cb5f2a5 extends Template
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
        // line 1
        $context["type_flashes"] = ["error" => ["label" => "erreur", "css_class" => "danger"], "notice" => ["label" => "notice", "css_class" => "warning"], "success" => ["label" => "réussi", "css_class" => "success"]];
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_flashes"] ?? null));
        foreach ($context['_seq'] as $context["slug_flash"] => $context["type_flash"]) {
            // line 17
            echo "  ";
            $context["flash_messages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 17), "flashbag", [], "any", false, false, false, 17), "get", [0 => $context["slug_flash"]], "method", false, false, false, 17);
            // line 18
            echo "  ";
            if ( !twig_test_empty(($context["flash_messages"] ?? null))) {
                // line 19
                echo "  <div class=\"alert alert-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type_flash"], "css_class", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flash_messages"] ?? null));
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
        return array (  70 => 23,  61 => 21,  57 => 20,  52 => 19,  49 => 18,  46 => 17,  42 => 16,  39 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/flashes.html.twig", "/home/kargaincxy/kargain_world/www/templates/components/flashes.html.twig");
    }
}
