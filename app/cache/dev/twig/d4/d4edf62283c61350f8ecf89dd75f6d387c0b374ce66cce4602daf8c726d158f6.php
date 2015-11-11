<?php

/* base.html.twig */
class __TwigTemplate_11397fed5c110dc429ea08119749ee5f2b6e7e5e7b8c233af84c1e961387a140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d299577a72bd6a49e6bb21170796f06fd29f20abffe527e74887acf342f245aa = $this->env->getExtension("native_profiler");
        $__internal_d299577a72bd6a49e6bb21170796f06fd29f20abffe527e74887acf342f245aa->enter($__internal_d299577a72bd6a49e6bb21170796f06fd29f20abffe527e74887acf342f245aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d299577a72bd6a49e6bb21170796f06fd29f20abffe527e74887acf342f245aa->leave($__internal_d299577a72bd6a49e6bb21170796f06fd29f20abffe527e74887acf342f245aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fc8fe722a77dc5b43a098807daca92359d0988653451ef2b579d62ccbe2a43 = $this->env->getExtension("native_profiler");
        $__internal_f1fc8fe722a77dc5b43a098807daca92359d0988653451ef2b579d62ccbe2a43->enter($__internal_f1fc8fe722a77dc5b43a098807daca92359d0988653451ef2b579d62ccbe2a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1fc8fe722a77dc5b43a098807daca92359d0988653451ef2b579d62ccbe2a43->leave($__internal_f1fc8fe722a77dc5b43a098807daca92359d0988653451ef2b579d62ccbe2a43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_212bedef8a89bbf14ce10f38642becda2256d2e68274a3b96392c7ccad498fe6 = $this->env->getExtension("native_profiler");
        $__internal_212bedef8a89bbf14ce10f38642becda2256d2e68274a3b96392c7ccad498fe6->enter($__internal_212bedef8a89bbf14ce10f38642becda2256d2e68274a3b96392c7ccad498fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_212bedef8a89bbf14ce10f38642becda2256d2e68274a3b96392c7ccad498fe6->leave($__internal_212bedef8a89bbf14ce10f38642becda2256d2e68274a3b96392c7ccad498fe6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4f9ac9b055ef2320cc8ee5232e04418fc43c59ca8e6ff9d09910d6f98e3066 = $this->env->getExtension("native_profiler");
        $__internal_0e4f9ac9b055ef2320cc8ee5232e04418fc43c59ca8e6ff9d09910d6f98e3066->enter($__internal_0e4f9ac9b055ef2320cc8ee5232e04418fc43c59ca8e6ff9d09910d6f98e3066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e4f9ac9b055ef2320cc8ee5232e04418fc43c59ca8e6ff9d09910d6f98e3066->leave($__internal_0e4f9ac9b055ef2320cc8ee5232e04418fc43c59ca8e6ff9d09910d6f98e3066_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69473c0fa2d6acf11727172e7ac35f1435121df0a2f2af151dec77969fc026be = $this->env->getExtension("native_profiler");
        $__internal_69473c0fa2d6acf11727172e7ac35f1435121df0a2f2af151dec77969fc026be->enter($__internal_69473c0fa2d6acf11727172e7ac35f1435121df0a2f2af151dec77969fc026be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69473c0fa2d6acf11727172e7ac35f1435121df0a2f2af151dec77969fc026be->leave($__internal_69473c0fa2d6acf11727172e7ac35f1435121df0a2f2af151dec77969fc026be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
