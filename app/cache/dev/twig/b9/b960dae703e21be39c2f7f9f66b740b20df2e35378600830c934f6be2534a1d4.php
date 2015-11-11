<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_730174798f82fe1e43b5aaee5f73ad3521a9b9ed08a2d6a5c6e6f8ccad8e45b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9079a2ff41ead1ec196aaedc8a459418ad693f5a8deecc5afcdfe85117884bb5 = $this->env->getExtension("native_profiler");
        $__internal_9079a2ff41ead1ec196aaedc8a459418ad693f5a8deecc5afcdfe85117884bb5->enter($__internal_9079a2ff41ead1ec196aaedc8a459418ad693f5a8deecc5afcdfe85117884bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9079a2ff41ead1ec196aaedc8a459418ad693f5a8deecc5afcdfe85117884bb5->leave($__internal_9079a2ff41ead1ec196aaedc8a459418ad693f5a8deecc5afcdfe85117884bb5_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_ec552eaa7d6bf82a30f29005fe36c0f048b7e0a5f6a44c86b0bc0eb37300418a = $this->env->getExtension("native_profiler");
        $__internal_ec552eaa7d6bf82a30f29005fe36c0f048b7e0a5f6a44c86b0bc0eb37300418a->enter($__internal_ec552eaa7d6bf82a30f29005fe36c0f048b7e0a5f6a44c86b0bc0eb37300418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ec552eaa7d6bf82a30f29005fe36c0f048b7e0a5f6a44c86b0bc0eb37300418a->leave($__internal_ec552eaa7d6bf82a30f29005fe36c0f048b7e0a5f6a44c86b0bc0eb37300418a_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cfcd64fb2e00a037be0fa53be66bcaa7d711973e2e2d08a3c6717951d2af3a06 = $this->env->getExtension("native_profiler");
        $__internal_cfcd64fb2e00a037be0fa53be66bcaa7d711973e2e2d08a3c6717951d2af3a06->enter($__internal_cfcd64fb2e00a037be0fa53be66bcaa7d711973e2e2d08a3c6717951d2af3a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cfcd64fb2e00a037be0fa53be66bcaa7d711973e2e2d08a3c6717951d2af3a06->leave($__internal_cfcd64fb2e00a037be0fa53be66bcaa7d711973e2e2d08a3c6717951d2af3a06_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a73f5ca85eaf062ddfa68d8c5e85ac037324069ee0e698eb35463ebddea0ccad = $this->env->getExtension("native_profiler");
        $__internal_a73f5ca85eaf062ddfa68d8c5e85ac037324069ee0e698eb35463ebddea0ccad->enter($__internal_a73f5ca85eaf062ddfa68d8c5e85ac037324069ee0e698eb35463ebddea0ccad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_a73f5ca85eaf062ddfa68d8c5e85ac037324069ee0e698eb35463ebddea0ccad->leave($__internal_a73f5ca85eaf062ddfa68d8c5e85ac037324069ee0e698eb35463ebddea0ccad_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
