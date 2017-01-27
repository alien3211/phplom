<?php

/* default/show.html.twig */
class __TwigTemplate_01d2cc5d9177f067f252d098debb1895edfc7ad0db2f95f9e285d1f762a2d516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efececc435cee9bb1a8589a116076211282ec7c786ac695e4abe5561e530a5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efececc435cee9bb1a8589a116076211282ec7c786ac695e4abe5561e530a5ca->enter($__internal_efececc435cee9bb1a8589a116076211282ec7c786ac695e4abe5561e530a5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $__internal_cd8999a3dab82cfe6ea9a979a44a75cdebf5f9e51c633ae4acbe97aaa753140b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8999a3dab82cfe6ea9a979a44a75cdebf5f9e51c633ae4acbe97aaa753140b->enter($__internal_cd8999a3dab82cfe6ea9a979a44a75cdebf5f9e51c633ae4acbe97aaa753140b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efececc435cee9bb1a8589a116076211282ec7c786ac695e4abe5561e530a5ca->leave($__internal_efececc435cee9bb1a8589a116076211282ec7c786ac695e4abe5561e530a5ca_prof);

        
        $__internal_cd8999a3dab82cfe6ea9a979a44a75cdebf5f9e51c633ae4acbe97aaa753140b->leave($__internal_cd8999a3dab82cfe6ea9a979a44a75cdebf5f9e51c633ae4acbe97aaa753140b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f195e6c8cfad98820cf4002e5af7d021c22f299b93ad62b3f1287a4aa6e0363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f195e6c8cfad98820cf4002e5af7d021c22f299b93ad62b3f1287a4aa6e0363->enter($__internal_1f195e6c8cfad98820cf4002e5af7d021c22f299b93ad62b3f1287a4aa6e0363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_badd83dd58b6b0dad4d1e530c794f76576dec1e4ecfe1a05558748e425fc86fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badd83dd58b6b0dad4d1e530c794f76576dec1e4ecfe1a05558748e425fc86fd->enter($__internal_badd83dd58b6b0dad4d1e530c794f76576dec1e4ecfe1a05558748e425fc86fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <div>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "lead", array()), "html", null, true);
        echo "</p>

        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</p>


        <span class=\"pull-right\">
            Add ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "createdAt", array())), "html", null, true);
        echo "
        </span>

        <hr/>

        <h3>Comments</h3>
        <div>
            ";
        // line 20
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 21
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "

                    <button class=\"btn btn-primary pull-left\">Add comment</button>

                ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
            ";
        } else {
            // line 28
            echo "                <p>You must be login if you want to add comment</p>
            ";
        }
        // line 30
        echo "        </div>
        <br/>
        <br/>
        <br/>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 35
            echo "            <div>
                <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</p>
                Add ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array())), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>
";
        
        $__internal_badd83dd58b6b0dad4d1e530c794f76576dec1e4ecfe1a05558748e425fc86fd->leave($__internal_badd83dd58b6b0dad4d1e530c794f76576dec1e4ecfe1a05558748e425fc86fd_prof);

        
        $__internal_1f195e6c8cfad98820cf4002e5af7d021c22f299b93ad62b3f1287a4aa6e0363->leave($__internal_1f195e6c8cfad98820cf4002e5af7d021c22f299b93ad62b3f1287a4aa6e0363_prof);

    }

    public function getTemplateName()
    {
        return "default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  118 => 37,  114 => 36,  111 => 35,  107 => 34,  101 => 30,  97 => 28,  92 => 26,  85 => 22,  80 => 21,  78 => 20,  68 => 13,  61 => 9,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ post.title }}</h1>

    <div>
        <p>{{ post.lead }}</p>

        <p>{{ post.content }}</p>


        <span class=\"pull-right\">
            Add {{ post.createdAt | date }}
        </span>

        <hr/>

        <h3>Comments</h3>
        <div>
            {% if app.user %}
                {{ form_start(form) }}
                    {{ form_widget(form) }}

                    <button class=\"btn btn-primary pull-left\">Add comment</button>

                {{ form_end(form) }}
            {% else %}
                <p>You must be login if you want to add comment</p>
            {% endif %}
        </div>
        <br/>
        <br/>
        <br/>
        {% for comment in post.comments %}
            <div>
                <p>{{ comment.content }}</p>
                Add {{ comment.createdAt | date }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

", "default/show.html.twig", "/home/alan/my_project/php/lomweb/app/Resources/views/default/show.html.twig");
    }
}
