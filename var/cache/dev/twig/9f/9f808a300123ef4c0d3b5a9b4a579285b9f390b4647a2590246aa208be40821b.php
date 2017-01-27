<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b0170b967cf634eeaf422b1a34ca8260e16ac8608f0c6eb35eae37c2f45d0fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdf3b35c92f1c63f750c6e5e6d34ffc046f84a9b64e8de9c7d605fb392010d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf3b35c92f1c63f750c6e5e6d34ffc046f84a9b64e8de9c7d605fb392010d6a->enter($__internal_fdf3b35c92f1c63f750c6e5e6d34ffc046f84a9b64e8de9c7d605fb392010d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2013912ec9cfad271148a52fe2d903dc38931d3914c694e69ed10acd2e7ce48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2013912ec9cfad271148a52fe2d903dc38931d3914c694e69ed10acd2e7ce48a->enter($__internal_2013912ec9cfad271148a52fe2d903dc38931d3914c694e69ed10acd2e7ce48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf3b35c92f1c63f750c6e5e6d34ffc046f84a9b64e8de9c7d605fb392010d6a->leave($__internal_fdf3b35c92f1c63f750c6e5e6d34ffc046f84a9b64e8de9c7d605fb392010d6a_prof);

        
        $__internal_2013912ec9cfad271148a52fe2d903dc38931d3914c694e69ed10acd2e7ce48a->leave($__internal_2013912ec9cfad271148a52fe2d903dc38931d3914c694e69ed10acd2e7ce48a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfe2c17a12e718dc9b62ee4c95b0583d9d00ba733d047113a99ba6257caae9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe2c17a12e718dc9b62ee4c95b0583d9d00ba733d047113a99ba6257caae9ae->enter($__internal_cfe2c17a12e718dc9b62ee4c95b0583d9d00ba733d047113a99ba6257caae9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_65b4ddfb1523118c2ab23d347c08db7eb569cf25ff12da39e1ae48ad9ec268fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b4ddfb1523118c2ab23d347c08db7eb569cf25ff12da39e1ae48ad9ec268fb->enter($__internal_65b4ddfb1523118c2ab23d347c08db7eb569cf25ff12da39e1ae48ad9ec268fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_65b4ddfb1523118c2ab23d347c08db7eb569cf25ff12da39e1ae48ad9ec268fb->leave($__internal_65b4ddfb1523118c2ab23d347c08db7eb569cf25ff12da39e1ae48ad9ec268fb_prof);

        
        $__internal_cfe2c17a12e718dc9b62ee4c95b0583d9d00ba733d047113a99ba6257caae9ae->leave($__internal_cfe2c17a12e718dc9b62ee4c95b0583d9d00ba733d047113a99ba6257caae9ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/alan/my_project/php/lomweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
