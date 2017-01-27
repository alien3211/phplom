<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b4ce0514806f4af2a1ff56bd034f388120eca7966650dd4f7f7f26b49ea07eb9 extends Twig_Template
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
        $__internal_49d303d95ef783546b7c1958bd448c5a22421a4b7e583964f5ecf6a177dcf6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d303d95ef783546b7c1958bd448c5a22421a4b7e583964f5ecf6a177dcf6f3->enter($__internal_49d303d95ef783546b7c1958bd448c5a22421a4b7e583964f5ecf6a177dcf6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a1eb9dfa56308ff26981f67fccc486f970f9746f71623b645bb6c6a228dea574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1eb9dfa56308ff26981f67fccc486f970f9746f71623b645bb6c6a228dea574->enter($__internal_a1eb9dfa56308ff26981f67fccc486f970f9746f71623b645bb6c6a228dea574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d303d95ef783546b7c1958bd448c5a22421a4b7e583964f5ecf6a177dcf6f3->leave($__internal_49d303d95ef783546b7c1958bd448c5a22421a4b7e583964f5ecf6a177dcf6f3_prof);

        
        $__internal_a1eb9dfa56308ff26981f67fccc486f970f9746f71623b645bb6c6a228dea574->leave($__internal_a1eb9dfa56308ff26981f67fccc486f970f9746f71623b645bb6c6a228dea574_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc2245b4446597cd324f0f80d2128d4fab36922b7e408718d6edcbf7e58233de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2245b4446597cd324f0f80d2128d4fab36922b7e408718d6edcbf7e58233de->enter($__internal_dc2245b4446597cd324f0f80d2128d4fab36922b7e408718d6edcbf7e58233de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41696e48f50fbd1546edd953d12052a0c55197012c90d4b373183f87f9fa78eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41696e48f50fbd1546edd953d12052a0c55197012c90d4b373183f87f9fa78eb->enter($__internal_41696e48f50fbd1546edd953d12052a0c55197012c90d4b373183f87f9fa78eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_41696e48f50fbd1546edd953d12052a0c55197012c90d4b373183f87f9fa78eb->leave($__internal_41696e48f50fbd1546edd953d12052a0c55197012c90d4b373183f87f9fa78eb_prof);

        
        $__internal_dc2245b4446597cd324f0f80d2128d4fab36922b7e408718d6edcbf7e58233de->leave($__internal_dc2245b4446597cd324f0f80d2128d4fab36922b7e408718d6edcbf7e58233de_prof);

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
