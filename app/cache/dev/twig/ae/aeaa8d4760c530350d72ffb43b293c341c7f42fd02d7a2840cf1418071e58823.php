<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d0523ebe1f564b4381f11e6461a63ed65939cca84cb97277108b3f7e9cca6000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3523db6c90b434b86fa72294274e2a43a72cfca6cb75f0f66d003d769d01d45d = $this->env->getExtension("native_profiler");
        $__internal_3523db6c90b434b86fa72294274e2a43a72cfca6cb75f0f66d003d769d01d45d->enter($__internal_3523db6c90b434b86fa72294274e2a43a72cfca6cb75f0f66d003d769d01d45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3523db6c90b434b86fa72294274e2a43a72cfca6cb75f0f66d003d769d01d45d->leave($__internal_3523db6c90b434b86fa72294274e2a43a72cfca6cb75f0f66d003d769d01d45d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d99f927c74655766a0175fb5efa393da7a021592b126bea9d8aa83bd0b515042 = $this->env->getExtension("native_profiler");
        $__internal_d99f927c74655766a0175fb5efa393da7a021592b126bea9d8aa83bd0b515042->enter($__internal_d99f927c74655766a0175fb5efa393da7a021592b126bea9d8aa83bd0b515042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d99f927c74655766a0175fb5efa393da7a021592b126bea9d8aa83bd0b515042->leave($__internal_d99f927c74655766a0175fb5efa393da7a021592b126bea9d8aa83bd0b515042_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6504296d9f9a057b9fda3f2612e4e2d8f1ad7c05bb99bc781c11e509441b688f = $this->env->getExtension("native_profiler");
        $__internal_6504296d9f9a057b9fda3f2612e4e2d8f1ad7c05bb99bc781c11e509441b688f->enter($__internal_6504296d9f9a057b9fda3f2612e4e2d8f1ad7c05bb99bc781c11e509441b688f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6504296d9f9a057b9fda3f2612e4e2d8f1ad7c05bb99bc781c11e509441b688f->leave($__internal_6504296d9f9a057b9fda3f2612e4e2d8f1ad7c05bb99bc781c11e509441b688f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_16aaf0c782dc0e7e121a6d55cf9230c74c5cda17dde41b254b4cd017b9c2a06f = $this->env->getExtension("native_profiler");
        $__internal_16aaf0c782dc0e7e121a6d55cf9230c74c5cda17dde41b254b4cd017b9c2a06f->enter($__internal_16aaf0c782dc0e7e121a6d55cf9230c74c5cda17dde41b254b4cd017b9c2a06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_16aaf0c782dc0e7e121a6d55cf9230c74c5cda17dde41b254b4cd017b9c2a06f->leave($__internal_16aaf0c782dc0e7e121a6d55cf9230c74c5cda17dde41b254b4cd017b9c2a06f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1cccb304948361e9473c8502d245345b6eab76bbb3f4d888ca70e79b3d55e751 = $this->env->getExtension("native_profiler");
        $__internal_1cccb304948361e9473c8502d245345b6eab76bbb3f4d888ca70e79b3d55e751->enter($__internal_1cccb304948361e9473c8502d245345b6eab76bbb3f4d888ca70e79b3d55e751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1cccb304948361e9473c8502d245345b6eab76bbb3f4d888ca70e79b3d55e751->leave($__internal_1cccb304948361e9473c8502d245345b6eab76bbb3f4d888ca70e79b3d55e751_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
