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

/* front/page/ProductById.html.twig */
class __TwigTemplate_b8800cbd9ff2771b6f074ed6e562efbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/page/ProductById.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/page/ProductById.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/page/ProductById.html.twig", 1);
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
        echo "    <div class=\"antialiased\">

        <div class=\"py-6\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6\">
                <div class=\"flex flex-col md:flex-row -mx-4\">
                    <div class=\"md:flex-1 px-4\">
                        <div x-data=\"{ image: 1 }\" x-cloak>
                            <div class=\"h-full md:h-80 rounded-lg bg-gray-100 mb-4\">
                                <div class=\"h-full md:h-80 rounded-lg bg-cover bg-center bg-[url(";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 13))), "html", null, true);
            echo ")]\"></div>
                            </div>

                            <div class=\"flex -mx-2 mb-4\">
                                <template x-for=\"i in 4\">
                                    <div class=\"flex-1 px-2\">
                                        <button x-on:click=\"image = i\" :class=\"{ 'ring-2 ring-indigo-300 ring-inset': image === i }\" class=\"focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center\">
                                            <span x-text=\"i\" class=\"text-2xl\"></span>
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class=\"md:flex-1 px-4\">
                         <h2 class=\"mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
                        <p class=\"text-gray-500 text-sm\">Por <a href=\"#\" class=\"text-indigo-600 hover:underline\">ImunoVacin</a></p>

                        <div class=\"flex items-center space-x-4 my-4\">
                            <div>
                                <div class=\"rounded-lg bg-gray-100 flex py-2 px-3\">
                                    <span class=\"text-indigo-400 mr-1 mt-1\">R\$:</span>
                                    <span class=\"font-bold text-indigo-600 text-3xl\">";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35), 2, ",", "."), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>

                        <p class=\"text-gray-500\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                        <form id=\"add-to-cart-form\" method=\"post\" action=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buy_vacin");
            echo "\">
                        <input type=\"hidden\" value=\"\" name=\"school\" id=\"school\">
                        <input type=\"hidden\" value=\"1\" name=\"quantity\" id=\"quantity\">
                        <input type=\"hidden\" name=\"id_product\" id=\"id_product\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                        <div class=\"flex py-4 space-x-4\">
                            <div class=\"relative\">
                                <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Qnt</div>
                                <select name=\"mySelect\" id=\"mySelect\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>

                                <svg class=\"w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 9l4-4 4 4m0 6l-4 4-4-4\" />
                                </svg>
                            </div>
                            ";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 61
                echo "                                <button type=\"submit\" class=\"h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white\">
                                    Adicionar ao Carrinho
                                </button>
                            ";
            } else {
                // line 65
                echo "                                <button disabled type=\"submit\" class=\"h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white\">
                                    Adicionar ao Carrinho
                                </button>
                            ";
            }
            // line 69
            echo "
                        </div>
                        <div class=\"sm:col-span-2\">
                            <label for=\"message\" class=\"block text-sm font-semibold leading-6 text-gray-900\">Outras Informações</label>
                            <div class=\"mt-2.5\">
                                <textarea name=\"OthersVacinated\" id=\"OthersVacinated\" placeholder=\"Outros recebedores NOME|CPF\" rows=\"4\" class=\"block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6\"></textarea>
                            </div>
                        </div>

                            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["schools"]) || array_key_exists("schools", $context) ? $context["schools"] : (function () { throw new RuntimeError('Variable "schools" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 79
                echo "                            <div class=\"flex py-4 space-x-4\">
                                <div class=\"flex justify-center\">
                                    <div class=\"relative mx-2\">
                                        <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Escola</div>
                                        <select name=\"myInput\" id=\"myInput\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                            <option></option>
                                            <option value=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "id", [], "any", false, false, false, 85), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["school"], "name", [], "any", false, false, false, 85), "html", null, true);
                echo "</option>
                                        </select>
                                    </div>
                                    <div class=\"flex justify-center\">
                                    <div class=\"relative mx-2\">
                                        <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Dia</div>
                                        <select name=\"myInput\" id=\"myInput\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                            <option>Segunda</option>
                                            <option>Terça</option>
                                            <option>Quarta</option>
                                            <option>Quinta</option>
                                            <option>Sexta</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class=\"flex justify-center\">
                                    <div class=\"relative mx-2\">
                                        <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Hora</div>
                                        <select name=\"myInput\" id=\"myInput\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                            <option>08:00</option>
                                            <option>09:00</option>
                                            <option>10:00</option>
                                            <option>11:00</option>
                                            <option>13:00</option>
                                            <option>14:00</option>
                                            <option>15:00</option>
                                            <option>16:00</option>
                                            <option>17:00</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        <script>
                            var select = document.getElementById('mySelect');
                            var meuInput = document.getElementById('quantity');
                            var meuInputValue = document.getElementById('school');
                            var SchoolSelect = document.getElementById('myInput');

                            select.addEventListener('change', function() {
                                meuInput.value = select.value;
                            });

                            SchoolSelect.addEventListener('change', function (){
                                meuInputValue.value = SchoolSelect.value;
                            })
                        </script>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                     </form>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/page/ProductById.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 139,  243 => 134,  186 => 85,  178 => 79,  174 => 78,  163 => 69,  157 => 65,  151 => 61,  149 => 60,  130 => 44,  124 => 41,  120 => 40,  112 => 35,  102 => 28,  84 => 13,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block content %}
    <div class=\"antialiased\">

        <div class=\"py-6\">
            {% for product in products %}
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6\">
                <div class=\"flex flex-col md:flex-row -mx-4\">
                    <div class=\"md:flex-1 px-4\">
                        <div x-data=\"{ image: 1 }\" x-cloak>
                            <div class=\"h-full md:h-80 rounded-lg bg-gray-100 mb-4\">
                                <div class=\"h-full md:h-80 rounded-lg bg-cover bg-center bg-[url({{ asset('uploads/products/' ~ product.imageFilename) }})]\"></div>
                            </div>

                            <div class=\"flex -mx-2 mb-4\">
                                <template x-for=\"i in 4\">
                                    <div class=\"flex-1 px-2\">
                                        <button x-on:click=\"image = i\" :class=\"{ 'ring-2 ring-indigo-300 ring-inset': image === i }\" class=\"focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center\">
                                            <span x-text=\"i\" class=\"text-2xl\"></span>
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class=\"md:flex-1 px-4\">
                         <h2 class=\"mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl\">{{ product.name }}</h2>
                        <p class=\"text-gray-500 text-sm\">Por <a href=\"#\" class=\"text-indigo-600 hover:underline\">ImunoVacin</a></p>

                        <div class=\"flex items-center space-x-4 my-4\">
                            <div>
                                <div class=\"rounded-lg bg-gray-100 flex py-2 px-3\">
                                    <span class=\"text-indigo-400 mr-1 mt-1\">R\$:</span>
                                    <span class=\"font-bold text-indigo-600 text-3xl\">{{ product.price|number_format(2, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <p class=\"text-gray-500\">{{ product.description }}</p>
                        <form id=\"add-to-cart-form\" method=\"post\" action=\"{{ path('app_buy_vacin')}}\">
                        <input type=\"hidden\" value=\"\" name=\"school\" id=\"school\">
                        <input type=\"hidden\" value=\"1\" name=\"quantity\" id=\"quantity\">
                        <input type=\"hidden\" name=\"id_product\" id=\"id_product\" value=\"{{ product.id }}\">
                        <div class=\"flex py-4 space-x-4\">
                            <div class=\"relative\">
                                <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Qnt</div>
                                <select name=\"mySelect\" id=\"mySelect\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>

                                <svg class=\"w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 9l4-4 4 4m0 6l-4 4-4-4\" />
                                </svg>
                            </div>
                            {% if is_granted('ROLE_USER') %}
                                <button type=\"submit\" class=\"h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white\">
                                    Adicionar ao Carrinho
                                </button>
                            {% else %}
                                <button disabled type=\"submit\" class=\"h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white\">
                                    Adicionar ao Carrinho
                                </button>
                            {% endif %}

                        </div>
                        <div class=\"sm:col-span-2\">
                            <label for=\"message\" class=\"block text-sm font-semibold leading-6 text-gray-900\">Outras Informações</label>
                            <div class=\"mt-2.5\">
                                <textarea name=\"OthersVacinated\" id=\"OthersVacinated\" placeholder=\"Outros recebedores NOME|CPF\" rows=\"4\" class=\"block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6\"></textarea>
                            </div>
                        </div>

                            {% for school in schools %}
                            <div class=\"flex py-4 space-x-4\">
                                <div class=\"flex justify-center\">
                                    <div class=\"relative mx-2\">
                                        <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Escola</div>
                                        <select name=\"myInput\" id=\"myInput\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                            <option></option>
                                            <option value=\"{{ school.id }}\">{{ school.name }}</option>
                                        </select>
                                    </div>
                                    <div class=\"flex justify-center\">
                                    <div class=\"relative mx-2\">
                                        <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Dia</div>
                                        <select name=\"myInput\" id=\"myInput\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                            <option>Segunda</option>
                                            <option>Terça</option>
                                            <option>Quarta</option>
                                            <option>Quinta</option>
                                            <option>Sexta</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class=\"flex justify-center\">
                                    <div class=\"relative mx-2\">
                                        <div class=\"text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold\">Hora</div>
                                        <select name=\"myInput\" id=\"myInput\" class=\"cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1\">
                                            <option>08:00</option>
                                            <option>09:00</option>
                                            <option>10:00</option>
                                            <option>11:00</option>
                                            <option>13:00</option>
                                            <option>14:00</option>
                                            <option>15:00</option>
                                            <option>16:00</option>
                                            <option>17:00</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        <script>
                            var select = document.getElementById('mySelect');
                            var meuInput = document.getElementById('quantity');
                            var meuInputValue = document.getElementById('school');
                            var SchoolSelect = document.getElementById('myInput');

                            select.addEventListener('change', function() {
                                meuInput.value = select.value;
                            });

                            SchoolSelect.addEventListener('change', function (){
                                meuInputValue.value = SchoolSelect.value;
                            })
                        </script>
                    {% endfor %}
                     </form>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "front/page/ProductById.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/page/ProductById.html.twig");
    }
}
