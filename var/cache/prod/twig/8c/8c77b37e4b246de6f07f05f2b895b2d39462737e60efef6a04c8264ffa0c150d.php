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

/* about/index.html.twig */
class __TwigTemplate_4f925ea96ba996b900de4ca410fa7e02e37fe9e4719ea633a53d6d0593abbafa extends Template
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
        // line 12
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["meta"] = ["desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.meta.description"), "robots" => "index, follow"];
        // line 12
        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"panel panel--planet-landscape\">
  <div class=\"-inner container\">
    <h1 class=\"display-1 text-primary text-center mb-4\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.intro.title"), "html", null, true);
        echo "</h1>
    <p class=\"text-introduction text-center mx-auto pt-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.intro.text"), "html", null, true);
        echo "</p>
  </div>
</div>

<div class=\"panel panel--jumbotron panel--white-paper bg-gradient-primary text-white\">
  <div class=\"-inner container p-0\">
    <h3 class=\"-title h1\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.whitepaper.title"), "html", null, true);
        echo "</h3>
    <p class=\"-text\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.whitepaper.text"), "html", null, true);
        echo "</p>
    <div class=\"-actions\">
      <a class=\"btn btn-xl btn-pill btn-outline-light btn-big-icon btn-big-icon--right\"
        href=\"/build/files/whitepaper.pdf\" target=\"_blank\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.whitepaper.btn.label"), "html", null, true);
        echo "
        <span class=\"icon icon-arrow-right\"></span>
      </a>
    </div>
  </div>
</div>

";
        // line 36
        $this->loadTemplate("components/text-and-image.html.twig", "about/index.html.twig", 36)->display(twig_array_merge($context, ["slug" => "about-blockchain", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.title"), "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.block_1.text"), "list" => ["item_1" => ["icon" => "lock", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.block_1.list.item_1.text")], "item_2" => ["icon" => "steering-wheel", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.block_1.list.item_2.text")], "item_3" => ["icon" => "chart-up", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.block_1.list.item_3.text")]], "img" => ["position" => "right", "source" => "/build/images/about/plateform-block-1-img.png"]]));
        // line 59
        echo "
";
        // line 60
        $this->loadTemplate("components/text-and-image.html.twig", "about/index.html.twig", 60)->display(twig_array_merge($context, ["text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.block_2.text"), "img" => ["position" => "left", "source" => "/build/images/about/plateform-block-2-img.png"], "actions" => ["btn_1" => ["link" => "/build/files/whitepaper.pdf", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.blockchain.block_2.btn.label"), "target" => "_blank"]]]));
    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 60,  93 => 59,  91 => 36,  81 => 29,  74 => 25,  70 => 24,  61 => 18,  57 => 17,  53 => 15,  49 => 14,  44 => 12,  42 => 6,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "about/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/about/index.html.twig");
    }
}
