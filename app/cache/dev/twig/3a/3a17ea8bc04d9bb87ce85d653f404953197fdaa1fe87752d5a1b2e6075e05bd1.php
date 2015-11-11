<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5aaaa09efd81f264b93565bc418515522b2a4c2e3822482fefd669a2533cd3bd extends Twig_Template
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
        $__internal_72458c661ff5e2baaadc9a3bb50365aae8658f472ca6a29ae896b57de2558e82 = $this->env->getExtension("native_profiler");
        $__internal_72458c661ff5e2baaadc9a3bb50365aae8658f472ca6a29ae896b57de2558e82->enter($__internal_72458c661ff5e2baaadc9a3bb50365aae8658f472ca6a29ae896b57de2558e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_72458c661ff5e2baaadc9a3bb50365aae8658f472ca6a29ae896b57de2558e82->leave($__internal_72458c661ff5e2baaadc9a3bb50365aae8658f472ca6a29ae896b57de2558e82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
