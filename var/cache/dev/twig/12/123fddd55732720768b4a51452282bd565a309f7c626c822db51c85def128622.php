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

/* student/_form.html.twig */
class __TwigTemplate_60946aec2412c2f6527868b990cdf8f63f0db1846077d5adcca921b6c0d0fd1c extends Template
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
        // line 1
        return "layout_student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_form.html.twig"));

        $this->parent = $this->loadTemplate("layout_student.html.twig", "student/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"container\">
        <h3 class=\"text-center py-3\">Modifier mon profil</h3>
        <div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "firstname", [], "any", false, false, false, 9), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "lastname", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "phone", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 21, $this->source); })()), "level", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 24, $this->source); })()), "birthdate", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 27, $this->source); })()), "resumeFile", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 30, $this->source); })()), "coverLetterFile", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <div class=\"form-group pb-5 col pt-5 col-lg-6 col-md-12 mx-auto\">
                <button class=\"btn btn-primary btn-lg w-100\">";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 33, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["studentForm"]) || array_key_exists("studentForm", $context) ? $context["studentForm"] : (function () { throw new RuntimeError('Variable "studentForm" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  126 => 33,  120 => 30,  114 => 27,  108 => 24,  102 => 21,  96 => 18,  90 => 15,  84 => 12,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_student.html.twig' %}

{% block body %}
    <section class=\"container\">
        <h3 class=\"text-center py-3\">Modifier mon profil</h3>
        <div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
            {{ form_start(studentForm) }}
            <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.user.firstname, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.user.lastname, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.user.phone, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.user.email, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.level, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.birthdate, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.resumeFile, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                {{ form_row(studentForm.coverLetterFile, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group pb-5 col pt-5 col-lg-6 col-md-12 mx-auto\">
                <button class=\"btn btn-primary btn-lg w-100\">{{ button_label|default('Modifier') }}</button>
            </div>
            {{ form_end(studentForm) }}
        </div>
    </section>
{% endblock %}
", "student/_form.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/student/_form.html.twig");
    }
}
