<?php

/* {# inline_template_start #}<div class="masonry__item text-left"  data-masonry-filter="{{ field_project_category }}">
<div class="project-thumb">
<div class="col-md-6 col-sm-12">
<h2>{{ title }}</h2>
<span>{{ field_project_category }}</span>
<p class="lead">{{ body }}</p>
</div>
<div class="col-md-6 col-sm-12">
{{ field_project_images }}
</div>
</div>
</div> */
class __TwigTemplate_759b12e27ab8cd558cd5766e8d845b3bd6c7f3e23048cdd0c297dad16c25f178 extends Twig_Template
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
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
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

        // line 1
        echo "<div class=\"masonry__item text-left\"  data-masonry-filter=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_project_category"] ?? null), "html", null, true));
        echo "\">
<div class=\"project-thumb\">
<div class=\"col-md-6 col-sm-12\">
<h2>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
<span>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_project_category"] ?? null), "html", null, true));
        echo "</span>
<p class=\"lead\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
</div>
<div class=\"col-md-6 col-sm-12\">
";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_project_images"] ?? null), "html", null, true));
        echo "
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"masonry__item text-left\"  data-masonry-filter=\"{{ field_project_category }}\">
<div class=\"project-thumb\">
<div class=\"col-md-6 col-sm-12\">
<h2>{{ title }}</h2>
<span>{{ field_project_category }}</span>
<p class=\"lead\">{{ body }}</p>
</div>
<div class=\"col-md-6 col-sm-12\">
{{ field_project_images }}
</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  69 => 6,  65 => 5,  61 => 4,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"masonry__item text-left\"  data-masonry-filter=\"{{ field_project_category }}\">
<div class=\"project-thumb\">
<div class=\"col-md-6 col-sm-12\">
<h2>{{ title }}</h2>
<span>{{ field_project_category }}</span>
<p class=\"lead\">{{ body }}</p>
</div>
<div class=\"col-md-6 col-sm-12\">
{{ field_project_images }}
</div>
</div>
</div>", "");
    }
}
