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

/* admin/pages/product/index.html.twig */
class __TwigTemplate_65cfa1b6c909bb63f0427b203dac346c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/product/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/pages/product/index.html.twig", 1);
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
            <h1 class=\"text-base font-semibold leading-7 text-gray-900\">Lista de Produtos</h1>
            <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
        echo "\"><button type=\"button\" class=\"py-2.5 px-5 mr-2 mt-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700\">Novo Produto</button>
            </a>
        </div>
        <div class=\"h-5/6 relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mr-2\">
            <table class=\"w-full h-5/6 text-sm text-left text-gray-500 dark:text-gray-400\">
                <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Produto
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Descricao
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Valor
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Edição
                    </th>
                </tr>
                </thead>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "                    <tbody>
                    <tr class=\"border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700\">
                        <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        </th>
                        <td class=\"px-6 py-4\">
                            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "
                        </td>
                        <td class=\"px-6 py-4\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        </td>
                        <td class=\"px-6 py-4\">
                            <a href=\"#\" class=\"font-medium text-blue-600 dark:text-blue-500 hover:underline\">Editar</a>
                        </td>
                    </tr>
                    </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  119 => 39,  113 => 36,  107 => 33,  102 => 30,  98 => 29,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block content %}
    <div style=\"margin-left: 280px\">
        <div class=\"mt-6\">
            <h1 class=\"text-base font-semibold leading-7 text-gray-900\">Lista de Produtos</h1>
            <p class=\"mt-1 text-sm leading-6 text-gray-600\">This information will be displayed publicly so be careful what you share.</p>
            <a href=\"{{ path('app_product_new') }}\"><button type=\"button\" class=\"py-2.5 px-5 mr-2 mt-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700\">Novo Produto</button>
            </a>
        </div>
        <div class=\"h-5/6 relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mr-2\">
            <table class=\"w-full h-5/6 text-sm text-left text-gray-500 dark:text-gray-400\">
                <thead class=\"text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Produto
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Descricao
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Valor
                    </th>
                    <th scope=\"col\" class=\"px-6 py-3\">
                        Edição
                    </th>
                </tr>
                </thead>
                {% for product in products %}
                    <tbody>
                    <tr class=\"border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700\">
                        <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">
                            {{ product.name }}
                        </th>
                        <td class=\"px-6 py-4\">
                            {{ product.description }}
                        </td>
                        <td class=\"px-6 py-4\">
                            {{ product.price }}
                        </td>
                        <td class=\"px-6 py-4\">
                            <a href=\"#\" class=\"font-medium text-blue-600 dark:text-blue-500 hover:underline\">Editar</a>
                        </td>
                    </tr>
                    </tbody>
                {% endfor %}
            </table>
        </div>
    </div>
{% endblock %}", "admin/pages/product/index.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/admin/pages/product/index.html.twig");
    }
}
