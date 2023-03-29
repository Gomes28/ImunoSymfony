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

/* admin/pages/school_vacin/new.html.twig */
class __TwigTemplate_7c91fb5188736e1a3c3b4d88adb927c3 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/school_vacin/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/school_vacin/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/pages/school_vacin/new.html.twig", 1);
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
        echo "    <div style=\"margin-left: 300px\">
        <h1 class=\"text-base font-semibold leading-7 text-gray-900 mt-3\">Criar Novo Produto</h1>
        <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>

        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SchoolForm"]) || array_key_exists("SchoolForm", $context) ? $context["SchoolForm"] : (function () { throw new RuntimeError('Variable "SchoolForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        <div class=\"grid grid-cols-2 md:grid-cols-2 gap-1 mt-10\">
            <div>
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SchoolForm"]) || array_key_exists("SchoolForm", $context) ? $context["SchoolForm"] : (function () { throw new RuntimeError('Variable "SchoolForm" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "block text-sm text-black-700 font-medium"], "label" => "Nome da escola"]);
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SchoolForm"]) || array_key_exists("SchoolForm", $context) ? $context["SchoolForm"] : (function () { throw new RuntimeError('Variable "SchoolForm" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "block w-11/12 shadow-sm border-black-300 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["SchoolForm"]) || array_key_exists("SchoolForm", $context) ? $context["SchoolForm"] : (function () { throw new RuntimeError('Variable "SchoolForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'errors');
        echo "
            </div>
        </div>

        <div>
            <button type=\"submit\"
                    class=\"block w-11/12 al-center shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Criar Produto</button>
        </div>

        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["SchoolForm"]) || array_key_exists("SchoolForm", $context) ? $context["SchoolForm"] : (function () { throw new RuntimeError('Variable "SchoolForm" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages/school_vacin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  88 => 13,  84 => 12,  80 => 11,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block content %}
    <div style=\"margin-left: 300px\">
        <h1 class=\"text-base font-semibold leading-7 text-gray-900 mt-3\">Criar Novo Produto</h1>
        <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>

        {{ form_start(SchoolForm) }}
        <div class=\"grid grid-cols-2 md:grid-cols-2 gap-1 mt-10\">
            <div>
                {{ form_label(SchoolForm.name, 'Nome da escola', {'label_attr': {'class': 'block text-sm text-black-700 font-medium'}}) }}
                {{ form_widget(SchoolForm.name, {'attr': {'class': 'block w-11/12 shadow-sm border-black-300 rounded-md border p-2 mt-1 mb-2'}})}}
                {{ form_errors(SchoolForm.name) }}
            </div>
        </div>

        <div>
            <button type=\"submit\"
                    class=\"block w-11/12 al-center shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Criar Produto</button>
        </div>

        {{ form_end(SchoolForm) }}
    </div>

{% endblock %}", "admin/pages/school_vacin/new.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/admin/pages/school_vacin/new.html.twig");
    }
}
