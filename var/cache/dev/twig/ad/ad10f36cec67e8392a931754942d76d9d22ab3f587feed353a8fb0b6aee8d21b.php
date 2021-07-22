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

/* component/_footer.html.twig */
class __TwigTemplate_6a0dcd018986275226b4e20379225f3c8797e6f2828f94109de60ee51a6b1aff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/_footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer
    class=\"bg-secondary text-center text-white\">
    <!-- Grid container -->
    <div
        class=\"container pt-3\">
        <!--Grid row-->
        <div
            class=\"row py-3\">
            <!--Grid column-->
            <div
                class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">

                <!-- Section: Social media -->
                <section
                    class=\"d-flex\"><!-- Instagram -->
                </section>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div
                class=\"col-lg-4 col-md-6 mb-4 mb-md-0 pt-2\">
                <!-- List: Links -->
                <ul class=\"list-unstyled mb-0\">
                    <li class=\"pb-2 d-flex flex-column\">
                        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"text-white text-decoration-none mx-2 foot-link\">Contact</a>
                        <a class=\"text-white text-decoration-none mx-2 foot-link\" href=\"https://www.instagram.com/undefeated.trips/\">Instagram</a>
                        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-white text-decoration-none mx-1 mt-1 foot-link\">Admin</a>
                    </li>
                </li>
            </ul>
            <!-- List: Links -->
        </div>
        <!--Grid column-->
        <!--Grid column-->
    </div>
</div></footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "component/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer
    class=\"bg-secondary text-center text-white\">
    <!-- Grid container -->
    <div
        class=\"container pt-3\">
        <!--Grid row-->
        <div
            class=\"row py-3\">
            <!--Grid column-->
            <div
                class=\"col-lg-4 col-md-6 mb-4 mb-md-0\">

                <!-- Section: Social media -->
                <section
                    class=\"d-flex\"><!-- Instagram -->
                </section>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div
                class=\"col-lg-4 col-md-6 mb-4 mb-md-0 pt-2\">
                <!-- List: Links -->
                <ul class=\"list-unstyled mb-0\">
                    <li class=\"pb-2 d-flex flex-column\">
                        <a href=\"{{ path('contact') }}\" class=\"text-white text-decoration-none mx-2 foot-link\">Contact</a>
                        <a class=\"text-white text-decoration-none mx-2 foot-link\" href=\"https://www.instagram.com/undefeated.trips/\">Instagram</a>
                        <a href=\"{{ path('app_login') }}\" class=\"text-white text-decoration-none mx-1 mt-1 foot-link\">Admin</a>
                    </li>
                </li>
            </ul>
            <!-- List: Links -->
        </div>
        <!--Grid column-->
        <!--Grid column-->
    </div>
</div></footer>
", "component/_footer.html.twig", "/Users/wowlfyy/wildcodeschool/checkpoint4/templates/component/_footer.html.twig");
    }
}
