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

/* admin/companies_list.html.twig */
class __TwigTemplate_c2cbe3079aff236ca685ed392a91a4cdaf7cf47e0054caeadbd4ca1adf58523d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/companies_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/companies_list.html.twig"));

        $this->parent = $this->loadTemplate("layout_admin.html.twig", "admin/companies_list.html.twig", 1);
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
        echo "    Entreprises - ";
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
        <div class=\"container\">
            <h3 class=\"text-center pt-3 pb-3\">Liste des comptes Entreprises</h3>
            <div class=\"my-3 d-flex justify-content-center\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                <div class=\"d-flex\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "searchQuery", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    <button type\"submit\" class=\"btn btn-primary mx-1\">Rechercher</button>
                </div>
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
            </div>
            ";
        // line 19
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 19, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 19), 1))) {
            // line 20
            echo "                    <h5 class=\"text-center\">Page :
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 21, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
            ";
        }
        // line 23
        echo "            <div class=\"row d-flex justify-content-center\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 25
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["company"], "user", [], "any", false, false, false, 25))) {
                // line 26
                echo "                        <div class=\" col-lg-3 data-card text-center\">

                            <h2 class=\"pb-2 d-flex align-items-center justify-content-center\">";
                // line 28
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 28)), "html", null, true);
                echo "</h2>

                            <h3 class=\"mt-2\">
                                <i class=\"fas fa-university\"></i>
                                ";
                // line 32
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "socialReason", [], "any", false, false, false, 32)), "html", null, true);
                echo "</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-user-alt\"></i>
                                ";
                // line 35
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "user", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35) . " ") . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "user", [], "any", false, false, false, 35), "lastname", [], "any", false, false, false, 35))), "html", null, true);
                echo "</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-phone-square-alt\"></i>
                                ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "user", [], "any", false, false, false, 38), "phone", [], "any", false, false, false, 38), "html", null, true);
                echo "</h3>
                            <h4 class=\"mb-1\">
                                <i class=\"fas fa-envelope\"></i>
                                ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["company"], "user", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41), "html", null, true);
                echo "</h4>
                            <h4 class=\"mb-3\">Siret :
                                ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "siret", [], "any", false, false, false, 43), "html", null, true);
                echo "</h4>
                            <form method=\"post\" action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_company", ["id" => twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Êtes-vous sûr vouloir supprimer cet élément');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteCompany" . twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 45))), "html", null, true);
                echo "\">
                                <button class=\"delete btn\">Supprimer</button>
                            </form>
                        </div>
                    ";
            }
            // line 50
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                    <p class=\"alert alert-warning text-center bg-primary text-light\">Aucun compte Entreprise</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
        </div>
        ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 55, $this->source); })()));
        echo "
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/companies_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 55,  197 => 53,  190 => 51,  185 => 50,  177 => 45,  173 => 44,  169 => 43,  164 => 41,  158 => 38,  152 => 35,  146 => 32,  139 => 28,  135 => 26,  132 => 25,  127 => 24,  124 => 23,  119 => 21,  116 => 20,  114 => 19,  109 => 17,  103 => 14,  98 => 12,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout_admin.html.twig' %}

{% block title %}
    Entreprises - {{ parent() }}
{% endblock %}

{% block body %}
    <section class=\"adminOffre\">
        <div class=\"container\">
            <h3 class=\"text-center pt-3 pb-3\">Liste des comptes Entreprises</h3>
            <div class=\"my-3 d-flex justify-content-center\">
                {{ form_start(form) }}
                <div class=\"d-flex\">
                    {{ form_row(form.searchQuery, {'attr': {'class': 'form-control'}}) }}
                    <button type\"submit\" class=\"btn btn-primary mx-1\">Rechercher</button>
                </div>
                {{ form_end(form) }}
            </div>
            {% if companies.currentPageNumber > 1 %}
                    <h5 class=\"text-center\">Page :
                        {{ companies.currentPageNumber }}</h5>
            {% endif %}
            <div class=\"row d-flex justify-content-center\">
                {% for company in companies %}
                    {% if company.user is not null %}
                        <div class=\" col-lg-3 data-card text-center\">

                            <h2 class=\"pb-2 d-flex align-items-center justify-content-center\">{{ company.companyName|upper }}</h2>

                            <h3 class=\"mt-2\">
                                <i class=\"fas fa-university\"></i>
                                {{ company.socialReason|upper }}</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-user-alt\"></i>
                                {{ company.user.firstname ~ ' ' ~ company.user.lastname|upper }}</h3>
                            <h3 class=\"mb-3\">
                                <i class=\"fas fa-phone-square-alt\"></i>
                                {{ company.user.phone }}</h3>
                            <h4 class=\"mb-1\">
                                <i class=\"fas fa-envelope\"></i>
                                {{ company.user.email }}</h4>
                            <h4 class=\"mb-3\">Siret :
                                {{ company.siret }}</h4>
                            <form method=\"post\" action=\"{{ path('admin_delete_company', {'id': company.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr vouloir supprimer cet élément');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('deleteCompany' ~ company.id) }}\">
                                <button class=\"delete btn\">Supprimer</button>
                            </form>
                        </div>
                    {% endif %}
                {% else %}
                    <p class=\"alert alert-warning text-center bg-primary text-light\">Aucun compte Entreprise</p>
                {% endfor %}
            </div>
        </div>
        {{ knp_pagination_render(companies) }}
    </section>
{% endblock %}
", "admin/companies_list.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/admin/companies_list.html.twig");
    }
}
