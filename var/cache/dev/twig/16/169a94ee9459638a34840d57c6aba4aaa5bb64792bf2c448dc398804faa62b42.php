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
class __TwigTemplate_0286c7117afb450387422428a44a7c9fffee7672e64f9afe98a95e6c830225d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        // line 6
        $context["meta"] = ["desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.about.meta.description"), "robots" => "index, follow"];
        // line 12
        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  114 => 60,  111 => 59,  109 => 36,  99 => 29,  92 => 25,  88 => 24,  79 => 18,  75 => 17,  71 => 15,  61 => 14,  50 => 12,  48 => 6,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% set meta = {
  title:  'page.about.meta.title'|trans,
  desc:   'page.about.meta.description'|trans,
  robots: 'index, follow'
} %} #}
{% set meta = {
  desc: 'page.about.meta.description'|trans,
  robots: 'index, follow'
} %}


{% extends 'base.html.twig' %}

{% block body %}
<div class=\"panel panel--planet-landscape\">
  <div class=\"-inner container\">
    <h1 class=\"display-1 text-primary text-center mb-4\">{{ 'page.about.intro.title'|trans }}</h1>
    <p class=\"text-introduction text-center mx-auto pt-2\">{{ 'page.about.intro.text'|trans }}</p>
  </div>
</div>

<div class=\"panel panel--jumbotron panel--white-paper bg-gradient-primary text-white\">
  <div class=\"-inner container p-0\">
    <h3 class=\"-title h1\">{{ 'page.about.whitepaper.title'|trans }}</h3>
    <p class=\"-text\">{{ 'page.about.whitepaper.text'|trans }}</p>
    <div class=\"-actions\">
      <a class=\"btn btn-xl btn-pill btn-outline-light btn-big-icon btn-big-icon--right\"
        href=\"/build/files/whitepaper.pdf\" target=\"_blank\">
        {{ 'page.about.whitepaper.btn.label'|trans }}
        <span class=\"icon icon-arrow-right\"></span>
      </a>
    </div>
  </div>
</div>

{% include 'components/text-and-image.html.twig' with {
  slug  : 'about-blockchain',
  title : 'page.about.blockchain.title'|trans,
  text  : 'page.about.blockchain.block_1.text'|trans,
  list  : {
    item_1 : {
      icon: 'lock',
      text: 'page.about.blockchain.block_1.list.item_1.text'|trans
    },
    item_2 : {
      icon: 'steering-wheel',
      text: 'page.about.blockchain.block_1.list.item_2.text'|trans
    },
    item_3 : {
      icon: 'chart-up',
      text: 'page.about.blockchain.block_1.list.item_3.text'|trans
    },
  },
  img   : {
    position  : 'right',
    source    : '/build/images/about/plateform-block-1-img.png'
  }
} %}

{% include 'components/text-and-image.html.twig' with {
  text  : 'page.about.blockchain.block_2.text'|trans,
  img   : {
    position  : 'left',
    source    : '/build/images/about/plateform-block-2-img.png'
  },
  actions: {
    btn_1 : {
      link:   '/build/files/whitepaper.pdf',
      label:  'page.about.blockchain.block_2.btn.label'|trans,
      target: '_blank'
    }
  }
} %}
{% endblock %}
", "about/index.html.twig", "/home/kargaincxy/kargain_world/www/templates/about/index.html.twig");
    }
}
