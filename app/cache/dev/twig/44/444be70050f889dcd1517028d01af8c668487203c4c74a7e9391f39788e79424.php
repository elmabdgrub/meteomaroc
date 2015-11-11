<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e1907ae356b91b59d22421c1670a8825a86a5274266ff51c441a18748dc1fc24 extends Twig_Template
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
        $__internal_a833dd9f227c55dc923a5784ad636f590ea550bbaa971005ed4dc6a2e80a2657 = $this->env->getExtension("native_profiler");
        $__internal_a833dd9f227c55dc923a5784ad636f590ea550bbaa971005ed4dc6a2e80a2657->enter($__internal_a833dd9f227c55dc923a5784ad636f590ea550bbaa971005ed4dc6a2e80a2657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a833dd9f227c55dc923a5784ad636f590ea550bbaa971005ed4dc6a2e80a2657->leave($__internal_a833dd9f227c55dc923a5784ad636f590ea550bbaa971005ed4dc6a2e80a2657_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
