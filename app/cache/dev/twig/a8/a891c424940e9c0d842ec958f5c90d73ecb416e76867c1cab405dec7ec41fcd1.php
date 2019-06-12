<?php

/* EvaClientBundle:Layout:layout.html.twig */
class __TwigTemplate_6c84f25f8ccba34c7730a497b512c7932afcfbda63c6123966966b4d2c9f7104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'maincontent' => array($this, 'block_maincontent'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <!--[if IE 9]>
    <html class=\"ie9\" lang=\"en\">    <![endif]-->
    <!--[if IE 8]>
    <html class=\"ie8\" lang=\"en\">    <![endif]-->

    <!-- Mirrored from neuethemes.net/preview/html/folius/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 21:03:13 GMT -->
    <head>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 50
        echo "    </head>



    <body class=\"\">

        <!--Pre-Loader-->
        <div id=\"preloader\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/images/preloader.gif"), "html", null, true);
        echo "\" alt=\"01\"></div>

        <div id=\"wrapper\" class=\"sidebar-left\">

            <a href=\"#menu-toggle\" class=\"\" id=\"menu-toggle\"><span class=\"\" aria-hidden=\"true\"></span></a>

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\" class=\"sidebar-left\">
                <ul class=\"sidebar-nav\">
                    <li class=\"e-divider-4\"></li>
                    <li class=\"sidebar-brand\">
                        <a href=\"#\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/images/logo01.png"), "html", null, true);
        echo "\" width=\"180\" alt=\"logo\"></a>
                    </li>
                    <li class=\"e-divider-4\"></li>
                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"current\">Accueil</a></li>
                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signIn");
        echo "\">S'authentifier</a></li>
                    <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_cart");
        echo "\">Panier</a></li>
                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_wishlist");
        echo "\">Liste des souhaits </a></li>
                    <li><a href=\"contact.html\">Réclamations</a></li>
                </ul>
                <div class=\"e-divider-4\"></div>
                <div class=\"side-widget\">
                    <h6 class=\"font-accident-one-bold e-uppercase\">Visual Impact</h6>
                    <p class=\"small\">
                        There are many variations of passages of Lorem Ipsum available.
                    </p>
                </div>
               
                <div class=\"bottom-widget\">
                    <p class=\"small\">
                        © 2017 Eva Cosmétique.
                    </p>
                    <p class=\"small\">
                        Port Orange 23645, Florida USA
                        Tel: 1 234 345 45 35<br>
                        Matricule fiscale: _ _ _ _
                    </p>
                    <div>
                        <a href=\"#!\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-vimeo-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-pinterest-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-tumblr-square\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Content -->
            <div id=\"page-content-wrapper\" class=\"content-wrap\">

                <!-- Header -->
                <header class=\"cbp-af-header toggled\">
                    <div class=\"cbp-af-inner\">
                        <div class=\"navbar navbar-default\" role=\"navigation\">
                            <div class=\"container-fluid padding-side-50\">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <h1><a href=\"index-2.html\">Folius</a></h1>
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <nav class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                    <ul class=\"nav navbar-nav navbar-right\">
                                        <li><a class=\"category\" href=\"#blog\">Blog</a></li>
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"portfolio-item.html\">Portfolio Item</a></li>
                                                <li><a href=\"blogpost.html\">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"https://wrapbootstrap.com/theme/folius-portfolio-template-WB0674NL1?ref=neuethemes\">Buy The Template</a></li>
                                    </ul>
                                </nav><!-- /.navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- / Header -->

                <!-- Content Sections -->
                <div id=\"content\">

                    <!-- Revolution Slider -->
                    <section class=\"slider-revolution\">
                        <div class=\"rev_slider_wrapper\">
                            <div id=\"slider1\" class=\"rev_slider head-overlay\" data-version=\"5.0\">
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\"
                                        data-thumb=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/images/rs-images/fullslide1-320x200.jpg"), "html", null, true);
        echo "\" data-saveperformance=\"off\"
                                        data-title=\"Slide\">
                                        <!-- MAIN IMAGE -->
                                        <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/images/rs-images/02.jpg"), "html", null, true);
        echo "\" alt=\"fullslide2\"
                                             data-bgposition=\"center center\"
                                             data-bgfit=\"cover\"
                                             data-bgrepeat=\"no-repeat\">
                                        <!-- LAYERS -->


                                        <!-- LAYER NR. 1 -->

                                        <div class=\"tp-caption cap-title font-accident-two-normal color00 e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"40\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"950\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             data-fontsize=\"['36','34','30','20']\"
                                             data-lineheight=\"['120','100','90','80']\"
                                             style=\"z-index: 2;\">Welcome to Folius Portfolio
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class=\"tp-caption cap-sub-subtitle font-regular-normal color00 e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"50\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"1500\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             style=\"z-index: 2;\">HTML Template
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class=\"tp-caption Hero-Button rev-btn  rs-parallaxlevel-2\"
                                             data-x=\"['center','center','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"bottom\"
                                             data-voffset=\"0\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-transform_idle=\"o:1;\"
                                             data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
                                             data-style_hover=\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"

                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                             data-start=\"2000\"
                                             data-splitin=\"none\"
                                             data-splitout=\"none\"
                                             data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                             data-responsive_offset=\"on\"
                                             data-responsive=\"off\"

                                             style=\"z-index: 9; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; border: none; background: rgba(255, 255, 255, .6); color: #252525;\">CONTINUE
                                        </div>

                                    </li>

                                    <!-- SLIDE  -->
                                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\"
                                        data-thumb=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/images/rs-images/fullslide1-320x200.jpg"), "html", null, true);
        echo "\" data-saveperformance=\"off\"
                                        data-title=\"Slide\">
                                        <!-- MAIN IMAGE -->
                                        <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/images/rs-images/01.jpg"), "html", null, true);
        echo "\" alt=\"fullslide2\"
                                             data-bgposition=\"center center\"
                                             data-bgfit=\"cover\"
                                             data-bgrepeat=\"no-repeat\">
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->

                                        <div class=\"tp-caption cap-title font-accident-two-normal e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"40\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"950\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             data-fontsize=\"['36','34','30','20']\"
                                             data-lineheight=\"['120','100','90','80']\"
                                             style=\"z-index: 2;\">We are the Folius Template
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class=\"tp-caption cap-sub-subtitle font-regular-normal e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"50\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"1500\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             style=\"z-index: 2;\">Responsive Personal Portfolio
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class=\"tp-caption Hero-Button rev-btn  rs-parallaxlevel-2\"
                                             data-x=\"['center','center','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"bottom\"
                                             data-voffset=\"0\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-transform_idle=\"o:1;\"
                                             data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
                                             data-style_hover=\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"

                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                             data-start=\"2000\"
                                             data-splitin=\"none\"
                                             data-splitout=\"none\"
                                             data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                             data-responsive_offset=\"on\"
                                             data-responsive=\"off\"

                                             style=\"z-index: 9; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; border: none; background: rgba(255, 255, 255, .6); color: #252525;\">CONTINUE
                                        </div>

                                    </li>


                                </ul>
                                <div class=\"tp-bannertimer\"></div>
                            </div>

                        </div>
                    </section>
                    <!-- /Revolution Slider -->


                    <div class=\"row\">


                        <!-- Category-->
                        <div style=\"margin-left: 80px;\" class=\"span12\">
                            <h1 class=\"categorytitle\"><span>Women Wear Category</span></h1>
                            <!-- Slider-->

                            <!-- Category Products-->
                            <section id=\"latest\">
                                <div class=\"row\">
                                    <div class=\"span12\">
                                        <div class=\"sorting well\">
                                            <form class=\" form-inline pull-left\">
                                                Sort By :
                                                <select class=\"span2\">
                                                    <option>Default</option>
                                                    <option>Name</option>
                                                    <option>Pirce</option>
                                                    <option>Rating </option>
                                                    <option>Color</option>
                                                </select>
                                                &nbsp;&nbsp;
                                                Show:
                                                <select class=\"span1\">
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                </select>
                                            </form>
                                            <div class=\"btn-group pull-right\">
                                                <button class=\"btn\" id=\"list\"><i class=\"icon-th-list\"></i>
                                                </button>
                                                <button class=\"btn btn-success\" id=\"grid\"><i class=\"icon-th icon-white\"></i></button>
                                            </div>
                                        </div>
                                        <section id=\"thumbnails\">
                                            <ul class=\"thumbnails grid\">
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <span class=\"sale tooltip-test\" >Sale</span>
                                                        <a href=\"product.html\"><img alt=\"\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l2.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\"><img alt=\"\" src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <span class=\"offer tooltip-test\" >Offer</span>
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l2.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class=\"thumbnails list\">
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <span class=\"offer tooltip-test\" >Sale</span>
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/product-l1.jpg"), "html", null, true);
        echo "\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"pagination pull-right\">
                                                <ul>
                                                    <li><a href=\"#\">Prev</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">1</a>
                                                    </li>
                                                    <li><a href=\"#\">2</a>
                                                    </li>
                                                    <li><a href=\"#\">3</a>
                                                    </li>
                                                    <li><a href=\"#\">4</a>
                                                    </li>
                                                    <li><a href=\"#\">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>


                            <div class=\"main-content\">
                                ";
        // line 632
        $this->displayBlock('maincontent', $context, $blocks);
        // line 635
        echo "
                            </div>
                            <!-- /Content -->

                        </div>
                    </div>


                    <div id=\"image-cache\" class=\"hidden\"></div>

                    ";
        // line 645
        $this->displayBlock('javascript', $context, $blocks);
        // line 786
        echo "













                    </body>

                    <!-- Mirrored from neuethemes.net/preview/html/folius/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 21:03:53 GMT -->
                    </html>
