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
class __TwigTemplate_4788b8c93cf984b5c94de9a38ad77d6f16d8d01d85ac431056ee50ca50dd59ab extends Template
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
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (((isset($context["features"]) || array_key_exists("features", $context)) &&  !twig_test_empty(($context["features"] ?? null)))) {
            // line 43
            echo "      <ul class=\"list-icons\">
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["features"] ?? null));
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
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["feat"], "title", [], "any", false, false, false, 50)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", [0 => "_locale"], "method", false, false, false, 50)] ?? null) : null), "html", null, true);
                echo "</h3>
              <p class=\"mb-0\">";
                // line 51
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["feat"], "text", [], "any", false, false, false, 51)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", [0 => "_locale"], "method", false, false, false, 51)] ?? null) : null), "html", null, true);
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
        if (((isset($context["milestones"]) || array_key_exists("milestones", $context)) &&  !twig_test_empty(($context["milestones"] ?? null)))) {
            // line 67
            echo "    <ul class=\"list-timeline\">
      ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["milestones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ms"]) {
                // line 69
                echo "        <li class=\"-item";
                if ((twig_get_attribute($this->env, $this->source, $context["ms"], "is_old", [], "any", true, true, false, 69) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ms"], "is_old", [], "any", false, false, false, 69), true))) {
                    echo " -item-old";
                }
                echo "\">
          <div class=\"-date\">";
                // line 70
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["ms"], "date", [], "any", false, false, false, 70)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", [0 => "_locale"], "method", false, false, false, 70)] ?? null) : null), "html", null, true);
                echo "</div>
          <div class=\"-text\">";
                // line 71
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["ms"], "text", [], "any", false, false, false, 71)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", [0 => "_locale"], "method", false, false, false, 71)] ?? null) : null);
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
        return array (  206 => 80,  200 => 77,  197 => 76,  193 => 74,  184 => 71,  180 => 70,  173 => 69,  169 => 68,  166 => 67,  164 => 66,  160 => 65,  154 => 61,  148 => 58,  145 => 57,  141 => 55,  123 => 51,  119 => 50,  113 => 47,  105 => 45,  88 => 44,  85 => 43,  83 => 42,  79 => 41,  72 => 36,  70 => 25,  66 => 24,  63 => 23,  61 => 13,  57 => 12,  53 => 10,  49 => 9,  44 => 7,  42 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/product/index.html.twig");
    }
}
