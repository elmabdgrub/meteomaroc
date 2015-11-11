<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a02562fbf6756ae22f6aed62300e3345e13a1b5350302d8320188cbf2eb37863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952fa059fbe85e2e72b8fb8a34b62e046d0fad91b78b1a64041bfa94ce1c4128 = $this->env->getExtension("native_profiler");
        $__internal_952fa059fbe85e2e72b8fb8a34b62e046d0fad91b78b1a64041bfa94ce1c4128->enter($__internal_952fa059fbe85e2e72b8fb8a34b62e046d0fad91b78b1a64041bfa94ce1c4128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_952fa059fbe85e2e72b8fb8a34b62e046d0fad91b78b1a64041bfa94ce1c4128->leave($__internal_952fa059fbe85e2e72b8fb8a34b62e046d0fad91b78b1a64041bfa94ce1c4128_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
