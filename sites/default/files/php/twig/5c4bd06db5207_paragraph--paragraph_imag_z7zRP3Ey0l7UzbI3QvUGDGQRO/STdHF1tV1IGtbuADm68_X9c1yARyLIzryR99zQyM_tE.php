<?php

/* themes/magellantutoring/templates/paragraph--paragraph_image_bg_block.html.twig */
class __TwigTemplate_ede9c24da4daad0be6e56ecc7e363da3213fc3c9608c208b31b34e3d659f4c81 extends Twig_Template
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
        $tags = ["set" => 42, "if" => 43, "block" => 58];
        $filters = ["clean_class" => 51, "trim" => 52, "render" => 52, "striptags" => 59, "without" => 67];
        $functions = ["file_url" => 42];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'trim', 'render', 'striptags', 'without'],
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
        echo "
";
        // line 42
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_paragraph_background_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", [])]);
        // line 43
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 44
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 46
            echo "  ";
            $context["image_class"] = "";
        }
        // line 49
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
($context["paragraph"] ?? null), "bundle", []))), 2 => twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(        // line 52
($context["paragraph"] ?? null), "field_paragraph_extra_class", []), "value", []))), 3 =>         // line 53
($context["image_class"] ?? null), 4 => ((        // line 54
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 59
        echo "  <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo " ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_id", []), "value", [])))) {
            echo " id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_id", []), "value", [])), "html", null, true));
            echo "\"  ";
        }
        echo "  ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_data_overlay", []), "value", [])))) {
            echo " data-overlay=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_paragraph_data_overlay", []), "value", [])), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_data_gradient_bg", []), "value", [])))) {
            echo " data-gradient-bg=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_data_gradient_bg", []), "value", [])), "html", null, true));
            echo "\" ";
        }
        echo " >
    ";
        // line 60
        if ((($context["bg_img_url"] ?? null) != "/")) {
            // line 61
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bg_img_url"] ?? null), "html", null, true));
            echo "\" />
    </div>
\t";
        }
        // line 65
        echo "    <div class=\"container ";
        if (twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_content_vertical_center", []), "value", [])))) {
            echo " pos-vertical-center ";
        }
        echo " \">
    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "\t</div>
  </section>
";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        echo "\t
      ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_paragraph_extra_class", "field_paragraph_background_image", "field_content_vertical_center", "field_paragraph_data_overlay", "field_paragraph_id", "field_data_gradient_bg"), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/magellantutoring/templates/paragraph--paragraph_image_bg_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  124 => 66,  118 => 69,  116 => 66,  109 => 65,  103 => 62,  100 => 61,  98 => 60,  75 => 59,  69 => 58,  66 => 57,  64 => 54,  63 => 53,  62 => 52,  61 => 51,  60 => 49,  56 => 46,  52 => 44,  50 => 43,  48 => 42,  45 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magellantutoring/templates/paragraph--paragraph_image_bg_block.html.twig", "/var/app/current/themes/magellantutoring/templates/paragraph--paragraph_image_bg_block.html.twig");
    }
}
