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

/* front/page/buy/Cart.html.twig */
class __TwigTemplate_64fe712ae7cb0a9ff08d35720ea274cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/page/buy/Cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/page/buy/Cart.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/page/buy/Cart.html.twig", 1);
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
        echo "<section>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "    <div class=\"mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8\">
        <div class=\"mx-auto max-w-3xl\">
            <header class=\"text-center\">
                <h1 class=\"text-xl font-bold text-gray-900 sm:text-3xl\">Carrinho de compras</h1>
            </header>

            <div class=\"overflow-hidden bg-white shadow sm:rounded-lg\">
                <div class=\"px-4 py-5 sm:px-6\">
                    <h3 class=\"text-base font-semibold leading-6 text-gray-900\">Informações da Compra</h3>
                    <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">Personal details and application.</p>
                </div>
                <div class=\"border-t border-gray-200\">
                    <dl>
                        <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Nome</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Produto</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProduct", [], "method", false, false, false, 25), "getName", [], "method", false, false, false, 25), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "email", [], "any", false, false, false, 29), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Sobre a Compra</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">add more informations</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class=\"mt-8\">
                <ul class=\"space-y-4\">
                    <li class=\"flex items-center gap-4\">
                        <img
                                src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProduct", [], "method", false, false, false, 43), "getImageFilename", [], "method", false, false, false, 43))), "html", null, true);
            echo "\"
                                alt=\"\"
                                class=\"h-24 w-24 rounded object-cover\"
                        />
                        <div>
                            <h3 class=\"text-lg text-black-900\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProduct", [], "method", false, false, false, 48), "getName", [], "method", false, false, false, 48), "html", null, true);
            echo "</h3>

                            <dl class=\"mt-0.5 space-y-px text-[12px] text-gray-600\">
                                <div>
                                    <dd class=\"inline\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProduct", [], "method", false, false, false, 52), "getDescription", [], "method", false, false, false, 52), "html", null, true);
            echo "</dd>
                                </div>
                            </dl>
                        </div>

                        <div class=\"flex flex-1 items-center justify-end gap-2\">
                                <label for=\"Line1Qty\" class=\"sr-only\"> Quantidade </label>

                                <input
                                        type=\"number\"
                                        readonly
                                        value=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getQuantity", [], "method", false, false, false, 63), "html", null, true);
            echo "\"
                                        id=\"Line1Qty\"
                                        class=\"h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none\"
                                />

                            <form action=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProduct", [], "method", false, false, false, 68), "getId", [], "method", false, false, false, 68)]), "html", null, true);
            echo "\" method=\"POST\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button type=\"submit\" class=\"text-gray-600 transition hover:text-red-600\">
                                <span class=\"sr-only\">Remover</span>
                                <svg
                                        xmlns=\"http://www.w3.org/2000/svg\"
                                        fill=\"none\"
                                        viewBox=\"0 0 24 24\"
                                        stroke-width=\"1.5\"
                                        stroke=\"currentColor\"
                                        class=\"h-4 w-4\"
                                >
                                    <path
                                            stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\"
                                            d=\"M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\"
                                    />
                                </svg>
                            </button>
                            </form>
                        </div>
                    </li>
                </ul>

                <div class=\"mt-8 flex justify-center border-t border-gray-100 pt-8\">
                    <div class=\"w-screen max-w-lg space-y-4\">
                        <dl class=\"space-y-0.5 text-sm text-gray-700\">
                            <div class=\"flex justify-between\">
                                <dt>Subtotal</dt>
                                <dd>R\$: ";
            // line 97
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProduct", [], "method", false, false, false, 97), "getPrice", [], "method", false, false, false, 97), 2, ",", "."), "html", null, true);
            echo "</dd>
                            </div>

                            <div class=\"flex justify-between\">
                                <dt>Quantidade</dt>
                                <dd>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getQuantity", [], "method", false, false, false, 102), "html", null, true);
            echo "</dd>
                            </div>

                            <div class=\"flex justify-between !text-base font-medium\">
                                <dt>Total</dt>
                                <dd>R\$: ";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cartTotal"]) || array_key_exists("cartTotal", $context) ? $context["cartTotal"] : (function () { throw new RuntimeError('Variable "cartTotal" does not exist.', 107, $this->source); })()), 2, ",", "."), "html", null, true);
            echo "</dd>
                            </div>
                        </dl>
                        <div style=\"justify-items: self-end; display: flex\" class=\"flex justify-between\">

                            <div class=\"cho-container\"></div>

                        </div>
                    </div>
                </div>
            </div>
            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
            ";
            // line 123
            $this->displayParentBlock("content", $context, $blocks);
            echo "
            <script src=\"https://sdk.mercadopago.com/js/v2\"></script>


            <script>
                const mp = new MercadoPago('TEST-512de61e-25aa-44d5-aa45-7104534a141a', {
                    locale: 'pt-BR'
                });
                mp.checkout({
                    preference: {
                        id: '";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["preference"]) || array_key_exists("preference", $context) ? $context["preference"] : (function () { throw new RuntimeError('Variable "preference" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "'
                    },
                    render: {
                        container: '.cho-container',
                        label: 'Pagar',
                    }
                });
            </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        </div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/page/buy/Cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 142,  240 => 133,  227 => 123,  208 => 107,  200 => 102,  192 => 97,  160 => 68,  152 => 63,  138 => 52,  131 => 48,  123 => 43,  106 => 29,  99 => 25,  92 => 21,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block content %}
