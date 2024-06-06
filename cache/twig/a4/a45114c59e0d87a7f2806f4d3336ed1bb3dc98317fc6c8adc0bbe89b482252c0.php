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

/* partials/blog_item.html.twig */
class __TwigTemplate_097ebe3c33e92e39c1b11b50a3c3ed730f31ddae093cdc97f3cb08343bb2a9d6 extends \Twig\Template
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
        echo "<article ";
        if ($this->getAttribute(($context["loop"] ?? null), "index", [])) {
            echo "id=\"post-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix ";
        if ($this->getAttribute(($context["loop"] ?? null), "index", [])) {
            echo "post-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
        }
        echo " post type-post format-standard has-post-thumbnail ";
        if (($context["truncate"] ?? null)) {
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "post_class", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "post_class", []), "html", null, true);
            }
        }
        echo " hentry category-featured\">
  <div class=\"featured-image\">
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 356, 1 => 356], "method"), "html", []);
        echo "
  </div>
  <header class=\"entry-header\">
    <h3 class=\"entry-title\">
      ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 8
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 10
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</a>
      ";
        }
        // line 12
        echo "    </h3>
    ";
        // line 13
        if (($context["truncate"] ?? null)) {
            // line 14
            echo "    <div class=\"entry-date\">
      ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "n") - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y"), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ( !($context["truncate"] ?? null)) {
            // line 20
            echo "    <div class=\"entry-meta\">
      <span class=\"posted-on\">Posted on
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\" rel=\"bookmark\">
          <time class=\"entry-date published\" datetime=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "n") - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y"), "html", null, true);
            echo "\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "n") - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y"), "html", null, true);
            echo "
          </time>
        </a>
      </span>
      <span class=\"byline\"> by
        <span class=\"author vcard\">
          ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "html", null, true);
            echo "
        </span>
      </span>
    </div>
    ";
        }
        // line 35
        echo "  </header>

  <div class=\"entry-content\">
    ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 39
            echo "    <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
    ";
            // line 40
            if ( !($context["truncate"] ?? null)) {
                // line 41
                echo "    ";
                $context["show_prev_next"] = true;
                // line 42
                echo "    ";
            }
            // line 43
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && (($context["readmore"] ?? null) === false))) {
            // line 44
            echo "    ";
            echo Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 200, true);
            echo "
    ";
        } elseif ((        // line 45
($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 46
            echo "    <p>
      ";
            // line 47
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["page"] ?? null), "summary", [])), "html", null, true);
            echo "
      <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">more...</a>
    </p>
    ";
        } elseif (        // line 50
($context["truncate"] ?? null)) {
            // line 51
            echo "    <p>
      ";
            // line 52
            echo twig_escape_filter($this->env, strip_tags(Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550)), "html", null, true);
            echo "
      <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">more...</a>
    </p>
    ";
        } else {
            // line 56
            echo "
    ";
            // line 57
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", [])) {
                // line 58
                echo "    <hr class=\"rescue-spacing \" style=\"height: 10px\">
    <div class=\"rescue-column rescue-all\">
    ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", []));
                foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                    // line 61
                    echo "        ";
                    if (($this->getAttribute($context["bar"], "position", []) == "top")) {
                        // line 62
                        echo "       <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                        echo "%\">
          <div class=\"rescue-progressbar-title\" style=\"background: ";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                        echo ";\"><span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "title", []), "html", null, true);
                        echo "</span></div>
          <div class=\"rescue-progressbar-bar\" style=\"background: ";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                        echo ";\"></div>
          <div class=\"rescue-progress-bar-percent\">";
                        // line 65
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                        echo "%</div>
       </div>
       ";
                    }
                    // line 68
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "    </div>
    <hr class=\"rescue-spacing \" style=\"height: 10px\">
    ";
            }
            // line 72
            echo "
    ";
            // line 73
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", [])) {
                // line 74
                echo "    <hr class=\"rescue-spacing \" style=\"height: 30px\">
      ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", []));
                foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                    // line 76
                    echo "        ";
                    if (($this->getAttribute($context["toggle"], "position", []) == "top")) {
                        // line 77
                        echo "          <div class=\"rescue-toggle  rescue-all\">
            <h3 class=\"rescue-toggle-trigger\">";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "title", []), "html", null, true);
                        echo "</h3>
            <div class=\"rescue-toggle-container\">";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "description", []), "html", null, true);
                        echo "</div>
          </div>
        ";
                    }
                    // line 82
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "    <hr class=\"rescue-spacing \" style=\"height: 30px\">
    ";
            }
            // line 85
            echo "    <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
    <div class=\"entry-content\">

      ";
            // line 88
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", [])) {
                // line 89
                echo "      <hr class=\"rescue-spacing \" style=\"height: 10px\">
      <div class=\"rescue-column rescue-all\">
      ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "progressbar", []));
                foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                    // line 92
                    echo "          ";
                    if (($this->getAttribute($context["bar"], "position", []) == "bottom")) {
                        // line 93
                        echo "         <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                        echo "%\">
            <div class=\"rescue-progressbar-title\" style=\"background: ";
                        // line 94
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                        echo ";\"><span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "title", []), "html", null, true);
                        echo "</span></div>
            <div class=\"rescue-progressbar-bar\" style=\"background: ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "background", []), "html", null, true);
                        echo ";\"></div>
            <div class=\"rescue-progress-bar-percent\">";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "percent", []), "html", null, true);
                        echo "%</div>
         </div>
         ";
                    }
                    // line 99
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "      </div>
      <hr class=\"rescue-spacing \" style=\"height: 10px\">
      ";
            }
            // line 103
            echo "
      ";
            // line 104
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", [])) {
                // line 105
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "toggles", []));
                foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                    // line 106
                    echo "          ";
                    if (($this->getAttribute($context["toggle"], "position", []) == "bottom")) {
                        // line 107
                        echo "            <div class=\"rescue-toggle  rescue-all\">
              <h3 class=\"rescue-toggle-trigger\">";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "title", []), "html", null, true);
                        echo "</h3>
              <div class=\"rescue-toggle-container\">";
                        // line 109
                        echo twig_escape_filter($this->env, $this->getAttribute($context["toggle"], "description", []), "html", null, true);
                        echo "</div>
            </div>
          ";
                    }
                    // line 112
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "      <hr class=\"rescue-spacing \" style=\"height: 30px\">
      ";
            }
            // line 115
            echo "    ";
            $context["show_prev_next"] = true;
            // line 116
            echo "    ";
        }
        // line 117
        echo "

    ";
        // line 119
        if ( !($context["truncate"] ?? null)) {
            // line 120
            echo "      <div class=\"sharedaddy sd-sharing-enabled\">
        <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
          <h3 class=\"sd-title\">";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "SHARE"), "html", null, true);
            echo "</h3>
          <div class=\"sd-content\">
            <ul>
              <li class=\"share-facebook\">
                <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "\"><span>Facebook</span></a>
              </li>
              <li class=\"share-twitter\">
                <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status=";
            // line 129
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "\"><span>Twitter</span></a>
              </li>
              <li class=\"share-google-plus-1\">
                <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url=";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "\"><span>Google</span></a>
              </li>
              <li class=\"share-pinterest\">
                <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "\"><span>Pinterest</span></a>
              </li>
              <li class=\"share-end\"></li>
            </ul>
          </div>
        </div>
      </div>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
      ";
        }
        // line 149
        echo "
      ";
        // line 150
        if ( !($context["truncate"] ?? null)) {
            // line 151
            echo "    <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
      <h3 class=\"jp-relatedposts-headline\"><em>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "RELATED_POSTS"), "html", null, true);
            echo "</em></h3>
      <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
        ";
            // line 154
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 154)->display($context);
            // line 155
            echo "      </div>
    </div>
    <hr/>
    ";
        }
        // line 159
        echo "  </div>

  <footer class=\"entry-footer clearfix\">
    <span class=\"left\">
      <a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "#comments\"><i class=\"fa fa-comment\"></i></a>
      <a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\"><i class=\"fa fa-link\"></i></a>
    </span>
    <span class=\"right\">
      ";
        // line 167
        if ( !($context["truncate"] ?? null)) {
            // line 168
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
                // line 169
                echo "        <span class=\"tags-links\">
          ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 171
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/tag";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["tag"]), "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", [])) {
                        echo ",";
                    }
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "        </span>
        ";
            }
            // line 175
            echo "      ";
        }
        // line 176
        echo "    </span>
  </footer>
