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

/* front/components/services.html.twig */
class __TwigTemplate_bcee4383c5d535741d81b4d8d0f6e3c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/components/services.html.twig"));

        // line 1
        echo "<div class=\"container lg mx-auto\">
    <div class=\"grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 pb-8 items-center\">
        <div>
            <h6 class=\"text-orange-600 text-base font-medium uppercase mb-2\">What We Do ?</h6>
            <h3 class=\"mb-4 md:text-2xl text-xl font-semibold dark:text-white md:mb-0\">Perfect Solution For Your <br> Business</h3>
        </div>

        <div>
            <p class=\"text-slate-400 dark:text-slate-300 max-w-xl\">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
        </div>
    </div><!--end grid-->

    <div class=\"grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6\">
        <div class=\"features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-adjust-circle\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Grow Your Business</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-circuit\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Drive More Sales</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-fire\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Handled By Expert</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-flower\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Discussion For Idea</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-shopping-basket\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Increase Conversion</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-flip-h\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Sales Growth Idea</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>
    </div><!--end grid-->
</div><!--end container-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/components/services.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container lg mx-auto\">
    <div class=\"grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 pb-8 items-center\">
        <div>
            <h6 class=\"text-orange-600 text-base font-medium uppercase mb-2\">What We Do ?</h6>
            <h3 class=\"mb-4 md:text-2xl text-xl font-semibold dark:text-white md:mb-0\">Perfect Solution For Your <br> Business</h3>
        </div>

        <div>
            <p class=\"text-slate-400 dark:text-slate-300 max-w-xl\">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
        </div>
    </div><!--end grid-->

    <div class=\"grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6\">
        <div class=\"features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-adjust-circle\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Grow Your Business</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-circuit\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Drive More Sales</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-fire\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Handled By Expert</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-flower\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Discussion For Idea</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 hover:shadow-xl hover:shadow-slate-100 dark:hover:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-shopping-basket\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Increase Conversion</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"features p-6 shadow-xl shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-3xl mt-8\">
            <div class=\"w-20 h-20 bg-orange-600/5 text-orange-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm\">
                <i class=\"uil uil-flip-h\"></i>
            </div>

            <div class=\"content mt-7\">
                <a href=\"\" class=\"text-lg hover:text-orange-600 dark:text-white dark:hover:text-orange-600 transition-all duration-500 ease-in-out font-medium\">Sales Growth Idea</a>
                <p class=\"text-slate-400 mt-3\">The phrasal sequence of the is now so that many campaign and benefit</p>

                <div class=\"mt-5\">
                    <a href=\"\" class=\"btn btn-link hover:text-orange-600 dark:hover:text-orange-600 after:bg-orange-600 dark:text-white transition duration-500\">Read More <i class=\"uil uil-arrow-right\"></i></a>
                </div>
            </div>
        </div>
    </div><!--end grid-->
</div><!--end container-->", "front/components/services.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/components/services.html.twig");
    }
}
