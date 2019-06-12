<?php

/* EvaClientBundle:Home:home.html.twig */
class __TwigTemplate_71dd9943ac5286c4fc04b86df44b65e694e5a4be8e3942a2a24d9c6b01197181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EvaClientBundle:Layout:layout.html.twig", "EvaClientBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvaClientBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "accueil";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "

   
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.css\">

    <script src=\"https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.min.js\"></script>
    <style type=\"text/css\">
      
      .main-content .popular {
      background: #fff;
    }
    .main-content .popular .item {
      float: left !important;
      width: 25% !important;
      text-align: center !important;
      position: relative!important;
      padding-bottom: 20px !important;
    }
    .main-content .popular .item:after {
      content: \"\" !important;
      width: 2px !important;
      height: 100% !important;
      background: #f5f5f5 !important;
      position: absolute !important;
      right: 0;
      top: 0;
    }
    .main-content .popular .item p {
      text-align: left;
      padding-left: 20px;
    }
    .main-content .popular .item p a {
      font-size: 16px;
      color: #414a56;
    }





  #test {
      width: 250px;
  }


    </style>
    <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <style type=\"text/css\">
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
        .col-item
        {
            border: 1px solid #E1E1E1;
            border-radius: 5px;
            background: #FFF;
        }
        .col-item .photo img
        {
            margin: 0 auto;
            width: 100%;
        }

        .photo{
            position: relative;
            display: inline-block;
            height: 100%;
            cursor:pointer;

        }

        .photo .img-top {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
        }
        .photo:hover .img-top  {
            display: inline;
        }


        .col-item .info
        {
            padding: 10px;
            border-radius: 0 0 5px 5px;
            margin-top: 1px;
        }

        .col-item:hover .info {
            background-color: #F5F5DC;
        }

        .col-item .price
        {
            /*width: 50%;*/
            float: left;
            margin-top: 5px;
        }

        .col-item .price h5
        {
            line-height: 20px;
            margin: 0;
        }

        .price-text-color
        {
            color: #219FD1;
        }

        .col-item .info .rating
        {
            color: #777;
        }

        .col-item .rating
        {
            /*width: 50%;*/
            float: left;
            font-size: 17px;
            text-align: right;
            line-height: 52px;
            margin-bottom: 10px;
            height: 52px;
        }

        .col-item .separator
        {
            border-top: 1px solid #E1E1E1;
        }

        .clear-left
        {
            clear: left;
        }

        .col-item .separator p
        {
            line-height: 20px;
            margin-bottom: 0;
            margin-top: 10px;
            text-align: center;
        }

        .col-item .separator p i
        {
            margin-right: 5px;
        }
        .col-item .btn-add
        {
            width: 50%;
            float: left;
        }

        .col-item .btn-add
        {
            border-right: 1px solid #E1E1E1;
        }

        .col-item .btn-details
        {
            width: 50%;
            float: left;
            padding-left: 10px;
        }
        .controls
        {
            margin-top: 20px;
        }
        [data-slide=\"prev\"]
        {
            margin-right: 10px;
        }
    </style>
    


";
    }

    // line 191
    public function block_maincontent($context, array $blocks = array())
    {
        // line 192
        echo "    
    ";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EvaClientBundle:Offer:availableOffers"));
        echo "
    ";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EvaClientBundle:Product:newestProducts"));
        echo "
    ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EvaClientBundle:Product:bestSellerProducts"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "EvaClientBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 195,  247 => 194,  243 => 193,  240 => 192,  237 => 191,  56 => 12,  52 => 11,  48 => 10,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EvaClientBundle:Layout:layout.html.twig' %}

{% block title %}accueil{% endblock %}

{% block stylesheet %}

    {{ parent() }}

   
    <link href=\"{{asset('bundles/evaclient/css/bootstrap.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('bundles/evaclient/css/bootstrap-responsive.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('bundles/evaclient/css/style.css')}}\" rel=\"stylesheet\">
   
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.css\">

    <script src=\"https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.min.js\"></script>
    <style type=\"text/css\">
      
      .main-content .popular {
      background: #fff;
    }
    .main-content .popular .item {
      float: left !important;
      width: 25% !important;
      text-align: center !important;
      position: relative!important;
      padding-bottom: 20px !important;
    }
    .main-content .popular .item:after {
      content: \"\" !important;
      width: 2px !important;
      height: 100% !important;
      background: #f5f5f5 !important;
      position: absolute !important;
      right: 0;
      top: 0;
    }
    .main-content .popular .item p {
      text-align: left;
      padding-left: 20px;
    }
    .main-content .popular .item p a {
      font-size: 16px;
      color: #414a56;
    }





  #test {
      width: 250px;
  }


    </style>
    <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <style type=\"text/css\">
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
        .col-item
        {
            border: 1px solid #E1E1E1;
            border-radius: 5px;
            background: #FFF;
        }
        .col-item .photo img
        {
            margin: 0 auto;
            width: 100%;
        }

        .photo{
            position: relative;
            display: inline-block;
            height: 100%;
            cursor:pointer;

        }

        .photo .img-top {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
        }
        .photo:hover .img-top  {
            display: inline;
        }


        .col-item .info
        {
            padding: 10px;
            border-radius: 0 0 5px 5px;
            margin-top: 1px;
        }

        .col-item:hover .info {
            background-color: #F5F5DC;
        }

        .col-item .price
        {
            /*width: 50%;*/
            float: left;
            margin-top: 5px;
        }

        .col-item .price h5
        {
            line-height: 20px;
            margin: 0;
        }

        .price-text-color
        {
            color: #219FD1;
        }

        .col-item .info .rating
        {
            color: #777;
        }

        .col-item .rating
        {
            /*width: 50%;*/
            float: left;
            font-size: 17px;
            text-align: right;
            line-height: 52px;
            margin-bottom: 10px;
            height: 52px;
        }

        .col-item .separator
        {
            border-top: 1px solid #E1E1E1;
        }

        .clear-left
        {
            clear: left;
        }

        .col-item .separator p
        {
            line-height: 20px;
            margin-bottom: 0;
            margin-top: 10px;
            text-align: center;
        }

        .col-item .separator p i
        {
            margin-right: 5px;
        }
        .col-item .btn-add
        {
            width: 50%;
            float: left;
        }

        .col-item .btn-add
        {
            border-right: 1px solid #E1E1E1;
        }

        .col-item .btn-details
        {
            width: 50%;
            float: left;
            padding-left: 10px;
        }
        .controls
        {
            margin-top: 20px;
        }
        [data-slide=\"prev\"]
        {
            margin-right: 10px;
        }
    </style>
    


{% endblock %}  


{% block maincontent %}
    
    {{ render(controller('EvaClientBundle:Offer:availableOffers'))  }}
    {{ render(controller('EvaClientBundle:Product:newestProducts'))  }}
    {{ render(controller('EvaClientBundle:Product:bestSellerProducts'))  }}
{% endblock %} 


", "EvaClientBundle:Home:home.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Home/home.html.twig");
    }
}
