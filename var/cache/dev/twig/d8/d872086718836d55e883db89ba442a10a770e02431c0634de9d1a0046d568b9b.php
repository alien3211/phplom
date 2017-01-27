<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_a82b7be56c9424589560f979b398b4843eaff10e2ccc97b4f1d53936034251af extends Twig_Template
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
        $__internal_40d001940567e70dc3ec3b9ddd191b8188b40017a02dc6423af7430809dfb13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d001940567e70dc3ec3b9ddd191b8188b40017a02dc6423af7430809dfb13f->enter($__internal_40d001940567e70dc3ec3b9ddd191b8188b40017a02dc6423af7430809dfb13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_5e382f23622b1ec7e58347fbbcc454271a0624b230a9516a0c64b8845650ccd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e382f23622b1ec7e58347fbbcc454271a0624b230a9516a0c64b8845650ccd1->enter($__internal_5e382f23622b1ec7e58347fbbcc454271a0624b230a9516a0c64b8845650ccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_40d001940567e70dc3ec3b9ddd191b8188b40017a02dc6423af7430809dfb13f->leave($__internal_40d001940567e70dc3ec3b9ddd191b8188b40017a02dc6423af7430809dfb13f_prof);

        
        $__internal_5e382f23622b1ec7e58347fbbcc454271a0624b230a9516a0c64b8845650ccd1->leave($__internal_5e382f23622b1ec7e58347fbbcc454271a0624b230a9516a0c64b8845650ccd1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
