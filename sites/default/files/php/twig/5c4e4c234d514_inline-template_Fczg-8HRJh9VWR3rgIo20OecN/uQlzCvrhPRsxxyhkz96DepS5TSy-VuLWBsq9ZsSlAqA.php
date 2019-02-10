<?php

/* {# inline_template_start #}<div class="masonry__item" data-masonry-filter="{{ field_blog_category }}">
  <article class="feature">
    <div class="blog-text">
      <div class="feature__body">
        <h2>{{ title }}</h2>
        <span>in {{ field_blog_category }} by {{ uid }} {{ created }}</span><p style="margin:0;">{{ field_blog_summary }}</p><h6>{{ view_node }}</h6>
      </div>
    </div>
    <div class="blog-image">
      {{ field_image }}
    </div>
  </article>
</div> */
class __TwigTemplate_5f334510a1383f5f346eba857f5072c43d6b380edc51e0d424db3a03c18cdeea extends Twig_Template
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
        echo "<div class=\"masonry__item\" data-masonry-filter=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_blog_category"] ?? null), "html", null, true));
        echo "\">
  <article class=\"feature\">
    <div class=\"blog-text\">
      <div class=\"feature__body\">
        <h2>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
        <span>in ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_blog_category"] ?? null), "html", null, true));
        echo " by ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uid"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</span><p style=\"margin:0;\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_blog_summary"] ?? null), "html", null, true));
        echo "</p><h6>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "</h6>
      </div>
    </div>
    <div class=\"blog-image\">
      ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
    </div>
  </article>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"masonry__item\" data-masonry-filter=\"{{ field_blog_category }}\">
  <article class=\"feature\">
    <div class=\"blog-text\">
      <div class=\"feature__body\">
        <h2>{{ title }}</h2>
        <span>in {{ field_blog_category }} by {{ uid }} {{ created }}</span><p style=\"margin:0;\">{{ field_blog_summary }}</p><h6>{{ view_node }}</h6>
      </div>
    </div>
    <div class=\"blog-image\">
      {{ field_image }}
    </div>
  </article>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  67 => 6,  63 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"masonry__item\" data-masonry-filter=\"{{ field_blog_category }}\">
  <article class=\"feature\">
    <div class=\"blog-text\">
      <div class=\"feature__body\">
        <h2>{{ title }}</h2>
        <span>in {{ field_blog_category }} by {{ uid }} {{ created }}</span><p style=\"margin:0;\">{{ field_blog_summary }}</p><h6>{{ view_node }}</h6>
      </div>
    </div>
    <div class=\"blog-image\">
      {{ field_image }}
    </div>
  </article>
</div>", "");
    }
}
