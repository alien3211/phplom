<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_7c593df0f3d741202ae4b43aaef2b81a114e5dac52f76cc50d1af8b9024642a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc105b7fa862ded1353c1d0df43efd8ab473c64b1fe1053f53b2e0191b0e0665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc105b7fa862ded1353c1d0df43efd8ab473c64b1fe1053f53b2e0191b0e0665->enter($__internal_bc105b7fa862ded1353c1d0df43efd8ab473c64b1fe1053f53b2e0191b0e0665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_d3a7340060dd3ca9df5824bcbcbf571efe7a3bf2413ff90efb2e2fbb0160cc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a7340060dd3ca9df5824bcbcbf571efe7a3bf2413ff90efb2e2fbb0160cc84->enter($__internal_d3a7340060dd3ca9df5824bcbcbf571efe7a3bf2413ff90efb2e2fbb0160cc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 21
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters"))))));
        // line 26
        ob_start();
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "list", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c")))) : (            // line 32
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["_content_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc105b7fa862ded1353c1d0df43efd8ab473c64b1fe1053f53b2e0191b0e0665->leave($__internal_bc105b7fa862ded1353c1d0df43efd8ab473c64b1fe1053f53b2e0191b0e0665_prof);

        
        $__internal_d3a7340060dd3ca9df5824bcbcbf571efe7a3bf2413ff90efb2e2fbb0160cc84->leave($__internal_d3a7340060dd3ca9df5824bcbcbf571efe7a3bf2413ff90efb2e2fbb0160cc84_prof);

    }

    // line 23
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ed96fd4ec6378bf9be07307fc401c92410d2945f2b86ff391321ebb0967d6bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed96fd4ec6378bf9be07307fc401c92410d2945f2b86ff391321ebb0967d6bd8->enter($__internal_ed96fd4ec6378bf9be07307fc401c92410d2945f2b86ff391321ebb0967d6bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_342049bd2630b4c1552c8be80b651436ae1dc69db59a623fe420ea9c9dd9f494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342049bd2630b4c1552c8be80b651436ae1dc69db59a623fe420ea9c9dd9f494->enter($__internal_342049bd2630b4c1552c8be80b651436ae1dc69db59a623fe420ea9c9dd9f494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_342049bd2630b4c1552c8be80b651436ae1dc69db59a623fe420ea9c9dd9f494->leave($__internal_342049bd2630b4c1552c8be80b651436ae1dc69db59a623fe420ea9c9dd9f494_prof);

        
        $__internal_ed96fd4ec6378bf9be07307fc401c92410d2945f2b86ff391321ebb0967d6bd8->leave($__internal_ed96fd4ec6378bf9be07307fc401c92410d2945f2b86ff391321ebb0967d6bd8_prof);

    }

    // line 24
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6a7bd3beb4220db8251e724b9437db53d1c3c66f15c81d16def76f1326a3327c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7bd3beb4220db8251e724b9437db53d1c3c66f15c81d16def76f1326a3327c->enter($__internal_6a7bd3beb4220db8251e724b9437db53d1c3c66f15c81d16def76f1326a3327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_ba695efa7f68931ae123e87203fecdaa32a867a862a54d678e3bc7008f926227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba695efa7f68931ae123e87203fecdaa32a867a862a54d678e3bc7008f926227->enter($__internal_ba695efa7f68931ae123e87203fecdaa32a867a862a54d678e3bc7008f926227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_ba695efa7f68931ae123e87203fecdaa32a867a862a54d678e3bc7008f926227->leave($__internal_ba695efa7f68931ae123e87203fecdaa32a867a862a54d678e3bc7008f926227_prof);

        
        $__internal_6a7bd3beb4220db8251e724b9437db53d1c3c66f15c81d16def76f1326a3327c->leave($__internal_6a7bd3beb4220db8251e724b9437db53d1c3c66f15c81d16def76f1326a3327c_prof);

    }

    // line 37
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5489eba40c0793e38e2b41fa455d0f9c9b1b5b1924603c068fb06bf995ce431f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5489eba40c0793e38e2b41fa455d0f9c9b1b5b1924603c068fb06bf995ce431f->enter($__internal_5489eba40c0793e38e2b41fa455d0f9c9b1b5b1924603c068fb06bf995ce431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e4f8ecc6bfbf14f1647982870ca905a79a45bc7ca4e81f7a921ddc80f160f633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f8ecc6bfbf14f1647982870ca905a79a45bc7ca4e81f7a921ddc80f160f633->enter($__internal_e4f8ecc6bfbf14f1647982870ca905a79a45bc7ca4e81f7a921ddc80f160f633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(($context["_content_title"] ?? $this->getContext($context, "_content_title")));
        
        $__internal_e4f8ecc6bfbf14f1647982870ca905a79a45bc7ca4e81f7a921ddc80f160f633->leave($__internal_e4f8ecc6bfbf14f1647982870ca905a79a45bc7ca4e81f7a921ddc80f160f633_prof);

        
        $__internal_5489eba40c0793e38e2b41fa455d0f9c9b1b5b1924603c068fb06bf995ce431f->leave($__internal_5489eba40c0793e38e2b41fa455d0f9c9b1b5b1924603c068fb06bf995ce431f_prof);

    }

    // line 39
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c22ecd6a6ed0cd568305cd43cfe2e0d6311e89c1b8f944264d8e734afe93a8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22ecd6a6ed0cd568305cd43cfe2e0d6311e89c1b8f944264d8e734afe93a8b1->enter($__internal_c22ecd6a6ed0cd568305cd43cfe2e0d6311e89c1b8f944264d8e734afe93a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_aa609515ba56217442fec62513782f6c8139b250182df9d7d40b1c094081bb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa609515ba56217442fec62513782f6c8139b250182df9d7d40b1c094081bb64->enter($__internal_aa609515ba56217442fec62513782f6c8139b250182df9d7d40b1c094081bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 42
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 45
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 49
        $this->displayBlock('global_actions', $context, $blocks);
        // line 90
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_aa609515ba56217442fec62513782f6c8139b250182df9d7d40b1c094081bb64->leave($__internal_aa609515ba56217442fec62513782f6c8139b250182df9d7d40b1c094081bb64_prof);

        
        $__internal_c22ecd6a6ed0cd568305cd43cfe2e0d6311e89c1b8f944264d8e734afe93a8b1->leave($__internal_c22ecd6a6ed0cd568305cd43cfe2e0d6311e89c1b8f944264d8e734afe93a8b1_prof);

    }

    // line 42
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_c5b1810201914490f7f21482c84c85b782200b1dbcfe6d45b8d83173295b1628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b1810201914490f7f21482c84c85b782200b1dbcfe6d45b8d83173295b1628->enter($__internal_c5b1810201914490f7f21482c84c85b782200b1dbcfe6d45b8d83173295b1628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_55347f3c5afbfc882a4e9614c23071d3cc699fd21ea467367c43ec9039a7dada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55347f3c5afbfc882a4e9614c23071d3cc699fd21ea467367c43ec9039a7dada->enter($__internal_55347f3c5afbfc882a4e9614c23071d3cc699fd21ea467367c43ec9039a7dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 43
        echo "                <h1 class=\"title\">";
        echo twig_escape_filter($this->env, ($context["_content_title"] ?? $this->getContext($context, "_content_title")), "html", null, true);
        echo "</h1>
            ";
        
        $__internal_55347f3c5afbfc882a4e9614c23071d3cc699fd21ea467367c43ec9039a7dada->leave($__internal_55347f3c5afbfc882a4e9614c23071d3cc699fd21ea467367c43ec9039a7dada_prof);

        
        $__internal_c5b1810201914490f7f21482c84c85b782200b1dbcfe6d45b8d83173295b1628->leave($__internal_c5b1810201914490f7f21482c84c85b782200b1dbcfe6d45b8d83173295b1628_prof);

    }

    // line 49
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_7f30a1f6d6624b37eaeda96fc996aae3368aba48b0ed36374a81aa724ab6618f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f30a1f6d6624b37eaeda96fc996aae3368aba48b0ed36374a81aa724ab6618f->enter($__internal_7f30a1f6d6624b37eaeda96fc996aae3368aba48b0ed36374a81aa724ab6618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_2a2639254501ed698e520a2f07638ae9872c182b30f16a50935455330de723f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2639254501ed698e520a2f07638ae9872c182b30f16a50935455330de723f1->enter($__internal_2a2639254501ed698e520a2f07638ae9872c182b30f16a50935455330de723f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 50
        echo "                    ";
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 51
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 52
            echo "
                        ";
            // line 53
            $this->displayBlock('search_action', $context, $blocks);
            // line 76
            echo "                    ";
        }
        // line 77
        echo "
                    ";
        // line 78
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 79
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 80
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
        
        $__internal_2a2639254501ed698e520a2f07638ae9872c182b30f16a50935455330de723f1->leave($__internal_2a2639254501ed698e520a2f07638ae9872c182b30f16a50935455330de723f1_prof);

        
        $__internal_7f30a1f6d6624b37eaeda96fc996aae3368aba48b0ed36374a81aa724ab6618f->leave($__internal_7f30a1f6d6624b37eaeda96fc996aae3368aba48b0ed36374a81aa724ab6618f_prof);

    }

    // line 53
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_35e5d9d721302826f0150d0e1fc898775a423a27013e02e4b290ec75882f4a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e5d9d721302826f0150d0e1fc898775a423a27013e02e4b290ec75882f4a86->enter($__internal_35e5d9d721302826f0150d0e1fc898775a423a27013e02e4b290ec75882f4a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_426d7a3ad7e9c9f2c184729a704805adb1a3ab18cc399de70958e4f479a7b99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426d7a3ad7e9c9f2c184729a704805adb1a3ab18cc399de70958e4f479a7b99a->enter($__internal_426d7a3ad7e9c9f2c184729a704805adb1a3ab18cc399de70958e4f479a7b99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 54
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 56
        $this->displayBlock('search_form', $context, $blocks);
        // line 73
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_426d7a3ad7e9c9f2c184729a704805adb1a3ab18cc399de70958e4f479a7b99a->leave($__internal_426d7a3ad7e9c9f2c184729a704805adb1a3ab18cc399de70958e4f479a7b99a_prof);

        
        $__internal_35e5d9d721302826f0150d0e1fc898775a423a27013e02e4b290ec75882f4a86->leave($__internal_35e5d9d721302826f0150d0e1fc898775a423a27013e02e4b290ec75882f4a86_prof);

    }

    // line 56
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_cfd2c40f3102aac6747e18bb09f95a7ca30855cc63f6f21dd36dec3ad9dc781c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd2c40f3102aac6747e18bb09f95a7ca30855cc63f6f21dd36dec3ad9dc781c->enter($__internal_cfd2c40f3102aac6747e18bb09f95a7ca30855cc63f6f21dd36dec3ad9dc781c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_18ce3516a524862596725e3d79539f18023104df893b6b7e225c52b38753a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ce3516a524862596725e3d79539f18023104df893b6b7e225c52b38753a325->enter($__internal_18ce3516a524862596725e3d79539f18023104df893b6b7e225c52b38753a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 57
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"))), "html", null, true);
        // line 68
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_18ce3516a524862596725e3d79539f18023104df893b6b7e225c52b38753a325->leave($__internal_18ce3516a524862596725e3d79539f18023104df893b6b7e225c52b38753a325_prof);

        
        $__internal_cfd2c40f3102aac6747e18bb09f95a7ca30855cc63f6f21dd36dec3ad9dc781c->leave($__internal_cfd2c40f3102aac6747e18bb09f95a7ca30855cc63f6f21dd36dec3ad9dc781c_prof);

    }

    // line 80
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_3997046de8a7296402b6185103770746c77e4b4f5c2ea979ae6fadb7ac8bd089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3997046de8a7296402b6185103770746c77e4b4f5c2ea979ae6fadb7ac8bd089->enter($__internal_3997046de8a7296402b6185103770746c77e4b4f5c2ea979ae6fadb7ac8bd089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_9bcd219b7073aee44c9cec450a6da864a39cbd7ad90bfc5f7cb49a3b85e0a1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcd219b7073aee44c9cec450a6da864a39cbd7ad90bfc5f7cb49a3b85e0a1eb->enter($__internal_9bcd219b7073aee44c9cec450a6da864a39cbd7ad90bfc5f7cb49a3b85e0a1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 81
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 83
        if ($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 84
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c")))) : ("")), "html", null, true);
        // line 84
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_9bcd219b7073aee44c9cec450a6da864a39cbd7ad90bfc5f7cb49a3b85e0a1eb->leave($__internal_9bcd219b7073aee44c9cec450a6da864a39cbd7ad90bfc5f7cb49a3b85e0a1eb_prof);

        
        $__internal_3997046de8a7296402b6185103770746c77e4b4f5c2ea979ae6fadb7ac8bd089->leave($__internal_3997046de8a7296402b6185103770746c77e4b4f5c2ea979ae6fadb7ac8bd089_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_258a03f9ba214a0a7212632be185dad5c8fa4d58dd84424a71d04fdfb5eeb6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258a03f9ba214a0a7212632be185dad5c8fa4d58dd84424a71d04fdfb5eeb6be->enter($__internal_258a03f9ba214a0a7212632be185dad5c8fa4d58dd84424a71d04fdfb5eeb6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_37b9d38460b05cadee252c590f9fc4846321db65423ec285da04f07ebe488d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b9d38460b05cadee252c590f9fc4846321db65423ec285da04f07ebe488d6e->enter($__internal_37b9d38460b05cadee252c590f9fc4846321db65423ec285da04f07ebe488d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 97
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 128
        echo "        </thead>

        <tbody>
        ";
        // line 131
        $this->displayBlock('table_body', $context, $blocks);
        // line 167
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 171
        $this->displayBlock('paginator', $context, $blocks);
        // line 174
        echo "
    ";
        // line 175
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_37b9d38460b05cadee252c590f9fc4846321db65423ec285da04f07ebe488d6e->leave($__internal_37b9d38460b05cadee252c590f9fc4846321db65423ec285da04f07ebe488d6e_prof);

        
        $__internal_258a03f9ba214a0a7212632be185dad5c8fa4d58dd84424a71d04fdfb5eeb6be->leave($__internal_258a03f9ba214a0a7212632be185dad5c8fa4d58dd84424a71d04fdfb5eeb6be_prof);

    }

    // line 101
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_60a0f1fa1d3c316fa3ad02fa7fe77b1acc5ab2ffab4b4d9c5d28bda037dc35ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a0f1fa1d3c316fa3ad02fa7fe77b1acc5ab2ffab4b4d9c5d28bda037dc35ae->enter($__internal_60a0f1fa1d3c316fa3ad02fa7fe77b1acc5ab2ffab4b4d9c5d28bda037dc35ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_747e0fa22bdd20a56bde7e041867a2e474275766deed1e6ad9c620eacdc4b11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747e0fa22bdd20a56bde7e041867a2e474275766deed1e6ad9c620eacdc4b11c->enter($__internal_747e0fa22bdd20a56bde7e041867a2e474275766deed1e6ad9c620eacdc4b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 102
        echo "            <tr>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 104
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 105
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 106
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c")));
            // line 107
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ((((($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 108
            echo "
                    <th data-property-name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 110
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 111
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 112
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 113
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 116
                echo "                            <span>";
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 118
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                ";
        // line 121
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 122
            echo "                    <th>
                        <span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 126
        echo "            </tr>
        ";
        
        $__internal_747e0fa22bdd20a56bde7e041867a2e474275766deed1e6ad9c620eacdc4b11c->leave($__internal_747e0fa22bdd20a56bde7e041867a2e474275766deed1e6ad9c620eacdc4b11c_prof);

        
        $__internal_60a0f1fa1d3c316fa3ad02fa7fe77b1acc5ab2ffab4b4d9c5d28bda037dc35ae->leave($__internal_60a0f1fa1d3c316fa3ad02fa7fe77b1acc5ab2ffab4b4d9c5d28bda037dc35ae_prof);

    }

    // line 131
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_5f7eebebdf5966ea8ce2011410a0a9e366f5e06b5e6572865be47667e3cb5f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7eebebdf5966ea8ce2011410a0a9e366f5e06b5e6572865be47667e3cb5f77->enter($__internal_5f7eebebdf5966ea8ce2011410a0a9e366f5e06b5e6572865be47667e3cb5f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6e66932bd8d28f5f7cc7e14abe24410f33f0d85e8fda8c45570da1d6d55629ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e66932bd8d28f5f7cc7e14abe24410f33f0d85e8fda8c45570da1d6d55629ca->enter($__internal_6e66932bd8d28f5f7cc7e14abe24410f33f0d85e8fda8c45570da1d6d55629ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 132
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                ";
            $context["_item_id"] = $this->getAttribute($context["item"], $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
            // line 134
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 136
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 137
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),                 // line 2
($context["__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c"] ?? $this->getContext($context, "__internal_16ff30dc21655de721ac3cfa7ecd361bd0ad59b43d3caa837204cd3e4006027c")));
                // line 138
                echo "
                        <td data-label=\"";
                // line 139
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 140
                echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "
                    ";
            // line 144
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 145
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 146
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 147
                $this->displayBlock('item_actions', $context, $blocks);
                // line 156
                echo "                        </td>
                    ";
            }
            // line 158
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 160
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 161
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "        ";
        
        $__internal_6e66932bd8d28f5f7cc7e14abe24410f33f0d85e8fda8c45570da1d6d55629ca->leave($__internal_6e66932bd8d28f5f7cc7e14abe24410f33f0d85e8fda8c45570da1d6d55629ca_prof);

        
        $__internal_5f7eebebdf5966ea8ce2011410a0a9e366f5e06b5e6572865be47667e3cb5f77->leave($__internal_5f7eebebdf5966ea8ce2011410a0a9e366f5e06b5e6572865be47667e3cb5f77_prof);

    }

    // line 147
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_244d8c3b791d14a960f7a3c7ac2ba3006c720ef9ef28a18f1858d481b079d67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244d8c3b791d14a960f7a3c7ac2ba3006c720ef9ef28a18f1858d481b079d67d->enter($__internal_244d8c3b791d14a960f7a3c7ac2ba3006c720ef9ef28a18f1858d481b079d67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_ac454e3f1c509ebd4486b5348d95a4c6f151e565df6ed0547bf0cec74273cbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac454e3f1c509ebd4486b5348d95a4c6f151e565df6ed0547bf0cec74273cbd6->enter($__internal_ac454e3f1c509ebd4486b5348d95a4c6f151e565df6ed0547bf0cec74273cbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 148
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 149
($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 150
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 151
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 152
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 153
($context["_item_id"] ?? $this->getContext($context, "_item_id"))), false);
        // line 154
        echo "
                        ";
        
        $__internal_ac454e3f1c509ebd4486b5348d95a4c6f151e565df6ed0547bf0cec74273cbd6->leave($__internal_ac454e3f1c509ebd4486b5348d95a4c6f151e565df6ed0547bf0cec74273cbd6_prof);

        
        $__internal_244d8c3b791d14a960f7a3c7ac2ba3006c720ef9ef28a18f1858d481b079d67d->leave($__internal_244d8c3b791d14a960f7a3c7ac2ba3006c720ef9ef28a18f1858d481b079d67d_prof);

    }

    // line 171
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_6948f1bbbd115bf17097c4e3bf8cc112ec72992402cf8835267d3ad5e913ec6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6948f1bbbd115bf17097c4e3bf8cc112ec72992402cf8835267d3ad5e913ec6a->enter($__internal_6948f1bbbd115bf17097c4e3bf8cc112ec72992402cf8835267d3ad5e913ec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_0682c2871732d16bda66e88d97be60f37c4f6f3db52bc6e862e9ffd7c22d5522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0682c2871732d16bda66e88d97be60f37c4f6f3db52bc6e862e9ffd7c22d5522->enter($__internal_0682c2871732d16bda66e88d97be60f37c4f6f3db52bc6e862e9ffd7c22d5522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 172
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_0682c2871732d16bda66e88d97be60f37c4f6f3db52bc6e862e9ffd7c22d5522->leave($__internal_0682c2871732d16bda66e88d97be60f37c4f6f3db52bc6e862e9ffd7c22d5522_prof);

        
        $__internal_6948f1bbbd115bf17097c4e3bf8cc112ec72992402cf8835267d3ad5e913ec6a->leave($__internal_6948f1bbbd115bf17097c4e3bf8cc112ec72992402cf8835267d3ad5e913ec6a_prof);

    }

    // line 175
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_56e9c9134db401378247984eabe19c4ccdcfd5fd4a385dcd4ee93dfdd3173039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e9c9134db401378247984eabe19c4ccdcfd5fd4a385dcd4ee93dfdd3173039->enter($__internal_56e9c9134db401378247984eabe19c4ccdcfd5fd4a385dcd4ee93dfdd3173039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_3c7c3489f0d4a9381de98ac989e3343e648caa188b07e1a46943ff5afa03292d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7c3489f0d4a9381de98ac989e3343e648caa188b07e1a46943ff5afa03292d->enter($__internal_3c7c3489f0d4a9381de98ac989e3343e648caa188b07e1a46943ff5afa03292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 176
        echo "        ";
        $context["referer"] = ((((($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 177
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 178
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 180
        echo "
        ";
        // line 181
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 183
($context["referer"] ?? $this->getContext($context, "referer"))), "delete_form" =>         // line 184
($context["delete_form_template"] ?? $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 185
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 186
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 187
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 188
        echo "
    ";
        
        $__internal_3c7c3489f0d4a9381de98ac989e3343e648caa188b07e1a46943ff5afa03292d->leave($__internal_3c7c3489f0d4a9381de98ac989e3343e648caa188b07e1a46943ff5afa03292d_prof);

        
        $__internal_56e9c9134db401378247984eabe19c4ccdcfd5fd4a385dcd4ee93dfdd3173039->leave($__internal_56e9c9134db401378247984eabe19c4ccdcfd5fd4a385dcd4ee93dfdd3173039_prof);

    }

    // line 192
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6a33ae7bb10e0a7e16ce2da49d33ed1000b630ff011e2d0a59c1b93ce80d86e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a33ae7bb10e0a7e16ce2da49d33ed1000b630ff011e2d0a59c1b93ce80d86e4->enter($__internal_6a33ae7bb10e0a7e16ce2da49d33ed1000b630ff011e2d0a59c1b93ce80d86e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_104598d716b3902d91d93003de3ae6912bf11427a1e4e05f96f0c744c43cea13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104598d716b3902d91d93003de3ae6912bf11427a1e4e05f96f0c744c43cea13->enter($__internal_104598d716b3902d91d93003de3ae6912bf11427a1e4e05f96f0c744c43cea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 193
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 236
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 237
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 238
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_104598d716b3902d91d93003de3ae6912bf11427a1e4e05f96f0c744c43cea13->leave($__internal_104598d716b3902d91d93003de3ae6912bf11427a1e4e05f96f0c744c43cea13_prof);

        
        $__internal_6a33ae7bb10e0a7e16ce2da49d33ed1000b630ff011e2d0a59c1b93ce80d86e4->leave($__internal_6a33ae7bb10e0a7e16ce2da49d33ed1000b630ff011e2d0a59c1b93ce80d86e4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  825 => 238,  822 => 237,  820 => 236,  786 => 205,  770 => 193,  761 => 192,  750 => 188,  748 => 187,  747 => 186,  746 => 185,  745 => 184,  744 => 183,  743 => 181,  740 => 180,  738 => 178,  737 => 177,  735 => 176,  726 => 175,  713 => 172,  704 => 171,  693 => 154,  691 => 153,  690 => 152,  689 => 151,  688 => 150,  687 => 149,  685 => 148,  676 => 147,  666 => 166,  656 => 162,  652 => 161,  649 => 160,  635 => 158,  631 => 156,  629 => 147,  624 => 146,  621 => 145,  619 => 144,  616 => 143,  607 => 140,  597 => 139,  594 => 138,  592 => 2,  590 => 137,  587 => 136,  583 => 135,  578 => 134,  575 => 133,  556 => 132,  547 => 131,  536 => 126,  530 => 123,  527 => 122,  525 => 121,  522 => 120,  515 => 118,  509 => 116,  503 => 113,  499 => 112,  494 => 111,  492 => 110,  480 => 109,  477 => 108,  474 => 107,  472 => 2,  470 => 106,  467 => 105,  464 => 104,  460 => 103,  457 => 102,  448 => 101,  438 => 175,  435 => 174,  433 => 171,  427 => 167,  425 => 131,  420 => 128,  418 => 101,  412 => 97,  409 => 96,  400 => 95,  387 => 84,  385 => 2,  383 => 84,  377 => 83,  369 => 82,  366 => 81,  357 => 80,  343 => 68,  341 => 2,  340 => 68,  335 => 66,  330 => 64,  325 => 62,  321 => 61,  317 => 60,  313 => 59,  309 => 58,  306 => 57,  297 => 56,  285 => 73,  283 => 56,  279 => 55,  274 => 54,  265 => 53,  255 => 89,  252 => 88,  249 => 80,  246 => 79,  244 => 78,  241 => 77,  238 => 76,  236 => 53,  233 => 52,  230 => 51,  227 => 50,  218 => 49,  205 => 43,  196 => 42,  183 => 90,  181 => 49,  175 => 45,  173 => 42,  169 => 40,  160 => 39,  142 => 37,  124 => 24,  106 => 23,  96 => 5,  89 => 32,  88 => 2,  86 => 32,  83 => 31,  77 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 21,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% set _content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {{ 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle')|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ _entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title }}
    {% endif %}
{% endspaceless %}
{% endset %}

{% block page_title %}{{ _content_title|striptags|raw }}{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ _content_title }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {% set _item_id = attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/list.html.twig");
    }
}
