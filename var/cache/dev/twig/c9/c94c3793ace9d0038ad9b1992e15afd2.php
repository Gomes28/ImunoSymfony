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

/* admin/pages/banner/new.html.twig */
class __TwigTemplate_99f167b9202f613408845540ab16d9a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/banner/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/banner/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/pages/banner/new.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        <div class=\"grid grid-cols-2 md:grid-cols-2 gap-1 mt-10\">
            <div>
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "block text-sm text-black-700 font-medium"], "label" => "Titulo"]);
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "block w-11/12 shadow-sm border-black-300 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'errors');
        echo "
            </div>
        </div>

        <div class=\"grid grid-cols-2 md:grid-cols-2 gap-1 mt-10\">
            <div>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 19, $this->source); })()), "imageFile", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "block text-sm text-black-700 font-medium"], "label" => "Imagem"]);
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 20, $this->source); })()), "imageFile", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "block w-11/12 shadow-sm border-black-300 rounded-md border p-2 mt-1 mb-2"]]);
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 21, $this->source); })()), "imageFile", [], "any", false, false, false, 21), 'errors');
        echo "
            </div>
        </div>

        <div>
            <button type=\"submit\"
                    class=\"block w-11/12 al-center shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Criar Produto</button>
        </div>

        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["BannerForm"]) || array_key_exists("BannerForm", $context) ? $context["BannerForm"] : (function () { throw new RuntimeError('Variable "BannerForm" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages/banner/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  105 => 21,  101 => 20,  97 => 19,  88 => 13,  84 => 12,  80 => 11,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block content %}
    <div style=\"margin-left: 300px\">
        <h1 class=\"text-base font-semibold leading-7 text-gray-900 mt-3\">Criar Novo Produto</h1>
        <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>

        {{ form_start(BannerForm) }}
        <div class=\"grid grid-cols-2 md:grid-cols-2 gap-1 mt-10\">
            <div>
                {{ form_label(BannerForm.title, 'Titulo', {'label_attr': {'class': 'block text-sm text-black-700 font-medium'}}) }}
                {{ form_widget(BannerForm.title, {'attr': {'class': 'block w-11/12 shadow-sm border-black-300 rounded-md border p-2 mt-1 mb-2'}})}}
                {{ form_errors(BannerForm.title) }}
            </div>
        </div>

        <div class=\"grid grid-cols-2 md:grid-cols-2 gap-1 mt-10\">
            <div>
                {{ form_label(BannerForm.imageFile, 'Imagem', {'label_attr': {'class': 'block text-sm text-black-700 font-medium'}}) }}
                {{ form_widget(BannerForm.imageFile, {'attr': {'class': 'block w-11/12 shadow-sm border-black-300 rounded-md border p-2 mt-1 mb-2'}})}}
                {{ form_errors(BannerForm.imageFile) }}
            </div>
        </div>

        <div>
            <button type=\"submit\"
                    class=\"block w-11/12 al-center shadow-sm border-transparent bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-400 text-white rounded-md border p-2 mt-4 mb-2\">Criar Produto</button>
        </div>

        {{ form_end(BannerForm) }}
    </div>

{% endblock %}", "admin/pages/banner/new.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/admin/pages/banner/new.html.twig");
    }
}
