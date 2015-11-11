<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ae421ba8aacebb7384d1bf22127e9e4f59d4589216385a03af3c17a8e2c7e79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_718998375e29d845777222fa33dff380d16d975953c5e4622752e0b9825ddb10 = $this->env->getExtension("native_profiler");
        $__internal_718998375e29d845777222fa33dff380d16d975953c5e4622752e0b9825ddb10->enter($__internal_718998375e29d845777222fa33dff380d16d975953c5e4622752e0b9825ddb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718998375e29d845777222fa33dff380d16d975953c5e4622752e0b9825ddb10->leave($__internal_718998375e29d845777222fa33dff380d16d975953c5e4622752e0b9825ddb10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ee693d8e4a9dd673dbd6b27fe6b3309efa3a1dad66306ac1aee282f1cb63fb = $this->env->getExtension("native_profiler");
        $__internal_00ee693d8e4a9dd673dbd6b27fe6b3309efa3a1dad66306ac1aee282f1cb63fb->enter($__internal_00ee693d8e4a9dd673dbd6b27fe6b3309efa3a1dad66306ac1aee282f1cb63fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00ee693d8e4a9dd673dbd6b27fe6b3309efa3a1dad66306ac1aee282f1cb63fb->leave($__internal_00ee693d8e4a9dd673dbd6b27fe6b3309efa3a1dad66306ac1aee282f1cb63fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33a621ba089d8461a285b5be6dc9d45c6727293e4ee56b4742d0b11c4ea0a02a = $this->env->getExtension("native_profiler");
        $__internal_33a621ba089d8461a285b5be6dc9d45c6727293e4ee56b4742d0b11c4ea0a02a->enter($__internal_33a621ba089d8461a285b5be6dc9d45c6727293e4ee56b4742d0b11c4ea0a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_33a621ba089d8461a285b5be6dc9d45c6727293e4ee56b4742d0b11c4ea0a02a->leave($__internal_33a621ba089d8461a285b5be6dc9d45c6727293e4ee56b4742d0b11c4ea0a02a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
