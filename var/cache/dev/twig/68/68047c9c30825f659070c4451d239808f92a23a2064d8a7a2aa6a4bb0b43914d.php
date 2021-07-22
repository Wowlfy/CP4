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

/* job/show.html.twig */
class __TwigTemplate_9b1a83aaff99e6cf2e8144d9ffaa779e35c6bb1e1d86c8a638beeb2dad77c9e7 extends Template
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
        return "layout_student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent = $this->loadTemplate("layout_student.html.twig", "job/show.html.twig", 1);
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
        echo "    Détail de l'offre - ";
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
        echo "    <div class=\"container\">
        <h3 class=\"text-center mt-5 pt-3 text-primary\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 9, $this->source); })()), "post", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
        <h4 class=\"text-center pt-2  text-primary mb-3\">
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 11, $this->source); })()), "company", [], "any", false, false, false, 11), "companyName", [], "any", false, false, false, 11), "html", null, true);
        echo "
        </h4>
        <h5 class=\"postalCode pb-2 text-center mb-5 text-secondary\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 14, $this->source); })()), "studyField", [], "any", false, false, false, 14), "studyFieldName", [], "any", false, false, false, 14), "html", null, true);
        echo "</h4>
        <div class=\"text-left\">
            <h5>Votre mission :</h5>
            <p class=\"mb-5\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
        </div>
        <div class=\"card text-center pb-2 mb-3\">
            <div class=\"card-header text-muted\">
                <i class=\"fas fa-table\"></i>
                Postée le ";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 22, $this->source); })()), "registeredAt", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 22, $this->source); })()), "registeredAt", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "
            </div>
            <div class=\"card-body\">
                <div class=\"row pt-3\">
                    <div class=\"col list-unstyled\"
                        <ul>
                            <li class=\"text-muted\">Date de début de mission</li>
                            <li>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 29, $this->source); })()), "startAt", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 29, $this->source); })()), "startAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</li>
                            <li class=\"text-muted\">Date de fin de mission</li>
                            <li>";
        // line 31
        ((twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 31, $this->source); })()), "endAt", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 31, $this->source); })()), "endAt", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</li>
                        </ul>
                    </div>
                    <div class=\"col list-unstyled\"
                        <ul>
                            <li class=\"text-muted\">
                                <i class=\"fas fa-map-marker-alt text-primary\"></i>
                                Localisation
                            </li>
                            <li>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 40, $this->source); })()), "city", [], "any", false, false, false, 40), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 40, $this->source); })()), "postalCode", [], "any", false, false, false, 40), "html", null, true);
        echo ")</li>
                            <li class=\"text-muted\">Heures par semaine</li>
                            <li>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 42, $this->source); })()), "hoursAWeek", [], "any", false, false, false, 42), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
                ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STUDENT")) {
            // line 47
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_postulate", ["job" => twig_get_attribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg w-25 mt-4\">Postuler</a>
                ";
        } else {
            // line 49
            echo "                    <button href=\"#\" class=\"btn btn-dark text-light btn-lg w-25 mt-4\" disabled>Postuler</button>
                ";
        }
        // line 51
        echo "            </div>
        </div>
        <div class=\"form-group col pt-5 col-lg-6 col-md-12 mx-auto mb-5 text-center\">
            <a class=\"btn btn-primary btn-lg w-50\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
        echo "\">← Retour à la liste des offres</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  173 => 51,  169 => 49,  163 => 47,  161 => 46,  154 => 42,  147 => 40,  135 => 31,  130 => 29,  120 => 22,  112 => 17,  106 => 14,  100 => 11,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_student.html.twig' %}

{% block title %}
    Détail de l'offre - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h3 class=\"text-center mt-5 pt-3 text-primary\">{{ job.post }}</h3>
        <h4 class=\"text-center pt-2  text-primary mb-3\">
            {{ job.company.companyName }}
        </h4>
        <h5 class=\"postalCode pb-2 text-center mb-5 text-secondary\">
            {{ job.studyField.studyFieldName }}</h4>
        <div class=\"text-left\">
            <h5>Votre mission :</h5>
            <p class=\"mb-5\">{{ job.description }}</p>
        </div>
        <div class=\"card text-center pb-2 mb-3\">
            <div class=\"card-header text-muted\">
                <i class=\"fas fa-table\"></i>
                Postée le {{ job.registeredAt ? job.registeredAt|date('d/m/Y') : '' }}
            </div>
            <div class=\"card-body\">
                <div class=\"row pt-3\">
                    <div class=\"col list-unstyled\"
                        <ul>
                            <li class=\"text-muted\">Date de début de mission</li>
                            <li>{{ job.startAt ? job.startAt|date('d/m/Y') : '' }}</li>
                            <li class=\"text-muted\">Date de fin de mission</li>
                            <li>{{ job.endAt ? job.endAt|date('d/m/Y') : '' }}</li>
                        </ul>
                    </div>
                    <div class=\"col list-unstyled\"
                        <ul>
                            <li class=\"text-muted\">
                                <i class=\"fas fa-map-marker-alt text-primary\"></i>
                                Localisation
                            </li>
                            <li>{{ job.city }} ({{ job.postalCode }})</li>
                            <li class=\"text-muted\">Heures par semaine</li>
                            <li>{{ job.hoursAWeek }}</li>
                        </ul>
                    </div>
                </div>
                {% if is_granted('ROLE_STUDENT') %}
                    <a href=\"{{ path('student_postulate', {'job': job.id}) }}\" class=\"btn btn-primary btn-lg w-25 mt-4\">Postuler</a>
                {% else %}
                    <button href=\"#\" class=\"btn btn-dark text-light btn-lg w-25 mt-4\" disabled>Postuler</button>
                {% endif %}
            </div>
        </div>
        <div class=\"form-group col pt-5 col-lg-6 col-md-12 mx-auto mb-5 text-center\">
            <a class=\"btn btn-primary btn-lg w-50\" href=\"{{ path('offer') }}\">← Retour à la liste des offres</a>
        </div>
    </div>
{% endblock %}
", "job/show.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/job/show.html.twig");
    }
}
