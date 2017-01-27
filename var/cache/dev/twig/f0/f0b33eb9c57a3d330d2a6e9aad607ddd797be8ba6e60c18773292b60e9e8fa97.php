<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f593386acf163bb93c820411f9c282f867d0107ce430078d29454cfc86c7f50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8ddf8c59a5b21a346c30fa50edaf70c979c64bfb1682acb33151c8e3114d2e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddf8c59a5b21a346c30fa50edaf70c979c64bfb1682acb33151c8e3114d2e96->enter($__internal_8ddf8c59a5b21a346c30fa50edaf70c979c64bfb1682acb33151c8e3114d2e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_a95687cae0168b1ffa24736f5bdb63979d4fee41d83301953206c1440ad05e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95687cae0168b1ffa24736f5bdb63979d4fee41d83301953206c1440ad05e48->enter($__internal_a95687cae0168b1ffa24736f5bdb63979d4fee41d83301953206c1440ad05e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddf8c59a5b21a346c30fa50edaf70c979c64bfb1682acb33151c8e3114d2e96->leave($__internal_8ddf8c59a5b21a346c30fa50edaf70c979c64bfb1682acb33151c8e3114d2e96_prof);

        
        $__internal_a95687cae0168b1ffa24736f5bdb63979d4fee41d83301953206c1440ad05e48->leave($__internal_a95687cae0168b1ffa24736f5bdb63979d4fee41d83301953206c1440ad05e48_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e97ca04418bcb87e2d0a653bddc4ee11686f9066323f288f79953e4709637cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97ca04418bcb87e2d0a653bddc4ee11686f9066323f288f79953e4709637cdd->enter($__internal_e97ca04418bcb87e2d0a653bddc4ee11686f9066323f288f79953e4709637cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d57f1a8037755950b5d24f7c3acce619425708bab676de3d41d08b9cfaf9d0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57f1a8037755950b5d24f7c3acce619425708bab676de3d41d08b9cfaf9d0db->enter($__internal_d57f1a8037755950b5d24f7c3acce619425708bab676de3d41d08b9cfaf9d0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d57f1a8037755950b5d24f7c3acce619425708bab676de3d41d08b9cfaf9d0db->leave($__internal_d57f1a8037755950b5d24f7c3acce619425708bab676de3d41d08b9cfaf9d0db_prof);

        
        $__internal_e97ca04418bcb87e2d0a653bddc4ee11686f9066323f288f79953e4709637cdd->leave($__internal_e97ca04418bcb87e2d0a653bddc4ee11686f9066323f288f79953e4709637cdd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/alan/my_project/php/lomweb/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
