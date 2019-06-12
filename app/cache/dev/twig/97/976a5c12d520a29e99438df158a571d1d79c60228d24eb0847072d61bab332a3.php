<?php

/* EvaClientBundle:Cart:show.html.twig */
class __TwigTemplate_fd60680894a92eac4046e6a6b09168ff29eac6aa99f1d6fc898c83493e79452c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaClientBundle:Layout:layout2.html.twig", "EvaClientBundle:Cart:show.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'detail' => array($this, 'block_detail'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvaClientBundle:Layout:layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/compiled.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
    
";
    }

    // line 10
    public function block_detail($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"maincontainer\">
        <section id=\"login\">
            <div class=\"container\">
                <ul class=\"breadcrumb\">
                    <li>
                        <a href=\"#\">Home</a>
                        <span class=\"divider\">/</span>
                    </li>
                    <li>
                        <a href=\"#\">Account</a>
                        <span class=\"divider\">/</span>
                    </li>
                    <li class=\"active\"> My Wishlist</li>
                </ul>
                <div class=\"row\">

                    <!-- Account Login-->
                    <div class=\"span12\">
                        <h1 class=\"headingmain\"><span>My Wish List</span></h1>
                        <div class=\"cart-info\">
                            <section id=\"table-cart\">
                                <h2 class=\"doc-title\">Shopping Cart table </h2>

                                <div class=\"table-responsive\">
                                    <table class=\"table product-table\">
                                        <!--Table head-->
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Référence</th>
                                                <th>Nom</th>
                                                <th>Prix</th>
                                                <th>QTY</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <!--/Table head-->

                                        <!--Table body-->
                                        <tbody>
                                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "                                                <!--First row-->
                                                <tr id=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">
                                                    <th style=\"height:150px;width:200px\" scope=\"row\">
                                                        <img style=\"height:150px;width:200px\" src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/product/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "defaultImage", array()), "url", array()), "html", null, true);
            echo "\" alt=\"Shoes\" class=\"img-fluid\">
                                                    </th>
                                                    <td style=\"vertical-align: middle;\">
                                                        <h5><strong>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", array()), "html", null, true);
            echo "</strong></h5>
                                                        <p class=\"text-muted\">by ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "marque", array()), "name", array()), "html", null, true);
            echo "</p>
                                                    </td>
                                                    <td style=\"width:120px;padding: 0;vertical-align: middle;\" >";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                                                    ";
            // line 63
            if ((null === $this->getAttribute($context["product"], "availableOffer", array()))) {
                // line 64
                echo "                                                        <td class=\"unitPrice\" style=\"padding: 0;vertical-align: middle;\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " TND</td>
                                                    ";
            } else {
                // line 66
                echo "                                                        <td class=\"unitPrice\" style=\"padding: 0;vertical-align: middle;\" >";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "price", array()) * (100 - $this->getAttribute($this->getAttribute($context["product"], "availableOffer", array()), "percent", array()))) / 100), "html", null, true);
                echo " TND</td>
                                                    ";
            }
            // line 68
            echo "                                                    <td id=\"two\" style=\"padding: 0;vertical-align: middle;\">
                                                        <span class=\"qty\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
            echo "</span>
                                                        <div class=\"btn-group\" data-toggle=\"buttons\">
                                                            <label class=\"btn btn-sm btn-primary btn-rounded btn-table\">
                                                                <input class=\"option1\" type=\"radio\" name=\"options\" id=\"option1\">&mdash;
                                                            </label>
                                                            <label class=\"btn btn-sm btn-primary btn-rounded btn-table\">
                                                                <input class=\"option2\" type=\"radio\" name=\"options\" id=\"option2\">+
                                                            </label>
                                                        </div>
                                                    </td>
                                                    ";
            // line 79
            if ((null === $this->getAttribute($context["product"], "availableOffer", array()))) {
                // line 80
                echo "                                                        <td class=\"price\" style=\"padding: 0;vertical-align: middle;\" >";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array") * $this->getAttribute($context["product"], "price", array())), "html", null, true);
                echo " TND</td>
                                                    ";
            } else {
                // line 82
                echo "                                                        <td class=\"price\" style=\"padding: 0;vertical-align: middle;\" >";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array") * (($this->getAttribute($context["product"], "price", array()) * (100 - $this->getAttribute($this->getAttribute($context["product"], "availableOffer", array()), "percent", array()))) / 100)), "html", null, true);
                echo " TND</td>
                                                    ";
            }
            // line 84
            echo "
                                                    <td style=\"padding: 10px;vertical-align: middle;\">
                                                        <button OnClick=\"removeFromCart(";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo ");\" type=\"button\" class=\"btn btn-sm btn-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove item\">X
                                                        </button>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                              <tr>
                        <td colspan=\"3\"></td>
                        <td>
                            <h4><strong>Total</strong></h4></td>
                        <td>
                            <h4><strong>1200\$</strong></h4></td>
                        <td colspan=\"3\"><button onclick=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("command");
        echo "\" type=\"button\" class=\"btn btn-primary\">Complete purchase  <i class=\"fa fa-angle-right right\"></i></button></td>
                    </tr>

                                        </tbody>
                                        <!--/Table body-->
                                    </table>
                                    ";
        // line 103
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
            // line 104
            echo "                                        <div id=\"empty\">vous n'avez aucun produit dans votre liste de souhaits</div>
                                    ";
        } else {
            // line 106
            echo "                                        <div class=\"invisibl\" id=\"empty\">vous n'avez aucun produit dans votre liste de souhaits</div>
                                    ";
        }
        // line 108
        echo "                                </div>
                                <!--/Shopping Cart table-->

                                <!-- /.Live preview-->



                            </section>  </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
