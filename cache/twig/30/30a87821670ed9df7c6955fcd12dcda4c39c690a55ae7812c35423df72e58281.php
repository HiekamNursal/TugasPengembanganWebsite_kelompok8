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

/* modular.html.twig */
class __TwigTemplate_61eef76d62dc312e8eeaa8f5ea23e35a1ad1f82a6ff9acf468f1180e188084b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["featured"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.featured" => true], "order" => ["by" => "date", "dir" => "desc"]]], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        // line 6
        echo "  ";
        $this->loadTemplate("partials/header.html.twig", "modular.html.twig", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "<div class=\"home_posts_titles\">
  <div class=\"row\">
    <div class=\"large-12 columns\">
      ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
  </div>
</div>
";
        // line 17
        if (($context["featured"] ?? null)) {
            // line 18
            echo "<div class=\"featured-posts\">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["featured"] ?? null), 3));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 20
                echo "    <div class=\"row\">
    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 22
                    echo "    <div class=\"large-4 columns\">
      ";
                    // line 23
                    $this->loadTemplate("partials/blog_item.html.twig", "modular.html.twig", 23)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => true, "readmore" => false]));
                    // line 24
                    echo "    </div>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</div>
";
        }
        // line 30
        echo "
  <hr>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo $this->getAttribute($context["module"], "content", []);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  152 => 33,  147 => 30,  143 => 28,  128 => 26,  113 => 24,  111 => 23,  108 => 22,  91 => 21,  88 => 20,  71 => 19,  68 => 18,  66 => 17,  59 => 13,  54 => 10,  51 => 9,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set featured = page.collection({'items':{'@taxonomy.featured': true},'order': {'by': 'date', 'dir': 'desc'}}) %}

{% block header %}
  {% include 'partials/header.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"home_posts_titles\">
  <div class=\"row\">
    <div class=\"large-12 columns\">
      {{ page.content|raw }}
    </div>
  </div>
</div>
{% if featured %}
<div class=\"featured-posts\">
    {% for row in featured|batch(3) %}
    <div class=\"row\">
    {% for child in row %}
    <div class=\"large-4 columns\">
      {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true, 'readmore': false} %}
    </div>
    {% endfor %}
      </div>
    {% endfor %}
</div>
{% endif %}

  <hr>

{% for module in page.collection() %}
{{ module.content|raw }}
{% endfor %}
{% endblock %}
", "modular.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\modular.html.twig");
    }
}
