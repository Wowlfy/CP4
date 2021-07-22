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

/* admin_job/edit.html.twig */
class __TwigTemplate_013acb4808a50fcab4adeefd4eb0eda0991a465182829e5ac025fdfefe2900cc extends Template
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
        return "layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_job/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_job/edit.html.twig"));

        $this->parent = $this->loadTemplate("layout_admin.html.twig", "admin_job/edit.html.twig", 1);
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
        <h3 class=\"text-center pt-3 my-5\">Modifier L'offre</h3>
        <div class=\"form-group pb-5 col col-lg-6 col-md-12 mx-auto\">
            <a class=\"btn btn-primary btn-lg w-100\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
        echo "\">← Retour à la liste des offres</a>
        </div>
        <div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
            <div class=\"justify-content-start\">
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "post", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "city", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                 <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "postalCode", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "startAt", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "endAt", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "hoursAWeek", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
               <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"form-group pb-5 col pt-3 col-lg-6 col-md-12 mx-auto\">
                    <button class=\"btn btn-primary btn-lg w-100\">";
        // line 39
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
        echo "\" class=\"btn btn-primary btn-lg w-100 mt-1\">Retour</a>
                </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  156 => 40,  152 => 39,  145 => 35,  139 => 32,  133 => 29,  127 => 26,  121 => 23,  115 => 20,  109 => 17,  104 => 15,  97 => 11,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_admin.html.twig' %}

{% block title %}
    Modifier - {{ parent() }}
{% endblock %}

{% block body %}
    <section class=\"container\">
        <h3 class=\"text-center pt-3 my-5\">Modifier L'offre</h3>
        <div class=\"form-group pb-5 col col-lg-6 col-md-12 mx-auto\">
            <a class=\"btn btn-primary btn-lg w-100\" href=\"{{ path('offer') }}\">← Retour à la liste des offres</a>
        </div>
        <div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
            <div class=\"justify-content-start\">
                {{ form_start(form) }}
                <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.post, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.city, {'attr': {'class': 'form-control'}}) }}
                </div>
                 <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.postalCode, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.startAt, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.endAt, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.hoursAWeek, {'attr': {'class': 'form-control'}}) }}
                </div>
               <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
                    {{ form_row(form.description, {'attr': {'class': 'form-control'}}) }}
                </div>

                <div class=\"form-group pb-5 col pt-3 col-lg-6 col-md-12 mx-auto\">
                    <button class=\"btn btn-primary btn-lg w-100\">{{ button_label|default('Modifier') }}</button>
                    <a href=\"{{ path('offer') }}\" class=\"btn btn-primary btn-lg w-100 mt-1\">Retour</a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </section>
{% endblock %}
", "admin_job/edit.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/admin_job/edit.html.twig");
    }
}
