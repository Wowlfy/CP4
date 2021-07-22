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

/* home/price_list.html.twig */
class __TwigTemplate_366a41205de678458cb90a5f1866dfdd5c504ad93f80569cec751e38c96897a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/price_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/price_list.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/price_list.html.twig", 1);
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
        echo "    Tarifs -
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("adminJob");
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
        echo "    <section class=\"container-fluid adminOffre\">
        <div class=\"row d-flex justify-content-center mx-1\">
            <h3 class=\"text-center my-3\">Grille tarifaire</h3>
            <div class=\"row pb-3 d-flex justify-content-center\">
                <div class=\" col-lg-3 data-card\">
                    <h2 class=\"text-center d-flex align-items-center justify-content-center\">Poster une annonce</h2>
                    <h3 class=\"post text-center mb-5\">
                        120.00
                        <i class=\"fas fa-euro-sign\"></i>
                    </h3>
                    <p>Cette offre vous donne accès au fait de pouvoir poster 1 annonce. Ajoutez votre pierre à l'édifice en permettant aux étudiants de prendre connaissance de votre entreprise.</p>
                </div>
                <div class=\" col-lg-3 data-card\">
                    <h2 class=\"pb-2 text-center d-flex align-items-center justify-content-center\">Pack 10 annonces</h2>
                    <h3 class=\"post mt-2 text-center mb-5\">
                        800.00
                        <i class=\"fas fa-euro-sign\"></i>
                    </h3>
                    <p>Cette offre vous donne accès au fait de pouvoir poster 10 annonces en profitant d'une réduction générale du prix.</p>
                </div>
                <div class=\" col-lg-3 data-card\">
                    <h2 class=\"pb-2 text-center d-flex align-items-center justify-content-center\">Abonnement</h2>
                    <h3 class=\"post mt-2 text-center mb-5\">
                        650.00
                        <i class=\"fas fa-euro-sign\"></i>
                        par mois
                    </h3>
                    <p>Cette offre vous donne accès au fait de pouvoir poster un nombre illimité d'annonces sur notre site durant toute la durée effective de l'abonnement.</p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <h2 class=\"m-3 text-center mt-5\">Placement des étudiants dans les entreprises</h2>
            <div class=\"row mb-4 mb-lg-5\">
                <div class=\"col-5 mb-lg-3 align-self-center\">
                    <img class=\"d-none d-lg-block img-fluid rounded shadow-lg mb-3\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/contrat.jpg"), "html", null, true);
        echo "\" alt=\"Deux personnes assises l'une à côté de l'autre, devant une table avec des papiers à signer\">
                </div>
                <div class=\"col-lg-7 mb-lg-3 px-4\">
                    <ul class=\"list-unstyled price-list-text\">
                        <li class=\"pb-2\">Vous avez besoin d’un étudiant rapidement ?</li>
                        <li class=\"pb-1\">Student Intérim vous offre la possibilité de recruter rapidement des étudiants compétents dont le cursus d’étude est en cohérence avec votre entreprise. Avec cette offre, vous ne vous occupez de rien !</li>
                        <li class=\"pb-1\">Sourcing, entretien, contrats : on s’occupe de tout (missions ponctuelles, jobs d’été, temps partiels..) !</li>
                        <li class=\"pb-1\">Notre marge commerciale est de 2 000€, ajouté à cela, vous payerez un coefficient de facturation de 1,9% par rapport au salaire de l’étudiant.</li>
                    </ul>
                </div>
                ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMPANY")) {
            // line 60
            echo "                    <div class=\"d-flex justify-content-center\">
                        <a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_quotation");
            echo "\" class=\"postuler btn btn-primary text-center\">Je veux un devis</a>
                    </div>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "                    <div class=\"d-flex justify-content-center\">
                        <a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_quotation");
            echo "\" class=\"postuler btn btn-primary text-center\">Je veux un devis</a>
                    </div>
                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STUDENT")) {
            // line 68
            echo "                ";
        } else {
            // line 69
            echo "                    <div class=\"d-flex justify-content-center\">
                        <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"postuler btn btn-lg btn-primary text-center\">Je veux un devis</a>
                    </div>
                ";
        }
        // line 73
        echo "            </div>
            <h2 class=\"m-3 text-center\">Recruter le profil idéal pour votre entreprise</h2>
            <div class=\"row\">
                <div class=\"col-12 col-lg-7 mb-lg-3 px-5  d-flex align-items-center justify-content-center\">
                    <ul class=\"list-unstyled price-list-text\">
                        <li>Vous cherchez à recruter ? Premiers emplois, stages, alternances.</li>
                        <li>Student Interim sollicite son réseau d’étudiants pour vous ! Nous cherchons et trouvons des candidats qui correspondent à votre besoin.</li>
                        <li>Nous prenons de 12% à 15% du salaire annuel de l’étudiant recruté.</li>
                    </ul>
                </div>
                <div class=\"col-lg-5 align-self-center pb-2\">
                    <img class=\"d-none d-lg-block img-fluid rounded shadow-lg\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/recrutement.jpg"), "html", null, true);
        echo "\" alt=\"Trois personnes discutent autour d'une table\">
                </div>
            </div>
            <div class=\"d-flex justify-content-center pb-3 mt-5\">
                <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"postuler btn btn-lg btn-primary text-center\">Nous contacter</a>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/price_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 88,  217 => 84,  204 => 73,  198 => 70,  195 => 69,  192 => 68,  186 => 65,  183 => 64,  177 => 61,  174 => 60,  172 => 59,  159 => 49,  122 => 14,  112 => 13,  100 => 10,  95 => 9,  85 => 8,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}
    Tarifs -
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('adminJob') }}
{% endblock %}

