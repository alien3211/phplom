<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_45832d8c0b226a24061153496353c2e8dc671570efbac7d776bc65cc1566d901 extends Twig_Template
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
        $__internal_2763bcd1bf44f3b7d8aaa108095b43f34d4e007fb29a017653df1a2af4ef3088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2763bcd1bf44f3b7d8aaa108095b43f34d4e007fb29a017653df1a2af4ef3088->enter($__internal_2763bcd1bf44f3b7d8aaa108095b43f34d4e007fb29a017653df1a2af4ef3088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_574f9644136694f3a1b0765fc63e6b3109ca906b1efe8880ba43ec7ac258c2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574f9644136694f3a1b0765fc63e6b3109ca906b1efe8880ba43ec7ac258c2c6->enter($__internal_574f9644136694f3a1b0765fc63e6b3109ca906b1efe8880ba43ec7ac258c2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2763bcd1bf44f3b7d8aaa108095b43f34d4e007fb29a017653df1a2af4ef3088->leave($__internal_2763bcd1bf44f3b7d8aaa108095b43f34d4e007fb29a017653df1a2af4ef3088_prof);

        
        $__internal_574f9644136694f3a1b0765fc63e6b3109ca906b1efe8880ba43ec7ac258c2c6->leave($__internal_574f9644136694f3a1b0765fc63e6b3109ca906b1efe8880ba43ec7ac258c2c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a8852911038bfe52d0acae46245f453eb776da4fef5c4955b8c917198468ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8852911038bfe52d0acae46245f453eb776da4fef5c4955b8c917198468ce8->enter($__internal_0a8852911038bfe52d0acae46245f453eb776da4fef5c4955b8c917198468ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1871c0f0026079f9833a4903173761452b9ddba04d0f274314c8694be3d63537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1871c0f0026079f9833a4903173761452b9ddba04d0f274314c8694be3d63537->enter($__internal_1871c0f0026079f9833a4903173761452b9ddba04d0f274314c8694be3d63537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1871c0f0026079f9833a4903173761452b9ddba04d0f274314c8694be3d63537->leave($__internal_1871c0f0026079f9833a4903173761452b9ddba04d0f274314c8694be3d63537_prof);

        
        $__internal_0a8852911038bfe52d0acae46245f453eb776da4fef5c4955b8c917198468ce8->leave($__internal_0a8852911038bfe52d0acae46245f453eb776da4fef5c4955b8c917198468ce8_prof);

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
