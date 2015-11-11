<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ec149980b118a41e581a5564e74b80c8bfa2fba468caf55c7565ea13eee75974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d437ab53e25dddeee96cec61cbbcd6fe0b8c99c3f573b16ba8a8382e3862f354 = $this->env->getExtension("native_profiler");
        $__internal_d437ab53e25dddeee96cec61cbbcd6fe0b8c99c3f573b16ba8a8382e3862f354->enter($__internal_d437ab53e25dddeee96cec61cbbcd6fe0b8c99c3f573b16ba8a8382e3862f354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d437ab53e25dddeee96cec61cbbcd6fe0b8c99c3f573b16ba8a8382e3862f354->leave($__internal_d437ab53e25dddeee96cec61cbbcd6fe0b8c99c3f573b16ba8a8382e3862f354_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eb4aef762373a241eb2ac828be2af3fae71dd112aa55fd72d01ae118c9094ae = $this->env->getExtension("native_profiler");
        $__internal_3eb4aef762373a241eb2ac828be2af3fae71dd112aa55fd72d01ae118c9094ae->enter($__internal_3eb4aef762373a241eb2ac828be2af3fae71dd112aa55fd72d01ae118c9094ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3eb4aef762373a241eb2ac828be2af3fae71dd112aa55fd72d01ae118c9094ae->leave($__internal_3eb4aef762373a241eb2ac828be2af3fae71dd112aa55fd72d01ae118c9094ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
