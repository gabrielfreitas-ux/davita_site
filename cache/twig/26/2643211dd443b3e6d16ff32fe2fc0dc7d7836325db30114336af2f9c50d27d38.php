<?php

/* partials/blog-list-item.html.twig */
class __TwigTemplate_4be22dc2c38717869c0316f40181d087dda8f111fbc4f21ee6e3f26398228a62 extends Twig_Template
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
        echo "

<div class=\"card\">
    ";
        // line 4
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 5
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 6
            echo "    <div class=\"card-image\">
        <a href=\"";
            // line 7
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", array(0 => 800, 1 => 400), "method"), "html", array());
            echo "</a>
    </div>
    ";
        }
        // line 10
        echo "    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            ";
        // line 12
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
        <div class=\"card-title\">
        ";
        // line 15
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 15)->display(array_merge($context, array("title_level" => "h5")));
        // line 16
        echo "        </div>
    </div>
    
    <div class=\"card-footer\">
        ";
        // line 20
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 20)->display($context);
        // line 21
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  58 => 20,  52 => 16,  50 => 15,  46 => 13,  44 => 12,  40 => 10,  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"card\">
    {% set image = page.media.images|first %}
    {% if image %}
    <div class=\"card-image\">
        <a href=\"{{ page.url }}\">{{ image.cropZoom(800,400).html }}</a>
    </div>
    {% endif %}
    <div class=\"card-header\">
        <div class=\"card-subtitle text-gray\">
            {% include 'partials/blog/date.html.twig' %}
    </div>
        <div class=\"card-title\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
        </div>
    </div>
    
    <div class=\"card-footer\">
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
</div>

", "partials/blog-list-item.html.twig", "C:\\xampp\\htdocs\\Davita\\grav-admin\\user\\themes\\quark\\templates\\partials\\blog-list-item.html.twig");
    }
}
