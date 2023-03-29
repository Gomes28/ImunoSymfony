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

/* front/page/login/login.html.twig */
class __TwigTemplate_325dbc483863c8c30ddcdae75fee1335 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/page/login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/page/login/login.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/page/login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"flex flex-col md:flex-row h-screen items-center\">

        <div class=\"bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen\">
            <img src=\"https://s3-sa-east-1.amazonaws.com/doctoralia.com.br/doctor/6489d4/6489d42debbb5123f9b13b385bcb8acc_large.jpg\" alt=\"\" class=\"w-full h-full object-cover\">
        </div>

        <div class=\"bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center\">

            <div class=\"w-full h-100\">

                <h1 class=\"text-xl font-bold\">ImunoVacin Login</h1>
                <h1 class=\"text-xl md:text-2xl font-bold leading-tight mt-12\">Faça login na sua conta</h1>
                ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 20
        echo "                <form class=\"mt-6\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
        echo "\" method=\"post\">

                    <div>
                        <label class=\"block text-gray-700\">Email</label>
                        <input type=\"text\" name=\"_username\" id=\"username\" placeholder=\"Email\" class=\"w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none\" autofocus autocomplete required>
                    </div>

                    <div class=\"mt-4\">
                        <label class=\"block text-gray-700\">Senha</label>
                        <input type=\"password\" name=\"_password\" id=\"\"password placeholder=\"Senha\" minlength=\"6\" class=\"w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none\" required>
                    </div>

                    <button type=\"submit\" class=\"w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6\">Login</button>
                </form>

                <hr class=\"my-6 border-gray-300 w-full\">

                <p class=\"mt-8\">
                    Need an account?
                    <a href=\"/signup\" class=\"text-blue-500 hover:text-blue-700 font-semibold\">
                        Create an account
                    </a>
                </p>

                <p class=\"text-sm text-gray-500 mt-12\">&copy; 2023 ImunoVacin - Todos os direitos reservados.</p>
            </div>

        </div>

    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/page/login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  85 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block body %}
    <section class=\"flex flex-col md:flex-row h-screen items-center\">

        <div class=\"bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen\">
            <img src=\"https://s3-sa-east-1.amazonaws.com/doctoralia.com.br/doctor/6489d4/6489d42debbb5123f9b13b385bcb8acc_large.jpg\" alt=\"\" class=\"w-full h-full object-cover\">
        </div>

        <div class=\"bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center\">

            <div class=\"w-full h-100\">

                <h1 class=\"text-xl font-bold\">ImunoVacin Login</h1>
                <h1 class=\"text-xl md:text-2xl font-bold leading-tight mt-12\">Faça login na sua conta</h1>
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <form class=\"mt-6\" action=\"{{ path('app_user_login') }}\" method=\"post\">

                    <div>
                        <label class=\"block text-gray-700\">Email</label>
                        <input type=\"text\" name=\"_username\" id=\"username\" placeholder=\"Email\" class=\"w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none\" autofocus autocomplete required>
                    </div>

                    <div class=\"mt-4\">
                        <label class=\"block text-gray-700\">Senha</label>
                        <input type=\"password\" name=\"_password\" id=\"\"password placeholder=\"Senha\" minlength=\"6\" class=\"w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none\" required>
                    </div>

                    <button type=\"submit\" class=\"w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6\">Login</button>
                </form>

                <hr class=\"my-6 border-gray-300 w-full\">

                <p class=\"mt-8\">
                    Need an account?
                    <a href=\"/signup\" class=\"text-blue-500 hover:text-blue-700 font-semibold\">
                        Create an account
                    </a>
                </p>

                <p class=\"text-sm text-gray-500 mt-12\">&copy; 2023 ImunoVacin - Todos os direitos reservados.</p>
            </div>

        </div>

    </section>
{% endblock %}", "front/page/login/login.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/page/login/login.html.twig");
    }
}
