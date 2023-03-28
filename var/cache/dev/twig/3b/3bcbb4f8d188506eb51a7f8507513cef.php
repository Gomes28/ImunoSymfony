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

/* front/components/carrossel.html.twig */
class __TwigTemplate_d058abe3fd8a1c2ce1ee0c20c423b6d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/carrossel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/carrossel.html.twig"));

        // line 1
        echo "<div
        id=\"carouselExampleIndicators\"
        class=\"relative\"
        data-te-carousel-init
        data-te-carousel-slide>
    <div
            class=\"absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0\"
            data-te-carousel-indicators>
        <button
                type=\"button\"
                data-te-target=\"#carouselExampleIndicators\"
                data-te-slide-to=\"0\"
                data-te-carousel-active
                class=\"mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none\"
                aria-current=\"true\"
                aria-label=\"Slide 1\"></button>
        <button
                type=\"button\"
                data-te-target=\"#carouselExampleIndicators\"
                data-te-slide-to=\"1\"
                class=\"mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none\"
                aria-label=\"Slide 2\"></button>
        <button
                type=\"button\"
                data-te-target=\"#carouselExampleIndicators\"
                data-te-slide-to=\"2\"
                class=\"mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none\"
                aria-label=\"Slide 3\"></button>
    </div>
    <div
            class=\"relative w-full overflow-hidden after:clear-both after:block after:content-['']\">
        <div
                class=\"relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none\"
                data-te-carousel-item
                data-te-carousel-active>
            <img
                    src=\"https://mdbcdn.b-cdn.net/img/new/slides/041.webp\"
                    class=\"block w-full\"
                    alt=\"Wild Landscape\" />
        </div>
        <div
                class=\"relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none\"
                data-te-carousel-item>
            <img
                    src=\"https://mdbcdn.b-cdn.net/img/new/slides/042.webp\"
                    class=\"block w-full\"
                    alt=\"Camera\" />
        </div>
        <div
                class=\"relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none\"
                data-te-carousel-item>
            <img
                    src=\"https://mdbcdn.b-cdn.net/img/new/slides/043.webp\"
                    class=\"block w-full\"
                    alt=\"Exotic Fruits\" />
        </div>
    </div>
    <button
            class=\"absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none\"
            type=\"button\"
            data-te-target=\"#carouselExampleIndicators\"
            data-te-slide=\"prev\">
    <span class=\"inline-block h-8 w-8\">
      <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke-width=\"1.5\"
              stroke=\"currentColor\"
              class=\"h-6 w-6\">
        <path
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                d=\"M15.75 19.5L8.25 12l7.5-7.5\" />
      </svg>
    </span>
        <span
                class=\"!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]\"
        >Previous</span
        >
    </button>
    <button
            class=\"absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none\"
            type=\"button\"
            data-te-target=\"#carouselExampleIndicators\"
            data-te-slide=\"next\">
    <span class=\"inline-block h-8 w-8\">
      <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke-width=\"1.5\"
              stroke=\"currentColor\"
              class=\"h-6 w-6\">
        <path
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                d=\"M8.25 4.5l7.5 7.5-7.5 7.5\" />
      </svg>
    </span>
        <span
                class=\"!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]\"
        >Next</span
        >
    </button>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/components/carrossel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
        id=\"carouselExampleIndicators\"
        class=\"relative\"
        data-te-carousel-init
        data-te-carousel-slide>
    <div
            class=\"absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0\"
            data-te-carousel-indicators>
        <button
                type=\"button\"
                data-te-target=\"#carouselExampleIndicators\"
                data-te-slide-to=\"0\"
                data-te-carousel-active
                class=\"mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none\"
                aria-current=\"true\"
                aria-label=\"Slide 1\"></button>
        <button
                type=\"button\"
                data-te-target=\"#carouselExampleIndicators\"
                data-te-slide-to=\"1\"
                class=\"mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none\"
                aria-label=\"Slide 2\"></button>
        <button
                type=\"button\"
                data-te-target=\"#carouselExampleIndicators\"
                data-te-slide-to=\"2\"
                class=\"mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none\"
                aria-label=\"Slide 3\"></button>
    </div>
    <div
            class=\"relative w-full overflow-hidden after:clear-both after:block after:content-['']\">
        <div
                class=\"relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none\"
                data-te-carousel-item
                data-te-carousel-active>
            <img
                    src=\"https://mdbcdn.b-cdn.net/img/new/slides/041.webp\"
                    class=\"block w-full\"
                    alt=\"Wild Landscape\" />
        </div>
        <div
                class=\"relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none\"
                data-te-carousel-item>
            <img
                    src=\"https://mdbcdn.b-cdn.net/img/new/slides/042.webp\"
                    class=\"block w-full\"
                    alt=\"Camera\" />
        </div>
        <div
                class=\"relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none\"
                data-te-carousel-item>
            <img
                    src=\"https://mdbcdn.b-cdn.net/img/new/slides/043.webp\"
                    class=\"block w-full\"
                    alt=\"Exotic Fruits\" />
        </div>
    </div>
    <button
            class=\"absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none\"
            type=\"button\"
            data-te-target=\"#carouselExampleIndicators\"
            data-te-slide=\"prev\">
    <span class=\"inline-block h-8 w-8\">
      <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke-width=\"1.5\"
              stroke=\"currentColor\"
              class=\"h-6 w-6\">
        <path
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                d=\"M15.75 19.5L8.25 12l7.5-7.5\" />
      </svg>
    </span>
        <span
                class=\"!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]\"
        >Previous</span
        >
    </button>
    <button
            class=\"absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none\"
            type=\"button\"
            data-te-target=\"#carouselExampleIndicators\"
            data-te-slide=\"next\">
    <span class=\"inline-block h-8 w-8\">
      <svg
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 24 24\"
              stroke-width=\"1.5\"
              stroke=\"currentColor\"
              class=\"h-6 w-6\">
        <path
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                d=\"M8.25 4.5l7.5 7.5-7.5 7.5\" />
      </svg>
    </span>
        <span
                class=\"!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]\"
        >Next</span
        >
    </button>
</div>", "front/components/carrossel.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/components/carrossel.html.twig");
    }
}
