<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_69db1c1f8ba119c594d77d6910d7aa1a55d5517c068d823d10884f9a1619a4a6 extends Twig_Template
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
        $__internal_7ad50e1f3d401929c845578169a82c1a4c36712251fb6c0dd6f368dfcf0794bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad50e1f3d401929c845578169a82c1a4c36712251fb6c0dd6f368dfcf0794bb->enter($__internal_7ad50e1f3d401929c845578169a82c1a4c36712251fb6c0dd6f368dfcf0794bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb869c2687b3ab17d5beef11fe51dcb641a4bd5dc65ed92b9df0ad3124ce8738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb869c2687b3ab17d5beef11fe51dcb641a4bd5dc65ed92b9df0ad3124ce8738->enter($__internal_cb869c2687b3ab17d5beef11fe51dcb641a4bd5dc65ed92b9df0ad3124ce8738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad50e1f3d401929c845578169a82c1a4c36712251fb6c0dd6f368dfcf0794bb->leave($__internal_7ad50e1f3d401929c845578169a82c1a4c36712251fb6c0dd6f368dfcf0794bb_prof);

        
        $__internal_cb869c2687b3ab17d5beef11fe51dcb641a4bd5dc65ed92b9df0ad3124ce8738->leave($__internal_cb869c2687b3ab17d5beef11fe51dcb641a4bd5dc65ed92b9df0ad3124ce8738_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7949244b015a38d267fa3bfb7debefd28511db5c41b926513d3582a6bc12ebf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7949244b015a38d267fa3bfb7debefd28511db5c41b926513d3582a6bc12ebf2->enter($__internal_7949244b015a38d267fa3bfb7debefd28511db5c41b926513d3582a6bc12ebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04ab8338ff6ce43d6091db5f66d3fccf91204728b5780a0909939cf965d63b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ab8338ff6ce43d6091db5f66d3fccf91204728b5780a0909939cf965d63b03->enter($__internal_04ab8338ff6ce43d6091db5f66d3fccf91204728b5780a0909939cf965d63b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04ab8338ff6ce43d6091db5f66d3fccf91204728b5780a0909939cf965d63b03->leave($__internal_04ab8338ff6ce43d6091db5f66d3fccf91204728b5780a0909939cf965d63b03_prof);

        
        $__internal_7949244b015a38d267fa3bfb7debefd28511db5c41b926513d3582a6bc12ebf2->leave($__internal_7949244b015a38d267fa3bfb7debefd28511db5c41b926513d3582a6bc12ebf2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_350490810a8e3b37bd0896b2927f3d285da3da25293cde8d305b5f98ef7526af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350490810a8e3b37bd0896b2927f3d285da3da25293cde8d305b5f98ef7526af->enter($__internal_350490810a8e3b37bd0896b2927f3d285da3da25293cde8d305b5f98ef7526af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e26866d98cbe8acf4bfbf50c59174b94e198bb9b92816f8f79c8c6cab7b0a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e26866d98cbe8acf4bfbf50c59174b94e198bb9b92816f8f79c8c6cab7b0a51->enter($__internal_8e26866d98cbe8acf4bfbf50c59174b94e198bb9b92816f8f79c8c6cab7b0a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e26866d98cbe8acf4bfbf50c59174b94e198bb9b92816f8f79c8c6cab7b0a51->leave($__internal_8e26866d98cbe8acf4bfbf50c59174b94e198bb9b92816f8f79c8c6cab7b0a51_prof);

        
        $__internal_350490810a8e3b37bd0896b2927f3d285da3da25293cde8d305b5f98ef7526af->leave($__internal_350490810a8e3b37bd0896b2927f3d285da3da25293cde8d305b5f98ef7526af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c50b05c1404f7cee9c1b11f346ea8b42464b43ea97caf6c3ac3fe6532235c5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50b05c1404f7cee9c1b11f346ea8b42464b43ea97caf6c3ac3fe6532235c5a0->enter($__internal_c50b05c1404f7cee9c1b11f346ea8b42464b43ea97caf6c3ac3fe6532235c5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55c361953df3075392d82e9e6de1653bcb919f20bc1b39d37a6c6371ff49f89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c361953df3075392d82e9e6de1653bcb919f20bc1b39d37a6c6371ff49f89d->enter($__internal_55c361953df3075392d82e9e6de1653bcb919f20bc1b39d37a6c6371ff49f89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55c361953df3075392d82e9e6de1653bcb919f20bc1b39d37a6c6371ff49f89d->leave($__internal_55c361953df3075392d82e9e6de1653bcb919f20bc1b39d37a6c6371ff49f89d_prof);

        
        $__internal_c50b05c1404f7cee9c1b11f346ea8b42464b43ea97caf6c3ac3fe6532235c5a0->leave($__internal_c50b05c1404f7cee9c1b11f346ea8b42464b43ea97caf6c3ac3fe6532235c5a0_prof);

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
