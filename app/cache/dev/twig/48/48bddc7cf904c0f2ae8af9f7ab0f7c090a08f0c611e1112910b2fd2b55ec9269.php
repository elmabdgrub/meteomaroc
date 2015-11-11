<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8eed4b358cfd78e3de6049ff77749bccd131bf4bf0df115403fa92af006a7574 extends Twig_Template
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
        $__internal_aabc38a42f1e78d7a79e3b5a1efc96778e433f905f6dc83f20cf5ffa7fc659f8 = $this->env->getExtension("native_profiler");
        $__internal_aabc38a42f1e78d7a79e3b5a1efc96778e433f905f6dc83f20cf5ffa7fc659f8->enter($__internal_aabc38a42f1e78d7a79e3b5a1efc96778e433f905f6dc83f20cf5ffa7fc659f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_aabc38a42f1e78d7a79e3b5a1efc96778e433f905f6dc83f20cf5ffa7fc659f8->leave($__internal_aabc38a42f1e78d7a79e3b5a1efc96778e433f905f6dc83f20cf5ffa7fc659f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
