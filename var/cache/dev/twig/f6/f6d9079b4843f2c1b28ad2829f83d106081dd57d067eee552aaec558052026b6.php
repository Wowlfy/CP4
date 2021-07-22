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

/* legal_notice/_form.html.twig */
class __TwigTemplate_526a01555d63b81503f9fe423b6eb240b063a93b732644d4e0bec72c10c7a78a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal_notice/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "legal_notice/_form.html.twig"));

        // line 1
        echo "<div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
    <div class=\"justify-content-start\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group pb-5 col pt-5 col-lg-6 col-md-12 mx-auto\">
            <button class=\"btn btn-primary btn-lg w-100\">";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 11, $this->source); })()), "Poster")) : ("Poster")), "html", null, true);
        echo "</button>
        </div>
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "legal_notice/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  64 => 11,  58 => 8,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-info shadow p-3 mb-5 rounded form-group row mt-sm-0 px-xs-0 py-sm-0\">
    <div class=\"justify-content-start\">
        {{ form_start(form) }}
        <div class=\"form-group pt-5 col col-lg-6 col-md-12 mx-auto\">
            {{ form_row(form.title, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"form-group col col-lg-6 col-md-12 mx-auto\">
            {{ form_row(form.text, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"form-group pb-5 col pt-5 col-lg-6 col-md-12 mx-auto\">
            <button class=\"btn btn-primary btn-lg w-100\">{{ button_label|default('Poster') }}</button>
        </div>
        {{ form_end(form) }}
    </div>
</div>
", "legal_notice/_form.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/legal_notice/_form.html.twig");
    }
}
