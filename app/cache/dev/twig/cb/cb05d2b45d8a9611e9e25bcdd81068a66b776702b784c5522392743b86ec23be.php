<?php

/* EvaClientBundle:Default:test.html.twig */
class __TwigTemplate_37a45acf3e58a56bd5d2d987fefc613b0ad2941d599ee11c842f491336ead6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <title>www.esprit.tn</title>
    </head>


    <body>
        <table>
                <thead>
                    <tr>
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "                        <!--First row-->
                        <tr>

                            <td >
                                <h5><strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", array()), "html", null, true);
            echo "</strong></h5>
                                <p class=\"text-muted\">by ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "marque", array()), "name", array()), "html", null, true);
            echo "</p>
                            </td>
                            <td >";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                            
                            <td >
                                <span class=\"qty\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
            echo "</span>
                               
                            </td>
                            
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    <tr>
                        <td ></td>
                        <td>
                            <h4><strong>Total</strong></h4></td>
                        <td>
                            <h4><strong>1200\$</strong></h4></td>
                    </tr>

                </tbody>
                <!--/Table body-->
            </table>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "EvaClientBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 41,  69 => 35,  63 => 32,  58 => 30,  54 => 29,  48 => 25,  44 => 24,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
    <head>
        <title>www.esprit.tn</title>
    </head>


    <body>
        <table>
                <thead>
                    <tr>
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
                        <tr>

                            <td >
                                <h5><strong>{{product.reference}}</strong></h5>
                                <p class=\"text-muted\">by {{product.marque.name}}</p>
                            </td>
                            <td >{{product.name}}</td>
                            
                            <td >
                                <span class=\"qty\">{{cart[product.id]}}</span>
                               
                            </td>
                            
                        </tr>
                    {% endfor %}
                    <tr>
                        <td ></td>
                        <td>
                            <h4><strong>Total</strong></h4></td>
                        <td>
                            <h4><strong>1200\$</strong></h4></td>
                    </tr>

                </tbody>
                <!--/Table body-->
            </table>
    </body>
</html>", "EvaClientBundle:Default:test.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Default/test.html.twig");
    }
}
