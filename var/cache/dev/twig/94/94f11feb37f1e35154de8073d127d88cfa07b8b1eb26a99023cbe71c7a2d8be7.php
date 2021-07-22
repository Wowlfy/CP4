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

/* admin/students_list.html.twig */
class __TwigTemplate_14cbcf48a2334843dd965eb336e78f6fa7d7fa7605b2bab12f7de9c797a90bb2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/students_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/students_list.html.twig"));

        $this->parent = $this->loadTemplate("layout_admin.html.twig", "admin/students_list.html.twig", 1);
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
        echo "    Étudiants -
    ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section class=\"adminOffre\">
        <div class=\"container\">
            <h3 class=\"text-center pt-3 pb-3\">Liste des comptes Étudiants</h3>
            <div class=\"container\">
                 <div class=\"d-flex mb-1 justify-content-center\">
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "text-center"]]);
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "studyField", [], "any", false, false, false, 15), 'label');
        echo "
                <div class=\"d-flex mb-1 justify-content-center\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "studyField", [], "any", false, false, false, 17), 'widget');
        echo "
                    <button class=\"filter btn btn-primary btn-lg mx-1\">Filtrer</button>
                </div>
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
            </div>
                ";
        // line 22
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 22, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 22), 1))) {
            // line 23
            echo "                    <h5 class=\"text-center\">Page :
                        ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 24, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>
                ";
        }
        // line 26
        echo "            </div>
            <div class=\"row pb-3 d-flex justify-content-center\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 29
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["student"], "user", [], "any", false, false, false, 29))) {
                // line 30
                echo "                        <div class=\" col-lg-3 data-card text-center\">
                            <h2 class=\"pb-2 d-flex align-items-center justify-content-center\">";
                // line 31
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31) . " ") . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", [], "any", false, false, false, 31), "lastname", [], "any", false, false, false, 31))), "html", null, true);
                echo "</h2>
                            <h3 class=\"mt-2\">
                                <i class=\"fas fa-user-graduate\"></i>
                                ";
                // line 34
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "level", [], "any", false, false, false, 34)), "html", null, true);
                echo "</h3>
                            <h3 class=\"mb-3\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "studyField", [], "any", false, false, false, 35), "studyFieldName", [], "any", false, false, false, 35), "html", null, true);
                echo "</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-phone-square-alt\"></i>
                                ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", [], "any", false, false, false, 38), "phone", [], "any", false, false, false, 38), "html", null, true);
                echo "</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-envelope\"></i>
                                ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
                echo "</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-birthday-cake\"></i>
                                ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "birthdate", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo "</h3>
                            <form method=\"post\" action=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_student", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Êtes-vous sûr vouloir supprimer cet élément');\" class=\"post d-flex justify-content-center w-100\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteStudent" . twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 46))), "html", null, true);
                echo "\">
                                <h4>
                                    ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["student"], "resume", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                                        <a target=\"_blank\" href=\"/uploads/resumes/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "resume", [], "any", false, false, false, 49), "html", null, true);
                    echo "\">
                                            <i class=\"fas fa-file\"></i>
                                            CV</a>
                                    ";
                } else {
                    // line 53
                    echo "                                        CV Non défini
                                    ";
                }
                // line 54
                echo "</h4>
                                <button class=\"delete btn mx-3 text-center h-100 align-items-center btn-sm\">Supprimer</button>
                                <h4>
                                    ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["student"], "coverLetter", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                                        <a target=\"_blank\" href=\"/uploads/coverLetters/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "coverLetter", [], "any", false, false, false, 58), "html", null, true);
                    echo "\">
                                            <i class=\"fas fa-envelope-open-text\"></i>
                                            LM</a>
                                    ";
                } else {
                    // line 62
                    echo "                                        LDM Non définie
                                    ";
                }
                // line 64
                echo "                                </h4>
                            </form>
                        </div>
                    ";
            }
            // line 68
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                    <p class=\"alert alert-warning text-center bg-primary text-light\">Aucun compte Etudiant</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </div>
            ";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 72, $this->source); })()));
        echo "
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/students_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 72,  238 => 71,  231 => 69,  226 => 68,  220 => 64,  216 => 62,  208 => 58,  206 => 57,  201 => 54,  197 => 53,  189 => 49,  187 => 48,  182 => 46,  178 => 45,  174 => 44,  168 => 41,  162 => 38,  156 => 35,  152 => 34,  146 => 31,  143 => 30,  140 => 29,  135 => 28,  131 => 26,  126 => 24,  123 => 23,  121 => 22,  116 => 20,  110 => 17,  105 => 15,  101 => 14,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_admin.html.twig' %}

