<?php

/* themes/magellantutoring/templates/node--article.html.twig */
class __TwigTemplate_e803687c5326d97e96ec9835cb3d85af82a8c991a73d1e05e68d9b1f2b407c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 69, "if" => 82];
        $filters = ["clean_class" => 71, "date" => 93, "without" => 114];
        $functions = ["file_url" => 80];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'date', 'without'],
                ['file_url']
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

        // line 69
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 71
($context["node"] ?? null), "bundle", []))), 2 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", [])), 3 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 4 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 5 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 6 => ((        // line 76
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null))) : ("")), 7 => "clearfix"];
        // line 80
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_background_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", [])]);
        // line 81
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
\t";
        // line 82
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 83
            echo "\t\t<div class=\"imagebg text-center height-60\" data-overlay=\"5\">                        
\t\t\t<div class=\"background-image-holder\">
       \t\t\t<img alt=\"background\" src=\"";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true));
            echo "\" />
    \t\t</div>
\t\t\t";
            // line 87
            if (($context["display_submitted"] ?? null)) {
                // line 88
                echo "            <div class=\"container pos-vertical-center\">
            \t<div class=\"row\">
                \t<div class=\"col-sm-12\">
                    \t<div class=\"article__title\">
                        \t<h1>";
                // line 92
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h1>
                            <span>";
                // line 93
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["node"] ?? null), "getCreatedTime", []), "d M Y"), "html", null, true));
                echo " in </span>
                            <span>";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_blog_category", []), "html", null, true));
                echo "</span>
                         </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
\t\t\t";
            }
            // line 102
            echo "            <div class=\"pos-absolute pos-bottom col-xs-12 text-center\">
            \t<div class=\"article__author\">
                \t";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
                    <h6 class=\"type--uppercase\">";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
            echo "</h6>
                </div>
            </div>
        </div>
        <div class=\"imagebg-content-article\">
        \t<div class=\"container\">
            \t<div class=\"row\">
                    <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"content article__body\">
    \t\t\t\t\t\t";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_blog_category", "field_image", "field_background_image", "comment", "field_video"), "html", null, true));
            echo "
  \t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 120
            echo "\t
        <section>
        \t<div class=\"container\">
            \t<div class=\"row\">
                    <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"article__title text-center\">
                        \t<h1>";
            // line 126
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h1>
                            ";
            // line 127
            if (($context["display_submitted"] ?? null)) {
                echo "<span>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["node"] ?? null), "getCreatedTime", []), "d M Y"), "html", null, true));
                echo " in </span>";
            }
            // line 128
            echo "                            <span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_blog_category", []), "html", null, true));
            echo "</span>
                        </div>
                        <!--end article title-->
                        <div class=\"article__body\">
                        \t";
            // line 132
            if ($this->getAttribute(($context["content"] ?? null), "field_video", [])) {
                // line 133
                echo "\t\t\t\t\t\t\t  <div class=\"field-video border--round\">
\t\t\t\t\t\t\t    ";
                // line 134
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_video", []), "html", null, true));
                echo "
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t";
            } else {
                // line 137
                echo "\t\t\t\t\t\t\t  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", []), "html", null, true));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t\t<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method"), "html", null, true));
            echo ">
\t\t\t\t\t\t\t\t";
            // line 140
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_blog_category", "field_image", "field_background_image", "comment", "field_video", "field_mainmenu_transparent"), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 147
        echo "\t
\t<div class=\"container\">
       \t<div class=\"row\">
            <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t<div class=\"comments\">
\t  \t\t\t\t";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", []), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/magellantutoring/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 152,  185 => 147,  174 => 140,  169 => 139,  163 => 137,  157 => 134,  154 => 133,  152 => 132,  144 => 128,  138 => 127,  134 => 126,  126 => 120,  116 => 114,  104 => 105,  100 => 104,  96 => 102,  85 => 94,  81 => 93,  77 => 92,  71 => 88,  69 => 87,  64 => 85,  60 => 83,  58 => 82,  53 => 81,  51 => 80,  49 => 76,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 71,  43 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magellantutoring/templates/node--article.html.twig", "/var/app/current/themes/magellantutoring/templates/node--article.html.twig");
    }
}
