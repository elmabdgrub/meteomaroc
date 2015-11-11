<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4a991cc396e9bef4a395721635c7f373e09189e25375393bea027743cd7825ac extends Twig_Template
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
        $__internal_ce8b1580fb2d5276ef8478a10c5739287fc2298bee6fb39264169320076ede6a = $this->env->getExtension("native_profiler");
        $__internal_ce8b1580fb2d5276ef8478a10c5739287fc2298bee6fb39264169320076ede6a->enter($__internal_ce8b1580fb2d5276ef8478a10c5739287fc2298bee6fb39264169320076ede6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ce8b1580fb2d5276ef8478a10c5739287fc2298bee6fb39264169320076ede6a->leave($__internal_ce8b1580fb2d5276ef8478a10c5739287fc2298bee6fb39264169320076ede6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
