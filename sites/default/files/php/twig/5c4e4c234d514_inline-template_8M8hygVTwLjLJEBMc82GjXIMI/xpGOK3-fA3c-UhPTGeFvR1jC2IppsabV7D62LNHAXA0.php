<?php

/* {# inline_template_start #}<div class="col-xs-12 col-sm-6 col-md-4">
<div class="testimonial testimonial-2">
<div class="testimonial__body boxed boxed--border bg--secondary">
<p>{{ body }}</p>
</div>

<div class="testimonial__image">
<h3>{{ field_reviewer }}</h3>
<h4>{{ field_rating }}</h4></div>
</div>
</div> */
class __TwigTemplate_cbeaff151b5e9c987a53606785829dcd640373ccc44b2ce90a54871438d5c944 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-6 col-md-4\">
<div class=\"testimonial testimonial-2\">
<div class=\"testimonial__body boxed boxed--border bg--secondary\">
<p>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</p>
</div>

<div class=\"testimonial__image\">
<h3>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_reviewer"] ?? null), "html", null, true));
        echo "</h3>
<h4>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_rating"] ?? null), "html", null, true));
        echo "</h4></div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-xs-12 col-sm-6 col-md-4\">
<div class=\"testimonial testimonial-2\">
<div class=\"testimonial__body boxed boxed--border bg--secondary\">
<p>{{ body }}</p>
</div>

<div class=\"testimonial__image\">
<h3>{{ field_reviewer }}</h3>
<h4>{{ field_rating }}</h4></div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  65 => 8,  58 => 4,  53 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-xs-12 col-sm-6 col-md-4\">
<div class=\"testimonial testimonial-2\">
<div class=\"testimonial__body boxed boxed--border bg--secondary\">
<p>{{ body }}</p>
</div>

<div class=\"testimonial__image\">
<h3>{{ field_reviewer }}</h3>
<h4>{{ field_rating }}</h4></div>
</div>
</div>", "");
    }
}
