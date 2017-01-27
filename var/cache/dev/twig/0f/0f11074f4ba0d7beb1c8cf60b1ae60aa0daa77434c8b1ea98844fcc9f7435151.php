<?php

/* @EasyAdmin/default/flash_messages.html.twig */
class __TwigTemplate_4ecc7453c0f3063e3566e8b2eceb8ae57243e7fb7561bd52cc451b1a6a4dbe42 extends Twig_Template
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
        $__internal_8f73ab5eacbb17bd003a880f87d8a0c15bac299d9a1740171df54e5d6d53cd6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f73ab5eacbb17bd003a880f87d8a0c15bac299d9a1740171df54e5d6d53cd6f->enter($__internal_8f73ab5eacbb17bd003a880f87d8a0c15bac299d9a1740171df54e5d6d53cd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        $__internal_aa57540acc21e60d98be1123b0086599d51329d091443c9c6257c519cc1b952b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa57540acc21e60d98be1123b0086599d51329d091443c9c6257c519cc1b952b->enter($__internal_aa57540acc21e60d98be1123b0086599d51329d091443c9c6257c519cc1b952b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/flash_messages.html.twig"));

        // line 1
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array())) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "started", array()))) {
            // line 2
            echo "    <div id=\"flash-messages\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    echo "                <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
        
        $__internal_8f73ab5eacbb17bd003a880f87d8a0c15bac299d9a1740171df54e5d6d53cd6f->leave($__internal_8f73ab5eacbb17bd003a880f87d8a0c15bac299d9a1740171df54e5d6d53cd6f_prof);

        
        $__internal_aa57540acc21e60d98be1123b0086599d51329d091443c9c6257c519cc1b952b->leave($__internal_aa57540acc21e60d98be1123b0086599d51329d091443c9c6257c519cc1b952b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 9,  44 => 6,  39 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session is not null and app.session.started %}
    <div id=\"flash-messages\">
        {% for label, messages in app.session.flashbag.all %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}
", "@EasyAdmin/default/flash_messages.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/flash_messages.html.twig");
    }
}
