<?php

/* themes/magellantutoring/templates/page--fullwidth.html.twig */
class __TwigTemplate_abdc3a462bdb7ce61f37bbd2a28640ae5c0a80c952608d97a61b0a2e0c64a2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'header_first' => [$this, 'block_header_first'],
            'header_second' => [$this, 'block_header_second'],
            'main' => [$this, 'block_main'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 59, "if" => 63, "block" => 64];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if', 'block'],
                [],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 60
        echo "
<a id=\"top\"></a>
<div class=\"nav-container\">
  ";
        // line 63
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) || $this->getAttribute(($context["page"] ?? null), "branding", []))) {
            // line 64
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 119
        echo "</div>

";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
            // line 123
            echo "<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container ";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " \">
    <div class=\"row\">

      ";
            // line 128
            echo "
           ";
            // line 130
            $context["header_first_classes"] = [0 => (($this->getAttribute(            // line 131
($context["page"] ?? null), "header_second", [])) ? ("col-sm-9") : ("")), 1 => ((twig_test_empty($this->getAttribute(            // line 132
($context["page"] ?? null), "header_second", []))) ? ("col-sm-12") : (""))];
            // line 135
            echo "
      ";
            // line 136
            if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                // line 137
                echo "        ";
                $this->displayBlock('header_first', $context, $blocks);
                // line 142
                echo "      ";
            }
            // line 143
            echo "
          ";
            // line 145
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "header_second", [])) {
                // line 146
                echo "        ";
                $this->displayBlock('header_second', $context, $blocks);
                // line 151
                echo "      ";
            }
            // line 152
            echo "
        </div>
  </div>
</div>
";
        }
        // line 158
        echo "
";
        // line 160
        $this->displayBlock('main', $context, $blocks);
        // line 188
        echo "

";
        // line 190
        if ((((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fouth", [])) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 191
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 64
    public function block_navbar($context, array $blocks = [])
    {
        // line 65
        echo "    ";
        // line 66
        $context["navbar_classes"] = [0 =>         // line 67
($context["mainmenu_class"] ?? null), 1 =>         // line 68
($context["mainmenu_transparent"] ?? null)];
        // line 71
        echo "
    <!-- <div class=\"bar bar-sm visible-xs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-3 col-sm-2\">
                ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", []), "html", null, true));
        echo "
          </div>
          <div class=\"col-xs-9 col-sm-10 text-right\">
            <a href=\"#\" class=\"hamburger-toggle\" data-toggle-class=\"#menu1;hidden-xs\">
              <i class=\"icon icon-sm stack-interface stack-menu\"></i>
            </a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mainmenu_class"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mainmenu_transparent"] ?? null), "html", null, true));
        echo " -->
        <nav id=\"menu1\" class=\"bar bar--sm bar-1 bar--transparent bar--absolute\" ";
        // line 88
        if (($context["mainmenu_sticky"] ?? null)) {
            echo " data-scroll-class='360px:pos-fixed' ";
        }
        echo ">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-1 col-sm-1 hidden-xs\">
            <div class=\"bar__module mtlogo\">
              ";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", []), "html", null, true));
        echo "
            </div>
            <!--end module-->
          </div>

          ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 99
            echo "          <div class=\"col-md-6 col-sm-6 text-left text-left-xs text-left-sm\">
            <div class=\"bar__module\">
              ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []), "html", null, true));
            echo "
            </div>
          </div>
          ";
        }
        // line 105
        echo "
          ";
        // line 106
        if ($this->getAttribute(($context["page"] ?? null), "usertools", [])) {
            // line 107
            echo "          <div class=\"col-md-5 col-sm-5 text-right text-left-xs text-left-sm\">
            <div class=\"bar__module\">
              ";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "usertools", []), "html", null, true));
            echo "
            </div>
          </div>
          ";
        }
        // line 113
        echo "        </div>
      </div>
    </nav>

  ";
    }

    // line 137
    public function block_header_first($context, array $blocks = [])
    {
        // line 138
        echo "          <div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["header_first_classes"] ?? null)], "method"), "html", null, true));
        echo " role=\"headingfirst\">
            ";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", []), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 146
    public function block_header_second($context, array $blocks = [])
    {
        // line 147
        echo "          <div class=\"col-sm-3\" role=\"headingsecond\">
            ";
        // line 148
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_second", []), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 160
    public function block_main($context, array $blocks = [])
    {
        // line 161
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
      <div";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method"), "html", null, true));
        echo ">

        ";
        // line 165
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 166
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "

        ";
        // line 173
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 174
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 177
            echo "        ";
        }
        // line 178
        echo "
        ";
        // line 180
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 184
        echo "      </div>

  </div>
";
    }

    // line 166
    public function block_action_links($context, array $blocks = [])
    {
        // line 167
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 174
    public function block_help($context, array $blocks = [])
    {
        // line 175
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", []), "html", null, true));
        echo "
          ";
    }

    // line 180
    public function block_content($context, array $blocks = [])
    {
        // line 181
        echo "          <a id=\"main-content\"></a>
          ";
        // line 182
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true));
        echo "
        ";
    }

    // line 191
    public function block_footer($context, array $blocks = [])
    {
        // line 192
        echo "<footer class=\"footer-1 bg-dark\" role=\"contentinfo\">
        <!-- postscript -->
        ";
        // line 194
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fouth", []))) {
            // line 195
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_first\">
            ";
            // line 197
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_first", []), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_second\">
            ";
            // line 200
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_second", []), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_third\">
            ";
            // line 203
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_third", []), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_fouth\">
            ";
            // line 206
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_fouth", []), "html", null, true));
            echo "
          </div>
    </div>
    ";
        }
        // line 210
        echo "
    ";
        // line 211
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 212
            echo "        <div class=\"row\">
          ";
            // line 213
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", []), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 216
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/magellantutoring/templates/page--fullwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 216,  375 => 213,  372 => 212,  370 => 211,  367 => 210,  360 => 206,  354 => 203,  348 => 200,  342 => 197,  338 => 195,  336 => 194,  332 => 192,  329 => 191,  323 => 182,  320 => 181,  317 => 180,  310 => 175,  307 => 174,  300 => 167,  297 => 166,  290 => 184,  287 => 180,  284 => 178,  281 => 177,  278 => 174,  275 => 173,  271 => 170,  268 => 169,  265 => 166,  262 => 165,  257 => 162,  254 => 161,  251 => 160,  244 => 148,  241 => 147,  238 => 146,  231 => 139,  226 => 138,  223 => 137,  215 => 113,  208 => 109,  204 => 107,  202 => 106,  199 => 105,  192 => 101,  188 => 99,  186 => 98,  178 => 93,  168 => 88,  162 => 87,  148 => 76,  141 => 71,  139 => 68,  138 => 67,  137 => 66,  135 => 65,  132 => 64,  127 => 191,  125 => 190,  121 => 188,  119 => 160,  116 => 158,  109 => 152,  106 => 151,  103 => 146,  100 => 145,  97 => 143,  94 => 142,  91 => 137,  89 => 136,  86 => 135,  84 => 132,  83 => 131,  82 => 130,  79 => 128,  73 => 124,  70 => 123,  68 => 122,  64 => 119,  60 => 64,  58 => 63,  53 => 60,  51 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magellantutoring/templates/page--fullwidth.html.twig", "/var/app/current/themes/magellantutoring/templates/page--fullwidth.html.twig");
    }
}
