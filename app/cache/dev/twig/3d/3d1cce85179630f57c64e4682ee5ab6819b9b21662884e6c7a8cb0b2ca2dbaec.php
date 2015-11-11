<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_21af4b78bcacef577c0b787853d674226b017919fe92bd0349f3c0b56ae5416a extends Twig_Template
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
        $__internal_c6dba60f0b6f24f4da44a04271dc5f0fca450677d16eeceaa163705577379fa4 = $this->env->getExtension("native_profiler");
        $__internal_c6dba60f0b6f24f4da44a04271dc5f0fca450677d16eeceaa163705577379fa4->enter($__internal_c6dba60f0b6f24f4da44a04271dc5f0fca450677d16eeceaa163705577379fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c6dba60f0b6f24f4da44a04271dc5f0fca450677d16eeceaa163705577379fa4->leave($__internal_c6dba60f0b6f24f4da44a04271dc5f0fca450677d16eeceaa163705577379fa4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
