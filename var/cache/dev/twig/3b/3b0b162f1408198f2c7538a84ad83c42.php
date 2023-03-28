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

/* front/components/_categoryList.html.twig */
class __TwigTemplate_fe2b8385969e8aba2027fd92defed727 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/_categoryList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/_categoryList.html.twig"));

        // line 1
        echo "<div class=\"bg-gray-100\">
    <div class=\"mx-auto max-w-7xl px-4 sm:px-6 lg:px-8\">
        <div class=\"mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32\">
            <h2 class=\"text-2xl font-bold text-gray-900\">Categorias</h2>

            <div class=\"mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0\">

                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) || array_key_exists("categorys", $context) ? $context["categorys"] : (function () { throw new RuntimeError('Variable "categorys" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "                <div class=\"group relative\">
                    <div class=\"relative h-80 w-full mt-10 overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1\">
                        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categorys/" . twig_get_attribute($this->env, $this->source, $context["category"], "ImageFilename", [], "any", false, false, false, 11))), "html", null, true);
            echo "\" alt=\"Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.\" class=\"h-full w-full object-cover object-center\">
                    </div>
                    <h3 class=\"mt-6 text-sm text-gray-500\">
                        <a href=\"#\">
                            <span class=\"absolute inset-0\"></span>
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
                        </a>
                    </h3>
                    <p class=\"text-base font-semibold text-gray-900\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/components/_categoryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  74 => 19,  68 => 16,  60 => 11,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-gray-100\">
    <div class=\"mx-auto max-w-7xl px-4 sm:px-6 lg:px-8\">
        <div class=\"mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32\">
            <h2 class=\"text-2xl font-bold text-gray-900\">Categorias</h2>

            <div class=\"mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0\">

                {% for category in categorys %}
                <div class=\"group relative\">
                    <div class=\"relative h-80 w-full mt-10 overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1\">
                        <img src=\"{{ asset('uploads/categorys/' ~ category.ImageFilename) }}\" alt=\"Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.\" class=\"h-full w-full object-cover object-center\">
                    </div>
                    <h3 class=\"mt-6 text-sm text-gray-500\">
                        <a href=\"#\">
                            <span class=\"absolute inset-0\"></span>
                            {{ category.name }}
                        </a>
                    </h3>
                    <p class=\"text-base font-semibold text-gray-900\">{{ category.description }}</p>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "front/components/_categoryList.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/components/_categoryList.html.twig");
    }
}
