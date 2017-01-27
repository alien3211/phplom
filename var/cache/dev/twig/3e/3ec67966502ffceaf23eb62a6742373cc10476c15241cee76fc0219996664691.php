<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e508fcae69a7b4c747db1f230e470247e09051efd8ea00549ec143a6aa1cefe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64172043fd17d00cf14ef1487fa66e0010eeabd9f01b569c2683f19e954b648f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64172043fd17d00cf14ef1487fa66e0010eeabd9f01b569c2683f19e954b648f->enter($__internal_64172043fd17d00cf14ef1487fa66e0010eeabd9f01b569c2683f19e954b648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2ce9df9e656e1deee783a0cf716dfc720068fcf5ea12a9d92abbb843ab782f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce9df9e656e1deee783a0cf716dfc720068fcf5ea12a9d92abbb843ab782f24->enter($__internal_2ce9df9e656e1deee783a0cf716dfc720068fcf5ea12a9d92abbb843ab782f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64172043fd17d00cf14ef1487fa66e0010eeabd9f01b569c2683f19e954b648f->leave($__internal_64172043fd17d00cf14ef1487fa66e0010eeabd9f01b569c2683f19e954b648f_prof);

        
        $__internal_2ce9df9e656e1deee783a0cf716dfc720068fcf5ea12a9d92abbb843ab782f24->leave($__internal_2ce9df9e656e1deee783a0cf716dfc720068fcf5ea12a9d92abbb843ab782f24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83c62bd1feece4408e6b264f1975db1cc4b33948b16b6e3a6eb4b88fe7e1d2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c62bd1feece4408e6b264f1975db1cc4b33948b16b6e3a6eb4b88fe7e1d2a6->enter($__internal_83c62bd1feece4408e6b264f1975db1cc4b33948b16b6e3a6eb4b88fe7e1d2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_afad9ee6c02b9b49c02f1c29ae47621ff54be8beb447ea80da0672444d2ae222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afad9ee6c02b9b49c02f1c29ae47621ff54be8beb447ea80da0672444d2ae222->enter($__internal_afad9ee6c02b9b49c02f1c29ae47621ff54be8beb447ea80da0672444d2ae222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afad9ee6c02b9b49c02f1c29ae47621ff54be8beb447ea80da0672444d2ae222->leave($__internal_afad9ee6c02b9b49c02f1c29ae47621ff54be8beb447ea80da0672444d2ae222_prof);

        
        $__internal_83c62bd1feece4408e6b264f1975db1cc4b33948b16b6e3a6eb4b88fe7e1d2a6->leave($__internal_83c62bd1feece4408e6b264f1975db1cc4b33948b16b6e3a6eb4b88fe7e1d2a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfbb55ac3aec3837237c7616a834ca7d935e0395d044223b6506b9d21e75f73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbb55ac3aec3837237c7616a834ca7d935e0395d044223b6506b9d21e75f73c->enter($__internal_dfbb55ac3aec3837237c7616a834ca7d935e0395d044223b6506b9d21e75f73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef9c1d271788abe3f28a6ce639118e36a8787fbef944c1de21fac88b2c14811a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9c1d271788abe3f28a6ce639118e36a8787fbef944c1de21fac88b2c14811a->enter($__internal_ef9c1d271788abe3f28a6ce639118e36a8787fbef944c1de21fac88b2c14811a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef9c1d271788abe3f28a6ce639118e36a8787fbef944c1de21fac88b2c14811a->leave($__internal_ef9c1d271788abe3f28a6ce639118e36a8787fbef944c1de21fac88b2c14811a_prof);

        
        $__internal_dfbb55ac3aec3837237c7616a834ca7d935e0395d044223b6506b9d21e75f73c->leave($__internal_dfbb55ac3aec3837237c7616a834ca7d935e0395d044223b6506b9d21e75f73c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcb90370ebcf953843b3f94d77ec94f47479f0daed58e9c4acf129483b03e7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb90370ebcf953843b3f94d77ec94f47479f0daed58e9c4acf129483b03e7a6->enter($__internal_fcb90370ebcf953843b3f94d77ec94f47479f0daed58e9c4acf129483b03e7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a91aabae7956da57ddf0f8b40ad86256d3ba22f58b2d24157d155c01f20c76bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91aabae7956da57ddf0f8b40ad86256d3ba22f58b2d24157d155c01f20c76bd->enter($__internal_a91aabae7956da57ddf0f8b40ad86256d3ba22f58b2d24157d155c01f20c76bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a91aabae7956da57ddf0f8b40ad86256d3ba22f58b2d24157d155c01f20c76bd->leave($__internal_a91aabae7956da57ddf0f8b40ad86256d3ba22f58b2d24157d155c01f20c76bd_prof);

        
        $__internal_fcb90370ebcf953843b3f94d77ec94f47479f0daed58e9c4acf129483b03e7a6->leave($__internal_fcb90370ebcf953843b3f94d77ec94f47479f0daed58e9c4acf129483b03e7a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/alan/my_project/php/lomweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
