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
class __TwigTemplate_bb5199d41afd50242804d10ba9be92b64a1551ab7b0ebdbc4e044c9cf54b0e55 extends Template
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
        // line 1
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"container\">
  <div class=\"app-section\">
    <h2 class=\"display-4 text-center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.team.intro.title"), "html", null, true);
        echo "</h2>
    ";
        // line 13
        if (((isset($context["team"]) || array_key_exists("team", $context)) &&  !twig_test_empty(($context["team"] ?? null)))) {
            // line 14
            echo "      <ul class=\"list-team row align-items-stretch\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["team"] ?? null));
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
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["member"], "job", [], "any", false, false, false, 26)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_locale"], "method", false, false, false, 26)] ?? null) : null), "html", null, true);
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
        if (((isset($context["partners"]) || array_key_exists("partners", $context)) &&  !twig_test_empty(($context["partners"] ?? null)))) {
            // line 41
            echo "      <ul class=\"list-partners row justify-content-center\">
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
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
        return array (  163 => 54,  157 => 51,  154 => 50,  150 => 48,  139 => 45,  135 => 44,  132 => 43,  128 => 42,  125 => 41,  123 => 40,  119 => 39,  114 => 36,  108 => 33,  105 => 32,  101 => 30,  91 => 26,  84 => 22,  80 => 21,  74 => 18,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  57 => 12,  53 => 10,  49 => 9,  44 => 7,  42 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/team/index.html.twig");
    }
}
