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

/* email/quotationRequestEmail.html.twig */
class __TwigTemplate_6298f27848e33b1474ae69d4bc3206a740d5eda805c62bc574c9e80d3faac4af extends Template
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
        return "email/layoutEmail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/quotationRequestEmail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/quotationRequestEmail.html.twig"));

        $this->parent = $this->loadTemplate("email/layoutEmail.html.twig", "email/quotationRequestEmail.html.twig", 1);
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

        echo "Demande de devis - ";
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2>Nouvelle demande de devis de ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quotationRequest"]) || array_key_exists("quotationRequest", $context) ? $context["quotationRequest"] : (function () { throw new RuntimeError('Variable "quotationRequest" does not exist.', 7, $this->source); })()), "companyName", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
    <p>Bonjour, vous avez reçu une nouvelle demande de devis de la société ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quotationRequest"]) || array_key_exists("quotationRequest", $context) ? $context["quotationRequest"] : (function () { throw new RuntimeError('Variable "quotationRequest" does not exist.', 8, $this->source); })()), "companyName", [], "any", false, false, false, 8), "html", null, true);
        echo ".</p>
    <table style=\"border: 0;\">
        <tr>
            <td>Personne à contacter : </td>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quotationRequest"]) || array_key_exists("quotationRequest", $context) ? $context["quotationRequest"] : (function () { throw new RuntimeError('Variable "quotationRequest" does not exist.', 12, $this->source); })()), "contactName", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Téléphone: </td>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quotationRequest"]) || array_key_exists("quotationRequest", $context) ? $context["quotationRequest"] : (function () { throw new RuntimeError('Variable "quotationRequest" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>Adresse mail: </td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quotationRequest"]) || array_key_exists("quotationRequest", $context) ? $context["quotationRequest"] : (function () { throw new RuntimeError('Variable "quotationRequest" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <p>Message : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quotationRequest"]) || array_key_exists("quotationRequest", $context) ? $context["quotationRequest"] : (function () { throw new RuntimeError('Variable "quotationRequest" does not exist.', 23, $this->source); })()), "message", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "email/quotationRequestEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 23,  119 => 20,  112 => 16,  105 => 12,  98 => 8,  94 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'email/layoutEmail.html.twig' %}

{% block title %}Demande de devis - {{ parent() }}{% endblock %}

{% block body %}
    {{ parent() }}
    <h2>Nouvelle demande de devis de {{ quotationRequest.companyName }}</h2>
    <p>Bonjour, vous avez reçu une nouvelle demande de devis de la société {{ quotationRequest.companyName }}.</p>
    <table style=\"border: 0;\">
        <tr>
            <td>Personne à contacter : </td>
            <td>{{ quotationRequest.contactName }}</td>
        </tr>
        <tr>
            <td>Téléphone: </td>
            <td>{{ quotationRequest.phone }}</td>
        </tr>
        <tr>
            <td>Adresse mail: </td>
            <td>{{ quotationRequest.email }}</td>
        </tr>
    </table>
    <p>Message : {{ quotationRequest.message }}</p>
{% endblock %}", "email/quotationRequestEmail.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/email/quotationRequestEmail.html.twig");
    }
}
