<?php

/* partials/blog-item.html.twig */
class __TwigTemplate_6b7d6346cb46003c2543b774634219225f4b8375b01f3983bf961d708b0e6cc8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html class=\"no-js lt-ie10 ie9\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\"> <!--<![endif]--><head>

<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"google-site-verification\" content=\"qpCweTequyrCNlcNPHwLcPazDxLKR-RaFre7cyM8afI\" />

<meta name=\"com.silverpop.brandeddomains\" content=\"www.pages03.net,blogs.davita.com,davita.com,dev.davita.com,dialysisfinder.com,edmeasures.com,www.davita.com,www.onlineregistrationcenter.com,yourkidneys.com\" />


  <title>Entradas e Aperitivos - Kidney-Friendly Recipes - DaVita</title>
    

<!-- Overide main social tracking code -->
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556773c669352af7\" async=\"async\"></script>

<script src=\"/js/jquery/jquery-1.11.1.min.js\"></script>

<script src=\"//cdn.optimizely.com/js/246773953.js\"></script>

<!-- Modernizr for feature detection -->
<script src=\"/js/modernizr.min.js\"></script>

<!-- CSS Style Sheets -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/bootstrap/bootstrap.min.css\" >
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/global.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/global-int-reskin.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/components.css\"  />
<link rel=\"stylesheet\" href=\"../assets/css/fonts/font-awesome/css/font-awesome.css\" />

<!-- Fonts & Icons -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>

<link rel=\"shortcut icon\" href=\"/images/global/logos/favicon/favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"../assets/images/global/logos/favicon/favicon.ico\" type=\"image/x-icon\">


<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556773c669352af7\" async=\"async\"></script>


<!-- Page Specific Stylesheet -->

<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/template/09-recipe-detail.css\"  />


</head>



        <div class=\"row header-bottom\">
            <div class=\"col-xs-12 col-sm-12 col-md-8 col-logo clearfix\">
                <!-- Logo -->
                    <div class=\"logo pull-left\">
                        <a href=\"../davita-brasil\" class=\"logo\">
              
                              <svg class=\"hidden-xs hidden-sm\" width=\"160\" height=\"65\">
                                  <image xlink:href=\"../assets/images/global/logos/svg/logo-notag-blue.svg\" src=\"/images/global/logos/logo-notag-blue.png\" width=\"160px\" height=\"65px\" class=\"hidden-xs hidden-sm\"></image>
                              </svg>
                              <svg class=\"hidden-md hidden-lg\" width=\"86\" height=\"33\">
                                  <image xlink:href=\"../assets/images/global/logos/svg/logo-notag.svg\" src=\"/images/global/logos/logo-notag.png\" width=\"86\" height=\"33\" class=\"hidden-md hidden-lg\"></image>
                              </svg>
              
                        </a>
                    </div>
                    <div class=\"pull-right visible-xs visible-sm\">
                        <button type=\"button\" class=\"navbar-toggle navbar-toggle-primary collapsed fa fa-bars\" data-toggle=\"collapse\" data-target=\"#nav-primary\">
                            <span class=\"sr-only\">Toggle Primary Nav</span>
                        </button>
                    </div>
          
            </div>          

            <div class=\"col-xs-12 col-sm-12 col-md-4 col-search\">
                <div class=\"collapse navbar-collapse\" id=\"nav-search\">
                    <div class=\"search-box pull-right\">
            
            <a href=\"/br/en/\">English</a> | Português           
            
                    </div>
                </div> 
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-4 col-search\">
                <div class=\"row hidden-xs hidden-sm\">    
                    <div class=\"col-xs-12 group-name\" style=\"margin-top: 58px;\">
                        <div class=\"services-category pull-right\">
              
                                
                            
                        </div>
                    </div>
        </div>
            </div>    

            
        </div>
    </div>

        

<div class=\"content-item h-entry\" style=\"margin-top:40px;\">

";
        // line 107
        if ( !($context["hero_image_name"] ?? null)) {
            // line 108
            echo "    <div class=\"content-title text-center\">
        ";
            // line 109
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 109)->display(array_merge($context, array("title_level" => "h2")));
            // line 110
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array())) {
                // line 111
                echo "        <h3 >";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array());
                echo "</h3>
        ";
            }
            // line 113
            echo "        ";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 113)->display($context);
            // line 114
            echo "        ";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 114)->display($context);
            // line 115
            echo "    </div>
";
        }
        // line 117
        echo "
    <div class=\"e-content\">
        ";
        // line 119
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>

    ";
        // line 122
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array()))) {
            // line 123
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 123)->display($context);
            // line 124
            echo "    ";
        }
        // line 125
        echo "

</div>

