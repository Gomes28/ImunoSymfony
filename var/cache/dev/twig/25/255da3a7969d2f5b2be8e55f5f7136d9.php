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

/* front/registration/register.html.twig */
class __TwigTemplate_60287737d96861adbf753420c2ff7c53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/registration/register.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " <div style=\"margin-left: 30px; margin-right: 30px; margin-top: 20px\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
    <div class=\"text-xl font-bold\">
    Ainda não possui uma conta?
    </div>
    <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
        Vamos criar agora!
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "block text-sm text-gray-900 dark:text-gray-900 font-medium"], "label" => "Nome"]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'errors');
        echo "
        </div>
        <div>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "block text-sm text-gray-900 dark:text-gray-900 font-medium"], "label" => "Email"]);
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'errors');
        echo "
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "cpf", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "block text-sm text-gray-900 dark:text-gray-900 font-medium"], "label" => "Cpf"]);
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "cpf", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2", "data-inputmask" => "'mask': '999.999.999-99'"]]);
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "cpf", [], "any", false, false, false, 30), 'errors');
        echo "
        </div>
        <div>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "telefone", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "block text-sm text-gray-900 dark:text-gray-900 font-medium"], "label" => "Telefone"]);
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "telefone", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2", "data-inputmask" => "'mask': '(99) 99999-9999'"]]);
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "telefone", [], "any", false, false, false, 35), 'errors');
        echo "
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "block text-sm text-gray-900 dark:text-gray-900 font-medium"], "label" => "Senha"]);
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), "first", [], "any", false, false, false, 43), 'errors');
        echo "
        </div>
        <div>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), "second", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "block text-sm text-gray-900 dark:text-gray-900 font-medium"], "label" => "Confirmar senha"]);
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'errors');
        echo "
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div class=\"flex items-center mt-4 mb-4\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "agreeTerms", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray border text-indigo-300 mr-2"]]);
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "agreeTerms", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "text-sm text-gray-700 dark:text-gray-300 font-medium"], "label" => "Aceite os Termos"]);
        echo "
    </div>

     <div class=\"flex items-center mt-4 mb-4 justify-end\">
         <button type=\"submit\"
                 class=\"block w-9/12 shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Criar Conta</button>
     </div>
    </div>

    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), 'form_end');
        echo "

    <div class=\"mt-4 text-center text-gray-600 dark:text-gray-400\">
        Já possui uma conta? <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_login");
        echo "\">Faça Login</a>
    </div>
 </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$(\":input\").inputmask();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  193 => 64,  181 => 55,  177 => 54,  168 => 48,  164 => 47,  160 => 46,  154 => 43,  150 => 42,  146 => 41,  137 => 35,  133 => 34,  129 => 33,  123 => 30,  119 => 29,  115 => 28,  106 => 22,  102 => 21,  98 => 20,  92 => 17,  88 => 16,  84 => 15,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block content %}
 <div style=\"margin-left: 30px; margin-right: 30px; margin-top: 20px\">
    {{ form_start(registrationForm) }}
    <div class=\"text-xl font-bold\">
    Ainda não possui uma conta?
    </div>
    <div class=\"text-gray-500 mb-4 pb-4 border-b border-gray-300\">
        Vamos criar agora!
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            {{ form_label(registrationForm.name, 'Nome', {'label_attr': {'class': 'block text-sm text-gray-900 dark:text-gray-900 font-medium'}}) }}
            {{ form_widget(registrationForm.name, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}})}}
            {{ form_errors(registrationForm.name) }}
        </div>
        <div>
            {{ form_label(registrationForm.email, 'Email', {'label_attr': {'class': 'block text-sm text-gray-900 dark:text-gray-900 font-medium'}}) }}
            {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}})}}
            {{ form_errors(registrationForm.email) }}
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            {{ form_label(registrationForm.cpf, 'Cpf', {'label_attr': {'class': 'block text-sm text-gray-900 dark:text-gray-900 font-medium'}}) }}
            {{ form_widget(registrationForm.cpf, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2', 'data-inputmask': \"'mask': '999.999.999-99'\"}})}}
            {{ form_errors(registrationForm.cpf) }}
        </div>
        <div>
            {{ form_label(registrationForm.telefone, 'Telefone', {'label_attr': {'class': 'block text-sm text-gray-900 dark:text-gray-900 font-medium'}}) }}
            {{ form_widget(registrationForm.telefone, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2', 'data-inputmask': \"'mask': '(99) 99999-9999'\"}})}}
            {{ form_errors(registrationForm.telefone) }}
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
        <div>
            {{ form_label(registrationForm.plainPassword.first, 'Senha', {'label_attr': {'class': 'block text-sm text-gray-900 dark:text-gray-900 font-medium'}}) }}
            {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}})}}
            {{ form_errors(registrationForm.plainPassword.first) }}
        </div>
        <div>
            {{ form_label(registrationForm.plainPassword.second, 'Confirmar senha', {'label_attr': {'class': 'block text-sm text-gray-900 dark:text-gray-900 font-medium'}}) }}
            {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'block w-full shadow-sm border-gray-300 dark:border-gray-200 dark:text-gray-800 rounded-md border p-2 mt-1 mb-2'}})}}
            {{ form_errors(registrationForm.plainPassword.second) }}
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
    <div class=\"flex items-center mt-4 mb-4\">
        {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'h-4 w-4 rounded border-gray border text-indigo-300 mr-2'}}) }}
        {{ form_label(registrationForm.agreeTerms, 'Aceite os Termos', {'label_attr': {'class': 'text-sm text-gray-700 dark:text-gray-300 font-medium'}}) }}
    </div>

     <div class=\"flex items-center mt-4 mb-4 justify-end\">
         <button type=\"submit\"
                 class=\"block w-9/12 shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Criar Conta</button>
     </div>
    </div>

    {{ form_end(registrationForm) }}

    <div class=\"mt-4 text-center text-gray-600 dark:text-gray-400\">
        Já possui uma conta? <a href=\"{{ path('app_user_login') }}\">Faça Login</a>
    </div>
 </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$(\":input\").inputmask();
        });
    </script>
{% endblock %}", "front/registration/register.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/registration/register.html.twig");
    }
}
