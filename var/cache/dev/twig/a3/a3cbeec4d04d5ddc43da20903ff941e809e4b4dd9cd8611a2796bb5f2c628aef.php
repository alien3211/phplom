<?php

/* base.html.twig */
class __TwigTemplate_318ba9ac2324ebda7504ee80906edbd21ce27173205c33a76e8d019afb188436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bad14e6ffa5e388d5c29828fd3f566985ae1353e4d3395fb1a054640bb1ac72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bad14e6ffa5e388d5c29828fd3f566985ae1353e4d3395fb1a054640bb1ac72->enter($__internal_0bad14e6ffa5e388d5c29828fd3f566985ae1353e4d3395fb1a054640bb1ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bad6d837b56816b750377d970eba05d67f899d627738862d74ec260e6f711df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad6d837b56816b750377d970eba05d67f899d627738862d74ec260e6f711df5->enter($__internal_bad6d837b56816b750377d970eba05d67f899d627738862d74ec260e6f711df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        </div>
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_0bad14e6ffa5e388d5c29828fd3f566985ae1353e4d3395fb1a054640bb1ac72->leave($__internal_0bad14e6ffa5e388d5c29828fd3f566985ae1353e4d3395fb1a054640bb1ac72_prof);

        
        $__internal_bad6d837b56816b750377d970eba05d67f899d627738862d74ec260e6f711df5->leave($__internal_bad6d837b56816b750377d970eba05d67f899d627738862d74ec260e6f711df5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_71407a03bcc51b4aad17dcc008b72ee3ce8cc0164a9af0b5ae412c16f1408a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71407a03bcc51b4aad17dcc008b72ee3ce8cc0164a9af0b5ae412c16f1408a05->enter($__internal_71407a03bcc51b4aad17dcc008b72ee3ce8cc0164a9af0b5ae412c16f1408a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e042244f9dae76f60e80c7b33063b3208b40c759bd08310a1f8331acd1b61797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e042244f9dae76f60e80c7b33063b3208b40c759bd08310a1f8331acd1b61797->enter($__internal_e042244f9dae76f60e80c7b33063b3208b40c759bd08310a1f8331acd1b61797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e042244f9dae76f60e80c7b33063b3208b40c759bd08310a1f8331acd1b61797->leave($__internal_e042244f9dae76f60e80c7b33063b3208b40c759bd08310a1f8331acd1b61797_prof);

        
        $__internal_71407a03bcc51b4aad17dcc008b72ee3ce8cc0164a9af0b5ae412c16f1408a05->leave($__internal_71407a03bcc51b4aad17dcc008b72ee3ce8cc0164a9af0b5ae412c16f1408a05_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4f68b8c59a2497414ba34d9e827c0ee60f54d249f3afccd059cb395b028e2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f68b8c59a2497414ba34d9e827c0ee60f54d249f3afccd059cb395b028e2d7->enter($__internal_f4f68b8c59a2497414ba34d9e827c0ee60f54d249f3afccd059cb395b028e2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c62f8a0ea30d302e483f04e2b429cf7e1fcffcf2466e848617410de3a3c518c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c62f8a0ea30d302e483f04e2b429cf7e1fcffcf2466e848617410de3a3c518c->enter($__internal_1c62f8a0ea30d302e483f04e2b429cf7e1fcffcf2466e848617410de3a3c518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c62f8a0ea30d302e483f04e2b429cf7e1fcffcf2466e848617410de3a3c518c->leave($__internal_1c62f8a0ea30d302e483f04e2b429cf7e1fcffcf2466e848617410de3a3c518c_prof);

        
        $__internal_f4f68b8c59a2497414ba34d9e827c0ee60f54d249f3afccd059cb395b028e2d7->leave($__internal_f4f68b8c59a2497414ba34d9e827c0ee60f54d249f3afccd059cb395b028e2d7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78b5c9521ad0db38503e82fe4ee24dc2cd6f9248fbf2d42d26405e9fb798358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78b5c9521ad0db38503e82fe4ee24dc2cd6f9248fbf2d42d26405e9fb798358->enter($__internal_a78b5c9521ad0db38503e82fe4ee24dc2cd6f9248fbf2d42d26405e9fb798358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef74547dcbe0d62a2bdc2d6010e0d9e3254c0c46167d07eea7125ca345ab8014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef74547dcbe0d62a2bdc2d6010e0d9e3254c0c46167d07eea7125ca345ab8014->enter($__internal_ef74547dcbe0d62a2bdc2d6010e0d9e3254c0c46167d07eea7125ca345ab8014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef74547dcbe0d62a2bdc2d6010e0d9e3254c0c46167d07eea7125ca345ab8014->leave($__internal_ef74547dcbe0d62a2bdc2d6010e0d9e3254c0c46167d07eea7125ca345ab8014_prof);

        
        $__internal_a78b5c9521ad0db38503e82fe4ee24dc2cd6f9248fbf2d42d26405e9fb798358->leave($__internal_a78b5c9521ad0db38503e82fe4ee24dc2cd6f9248fbf2d42d26405e9fb798358_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cbbc8d9728f4d5922f2787e3ef7efdb986aed11513c2c873cae0e6c8fffad02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbbc8d9728f4d5922f2787e3ef7efdb986aed11513c2c873cae0e6c8fffad02->enter($__internal_7cbbc8d9728f4d5922f2787e3ef7efdb986aed11513c2c873cae0e6c8fffad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_97f58de60bf0477570d3b7d380bf7093e1c3f7c3f3f14596a1b5a913ef7aef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f58de60bf0477570d3b7d380bf7093e1c3f7c3f3f14596a1b5a913ef7aef9b->enter($__internal_97f58de60bf0477570d3b7d380bf7093e1c3f7c3f3f14596a1b5a913ef7aef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97f58de60bf0477570d3b7d380bf7093e1c3f7c3f3f14596a1b5a913ef7aef9b->leave($__internal_97f58de60bf0477570d3b7d380bf7093e1c3f7c3f3f14596a1b5a913ef7aef9b_prof);

        
        $__internal_7cbbc8d9728f4d5922f2787e3ef7efdb986aed11513c2c873cae0e6c8fffad02->leave($__internal_7cbbc8d9728f4d5922f2787e3ef7efdb986aed11513c2c873cae0e6c8fffad02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  105 => 12,  88 => 6,  70 => 5,  58 => 15,  56 => 14,  53 => 13,  51 => 12,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/alan/my_project/php/lomweb/app/Resources/views/base.html.twig");
    }
}
