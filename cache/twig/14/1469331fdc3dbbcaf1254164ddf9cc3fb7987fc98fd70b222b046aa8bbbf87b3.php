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

/* partials/header.html.twig */
class __TwigTemplate_67180ac410ce4a288ed1ac7511f96eeea53e9bd286d113b5963232ea435ec182 extends \Twig\Template
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
        echo "
<style type=\"text/css\" id=\"rescue_custom_css\">
.home-header-bg {
  position: relative; /* Tambahkan posisi relatif */
  overflow: hidden; 
  background:url( '";
        // line 6
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "background", []), "html", null, true);
        echo "' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.bg-overlay { /* Tambahkan lapisan tambahan */
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Warna gelap dengan opacity 0.5 */
}

/* for background-size:cover replacement on iOS devices */
@media only screen and (max-width: 40em) {
  .home-header-bg {
    background-attachment: scroll;
  }
}
@media only screen and (orientation: portrait) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: auto 150%;
    background-attachment: scroll;
  }
}
@media only screen and (orientation: landscape) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: 150% auto;
    background-attachment: scroll;
  }
}

.bg-image-header {
  background: url( '";
        // line 42
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "background", []), "html", null, true);
        echo "' ) center bottom #ffffff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.bg-center-center {
  background-position: center center;
}

.site-branding {
  position: relative;
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"home-header-bg clearfix\">
  <div class=\"bg-overlay\"></div>
  <div class=\"site-branding\">
    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">
      <img class=\"logo\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" width=\"20%\"></a>
    </div>
    <div class=\"hero-widgets-wrap\">
      <div class=\"row\">
        <div class=\"large-8 large-centered columns\">
          <aside id=\"text-3\" class=\"widget widget_text\">
            <h1 class=\"widget-title\">";
        // line 72
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "title", []);
        echo "</h1>
            <div class=\"textwidget\">
              <p>";
        // line 74
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "description", []);
        echo "</p>
              <p>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 77
            echo "                <a href=\"";
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
        // line 79
        echo "              </p>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 79,  137 => 77,  133 => 76,  128 => 74,  123 => 72,  110 => 66,  106 => 65,  78 => 42,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<style type=\"text/css\" id=\"rescue_custom_css\">
.home-header-bg {
  position: relative; /* Tambahkan posisi relatif */
  overflow: hidden; 
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.bg-overlay { /* Tambahkan lapisan tambahan */
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Warna gelap dengan opacity 0.5 */
}

/* for background-size:cover replacement on iOS devices */
@media only screen and (max-width: 40em) {
  .home-header-bg {
    background-attachment: scroll;
  }
}
@media only screen and (orientation: portrait) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: auto 150%;
    background-attachment: scroll;
  }
}
@media only screen and (orientation: landscape) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: 150% auto;
    background-attachment: scroll;
  }
}

.bg-image-header {
  background: url( '{{ theme_url }}/img/{{ site.header.background }}' ) center bottom #ffffff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.bg-center-center {
  background-position: center center;
}

.site-branding {
  position: relative;
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"home-header-bg clearfix\">
  <div class=\"bg-overlay\"></div>
  <div class=\"site-branding\">
    <a href=\"{{ base_url_absolute }}\">
      <img class=\"logo\" src=\"{{ theme_url }}/img/{{ site.logo }}\" alt=\"{{ site.logo }}\" width=\"20%\"></a>
    </div>
    <div class=\"hero-widgets-wrap\">
      <div class=\"row\">
        <div class=\"large-8 large-centered columns\">
          <aside id=\"text-3\" class=\"widget widget_text\">
            <h1 class=\"widget-title\">{{ site.header.title|raw }}</h1>
            <div class=\"textwidget\">
              <p>{{ site.header.description|raw }}</p>
              <p>
                {% for button in site.header.buttons %}
                <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
                {% endfor %}
              </p>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
", "partials/header.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\header.html.twig");
    }
}
