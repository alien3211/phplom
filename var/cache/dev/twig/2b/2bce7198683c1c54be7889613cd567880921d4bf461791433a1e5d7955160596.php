<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_157af032ba62bc99f758bbbe5409f2f38fe2c9a9efceae2f2ed843acfabbc09c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6467b1f104319dafba11ed9502ab64b0db6786d0c919c4752a653dd708387ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6467b1f104319dafba11ed9502ab64b0db6786d0c919c4752a653dd708387ecc->enter($__internal_6467b1f104319dafba11ed9502ab64b0db6786d0c919c4752a653dd708387ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_12d0039435750f8755009ecee5a761573418d8d4e4adf36b915417e2e6ab4998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d0039435750f8755009ecee5a761573418d8d4e4adf36b915417e2e6ab4998->enter($__internal_12d0039435750f8755009ecee5a761573418d8d4e4adf36b915417e2e6ab4998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6467b1f104319dafba11ed9502ab64b0db6786d0c919c4752a653dd708387ecc->leave($__internal_6467b1f104319dafba11ed9502ab64b0db6786d0c919c4752a653dd708387ecc_prof);

        
        $__internal_12d0039435750f8755009ecee5a761573418d8d4e4adf36b915417e2e6ab4998->leave($__internal_12d0039435750f8755009ecee5a761573418d8d4e4adf36b915417e2e6ab4998_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ee208fabdb04cce26a52d016f13f28b24bae325ab585df57bc328ee2eda48cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee208fabdb04cce26a52d016f13f28b24bae325ab585df57bc328ee2eda48cf->enter($__internal_1ee208fabdb04cce26a52d016f13f28b24bae325ab585df57bc328ee2eda48cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5bba2265aeb93294856fdca008b43a55e70e7dd154c062ab26dda181db9db6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bba2265aeb93294856fdca008b43a55e70e7dd154c062ab26dda181db9db6f->enter($__internal_f5bba2265aeb93294856fdca008b43a55e70e7dd154c062ab26dda181db9db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f5bba2265aeb93294856fdca008b43a55e70e7dd154c062ab26dda181db9db6f->leave($__internal_f5bba2265aeb93294856fdca008b43a55e70e7dd154c062ab26dda181db9db6f_prof);

        
        $__internal_1ee208fabdb04cce26a52d016f13f28b24bae325ab585df57bc328ee2eda48cf->leave($__internal_1ee208fabdb04cce26a52d016f13f28b24bae325ab585df57bc328ee2eda48cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_436a4f9ff4380b0af105eb139e25065f97fd78dd96f1f51ebdfdee76f6a92b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436a4f9ff4380b0af105eb139e25065f97fd78dd96f1f51ebdfdee76f6a92b61->enter($__internal_436a4f9ff4380b0af105eb139e25065f97fd78dd96f1f51ebdfdee76f6a92b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_faa554ab7107a33195ae238aac9733c67d16cf4fe6aae12f76de9226bdf8e234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa554ab7107a33195ae238aac9733c67d16cf4fe6aae12f76de9226bdf8e234->enter($__internal_faa554ab7107a33195ae238aac9733c67d16cf4fe6aae12f76de9226bdf8e234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_faa554ab7107a33195ae238aac9733c67d16cf4fe6aae12f76de9226bdf8e234->leave($__internal_faa554ab7107a33195ae238aac9733c67d16cf4fe6aae12f76de9226bdf8e234_prof);

        
        $__internal_436a4f9ff4380b0af105eb139e25065f97fd78dd96f1f51ebdfdee76f6a92b61->leave($__internal_436a4f9ff4380b0af105eb139e25065f97fd78dd96f1f51ebdfdee76f6a92b61_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e76f77132ecf12f4e4c796fe428036afdfda38d324ad1f70100dc4e06ad23682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76f77132ecf12f4e4c796fe428036afdfda38d324ad1f70100dc4e06ad23682->enter($__internal_e76f77132ecf12f4e4c796fe428036afdfda38d324ad1f70100dc4e06ad23682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8cb489c1b19361d1f2c9850e151af9730cb8f875bb8ac222acdbd02f7d7fce62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb489c1b19361d1f2c9850e151af9730cb8f875bb8ac222acdbd02f7d7fce62->enter($__internal_8cb489c1b19361d1f2c9850e151af9730cb8f875bb8ac222acdbd02f7d7fce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8cb489c1b19361d1f2c9850e151af9730cb8f875bb8ac222acdbd02f7d7fce62->leave($__internal_8cb489c1b19361d1f2c9850e151af9730cb8f875bb8ac222acdbd02f7d7fce62_prof);

        
        $__internal_e76f77132ecf12f4e4c796fe428036afdfda38d324ad1f70100dc4e06ad23682->leave($__internal_e76f77132ecf12f4e4c796fe428036afdfda38d324ad1f70100dc4e06ad23682_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/alan/my_project/php/lomweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
