<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6f8e35ae568e64ca514458da71354f9ea70aba139d8b827b0bfe49100729adb8 extends Twig_Template
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
        $__internal_f0c7fb42b7ab4f5ef31b8fec30d478714b061b8b7a282f119c7222982a964153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c7fb42b7ab4f5ef31b8fec30d478714b061b8b7a282f119c7222982a964153->enter($__internal_f0c7fb42b7ab4f5ef31b8fec30d478714b061b8b7a282f119c7222982a964153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_85c2f79f87a035154f7d3d8387199dba038edaba060909d62e5953e95b168ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c2f79f87a035154f7d3d8387199dba038edaba060909d62e5953e95b168ee3->enter($__internal_85c2f79f87a035154f7d3d8387199dba038edaba060909d62e5953e95b168ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c7fb42b7ab4f5ef31b8fec30d478714b061b8b7a282f119c7222982a964153->leave($__internal_f0c7fb42b7ab4f5ef31b8fec30d478714b061b8b7a282f119c7222982a964153_prof);

        
        $__internal_85c2f79f87a035154f7d3d8387199dba038edaba060909d62e5953e95b168ee3->leave($__internal_85c2f79f87a035154f7d3d8387199dba038edaba060909d62e5953e95b168ee3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68c00c1cbeeb4df5dc4774b8c75d349cbe1ecf0b8c54b35c37fb675b12df9f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c00c1cbeeb4df5dc4774b8c75d349cbe1ecf0b8c54b35c37fb675b12df9f8a->enter($__internal_68c00c1cbeeb4df5dc4774b8c75d349cbe1ecf0b8c54b35c37fb675b12df9f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee1de0afa9cde83a5f9b063d9a20725c4cc26004b5a1537b89ddda3a11364c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1de0afa9cde83a5f9b063d9a20725c4cc26004b5a1537b89ddda3a11364c34->enter($__internal_ee1de0afa9cde83a5f9b063d9a20725c4cc26004b5a1537b89ddda3a11364c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee1de0afa9cde83a5f9b063d9a20725c4cc26004b5a1537b89ddda3a11364c34->leave($__internal_ee1de0afa9cde83a5f9b063d9a20725c4cc26004b5a1537b89ddda3a11364c34_prof);

        
        $__internal_68c00c1cbeeb4df5dc4774b8c75d349cbe1ecf0b8c54b35c37fb675b12df9f8a->leave($__internal_68c00c1cbeeb4df5dc4774b8c75d349cbe1ecf0b8c54b35c37fb675b12df9f8a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47d223b0eeff9852a4da213b3aa68d6ad6b01c351ce495b958ea074d22b20fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d223b0eeff9852a4da213b3aa68d6ad6b01c351ce495b958ea074d22b20fb3->enter($__internal_47d223b0eeff9852a4da213b3aa68d6ad6b01c351ce495b958ea074d22b20fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8026d262bae88ba27618cfae6ab08e26627a598525fefdd6e516270cad4cb5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8026d262bae88ba27618cfae6ab08e26627a598525fefdd6e516270cad4cb5a1->enter($__internal_8026d262bae88ba27618cfae6ab08e26627a598525fefdd6e516270cad4cb5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8026d262bae88ba27618cfae6ab08e26627a598525fefdd6e516270cad4cb5a1->leave($__internal_8026d262bae88ba27618cfae6ab08e26627a598525fefdd6e516270cad4cb5a1_prof);

        
        $__internal_47d223b0eeff9852a4da213b3aa68d6ad6b01c351ce495b958ea074d22b20fb3->leave($__internal_47d223b0eeff9852a4da213b3aa68d6ad6b01c351ce495b958ea074d22b20fb3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62ee002d81848ce4c02ab65b751ca05a94500005dc229e8ace667372d404a30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ee002d81848ce4c02ab65b751ca05a94500005dc229e8ace667372d404a30e->enter($__internal_62ee002d81848ce4c02ab65b751ca05a94500005dc229e8ace667372d404a30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd1dc4e2b742cf3caa1414d5da9d172e8697cf8472810e2bfd99e3190659c5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1dc4e2b742cf3caa1414d5da9d172e8697cf8472810e2bfd99e3190659c5a6->enter($__internal_fd1dc4e2b742cf3caa1414d5da9d172e8697cf8472810e2bfd99e3190659c5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fd1dc4e2b742cf3caa1414d5da9d172e8697cf8472810e2bfd99e3190659c5a6->leave($__internal_fd1dc4e2b742cf3caa1414d5da9d172e8697cf8472810e2bfd99e3190659c5a6_prof);

        
        $__internal_62ee002d81848ce4c02ab65b751ca05a94500005dc229e8ace667372d404a30e->leave($__internal_62ee002d81848ce4c02ab65b751ca05a94500005dc229e8ace667372d404a30e_prof);

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
