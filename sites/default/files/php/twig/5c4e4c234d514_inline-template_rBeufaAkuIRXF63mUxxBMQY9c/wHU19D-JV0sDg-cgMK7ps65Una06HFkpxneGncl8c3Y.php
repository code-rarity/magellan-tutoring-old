<?php

/* {# inline_template_start #}<div class="masonry__item  col-sm-6 col-xs-12">
                                            <div class="project-thumb hover-element border--round hover--active">
<a href="#">
                                                    <div class="hover-element__initial">
                                                        <div class="background-image-holder">
                                                            {{ field_project_images }}
                                                        </div>
                                                    </div>
                                                    <div class="hover-element__reveal" data-scrim-top="5">
                                                        <div class="project-thumb__title">
                                                            <h4>{{ title }}</h4>
                                                            <span>{{ field_project_category }}</span>
                                                        </div>
                                                    </div>
</a>
                                            </div>
                                        </div> */
class __TwigTemplate_c137898a74fb8fce4e971b18c821f9125d5b6504a7be56c1e0027f66f83b709b extends Twig_Template
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
        echo "<div class=\"masonry__item  col-sm-6 col-xs-12\">
                                            <div class=\"project-thumb hover-element border--round hover--active\">
<a href=\"#\">
                                                    <div class=\"hover-element__initial\">
                                                        <div class=\"background-image-holder\">
                                                            ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_project_images"] ?? null), "html", null, true));
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"hover-element__reveal\" data-scrim-top=\"5\">
                                                        <div class=\"project-thumb__title\">
                                                            <h4>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
                                                            <span>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_project_category"] ?? null), "html", null, true));
        echo "</span>
                                                        </div>
                                                    </div>
</a>
                                            </div>
                                        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"masonry__item  col-sm-6 col-xs-12\">
                                            <div class=\"project-thumb hover-element border--round hover--active\">
<a href=\"#\">
                                                    <div class=\"hover-element__initial\">
                                                        <div class=\"background-image-holder\">
                                                            {{ field_project_images }}
                                                        </div>
                                                    </div>
                                                    <div class=\"hover-element__reveal\" data-scrim-top=\"5\">
                                                        <div class=\"project-thumb__title\">
                                                            <h4>{{ title }}</h4>
                                                            <span>{{ field_project_category }}</span>
                                                        </div>
                                                    </div>
</a>
                                            </div>
                                        </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  74 => 11,  66 => 6,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"masonry__item  col-sm-6 col-xs-12\">
                                            <div class=\"project-thumb hover-element border--round hover--active\">
<a href=\"#\">
                                                    <div class=\"hover-element__initial\">
                                                        <div class=\"background-image-holder\">
                                                            {{ field_project_images }}
                                                        </div>
                                                    </div>
                                                    <div class=\"hover-element__reveal\" data-scrim-top=\"5\">
                                                        <div class=\"project-thumb__title\">
                                                            <h4>{{ title }}</h4>
                                                            <span>{{ field_project_category }}</span>
                                                        </div>
                                                    </div>
</a>
                                            </div>
                                        </div>", "");
    }
}
