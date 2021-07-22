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

/* company/quotationRequest.html.twig */
class __TwigTemplate_cd1b985f15b3e3b73badb79506f3849d1babc21e48483e6b54e64d61e22819ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_company.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/quotationRequest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/quotationRequest.html.twig"));

        $this->parent = $this->loadTemplate("layout_company.html.twig", "company/quotationRequest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Devis - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"container\">
\t\t<h3 class=\"text-center pt-3 my-5\">Nous demander un devis</h3>

\t\t<div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
\t\t\t<div class=\"justify-content-start\">
\t\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "companyName", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "contactName", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "phone", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "message", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group pb-5 col pt-3 col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t<input class=\"btn btn-primary btn-lg w-100\" type=\"submit\" value=\"Envoyer\">
\t\t\t\t</div>
\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "company/quotationRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 30,  125 => 25,  119 => 22,  113 => 19,  107 => 16,  101 => 13,  96 => 11,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_company.html.twig' %}

{% block title %}Devis - {{ parent() }}{% endblock %}

{% block body %}
    <section class=\"container\">
\t\t<h3 class=\"text-center pt-3 my-5\">Nous demander un devis</h3>

\t\t<div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
\t\t\t<div class=\"justify-content-start\">
\t\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t{{ form_row(form.companyName, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t{{ form_row(form.contactName, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t{{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t{{ form_row(form.phone, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t{{ form_row(form.message, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group pb-5 col pt-3 col-lg-6 col-md-12 mx-auto\">
\t\t\t\t\t<input class=\"btn btn-primary btn-lg w-100\" type=\"submit\" value=\"Envoyer\">
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}", "company/quotationRequest.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/company/quotationRequest.html.twig");
    }
}
