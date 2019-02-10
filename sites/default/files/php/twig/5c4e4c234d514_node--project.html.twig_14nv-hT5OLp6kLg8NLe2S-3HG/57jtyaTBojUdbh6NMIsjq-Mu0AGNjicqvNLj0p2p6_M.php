<?php

/* themes/magellantutoring/templates/node--project.html.twig */
class __TwigTemplate_f607f86a63cf96d7df14afdbf98d859b35b029647f64be9e9f8578de743945cd extends Twig_Template
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
        $tags = ["set" => 69, "if" => 83];
        $filters = ["clean_class" => 71, "without" => 115];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'without'],
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

        // line 69
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 71
($context["node"] ?? null), "bundle", []))), 2 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", [])), 3 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 4 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 5 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 6 => ((        // line 76
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null))) : ("")), 7 => "clearfix"];
        // line 80
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">

  ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 83
        if ( !($context["page"] ?? null)) {
            // line 84
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">
      <a href=\"";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 88
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  <div class=\"row\">
                        <div class=\"col-sm-3 col-md-2\">
                            <div class=\"text-block\">";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_project_client", []), "html", null, true));
        echo "</div>
                            <div class=\"text-block\">";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_project_link", []), "html", null, true));
        echo "</div>
                        </div>
                        <div class=\"col-sm-5 col-md-5 col-md-offset-1\">
                            <div class=\"text-block\">
                                ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", []), "html", null, true));
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4 col-md-3 col-md-offset-1\">
                            <div class=\"text-block\">
                                ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_project_services", []), "html", null, true));
        echo "
                            </div>
                        </div>
                    </div>
                    <!--end of row-->

                    <div class=\"row project-images\">
                        <div class=\"col-sm-12\">
                                    ";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_project_images", []), "html", null, true));
        echo "
                        </div>
                    </div>
                    <!--end of row-->

  <div";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method"), "html", null, true));
        echo ">
    ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_mainmenu_transparent", "field_project_client", "field_project_images", "field_project_link", "field_project_services", "body"), "html", null, true));
        echo "
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/magellantutoring/templates/node--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 115,  121 => 114,  113 => 109,  102 => 101,  94 => 96,  87 => 92,  83 => 91,  76 => 88,  68 => 85,  63 => 84,  61 => 83,  57 => 82,  51 => 80,  49 => 76,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 71,  43 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magellantutoring/templates/node--project.html.twig", "/var/app/current/themes/magellantutoring/templates/node--project.html.twig");
    }
}
