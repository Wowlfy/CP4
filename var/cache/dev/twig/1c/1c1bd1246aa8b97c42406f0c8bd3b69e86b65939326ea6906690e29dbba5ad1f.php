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

/* company/profile.html.twig */
class __TwigTemplate_4954edcac42e456ad881fafe69f92ef8a2e5f0d98e5dbe81e594dbf2bf5ca60c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/profile.html.twig"));

        $this->parent = $this->loadTemplate("layout_company.html.twig", "company/profile.html.twig", 1);
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
        echo "    Profil -
    ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("profile");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h3 class=\"text-center pt-3 my-lg-5\">Profil</h3>
    <div class=\"container\">
        <div class=\"main-body\">
            <div class=\"col-sm-10 w-100\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                    <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Entreprise</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 25
        (((twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 25)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 25), "html", null, true))) : (print ("Non defini")));
        echo "
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Nom</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "firstname", [], "any", false, false, false, 34) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "lastname", [], "any", false, false, false, 34)), "html", null, true);
        echo "
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Email</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), "html", null, true);
        echo "
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Téléphone</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), "html", null, true);
        echo "
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Numero siret</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 61
        (((twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "siret", [], "any", true, true, false, 61) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "siret", [], "any", false, false, false, 61)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "siret", [], "any", false, false, false, 61), "html", null, true))) : (print ("Non defini")));
        echo "
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Raison sociale</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 70
        (((twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "socialReason", [], "any", true, true, false, 70) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "socialReason", [], "any", false, false, false, 70)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "socialReason", [], "any", false, false, false, 70), "html", null, true))) : (print ("Non defini")));
        echo "
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_edit");
        echo "\" class=\"btn btn-primary btn-lg w-25 px-1 mt-4\">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "company/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 74,  195 => 70,  183 => 61,  171 => 52,  159 => 43,  147 => 34,  135 => 25,  122 => 14,  112 => 13,  100 => 10,  95 => 9,  85 => 8,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_company.html.twig' %}

{% block title %}
    Profil -
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('profile') }}
{% endblock %}

{% block body %}
    <h3 class=\"text-center pt-3 my-lg-5\">Profil</h3>
    <div class=\"container\">
        <div class=\"main-body\">
            <div class=\"col-sm-10 w-100\">
                <div class=\"card h-100\">
                    <div class=\"card-body\">
                    <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Entreprise</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ company.companyName ?? \"Non defini\" }}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Nom</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ user.firstname ~ ' ' ~ user.lastname }}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Email</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ user.email }}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Téléphone</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ user.phone }}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Numero siret</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ company.siret ?? \"Non defini\" }}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Raison sociale</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ company.socialReason ?? \"Non defini\" }}
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <a href=\"{{ path('company_edit') }}\" class=\"btn btn-primary btn-lg w-25 px-1 mt-4\">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "company/profile.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/company/profile.html.twig");
    }
}
