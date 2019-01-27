<?php

/* themes/magellantutoring/templates/paragraph--paragraph_image_cover_block.html.twig */
class __TwigTemplate_28b788aae32bb4aed29192dfa045a1d2f7268fccd7165dc068fff9627e61e30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 41, "if" => 42, "block" => 57];
        $filters = ["clean_class" => 50, "trim" => 51, "render" => 51, "without" => 66];
        $functions = ["file_url" => 41];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'trim', 'render', 'without'],
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

        // line 41
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_background_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", [])]);
        // line 42
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 43
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 45
            echo "  ";
            $context["image_class"] = "";
        }
        // line 48
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 50
($context["paragraph"] ?? null), "bundle", []))), 2 => twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(        // line 51
($context["paragraph"] ?? null), "field_paragraph_extra_class", []), "value", []))), 3 => "cover", 4 =>         // line 53
($context["image_class"] ?? null), 5 => ((        // line 54
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 57
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 58
        echo "  <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo " ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_id", []), "value", [])))) {
            echo " id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_id", []), "value", []))), "html", null, true));
            echo "\"  ";
        }
        echo "  ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_data_overlay", []), "value", [])))) {
            echo " data-overlay=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_data_overlay", []), "value", []))), "html", null, true));
            echo "\" ";
        }
        echo ">
    ";
        // line 59
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 60
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true));
            echo "\" />
    </div>
\t";
        }
        // line 64
        echo "    <div class=\"container ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_content_vertical_center", []), "value", [])))) {
            echo " pos-vertical-center ";
        }
        echo " \">
    ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "\t</div>
  </section>
";
    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        echo "\t
      ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_paragraph_extra_class", "field_paragraph_background_image", "field_content_vertical_center", "field_paragraph_data_overlay", "field_paragraph_id"), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/magellantutoring/templates/paragraph--paragraph_image_cover_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 66,  112 => 65,  106 => 68,  104 => 65,  97 => 64,  91 => 61,  88 => 60,  86 => 59,  69 => 58,  63 => 57,  61 => 54,  60 => 53,  59 => 51,  58 => 50,  57 => 48,  53 => 45,  49 => 43,  47 => 42,  45 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magellantutoring/templates/paragraph--paragraph_image_cover_block.html.twig", "/var/app/current/themes/magellantutoring/templates/paragraph--paragraph_image_cover_block.html.twig");
    }
}
