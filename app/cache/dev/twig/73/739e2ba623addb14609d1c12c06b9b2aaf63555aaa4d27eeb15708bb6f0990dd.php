<?php

/* EvaClientBundle:Layout:layout2.html.twig */
class __TwigTemplate_18a59c7f54aede375a2a22439758ce7456d65b099cba09477a059379479c7891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'detail' => array($this, 'block_detail'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<!-- styles -->
";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body>
<!-- Header Start -->
<header>
  <!-- Sticky Navbar Start -->
  <div class=\"navbar navbar-fixed-top\" id=\"main-nav\">
    <div class=\"container\">
      <button data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\" type=\"button\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      </button>
      <nav class=\"nav-collapse collapse\" style=\"height:0px\">
        <ul class=\"nav\">
          <li class=\"active\"><a href=\"index-2.html\">Home</a>
          </li>
          <li><a href=\"myaccount.html\">My Account </a>
          </li>
          <li><a href=\"shopping-cart.html\">Shopping Cart</a>
          </li>
          <li><a href=\"checkout.html\">Checkout</a>
          </li>
        </ul>
      </nav>
      <ul class=\"nav pull-right left-tablet\">
        <li class=\"dropdown hover\">
          <a data-toggle=\"\" class=\"dropdown-toggle\" href=\"#\">US Doller <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu currency\">
            <li><a href=\"#\">US Doller</a>
            </li>
            <li><a href=\"#\">Euro </a>
            </li>
            <li><a href=\"#\">British Pound</a>
            </li>
          </ul>
        </li>
        <li class=\"dropdown hover\">
          <a data-toggle=\"\" class=\"dropdown-toggle\" href=\"#\">English <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu language\">
            <li><a href=\"#\">English</a>
            </li>
            <li><a href=\"#\">Spanish</a>
            </li>
            <li><a href=\"#\">German</a>
            </li>
          </ul>
        </li>
        <li class=\"dropdown hover topcart\">
          <a  class=\"dropdown-toggle\" href=\"#\">
            <i class=\"carticon\"></i> Shopping Cart <span class=\"label label-success font14\">1 item(s)</span> - \$589.50<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu topcartopen\">
            <li>
              <table>
                <tbody>
                  <tr>
                    <td class=\"image\"><a href=\"product.html\"><img title=\"product\" alt=\"product\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/prodcut-40x40.jpg"), "html", null, true);
        echo "\" height=\"50\" width=\"50\"></a></td>
                    <td class=\"name\"><a href=\"product.html\">MacBook</a></td>
                    <td class=\"quantity\">x&nbsp;1</td>
                    <td class=\"total\">\$589.50</td>
                    <td class=\"remove\"><i class=\"icon-remove\"></i></td>
                  </tr>
                  <tr>
                    <td class=\"image\"><a href=\"product.html\"><img title=\"product\" alt=\"product\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/prodcut-40x40.jpg"), "html", null, true);
        echo "\" height=\"50\" width=\"50\"></a></td>
                    <td class=\"name\"><a href=\"product.html\">MacBook</a></td>
                    <td class=\"quantity\">x&nbsp;1</td>
                    <td class=\"total\">\$589.50</td>
                    <td class=\"remove\"><i class=\"icon-remove \"></i></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                  <tr>
                    <td class=\"textright\"><b>Sub-Total:</b></td>
                    <td class=\"textright\">\$500.00</td>
                  </tr>
                  <tr>
                    <td class=\"textright\"><b>Eco Tax (-2.00):</b></td>
                    <td class=\"textright\">\$2.00</td>
                  </tr>
                  <tr>
                    <td class=\"textright\"><b>VAT (17.5%):</b></td>
                    <td class=\"textright\">\$87.50</td>
                  </tr>
                  <tr>
                    <td class=\"textright\"><b>Total:</b></td>
                    <td class=\"textright\">\$589.50</td>
                  </tr>
                </tbody>
              </table>
              <div class=\"well pull-right\">
                <a href=\"#\" class=\"btn btn-success\">View Cart</a>
                <a href=\"#\" class=\"btn btn-success\">Checkout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!--Sticky Navbar End -->
  <div class=\"header-white\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <a class=\"logo\" href=\"index-2.html\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/img/logo.png"), "html", null, true);
        echo "\" alt=\"ShopSimple\" title=\"ShopSimple\"></a>
        </div>
        <div class=\"span8\">
          <div class=\"row\">
            <div class=\"pull-right logintext\">Welcome Px,  you can <a href=\"login.html\">login </a>
              or <a href=\"register.html\">create an account</a>
            </div>
          </div>
          <form class=\"form-search marginnull topsearch pull-right\">
            <input type=\"text\" class=\"input-large search-query search-icon-top\" value=\"Search here...\"  onFocus=\"if (this.value=='Search here...') this.value='';\" onblur=\"if (this.value=='') this.value='Search here...';\"
        >
          </form>
        </div>
      </div>
    </div>
    <div  id=\"categorymenu\">
      <div class=\"container\">
        <nav class=\"subnav\">
          <ul class=\"nav-pills categorymenu\">
            <li><a href=\"index-2.html\">Home</a>
              <div>
                <ul class=\"arrow\">
                  <li><a href=\"home-sidebar.html\">Home 2-column</a>
                  </li>
                  <li><a href=\"index-2.html\">Home 1-column</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class=\"active\" href=\"product.html\">Products</a>
              <div>
                <ul class=\"arrow\">
                  <li><a class=\"bold\" href=\"product.html\">Product Full </a>
                  </li>
                  <li><a class=\"bold\" href=\"product-sidebar.html\"> Product 2 Column </a>
                  </li>
                  <li><a href=\"#\"> Suits & shirts </a>
                  </li>
                  <li><a href=\"#\"> Shoes <span class=\"label label-info\">(new)</span></a>
                  </li>
                  <li><a href=\"#\">Jackets & Coats <span class=\"label label-warning\">(25)</span>
                    </a>
                  </li>
                  <li class=\"divider\"></li>
                  <li><a href=\"#\">Mice and Trackballs <span class=\"label label-success\">Sale</span>
                    </a>
                  </li>
                  <li><a href=\"#\">Laptops </a>
                  </li>
                </ul>
                <ul class=\"arrow\">
                  <li><a href=\"#\"> Dresses</a>
                  </li>
                  <li><a href=\"#\"> Sun Glasses</a>
                  </li>
                  <li><a href=\"#\"> Suits & shirts </a>
                  </li>
                  <li><a href=\"#\"> Shoes </a>
                  </li>
                  <li><a href=\"#\">Jackets & Coats <span class=\"label label-warning\">(25)</span>
                    </a>
                  </li>
                  <li class=\"divider\"></li>
                  <li><a href=\"#\">Mice and Trackballs <span class=\"label label-important\">Sale</span>
                    </a>
                  </li>
                  <li><a href=\"#\">Laptops </a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a  href=\"category-full.html\">Category</a>
              <div>
                <ul class=\"arrow\">
                  <li><a class=\"bold\" href=\"category.html\">Category - 2 Column</a>
                  </li>
                  <li><a class=\"bold\" href=\"category-full.html\">Category-Full</a>
                  </li>
                  <li><a href=\"#\"> Men Products</a>
                  </li>
                  <li><a href=\"#\"> Women Products</a>
                  </li>
                  <li><a href=\"#\"> Child Products</a>
                  </li>
                  <li><a href=\"#\"> Home and Furniture</a>
                  </li>
                  <li><a href=\"#\">Electric Accessories</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href=\"typography.html\">Features</a>
              <div>
                <ul class=\"arrow\">
                  <li><a href=\"typography.html\">Typography</a>
                  </li>
                  <li><a href=\"form.html\">Form Elements</a>
                  </li>
                  <li><a href=\"buttons.html\">Buttons</a>
                  </li>
                  <li><a href=\"javascript.html\">Javascripts</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href=\"shopping-cart.html\">Shopping Cart</a>
            </li>
            <li><a href=\"checkout.html\">Checkout</a>
            </li>
            <li><a href=\"compare.html\">Compare</a>
            </li>
            </li>
            <li><a href=\"blog.html\">Blog</a>
              <div>
                <ul class=\"arrow\">
                  <li><a href=\"blog.html\">Blog page</a>
                  </li>
                  <li><a href=\"bloggrid.html\">Blog Grid View</a>
                  </li>
                  <li><a href=\"bloglist.html\">Blog List VIew</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li><a href=\"myaccount.html\">My Account</a>
              <div>
                <ul>
                  <li><a href=\"myaccount.html\">My Account</a>
                  </li>
                  <li><a href=\"login.html\">Login</a>
                  </li>
                  <li><a href=\"register.html\">Register</a>
                  </li>
                  <li><a href=\"wishlist.html\">Wishlist</a>
            </li>
                </ul>
              </div>
            </li>
             <li><a href=\"#\">Error Pages</a>
              <div>
                <ul>
                  <li><a href=\"404.html\">404 Error</a>
                  </li>
                  <li><a href=\"500.html\">500 Error</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <li><a href=\"contact.html\">Contact</a>
            </li>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->
