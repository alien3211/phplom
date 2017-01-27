<?php

/* base.html.twig */
class __TwigTemplate_be5d15804c65b25ee842492b2af6589fbbfd85f4fc0e96fde11703715d6bf851 extends Twig_Template
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
        $__internal_abc186310f1c8fc567dfa6b0aaec5efe6e724cd4bcf9121c4a8c48ce53f2ea4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc186310f1c8fc567dfa6b0aaec5efe6e724cd4bcf9121c4a8c48ce53f2ea4a->enter($__internal_abc186310f1c8fc567dfa6b0aaec5efe6e724cd4bcf9121c4a8c48ce53f2ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fd4c3cd8a4dd350fd210f28732d4f9cf631db3d899bfd582e8596e2d1058cb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4c3cd8a4dd350fd210f28732d4f9cf631db3d899bfd582e8596e2d1058cb2f->enter($__internal_fd4c3cd8a4dd350fd210f28732d4f9cf631db3d899bfd582e8596e2d1058cb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_abc186310f1c8fc567dfa6b0aaec5efe6e724cd4bcf9121c4a8c48ce53f2ea4a->leave($__internal_abc186310f1c8fc567dfa6b0aaec5efe6e724cd4bcf9121c4a8c48ce53f2ea4a_prof);

        
        $__internal_fd4c3cd8a4dd350fd210f28732d4f9cf631db3d899bfd582e8596e2d1058cb2f->leave($__internal_fd4c3cd8a4dd350fd210f28732d4f9cf631db3d899bfd582e8596e2d1058cb2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e397754f82ff7d1d2d4c00fe432440f20f072f70dd8a6a45bd51ff9e88cefa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e397754f82ff7d1d2d4c00fe432440f20f072f70dd8a6a45bd51ff9e88cefa2->enter($__internal_6e397754f82ff7d1d2d4c00fe432440f20f072f70dd8a6a45bd51ff9e88cefa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de7bea008a5d8914d4f6853e44a1e9467bd26216e9182218d0fcdcdb12aeb0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7bea008a5d8914d4f6853e44a1e9467bd26216e9182218d0fcdcdb12aeb0bc->enter($__internal_de7bea008a5d8914d4f6853e44a1e9467bd26216e9182218d0fcdcdb12aeb0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_de7bea008a5d8914d4f6853e44a1e9467bd26216e9182218d0fcdcdb12aeb0bc->leave($__internal_de7bea008a5d8914d4f6853e44a1e9467bd26216e9182218d0fcdcdb12aeb0bc_prof);

        
        $__internal_6e397754f82ff7d1d2d4c00fe432440f20f072f70dd8a6a45bd51ff9e88cefa2->leave($__internal_6e397754f82ff7d1d2d4c00fe432440f20f072f70dd8a6a45bd51ff9e88cefa2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95039aa8bbcc3853712feab7801b03f655c16d5b4615e441172dd021a3f9522b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95039aa8bbcc3853712feab7801b03f655c16d5b4615e441172dd021a3f9522b->enter($__internal_95039aa8bbcc3853712feab7801b03f655c16d5b4615e441172dd021a3f9522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b4abdc249c88e1f2f719a7771171f135cde624c46b1a84615ab52f9f7dfd3a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4abdc249c88e1f2f719a7771171f135cde624c46b1a84615ab52f9f7dfd3a13->enter($__internal_b4abdc249c88e1f2f719a7771171f135cde624c46b1a84615ab52f9f7dfd3a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b4abdc249c88e1f2f719a7771171f135cde624c46b1a84615ab52f9f7dfd3a13->leave($__internal_b4abdc249c88e1f2f719a7771171f135cde624c46b1a84615ab52f9f7dfd3a13_prof);

        
        $__internal_95039aa8bbcc3853712feab7801b03f655c16d5b4615e441172dd021a3f9522b->leave($__internal_95039aa8bbcc3853712feab7801b03f655c16d5b4615e441172dd021a3f9522b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_61f3597488d5fa5f9746d4c3ccecf6a60910e5cfaa8db0758761a10f595f7072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f3597488d5fa5f9746d4c3ccecf6a60910e5cfaa8db0758761a10f595f7072->enter($__internal_61f3597488d5fa5f9746d4c3ccecf6a60910e5cfaa8db0758761a10f595f7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de00b106b30859ec121577ffcf75024bd7afd901002c0389cd037249538931a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de00b106b30859ec121577ffcf75024bd7afd901002c0389cd037249538931a8->enter($__internal_de00b106b30859ec121577ffcf75024bd7afd901002c0389cd037249538931a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de00b106b30859ec121577ffcf75024bd7afd901002c0389cd037249538931a8->leave($__internal_de00b106b30859ec121577ffcf75024bd7afd901002c0389cd037249538931a8_prof);

        
        $__internal_61f3597488d5fa5f9746d4c3ccecf6a60910e5cfaa8db0758761a10f595f7072->leave($__internal_61f3597488d5fa5f9746d4c3ccecf6a60910e5cfaa8db0758761a10f595f7072_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4b4fffa5c83302c483ee0afc520f3cd84676e23e9bbfd2eaba93a26ac7eb949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b4fffa5c83302c483ee0afc520f3cd84676e23e9bbfd2eaba93a26ac7eb949->enter($__internal_f4b4fffa5c83302c483ee0afc520f3cd84676e23e9bbfd2eaba93a26ac7eb949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbe84a03d467b1eb4a2971caa378f83cb2ef43044ba3ae6075dfaecb9118369c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe84a03d467b1eb4a2971caa378f83cb2ef43044ba3ae6075dfaecb9118369c->enter($__internal_cbe84a03d467b1eb4a2971caa378f83cb2ef43044ba3ae6075dfaecb9118369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cbe84a03d467b1eb4a2971caa378f83cb2ef43044ba3ae6075dfaecb9118369c->leave($__internal_cbe84a03d467b1eb4a2971caa378f83cb2ef43044ba3ae6075dfaecb9118369c_prof);

        
        $__internal_f4b4fffa5c83302c483ee0afc520f3cd84676e23e9bbfd2eaba93a26ac7eb949->leave($__internal_f4b4fffa5c83302c483ee0afc520f3cd84676e23e9bbfd2eaba93a26ac7eb949_prof);

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
