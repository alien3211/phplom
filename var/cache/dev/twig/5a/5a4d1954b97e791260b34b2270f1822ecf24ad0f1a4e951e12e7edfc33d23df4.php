<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_73adff13674b3f9603cf11a6bb90e5681f3686afe2a499e29f1eda56d652cc73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_385f56136714cf40864f9bb99e07e9d882203848558a1711369bf532cce0264e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385f56136714cf40864f9bb99e07e9d882203848558a1711369bf532cce0264e->enter($__internal_385f56136714cf40864f9bb99e07e9d882203848558a1711369bf532cce0264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_bd4cc11c77ae921c047e07033919d703fad8a77fa02fcadb93f4d08aca620198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4cc11c77ae921c047e07033919d703fad8a77fa02fcadb93f4d08aca620198->enter($__internal_bd4cc11c77ae921c047e07033919d703fad8a77fa02fcadb93f4d08aca620198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385f56136714cf40864f9bb99e07e9d882203848558a1711369bf532cce0264e->leave($__internal_385f56136714cf40864f9bb99e07e9d882203848558a1711369bf532cce0264e_prof);

        
        $__internal_bd4cc11c77ae921c047e07033919d703fad8a77fa02fcadb93f4d08aca620198->leave($__internal_bd4cc11c77ae921c047e07033919d703fad8a77fa02fcadb93f4d08aca620198_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30b5a8c3efe81ad525ed39b8c98d6bc0894a81d8a960137659b6a76d30053462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b5a8c3efe81ad525ed39b8c98d6bc0894a81d8a960137659b6a76d30053462->enter($__internal_30b5a8c3efe81ad525ed39b8c98d6bc0894a81d8a960137659b6a76d30053462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c99aa5a4ed91da2145355847d4b8e03963e9e74edd54d873fc2bdf8f783601dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99aa5a4ed91da2145355847d4b8e03963e9e74edd54d873fc2bdf8f783601dd->enter($__internal_c99aa5a4ed91da2145355847d4b8e03963e9e74edd54d873fc2bdf8f783601dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c99aa5a4ed91da2145355847d4b8e03963e9e74edd54d873fc2bdf8f783601dd->leave($__internal_c99aa5a4ed91da2145355847d4b8e03963e9e74edd54d873fc2bdf8f783601dd_prof);

        
        $__internal_30b5a8c3efe81ad525ed39b8c98d6bc0894a81d8a960137659b6a76d30053462->leave($__internal_30b5a8c3efe81ad525ed39b8c98d6bc0894a81d8a960137659b6a76d30053462_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/alan/my_project/php/lomweb/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