</article>

";
        // line 180
        if (($context["show_prev_next"] ?? null)) {
            // line 181
            echo "<nav class=\"navigation post-navigation clearfix\" role=\"navigation\">
  <h1 class=\"screen-reader-text\">Post navigation</h1>
  <div class=\"nav-links clearfix\">
    <div class=\"nav-previous\"><a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []), "html", null, true);
            echo "\" rel=\"prev\"><span class=\"meta-nav\">←</span>&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "header", []), "title", []), "html", null, true);
            echo "</a></div>
    <div class=\"nav-next\"><a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []), "html", null, true);
            echo "\" rel=\"next\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "header", []), "title", []), "html", null, true);
            echo "&nbsp;<span class=\"meta-nav\">→</span></a></div>
  </div>
</nav>
";
        }
        // line 189
        echo "
";
        // line 190
        if ( !($context["truncate"] ?? null)) {
            // line 191
            echo "  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "provider", []))) {
                // line 192
                echo "  <div class=\"comments-area-wrapper\">
    <div class=\"comments-area\">
    <h2 class=\"comments-title\">Comments:</h2>
      ";
                // line 195
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('jscomments')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "provider", [])]), "html", null, true);
                echo "
    </div>
  </div>
  ";
            }
            // line 199
            echo "
  ";
            // line 200
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", [])) {
                // line 201
                echo "  <div class=\"comments-area-wrapper\" id=\"comments\">
    <div class=\"comments-area\">
      <h2 class=\"comments-title\">";
                // line 203
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", [])), "html", null, true);
                echo " Comments:</h2>
      ";
                // line 204
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 204)->display(twig_array_merge($context, ["page" => ($context["page"] ?? null)]));
                // line 205
                echo "    </div>
  </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 205,  584 => 204,  580 => 203,  576 => 201,  574 => 200,  571 => 199,  564 => 195,  559 => 192,  556 => 191,  554 => 190,  551 => 189,  542 => 185,  536 => 184,  531 => 181,  529 => 180,  523 => 176,  520 => 175,  516 => 173,  491 => 171,  474 => 170,  471 => 169,  468 => 168,  466 => 167,  460 => 164,  456 => 163,  450 => 159,  444 => 155,  442 => 154,  437 => 152,  434 => 151,  432 => 150,  429 => 149,  410 => 135,  402 => 132,  392 => 129,  384 => 126,  377 => 122,  373 => 120,  371 => 119,  367 => 117,  364 => 116,  361 => 115,  357 => 113,  351 => 112,  345 => 109,  341 => 108,  338 => 107,  335 => 106,  330 => 105,  328 => 104,  325 => 103,  320 => 100,  314 => 99,  308 => 96,  304 => 95,  298 => 94,  293 => 93,  290 => 92,  286 => 91,  282 => 89,  280 => 88,  273 => 85,  269 => 83,  263 => 82,  257 => 79,  253 => 78,  250 => 77,  247 => 76,  243 => 75,  240 => 74,  238 => 73,  235 => 72,  230 => 69,  224 => 68,  218 => 65,  214 => 64,  208 => 63,  203 => 62,  200 => 61,  196 => 60,  192 => 58,  190 => 57,  187 => 56,  181 => 53,  177 => 52,  174 => 51,  172 => 50,  167 => 48,  163 => 47,  160 => 46,  158 => 45,  153 => 44,  150 => 43,  147 => 42,  144 => 41,  142 => 40,  137 => 39,  135 => 38,  130 => 35,  122 => 30,  111 => 24,  105 => 23,  101 => 22,  97 => 20,  95 => 19,  92 => 18,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  68 => 10,  60 => 8,  58 => 7,  51 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article {% if loop.index %}id=\"post-{{ loop.index }}\"{% endif %} class=\"clearfix {% if loop.index %}post-{{ loop.index }}{% endif %} post type-post format-standard has-post-thumbnail {% if truncate %}{% if page.header.post_class %}{{ page.header.post_class }}{% endif %}{% endif %} hentry category-featured\">
  <div class=\"featured-image\">
    {{ page.media.images|first.cropZoom(356,356).html|raw }}
  </div>
  <header class=\"entry-header\">
    <h3 class=\"entry-title\">
      {% if page.header.link %}
      <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
      {% else %}
      <a href=\"{{ page.url }}\">{{ page.title }}</a>
      {% endif %}
    </h3>
    {% if truncate %}
    <div class=\"entry-date\">
      {{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('d, Y') }}
    </div>
    {% endif %}

    {% if not truncate %}
    <div class=\"entry-meta\">
      <span class=\"posted-on\">Posted on
        <a href=\"{{ page.url }}\" rel=\"bookmark\">
          <time class=\"entry-date published\" datetime=\"{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('d, Y') }}\">
            {{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('d, Y') }}
          </time>
        </a>
      </span>
      <span class=\"byline\"> by
        <span class=\"author vcard\">
          {{ page.header.author }}
        </span>
      </span>
    </div>
    {% endif %}
  </header>

  <div class=\"entry-content\">
    {% if page.header.continue_link is sameas(false) %}
    <p>{{ page.content|raw }}</p>
    {% if not truncate %}
    {% set show_prev_next = true %}
    {% endif %}
    {% elseif truncate and readmore is sameas(false) %}
    {{ page.content|truncate(200, true)|raw }}
    {% elseif truncate and page.summary != page.content %}
    <p>
      {{ page.summary|striptags }}
      <a href=\"{{ page.url }}\">more...</a>
    </p>
    {% elseif truncate %}
    <p>
      {{ page.content|truncate(550)|striptags }}
      <a href=\"{{ page.url }}\">more...</a>
    </p>
    {% else %}

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
    <hr class=\"rescue-spacing \" style=\"height: 30px\">
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
    <p>{{ page.content|raw }}</p>
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
    {% set show_prev_next = true %}
    {% endif %}


    {% if not truncate %}
      <div class=\"sharedaddy sd-sharing-enabled\">
        <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
          <h3 class=\"sd-title\">{{ 'SHARE'|t }}</h3>
          <div class=\"sd-content\">
            <ul>
              <li class=\"share-facebook\">
                <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Facebook</span></a>
              </li>
              <li class=\"share-twitter\">
                <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Twitter</span></a>
              </li>
              <li class=\"share-google-plus-1\">
                <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Google</span></a>
              </li>
              <li class=\"share-pinterest\">
                <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Pinterest</span></a>
              </li>
              <li class=\"share-end\"></li>
            </ul>
          </div>
        </div>
      </div>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
      {% endif %}

      {% if not truncate %}
    <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
      <h3 class=\"jp-relatedposts-headline\"><em>{{ 'RELATED_POSTS'|t }}</em></h3>
      <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
        {% include 'partials/relatedpages.html.twig' %}
      </div>
    </div>
    <hr/>
    {% endif %}
  </div>

  <footer class=\"entry-footer clearfix\">
    <span class=\"left\">
      <a href=\"{{ page.url }}#comments\"><i class=\"fa fa-comment\"></i></a>
      <a href=\"{{ page.url }}\"><i class=\"fa fa-link\"></i></a>
    </span>
    <span class=\"right\">
      {% if not truncate %}
        {% if page.taxonomy.tag %}
        <span class=\"tags-links\">
          {% for tag in page.taxonomy.tag %}
            <a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag|capitalize }}{% if not loop.last %},{% endif %}</a>
          {% endfor %}
        </span>
        {% endif %}
      {% endif %}
    </span>
  </footer>