{% block title %}
    Étudiants -
    {{ parent() }}
{% endblock %}

{% block body %}
    <section class=\"adminOffre\">
        <div class=\"container\">
            <h3 class=\"text-center pt-3 pb-3\">Liste des comptes Étudiants</h3>
            <div class=\"container\">
                 <div class=\"d-flex mb-1 justify-content-center\">
                {{ form_start(form, {'attr': {'class': 'text-center'}}) }}
                {{ form_label(form.studyField) }}
                <div class=\"d-flex mb-1 justify-content-center\">
                    {{ form_widget(form.studyField) }}
                    <button class=\"filter btn btn-primary btn-lg mx-1\">Filtrer</button>
                </div>
                {{ form_end(form) }}
            </div>
                {% if students.currentPageNumber > 1 %}
                    <h5 class=\"text-center\">Page :
                        {{ students.currentPageNumber }}</h5>
                {% endif %}
            </div>
            <div class=\"row pb-3 d-flex justify-content-center\">
                {% for student in students %}
                    {% if student.user is not null %}
                        <div class=\" col-lg-3 data-card text-center\">
                            <h2 class=\"pb-2 d-flex align-items-center justify-content-center\">{{ student.user.firstname ~ ' ' ~ student.user.lastname|upper }}</h2>
                            <h3 class=\"mt-2\">
                                <i class=\"fas fa-user-graduate\"></i>
                                {{ student.level|upper }}</h3>
                            <h3 class=\"mb-3\">{{ student.studyField.studyFieldName }}</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-phone-square-alt\"></i>
                                {{ student.user.phone }}</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-envelope\"></i>
                                {{ student.user.email }}</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-birthday-cake\"></i>
                                {{ student.birthdate|date(\"d/m/Y\") }}</h3>
                            <form method=\"post\" action=\"{{ path('admin_delete_student', {'id': student.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr vouloir supprimer cet élément');\" class=\"post d-flex justify-content-center w-100\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('deleteStudent' ~ student.id) }}\">
                                <h4>
                                    {% if student.resume %}
                                        <a target=\"_blank\" href=\"/uploads/resumes/{{ student.resume }}\">
                                            <i class=\"fas fa-file\"></i>
                                            CV</a>
                                    {% else %}
                                        CV Non défini
                                    {% endif %}</h4>
                                <button class=\"delete btn mx-3 text-center h-100 align-items-center btn-sm\">Supprimer</button>
                                <h4>
                                    {% if student.coverLetter %}
                                        <a target=\"_blank\" href=\"/uploads/coverLetters/{{ student.coverLetter }}\">
                                            <i class=\"fas fa-envelope-open-text\"></i>
                                            LM</a>
                                    {% else %}
                                        LDM Non définie
                                    {% endif %}
                                </h4>
                            </form>
                        </div>
                    {% endif %}
                {% else %}
                    <p class=\"alert alert-warning text-center bg-primary text-light\">Aucun compte Etudiant</p>
                {% endfor %}
            </div>
            {{ knp_pagination_render(students) }}
        </div>
    </section>
{% endblock %}
", "admin/students_list.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/admin/students_list.html.twig");
    }
}
