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

/* front/components/_teamSection.html.twig */
class __TwigTemplate_2eb83be485cc334c01ac555478c0d9c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/_teamSection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/_teamSection.html.twig"));

        // line 1
        echo "<div class=\"bg-white py-24 sm:py-32\">
    <div class=\"mx-auto grid max-w-7xl gap-y-20 gap-x-8 px-6 lg:px-8 xl:grid-cols-3\">
        <div class=\"max-w-2xl\">
            <h2 class=\"text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl\">Nossa Equipe</h2>
            <p class=\"mt-6 text-lg leading-8 text-gray-600\">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
        </div>
        <ul role=\"list\" class=\"grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2\">
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Fernanda-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Fernanda Gomes</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Diretora Técnica</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Marina-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Marina Girotto</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Diretora Administrativa</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Antonio-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Antonio Carlos Girotto</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Médico Responsavel</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Barbara-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Bárbara Leal</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Enfermeira</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Lucicleide-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Lucileide</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Equipe de Enfermagem</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Lohaine-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Lohaine</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Equipe de Enfermagem</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Natalia-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Natália</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Secretaria</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Cleia-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Cléia</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Nossa \"Mãezona\"</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/components/_teamSection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-white py-24 sm:py-32\">
    <div class=\"mx-auto grid max-w-7xl gap-y-20 gap-x-8 px-6 lg:px-8 xl:grid-cols-3\">
        <div class=\"max-w-2xl\">
            <h2 class=\"text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl\">Nossa Equipe</h2>
            <p class=\"mt-6 text-lg leading-8 text-gray-600\">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
        </div>
        <ul role=\"list\" class=\"grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2\">
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Fernanda-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Fernanda Gomes</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Diretora Técnica</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Marina-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Marina Girotto</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Diretora Administrativa</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Antonio-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Antonio Carlos Girotto</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Médico Responsavel</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Barbara-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Bárbara Leal</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Enfermeira</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Lucicleide-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Lucileide</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Equipe de Enfermagem</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Lohaine-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Lohaine</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Equipe de Enfermagem</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Natalia-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Natália</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Secretaria</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"flex items-center gap-x-6\">
                    <img class=\"h-16 w-16 rounded-full\" src=\"https://imunovacin.com.br/wp-content/uploads/2022/02/Indaiatuba_Clinica_Infantil_Vacinas_Cleia-150x150.png\" alt=\"\">
                    <div>
                        <h3 class=\"text-base font-semibold leading-7 tracking-tight text-gray-900\">Cléia</h3>
                        <p class=\"text-sm font-semibold leading-6 text-indigo-600\">Nossa \"Mãezona\"</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>", "front/components/_teamSection.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/components/_teamSection.html.twig");
    }
}
