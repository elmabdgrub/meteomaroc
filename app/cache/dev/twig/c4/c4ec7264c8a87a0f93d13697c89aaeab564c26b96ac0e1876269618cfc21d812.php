<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9f83a627e6c73b76ddebadc88ba341ffbb7e63171a8478b2d9023fd8219fb644 extends Twig_Template
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
        $__internal_60cfc5e26b97012b0e08895516e856895f2fc333c4588f1be3861d3b0dbeadbb = $this->env->getExtension("native_profiler");
        $__internal_60cfc5e26b97012b0e08895516e856895f2fc333c4588f1be3861d3b0dbeadbb->enter($__internal_60cfc5e26b97012b0e08895516e856895f2fc333c4588f1be3861d3b0dbeadbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_60cfc5e26b97012b0e08895516e856895f2fc333c4588f1be3861d3b0dbeadbb->leave($__internal_60cfc5e26b97012b0e08895516e856895f2fc333c4588f1be3861d3b0dbeadbb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
