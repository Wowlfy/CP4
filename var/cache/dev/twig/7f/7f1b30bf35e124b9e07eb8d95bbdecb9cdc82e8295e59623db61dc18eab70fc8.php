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

/* company/list_jobs.html.twig */
class __TwigTemplate_f4abcd32b16902c4034592ca96427ab28aeceacca6b9eb25e4e5b368cc7ae2b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/list_jobs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "company/list_jobs.html.twig"));

        $this->parent = $this->loadTemplate("layout_company.html.twig", "company/list_jobs.html.twig", 1);
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
        echo "    Offres - ";
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
        echo "    <section class=\"adminOffre\">
        <h3 class=\"text-center pt-3 my-5\">Mes offres</h3>
        <div class=\"form-group pb-5 col pt-3 col-lg-6 col-md-12 mx-auto\">
            <a class=\"btn btn-primary btn-lg w-100\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_jobs_new");
        echo "\">+ Ajouter une offre</a>
        </div>
        <div class=\"row d-flex justify-content-center\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 15
            echo "                <div class=\" col-lg-3 data-card mx-3\">
                    <h2 class=\"pb-2 text-center d-flex align-items-center justify-content-center\">";
            // line 16
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "post", [], "any", false, false, false, 16))), 20))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "post", [], "any", false, false, false, 16), 0, 20) . "...")) : (twig_get_attribute($this->env, $this->source, $context["job"], "post", [], "any", false, false, false, 16))), "html", null, true);
            echo "</h2>
                    <h3 class=\"post mt-2 text-center\">
                        <i class=\"fas fa-industry\"></i>
                        ";
            // line 19
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 19), "companyName", [], "any", false, false, false, 19))), 20))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 19), "companyName", [], "any", false, false, false, 19), 0, 20) . "...")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 19), "companyName", [], "any", false, false, false, 19))), "html", null, true);
            echo "</h3>
                    <h3 class=\"postalCode pb-2 text-center\">
                        <i class=\"fas fa-graduation-cap\"></i>
                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "studyField", [], "any", false, false, false, 22), "studyFieldName", [], "any", false, false, false, 22), "html", null, true);
            echo "</h3>
                    <h3 class=\"postalCode text-center\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "city", [], "any", false, false, false, 25)), "html", null, true);
            echo "
                        (";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "postalCode", [], "any", false, false, false, 26), "html", null, true);
            echo ")
                    </h3>
                    <p class=\"pt-3\">";
            // line 28
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 28)), 200))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 28), 0, 200) . "...")) : (twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 28))), "html", null, true);
            echo "</p>
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_jobs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"postuler btn btn-light text-center\">Modifier</a>
                    </div>
                    <h4 class=\"mt-2 text-center\">
                        <i class=\"fas fa-table\"></i>
                        Postée le :
                        ";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["job"], "registeredAt", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "registeredAt", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</h4>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <p class=\"alert alert-warning text-center bg-primary text-light\">Aucune offre d'emploi</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
        ";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 41, $this->source); })()));
        echo "

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "company/list_jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 41,  166 => 40,  159 => 38,  151 => 35,  143 => 30,  138 => 28,  133 => 26,  129 => 25,  123 => 22,  117 => 19,  111 => 16,  108 => 15,  103 => 14,  97 => 11,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_company.html.twig' %}

{% block title %}
    Offres - {{ parent() }}
{% endblock %}

{% block body %}
    <section class=\"adminOffre\">
        <h3 class=\"text-center pt-3 my-5\">Mes offres</h3>
        <div class=\"form-group pb-5 col pt-3 col-lg-6 col-md-12 mx-auto\">
            <a class=\"btn btn-primary btn-lg w-100\" href=\"{{ path('company_jobs_new') }}\">+ Ajouter une offre</a>
        </div>
        <div class=\"row d-flex justify-content-center\">
            {% for job in jobs %}
                <div class=\" col-lg-3 data-card mx-3\">
                    <h2 class=\"pb-2 text-center d-flex align-items-center justify-content-center\">{{ job.post|upper|length > 20 ? job.post|slice(0, 20) ~ '...' : job.post }}</h2>
                    <h3 class=\"post mt-2 text-center\">
                        <i class=\"fas fa-industry\"></i>
                        {{ job.company.companyName|upper|length > 20 ? job.company.companyName|slice(0, 20) ~ '...' : job.company.companyName }}</h3>
                    <h3 class=\"postalCode pb-2 text-center\">
                        <i class=\"fas fa-graduation-cap\"></i>
                        {{ job.studyField.studyFieldName }}</h3>
                    <h3 class=\"postalCode text-center\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        {{ job.city|capitalize }}
                        ({{ job.postalCode }})
                    </h3>
                    <p class=\"pt-3\">{{ job.description|length > 200 ? job.description|slice(0, 200) ~ '...' : job.description }}</p>
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"{{ path('company_jobs_edit', {'id': job.id}) }}\" class=\"postuler btn btn-light text-center\">Modifier</a>
                    </div>
                    <h4 class=\"mt-2 text-center\">
                        <i class=\"fas fa-table\"></i>
                        Postée le :
                        {{ job.registeredAt ? job.registeredAt|date('Y-m-d') : '' }}</h4>
                </div>
            {% else %}
                <p class=\"alert alert-warning text-center bg-primary text-light\">Aucune offre d'emploi</p>
            {% endfor %}
        </div>
        {{ knp_pagination_render(jobs) }}

    </section>
{% endblock %}
", "company/list_jobs.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/company/list_jobs.html.twig");
    }
}
