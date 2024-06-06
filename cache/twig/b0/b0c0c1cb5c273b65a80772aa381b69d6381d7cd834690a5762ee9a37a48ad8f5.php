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

/* partials/base.html.twig */
class __TwigTemplate_f4f4866a7f8ce189fbfd7a5fc216efdcf743a5f5ca7141c533f0b8c6f0840fa7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('navigation', $context, $blocks);
        // line 52
        echo "
        <div id=\"content\" class=\"site-content\">
          ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>

        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "    </div>

    <script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar infiniteScroll = {\"settings\":{\"id\":\"main\",\"type\":\"scroll\",\"wrapper\":true,\"wrapper_class\":\"infinite-wrap\",\"footer\":\"page\",\"click_handle\":\"1\",\"text\":\"Older posts\"}};
\t\t//]]>
\t\t</script>
    <div id=\"infinite-footer\">
      <div class=\"container\">
        <div class=\"blog-info\">
          <a id=\"infinity-blog-title\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\" rel=\"home\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\">
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "
          </a>
        </div>
        ";
        // line 74
        if ($this->getAttribute(($context["site"] ?? null), "copyright", [])) {
            // line 75
            echo "        <div class=\"blog-credits\">
              ";
            // line 76
            echo $this->getAttribute(($context["site"] ?? null), "copyright", []);
            echo "
        </div>
        ";
        }
        // line 79
        echo "      </div>
    </div>

";
        // line 82
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/favicon.png\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    <link rel='stylesheet' id='gateway-fonts-css'  href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\" type='text/css' media='all' />
    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('assets', $context, $blocks);
        // line 39
        echo "
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.min.css"], "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://fonts/css/font-awesome.css", 1 => 100], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/rescue_shortcodes_styles.css"], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/app.css"], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://genericons/genericons.css"], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/jetpack.css"], "method");
        // line 20
        echo "    ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/foundation.js"], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.js", 1 => 100], "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skip-link-focus-fix.js"], "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/scripts.js"], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/rescue_toggle.js"], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/rescue_progressbar.js"], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/waypoints.min.js"], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/infinity.js"], "method");
        // line 33
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 35
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 36
        echo "    \t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
        // line 37
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        // line 46
        echo "          ";
        $this->loadTemplate("partials/header_alt.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 49
    public function block_navigation($context, array $blocks = [])
    {
        // line 50
        echo "          ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "        ";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
    }

    // line 57
    public function block_footer($context, array $blocks = [])
    {
        // line 58
        echo "          ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 59,  280 => 58,  277 => 57,  272 => 54,  268 => 51,  265 => 50,  262 => 49,  258 => 47,  255 => 46,  252 => 45,  245 => 37,  240 => 36,  237 => 35,  228 => 33,  225 => 32,  222 => 31,  219 => 30,  216 => 29,  213 => 28,  210 => 27,  207 => 26,  204 => 25,  201 => 24,  198 => 23,  194 => 20,  191 => 19,  188 => 18,  185 => 17,  182 => 16,  179 => 15,  176 => 14,  173 => 13,  170 => 12,  165 => 39,  163 => 35,  160 => 34,  158 => 23,  154 => 21,  152 => 12,  147 => 10,  144 => 9,  142 => 8,  134 => 7,  131 => 6,  128 => 5,  119 => 82,  114 => 79,  108 => 76,  105 => 75,  103 => 74,  97 => 71,  91 => 70,  79 => 60,  77 => 57,  73 => 55,  71 => 54,  67 => 52,  65 => 49,  62 => 48,  60 => 45,  54 => 42,  51 => 41,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.png\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/animate.min.css') %}
        {% do assets.addCss('theme://fonts/css/font-awesome.css',100) %}
        {% do assets.addCss('theme://css/rescue_shortcodes_styles.css') %}
        {% do assets.addCss('theme://css/app.css') %}
        {% do assets.addCss('theme://css/style.css') %}
        {% do assets.addCss('theme://genericons/genericons.css') %}
        {% do assets.addCss('theme://css/jetpack.css') %}
    {% endblock %}

    <link rel='stylesheet' id='gateway-fonts-css'  href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\" type='text/css' media='all' />
    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/foundation.js') %}
        {% do assets.addJs('theme://js/modernizr.custom.js',100) %}
        {% do assets.addJs('theme://js/skip-link-focus-fix.js') %}
        {% do assets.addJs('theme://js/scripts.js') %}
        {% do assets.addJs('theme://js/rescue_toggle.js') %}
        {% do assets.addJs('theme://js/rescue_progressbar.js') %}
        {% do assets.addJs('theme://js/waypoints.min.js') %}
        {% do assets.addJs('theme://js/infinity.js') %}
    {% endblock %}

    {% block assets deferred %}
    \t{{ assets.css()|raw }}
      {{ assets.js()|raw }}
    {% endblock %}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        {% block header %}
          {% include 'partials/header_alt.html.twig' %}
        {% endblock %}

        {% block navigation %}
          {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        <div id=\"content\" class=\"site-content\">
          {% block content %}{% endblock %}
        </div>

        {% block footer %}
          {% include 'partials/footer.html.twig' %}
        {% endblock %}
    </div>

    <script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar infiniteScroll = {\"settings\":{\"id\":\"main\",\"type\":\"scroll\",\"wrapper\":true,\"wrapper_class\":\"infinite-wrap\",\"footer\":\"page\",\"click_handle\":\"1\",\"text\":\"Older posts\"}};
\t\t//]]>
\t\t</script>
    <div id=\"infinite-footer\">
      <div class=\"container\">
        <div class=\"blog-info\">
          <a id=\"infinity-blog-title\" href=\"{{ base_url_absolute }}\" rel=\"home\" title=\"{{ site.title }}\">
            {{ site.title }}
          </a>
        </div>
        {% if site.copyright %}
        <div class=\"blog-credits\">
              {{ site.copyright|raw }}
        </div>
        {% endif %}
      </div>
    </div>

{{ assets.js('bottom')|raw }}
</body>
</html>
", "partials/base.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
