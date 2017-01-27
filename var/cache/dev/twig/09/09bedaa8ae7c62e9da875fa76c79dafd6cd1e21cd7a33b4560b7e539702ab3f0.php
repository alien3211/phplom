<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_e540a7e81e5e16d5442f2d4b7c8266ab50b15fb904ae8f1aa542291486876e16 extends Twig_Template
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
        $__internal_0bdf26b7be25b4ec102736e2a325d700d45625db87bf85b243846f75fd2ddb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdf26b7be25b4ec102736e2a325d700d45625db87bf85b243846f75fd2ddb63->enter($__internal_0bdf26b7be25b4ec102736e2a325d700d45625db87bf85b243846f75fd2ddb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_545beea525b365022367aef62ffc55f31161e7795de65e769328c2898fa81c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545beea525b365022367aef62ffc55f31161e7795de65e769328c2898fa81c47->enter($__internal_545beea525b365022367aef62ffc55f31161e7795de65e769328c2898fa81c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_0bdf26b7be25b4ec102736e2a325d700d45625db87bf85b243846f75fd2ddb63->leave($__internal_0bdf26b7be25b4ec102736e2a325d700d45625db87bf85b243846f75fd2ddb63_prof);

        
        $__internal_545beea525b365022367aef62ffc55f31161e7795de65e769328c2898fa81c47->leave($__internal_545beea525b365022367aef62ffc55f31161e7795de65e769328c2898fa81c47_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}
