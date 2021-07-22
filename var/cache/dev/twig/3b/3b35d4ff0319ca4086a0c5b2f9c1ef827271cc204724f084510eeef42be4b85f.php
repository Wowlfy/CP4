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

/* component/_navbar.html.twig */
class __TwigTemplate_fe3a280c98134c9e5a99316ec6b3cc8107dbfa9876b7ec4567925361f10ff2a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar bg-light navbar-expand-md navbar-light fixed-top pb-2\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"navbar-logo mx-4 logo\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "        <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto text-center mx-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\">
                        bienvenue admin :
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
            echo "\">Lieux</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                        Deconnexion
                    </a>
                </li>
            </ul>
        </div>
    ";
        } else {
            // line 25
            echo "        <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto text-center mx-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offer");
            echo "\">Lieux</a>
                </li>
                <li class=\"nav-item ml-5\">
                    <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a>
                </li>
            </ul>
        </div>
    ";
        }
        // line 36
        echo "</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "component/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  94 => 31,  88 => 28,  83 => 25,  73 => 18,  67 => 15,  57 => 7,  55 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar bg-light navbar-expand-md navbar-light fixed-top pb-2\">
    <a href=\"{{ path('home') }}\"><img src=\"{{ asset('build/images/logo.png') }}\" alt=\"logo\" class=\"navbar-logo mx-4 logo\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto text-center mx-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\">
                        bienvenue admin :
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('offer') }}\">Lieux</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                        Deconnexion
                    </a>
                </li>
            </ul>
        </div>
    {% else %}
        <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto text-center mx-5\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('offer') }}\">Lieux</a>
                </li>
                <li class=\"nav-item ml-5\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                </li>
            </ul>
        </div>
    {% endif %}
</nav>
", "component/_navbar.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/component/_navbar.html.twig");
    }
}
