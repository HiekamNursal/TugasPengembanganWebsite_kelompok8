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

/* default.html.twig */
class __TwigTemplate_208d722cb88373f614182bdb83214eb825bda9e3d5fee6f06003215c6863ce38 extends \Twig\Template
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
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-";
        // line 6
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "
            </h2>
          </header>
          <div class=\"entry-content\">

            ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", [])) {
            // line 17
            echo "            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            <div class=\"rescue-column rescue-all\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", []));
            foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                // line 20
                echo "                ";
                if (($this->getAttribute($context["bar"], "position", []) == "top")) {
                    // line 21
                    echo "               <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                    echo "%\">
                  <div class=\"rescue-progressbar-title\" style=\"background: ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                    echo ";\"><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "title", []), "html", null, true);
                    echo "</span></div>
                  <div class=\"rescue-progressbar-bar\" style=\"background: ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                    echo ";\"></div>
                  <div class=\"rescue-progress-bar-percent\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                    echo "%</div>
               </div>
               ";
                }
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </div>
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", [])) {
            // line 33
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute($context["toggle"], "position", []) == "top")) {
                    // line 35
                    echo "                  <div class=\"rescue-toggle  rescue-all\">
                    <h3 class=\"rescue-toggle-trigger\">";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "title", []), "html", null, true);
                    echo "</h3>
                    <div class=\"rescue-toggle-container\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "description", []), "html", null, true);
                    echo "</div>
                  </div>
                ";
                }
                // line 40
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            <hr class=\"rescue-spacing \" style=\"height: 30px\">
            ";
        }
        // line 43
        echo "            ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            <div class=\"entry-content\">
              ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", [])) {
            // line 46
            echo "              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              <div class=\"rescue-column rescue-all\">
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", []));
            foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                // line 49
                echo "                  ";
                if (($this->getAttribute($context["bar"], "position", []) == "bottom")) {
                    // line 50
                    echo "                 <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                    echo "%\">
                    <div class=\"rescue-progressbar-title\" style=\"background: ";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                    echo ";\"><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "title", []), "html", null, true);
                    echo "</span></div>
                    <div class=\"rescue-progressbar-bar\" style=\"background: ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                    echo ";\"></div>
                    <div class=\"rescue-progress-bar-percent\">";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                    echo "%</div>
                 </div>
                 ";
                }
                // line 56
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "              </div>
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              ";
        }
        // line 60
        echo "              ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", [])) {
            // line 61
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                // line 62
                echo "                  ";
                if (($this->getAttribute($context["toggle"], "position", []) == "bottom")) {
                    // line 63
                    echo "                    <div class=\"rescue-toggle  rescue-all\">
                      <h3 class=\"rescue-toggle-trigger\">";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "title", []), "html", null, true);
                    echo "</h3>
                      <div class=\"rescue-toggle-container\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "description", []), "html", null, true);
                    echo "</div>
                    </div>
                  ";
                }
                // line 68
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "              <hr class=\"rescue-spacing \" style=\"height: 30px\">
              ";
        }
        // line 71
        echo "          </div>
        </article>
      </main>
    </div>
    ";
        // line 75
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            // line 76
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 78
            $this->loadTemplate("partials/sidebar.html.twig", "default.html.twig", 78)->display($context);
            // line 79
            echo "      </div>
    </div>
    ";
        }
        // line 82
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 82,  246 => 79,  244 => 78,  240 => 76,  238 => 75,  232 => 71,  228 => 69,  222 => 68,  216 => 65,  212 => 64,  209 => 63,  206 => 62,  201 => 61,  198 => 60,  193 => 57,  187 => 56,  181 => 53,  177 => 52,  171 => 51,  166 => 50,  163 => 49,  159 => 48,  155 => 46,  153 => 45,  147 => 43,  143 => 41,  137 => 40,  131 => 37,  127 => 36,  124 => 35,  121 => 34,  116 => 33,  114 => 32,  111 => 31,  106 => 28,  100 => 27,  94 => 24,  90 => 23,  84 => 22,  79 => 21,  76 => 20,  72 => 19,  68 => 17,  66 => 16,  58 => 11,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              {{ page.header.title }}
            </h2>
          </header>
          <div class=\"entry-content\">

            {% if page.header.progressbar %}
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            <div class=\"rescue-column rescue-all\">
            {% for bar in page.header.progressbar %}
                {% if bar.position == 'top' %}
               <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"{{ bar.percent }}%\">
                  <div class=\"rescue-progressbar-title\" style=\"background: {{ bar.background }};\"><span>{{ bar.title }}</span></div>
                  <div class=\"rescue-progressbar-bar\" style=\"background: {{ bar.background }};\"></div>
                  <div class=\"rescue-progress-bar-percent\">{{ bar.percent }}%</div>
               </div>
               {% endif %}
            {% endfor %}
            </div>
            <hr class=\"rescue-spacing \" style=\"height: 10px\">
            {% endif %}

            {% if page.header.toggles %}
              {% for toggle in page.header.toggles %}
                {% if toggle.position == 'top' %}
                  <div class=\"rescue-toggle  rescue-all\">
                    <h3 class=\"rescue-toggle-trigger\">{{ toggle.title }}</h3>
                    <div class=\"rescue-toggle-container\">{{ toggle.description }}</div>
                  </div>
                {% endif %}
              {% endfor %}
            <hr class=\"rescue-spacing \" style=\"height: 30px\">
            {% endif %}
            {{ page.content|raw }}
            <div class=\"entry-content\">
              {% if page.header.progressbar %}
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              <div class=\"rescue-column rescue-all\">
              {% for bar in page.header.progressbar %}
                  {% if bar.position == 'bottom' %}
                 <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"{{ bar.percent }}%\">
                    <div class=\"rescue-progressbar-title\" style=\"background: {{ bar.background }};\"><span>{{ bar.title }}</span></div>
                    <div class=\"rescue-progressbar-bar\" style=\"background: {{ bar.background }};\"></div>
                    <div class=\"rescue-progress-bar-percent\">{{ bar.percent }}%</div>
                 </div>
                 {% endif %}
              {% endfor %}
              </div>
              <hr class=\"rescue-spacing \" style=\"height: 10px\">
              {% endif %}
              {% if page.header.toggles %}
                {% for toggle in page.header.toggles %}
                  {% if toggle.position == 'bottom' %}
                    <div class=\"rescue-toggle  rescue-all\">
                      <h3 class=\"rescue-toggle-trigger\">{{ toggle.title }}</h3>
                      <div class=\"rescue-toggle-container\">{{ toggle.description }}</div>
                    </div>
                  {% endif %}
                {% endfor %}
              <hr class=\"rescue-spacing \" style=\"height: 30px\">
              {% endif %}
          </div>
        </article>
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
", "default.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\default.html.twig");
    }
}
