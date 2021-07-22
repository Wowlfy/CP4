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

/* offer/index.html.twig */
class __TwigTemplate_cef38b8ba6b0c3278182cd2fd49aa0b4c4aff51f0c456566a14086866a14f5bb extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offer/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "offer/index.html.twig", 1);
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

        echo "Offres -
    ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminJob");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <section class=\"container-fluid adminOffre\">

        <h3 class=\"text-light text-center pt-3 pb-3\">Lieux</h3>
        <div class=\"container\">
            <div class=\"d-flex mb-1 justify-content-center\">
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "text-center"]]);
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "studyField", [], "any", false, false, false, 19), 'label');
        echo "
                <div class=\"d-flex mb-1 justify-content-center\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "studyField", [], "any", false, false, false, 21), 'widget');
        echo "
                    <button class=\"filter btn btn-primary btn-lg mx-1\">Rechercher</button>
                </div>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
            </div>
            ";
        // line 26
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 26, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 26), 1))) {
            // line 27
            echo "                <h5 class=\"text-center\">Page :
                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 28, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
            ";
        }
        // line 30
        echo "        </div>
        <div class=\"row pb-3 d-flex justify-content-center mx-1\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 33
            echo "                 <div class=\" col-xl-3 col-lg-6 data-card my-2\">
                    <h2 class=\"postname text-center d-flex align-items-center justify-content-center\">";
            // line 34
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "post", [], "any", false, false, false, 34))), 20))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "post", [], "any", false, false, false, 34), 0, 20) . "...")) : (twig_get_attribute($this->env, $this->source, $context["job"], "post", [], "any", false, false, false, 34))), "html", null, true);
            echo "</h2>
                    <h3 class=\"post text-center\">
                        <i class=\"fas fa-industry\"></i>
                        ";
            // line 37
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 37), "companyName", [], "any", false, false, false, 37))), 20))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 37), "companyName", [], "any", false, false, false, 37), 0, 20) . "...")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 37), "companyName", [], "any", false, false, false, 37))), "html", null, true);
            echo "</h3>
                    <h3 class=\"studyField text-center\">
                        <i class=\"fas fa-graduation-cap\"></i>
                        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["job"], "studyField", [], "any", false, false, false, 40), "studyFieldName", [], "any", false, false, false, 40), "html", null, true);
            echo "</h3>

                    <h3 class=\"postalCode\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        ";
            // line 44
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "city", [], "any", false, false, false, 44)), "html", null, true);
            echo "
                        (";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "postalCode", [], "any", false, false, false, 45), "html", null, true);
            echo ")
                    </h3>
                    <p class=\"pt-3\">";
            // line 47
            echo twig_escape_filter($this->env, (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 47)), 250))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 47), 0, 250) . "...")) : (twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 47))), "html", null, true);
            echo "</p>
                    
                    ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "                        <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_job_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Êtes-vous sûr vouloir supprimer cet élément ?');\" class=\"post mt-2 text-center\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 51))), "html", null, true);
                echo "\">
                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_job_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"update btn btn-light\">Modifier</a>
                            <button class=\"delete btn\">Supprimer</button>
                        </form>
                    ";
            } else {
                // line 56
                echo "                        <div class=\"d-flex justify-content-center\">
                            ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer_show", ["id" => twig_get_attribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\" class=\"postuler btn btn-light mt-2 text-center\">+ Voir plus</a>
                            ";
                } else {
                    // line 60
                    echo "                                <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                    echo "\" class=\"postuler btn btn-light text-center\">+ Voir plus</a>
                            ";
                }
                // line 62
                echo "                        </div>
                    ";
            }
            // line 64
            echo "                    <h4 class=\"mt-2 text-center\">
                        <i class=\"fas fa-table\"></i>
                        Postée le :
                        ";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["job"], "registeredAt", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "registeredAt", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</h4>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                <p class=\"alert alert-warning text-center bg-primary text-light\">Aucun post</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
        ";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 73, $this->source); })()));
        echo "
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "offer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 73,  262 => 72,  255 => 70,  247 => 67,  242 => 64,  238 => 62,  232 => 60,  226 => 58,  224 => 57,  221 => 56,  214 => 52,  210 => 51,  205 => 50,  203 => 49,  198 => 47,  193 => 45,  189 => 44,  182 => 40,  176 => 37,  170 => 34,  167 => 33,  162 => 32,  158 => 30,  153 => 28,  150 => 27,  148 => 26,  143 => 24,  137 => 21,  132 => 19,  128 => 18,  121 => 13,  111 => 12,  99 => 9,  94 => 8,  84 => 7,  72 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Offres -
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('adminJob') }}
{% endblock %}