";
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "
            <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=viewport content=\"width=device-width, initial-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"keywords\" content=\"\">


            ";
        // line 21
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 48
        echo "
        ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 21
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 22
        echo "
                <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/animatedheader/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
                <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/jquery/js/jquery-2.2.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>

                <!-- CSS -->
                <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/pe-icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/mfp/css/magnific-popup.min.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

                <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/css/layers.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/css/navigation.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/owl-carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

                <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/css/style.css"), "html", null, true);
        echo "\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
                <script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>




            ";
    }

    // line 632
    public function block_maincontent($context, array $blocks = array())
    {
        // line 633
        echo "
                                ";
    }

    // line 645
    public function block_javascript($context, array $blocks = array())
    {
        // line 646
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/animatedheader/js/classie.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/animatedheader/js/cbpAnimatedHeader.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/imagesloaded/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/isotope/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/jquery-parallax/js/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/mfp/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/anicounter/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/assets/vendor/waypoints/waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/goalprogress/goalProgress.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

                        <script type=\"text/javascript\" src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/jquery.themepunch.tools.min838f.js?rev=5.0"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/jquery.themepunch.revolution.min838f.js?rev=5.0"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\" src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>


                        <!-- Custom scripts -->
                        <script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/custom/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                        <script>
                            \$(document).ready(function () {

                                //click on category scroll to grid
                                \$(\".category\").click(function () {
                                    \$('html, body').animate({scrollTop: \$(\".main-content\").offset().top}, 500);

                                });






                            });
                        </script>
                        <script>


                            function addToCart(\$id, \$name) {
                                \$.ajax({
                                    type: 'GET',
                                    dataType: 'json',
                                    url: '../app_dev.php/addcart/' + \$id,
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (data) {

                                        if (data.test === true) {

                                            \$.gritter.add({
                                                // (string | mandatory) the heading of the notification
                                                title: 'Ajout au panier!',
                                                // (string | mandatory) the text inside the notification
                                                text: data[\"name\"] + 'a été ajouté à <a href=\"";
        // line 706
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_cart");
        echo "\" style=\"text-decoration : underline;color:#ccc\">votre panier</a>',
                                                // (string | optional) the image to display on the left
                                                image: '../uploads/product/' + data[\"image\"],
                                                // (bool | optional) if you want it to fade out on its own or just sit there
                                                sticky: false,
                                                // (int | optional) the time you want it to be alive for before fading out
                                                time: ''
                                            });

                                        }
                                    }
                                });
                            }



                            function addToWishlist(\$id) {
                                \$.ajax({
                                    type: 'GET',
                                    dataType: 'json',
                                    url: '../app_dev.php/addwishlist/' + \$id,
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (data) {

                                        if (data.test === true) {
                                            \$.gritter.add({
                                                // (string | mandatory) the heading of the notification
                                                title: 'Ajout à la liste des souhaits!',
                                                // (string | mandatory) the text inside the notification
                                                text: data[\"name\"] + 'a été ajouté à <a href=\"";
        // line 737
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_wishlist");
        echo "\" style=\"text-decoration : underline;color:#ccc\">votre liste des souhaits </a>',
                                                // (string | optional) the image to display on the left
                                                image: '../uploads/product/' + data[\"image\"],
                                                // (bool | optional) if you want it to fade out on its own or just sit there
                                                sticky: false,
                                                // (int | optional) the time you want it to be alive for before fading out
                                                time: ''
                                            });

                                        }

                                    }
                                });
                            }



                        </script>






                        <script>
                            window.alert = function () {};
                            var defaultCSS = document.getElementById('bootstrap-css');
                            function changeCSS(css) {
                                if (css)
                                    \$('head > link').filter(':first').replaceWith('<link rel=\"stylesheet\" href=\"' + css + '\" type=\"text/css\" />');
                                else
                                    \$('head > link').filter(':first').replaceWith(defaultCSS);
                            }
                            \$(document).ready(function () {
                                var iframe_height = parseInt(\$('html').height());
                                window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
                            });
                        </script>






                        <script defer src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/custom.js"), "html", null, true);
        echo "\"></script>



                    ";
    }

    public function getTemplateName()
    {
        return "EvaClientBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1039 => 781,  992 => 737,  958 => 706,  919 => 670,  912 => 666,  908 => 665,  904 => 664,  900 => 663,  896 => 662,  892 => 661,  888 => 660,  884 => 659,  880 => 658,  875 => 656,  871 => 655,  867 => 654,  863 => 653,  859 => 652,  855 => 651,  851 => 650,  847 => 649,  843 => 648,  839 => 647,  834 => 646,  831 => 645,  826 => 633,  823 => 632,  813 => 42,  808 => 40,  803 => 38,  798 => 36,  794 => 35,  790 => 34,  786 => 33,  781 => 31,  777 => 30,  773 => 29,  766 => 25,  761 => 23,  758 => 22,  755 => 21,  750 => 12,  745 => 48,  743 => 21,  731 => 12,  728 => 11,  725 => 10,  703 => 786,  701 => 645,  689 => 635,  687 => 632,  640 => 588,  614 => 565,  587 => 541,  561 => 518,  538 => 498,  517 => 480,  496 => 462,  475 => 444,  453 => 425,  433 => 408,  412 => 390,  391 => 372,  257 => 241,  251 => 238,  168 => 158,  162 => 155,  78 => 74,  74 => 73,  70 => 72,  66 => 71,  60 => 68,  46 => 57,  37 => 50,  35 => 10,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <!--[if IE 9]>
    <html class=\"ie9\" lang=\"en\">    <![endif]-->
    <!--[if IE 8]>
    <html class=\"ie8\" lang=\"en\">    <![endif]-->

    <!-- Mirrored from neuethemes.net/preview/html/folius/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 21:03:13 GMT -->
    <head>
        {% block head %}

            <title>{% block title %}{% endblock %}</title>

            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=viewport content=\"width=device-width, initial-scale=1\">
            <meta name=\"description\" content=\"\">
            <meta name=\"keywords\" content=\"\">


            {% block stylesheet %}

                <script src=\"{{asset('bundles/evaclient/vendor/animatedheader/js/modernizr.custom.js')}}\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
                <script src=\"{{asset('bundles/evaclient/vendor/jquery/js/jquery-2.2.0.min.js')}}\" type=\"text/javascript\"></script>
                <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>

                <!-- CSS -->
                <link href=\"{{asset('bundles/evaclient/vendor/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"{{asset('bundles/evaclient/vendor/mfp/css/magnific-popup.min.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"{{asset('bundles/evaclient/vendor/fontawesome/css/font-awesome.min.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

                <link href=\"{{asset('bundles/evaclient/vendor/rs-plugin/css/settings.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"{{asset('bundles/evaclient/vendor/rs-plugin/css/layers.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"{{asset('bundles/evaclient/vendor/rs-plugin/css/navigation.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
                <link href=\"{{asset('bundles/evaclient/vendor/owl-carousel/assets/owl.carousel.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

                <link href=\"{{asset('bundles/evaclient/custom/css/style.css')}}\" property='stylesheet' rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('bundles/evaclient/css/jquery.gritter.css')}}\" />
                <script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>
                <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/js/jquery.gritter.js')}}\"></script>




            {% endblock %}

        {% endblock %}
    </head>



    <body class=\"\">

        <!--Pre-Loader-->
        <div id=\"preloader\"><img src=\"{{asset('bundles/evaclient/custom/images/preloader.gif')}}\" alt=\"01\"></div>

        <div id=\"wrapper\" class=\"sidebar-left\">

            <a href=\"#menu-toggle\" class=\"\" id=\"menu-toggle\"><span class=\"\" aria-hidden=\"true\"></span></a>

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\" class=\"sidebar-left\">
                <ul class=\"sidebar-nav\">
                    <li class=\"e-divider-4\"></li>
                    <li class=\"sidebar-brand\">
                        <a href=\"#\"><img src=\"{{asset('bundles/evaclient/custom/images/logo01.png')}}\" width=\"180\" alt=\"logo\"></a>
                    </li>
                    <li class=\"e-divider-4\"></li>
                    <li><a href=\"{{path('homepage')}}\" class=\"current\">Accueil</a></li>
                    <li><a href=\"{{path('signIn')}}\">S'authentifier</a></li>
                    <li><a href=\"{{path('show_cart')}}\">Panier</a></li>
                    <li><a href=\"{{path('show_wishlist')}}\">Liste des souhaits </a></li>
                    <li><a href=\"contact.html\">Réclamations</a></li>
                </ul>
                <div class=\"e-divider-4\"></div>
                <div class=\"side-widget\">
                    <h6 class=\"font-accident-one-bold e-uppercase\">Visual Impact</h6>
                    <p class=\"small\">
                        There are many variations of passages of Lorem Ipsum available.
                    </p>
                </div>
               
                <div class=\"bottom-widget\">
                    <p class=\"small\">
                        © 2017 Eva Cosmétique.
                    </p>
                    <p class=\"small\">
                        Port Orange 23645, Florida USA
                        Tel: 1 234 345 45 35<br>
                        Matricule fiscale: _ _ _ _
                    </p>
                    <div>
                        <a href=\"#!\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-vimeo-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-pinterest-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a>
                        <a href=\"#!\"><i class=\"fa fa-tumblr-square\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Content -->
            <div id=\"page-content-wrapper\" class=\"content-wrap\">

                <!-- Header -->
                <header class=\"cbp-af-header toggled\">
                    <div class=\"cbp-af-inner\">
                        <div class=\"navbar navbar-default\" role=\"navigation\">
                            <div class=\"container-fluid padding-side-50\">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <h1><a href=\"index-2.html\">Folius</a></h1>
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <nav class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                    <ul class=\"nav navbar-nav navbar-right\">
                                        <li><a class=\"category\" href=\"#blog\">Blog</a></li>
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a href=\"portfolio-item.html\">Portfolio Item</a></li>
                                                <li><a href=\"blogpost.html\">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"https://wrapbootstrap.com/theme/folius-portfolio-template-WB0674NL1?ref=neuethemes\">Buy The Template</a></li>
                                    </ul>
                                </nav><!-- /.navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- / Header -->

                <!-- Content Sections -->
                <div id=\"content\">

                    <!-- Revolution Slider -->
                    <section class=\"slider-revolution\">
                        <div class=\"rev_slider_wrapper\">
                            <div id=\"slider1\" class=\"rev_slider head-overlay\" data-version=\"5.0\">
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\"
                                        data-thumb=\"{{asset('bundles/evaclient/custom/images/rs-images/fullslide1-320x200.jpg')}}\" data-saveperformance=\"off\"
                                        data-title=\"Slide\">
                                        <!-- MAIN IMAGE -->
                                        <img src=\"{{asset('bundles/evaclient/custom/images/rs-images/02.jpg')}}\" alt=\"fullslide2\"
                                             data-bgposition=\"center center\"
                                             data-bgfit=\"cover\"
                                             data-bgrepeat=\"no-repeat\">
                                        <!-- LAYERS -->


                                        <!-- LAYER NR. 1 -->

                                        <div class=\"tp-caption cap-title font-accident-two-normal color00 e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"40\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"950\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             data-fontsize=\"['36','34','30','20']\"
                                             data-lineheight=\"['120','100','90','80']\"
                                             style=\"z-index: 2;\">Welcome to Folius Portfolio
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class=\"tp-caption cap-sub-subtitle font-regular-normal color00 e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"50\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"1500\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             style=\"z-index: 2;\">HTML Template
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class=\"tp-caption Hero-Button rev-btn  rs-parallaxlevel-2\"
                                             data-x=\"['center','center','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"bottom\"
                                             data-voffset=\"0\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-transform_idle=\"o:1;\"
                                             data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
                                             data-style_hover=\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"

                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                             data-start=\"2000\"
                                             data-splitin=\"none\"
                                             data-splitout=\"none\"
                                             data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                             data-responsive_offset=\"on\"
                                             data-responsive=\"off\"

                                             style=\"z-index: 9; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; border: none; background: rgba(255, 255, 255, .6); color: #252525;\">CONTINUE
                                        </div>

                                    </li>

                                    <!-- SLIDE  -->
                                    <li data-transition=\"fade\" data-slotamount=\"1\" data-masterspeed=\"1000\"
                                        data-thumb=\"{{asset('bundles/evaclient/custom/images/rs-images/fullslide1-320x200.jpg')}}\" data-saveperformance=\"off\"
                                        data-title=\"Slide\">
                                        <!-- MAIN IMAGE -->
                                        <img src=\"{{asset('bundles/evaclient/custom/images/rs-images/01.jpg')}}\" alt=\"fullslide2\"
                                             data-bgposition=\"center center\"
                                             data-bgfit=\"cover\"
                                             data-bgrepeat=\"no-repeat\">
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->

                                        <div class=\"tp-caption cap-title font-accident-two-normal e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"40\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"950\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             data-fontsize=\"['36','34','30','20']\"
                                             data-lineheight=\"['120','100','90','80']\"
                                             style=\"z-index: 2;\">We are the Folius Template
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class=\"tp-caption cap-sub-subtitle font-regular-normal e-uppercase tp-resizeme rs-parallaxlevel-2\"
                                             data-x=\"center\"
                                             data-y=\"bottom\"
                                             data-basealign=\"grid\"
                                             data-voffset=\"50\"
                                             data-hoffset=\"0\"
                                             data-width=”auto”
                                             data-height=”auto”
                                             data-whitespace=”[‘nowrap’,’normal’,’normal’,’normal’]”
                                             data-transform_idle=\"o:1;\"
                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-start=\"1500\"
                                             data-splitin=”none”
                                             data-splitout=”none”
                                             data-responsive_offset=”on”
                                             style=\"z-index: 2;\">Responsive Personal Portfolio
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class=\"tp-caption Hero-Button rev-btn  rs-parallaxlevel-2\"
                                             data-x=\"['center','center','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"bottom\"
                                             data-voffset=\"0\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-transform_idle=\"o:1;\"
                                             data-transform_hover=\"o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;\"
                                             data-style_hover=\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;\"

                                             data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\"
                                             data-transform_out=\"auto:auto;s:700;\"
                                             data-mask_out=\"x:inherit;y:inherit;s:inherit;e:inherit;\"
                                             data-start=\"2000\"
                                             data-splitin=\"none\"
                                             data-splitout=\"none\"
                                             data-actions='[{\"event\":\"click\",\"action\":\"scrollbelow\",\"offset\":\"0px\"}]'
                                             data-responsive_offset=\"on\"
                                             data-responsive=\"off\"

                                             style=\"z-index: 9; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; border: none; background: rgba(255, 255, 255, .6); color: #252525;\">CONTINUE
                                        </div>

                                    </li>


                                </ul>
                                <div class=\"tp-bannertimer\"></div>
                            </div>

                        </div>
                    </section>
                    <!-- /Revolution Slider -->


                    <div class=\"row\">


                        <!-- Category-->
                        <div style=\"margin-left: 80px;\" class=\"span12\">
                            <h1 class=\"categorytitle\"><span>Women Wear Category</span></h1>
                            <!-- Slider-->

                            <!-- Category Products-->
                            <section id=\"latest\">
                                <div class=\"row\">
                                    <div class=\"span12\">
                                        <div class=\"sorting well\">
                                            <form class=\" form-inline pull-left\">
                                                Sort By :
                                                <select class=\"span2\">
                                                    <option>Default</option>
                                                    <option>Name</option>
                                                    <option>Pirce</option>
                                                    <option>Rating </option>
                                                    <option>Color</option>
                                                </select>
                                                &nbsp;&nbsp;
                                                Show:
                                                <select class=\"span1\">
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                </select>
                                            </form>
                                            <div class=\"btn-group pull-right\">
                                                <button class=\"btn\" id=\"list\"><i class=\"icon-th-list\"></i>
                                                </button>
                                                <button class=\"btn btn-success\" id=\"grid\"><i class=\"icon-th icon-white\"></i></button>
                                            </div>
                                        </div>
                                        <section id=\"thumbnails\">
                                            <ul class=\"thumbnails grid\">
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <span class=\"sale tooltip-test\" >Sale</span>
                                                        <a href=\"product.html\"><img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l2.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\"><img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <span class=\"offer tooltip-test\" >Offer</span>
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l2.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics </a>
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product.html\">
                                                            <img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                        <div class=\"caption\">
                                                            <div class=\"price pull-left\">
                                                                <span class=\"oldprice\">\$2225.00</span>
                                                                <span class=\"newprice\">\$2225.00</span>
                                                            </div>
                                                            <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                            <div class=\"links pull-left\"><a class=\"info\" href=\"product.html\">info</a>
                                                                <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                <a class=\"compare\" href=\"compare.html\">compare</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class=\"thumbnails list\">
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <span class=\"offer tooltip-test\" >Sale</span>
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span12\">
                                                    <a class=\"prdocutname\" href=\"#\">First Fashion Fabrics</a>
                                                    <div class=\"thumbnail\">
                                                        <div class=\"row\">
                                                            <a class=\"span3\" href=\"product.html\"><img alt=\"\" src=\"{{asset('bundles/evaclient/img/product-l1.jpg')}}\"></a>
                                                            <div class=\"details span6\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                                                            </div>
                                                            <div class=\"caption\">
                                                                <div class=\"price pull-right\">
                                                                    <span class=\"oldprice\">\$2225.00</span>
                                                                    <span class=\"newprice\">\$2225.00</span>
                                                                </div>
                                                                <a class=\"cartadd pull-right tooltip-test\" title=\"Add to Cart\"> Add to Cart </a>
                                                                <span class=\"links pull-right\"><a class=\"info\" href=\"product.html\">info</a>
                                                                    <a class=\"wishlist\" href=\"wishlist.html\">wishlist</a>
                                                                    <a class=\"compare\" href=\"compare.html\">compare</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"pagination pull-right\">
                                                <ul>
                                                    <li><a href=\"#\">Prev</a>
                                                    </li>
                                                    <li class=\"active\">
                                                        <a href=\"#\">1</a>
                                                    </li>
                                                    <li><a href=\"#\">2</a>
                                                    </li>
                                                    <li><a href=\"#\">3</a>
                                                    </li>
                                                    <li><a href=\"#\">4</a>
                                                    </li>
                                                    <li><a href=\"#\">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>


                            <div class=\"main-content\">
                                {% block  maincontent %}

                                {% endblock %}

                            </div>
                            <!-- /Content -->

                        </div>
                    </div>


                    <div id=\"image-cache\" class=\"hidden\"></div>

                    {% block javascript %}
                        <script src=\"{{asset('bundles/evaclient/vendor/animatedheader/js/classie.js')}}\"></script>
                        <script src=\"{{asset('bundles/evaclient/vendor/animatedheader/js/cbpAnimatedHeader.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/imagesloaded/js/imagesloaded.pkgd.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/isotope/js/isotope.pkgd.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/jquery-parallax/js/jquery.parallax-1.1.3.js')}}\"></script>
                        <script src=\"{{asset('bundles/evaclient/vendor/mfp/js/jquery.magnific-popup.min.js')}}\" type=\"text/javascript\"></script>
                        <script src=\"{{asset('bundles/evaclient/vendor/anicounter/jquery.counterup.min.js')}}\" type=\"text/javascript\"></script>
                        <script src=\"{{asset('bundles/evaclient/vendor/circle-progress/circle-progress.min.js')}}\" type=\"text/javascript\"></script>
                        <script src=\"{{asset('bundles/evaclient/assets/vendor/waypoints/waypoints.min.js')}}\" type=\"text/javascript\"></script>
                        <script src=\"{{asset('bundles/evaclient/vendor/goalprogress/goalProgress.min.js')}}\" type=\"text/javascript\"></script>
                        <script src=\"{{asset('bundles/evaclient/vendor/owl-carousel/owl.carousel.min.js')}}\" type=\"text/javascript\"></script>

                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/jquery.themepunch.tools.min838f.js?rev=5.0')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/jquery.themepunch.revolution.min838f.js?rev=5.0')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}\"></script>
                        <script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/vendor/rs-plugin/js/extensions/revolution.extension.video.min.js')}}\"></script>


                        <!-- Custom scripts -->
                        <script src=\"{{asset('bundles/evaclient/custom/js/script.js')}}\" type=\"text/javascript\"></script>
                        <script>
                            \$(document).ready(function () {

                                //click on category scroll to grid
                                \$(\".category\").click(function () {
                                    \$('html, body').animate({scrollTop: \$(\".main-content\").offset().top}, 500);

                                });






                            });
                        </script>
                        <script>


                            function addToCart(\$id, \$name) {
                                \$.ajax({
                                    type: 'GET',
                                    dataType: 'json',
                                    url: '../app_dev.php/addcart/' + \$id,
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (data) {

                                        if (data.test === true) {

                                            \$.gritter.add({
                                                // (string | mandatory) the heading of the notification
                                                title: 'Ajout au panier!',
                                                // (string | mandatory) the text inside the notification
                                                text: data[\"name\"] + 'a été ajouté à <a href=\"{{ path('show_cart') }}\" style=\"text-decoration : underline;color:#ccc\">votre panier</a>',
                                                // (string | optional) the image to display on the left
                                                image: '../uploads/product/' + data[\"image\"],
                                                // (bool | optional) if you want it to fade out on its own or just sit there
                                                sticky: false,
                                                // (int | optional) the time you want it to be alive for before fading out
                                                time: ''
                                            });

                                        }
                                    }
                                });
                            }



                            function addToWishlist(\$id) {
                                \$.ajax({
                                    type: 'GET',
                                    dataType: 'json',
                                    url: '../app_dev.php/addwishlist/' + \$id,
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (data) {

                                        if (data.test === true) {
                                            \$.gritter.add({
                                                // (string | mandatory) the heading of the notification
                                                title: 'Ajout à la liste des souhaits!',
                                                // (string | mandatory) the text inside the notification
                                                text: data[\"name\"] + 'a été ajouté à <a href=\"{{ path('show_wishlist') }}\" style=\"text-decoration : underline;color:#ccc\">votre liste des souhaits </a>',
                                                // (string | optional) the image to display on the left
                                                image: '../uploads/product/' + data[\"image\"],
                                                // (bool | optional) if you want it to fade out on its own or just sit there
                                                sticky: false,
                                                // (int | optional) the time you want it to be alive for before fading out
                                                time: ''
                                            });

                                        }

                                    }
                                });
                            }



                        </script>






                        <script>
                            window.alert = function () {};
                            var defaultCSS = document.getElementById('bootstrap-css');
                            function changeCSS(css) {
                                if (css)
                                    \$('head > link').filter(':first').replaceWith('<link rel=\"stylesheet\" href=\"' + css + '\" type=\"text/css\" />');
                                else
                                    \$('head > link').filter(':first').replaceWith(defaultCSS);
                            }
                            \$(document).ready(function () {
                                var iframe_height = parseInt(\$('html').height());
                                window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
                            });
                        </script>






                        <script defer src=\"{{asset('bundles/evaclient/js/custom.js')}}\"></script>



                    {% endblock %}














                    </body>

                    <!-- Mirrored from neuethemes.net/preview/html/folius/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2017 21:03:53 GMT -->
                    </html>
", "EvaClientBundle:Layout:layout.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Layout/layout.html.twig");
    }
}
