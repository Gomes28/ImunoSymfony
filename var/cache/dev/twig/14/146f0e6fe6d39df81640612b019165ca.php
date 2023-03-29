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

/* front/components/empresas.html.twig */
class __TwigTemplate_52936c9fd1025a6a0bfb4fd1746b35e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/empresas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/empresas.html.twig"));

        // line 1
        echo "<div class=\"bg-white py-24 sm:py-32\">
    <div class=\"mx-auto max-w-7xl px-6 lg:px-8\">
        <h2 class=\"text-center text-lg font-semibold leading-8 text-gray-900\">Trusted by the world’s most innovative teams</h2>
        <div class=\"mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5\">
            <img class=\"col-span-2 max-h-12 w-full object-contain lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg\" alt=\"Transistor\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 max-h-12 w-full object-contain lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg\" alt=\"Reform\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 max-h-12 w-full object-contain lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg\" alt=\"Tuple\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg\" alt=\"SavvyCal\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg\" alt=\"Statamic\" width=\"158\" height=\"48\">
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/components/empresas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-white py-24 sm:py-32\">
    <div class=\"mx-auto max-w-7xl px-6 lg:px-8\">
        <h2 class=\"text-center text-lg font-semibold leading-8 text-gray-900\">Trusted by the world’s most innovative teams</h2>
        <div class=\"mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5\">
            <img class=\"col-span-2 max-h-12 w-full object-contain lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg\" alt=\"Transistor\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 max-h-12 w-full object-contain lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg\" alt=\"Reform\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 max-h-12 w-full object-contain lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg\" alt=\"Tuple\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg\" alt=\"SavvyCal\" width=\"158\" height=\"48\">
            <img class=\"col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1\" src=\"https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg\" alt=\"Statamic\" width=\"158\" height=\"48\">
        </div>
    </div>
</div>", "front/components/empresas.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/components/empresas.html.twig");
    }
}
