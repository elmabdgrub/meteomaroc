<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d236e820cef7ffc2a071d2b350a23213d9bfb64493799f00f26f58d254df226c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bff569fe20e263f688b2e7e73eb23b9a07a407b914304f64245f0b029d97a475 = $this->env->getExtension("native_profiler");
        $__internal_bff569fe20e263f688b2e7e73eb23b9a07a407b914304f64245f0b029d97a475->enter($__internal_bff569fe20e263f688b2e7e73eb23b9a07a407b914304f64245f0b029d97a475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bff569fe20e263f688b2e7e73eb23b9a07a407b914304f64245f0b029d97a475->leave($__internal_bff569fe20e263f688b2e7e73eb23b9a07a407b914304f64245f0b029d97a475_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f438b6477de7309556ea82772dc3e35dce23b0ed471b43031a58f2487f4a706b = $this->env->getExtension("native_profiler");
        $__internal_f438b6477de7309556ea82772dc3e35dce23b0ed471b43031a58f2487f4a706b->enter($__internal_f438b6477de7309556ea82772dc3e35dce23b0ed471b43031a58f2487f4a706b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f438b6477de7309556ea82772dc3e35dce23b0ed471b43031a58f2487f4a706b->leave($__internal_f438b6477de7309556ea82772dc3e35dce23b0ed471b43031a58f2487f4a706b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_adaffea5955937829af10382ba7034c0c3032cfbbef07951f32b845fe289b12a = $this->env->getExtension("native_profiler");
        $__internal_adaffea5955937829af10382ba7034c0c3032cfbbef07951f32b845fe289b12a->enter($__internal_adaffea5955937829af10382ba7034c0c3032cfbbef07951f32b845fe289b12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_adaffea5955937829af10382ba7034c0c3032cfbbef07951f32b845fe289b12a->leave($__internal_adaffea5955937829af10382ba7034c0c3032cfbbef07951f32b845fe289b12a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54169461661219d3eaadf59f6333d103acc6adefaacc025feb3263c32dabc646 = $this->env->getExtension("native_profiler");
        $__internal_54169461661219d3eaadf59f6333d103acc6adefaacc025feb3263c32dabc646->enter($__internal_54169461661219d3eaadf59f6333d103acc6adefaacc025feb3263c32dabc646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_54169461661219d3eaadf59f6333d103acc6adefaacc025feb3263c32dabc646->leave($__internal_54169461661219d3eaadf59f6333d103acc6adefaacc025feb3263c32dabc646_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
