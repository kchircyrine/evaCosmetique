<?php

/* EvaClientBundle:Product:show_best_seller.html.twig */
class __TwigTemplate_b2d63f6e23be42573bfd0b81ef8bda1c36bca0b7f99d48bef8f073eab28fe9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EvaClientBundle:Product:show_best_seller.html.twig", 1);
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
        echo "     ";
        if ((twig_length_filter($this->env, (isset($context["bestSellers"]) ? $context["bestSellers"] : $this->getContext($context, "bestSellers"))) > 0)) {
            // line 5
            echo "  <section id=\"latest1\">
                                    <div class=\"container\">
                                        <div class=\"row\">
                                            <div class=\"span12\">
                                                <div id=\"grid\" class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-9\">
                                                                <h3>
                                                                    Produits les plus vendus</h3>
                                                            </div>
                                                            <div class=\"col-md-3\">
                                                                <!-- Controls -->
                                                                <div class=\"controls pull-right hidden-xs\">
                                                                    <a class=\"left fa fa-chevron-left btn btn-success\" href=\"#carousel-example1\"
                                                                       data-slide=\"prev\"></a><a class=\"right fa fa-chevron-right btn btn-success\" href=\"#carousel-example1\"
                                                                       data-slide=\"next\"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=\"carousel-example1\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
                                                            <!-- Wrapper for slides -->
                                                            <div class=\"carousel-inner\">
                                                                <div class=\"item active\">
                                                                    <div class=\"row\">
                                                                        <ul class=\"thumbnails\">
                                                                             ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["bestSellers"]) ? $context["bestSellers"] : $this->getContext($context, "bestSellers")), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo "  
                                                                            <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                                                <a class=\"prdocutname\" href=\"#\">";
                // line 33
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "name", array())), "html", null, true);
                echo "</a>
                                                                                <div class=\"thumbnail\">                                         
                                                                                    <a href=\"product.html\">
                                                                                      <img style=\"height:180px;width:280px\" alt=\"\" src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                echo "/uploads/product/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "imageDefault", array()), "url", array()), "html", null, true);
                echo "\"></a>
                                                                                    <div class=\"caption\">
                                                                                        <div class=\"price pull-left\">                           
                                                                                            <span class=\"newprice\"> ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "price", array()), "html", null, true);
                echo " TND</span>
                                                                                        </div>
                                                                                        <a OnClick=\"addToCart(";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "id", array()), "html", null, true);
                echo ");\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                                        <span class=\"links pull-left\"><a class=\"info\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detail", array("id" => $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "id", array()))), "html", null, true);
                echo "\">info</a>
                                                                                            <a OnClick=\"addToWishlist(";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "id", array()), "html", null, true);
                echo ");\" class=\"wishlist\" href=\"\">wishlist</a>
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
            // line 50
            echo "                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                           ";
            // line 54
            if ((twig_length_filter($this->env, (isset($context["bestSellers"]) ? $context["bestSellers"] : $this->getContext($context, "bestSellers"))) > 4)) {
                // line 55
                echo "                                                                <div class=\"item\">
                                                                    <div class=\"row\">
                                                                        <ul class=\"thumbnails\">
                                                                             ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["bestSellers"]) ? $context["bestSellers"] : $this->getContext($context, "bestSellers")), 4, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo "  
                                                                            <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                                                <a class=\"prdocutname\" href=\"#\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "name", array())), "html", null, true);
                    echo "</a>
                                                                                <div class=\"thumbnail\">
                                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
                    echo "/uploads/product/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "imageDefault", array()), "url", array()), "html", null, true);
                    echo "\"></a>
                                                                                    <div class=\"caption\">
                                                                                        <div class=\"price pull-left\">
                                                                                            <span class=\"newprice\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "price", array()), "html", null, true);
                    echo " TND</span>
                                                                                        </div>
                                                                                        <a OnClick=\"addToCart(";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "id", array()), "html", null, true);
                    echo ");\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Ajout au panier </a>
                                                                                        <span class=\"links pull-left\"><a class=\"info\" href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detail", array("id" => $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "id", array()))), "html", null, true);
                    echo "\">info</a>
                                                                                            <a OnClick=\"addToWishlist(";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "bestSeller", array()), "id", array()), "html", null, true);
                    echo ");\" class=\"wishlist\" href=\"#wishlist\">wishlist</a>
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
                // line 76
                echo "                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                                    ";
            }
            // line 80
            echo "                                                            </div>
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
        return "EvaClientBundle:Product:show_best_seller.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 80,  168 => 76,  155 => 69,  151 => 68,  147 => 67,  142 => 65,  134 => 62,  129 => 60,  122 => 58,  117 => 55,  115 => 54,  109 => 50,  96 => 43,  92 => 42,  88 => 41,  83 => 39,  75 => 36,  69 => 33,  62 => 31,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
     {% if bestSellers|length >0 %}
  <section id=\"latest1\">
                                    <div class=\"container\">
                                        <div class=\"row\">
                                            <div class=\"span12\">
                                                <div id=\"grid\" class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-9\">
                                                                <h3>
                                                                    Produits les plus vendus</h3>
                                                            </div>
                                                            <div class=\"col-md-3\">
                                                                <!-- Controls -->
                                                                <div class=\"controls pull-right hidden-xs\">
                                                                    <a class=\"left fa fa-chevron-left btn btn-success\" href=\"#carousel-example1\"
                                                                       data-slide=\"prev\"></a><a class=\"right fa fa-chevron-right btn btn-success\" href=\"#carousel-example1\"
                                                                       data-slide=\"next\"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=\"carousel-example1\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
                                                            <!-- Wrapper for slides -->
                                                            <div class=\"carousel-inner\">
                                                                <div class=\"item active\">
                                                                    <div class=\"row\">
                                                                        <ul class=\"thumbnails\">
                                                                             {% for product in bestSellers |slice(0,4) %}  
                                                                            <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                                                <a class=\"prdocutname\" href=\"#\">{{product.bestSeller.name|title}}</a>
                                                                                <div class=\"thumbnail\">                                         
                                                                                    <a href=\"product.html\">
                                                                                      <img style=\"height:180px;width:280px\" alt=\"\" src=\"{{app.request.basepath}}/uploads/product/{{product.imageDefault.url}}\"></a>
                                                                                    <div class=\"caption\">
                                                                                        <div class=\"price pull-left\">                           
                                                                                            <span class=\"newprice\"> {{product.bestSeller.price}} TND</span>
                                                                                        </div>
                                                                                        <a OnClick=\"addToCart({{product.bestSeller.id}});\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                                        <span class=\"links pull-left\"><a class=\"info\" href=\"{{ path('show_detail', {'id': product.bestSeller.id}) }}\">info</a>
                                                                                            <a OnClick=\"addToWishlist({{product.bestSeller.id}});\" class=\"wishlist\" href=\"\">wishlist</a>
                                                                                            <a class=\"compare\" href=\"compare.html\">comparer</a>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            {% endfor %}
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                           {% if bestSellers|length>4 %}
                                                                <div class=\"item\">
                                                                    <div class=\"row\">
                                                                        <ul class=\"thumbnails\">
                                                                             {% for product in bestSellers |slice(4, 8) %}  
                                                                            <li id=\"test\" style=\"margin-left: 45px;\" class=\"span3\">
                                                                                <a class=\"prdocutname\" href=\"#\">{{product.bestSeller.name|title}}</a>
                                                                                <div class=\"thumbnail\">
                                                                                    <img style=\"height:180px;width:280px\" alt=\"\" src=\"{{app.request.basepath}}/uploads/product/{{product.imageDefault.url}}\"></a>
                                                                                    <div class=\"caption\">
                                                                                        <div class=\"price pull-left\">
                                                                                            <span class=\"newprice\">{{product.bestSeller.price}} TND</span>
                                                                                        </div>
                                                                                        <a OnClick=\"addToCart({{product.bestSeller.id}});\" class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Ajout au panier </a>
                                                                                        <span class=\"links pull-left\"><a class=\"info\" href=\"{{ path('show_detail', {'id': product.bestSeller.id}) }}\">info</a>
                                                                                            <a OnClick=\"addToWishlist({{product.bestSeller.id}});\" class=\"wishlist\" href=\"#wishlist\">wishlist</a>
                                                                                            <a class=\"compare\" href=\"compare.html\">comparer</a>
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
{% endblock %}", "EvaClientBundle:Product:show_best_seller.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Product/show_best_seller.html.twig");
    }
}
