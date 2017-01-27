<?php

/* default/index.html.twig */
class __TwigTemplate_2eddffe26e5103d1292159681da525e1e28d46f8644f3eda11149d79a921ce33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0d5bf44375bccc55fb55617376a6d07d3c46aaf4e7dc7d9a478235970859346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d5bf44375bccc55fb55617376a6d07d3c46aaf4e7dc7d9a478235970859346->enter($__internal_e0d5bf44375bccc55fb55617376a6d07d3c46aaf4e7dc7d9a478235970859346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_224364148419e6da1d2e5a7d38d206a9fe12f4f456fa0fbeb6f83da37b751fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224364148419e6da1d2e5a7d38d206a9fe12f4f456fa0fbeb6f83da37b751fc9->enter($__internal_224364148419e6da1d2e5a7d38d206a9fe12f4f456fa0fbeb6f83da37b751fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d5bf44375bccc55fb55617376a6d07d3c46aaf4e7dc7d9a478235970859346->leave($__internal_e0d5bf44375bccc55fb55617376a6d07d3c46aaf4e7dc7d9a478235970859346_prof);

        
        $__internal_224364148419e6da1d2e5a7d38d206a9fe12f4f456fa0fbeb6f83da37b751fc9->leave($__internal_224364148419e6da1d2e5a7d38d206a9fe12f4f456fa0fbeb6f83da37b751fc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb441b747c475b0da452c82c1d764d3db056120c467f0ffee4eb061c9ed9808c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb441b747c475b0da452c82c1d764d3db056120c467f0ffee4eb061c9ed9808c->enter($__internal_bb441b747c475b0da452c82c1d764d3db056120c467f0ffee4eb061c9ed9808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73f09f1ff494d7b14f93a8673fdf8a38dbd43c9954259e35a980386fcfdeae48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f09f1ff494d7b14f93a8673fdf8a38dbd43c9954259e35a980386fcfdeae48->enter($__internal_73f09f1ff494d7b14f93a8673fdf8a38dbd43c9954259e35a980386fcfdeae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h1>blog</h1>

   ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "      <div>
         <h3><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
         <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "lead", array()), "html", null, true);
            echo "</p>

      </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
   <div class=\"navigation\">
      ";
        // line 15
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posts"] ?? $this->getContext($context, "posts")));
        echo "
   </div>
";
        
        $__internal_73f09f1ff494d7b14f93a8673fdf8a38dbd43c9954259e35a980386fcfdeae48->leave($__internal_73f09f1ff494d7b14f93a8673fdf8a38dbd43c9954259e35a980386fcfdeae48_prof);

        
        $__internal_bb441b747c475b0da452c82c1d764d3db056120c467f0ffee4eb061c9ed9808c->leave($__internal_bb441b747c475b0da452c82c1d764d3db056120c467f0ffee4eb061c9ed9808c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17fe6309d48e4c1f3e6dc0eabb34f7c86253e4cfe7c8d5a72465949ceafd1aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fe6309d48e4c1f3e6dc0eabb34f7c86253e4cfe7c8d5a72465949ceafd1aae->enter($__internal_17fe6309d48e4c1f3e6dc0eabb34f7c86253e4cfe7c8d5a72465949ceafd1aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_21b5f399a572884567948512c915737c5508a8de8cf69480358472d71233b1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b5f399a572884567948512c915737c5508a8de8cf69480358472d71233b1cd->enter($__internal_21b5f399a572884567948512c915737c5508a8de8cf69480358472d71233b1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21b5f399a572884567948512c915737c5508a8de8cf69480358472d71233b1cd->leave($__internal_21b5f399a572884567948512c915737c5508a8de8cf69480358472d71233b1cd_prof);

        
        $__internal_17fe6309d48e4c1f3e6dc0eabb34f7c86253e4cfe7c8d5a72465949ceafd1aae->leave($__internal_17fe6309d48e4c1f3e6dc0eabb34f7c86253e4cfe7c8d5a72465949ceafd1aae_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  81 => 15,  77 => 13,  67 => 9,  61 => 8,  58 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   <h1>blog</h1>

   {% for post in posts %}
      <div>
         <h3><a href=\"{{ path('post_show', {'id': post.id}) }}\">{{ post.title }}</a></h3>
         <p>{{ post.lead }}</p>

      </div>
   {%  endfor %}

   <div class=\"navigation\">
      {{ knp_pagination_render(posts) }}
   </div>
{% endblock %}

{% block stylesheets %}
{% endblock %}
", "default/index.html.twig", "/home/alan/my_project/php/lomweb/app/Resources/views/default/index.html.twig");
    }
}