</article>

{% if show_prev_next %}
<nav class=\"navigation post-navigation clearfix\" role=\"navigation\">
  <h1 class=\"screen-reader-text\">Post navigation</h1>
  <div class=\"nav-links clearfix\">
    <div class=\"nav-previous\"><a href=\"{{ page.prevSibling.url }}\" rel=\"prev\"><span class=\"meta-nav\">←</span>&nbsp;{{ page.prevSibling.header.title }}</a></div>
    <div class=\"nav-next\"><a href=\"{{ page.nextSibling.url }}\" rel=\"next\">{{ page.nextSibling.header.title }}&nbsp;<span class=\"meta-nav\">→</span></a></div>
  </div>
</nav>
{% endif %}

{% if not truncate %}
  {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
  <div class=\"comments-area-wrapper\">
    <div class=\"comments-area\">
    <h2 class=\"comments-title\">Comments:</h2>
      {{ jscomments(config.plugins.jscomments.provider) }}
    </div>
  </div>
  {% endif %}

  {% if config.plugins.comments.enabled %}
  <div class=\"comments-area-wrapper\" id=\"comments\">
    <div class=\"comments-area\">
      <h2 class=\"comments-title\">{{ grav.twig.comments|length }} Comments:</h2>
      {% include 'partials/comments.html.twig' with {'page': page} %}
    </div>
  </div>
  {% endif %}
{% endif %}
", "partials/blog_item.html.twig", "D:\\Kuliah\\Semester 4\\PWEB TEO\\projek akhir\\grav-v1.7.46\\grav\\user\\themes\\gateway\\templates\\partials\\blog_item.html.twig");
    }
}
