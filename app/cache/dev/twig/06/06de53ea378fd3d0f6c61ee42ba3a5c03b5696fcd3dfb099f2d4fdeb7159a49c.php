<?php

/* ::base.html.twig */
class __TwigTemplate_b06679a65fdaf13ebe6be96dfcea20dba655eb47759854992267b7ae5a06c475 extends Twig_Template
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
        $__internal_cf09c1bdee258e7aa4c4fb9d0be1cb7011f148a740d9ea2bbfefc27c6b6770c8 = $this->env->getExtension("native_profiler");
        $__internal_cf09c1bdee258e7aa4c4fb9d0be1cb7011f148a740d9ea2bbfefc27c6b6770c8->enter($__internal_cf09c1bdee258e7aa4c4fb9d0be1cb7011f148a740d9ea2bbfefc27c6b6770c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cf09c1bdee258e7aa4c4fb9d0be1cb7011f148a740d9ea2bbfefc27c6b6770c8->leave($__internal_cf09c1bdee258e7aa4c4fb9d0be1cb7011f148a740d9ea2bbfefc27c6b6770c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_955552481b4e620fcefc58a3be8cdc619b75f3291df2ce8d5bafe809795637f1 = $this->env->getExtension("native_profiler");
        $__internal_955552481b4e620fcefc58a3be8cdc619b75f3291df2ce8d5bafe809795637f1->enter($__internal_955552481b4e620fcefc58a3be8cdc619b75f3291df2ce8d5bafe809795637f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_955552481b4e620fcefc58a3be8cdc619b75f3291df2ce8d5bafe809795637f1->leave($__internal_955552481b4e620fcefc58a3be8cdc619b75f3291df2ce8d5bafe809795637f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf39c889be36990fc087cecf558562b43c1227bd975fc3a075e4cdeadcb40bc8 = $this->env->getExtension("native_profiler");
        $__internal_cf39c889be36990fc087cecf558562b43c1227bd975fc3a075e4cdeadcb40bc8->enter($__internal_cf39c889be36990fc087cecf558562b43c1227bd975fc3a075e4cdeadcb40bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf39c889be36990fc087cecf558562b43c1227bd975fc3a075e4cdeadcb40bc8->leave($__internal_cf39c889be36990fc087cecf558562b43c1227bd975fc3a075e4cdeadcb40bc8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_21ab3144623b0c8c3d90cfd8364d0b12503d8c09c69c61e4402a0786b49590a0 = $this->env->getExtension("native_profiler");
        $__internal_21ab3144623b0c8c3d90cfd8364d0b12503d8c09c69c61e4402a0786b49590a0->enter($__internal_21ab3144623b0c8c3d90cfd8364d0b12503d8c09c69c61e4402a0786b49590a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21ab3144623b0c8c3d90cfd8364d0b12503d8c09c69c61e4402a0786b49590a0->leave($__internal_21ab3144623b0c8c3d90cfd8364d0b12503d8c09c69c61e4402a0786b49590a0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79574b9bd1ea4709e6ef61bc10dbaf66cd3092958e141b24be48c21f4151d24b = $this->env->getExtension("native_profiler");
        $__internal_79574b9bd1ea4709e6ef61bc10dbaf66cd3092958e141b24be48c21f4151d24b->enter($__internal_79574b9bd1ea4709e6ef61bc10dbaf66cd3092958e141b24be48c21f4151d24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79574b9bd1ea4709e6ef61bc10dbaf66cd3092958e141b24be48c21f4151d24b->leave($__internal_79574b9bd1ea4709e6ef61bc10dbaf66cd3092958e141b24be48c21f4151d24b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
