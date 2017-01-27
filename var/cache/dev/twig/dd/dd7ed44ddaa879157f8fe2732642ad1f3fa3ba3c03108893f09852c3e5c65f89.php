<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_f2a42ed0419bc85070e773c7cb1c8a744f10cc3af212233fe90b1d573c25029e extends Twig_Template
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
        $__internal_54a6d378862bcc2b51fa33ed1ae703026e87cf939c2e90d08734a23c64f75eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a6d378862bcc2b51fa33ed1ae703026e87cf939c2e90d08734a23c64f75eac->enter($__internal_54a6d378862bcc2b51fa33ed1ae703026e87cf939c2e90d08734a23c64f75eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_49e8d629da6097e81585e751901480b10178f46af50a5c0b795cc6e9661aeb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e8d629da6097e81585e751901480b10178f46af50a5c0b795cc6e9661aeb57->enter($__internal_49e8d629da6097e81585e751901480b10178f46af50a5c0b795cc6e9661aeb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_54a6d378862bcc2b51fa33ed1ae703026e87cf939c2e90d08734a23c64f75eac->leave($__internal_54a6d378862bcc2b51fa33ed1ae703026e87cf939c2e90d08734a23c64f75eac_prof);

        
        $__internal_49e8d629da6097e81585e751901480b10178f46af50a5c0b795cc6e9661aeb57->leave($__internal_49e8d629da6097e81585e751901480b10178f46af50a5c0b795cc6e9661aeb57_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/label_null.html.twig");
    }
}
