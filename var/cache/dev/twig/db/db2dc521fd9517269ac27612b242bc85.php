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

/* front/components/feedback.html.twig */
class __TwigTemplate_095c7125e787446f0dd12d0a0f2ab894 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/feedback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/feedback.html.twig"));

        // line 1
        echo "<div class=\"absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20\"></div>
<div class=\"absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center\"></div>
<div class=\"mx-auto max-w-2xl lg:max-w-4xl\">
    <img class=\"mx-auto h-12\" src=\"https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg\" alt=\"\">
    <figure class=\"mt-10\">
        <blockquote class=\"text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9\">
            <p>“Excelente! Fomos super bem atendidos. Meu filho teve toda atenção, cuidado e no final ganhou um presentinho. Profissionais super qualificados. Parabéns Fernanda e toda equipe da ImunoVacin. Obrigada!”</p>
        </blockquote>
        <figcaption class=\"mt-10\">
            <img class=\"mx-auto h-10 w-10 rounded-full\" src=\"https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80\" alt=\"\">
            <div class=\"mt-4 flex items-center justify-center space-x-3 text-base\">
                <div class=\"font-semibold text-gray-900\">Daniela Fernandes</div>
                <svg viewBox=\"0 0 2 2\" width=\"3\" height=\"3\" aria-hidden=\"true\" class=\"fill-gray-900\">
                    <circle cx=\"1\" cy=\"1\" r=\"1\" />
                </svg>
                <div class=\"text-gray-600\">CEO of Workcation</div>
            </div>
        </figcaption>
    </figure>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/components/feedback.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20\"></div>
<div class=\"absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center\"></div>
<div class=\"mx-auto max-w-2xl lg:max-w-4xl\">
    <img class=\"mx-auto h-12\" src=\"https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg\" alt=\"\">
    <figure class=\"mt-10\">
        <blockquote class=\"text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9\">
            <p>“Excelente! Fomos super bem atendidos. Meu filho teve toda atenção, cuidado e no final ganhou um presentinho. Profissionais super qualificados. Parabéns Fernanda e toda equipe da ImunoVacin. Obrigada!”</p>
        </blockquote>
        <figcaption class=\"mt-10\">
            <img class=\"mx-auto h-10 w-10 rounded-full\" src=\"https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80\" alt=\"\">
            <div class=\"mt-4 flex items-center justify-center space-x-3 text-base\">
                <div class=\"font-semibold text-gray-900\">Daniela Fernandes</div>
                <svg viewBox=\"0 0 2 2\" width=\"3\" height=\"3\" aria-hidden=\"true\" class=\"fill-gray-900\">
                    <circle cx=\"1\" cy=\"1\" r=\"1\" />
                </svg>
                <div class=\"text-gray-600\">CEO of Workcation</div>
            </div>
        </figcaption>
    </figure>
</div>", "front/components/feedback.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/components/feedback.html.twig");
    }
}
