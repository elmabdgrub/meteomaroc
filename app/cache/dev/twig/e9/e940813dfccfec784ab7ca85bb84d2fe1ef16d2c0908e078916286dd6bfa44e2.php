<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4e43f75a47a3c75b74c127ebb6c136c197573061417bbc0d826f469f5fe70b4e extends Twig_Template
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
        $__internal_d033257cb8c75c1536d5bff138ad3c2299ca273c1ab648d269b0139aed937de5 = $this->env->getExtension("native_profiler");
        $__internal_d033257cb8c75c1536d5bff138ad3c2299ca273c1ab648d269b0139aed937de5->enter($__internal_d033257cb8c75c1536d5bff138ad3c2299ca273c1ab648d269b0139aed937de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d033257cb8c75c1536d5bff138ad3c2299ca273c1ab648d269b0139aed937de5->leave($__internal_d033257cb8c75c1536d5bff138ad3c2299ca273c1ab648d269b0139aed937de5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
