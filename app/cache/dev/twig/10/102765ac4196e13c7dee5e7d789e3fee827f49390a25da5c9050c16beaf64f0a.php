<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7aecdb502aa5ab4cc324148bc64934df90f767105752f10b8cd0d7a363e073e8 extends Twig_Template
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
        $__internal_6f79af3218edb0da31970be32964ea27da1d17ff3a385a27218c8931eadee29f = $this->env->getExtension("native_profiler");
        $__internal_6f79af3218edb0da31970be32964ea27da1d17ff3a385a27218c8931eadee29f->enter($__internal_6f79af3218edb0da31970be32964ea27da1d17ff3a385a27218c8931eadee29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6f79af3218edb0da31970be32964ea27da1d17ff3a385a27218c8931eadee29f->leave($__internal_6f79af3218edb0da31970be32964ea27da1d17ff3a385a27218c8931eadee29f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
