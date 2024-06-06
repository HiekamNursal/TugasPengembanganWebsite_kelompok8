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

/* partials/comments.html.twig */
class __TwigTemplate_089b665076b9eb0f24fd745bfe935edb7b7379f39f202981865a302cbebb8f0e extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "enable", [])) {
            // line 2
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []))) {
                // line 3
                echo "<ol class=\"comment-list\">
  ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", [])));
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
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 5
                    echo "  <li class=\"comment byuser bypostauthor thread-";
                    if (($this->getAttribute($context["loop"], "index", []) % 2 == 0)) {
                        echo "even";
                    } else {
                        echo "odd";
                    }
                    echo " depth-1 parent\">
    <div id=\"comment-";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\" class=\" clearfix\">
      <div class=\"comment-content\">
        <div class=\"comment-text\">
          <p class=\"comment-meta-header\">
            <cite class=\"fn\">";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", []));
                    echo "</cite>
            <span class=\"comment-meta commentmetadata\">";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_COMMENTS.WRITTEN_ON"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", []));
                    echo "</span>
          </p>

          ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", []));
                    echo "
          <br />
        </div>
      </div>
    </div>
  </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "</ol>
";
            }
            // line 23
            echo "
<div class=\"comment-replybox-thread\">
  <form class=\"contact-form\" name=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "name", []), "html", null, true);
            echo "\"
  action=\"";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "action", []))) : ($this->getAttribute(($context["page"] ?? null), "url", []))), "html", null, true);
            echo "\"
  method=\"";
            // line 27
            echo twig_escape_filter($this->env, _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "method", [])), "POST"), "html", null, true);
            echo "\">
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 29
                echo "
  ";
                // line 30
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 31
                echo "  ";
                if ($this->getAttribute($context["field"], "evaluateDefault", [])) {
                    // line 32
                    echo "  ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->evaluateStringFunc($context, $this->getAttribute($context["field"], "evaluateDefault", []));
                    // line 33
                    echo "  ";
                }
                // line 34
                echo "  <div>
    ";
                // line 35
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "partials/comments.html.twig", 35)->display($context);
                // line 36
                echo "  </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
  <div class=\"buttons\">
    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 41
                echo "    <button class=\"btn\" type=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit"), "html", null, true);
                echo "</button>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  </div>

  ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("form", "form-nonce"), "html", null, true);
            echo "
</form>

";
            // line 48
            if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
                // line 49
                echo "<div class=\"alert\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "message", []), "html", null, true);
                echo "</div>
";
            }
            // line 51
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 51,  205 => 49,  203 => 48,  197 => 45,  193 => 43,  182 => 41,  178 => 40,  174 => 38,  159 => 36,  157 => 35,  154 => 34,  151 => 33,  148 => 32,  145 => 31,  143 => 30,  140 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  107 => 23,  103 => 21,  82 => 14,  74 => 11,  70 => 10,  63 => 6,  54 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if grav.twig.enable %}
{% if grav.twig.comments|length %}
<ol class=\"comment-list\">
  {% for comment in grav.twig.comments|array_reverse %}
  <li class=\"comment byuser bypostauthor thread-{% if loop.index is even %}even{% else %}odd{% endif %} depth-1 parent\">
    <div id=\"comment-{{ loop.index }}\" class=\" clearfix\">
      <div class=\"comment-content\">
        <div class=\"comment-text\">
          <p class=\"comment-meta-header\">
            <cite class=\"fn\">{{comment.author|e}}</cite>
            <span class=\"comment-meta commentmetadata\">{{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}}</span>
          </p>

          {{comment.text|e}}
          <br />
        </div>
      </div>
    </div>
  </li>
  {% endfor %}
</ol>
{% endif %}

<div class=\"comment-replybox-thread\">
  <form class=\"contact-form\" name=\"{{ grav.config.plugins.comments.form.name }}\"
  action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
  method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">
  {% for field in grav.config.plugins.comments.form.fields %}

  {% set value = form.value(field.name) %}
  {% if field.evaluateDefault %}
  {% set value = evaluate(field.evaluateDefault) %}
  {% endif %}
  <div>
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
  </div>
  {% endfor %}

  <div class=\"buttons\">
    {% for button in grav.config.plugins.comments.form.buttons %}
    <button class=\"btn\" type=\"{{ button.type|default('submit') }}\">{{ button.value|t|default('Submit') }}</button>
    {% endfor %}
  </div>

  {{ nonce_field('form', 'form-nonce') }}
</form>

{% if form.message %}
<div class=\"alert\">{{ form.message }}</div>
{% endif %}
</div>

{% endif %}
", "partials/comments.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\comments.html.twig");
    }
}
