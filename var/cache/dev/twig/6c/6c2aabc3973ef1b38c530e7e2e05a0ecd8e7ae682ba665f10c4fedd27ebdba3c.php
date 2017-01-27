<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_3e1ba6d492358cebd14b5b8dd345fccd38e8f12d2cc95921ef3625ac7dcb0a91 extends Twig_Template
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
        $__internal_1b08f57900b8f95866165906fba0220db4c5d7da6f3be1c553a4c5a0e59aff0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b08f57900b8f95866165906fba0220db4c5d7da6f3be1c553a4c5a0e59aff0e->enter($__internal_1b08f57900b8f95866165906fba0220db4c5d7da6f3be1c553a4c5a0e59aff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        $__internal_c183140f5661c63dd67fb3e246c399a9e5ceaa1ae881838e2deb33f37371038e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c183140f5661c63dd67fb3e246c399a9e5ceaa1ae881838e2deb33f37371038e->enter($__internal_c183140f5661c63dd67fb3e246c399a9e5ceaa1ae881838e2deb33f37371038e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

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
        
        $__internal_1b08f57900b8f95866165906fba0220db4c5d7da6f3be1c553a4c5a0e59aff0e->leave($__internal_1b08f57900b8f95866165906fba0220db4c5d7da6f3be1c553a4c5a0e59aff0e_prof);

        
        $__internal_c183140f5661c63dd67fb3e246c399a9e5ceaa1ae881838e2deb33f37371038e->leave($__internal_c183140f5661c63dd67fb3e246c399a9e5ceaa1ae881838e2deb33f37371038e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
", "@EasyAdmin/default/field_text.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/field_text.html.twig");
    }
}
