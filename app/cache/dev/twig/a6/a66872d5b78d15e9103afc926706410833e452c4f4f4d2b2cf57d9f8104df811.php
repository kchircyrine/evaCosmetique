<?php

/* EvaClientBundle:Product:show_newest.html.twig */
class __TwigTemplate_1c4f15929e1fb9e12737894b5a6ed389119415a2cd526d8174d7e3aca6dd5e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EvaClientBundle:Product:show_newest.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["newestProducts"]) ? $context["newestProducts"] : $this->getContext($context, "newestProducts"))) > 0)) {
            // line 5
            echo "        <section id=\"latest3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div id=\"grid\" class=\"container\">
                            <div class=\"row\">
                                <div class=\"row\">
                                    <div class=\"col-md-9\">
                                        <h3>
                                            Les nouveaux produits</h3>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <!-- Controls -->
                                        <div class=\"controls pull-right hidden-xs\">
                                            <a class=\"left fa fa-chevron-left btn btn-success\" href=\"#carousel-example2\"
                                               data-slide=\"prev\"></a><a class=\"right fa fa-chevron-right btn btn-success\" href=\"#carousel-example2\"
                                               data-slide=\"next\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"carousel-example2\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
                                    <!-- Wrapper for slides -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"row\">
                                                <ul class=\"thumbnails\">
                                                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["newestProducts"]) ? $context["newestProducts"] : $this->getContext($context, "newestProducts")), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo "  
                                                        <li  id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                            <a  class=\"prdocutname\" href=\"#\">";
                // line 33
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "name", array())), "html", null, true);
                echo "</a>
                                                            <div class=\"thumbnail\">
                                                                <span class=\"sale tooltip-test\" >Sale</span>
                                                                <a href=\"product.html\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                echo "/uploads/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "imageDefault", array()), "url", array()), "html", null, true);
                echo "\"></a>
                                                                <div data-name=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()), "html", null, true);
                echo "\" class=\"caption\">
                                                                    <div class=\"price pull-left\">
                                                                        <span class=\"newprice\"> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "price", array()), "html", null, true);
                echo " TND</span>
                                                                    </div>
                                                                    <a OnClick=\"addToCart(";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()), "html", null, true);
                echo ");\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                    <span class=\"links pull-left\"><a class=\"info\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detail", array("id" => $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()))), "html", null, true);
                echo "\">info</a>
                                                                        <a OnClick=\"addToWishlist(";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()), "html", null, true);
                echo ");\" class=\"wishlist\" href=\"#wishlist\">wishlist</a>
                                                                        <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                                </ul>

                                            </div>
                                        </div>
                                        ";
            // line 55
            if ((twig_length_filter($this->env, (isset($context["newestProducts"]) ? $context["newestProducts"] : $this->getContext($context, "newestProducts"))) > 4)) {
                // line 56
                echo "                                            <div class=\"item\">
                                                <div class=\"row\">
                                                    <ul class=\"thumbnails\">
                                                        ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["newestProducts"]) ? $context["newestProducts"] : $this->getContext($context, "newestProducts")), 4, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
                                                            <li  id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                                <a   class=\"prdocutname\" href=\"#\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "name", array())), "html", null, true);
                    echo "</a>
                                                                <div class=\"thumbnail\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                    echo "/uploads/product/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "imageDefault", array()), "url", array()), "html", null, true);
                    echo "\"></a>
                                                                    <div data-name=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()), "html", null, true);
                    echo "\" class=\"caption\">
                                                                        <div class=\"price pull-left\">
                                                                            <span class=\"newprice\"> ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "price", array()), "html", null, true);
                    echo " TND</span>
                                                                        </div>
                                                                        <a OnClick=\"addToCart(";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()), "html", null, true);
                    echo ");\"  class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                        <span class=\"links pull-left\"><a class=\"info\" href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detail", array("id" => $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()))), "html", null, true);
                    echo "\">info</a>
                                                                            <a OnClick=\"addToWishlist(";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "newproduct", array()), "id", array()), "html", null, true);
                    echo ");\" class=\"wishlist\" href=\"#wishlist\">wishlist</a>
                                                                            <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>  
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                                    </ul>
                                                </div>
                                            </div>
                                        ";
            }
            // line 81
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

    public function getTemplateName()
    {
        return "EvaClientBundle:Product:show_newest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  175 => 77,  162 => 70,  158 => 69,  154 => 68,  149 => 66,  144 => 64,  138 => 63,  133 => 61,  126 => 59,  121 => 56,  119 => 55,  113 => 51,  100 => 44,  96 => 43,  92 => 42,  87 => 40,  82 => 38,  76 => 37,  69 => 33,  62 => 31,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    {% if newestProducts|length >0 %}
        <section id=\"latest3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span12\">
                        <div id=\"grid\" class=\"container\">
                            <div class=\"row\">
                                <div class=\"row\">
                                    <div class=\"col-md-9\">
                                        <h3>
                                            Les nouveaux produits</h3>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <!-- Controls -->
                                        <div class=\"controls pull-right hidden-xs\">
                                            <a class=\"left fa fa-chevron-left btn btn-success\" href=\"#carousel-example2\"
                                               data-slide=\"prev\"></a><a class=\"right fa fa-chevron-right btn btn-success\" href=\"#carousel-example2\"
                                               data-slide=\"next\"></a>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"carousel-example2\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
                                    <!-- Wrapper for slides -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <div class=\"row\">
                                                <ul class=\"thumbnails\">
                                                    {% for product in newestProducts |slice(0,4) %}  
                                                        <li  id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                            <a  class=\"prdocutname\" href=\"#\">{{product.newproduct.name|title}}</a>
                                                            <div class=\"thumbnail\">
                                                                <span class=\"sale tooltip-test\" >Sale</span>
                                                                <a href=\"product.html\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"{{app.request.basepath}}/uploads/product/{{product.imageDefault.url}}\"></a>
                                                                <div data-name=\"{{product.newproduct.id}}\" class=\"caption\">
                                                                    <div class=\"price pull-left\">
                                                                        <span class=\"newprice\"> {{product.newproduct.price}} TND</span>
                                                                    </div>
                                                                    <a OnClick=\"addToCart({{product.newproduct.id}});\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                    <span class=\"links pull-left\"><a class=\"info\" href=\"{{ path('show_detail', {'id': product.newproduct.id}) }}\">info</a>
                                                                        <a OnClick=\"addToWishlist({{product.newproduct.id}});\" class=\"wishlist\" href=\"#wishlist\">wishlist</a>
                                                                        <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    {% endfor %}
                                                </ul>

                                            </div>
                                        </div>
                                        {% if newestProducts|length>4 %}
                                            <div class=\"item\">
                                                <div class=\"row\">
                                                    <ul class=\"thumbnails\">
                                                        {% for product in newestProducts |slice(4, 8) %} 
                                                            <li  id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                                <a   class=\"prdocutname\" href=\"#\">{{product.newproduct.name|title}}</a>
                                                                <div class=\"thumbnail\">
                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"{{app.request.basepath}}/uploads/product/{{product.imageDefault.url}}\"></a>
                                                                    <div data-name=\"{{product.newproduct.id}}\" class=\"caption\">
                                                                        <div class=\"price pull-left\">
                                                                            <span class=\"newprice\"> {{product.newproduct.price}} TND</span>
                                                                        </div>
                                                                        <a OnClick=\"addToCart({{product.newproduct.id}});\"  class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                        <span class=\"links pull-left\"><a class=\"info\" href=\"{{ path('show_detail', {'id': product.newproduct.id}) }}\">info</a>
                                                                            <a OnClick=\"addToWishlist({{product.newproduct.id}});\" class=\"wishlist\" href=\"#wishlist\">wishlist</a>
                                                                            <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </li>  
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
{% endblock %}", "EvaClientBundle:Product:show_newest.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Product/show_newest.html.twig");
    }
}
