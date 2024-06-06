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

/* modular/default.html.twig */
class __TwigTemplate_2c3e871f8fc04fd8c1c5de8bc6067e4ba17335864c0bf0c0366a48b2da8de0fc extends \Twig\Template
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
        echo "<div class=\"row ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []), "html", null, true);
        echo "\">
   <div class=\"large-12 columns\">
     ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", [])) {
            // line 4
            echo "      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-vimeo\" style=\"text-align:center;\"><iframe src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []), "src", []), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []), "width", []), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []), "height", []), "html", null, true);
            echo "\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      ";
        }
        // line 8
        echo "      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
         <p>
           ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 12
            echo "           <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  41 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row {{ page.header.class }}\">
   <div class=\"large-12 columns\">
     {% if page.header.vimeo %}
      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-vimeo\" style=\"text-align:center;\"><iframe src=\"{{ page.header.vimeo.src }}\" width=\"{{ page.header.vimeo.width }}\" height=\"{{ page.header.vimeo.height }}\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      {% endif %}
      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         {{ page.content|raw }}
         <p>
           {% for button in page.header.buttons %}
           <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
           {% endfor %}
         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
", "modular/default.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\modular\\default.html.twig");
    }
}