{% block body %}
    <section class=\"container-fluid adminOffre\">
        <div class=\"row d-flex justify-content-center mx-1\">
            <h3 class=\"text-center my-3\">Grille tarifaire</h3>
            <div class=\"row pb-3 d-flex justify-content-center\">
                <div class=\" col-lg-3 data-card\">
                    <h2 class=\"text-center d-flex align-items-center justify-content-center\">Poster une annonce</h2>
                    <h3 class=\"post text-center mb-5\">
                        120.00
                        <i class=\"fas fa-euro-sign\"></i>
                    </h3>
                    <p>Cette offre vous donne accès au fait de pouvoir poster 1 annonce. Ajoutez votre pierre à l'édifice en permettant aux étudiants de prendre connaissance de votre entreprise.</p>
                </div>
                <div class=\" col-lg-3 data-card\">
                    <h2 class=\"pb-2 text-center d-flex align-items-center justify-content-center\">Pack 10 annonces</h2>
                    <h3 class=\"post mt-2 text-center mb-5\">
                        800.00
                        <i class=\"fas fa-euro-sign\"></i>
                    </h3>
                    <p>Cette offre vous donne accès au fait de pouvoir poster 10 annonces en profitant d'une réduction générale du prix.</p>
                </div>
                <div class=\" col-lg-3 data-card\">
                    <h2 class=\"pb-2 text-center d-flex align-items-center justify-content-center\">Abonnement</h2>
                    <h3 class=\"post mt-2 text-center mb-5\">
                        650.00
                        <i class=\"fas fa-euro-sign\"></i>
                        par mois
                    </h3>
                    <p>Cette offre vous donne accès au fait de pouvoir poster un nombre illimité d'annonces sur notre site durant toute la durée effective de l'abonnement.</p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <h2 class=\"m-3 text-center mt-5\">Placement des étudiants dans les entreprises</h2>
            <div class=\"row mb-4 mb-lg-5\">
                <div class=\"col-5 mb-lg-3 align-self-center\">
                    <img class=\"d-none d-lg-block img-fluid rounded shadow-lg mb-3\" src=\"{{ asset('build/images/contrat.jpg') }}\" alt=\"Deux personnes assises l'une à côté de l'autre, devant une table avec des papiers à signer\">
                </div>
                <div class=\"col-lg-7 mb-lg-3 px-4\">
                    <ul class=\"list-unstyled price-list-text\">
                        <li class=\"pb-2\">Vous avez besoin d’un étudiant rapidement ?</li>
                        <li class=\"pb-1\">Student Intérim vous offre la possibilité de recruter rapidement des étudiants compétents dont le cursus d’étude est en cohérence avec votre entreprise. Avec cette offre, vous ne vous occupez de rien !</li>
                        <li class=\"pb-1\">Sourcing, entretien, contrats : on s’occupe de tout (missions ponctuelles, jobs d’été, temps partiels..) !</li>
                        <li class=\"pb-1\">Notre marge commerciale est de 2 000€, ajouté à cela, vous payerez un coefficient de facturation de 1,9% par rapport au salaire de l’étudiant.</li>
                    </ul>
                </div>
                {% if is_granted('ROLE_COMPANY') %}
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"{{ path('company_quotation') }}\" class=\"postuler btn btn-primary text-center\">Je veux un devis</a>
                    </div>
                {% elseif is_granted('ROLE_ADMIN') %}
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"{{ path('company_quotation') }}\" class=\"postuler btn btn-primary text-center\">Je veux un devis</a>
                    </div>
                {% elseif is_granted('ROLE_STUDENT') %}
                {% else %}
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"{{ path('app_register') }}\" class=\"postuler btn btn-lg btn-primary text-center\">Je veux un devis</a>
                    </div>
                {% endif %}
            </div>
            <h2 class=\"m-3 text-center\">Recruter le profil idéal pour votre entreprise</h2>
            <div class=\"row\">
                <div class=\"col-12 col-lg-7 mb-lg-3 px-5  d-flex align-items-center justify-content-center\">
                    <ul class=\"list-unstyled price-list-text\">
                        <li>Vous cherchez à recruter ? Premiers emplois, stages, alternances.</li>
                        <li>Student Interim sollicite son réseau d’étudiants pour vous ! Nous cherchons et trouvons des candidats qui correspondent à votre besoin.</li>
                        <li>Nous prenons de 12% à 15% du salaire annuel de l’étudiant recruté.</li>
                    </ul>
                </div>
                <div class=\"col-lg-5 align-self-center pb-2\">
                    <img class=\"d-none d-lg-block img-fluid rounded shadow-lg\" src=\"{{ asset('build/images/recrutement.jpg') }}\" alt=\"Trois personnes discutent autour d'une table\">
                </div>
            </div>
            <div class=\"d-flex justify-content-center pb-3 mt-5\">
                <a href=\"{{ path('contact') }}\" class=\"postuler btn btn-lg btn-primary text-center\">Nous contacter</a>
            </div>
        </div>
    </section>
{% endblock %}
", "home/price_list.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/home/price_list.html.twig");
    }
}
