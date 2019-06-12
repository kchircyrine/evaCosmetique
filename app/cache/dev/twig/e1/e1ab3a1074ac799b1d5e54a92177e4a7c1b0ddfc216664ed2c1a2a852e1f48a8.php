<?php

/* EvaClientBundle:Offer:show_available.html.twig */
class __TwigTemplate_160900e359543152c303692c542a79d5c22004815645dd7bb2235d38e2be6b2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EvaClientBundle:Offer:show_available.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers"))) > 0)) {
            // line 6
            echo "        <section id=\"latest2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div id=\"grid\" class=\"container\">
                            <div class=\"row\">
                                <div class=\"row\">
                                    <div class=\"col-md-9\">
                                        <h3>
                                            Les produits en promotion </h3>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <!-- Controls -->
                                        <div class=\"controls pull-right hidden-xs\">
                                            <a class=\"left fa fa-chevron-left btn btn-success\" href=\"#carousel-example3\"
                                               data-slide=\"prev\"></a><a class=\"right fa fa-chevron-right btn btn-success\" href=\"#carousel-example3\"
                                               data-slide=\"next\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"carousel-example3\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
                                    <!-- Wrapper for slides -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"row\">
                                                <ul class=\"thumbnails\">
                                                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                echo "  
                                                         ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 34
                    echo "                                                        <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                           
                                                            <a class=\"prdocutname\" href=\"#\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["product"], "name", array())), "html", null, true);
                    echo "</a>
                                                            <div class=\"thumbnail\">
                                                                <span class=\"sale tooltip-test\" > </span>
                                                                <a href=\"product.html\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                    echo "/uploads/product/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "imageDefault", array()), "url", array()), "html", null, true);
                    echo "\"></a>
                                                                <div class=\"caption\">
                                                                    <div class=\"price pull-left\">
                                                                        <span class=\"oldprice\"> ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " TND </span>
                                                                        <span class=\"newprice\"> ";
                    // line 44
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "price", array()) * (100 - $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "percent", array()))) / 100), "html", null, true);
                    echo " TND </span>
                                                                    </div>
                                                                    <a OnClick=\"addToCart(";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Ajout au panier </a>
                                                                    <span class=\"links pull-left\"><a class=\"info\" href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detail", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                    echo "\">info</a>
                                                                        <a class=\"wishlist\" OnClick=\"addToWishlist(";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo ");\" href=\"#wishlist\">wishlist</a>
                                                                        <a class=\"compare\" href=\"compare.html\">comparer</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                                </ul>

                                            </div>
                                        </div>
                                        ";
            // line 60
            if ((twig_length_filter($this->env, (isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers"))) > 4)) {
                // line 61
                echo "                                            <div class=\"item\">
                                                <div class=\"row\">
                                                    <ul class=\"thumbnails\">
                                                        ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")), 4, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                    // line 65
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "products", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 66
                        echo "                                                           <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                           
                                                            <a class=\"prdocutname\" href=\"#\">";
                        // line 68
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["product"], "name", array())), "html", null, true);
                        echo "</a>
                                                            <div class=\"thumbnail\">
                                                                <span class=\"sale tooltip-test\" > </span>
                                                                <a href=\"product.html\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                        echo "/uploads/product/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "imageDefault", array()), "url", array()), "html", null, true);
                        echo "\"></a>
                                                                <div class=\"caption\">
                                                                    <div class=\"price pull-left\">
                                                                        <span class=\"oldprice\"> ";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                        echo " TND </span>
                                                                        <span class=\"newprice\"> ";
                        // line 76
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "price", array()) * (100 - $this->getAttribute($context["offer"], "percent", array()))) / 100), "html", null, true);
                        echo " TND </span>
                                                                    </div>
                                                                    <a OnClick=\"addToCart(";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Ajout au panier </a>
                                                                    <span class=\"links pull-left\"><a class=\"info\" href=\"";
                        // line 79
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detail", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                        echo "\">info</a>
                                                                        <a OnClick=\"addToWishlist(";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo ");\" class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                        <a class=\"compare\" href=\"compare.html\">comparer</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                                                    </ul>
                                                </div>
                                            </div>
                                        ";
            }
            // line 92
            echo "                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    ";
        }
    }

    // line 106
    public function block_javascript($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\">
        < script >
                \$(document).ready(function () {
            \$('.cartadd').on('click', function () {

                alert(\"**********\");
            });

        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "EvaClientBundle:Offer:show_available.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 107,  228 => 106,  213 => 92,  207 => 88,  201 => 87,  188 => 80,  184 => 79,  180 => 78,  175 => 76,  171 => 75,  163 => 72,  156 => 68,  152 => 66,  147 => 65,  143 => 64,  138 => 61,  136 => 60,  130 => 56,  124 => 55,  111 => 48,  107 => 47,  103 => 46,  98 => 44,  94 => 43,  86 => 40,  79 => 36,  75 => 34,  71 => 33,  65 => 32,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
  
    {% if offers|length >0 %}
        <section id=\"latest2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div id=\"grid\" class=\"container\">
                            <div class=\"row\">
                                <div class=\"row\">
                                    <div class=\"col-md-9\">
                                        <h3>
                                            Les produits en promotion </h3>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <!-- Controls -->
                                        <div class=\"controls pull-right hidden-xs\">
                                            <a class=\"left fa fa-chevron-left btn btn-success\" href=\"#carousel-example3\"
                                               data-slide=\"prev\"></a><a class=\"right fa fa-chevron-right btn btn-success\" href=\"#carousel-example3\"
                                               data-slide=\"next\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"carousel-example3\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
                                    <!-- Wrapper for slides -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"row\">
                                                <ul class=\"thumbnails\">
                                                    {% for offer in offers |slice(0,4) %}  
                                                         {% for product in offer.offer.products %}
                                                        <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                           
                                                            <a class=\"prdocutname\" href=\"#\">{{product.name|title}}</a>
                                                            <div class=\"thumbnail\">
                                                                <span class=\"sale tooltip-test\" > </span>
                                                                <a href=\"product.html\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"{{app.request.basepath}}/uploads/product/{{offer.imageDefault.url}}\"></a>
                                                                <div class=\"caption\">
                                                                    <div class=\"price pull-left\">
                                                                        <span class=\"oldprice\"> {{product.price}} TND </span>
                                                                        <span class=\"newprice\"> {{(product.price*(100-offer.offer.percent))/100}} TND </span>
                                                                    </div>
                                                                    <a OnClick=\"addToCart({{product.id}});\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Ajout au panier </a>
                                                                    <span class=\"links pull-left\"><a class=\"info\" href=\"{{ path('show_detail', {'id': product.id}) }}\">info</a>
                                                                        <a class=\"wishlist\" OnClick=\"addToWishlist({{product.id}});\" href=\"#wishlist\">wishlist</a>
                                                                        <a class=\"compare\" href=\"compare.html\">comparer</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                             {% endfor %}
                                                    {% endfor %}
                                                </ul>

                                            </div>
                                        </div>
                                        {% if offers|length>4 %}
                                            <div class=\"item\">
                                                <div class=\"row\">
                                                    <ul class=\"thumbnails\">
                                                        {% for offer in offers |slice(4, 8) %}
                                                            {% for product in offer.offer.products %}
                                                           <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                           
                                                            <a class=\"prdocutname\" href=\"#\">{{product.name|title}}</a>
                                                            <div class=\"thumbnail\">
                                                                <span class=\"sale tooltip-test\" > </span>
                                                                <a href=\"product.html\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"{{app.request.basepath}}/uploads/product/{{offer.imageDefault.url}}\"></a>
                                                                <div class=\"caption\">
                                                                    <div class=\"price pull-left\">
                                                                        <span class=\"oldprice\"> {{product.price}} TND </span>
                                                                        <span class=\"newprice\"> {{(product.price*(100-offer.percent))/100}} TND </span>
                                                                    </div>
                                                                    <a OnClick=\"addToCart({{product.id}});\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Ajout au panier </a>
                                                                    <span class=\"links pull-left\"><a class=\"info\" href=\"{{ path('show_detail', {'id': product.id}) }}\">info</a>
                                                                        <a OnClick=\"addToWishlist({{product.id}});\" class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                        <a class=\"compare\" href=\"compare.html\">comparer</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         {% endfor %}
                                                        {% endfor %}
                                                    </ul>
                                                </div>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    {% endif %}
{% endblock %}


{% block javascript %}
    {{ parent() }}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\">
        < script >
                \$(document).ready(function () {
            \$('.cartadd').on('click', function () {

                alert(\"**********\");
            });

        });
    </script>

{% endblock %} ", "EvaClientBundle:Offer:show_available.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Offer/show_available.html.twig");
    }
}
