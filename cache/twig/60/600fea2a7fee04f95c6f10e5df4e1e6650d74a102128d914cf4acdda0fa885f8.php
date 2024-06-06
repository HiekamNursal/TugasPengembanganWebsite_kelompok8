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

/* partials/relatedpages.html.twig */
class __TwigTemplate_f23a0c803898ddd85c080dcc72811ba047c71ce9fb9449390c530a42b995b6a0 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
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
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 2
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 3
            if (($context["related"] ?? null)) {
                // line 4
                echo "<div class=\"jp-relatedposts-post jp-relatedposts-post";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo " jp-relatedposts-post-thumbs\" data-post-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\" data-post-format=\"false\">
  <a class=\"jp-relatedposts-post-a\" href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "url", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                echo "\" rel=\"nofollow\">
    ";
                // line 6
                if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", []), "images", []))) {
                    // line 7
                    echo "    ";
                    echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["related"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 241, 1 => 138], "method"), "html", [0 => "", 1 => "", 2 => "jp-relatedposts-post-img"], "method");
                    echo "
    ";
                }
                // line 9
                echo "  </a>
  <h4 class=\"jp-relatedposts-post-title\">
    <a class=\"jp-relatedposts-post-a\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "url", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                echo "\" rel=\"nofollow\">
      ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute(($context["related"] ?? null), "title", []), "html", null, true);
                echo "
    </a>
  </h4>

  ";
                // line 16
                if ($this->getAttribute($this->getAttribute(($context["related"] ?? null), "taxonomy", []), "category", [])) {
                    // line 17
                    echo "  <p class=\"jp-relatedposts-post-context\">
    ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["related"] ?? null), "taxonomy", []), "category", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 19
                        echo "    In \"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["category"]), "html", null, true);
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
                        }
                        echo "\"
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "  </p>
  ";
                }
                // line 23
                echo "
</div>
";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 23,  131 => 21,  111 => 19,  94 => 18,  91 => 17,  89 => 16,  82 => 12,  76 => 11,  72 => 9,  66 => 7,  64 => 6,  58 => 5,  51 => 4,  49 => 3,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for related_path, score in related_pages %}
{% set related = grav['pages'].get(related_path) %}
{% if related %}
<div class=\"jp-relatedposts-post jp-relatedposts-post{{ loop.index }} jp-relatedposts-post-thumbs\" data-post-id=\"{{ loop.index }}\" data-post-format=\"false\">
  <a class=\"jp-relatedposts-post-a\" href=\"{{ related.url }}\" title=\"{{ related.title }}\" rel=\"nofollow\">
    {% if related.media.images|first %}
    {{ related.media.images|first.cropZoom(241,138).html('', '', 'jp-relatedposts-post-img')|raw }}
    {% endif %}
  </a>
  <h4 class=\"jp-relatedposts-post-title\">
    <a class=\"jp-relatedposts-post-a\" href=\"{{ related.url }}\" title=\"{{ related.title }}\" rel=\"nofollow\">
      {{ related.title }}
    </a>
  </h4>

  {% if related.taxonomy.category %}
  <p class=\"jp-relatedposts-post-context\">
    {% for category in related.taxonomy.category %}
    In \"{{ category|capitalize }}{% if not loop.last %}, {% endif %}\"
    {% endfor %}
  </p>
  {% endif %}

</div>
{% endif %}
{% endfor %}
", "partials/relatedpages.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\relatedpages.html.twig");
    }
}