<section>
    {% for item in cartItems %}
    <div class=\"mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8\">
        <div class=\"mx-auto max-w-3xl\">
            <header class=\"text-center\">
                <h1 class=\"text-xl font-bold text-gray-900 sm:text-3xl\">Carrinho de compras</h1>
            </header>

            <div class=\"overflow-hidden bg-white shadow sm:rounded-lg\">
                <div class=\"px-4 py-5 sm:px-6\">
                    <h3 class=\"text-base font-semibold leading-6 text-gray-900\">Informações da Compra</h3>
                    <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">Personal details and application.</p>
                </div>
                <div class=\"border-t border-gray-200\">
                    <dl>
                        <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Nome</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ app.user.name }}</dd>
                        </div>
                        <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Produto</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ item.getProduct().getName() }}</dd>
                        </div>
                        <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">{{ app.user.email }}</dd>
                        </div>
                        <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                            <dt class=\"text-sm font-medium text-gray-500\">Sobre a Compra</dt>
                            <dd class=\"mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0\">add more informations</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class=\"mt-8\">
                <ul class=\"space-y-4\">
                    <li class=\"flex items-center gap-4\">
                        <img
                                src=\"{{ asset('uploads/products/' ~ item.getProduct().getImageFilename()) }}\"
                                alt=\"\"
                                class=\"h-24 w-24 rounded object-cover\"
                        />
                        <div>
                            <h3 class=\"text-lg text-black-900\">{{ item.getProduct().getName() }}</h3>

                            <dl class=\"mt-0.5 space-y-px text-[12px] text-gray-600\">
                                <div>
                                    <dd class=\"inline\">{{ item.getProduct().getDescription() }}</dd>
                                </div>
                            </dl>
                        </div>

                        <div class=\"flex flex-1 items-center justify-end gap-2\">
                                <label for=\"Line1Qty\" class=\"sr-only\"> Quantidade </label>

                                <input
                                        type=\"number\"
                                        readonly
                                        value=\"{{ item.getQuantity() }}\"
                                        id=\"Line1Qty\"
                                        class=\"h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none\"
                                />

                            <form action=\"{{ path('cart_remove', { 'productId': item.getProduct().getId() }) }}\" method=\"POST\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button type=\"submit\" class=\"text-gray-600 transition hover:text-red-600\">
                                <span class=\"sr-only\">Remover</span>
                                <svg
                                        xmlns=\"http://www.w3.org/2000/svg\"
                                        fill=\"none\"
                                        viewBox=\"0 0 24 24\"
                                        stroke-width=\"1.5\"
                                        stroke=\"currentColor\"
                                        class=\"h-4 w-4\"
                                >
                                    <path
                                            stroke-linecap=\"round\"
                                            stroke-linejoin=\"round\"
                                            d=\"M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\"
                                    />
                                </svg>
                            </button>
                            </form>
                        </div>
                    </li>
                </ul>

                <div class=\"mt-8 flex justify-center border-t border-gray-100 pt-8\">
                    <div class=\"w-screen max-w-lg space-y-4\">
                        <dl class=\"space-y-0.5 text-sm text-gray-700\">
                            <div class=\"flex justify-between\">
                                <dt>Subtotal</dt>
                                <dd>R\$: {{ item.getProduct().getPrice()|number_format(2, ',', '.') }}</dd>
                            </div>

                            <div class=\"flex justify-between\">
                                <dt>Quantidade</dt>
                                <dd>{{ item.getQuantity() }}</dd>
                            </div>

                            <div class=\"flex justify-between !text-base font-medium\">
                                <dt>Total</dt>
                                <dd>R\$: {{ cartTotal|number_format(2, ',', '.') }}</dd>
                            </div>
                        </dl>
                        <div style=\"justify-items: self-end; display: flex\" class=\"flex justify-between\">

                            <div class=\"cho-container\"></div>

                        </div>
                    </div>
                </div>
            </div>
            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
            {{ parent() }}
            <script src=\"https://sdk.mercadopago.com/js/v2\"></script>


            <script>
                const mp = new MercadoPago('TEST-512de61e-25aa-44d5-aa45-7104534a141a', {
                    locale: 'pt-BR'
                });
                mp.checkout({
                    preference: {
                        id: '{{ preference }}'
                    },
                    render: {
                        container: '.cho-container',
                        label: 'Pagar',
                    }
                });
            </script>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}", "front/page/buy/Cart.html.twig", "/Users/matheus/Documents/Projetos/my_project_directory/templates/front/page/buy/Cart.html.twig");
    }
}
