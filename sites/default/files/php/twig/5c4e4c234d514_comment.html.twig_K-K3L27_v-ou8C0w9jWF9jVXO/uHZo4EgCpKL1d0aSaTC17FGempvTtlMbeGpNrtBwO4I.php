<?php

/* themes/magellantutoring/templates/comment.html.twig */
class __TwigTemplate_3a1ad7575912b16e36b3240f3c37efe95e4b88ed69b10e13897ce32bf40207ab extends Twig_Template
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
        $tags = ["if" => 2, "set" => 6];
        $filters = ["without" => 15, "date" => 37];
        $functions = ["attach_library" => 3];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if', 'set'],
                ['without', 'date'],
                ['attach_library']
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

        // line 1
        echo "
";
        // line 2
        if (($context["threaded"] ?? null)) {
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/drupal.comment.threaded"), "html", null, true));
            echo "
";
        }
        // line 6
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 9
($context["status"] ?? null) != "published")) ? (("comment--" . ($context["status"] ?? null))) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 10
($context["comment"] ?? null), "owner", []), "anonymous", [])) ? ("by-anonymous") : ("")), 4 => (((        // line 11
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == $this->getAttribute(($context["commented_entity"] ?? null), "getOwnerId", [], "method")))) ? ((("by-" . $this->getAttribute(($context["commented_entity"] ?? null), "getEntityTypeId", [], "method")) . "-author")) : ("")), 5 => "clearfix"];
        // line 15
        echo "<article role=\"article\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "role"), "html", null, true));
        echo ">
";
        // line 21
        echo "<span class=\"hidden\" data-comment-timestamp=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["new_indicator_timestamp"] ?? null), "html", null, true));
        echo "\"></span>
<div class=\"row\">
<div class=\"comment-author-picture col-lg-2 col-md-2 col-sm-12 col-xs-12\"> 
";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_picture"] ?? null), "html", null, true));
        echo "
</div>
<div class=\"comment-content col-lg-10 col-md-10 col-sm-12 col-xs-12\">
<div";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method"), "html", null, true));
        echo ">
";
        // line 28
        if (($context["title"] ?? null)) {
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
<h5";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "comment_title uppercase"], "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h5>
";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
";
        }
        // line 33
        echo "<div class=\"comment__meta\">
<div class=\"row\">
<div class=\"col-md-6 col-sm-12 col-xs-12\">
<span class=\"comment-author-name uppercase\">";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author"] ?? null), "html", null, true));
        echo "</span>&nbsp;&nbsp;&nbsp;
<span class=\"comment-created uppercase\">";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? null), "getCreatedTime", []), "F d"), "html", null, true));
        echo "</span>
";
        // line 38
        if (($context["parent"] ?? null)) {
            // line 39
            echo "<p class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["parent"] ?? null), "html", null, true));
            echo "</p>
";
        }
        // line 41
        echo "</div>
";
        // line 42
        if ($this->getAttribute(($context["content"] ?? null), "links", [])) {
            // line 43
            echo "<div class=\"col-md-6 col-sm-12 col-xs-12 text-right\">
<nav>";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", []), "html", null, true));
            echo "</nav>
</div>
</div>
";
        }
        // line 48
        echo "</div>
";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links"), "html", null, true));
        echo "
</div>
</div>
</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/magellantutoring/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  133 => 48,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  112 => 39,  110 => 38,  106 => 37,  102 => 36,  97 => 33,  92 => 31,  86 => 30,  82 => 29,  80 => 28,  76 => 27,  70 => 24,  63 => 21,  58 => 15,  56 => 11,  55 => 10,  54 => 9,  53 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magellantutoring/templates/comment.html.twig", "/var/app/current/themes/magellantutoring/templates/comment.html.twig");
    }
}