";
        // line 297
        $this->displayBlock('detail', $context, $blocks);
        // line 300
        echo "<!-- Footer -->
<footer id=\"footer\">
  <section class=\"footersocial\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span3 aboutus\">
          <h2>About Us </h2>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
            <br>
            t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        </div>
        <div class=\"span3 contact\">
          <h2>Contact Us </h2>
          <ul>
            <li class=\"phone\"> +123 456 7890, +123 456 7890,<br>
              +123 456 7890</li>
            <li class=\"mobile\"> +123 456 7890, +123 456 7890,<br>
              +123 456 7890</li>
            <li class=\"email\"> test@test.com <br>
              test@test.com</li>
          </ul>
        </div>
        <div class=\"span3 twitter\">
          <h2>Twitter </h2>
          <div id=\"twitter\">
          </div>
        </div>
        <div class=\"span3 facebook\">
          <h2>Facebook </h2>
         <div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"../../../connect.facebook.net/en_US/all.js#xfbml=1\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class=\"fb-like-box\" data-href=\"http://www.facebook.com/envato\" data-width=\"292\" data-height=\"240\" data-show-faces=\"true\" data-stream=\"false\" data-border-color=\"#ffffff\" data-header=\"false\"></div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"footerlinks\">
    <div class=\"container\">
      <div class=\"shipingstrip\">
        <div class=\"fl\">
          <div class=\"control-group\">
            <form class=\"form-horizontal\">
              <div class=\"\">
                <div class=\"input-prepend\">
                  <span class=\"add-on\"><i class=\"icon-envelope icon-w\"></i></span>
                  <input type=\"text\" id=\"inputIcon\" placeholder=\"Subscribe to Newsletter\" >
                  <button type=\"submit\" class=\"btn btn-success\" value=\"Subscribe\">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class=\"fr\">
          <div class=\"shipping\"> 24 hrs Free Shipping </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"info\">
        <ul>
          <li><a href=\"#\">Privacy Policy</a>
          </li>
          <li><a href=\"#\">Terms &amp; Conditions</a>
          </li>
          <li><a href=\"#\">Affiliates</a>
          </li>
          <li><a href=\"#\">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id=\"footersocial\">
        <a href=\"#\" title=\"Facebook\" class=\"facebook\">Facebook</a>
        <a href=\"#\" title=\"Twitter\" class=\"twitter\">Twitter</a>
        <a href=\"#\" title=\"Linkedin\" class=\"linkedin\">Linkedin</a>
        <a href=\"#\" title=\"rss\" class=\"rss\">rss</a>
        <a href=\"#\" title=\"Googleplus\" class=\"googleplus\">Googleplus</a>
        <a href=\"#\" title=\"Skype\" class=\"skype\">Skype</a>
        <a href=\"#\" title=\"Flickr\" class=\"flickr\">Flickr</a>
      </div>
    </div>
  </section>
  <section class=\"copyrightbottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span6\"> All images are copyright to their owners. </div>
        <div class=\"span6 textright\"> ShopSimple @ 2012 </div>
      </div>
    </div>
  </section>
  <a id=\"gotop\" href=\"#\">Back to top</a>
