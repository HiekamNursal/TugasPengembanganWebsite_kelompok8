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

/* partials/sidebar.html.twig */
class __TwigTemplate_449ed4a0f45e990a5a036a26d24f81f9cde0bfe3b12c70654a2bc5b86256f9ac extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 2
            echo "<aside class=\"widget widget_search\">
    <h1 class=\"widget-title\">SimpleSearch</h1>
    ";
            // line 4
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 4)->display($context);
            // line 5
            echo "</aside>
";
        }
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 8
            echo "<aside class=\"widget widget_categories\">
    <h1 class=\"widget-title\">Categories</h1>
    ";
            // line 10
            $this->loadTemplate("partials/categorylist.html.twig", "partials/sidebar.html.twig", 10)->display(twig_array_merge($context, ["taxonomy" => "category", "base_url" => ($context["the_base_url"] ?? null)]));
            // line 11
            echo "</aside>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 14
            echo "<aside class=\"widget widget_categories\">
\t<h1 class=\"widget-title\">Random Article</h1>
\t<a class=\"button\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
";
        }
        // line 19
        echo "<aside class=\"widget widget_recent_entries\">
\t<h1 class=\"widget-title\">Recent Posts</h1>
  <ul>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 5], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "    <li>
      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ul>
</aside>
";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 30
            echo "<aside class=\"widget widget_tag_cloud\">
    <h1 class=\"widget-title\">Popular Tags</h1>
    ";
            // line 32
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 32)->display(twig_array_merge($context, ["taxonomy" => "tag", "base_url" => ($context["the_base_url"] ?? null)]));
            // line 33
            echo "</aside>
";
        }
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  101 => 33,  99 => 32,  95 => 30,  93 => 29,  89 => 27,  78 => 24,  75 => 23,  71 => 22,  66 => 19,  60 => 16,  56 => 14,  54 => 13,  50 => 11,  48 => 10,  44 => 8,  42 => 7,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if config.plugins.simplesearch.enabled %}
<aside class=\"widget widget_search\">
    <h1 class=\"widget-title\">SimpleSearch</h1>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</aside>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_categories\">
    <h1 class=\"widget-title\">Categories</h1>
    {% include 'partials/categorylist.html.twig' with {'taxonomy':'category', 'base_url':the_base_url} %}
</aside>
{% endif %}
{% if config.plugins.random.enabled %}
<aside class=\"widget widget_categories\">
\t<h1 class=\"widget-title\">Random Article</h1>
\t<a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
{% endif %}
<aside class=\"widget widget_recent_entries\">
\t<h1 class=\"widget-title\">Recent Posts</h1>
  <ul>
{% for post in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
    <li>
      <a href=\"{{ post.url }}\">{{ post.title }}</a>
    </li>
{% endfor %}
</ul>
</aside>
{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_tag_cloud\">
    <h1 class=\"widget-title\">Popular Tags</h1>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag', 'base_url':the_base_url} %}
</aside>
{% endif %}
{% if config.plugins.feed.enabled %}
{% endif %}
", "partials/sidebar.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\sidebar.html.twig");
    }
}