<p class=\"prev-next text-center\">


    ";
        // line 132
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 133
            echo "            <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\"><i class=\"fa fa-angle-left\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
            echo "</a>
    ";
        }
        // line 135
        echo "
    ";
        // line 136
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
            // line 137
            echo "        <a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
            echo " <i class=\"fa fa-angle-right\"></i></a>
    ";
        }
        // line 139
        echo "</p>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 139,  195 => 137,  193 => 136,  190 => 135,  182 => 133,  180 => 132,  171 => 125,  168 => 124,  165 => 123,  163 => 122,  157 => 119,  153 => 117,  149 => 115,  146 => 114,  143 => 113,  137 => 111,  134 => 110,  132 => 109,  129 => 108,  127 => 107,  19 => 1,);
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
<!--[if lt IE 7]>      <html class=\"no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html class=\"no-js lt-ie10 ie9\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\"> <!--<![endif]--><head>

<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"google-site-verification\" content=\"qpCweTequyrCNlcNPHwLcPazDxLKR-RaFre7cyM8afI\" />

<meta name=\"com.silverpop.brandeddomains\" content=\"www.pages03.net,blogs.davita.com,davita.com,dev.davita.com,dialysisfinder.com,edmeasures.com,www.davita.com,www.onlineregistrationcenter.com,yourkidneys.com\" />


  <title>Entradas e Aperitivos - Kidney-Friendly Recipes - DaVita</title>
    

<!-- Overide main social tracking code -->
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556773c669352af7\" async=\"async\"></script>

<script src=\"/js/jquery/jquery-1.11.1.min.js\"></script>

<script src=\"//cdn.optimizely.com/js/246773953.js\"></script>

<!-- Modernizr for feature detection -->
<script src=\"/js/modernizr.min.js\"></script>

<!-- CSS Style Sheets -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/bootstrap/bootstrap.min.css\" >
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/global.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/global-int-reskin.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/components.css\"  />
<link rel=\"stylesheet\" href=\"../assets/css/fonts/font-awesome/css/font-awesome.css\" />

<!-- Fonts & Icons -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic,700' rel='stylesheet' type='text/css'>

<link rel=\"shortcut icon\" href=\"/images/global/logos/favicon/favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"../assets/images/global/logos/favicon/favicon.ico\" type=\"image/x-icon\">


<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556773c669352af7\" async=\"async\"></script>


<!-- Page Specific Stylesheet -->

<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/template/09-recipe-detail.css\"  />


</head>



        <div class=\"row header-bottom\">
            <div class=\"col-xs-12 col-sm-12 col-md-8 col-logo clearfix\">
                <!-- Logo -->
                    <div class=\"logo pull-left\">
                        <a href=\"../davita-brasil\" class=\"logo\">
              
                              <svg class=\"hidden-xs hidden-sm\" width=\"160\" height=\"65\">
                                  <image xlink:href=\"../assets/images/global/logos/svg/logo-notag-blue.svg\" src=\"/images/global/logos/logo-notag-blue.png\" width=\"160px\" height=\"65px\" class=\"hidden-xs hidden-sm\"></image>
                              </svg>
                              <svg class=\"hidden-md hidden-lg\" width=\"86\" height=\"33\">
                                  <image xlink:href=\"../assets/images/global/logos/svg/logo-notag.svg\" src=\"/images/global/logos/logo-notag.png\" width=\"86\" height=\"33\" class=\"hidden-md hidden-lg\"></image>
                              </svg>
              
                        </a>
                    </div>
                    <div class=\"pull-right visible-xs visible-sm\">
                        <button type=\"button\" class=\"navbar-toggle navbar-toggle-primary collapsed fa fa-bars\" data-toggle=\"collapse\" data-target=\"#nav-primary\">
                            <span class=\"sr-only\">Toggle Primary Nav</span>
                        </button>
                    </div>
          
            </div>          

            <div class=\"col-xs-12 col-sm-12 col-md-4 col-search\">
                <div class=\"collapse navbar-collapse\" id=\"nav-search\">
                    <div class=\"search-box pull-right\">
            
            <a href=\"/br/en/\">English</a> | Português           
            
                    </div>
                </div> 
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-4 col-search\">
                <div class=\"row hidden-xs hidden-sm\">    
                    <div class=\"col-xs-12 group-name\" style=\"margin-top: 58px;\">
                        <div class=\"services-category pull-right\">
              
                                
                            
                        </div>
                    </div>
        </div>
            </div>    

            
        </div>
    </div>

        

<div class=\"content-item h-entry\" style=\"margin-top:40px;\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if page.header.subtitle %}
        <h3 >{{ page.header.subtitle }}</h3>
        {% endif %}
        {% include 'partials/blog/date.html.twig' %}
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
{% endif %}

    <div class=\"e-content\">
        {{ page.content }}
    </div>

    {% if page.header.continue_link is sameas(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}


</div>

<p class=\"prev-next text-center\">


    {% if not page.isLast %}
            <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
    {% endif %}

    {% if not page.isFirst %}
        <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
    {% endif %}
</p>

    </body>
</html>
", "partials/blog-item.html.twig", "C:\\xampp\\htdocs\\Davita\\grav-admin\\user\\themes\\quark\\templates\\partials\\blog-item.html.twig");
    }
}
