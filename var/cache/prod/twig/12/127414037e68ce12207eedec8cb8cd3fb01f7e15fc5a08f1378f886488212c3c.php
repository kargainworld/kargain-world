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
class __TwigTemplate_5a09151fcbb81945abd5d05adba2efeaa87236b3d1cd06e41de4a48aa1aa59ce extends Template
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
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.terms_service.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "terms-service/index.html.twig", 7);
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
        return array (  134 => 47,  130 => 46,  123 => 42,  119 => 41,  112 => 37,  108 => 36,  101 => 32,  97 => 31,  90 => 27,  86 => 26,  79 => 22,  75 => 21,  68 => 17,  62 => 14,  57 => 12,  53 => 10,  49 => 9,  44 => 7,  42 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "terms-service/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/terms-service/index.html.twig");
    }
}