";
    }

    // line 126
    public function block_javascript($context, array $blocks = array())
    {
        // line 127
        echo "
    ";
        // line 128
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script>

        function removeFromCart(\$id) {

            \$.ajax({
                type: 'GET',
                dataType: 'json',
                url: '../app_dev.php/removecart/' + \$id,
                beforeSend: function (xhr) {

                },
                success: function (data) {

                    \$('#' + \$id).remove();
                    console.log(data.empty);
                    if (data.empty == 0) {
                        jQuery('#empty').removeClass('invisibl');
                    } else {
                        jQuery('#empty').addClass('invisibl');
                    }
                }
            });
        }




    </script>

    <script>
        \$(document).ready(function () {
            \$(\".option2\").click(function () {

                \$id_product = \$(this).parent().parent().parent().parent().attr('id');
                \$qte = \$(this).parent().parent().parent().find('span').html();
                var newQty = parseInt(\$qte) + 1;

                \$.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: '../app_dev.php/updateQty/' + \$id_product + '/' + newQty,
                    beforeSend: function (xhr) {
                        console.log(\"before\");
                    },
                    success: function (data) {
                        console.log(\"after\");
                        // show new qty


                    }
                });

                \$(this).parent().parent().parent().find('span').html(\"\" + newQty);
                //update total price
                \$unitPrice = \$(this).parent().parent().parent().parent().find('.unitPrice').html();
                var totalPrice = newQty * parseFloat(\$unitPrice);
                \$(this).parent().parent().parent().parent().find('.price').html(\"\" + totalPrice.toFixed(2) + \"TND\");


                // update quantity

            });


            \$(\".option1\").click(function () {
                \$id_product = \$(this).parent().parent().parent().parent().attr('id');
                \$qte = \$(this).parent().parent().parent().find('span').html();
                var newQty = parseInt(\$qte) - 1;
                if (\$qte !== '1') {
                    \$.ajax({
                        type: 'GET',
                        dataType: 'json',
                        url: '../app_dev.php/updateQty/' + \$id_product + '/' + newQty,
                        beforeSend: function (xhr) {
                           
                        },
                        success: function (data) {

                        }
                    });











                    \$(this).parent().parent().parent().find('span').html(\"\" + newQty);


                    \$unitPrice = \$(this).parent().parent().parent().parent().find('.unitPrice').html();

                    //update total price
                    var totalPrice = newQty * parseFloat(\$unitPrice);
                    \$(this).parent().parent().parent().parent().find('.price').html(\"\" + totalPrice.toFixed(2) + \"TND\");

                }
            });


        });


    </script>

";
    }

    public function getTemplateName()
    {
        return "EvaClientBundle:Cart:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 128,  232 => 127,  229 => 126,  210 => 108,  206 => 106,  202 => 104,  200 => 103,  191 => 97,  183 => 91,  172 => 86,  168 => 84,  162 => 82,  156 => 80,  154 => 79,  141 => 69,  138 => 68,  132 => 66,  126 => 64,  124 => 63,  120 => 62,  115 => 60,  111 => 59,  103 => 56,  98 => 54,  95 => 53,  91 => 52,  48 => 11,  45 => 10,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EvaClientBundle:Layout:layout2.html.twig' %}

{% block head %}
    {{ parent() }}
    <link href=\"{{asset('bundles/evaclient/css/compiled.min.css')}}\" rel=\"stylesheet\"> 
    
{% endblock %}


{% block detail %}
    <div id=\"maincontainer\">
        <section id=\"login\">
            <div class=\"container\">
                <ul class=\"breadcrumb\">
                    <li>
                        <a href=\"#\">Home</a>
                        <span class=\"divider\">/</span>
                    </li>
                    <li>
                        <a href=\"#\">Account</a>
                        <span class=\"divider\">/</span>
                    </li>
                    <li class=\"active\"> My Wishlist</li>
                </ul>
                <div class=\"row\">

                    <!-- Account Login-->
                    <div class=\"span12\">
                        <h1 class=\"headingmain\"><span>My Wish List</span></h1>
                        <div class=\"cart-info\">
                            <section id=\"table-cart\">
                                <h2 class=\"doc-title\">Shopping Cart table </h2>

                                <div class=\"table-responsive\">
                                    <table class=\"table product-table\">
                                        <!--Table head-->
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Référence</th>
                                                <th>Nom</th>
                                                <th>Prix</th>
                                                <th>QTY</th>
                                                <th>Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <!--/Table head-->

                                        <!--Table body-->
                                        <tbody>
                                            {% for product in products %}
                                                <!--First row-->
                                                <tr id=\"{{product.id}}\">
                                                    <th style=\"height:150px;width:200px\" scope=\"row\">
                                                        <img style=\"height:150px;width:200px\" src=\"{{app.request.basepath}}/uploads/product/{{product.defaultImage.url}}\" alt=\"Shoes\" class=\"img-fluid\">
                                                    </th>
                                                    <td style=\"vertical-align: middle;\">
                                                        <h5><strong>{{product.reference}}</strong></h5>
                                                        <p class=\"text-muted\">by {{product.marque.name}}</p>
                                                    </td>
                                                    <td style=\"width:120px;padding: 0;vertical-align: middle;\" >{{product.name}}</td>
                                                    {% if product.availableOffer is null %}
                                                        <td class=\"unitPrice\" style=\"padding: 0;vertical-align: middle;\" >{{product.price}} TND</td>
                                                    {% else %}
                                                        <td class=\"unitPrice\" style=\"padding: 0;vertical-align: middle;\" >{{(product.price*(100-product.availableOffer.percent))/100}} TND</td>
                                                    {% endif %}
                                                    <td id=\"two\" style=\"padding: 0;vertical-align: middle;\">
                                                        <span class=\"qty\">{{cart[product.id]}}</span>
                                                        <div class=\"btn-group\" data-toggle=\"buttons\">
                                                            <label class=\"btn btn-sm btn-primary btn-rounded btn-table\">
                                                                <input class=\"option1\" type=\"radio\" name=\"options\" id=\"option1\">&mdash;
                                                            </label>
                                                            <label class=\"btn btn-sm btn-primary btn-rounded btn-table\">
                                                                <input class=\"option2\" type=\"radio\" name=\"options\" id=\"option2\">+
                                                            </label>
                                                        </div>
                                                    </td>
                                                    {% if product.availableOffer is null %}
                                                        <td class=\"price\" style=\"padding: 0;vertical-align: middle;\" >{{ cart[product.id] * product.price}} TND</td>
                                                    {% else %}
                                                        <td class=\"price\" style=\"padding: 0;vertical-align: middle;\" >{{cart[product.id] *((product.price*(100-product.availableOffer.percent))/100)}} TND</td>
                                                    {% endif %}

                                                    <td style=\"padding: 10px;vertical-align: middle;\">
                                                        <button OnClick=\"removeFromCart({{product.id}});\" type=\"button\" class=\"btn btn-sm btn-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove item\">X
                                                        </button>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                              <tr>
                        <td colspan=\"3\"></td>
                        <td>
                            <h4><strong>Total</strong></h4></td>
                        <td>
                            <h4><strong>1200\$</strong></h4></td>
                        <td colspan=\"3\"><button onclick=\"{{path('command')}}\" type=\"button\" class=\"btn btn-primary\">Complete purchase  <i class=\"fa fa-angle-right right\"></i></button></td>
                    </tr>

                                        </tbody>
                                        <!--/Table body-->
                                    </table>
                                    {% if products|length==0 %}
                                        <div id=\"empty\">vous n'avez aucun produit dans votre liste de souhaits</div>
                                    {% else %}
                                        <div class=\"invisibl\" id=\"empty\">vous n'avez aucun produit dans votre liste de souhaits</div>
                                    {% endif %}
                                </div>
                                <!--/Shopping Cart table-->

                                <!-- /.Live preview-->



                            </section>  </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
{% endblock %}


{% block javascript %}

    {{parent()}}
    <script>

        function removeFromCart(\$id) {

            \$.ajax({
                type: 'GET',
                dataType: 'json',
                url: '../app_dev.php/removecart/' + \$id,
                beforeSend: function (xhr) {

                },
                success: function (data) {

                    \$('#' + \$id).remove();
                    console.log(data.empty);
                    if (data.empty == 0) {
                        jQuery('#empty').removeClass('invisibl');
                    } else {
                        jQuery('#empty').addClass('invisibl');
                    }
                }
            });
        }




    </script>

    <script>
        \$(document).ready(function () {
            \$(\".option2\").click(function () {

                \$id_product = \$(this).parent().parent().parent().parent().attr('id');
                \$qte = \$(this).parent().parent().parent().find('span').html();
                var newQty = parseInt(\$qte) + 1;

                \$.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: '../app_dev.php/updateQty/' + \$id_product + '/' + newQty,
                    beforeSend: function (xhr) {
                        console.log(\"before\");
                    },
                    success: function (data) {
                        console.log(\"after\");
                        // show new qty


                    }
                });

                \$(this).parent().parent().parent().find('span').html(\"\" + newQty);
                //update total price
                \$unitPrice = \$(this).parent().parent().parent().parent().find('.unitPrice').html();
                var totalPrice = newQty * parseFloat(\$unitPrice);
                \$(this).parent().parent().parent().parent().find('.price').html(\"\" + totalPrice.toFixed(2) + \"TND\");


                // update quantity

            });


            \$(\".option1\").click(function () {
                \$id_product = \$(this).parent().parent().parent().parent().attr('id');
                \$qte = \$(this).parent().parent().parent().find('span').html();
                var newQty = parseInt(\$qte) - 1;
                if (\$qte !== '1') {
                    \$.ajax({
                        type: 'GET',
                        dataType: 'json',
                        url: '../app_dev.php/updateQty/' + \$id_product + '/' + newQty,
                        beforeSend: function (xhr) {
                           
                        },
                        success: function (data) {

                        }
                    });











                    \$(this).parent().parent().parent().find('span').html(\"\" + newQty);


                    \$unitPrice = \$(this).parent().parent().parent().parent().find('.unitPrice').html();

                    //update total price
                    var totalPrice = newQty * parseFloat(\$unitPrice);
                    \$(this).parent().parent().parent().parent().find('.price').html(\"\" + totalPrice.toFixed(2) + \"TND\");

                }
            });


        });


    </script>

{% endblock %}", "EvaClientBundle:Cart:show.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Cart/show.html.twig");
    }
}
