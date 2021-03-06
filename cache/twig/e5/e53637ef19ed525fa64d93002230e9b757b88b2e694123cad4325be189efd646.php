<?php

/* partials/logo.html.twig */
class __TwigTemplate_d7e4687341361dd4bd25f1a04c02b76dd0d897b428fd7019b8a17fc55f05b7d4 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "logo_text", array())) {
            // line 2
            echo "<h3>
\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "logo_text", array()), "html", null, true);
            echo "
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-bookmark-o\"></i></a>
</h3>
";
        } else {
            // line 9
            echo "<div class=\"admin-logo\">
\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
\t\t<svg version=\"1.1\" id=\"Camada_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 259.8 74.6\" style=\"enable-background:new 0 0 259.8 74.6;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#E2E2E0;}
</style>
<g>
\t<g>
\t\t<path class=\"st0\" d=\"M89.5,52.5l-9-17.9h8.4l5.3,12.1l5.3-12.1h8.4l-9,17.9H89.5z\"/>
\t\t<path class=\"st0\" d=\"M109.1,52.5V34.6h18.5v4.7h-11.1v1.8h10.8v4.7h-10.8v2h11.1v4.7H109.1z\"/>
\t\t<path class=\"st0\" d=\"M147.2,52.5l-9-9.1v9.1h-7.4V34.6h7.6l8.5,8.5v-8.5h7.4v17.9H147.2z\"/>
\t\t<path class=\"st0\" d=\"M163.4,52.5V39.3h-6.5v-4.7h20.4v4.7h-6.5v13.2H163.4z\"/>
\t\t<path class=\"st0\" d=\"M193.3,52.5l-3.4-5.6h-2.7v5.6h-7.4V34.6h13c5.7,0,8.8,2.8,8.8,6.2c0,3.1-2.4,4.7-4.4,5.4l4.4,6.3H193.3z
\t\t\t M194.2,40.7c0-1-1.2-1.4-2.4-1.4h-4.5v2.8h4.5C193,42.1,194.2,41.7,194.2,40.7z\"/>
\t\t<path class=\"st0\" d=\"M203.4,43.6c0-5.5,5.8-9.3,13.3-9.3c7.5,0,13.3,3.8,13.3,9.3c0,5.5-5.8,9.3-13.3,9.3
\t\t\tC209.2,52.9,203.4,49.1,203.4,43.6z M222.5,43.6c0-2.5-2.3-4.5-5.8-4.5c-3.5,0-5.8,2-5.8,4.5s2.3,4.5,5.8,4.5
\t\t\tC220.2,48.1,222.5,46.1,222.5,43.6z\"/>
\t\t<path class=\"st0\" d=\"M249,52.5l-9-9.1v9.1h-7.4V34.6h7.6l8.5,8.5v-8.5h7.4v17.9H249z\"/>
\t</g>
\t<g>
\t\t<g>
\t\t\t<path class=\"st0\" d=\"M94.1,61.9L80.5,34.5h8.4l5.3,12.1l5.3-12.1h8.4L94.1,61.9z\"/>
\t\t</g>
\t</g>
\t<g>
\t\t<rect x=\"6.9\" y=\"9.3\" class=\"st0\" width=\"73.2\" height=\"9.3\"/>
\t\t<g>
\t\t\t<g>
\t\t\t\t<polygon class=\"st0\" points=\"74.4,17 74.4,17 43.6,58.3 12.7,17 12.7,17 7,9.3 1.1,17.1 43.5,73.8 85.9,17.1 80.1,9.4 \t\t\t\t\"/>
\t\t\t</g>
\t\t</g>
\t\t<polygon class=\"st0\" points=\"43.5,47.4 26.6,24.7 60.5,24.7 \t\t\"/>
\t\t<polygon class=\"st0\" points=\"43.5,58.2 12.7,17 12.7,17 7,9.3 1.1,17.1 43.5,73.8 43.5,73.7 \t\t\"/>
\t</g>
</g>
</svg>
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
</div>
";
        }
        // line 50
        echo "