{% block body %}
    <section class=\"container-fluid adminOffre\">

        <h3 class=\"text-light text-center pt-3 pb-3\">Lieux</h3>
        <div class=\"container\">
            <div class=\"d-flex mb-1 justify-content-center\">
                {{ form_start(form, {'attr': {'class': 'text-center'}}) }}
                {{ form_label(form.studyField) }}
                <div class=\"d-flex mb-1 justify-content-center\">
                    {{ form_widget(form.studyField) }}
                    <button class=\"filter btn btn-primary btn-lg mx-1\">Rechercher</button>
                </div>
                {{ form_end(form) }}
            </div>
            {% if jobs.currentPageNumber > 1 %}
                <h5 class=\"text-center\">Page :
                    {{ jobs.currentPageNumber }}</h5>
            {% endif %}
        </div>
        <div class=\"row pb-3 d-flex justify-content-center mx-1\">
            {% for job in jobs %}
                 <div class=\" col-xl-3 col-lg-6 data-card my-2\">
                    <h2 class=\"postname text-center d-flex align-items-center justify-content-center\">{{ job.post|upper|length > 20 ? job.post|slice(0, 20) ~ '...' : job.post }}</h2>
                    <h3 class=\"post text-center\">
                        <i class=\"fas fa-industry\"></i>
                        {{ job.company.companyName|upper|length > 20 ? job.company.companyName|slice(0, 20) ~ '...' : job.company.companyName }}</h3>
                    <h3 class=\"studyField text-center\">
                        <i class=\"fas fa-graduation-cap\"></i>
                        {{ job.studyField.studyFieldName }}</h3>

                    <h3 class=\"postalCode\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                        {{ job.city|capitalize }}
                        ({{ job.postalCode }})
                    </h3>
                    <p class=\"pt-3\">{{ job.description|length > 250 ? job.description|slice(0, 250) ~ '...' : job.description }}</p>
                    
                    {% if is_granted('ROLE_ADMIN') %}
                        <form method=\"post\" action=\"{{ path('admin_job_delete', {'id': job.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr vouloir supprimer cet élément ?');\" class=\"post mt-2 text-center\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ job.id) }}\">
                            <a href=\"{{ path('admin_job_edit', {'id': job.id}) }}\" class=\"update btn btn-light\">Modifier</a>
                            <button class=\"delete btn\">Supprimer</button>
                        </form>
                    {% else %}
                        <div class=\"d-flex justify-content-center\">
                            {% if app.user %}
                                <a href=\"{{ path('offer_show', {'id': job.id}) }}\" class=\"postuler btn btn-light mt-2 text-center\">+ Voir plus</a>
                            {% else %}
                                <a href=\"{{ path('app_register') }}\" class=\"postuler btn btn-light text-center\">+ Voir plus</a>
                            {% endif %}
                        </div>
                    {% endif %}
                    <h4 class=\"mt-2 text-center\">
                        <i class=\"fas fa-table\"></i>
                        Postée le :
                        {{ job.registeredAt ? job.registeredAt|date('Y-m-d') : '' }}</h4>
                </div>
            {% else %}
                <p class=\"alert alert-warning text-center bg-primary text-light\">Aucun post</p>
            {% endfor %}
        </div>
        {{ knp_pagination_render(jobs) }}
    </section>
{% endblock %}
", "offer/index.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/offer/index.html.twig");
    }
}
