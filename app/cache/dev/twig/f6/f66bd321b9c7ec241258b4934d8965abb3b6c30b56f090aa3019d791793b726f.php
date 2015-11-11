<?php

/* FrontEndBundle:Default:index.html.twig */
class __TwigTemplate_5d15ddc84ef1f69e2848f15092d94bface3e46d56ef9e7813f1b7827e597ea7a extends Twig_Template
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
        $__internal_0c62aaadc37a75be5a5e5534dc52f12f88e559d80fe3ec22dbf10e3e0f0e2c3c = $this->env->getExtension("native_profiler");
        $__internal_0c62aaadc37a75be5a5e5534dc52f12f88e559d80fe3ec22dbf10e3e0f0e2c3c->enter($__internal_0c62aaadc37a75be5a5e5534dc52f12f88e559d80fe3ec22dbf10e3e0f0e2c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontEndBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_0c62aaadc37a75be5a5e5534dc52f12f88e559d80fe3ec22dbf10e3e0f0e2c3c->leave($__internal_0c62aaadc37a75be5a5e5534dc52f12f88e559d80fe3ec22dbf10e3e0f0e2c3c_prof);

    }

    public function getTemplateName()
    {
        return "FrontEndBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
