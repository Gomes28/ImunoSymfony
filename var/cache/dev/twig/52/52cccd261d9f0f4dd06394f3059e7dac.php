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

/* admin/pages/admin/index.html.twig */
class __TwigTemplate_1227cbb8deae0fe5efbb68a848b188d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/pages/admin/index.html.twig", 1);
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
        echo "    <div style=\"margin-left: 280px\">
        <div class=\"mt-6\">
            <h1 class=\"text-base font-semibold leading-7 text-gray-900\">Lista de Usuarios</h1>
            <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>
        </div>
        <div class=\"h-5/6 relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mr-2\">
            <table class=\"w-full h-5/6 text-sm text-left text-gray-500 dark:text-gray-400\">
                <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Nome
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Email
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Role
                    </th>
                    ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                        <th scope=\"col\" class=\"px-6 py-3\">
                            Apagar
                        </th>
                    ";
        }
        // line 27
        echo "                </tr>
                </thead>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 30
            echo "                    <tbody>
                    <tr class=\"border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700\">
                        <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        </th>
                        <td class=\"px-6 py-4\">
                            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 36), "html", null, true);
            echo "
                        </td>
                        <td class=\"px-6 py-4\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "cpf", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        </td>
                        <td class=\"px-6 py-4\">
                            Admin
                        </td>
                        <td class=\"px-6 py-4\">
                            <a href=\"#\" class=\"font-medium text-blue-600 dark:text-red-500 hover:underline\">Apagar</a>
                        </td>
                    </tr>
                    </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages/admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  121 => 39,  115 => 36,  109 => 33,  104 => 30,  100 => 29,  96 => 27,  90 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block content %}
    <div style=\"margin-left: 280px\">
        <div class=\"mt-6\">
            <h1 class=\"text-base font-semibold leading-7 text-gray-900\">Lista de Usuarios</h1>
            <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>
        </div>
        <div class=\"h-5/6 relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mr-2\">
            <table class=\"w-full h-5/6 text-sm text-left text-gray-500 dark:text-gray-400\">
                <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Nome
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Email
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Role
                    </th>
                    {% if is_granted('ROLE_ADMIN') %}
                        <th scope=\"col\" class=\"px-6 py-3\">
                            Apagar
                        </th>
                    {% endif %}
                </tr>
                </thead>
                {% for admin in admins %}
                    <tbody>
                    <tr class=\"border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700\">
                        <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                            {{ admin.name }}
                        </th>
                        <td class=\"px-6 py-4\">
                            {{ admin.email }}
                        </td>
                        <td class=\"px-6 py-4\">
                            {{ admin.cpf }}
                        </td>
                        <td class=\"px-6 py-4\">
                            Admin
                        </td>
                        <td class=\"px-6 py-4\">
                            <a href=\"#\" class=\"font-medium text-blue-600 dark:text-red-500 hover:underline\">Apagar</a>
                        </td>
                    </tr>
                    </tbody>
                {% endfor %}
            </table>
        </div>
    </div>
{% endblock %}
", "admin/pages/admin/index.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/admin/pages/admin/index.html.twig");
    }
}
