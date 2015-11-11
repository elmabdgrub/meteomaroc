<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5b494f17b09e0f46100510d265044cbc87fa12ecf74892198f1a2be9d26003c8 extends Twig_Template
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
        $__internal_e89df56c3bcaf051da0fa9ddb179d119fd0b099c61f81fac16a8d4620f53b53c = $this->env->getExtension("native_profiler");
        $__internal_e89df56c3bcaf051da0fa9ddb179d119fd0b099c61f81fac16a8d4620f53b53c->enter($__internal_e89df56c3bcaf051da0fa9ddb179d119fd0b099c61f81fac16a8d4620f53b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e89df56c3bcaf051da0fa9ddb179d119fd0b099c61f81fac16a8d4620f53b53c->leave($__internal_e89df56c3bcaf051da0fa9ddb179d119fd0b099c61f81fac16a8d4620f53b53c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
