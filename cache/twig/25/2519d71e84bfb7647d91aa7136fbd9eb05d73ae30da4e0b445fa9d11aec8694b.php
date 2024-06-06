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

/* partials/footer.html.twig */
class __TwigTemplate_d45ba5bcc2ff0130f5bb4a5887c268369db245c0bf3307e7aec7401a3bac3aa9 extends \Twig\Template
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
        echo "<div class=\"footer-wrap\">
   <div class=\"row\">
      <div class=\"large-12 columns\">
         <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
            <div class=\"row\">
               <div class=\"large-4 columns\">
                  <aside id=\"text-5\" class=\"widget widget_text\">
                    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "title", [])) {
            // line 9
            echo "                     <h1 class=\"widget-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "title", []), "html", null, true);
            echo "</h1>
                    ";
        }
        // line 11
        echo "                     <div class=\"textwidget\">
                       ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "description", [])) {
            // line 13
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "description", []), "html", null, true);
            echo "</p>
                      ";
        }
        // line 15
        echo "                        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "link", []), "url", []) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "link", []), "text", []))) {
            // line 16
            echo "                        <p><a class=\"more-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "link", []), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "widget", []), "link", []), "text", []), "html", null, true);
            echo "</a></p>
                        ";
        }
        // line 18
        echo "                     </div>
                  </aside>
               </div>
               ";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 22
            echo "               <div class=\"large-4 columns\">
                  <aside id=\"recent-posts-4\" class=\"widget widget_recent_entries\">
                      <h1 class=\"widget-title\">Archives</h1>
                     \t";
            // line 25
            $this->loadTemplate("partials/archives.html.twig", "partials/footer.html.twig", 25)->display($context);
            // line 26
            echo "                  </aside>
               </div>
               ";
        }
        // line 29
        echo "               <div class=\"large-4 columns\">
                 ";
        // line 30
        if ($this->getAttribute(($context["site"] ?? null), "social", [])) {
            // line 31
            echo "                  <aside id=\"text-6\" class=\"widget widget_text\">
                     <h1 class=\"widget-title\">Keep In Touch</h1>
                     <div class=\"textwidget\">
                       ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "                         <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\"><i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></i></a>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                     </div>
                  </aside>
                  ";
        }
        // line 40
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 41
            echo "                  <aside id=\"search-4\" class=\"widget widget_search search-form\">
                     <h1 class=\"widget-title\">Find What You Need</h1>
                         ";
            // line 43
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/footer.html.twig", 43)->display($context);
            // line 44
            echo "                  </aside>
                   ";
        }
        // line 46
        echo "               </div>
            </div>
            ";
        // line 48
        if ($this->getAttribute(($context["site"] ?? null), "copyright", [])) {
            // line 49
            echo "            <div class=\"site-info\">
               <p>
                  ";
            // line 51
            echo $this->getAttribute(($context["site"] ?? null), "copyright", []);
            echo "
               </p>
            </div>
            ";
        }
        // line 55
        echo "         </footer>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  141 => 51,  137 => 49,  135 => 48,  131 => 46,  127 => 44,  125 => 43,  121 => 41,  118 => 40,  113 => 37,  102 => 35,  98 => 34,  93 => 31,  91 => 30,  88 => 29,  83 => 26,  81 => 25,  76 => 22,  74 => 21,  69 => 18,  61 => 16,  58 => 15,  52 => 13,  50 => 12,  47 => 11,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-wrap\">
   <div class=\"row\">
      <div class=\"large-12 columns\">
         <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
            <div class=\"row\">
               <div class=\"large-4 columns\">
                  <aside id=\"text-5\" class=\"widget widget_text\">
                    {% if site.footer.widget.title %}
                     <h1 class=\"widget-title\">{{ site.footer.widget.title }}</h1>
                    {% endif %}
                     <div class=\"textwidget\">
                       {% if site.footer.widget.description %}
                        <p>{{ site.footer.widget.description }}</p>
                      {% endif %}
                        {% if site.footer.widget.link.url or site.footer.widget.link.text %}
                        <p><a class=\"more-link\" href=\"{{ site.footer.widget.link.url }}\">{{ site.footer.widget.link.text }}</a></p>
                        {% endif %}
                     </div>
                  </aside>
               </div>
               {% if config.plugins.archives.enabled %}
               <div class=\"large-4 columns\">
                  <aside id=\"recent-posts-4\" class=\"widget widget_recent_entries\">
                      <h1 class=\"widget-title\">Archives</h1>
                     \t{% include 'partials/archives.html.twig' %}
                  </aside>
               </div>
               {% endif %}
               <div class=\"large-4 columns\">
                 {% if site.social %}
                  <aside id=\"text-6\" class=\"widget widget_text\">
                     <h1 class=\"widget-title\">Keep In Touch</h1>
                     <div class=\"textwidget\">
                       {% for item in site.social %}
                         <a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a>
                       {% endfor %}
                     </div>
                  </aside>
                  {% endif %}
                  {% if config.plugins.simplesearch.enabled %}
                  <aside id=\"search-4\" class=\"widget widget_search search-form\">
                     <h1 class=\"widget-title\">Find What You Need</h1>
                         {% include 'partials/simplesearch_searchbox.html.twig' %}
                  </aside>
                   {% endif %}
               </div>
            </div>
            {% if site.copyright %}
            <div class=\"site-info\">
               <p>
                  {{ site.copyright|raw }}
               </p>
            </div>
            {% endif %}
         </footer>
      </div>
   </div>
</div>
", "partials/footer.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\footer.html.twig");
    }
}
