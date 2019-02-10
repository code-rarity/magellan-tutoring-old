<?php

/* {# inline_template_start #}<div class="masonry__item col-xs-12 col-sm-6 col-md-3 text-center feature feature-8" style="float:left;" data-masonry-filter="{{ field_user_subjects }}">
   <a href="/user/{{ uid }}" class="image-wrapper " style="border-radius:0;">
      {{ field_user_image }}
      <h4>{{ field_user_name }}</h4>
   </a>
</div> */
class __TwigTemplate_574978240b8cca8072b82ef5e1a3e7c778b55695cbbf3d787fde041b18351c23 extends Twig_Template
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
        echo "<div class=\"masonry__item col-xs-12 col-sm-6 col-md-3 text-center feature feature-8\" style=\"float:left;\" data-masonry-filter=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_user_subjects"] ?? null), "html", null, true));
        echo "\">
   <a href=\"/user/";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uid"] ?? null), "html", null, true));
        echo "\" class=\"image-wrapper \" style=\"border-radius:0;\">
      ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_user_image"] ?? null), "html", null, true));
        echo "
      <h4>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_user_name"] ?? null), "html", null, true));
        echo "</h4>
   </a>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"masonry__item col-xs-12 col-sm-6 col-md-3 text-center feature feature-8\" style=\"float:left;\" data-masonry-filter=\"{{ field_user_subjects }}\">
   <a href=\"/user/{{ uid }}\" class=\"image-wrapper \" style=\"border-radius:0;\">
      {{ field_user_image }}
      <h4>{{ field_user_name }}</h4>
   </a>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 4,  57 => 3,  53 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"masonry__item col-xs-12 col-sm-6 col-md-3 text-center feature feature-8\" style=\"float:left;\" data-masonry-filter=\"{{ field_user_subjects }}\">
   <a href=\"/user/{{ uid }}\" class=\"image-wrapper \" style=\"border-radius:0;\">
      {{ field_user_image }}
      <h4>{{ field_user_name }}</h4>
   </a>
</div>", "");
    }
}
