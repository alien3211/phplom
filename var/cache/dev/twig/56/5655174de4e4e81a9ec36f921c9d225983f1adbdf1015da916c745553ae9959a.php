<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_8d864ee727a4e8bbb4540f959c01b1a6a97641df971ad47e87fcad351987e992 extends Twig_Template
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
        $__internal_778f9c1f3b8f82e395cdd2c81fc8f92979ab64c0ed6ce3f074228ed206464d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778f9c1f3b8f82e395cdd2c81fc8f92979ab64c0ed6ce3f074228ed206464d97->enter($__internal_778f9c1f3b8f82e395cdd2c81fc8f92979ab64c0ed6ce3f074228ed206464d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_ec873461936ed00bf9807759b6560bfc0e8c20030ade65f40dad45b31e414787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec873461936ed00bf9807759b6560bfc0e8c20030ade65f40dad45b31e414787->enter($__internal_ec873461936ed00bf9807759b6560bfc0e8c20030ade65f40dad45b31e414787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_778f9c1f3b8f82e395cdd2c81fc8f92979ab64c0ed6ce3f074228ed206464d97->leave($__internal_778f9c1f3b8f82e395cdd2c81fc8f92979ab64c0ed6ce3f074228ed206464d97_prof);

        
        $__internal_ec873461936ed00bf9807759b6560bfc0e8c20030ade65f40dad45b31e414787->leave($__internal_ec873461936ed00bf9807759b6560bfc0e8c20030ade65f40dad45b31e414787_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}
