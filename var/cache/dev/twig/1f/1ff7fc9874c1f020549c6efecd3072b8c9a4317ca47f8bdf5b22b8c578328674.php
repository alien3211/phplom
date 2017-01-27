<?php

/* default/show.html.twig */
class __TwigTemplate_9525d76f255803428d24230272718f1f4f1e2cfc4cc72fd4412119f4ce382677 extends Twig_Template
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
        $__internal_e4e46a5b6e8b10a02cfe7cbf7cd5566e6a895b3fe76cc1609e63b5f16ca4a7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e46a5b6e8b10a02cfe7cbf7cd5566e6a895b3fe76cc1609e63b5f16ca4a7d1->enter($__internal_e4e46a5b6e8b10a02cfe7cbf7cd5566e6a895b3fe76cc1609e63b5f16ca4a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $__internal_6fb0be55646fdc29e4ab42b51dbdd07173f64750c3bd1bfc48fd2ab6bc205546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb0be55646fdc29e4ab42b51dbdd07173f64750c3bd1bfc48fd2ab6bc205546->enter($__internal_6fb0be55646fdc29e4ab42b51dbdd07173f64750c3bd1bfc48fd2ab6bc205546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e46a5b6e8b10a02cfe7cbf7cd5566e6a895b3fe76cc1609e63b5f16ca4a7d1->leave($__internal_e4e46a5b6e8b10a02cfe7cbf7cd5566e6a895b3fe76cc1609e63b5f16ca4a7d1_prof);

        
        $__internal_6fb0be55646fdc29e4ab42b51dbdd07173f64750c3bd1bfc48fd2ab6bc205546->leave($__internal_6fb0be55646fdc29e4ab42b51dbdd07173f64750c3bd1bfc48fd2ab6bc205546_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b0dfd31b49dd60c5d1fa2871a0fe53e2200e60fb8cdb9d0fd095e556d8ef0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b0dfd31b49dd60c5d1fa2871a0fe53e2200e60fb8cdb9d0fd095e556d8ef0c->enter($__internal_b1b0dfd31b49dd60c5d1fa2871a0fe53e2200e60fb8cdb9d0fd095e556d8ef0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97a6b2522bddd621b7d7394ab85553ae875c7e31efe5cd6682afa2b3ce67ebd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a6b2522bddd621b7d7394ab85553ae875c7e31efe5cd6682afa2b3ce67ebd8->enter($__internal_97a6b2522bddd621b7d7394ab85553ae875c7e31efe5cd6682afa2b3ce67ebd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97a6b2522bddd621b7d7394ab85553ae875c7e31efe5cd6682afa2b3ce67ebd8->leave($__internal_97a6b2522bddd621b7d7394ab85553ae875c7e31efe5cd6682afa2b3ce67ebd8_prof);

        
        $__internal_b1b0dfd31b49dd60c5d1fa2871a0fe53e2200e60fb8cdb9d0fd095e556d8ef0c->leave($__internal_b1b0dfd31b49dd60c5d1fa2871a0fe53e2200e60fb8cdb9d0fd095e556d8ef0c_prof);

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
