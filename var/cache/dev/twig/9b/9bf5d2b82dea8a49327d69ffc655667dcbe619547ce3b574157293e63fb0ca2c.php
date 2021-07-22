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

/* company/_form.html.twig */
class __TwigTemplate_186f28cfdb9755229ea03df25704e5f479584ff823c215cd2a4758a9988bb554 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/_form.html.twig"));

        $this->parent = $this->loadTemplate("layout_company.html.twig", "company/_form.html.twig", 1);
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

        // line 4
        echo "    Modifier - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section class=\"container\">
        <h3 class=\"text-center py-3\">Modifier mon profil</h3>
        <div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "companyName", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "socialReason", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "siret", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "lastname", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "phone", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group pb-5 col pt-5 col-lg-6 col-md-12 mx-auto\">
                <button class=\"btn btn-primary btn-lg w-100\">";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 34, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
        </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "company/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 36,  144 => 34,  138 => 31,  132 => 28,  126 => 25,  120 => 22,  114 => 19,  108 => 16,  102 => 13,  97 => 11,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'layout_company.html.twig' %}

{% block title %}
    Modifier - {{ parent() }}
{% endblock %}

    {% block body %}
    <section class=\"container\">
        <h3 class=\"text-center py-3\">Modifier mon profil</h3>
        <div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
            {{ form_start(form) }}
            <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.companyName, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.socialReason, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.siret, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.user.firstname, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.user.lastname, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.user.phone, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(form.user.email, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group pb-5 col pt-5 col-lg-6 col-md-12 mx-auto\">
                <button class=\"btn btn-primary btn-lg w-100\">{{ button_label|default('Modifier') }}</button>
            </div>
            {{ form_end(form) }}
        </div>
    </section>
    {% endblock %}", "company/_form.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/company/_form.html.twig");
    }
}
