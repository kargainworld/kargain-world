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

/* privacy-policy/index.html.twig */
class __TwigTemplate_1928081a99041f30cafe36958659344df1275148a3af333b7e8513b761b7ce9c extends Template
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
        $context["meta"] = ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.meta.title"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.meta.description"), "robots" => "index, follow"];
        // line 7
        $this->parent = $this->loadTemplate("base.html.twig", "privacy-policy/index.html.twig", 7);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.title"), "html", null, true);
        echo "</h2>
    <div class=\"text-contextual\">
      <div class=\"text-muted text-center mb-4\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.last_update"), "html", null, true);
        echo "</div>

      <div class=\"mb-4\">
        ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.intro");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.what_collect.title"), "html", null, true);
        echo "</h3>
        ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.what_collect.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.use_personal_info.title"), "html", null, true);
        echo "</h3>
        ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.use_personal_info.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.sharing_personal_info.title"), "html", null, true);
        echo "</h3>
        ";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.sharing_personal_info.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.info_choices_changes.title"), "html", null, true);
        echo "</h3>
        ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.info_choices_changes.text");
        echo "
      </div>

      <div class=\"mb-4\">
        <h3 class=\"h6\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.contact.title"), "html", null, true);
        echo "</h3>
        ";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.contact.text");
        echo "
      </div>

      <div>
        ";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.privacy_policy.changes_to_policy.text");
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "privacy-policy/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  123 => 42,  119 => 41,  112 => 37,  108 => 36,  101 => 32,  97 => 31,  90 => 27,  86 => 26,  79 => 22,  75 => 21,  68 => 17,  62 => 14,  57 => 12,  53 => 10,  49 => 9,  44 => 7,  42 => 1,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "privacy-policy/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/privacy-policy/index.html.twig");
    }
}
