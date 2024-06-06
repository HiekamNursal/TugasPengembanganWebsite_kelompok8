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

/* partials/header_alt.html.twig */
class __TwigTemplate_536b46ae95eee616fd3533d9fdabe7489f1b47f9e11c9606cfd2cac394086f0c extends \Twig\Template
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
  background:url( '";
        // line 4
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "background", []), "html", null, true);
        echo "' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
  background:url( '";
        // line 30
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
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"bg-image bg-image-header bg-center-center\">
  <div class=\"site-branding\">
    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">
      <img class=\"logo\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" width=\"20%\">
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/header_alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 52,  92 => 51,  66 => 30,  35 => 4,  30 => 1,);
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
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) center bottom #ffffff;
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
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"bg-image bg-image-header bg-center-center\">
  <div class=\"site-branding\">
    <a href=\"{{ base_url_absolute }}\">
      <img class=\"logo\" src=\"{{ theme_url }}/img/{{ site.logo }}\" alt=\"{{ site.logo }}\" width=\"20%\">
    </a>
  </div>
</div>
", "partials/header_alt.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\header_alt.html.twig");
    }
}