</footer>
<!-- /maincontainer -->
<!-- javascript
    ================================================== -->
";
        // line 400
        $this->displayBlock('javascript', $context, $blocks);
        // line 426
        echo "</body>

<!-- Mirrored from pxcreate.com/template/shopsimple/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 07:42:04 GMT -->
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "<!-- styles -->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/fancybox/jquery.fancybox-1.3.4.css"), "html", null, true);
        echo "\" media=\"screen\" />
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

<!-- fav and touch icons -->
";
    }

    // line 297
    public function block_detail($context, array $blocks = array())
    {
        // line 298
        echo "
";
    }

    // line 400
    public function block_javascript($context, array $blocks = array())
    {
        // line 401
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/bootstrap-affix.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/application.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/respond.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/jflickrfeed.min.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/cloud-zoom.1.0.2.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/jscloud-zoom.1.0.2.min.html"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/fancybox/jquery.fancybox-1.3.4.pack.js"), "html", null, true);
        echo "\"></script>
<script  type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/evaclient/js/custom.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "EvaClientBundle:Layout:layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 424,  582 => 423,  578 => 422,  574 => 421,  570 => 420,  566 => 419,  562 => 418,  558 => 417,  554 => 416,  550 => 415,  546 => 414,  542 => 413,  538 => 412,  534 => 411,  530 => 410,  526 => 409,  522 => 408,  518 => 407,  514 => 406,  510 => 405,  506 => 404,  502 => 403,  498 => 402,  493 => 401,  490 => 400,  485 => 298,  482 => 297,  468 => 22,  464 => 21,  460 => 20,  456 => 19,  452 => 18,  448 => 17,  444 => 16,  438 => 12,  435 => 11,  430 => 5,  422 => 426,  420 => 400,  318 => 300,  316 => 297,  153 => 137,  107 => 94,  97 => 87,  40 => 32,  38 => 11,  31 => 6,  29 => 5,  23 => 1,);
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
<head>
<meta charset=\"utf-8\">
{% block title %}{% endblock %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<!-- styles -->
{% block head %}
<!-- styles -->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href=\"{{asset('bundles/evaclient/css/bootstrap.css')}}\" rel=\"stylesheet\">
<link href=\"{{asset('bundles/evaclient/css/bootstrap-responsive.css')}}\" rel=\"stylesheet\">
<link href=\"{{asset('bundles/evaclient/css/docs.css')}}\" rel=\"stylesheet\">
<link href=\"{{asset('bundles/evaclient/js/google-code-prettify/prettify.css')}}\" rel=\"stylesheet\">
<link href=\"{{asset('bundles/evaclient/css/style.css')}}\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{asset('bundles/evaclient/css/flexslider.css')}}\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('bundles/evaclient/fancybox/jquery.fancybox-1.3.4.css')}}\" media=\"screen\" />
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

<!-- fav and touch icons -->
{% endblock %}
</head>
<body>
<!-- Header Start -->
<header>
  <!-- Sticky Navbar Start -->
  <div class=\"navbar navbar-fixed-top\" id=\"main-nav\">
    <div class=\"container\">
      <button data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\" type=\"button\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      </button>
      <nav class=\"nav-collapse collapse\" style=\"height:0px\">
        <ul class=\"nav\">
          <li class=\"active\"><a href=\"index-2.html\">Home</a>
          </li>
          <li><a href=\"myaccount.html\">My Account </a>
          </li>
          <li><a href=\"shopping-cart.html\">Shopping Cart</a>
          </li>
          <li><a href=\"checkout.html\">Checkout</a>
          </li>
        </ul>
      </nav>
      <ul class=\"nav pull-right left-tablet\">
        <li class=\"dropdown hover\">
          <a data-toggle=\"\" class=\"dropdown-toggle\" href=\"#\">US Doller <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu currency\">
            <li><a href=\"#\">US Doller</a>
            </li>
            <li><a href=\"#\">Euro </a>
            </li>
            <li><a href=\"#\">British Pound</a>
            </li>
          </ul>
        </li>
        <li class=\"dropdown hover\">
          <a data-toggle=\"\" class=\"dropdown-toggle\" href=\"#\">English <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu language\">
            <li><a href=\"#\">English</a>
            </li>
            <li><a href=\"#\">Spanish</a>
            </li>
            <li><a href=\"#\">German</a>
            </li>
          </ul>
        </li>
        <li class=\"dropdown hover topcart\">
          <a  class=\"dropdown-toggle\" href=\"#\">
            <i class=\"carticon\"></i> Shopping Cart <span class=\"label label-success font14\">1 item(s)</span> - \$589.50<b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu topcartopen\">
            <li>
              <table>
                <tbody>
                  <tr>
                    <td class=\"image\"><a href=\"product.html\"><img title=\"product\" alt=\"product\" src=\"{{asset('bundles/evaclient/img/prodcut-40x40.jpg')}}\" height=\"50\" width=\"50\"></a></td>
                    <td class=\"name\"><a href=\"product.html\">MacBook</a></td>
                    <td class=\"quantity\">x&nbsp;1</td>
                    <td class=\"total\">\$589.50</td>
                    <td class=\"remove\"><i class=\"icon-remove\"></i></td>
                  </tr>
                  <tr>
                    <td class=\"image\"><a href=\"product.html\"><img title=\"product\" alt=\"product\" src=\"{{asset('bundles/evaclient/img/prodcut-40x40.jpg')}}\" height=\"50\" width=\"50\"></a></td>
                    <td class=\"name\"><a href=\"product.html\">MacBook</a></td>
                    <td class=\"quantity\">x&nbsp;1</td>
                    <td class=\"total\">\$589.50</td>
                    <td class=\"remove\"><i class=\"icon-remove \"></i></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                  <tr>
                    <td class=\"textright\"><b>Sub-Total:</b></td>
                    <td class=\"textright\">\$500.00</td>
                  </tr>
                  <tr>
                    <td class=\"textright\"><b>Eco Tax (-2.00):</b></td>
                    <td class=\"textright\">\$2.00</td>
                  </tr>
                  <tr>
                    <td class=\"textright\"><b>VAT (17.5%):</b></td>
                    <td class=\"textright\">\$87.50</td>
                  </tr>
                  <tr>
                    <td class=\"textright\"><b>Total:</b></td>
                    <td class=\"textright\">\$589.50</td>
                  </tr>
                </tbody>
              </table>
              <div class=\"well pull-right\">
                <a href=\"#\" class=\"btn btn-success\">View Cart</a>
                <a href=\"#\" class=\"btn btn-success\">Checkout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!--Sticky Navbar End -->
  <div class=\"header-white\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span4\">
          <a class=\"logo\" href=\"index-2.html\"><img src=\"{{asset('bundles/evaclient/img/logo.png')}}\" alt=\"ShopSimple\" title=\"ShopSimple\"></a>
        </div>
        <div class=\"span8\">
          <div class=\"row\">
            <div class=\"pull-right logintext\">Welcome Px,  you can <a href=\"login.html\">login </a>
              or <a href=\"register.html\">create an account</a>
            </div>
          </div>
          <form class=\"form-search marginnull topsearch pull-right\">
            <input type=\"text\" class=\"input-large search-query search-icon-top\" value=\"Search here...\"  onFocus=\"if (this.value=='Search here...') this.value='';\" onblur=\"if (this.value=='') this.value='Search here...';\"
        >
          </form>
        </div>
      </div>
    </div>
    <div  id=\"categorymenu\">
      <div class=\"container\">
        <nav class=\"subnav\">
          <ul class=\"nav-pills categorymenu\">
            <li><a href=\"index-2.html\">Home</a>
              <div>
                <ul class=\"arrow\">
                  <li><a href=\"home-sidebar.html\">Home 2-column</a>
                  </li>
                  <li><a href=\"index-2.html\">Home 1-column</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class=\"active\" href=\"product.html\">Products</a>
              <div>
                <ul class=\"arrow\">
                  <li><a class=\"bold\" href=\"product.html\">Product Full </a>
                  </li>
                  <li><a class=\"bold\" href=\"product-sidebar.html\"> Product 2 Column </a>
                  </li>
                  <li><a href=\"#\"> Suits & shirts </a>
                  </li>
                  <li><a href=\"#\"> Shoes <span class=\"label label-info\">(new)</span></a>
                  </li>
                  <li><a href=\"#\">Jackets & Coats <span class=\"label label-warning\">(25)</span>
                    </a>
                  </li>
                  <li class=\"divider\"></li>
                  <li><a href=\"#\">Mice and Trackballs <span class=\"label label-success\">Sale</span>
                    </a>
                  </li>
                  <li><a href=\"#\">Laptops </a>
                  </li>
                </ul>
                <ul class=\"arrow\">
                  <li><a href=\"#\"> Dresses</a>
                  </li>
                  <li><a href=\"#\"> Sun Glasses</a>
                  </li>
                  <li><a href=\"#\"> Suits & shirts </a>
                  </li>
                  <li><a href=\"#\"> Shoes </a>
                  </li>
                  <li><a href=\"#\">Jackets & Coats <span class=\"label label-warning\">(25)</span>
                    </a>
                  </li>
                  <li class=\"divider\"></li>
                  <li><a href=\"#\">Mice and Trackballs <span class=\"label label-important\">Sale</span>
                    </a>
                  </li>
                  <li><a href=\"#\">Laptops </a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a  href=\"category-full.html\">Category</a>
              <div>
                <ul class=\"arrow\">
                  <li><a class=\"bold\" href=\"category.html\">Category - 2 Column</a>
                  </li>
                  <li><a class=\"bold\" href=\"category-full.html\">Category-Full</a>
                  </li>
                  <li><a href=\"#\"> Men Products</a>
                  </li>
                  <li><a href=\"#\"> Women Products</a>
                  </li>
                  <li><a href=\"#\"> Child Products</a>
                  </li>
                  <li><a href=\"#\"> Home and Furniture</a>
                  </li>
                  <li><a href=\"#\">Electric Accessories</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href=\"typography.html\">Features</a>
              <div>
                <ul class=\"arrow\">
                  <li><a href=\"typography.html\">Typography</a>
                  </li>
                  <li><a href=\"form.html\">Form Elements</a>
                  </li>
                  <li><a href=\"buttons.html\">Buttons</a>
                  </li>
                  <li><a href=\"javascript.html\">Javascripts</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href=\"shopping-cart.html\">Shopping Cart</a>
            </li>
            <li><a href=\"checkout.html\">Checkout</a>
            </li>
            <li><a href=\"compare.html\">Compare</a>
            </li>
            </li>
            <li><a href=\"blog.html\">Blog</a>
              <div>
                <ul class=\"arrow\">
                  <li><a href=\"blog.html\">Blog page</a>
                  </li>
                  <li><a href=\"bloggrid.html\">Blog Grid View</a>
                  </li>
                  <li><a href=\"bloglist.html\">Blog List VIew</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li><a href=\"myaccount.html\">My Account</a>
              <div>
                <ul>
                  <li><a href=\"myaccount.html\">My Account</a>
                  </li>
                  <li><a href=\"login.html\">Login</a>
                  </li>
                  <li><a href=\"register.html\">Register</a>
                  </li>
                  <li><a href=\"wishlist.html\">Wishlist</a>
            </li>
                </ul>
              </div>
            </li>
             <li><a href=\"#\">Error Pages</a>
              <div>
                <ul>
                  <li><a href=\"404.html\">404 Error</a>
                  </li>
                  <li><a href=\"500.html\">500 Error</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <li><a href=\"contact.html\">Contact</a>
            </li>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->
{% block detail %}

{% endblock %}
<!-- Footer -->
<footer id=\"footer\">
  <section class=\"footersocial\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span3 aboutus\">
          <h2>About Us </h2>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
            <br>
            t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        </div>
        <div class=\"span3 contact\">
          <h2>Contact Us </h2>
          <ul>
            <li class=\"phone\"> +123 456 7890, +123 456 7890,<br>
              +123 456 7890</li>
            <li class=\"mobile\"> +123 456 7890, +123 456 7890,<br>
              +123 456 7890</li>
            <li class=\"email\"> test@test.com <br>
              test@test.com</li>
          </ul>
        </div>
        <div class=\"span3 twitter\">
          <h2>Twitter </h2>
          <div id=\"twitter\">
          </div>
        </div>
        <div class=\"span3 facebook\">
          <h2>Facebook </h2>
         <div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"../../../connect.facebook.net/en_US/all.js#xfbml=1\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class=\"fb-like-box\" data-href=\"http://www.facebook.com/envato\" data-width=\"292\" data-height=\"240\" data-show-faces=\"true\" data-stream=\"false\" data-border-color=\"#ffffff\" data-header=\"false\"></div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"footerlinks\">
    <div class=\"container\">
      <div class=\"shipingstrip\">
        <div class=\"fl\">
          <div class=\"control-group\">
            <form class=\"form-horizontal\">
              <div class=\"\">
                <div class=\"input-prepend\">
                  <span class=\"add-on\"><i class=\"icon-envelope icon-w\"></i></span>
                  <input type=\"text\" id=\"inputIcon\" placeholder=\"Subscribe to Newsletter\" >
                  <button type=\"submit\" class=\"btn btn-success\" value=\"Subscribe\">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class=\"fr\">
          <div class=\"shipping\"> 24 hrs Free Shipping </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"info\">
        <ul>
          <li><a href=\"#\">Privacy Policy</a>
          </li>
          <li><a href=\"#\">Terms &amp; Conditions</a>
          </li>
          <li><a href=\"#\">Affiliates</a>
          </li>
          <li><a href=\"#\">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id=\"footersocial\">
        <a href=\"#\" title=\"Facebook\" class=\"facebook\">Facebook</a>
        <a href=\"#\" title=\"Twitter\" class=\"twitter\">Twitter</a>
        <a href=\"#\" title=\"Linkedin\" class=\"linkedin\">Linkedin</a>
        <a href=\"#\" title=\"rss\" class=\"rss\">rss</a>
        <a href=\"#\" title=\"Googleplus\" class=\"googleplus\">Googleplus</a>
        <a href=\"#\" title=\"Skype\" class=\"skype\">Skype</a>
        <a href=\"#\" title=\"Flickr\" class=\"flickr\">Flickr</a>
      </div>
    </div>
  </section>
  <section class=\"copyrightbottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"span6\"> All images are copyright to their owners. </div>
        <div class=\"span6 textright\"> ShopSimple @ 2012 </div>
      </div>
    </div>
  </section>
  <a id=\"gotop\" href=\"#\">Back to top</a>
</footer>
<!-- /maincontainer -->
<!-- javascript
    ================================================== -->
{% block javascript %}
<script src=\"{{asset('bundles/evaclient/js/google-code-prettify/prettify.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-transition.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-alert.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-modal.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-dropdown.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-scrollspy.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-tab.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-tooltip.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-popover.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-button.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-collapse.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-carousel.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-typeahead.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/bootstrap-affix.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/application.js')}}\"></script>
<script defer src=\"{{asset('bundles/evaclient/js/jquery.flexslider.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/respond.min.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/js/jquery.tweet.js')}}\"></script>
<script src=\"{{asset('bundles/evaclient/js/jflickrfeed.min.js')}}\"></script>
<script  src=\"{{asset('bundles/evaclient/js/cloud-zoom.1.0.2.js')}}\"></script>
<script  src=\"{{asset('bundles/evaclient/jscloud-zoom.1.0.2.min.html')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('bundles/evaclient/fancybox/jquery.fancybox-1.3.4.pack.js')}}\"></script>
<script  type=\"text/javascript\" src=\"{{asset('bundles/evaclient/js/jquery.validate.js')}}\"></script>
<script defer src=\"{{asset('bundles/evaclient/js/custom.js')}}\"></script>
{% endblock %}
</body>

<!-- Mirrored from pxcreate.com/template/shopsimple/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 07:42:04 GMT -->
</html>
", "EvaClientBundle:Layout:layout2.html.twig", "C:\\wamp64\\www\\farouk2\\EvaCosmetiques\\src\\Eva\\ClientBundle/Resources/views/Layout/layout2.html.twig");
    }
}
