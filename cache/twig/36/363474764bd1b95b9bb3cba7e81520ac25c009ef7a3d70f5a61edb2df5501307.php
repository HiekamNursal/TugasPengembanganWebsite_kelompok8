<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* item.html.twig */
class __TwigTemplate_89b13dc37f98d8fb74895cec5a4056025a6878d67ccf558f83da83b35b00d3b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "363955802")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set the_base_url = page.parent.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">

    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true,'base_url':the_base_url} %}
        </div>
      </main>
    </div>

    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}
{% endembed %}
", "item.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_89b13dc37f98d8fb74895cec5a4056025a6878d67ccf558f83da83b35b00d3b8___363955802 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["the_base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 4
        $context["feed_url"] = ($context["the_base_url"] ?? null);
        // line 6
        if ((($context["the_base_url"] ?? null) == "/")) {
            // line 7
            $context["the_base_url"] = "";
        }
        // line 10
        if ((($context["the_base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 11
            $context["feed_url"] = ((($context["the_base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">

    <div class=\"large-";
        // line 18
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <div class=\"row\">
          ";
        // line 21
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 21)->display(twig_array_merge($context, ["truncate" => false, "big_header" => true, "base_url" => ($context["the_base_url"] ?? null)]));
        // line 22
        echo "        </div>
      </main>
    </div>

    ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            // line 27
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 29
            $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 29)->display($context);
            // line 30
            echo "      </div>
    </div>
    ";
        }
        // line 33
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 33,  167 => 30,  165 => 29,  161 => 27,  159 => 26,  153 => 22,  151 => 21,  141 => 18,  136 => 15,  133 => 14,  128 => 1,  125 => 11,  123 => 10,  120 => 7,  118 => 6,  116 => 4,  114 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set the_base_url = page.parent.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">

    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true,'base_url':the_base_url} %}
        </div>
      </main>
    </div>

    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}
{% endembed %}
", "item.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\item.html.twig");
    }
}
