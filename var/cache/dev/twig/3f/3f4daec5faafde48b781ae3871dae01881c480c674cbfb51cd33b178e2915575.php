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

/* student/profile.html.twig */
class __TwigTemplate_38d13aee6237c1e4e93a2813d709483cf603e0178032324bd960f5d9b82a41cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent = $this->loadTemplate("layout_company.html.twig", "student/profile.html.twig", 1);
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
                                <h6 class=\"mb-0\">Profil</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                Etudiant
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
                                <h6 class=\"mb-0\">Niveau d'étude</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 61
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "student", [], "any", false, true, false, 61), "level", [], "any", true, true, false, 61) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "student", [], "any", false, true, false, 61), "level", [], "any", false, false, false, 61)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "student", [], "any", false, true, false, 61), "level", [], "any", false, false, false, 61), "html", null, true))) : (print ("Non défini")));
        echo "
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Anniversaire</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "student", [], "any", false, true, false, 70), "birthdate", [], "any", true, true, false, 70)) {
            // line 71
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "student", [], "any", false, false, false, 71), "birthdate", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "
                                ";
        } else {
            // line 73
            echo "                                    Non défini
                                ";
        }
        // line 75
        echo "                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">CV</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "student", [], "any", false, false, false, 83), "resume", [], "any", false, false, false, 83)) {
            // line 84
            echo "                                    <a target=\"_blank\" href=\"/uploads/resumes/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "student", [], "any", false, false, false, 84), "resume", [], "any", false, false, false, 84), "html", null, true);
            echo "\">CV</a>
                                ";
        } else {
            // line 86
            echo "                                    Non défini
                                ";
        }
        // line 88
        echo "                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Lettre de motivation</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "student", [], "any", false, false, false, 96), "coverLetter", [], "any", false, false, false, 96)) {
            // line 97
            echo "                                    <a target=\"_blank\" href=\"/uploads/coverLetters/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "student", [], "any", false, false, false, 97), "coverLetter", [], "any", false, false, false, 97), "html", null, true);
            echo "\">Lettre de motivation</a>
                                ";
        } else {
            // line 99
            echo "                                    Non défini
                                ";
        }
        // line 101
        echo "                            </div>
                        </div>
                        <hr>
                        <div class=\"text-center\">
                            <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_edit");
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
        return "student/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 105,  248 => 101,  244 => 99,  238 => 97,  236 => 96,  226 => 88,  222 => 86,  216 => 84,  214 => 83,  204 => 75,  200 => 73,  194 => 71,  192 => 70,  180 => 61,  168 => 52,  156 => 43,  144 => 34,  122 => 14,  112 => 13,  100 => 10,  95 => 9,  85 => 8,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
                                <h6 class=\"mb-0\">Profil</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                Etudiant
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
                                <h6 class=\"mb-0\">Niveau d'étude</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {{ user.student.level ?? \"Non défini\" }}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Anniversaire</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {% if user.student.birthdate is defined %}
                                    {{ user.student.birthdate|date(\"d/m/Y\") }}
                                {% else %}
                                    Non défini
                                {% endif %}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">CV</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {% if user.student.resume %}
                                    <a target=\"_blank\" href=\"/uploads/resumes/{{ user.student.resume }}\">CV</a>
                                {% else %}
                                    Non défini
                                {% endif %}
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-sm-3\">
                                <h6 class=\"mb-0\">Lettre de motivation</h6>
                            </div>
                            <div class=\"col-sm-9 text-secondary\">
                                {% if user.student.coverLetter %}
                                    <a target=\"_blank\" href=\"/uploads/coverLetters/{{ user.student.coverLetter }}\">Lettre de motivation</a>
                                {% else %}
                                    Non défini
                                {% endif %}
                            </div>
                        </div>
                        <hr>
                        <div class=\"text-center\">
                            <a href=\"{{ path('student_edit') }}\" class=\"btn btn-primary btn-lg w-25 px-1 mt-4\">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "student/profile.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/student/profile.html.twig");
    }
}