";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 50,  84 => 47,  44 => 10,  41 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.admin.logo_text %}
<h3>
\t<a href=\"{{ base_url_relative }}\">
\t\t{{ config.plugins.admin.logo_text }}
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|tu }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-bookmark-o\"></i></a>
</h3>
{% else %}
<div class=\"admin-logo\">
\t<a href=\"{{ base_url_relative }}\">
\t\t<svg version=\"1.1\" id=\"Camada_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 259.8 74.6\" style=\"enable-background:new 0 0 259.8 74.6;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#E2E2E0;}
</style>
<g>
\t<g>
\t\t<path class=\"st0\" d=\"M89.5,52.5l-9-17.9h8.4l5.3,12.1l5.3-12.1h8.4l-9,17.9H89.5z\"/>
\t\t<path class=\"st0\" d=\"M109.1,52.5V34.6h18.5v4.7h-11.1v1.8h10.8v4.7h-10.8v2h11.1v4.7H109.1z\"/>
\t\t<path class=\"st0\" d=\"M147.2,52.5l-9-9.1v9.1h-7.4V34.6h7.6l8.5,8.5v-8.5h7.4v17.9H147.2z\"/>
\t\t<path class=\"st0\" d=\"M163.4,52.5V39.3h-6.5v-4.7h20.4v4.7h-6.5v13.2H163.4z\"/>
\t\t<path class=\"st0\" d=\"M193.3,52.5l-3.4-5.6h-2.7v5.6h-7.4V34.6h13c5.7,0,8.8,2.8,8.8,6.2c0,3.1-2.4,4.7-4.4,5.4l4.4,6.3H193.3z
\t\t\t M194.2,40.7c0-1-1.2-1.4-2.4-1.4h-4.5v2.8h4.5C193,42.1,194.2,41.7,194.2,40.7z\"/>
\t\t<path class=\"st0\" d=\"M203.4,43.6c0-5.5,5.8-9.3,13.3-9.3c7.5,0,13.3,3.8,13.3,9.3c0,5.5-5.8,9.3-13.3,9.3
\t\t\tC209.2,52.9,203.4,49.1,203.4,43.6z M222.5,43.6c0-2.5-2.3-4.5-5.8-4.5c-3.5,0-5.8,2-5.8,4.5s2.3,4.5,5.8,4.5
\t\t\tC220.2,48.1,222.5,46.1,222.5,43.6z\"/>
\t\t<path class=\"st0\" d=\"M249,52.5l-9-9.1v9.1h-7.4V34.6h7.6l8.5,8.5v-8.5h7.4v17.9H249z\"/>
\t</g>
\t<g>
\t\t<g>
\t\t\t<path class=\"st0\" d=\"M94.1,61.9L80.5,34.5h8.4l5.3,12.1l5.3-12.1h8.4L94.1,61.9z\"/>
\t\t</g>
\t</g>
\t<g>
\t\t<rect x=\"6.9\" y=\"9.3\" class=\"st0\" width=\"73.2\" height=\"9.3\"/>
\t\t<g>
\t\t\t<g>
\t\t\t\t<polygon class=\"st0\" points=\"74.4,17 74.4,17 43.6,58.3 12.7,17 12.7,17 7,9.3 1.1,17.1 43.5,73.8 85.9,17.1 80.1,9.4 \t\t\t\t\"/>
\t\t\t</g>
\t\t</g>
\t\t<polygon class=\"st0\" points=\"43.5,47.4 26.6,24.7 60.5,24.7 \t\t\"/>
\t\t<polygon class=\"st0\" points=\"43.5,58.2 12.7,17 12.7,17 7,9.3 1.1,17.1 43.5,73.8 43.5,73.7 \t\t\"/>
\t</g>
</g>
</svg>
\t</a>
\t<a class=\"front-end hint--left\" data-hint=\"{{ \"PLUGIN_ADMIN.VIEW_SITE_TIP\"|tu }}\" target=\"_blank\" href=\"{{ base_url_relative_frontend }}\"> <i class=\"fa fa-external-link\"></i></a>
</div>
{% endif %}




", "partials/logo.html.twig", "C:\\xampp\\htdocs\\Davita\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\logo.html.twig");
    }
}
