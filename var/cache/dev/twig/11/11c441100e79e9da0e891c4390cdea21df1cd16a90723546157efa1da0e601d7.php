<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_c57b6c7767a7af145c420817edff18a124ee9b1bd166ef245f3a3d6c0471f2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eac45a56cd33c7080d84ecdb8a01828e1ae4576c609a79b19cf9da6cbdd385c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eac45a56cd33c7080d84ecdb8a01828e1ae4576c609a79b19cf9da6cbdd385c->enter($__internal_4eac45a56cd33c7080d84ecdb8a01828e1ae4576c609a79b19cf9da6cbdd385c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_807b1f9ddaaa5a2718f39f9d85933bece6acf06848336dcd5385fc90cc381ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807b1f9ddaaa5a2718f39f9d85933bece6acf06848336dcd5385fc90cc381ce8->enter($__internal_807b1f9ddaaa5a2718f39f9d85933bece6acf06848336dcd5385fc90cc381ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "</html>
";
        
        $__internal_4eac45a56cd33c7080d84ecdb8a01828e1ae4576c609a79b19cf9da6cbdd385c->leave($__internal_4eac45a56cd33c7080d84ecdb8a01828e1ae4576c609a79b19cf9da6cbdd385c_prof);

        
        $__internal_807b1f9ddaaa5a2718f39f9d85933bece6acf06848336dcd5385fc90cc381ce8->leave($__internal_807b1f9ddaaa5a2718f39f9d85933bece6acf06848336dcd5385fc90cc381ce8_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7a553bf21378a8f95638968afda481a00ea80cc07f51e9f134c93a87c2ed54c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a553bf21378a8f95638968afda481a00ea80cc07f51e9f134c93a87c2ed54c5->enter($__internal_7a553bf21378a8f95638968afda481a00ea80cc07f51e9f134c93a87c2ed54c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_61df8521dd14f4c318fcd38ae6baf37b3fe32fe0427b99e44f7874c1f8dcff77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61df8521dd14f4c318fcd38ae6baf37b3fe32fe0427b99e44f7874c1f8dcff77->enter($__internal_61df8521dd14f4c318fcd38ae6baf37b3fe32fe0427b99e44f7874c1f8dcff77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_61df8521dd14f4c318fcd38ae6baf37b3fe32fe0427b99e44f7874c1f8dcff77->leave($__internal_61df8521dd14f4c318fcd38ae6baf37b3fe32fe0427b99e44f7874c1f8dcff77_prof);

        
        $__internal_7a553bf21378a8f95638968afda481a00ea80cc07f51e9f134c93a87c2ed54c5->leave($__internal_7a553bf21378a8f95638968afda481a00ea80cc07f51e9f134c93a87c2ed54c5_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_fa50828f9e34bf217550421d8b792cc412fb50b032230d55bee472aa159cd82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa50828f9e34bf217550421d8b792cc412fb50b032230d55bee472aa159cd82b->enter($__internal_fa50828f9e34bf217550421d8b792cc412fb50b032230d55bee472aa159cd82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_e48c43ea4c4720cd044ad96a4c42c2f6673130b4d200a16f545233372f4f3ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48c43ea4c4720cd044ad96a4c42c2f6673130b4d200a16f545233372f4f3ce5->enter($__internal_e48c43ea4c4720cd044ad96a4c42c2f6673130b4d200a16f545233372f4f3ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_e48c43ea4c4720cd044ad96a4c42c2f6673130b4d200a16f545233372f4f3ce5->leave($__internal_e48c43ea4c4720cd044ad96a4c42c2f6673130b4d200a16f545233372f4f3ce5_prof);

        
        $__internal_fa50828f9e34bf217550421d8b792cc412fb50b032230d55bee472aa159cd82b->leave($__internal_fa50828f9e34bf217550421d8b792cc412fb50b032230d55bee472aa159cd82b_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_95e7605848cb065abb779390c1ce49a0696de39233e911d7ce0a74be5de31c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e7605848cb065abb779390c1ce49a0696de39233e911d7ce0a74be5de31c25->enter($__internal_95e7605848cb065abb779390c1ce49a0696de39233e911d7ce0a74be5de31c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_b14fb2f0b47b3f8a7cb61ffb1835361747bf4f3a25f434c71018297ea05be03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14fb2f0b47b3f8a7cb61ffb1835361747bf4f3a25f434c71018297ea05be03e->enter($__internal_b14fb2f0b47b3f8a7cb61ffb1835361747bf4f3a25f434c71018297ea05be03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b14fb2f0b47b3f8a7cb61ffb1835361747bf4f3a25f434c71018297ea05be03e->leave($__internal_b14fb2f0b47b3f8a7cb61ffb1835361747bf4f3a25f434c71018297ea05be03e_prof);

        
        $__internal_95e7605848cb065abb779390c1ce49a0696de39233e911d7ce0a74be5de31c25->leave($__internal_95e7605848cb065abb779390c1ce49a0696de39233e911d7ce0a74be5de31c25_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_a4618754ed13b1e048567e258a4d77f93df93ddfabbc39c19840f6ae42c0c5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4618754ed13b1e048567e258a4d77f93df93ddfabbc39c19840f6ae42c0c5a9->enter($__internal_a4618754ed13b1e048567e258a4d77f93df93ddfabbc39c19840f6ae42c0c5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_b8afbd9299e756764fd5a2429a08f9220af4f806fc57d311bc02549ca229c17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8afbd9299e756764fd5a2429a08f9220af4f806fc57d311bc02549ca229c17f->enter($__internal_b8afbd9299e756764fd5a2429a08f9220af4f806fc57d311bc02549ca229c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b8afbd9299e756764fd5a2429a08f9220af4f806fc57d311bc02549ca229c17f->leave($__internal_b8afbd9299e756764fd5a2429a08f9220af4f806fc57d311bc02549ca229c17f_prof);

        
        $__internal_a4618754ed13b1e048567e258a4d77f93df93ddfabbc39c19840f6ae42c0c5a9->leave($__internal_a4618754ed13b1e048567e258a4d77f93df93ddfabbc39c19840f6ae42c0c5a9_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_8abc9e5b25928cd100d3af7ac172de567ddaf86bfa84640d47d84e15c36addd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abc9e5b25928cd100d3af7ac172de567ddaf86bfa84640d47d84e15c36addd1->enter($__internal_8abc9e5b25928cd100d3af7ac172de567ddaf86bfa84640d47d84e15c36addd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_e3af4bc7e19319714de610fd860bd61c55c375c057b9e0d3100a2c21aaa2f84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3af4bc7e19319714de610fd860bd61c55c375c057b9e0d3100a2c21aaa2f84a->enter($__internal_e3af4bc7e19319714de610fd860bd61c55c375c057b9e0d3100a2c21aaa2f84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_e3af4bc7e19319714de610fd860bd61c55c375c057b9e0d3100a2c21aaa2f84a->leave($__internal_e3af4bc7e19319714de610fd860bd61c55c375c057b9e0d3100a2c21aaa2f84a_prof);

        
        $__internal_8abc9e5b25928cd100d3af7ac172de567ddaf86bfa84640d47d84e15c36addd1->leave($__internal_8abc9e5b25928cd100d3af7ac172de567ddaf86bfa84640d47d84e15c36addd1_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_deea721971a62d59f93aaec59bcbaacf0d00c50bd7018ab4c6c81450f3abe305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deea721971a62d59f93aaec59bcbaacf0d00c50bd7018ab4c6c81450f3abe305->enter($__internal_deea721971a62d59f93aaec59bcbaacf0d00c50bd7018ab4c6c81450f3abe305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ff39f81312c087a23783916099060dcfa5af83b156dec8edc0e1a6aa291f6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff39f81312c087a23783916099060dcfa5af83b156dec8edc0e1a6aa291f6fe->enter($__internal_5ff39f81312c087a23783916099060dcfa5af83b156dec8edc0e1a6aa291f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 138
        echo "        </div>

        ";
        // line 140
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 141
        echo "
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 143
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "    </body>
    ";
        
        $__internal_5ff39f81312c087a23783916099060dcfa5af83b156dec8edc0e1a6aa291f6fe->leave($__internal_5ff39f81312c087a23783916099060dcfa5af83b156dec8edc0e1a6aa291f6fe_prof);

        
        $__internal_deea721971a62d59f93aaec59bcbaacf0d00c50bd7018ab4c6c81450f3abe305->leave($__internal_deea721971a62d59f93aaec59bcbaacf0d00c50bd7018ab4c6c81450f3abe305_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_21133048558bae274a1c8789242f4a01482d567ce540e01014c4805db2db94d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21133048558bae274a1c8789242f4a01482d567ce540e01014c4805db2db94d0->enter($__internal_21133048558bae274a1c8789242f4a01482d567ce540e01014c4805db2db94d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_cfd8e82f8df910b0caf15bf201fff29e8b8691c72a362533f62c20849a9974e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd8e82f8df910b0caf15bf201fff29e8b8691c72a362533f62c20849a9974e7->enter($__internal_cfd8e82f8df910b0caf15bf201fff29e8b8691c72a362533f62c20849a9974e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_cfd8e82f8df910b0caf15bf201fff29e8b8691c72a362533f62c20849a9974e7->leave($__internal_cfd8e82f8df910b0caf15bf201fff29e8b8691c72a362533f62c20849a9974e7_prof);

        
        $__internal_21133048558bae274a1c8789242f4a01482d567ce540e01014c4805db2db94d0->leave($__internal_21133048558bae274a1c8789242f4a01482d567ce540e01014c4805db2db94d0_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_78d49d1d953cf7e00430357ec3c60a4ca83b17375aa69c1925a721c9b5f0f446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d49d1d953cf7e00430357ec3c60a4ca83b17375aa69c1925a721c9b5f0f446->enter($__internal_78d49d1d953cf7e00430357ec3c60a4ca83b17375aa69c1925a721c9b5f0f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_de621b37b60627e04becea9fc0d1ce1635220d18f692e5b52e18468890e78299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de621b37b60627e04becea9fc0d1ce1635220d18f692e5b52e18468890e78299->enter($__internal_de621b37b60627e04becea9fc0d1ce1635220d18f692e5b52e18468890e78299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_de621b37b60627e04becea9fc0d1ce1635220d18f692e5b52e18468890e78299->leave($__internal_de621b37b60627e04becea9fc0d1ce1635220d18f692e5b52e18468890e78299_prof);

        
        $__internal_78d49d1d953cf7e00430357ec3c60a4ca83b17375aa69c1925a721c9b5f0f446->leave($__internal_78d49d1d953cf7e00430357ec3c60a4ca83b17375aa69c1925a721c9b5f0f446_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_b621c665b92bfa0fb0f477f1bdd8f0f8263fa205e3fd0ecfb08490f7dce672b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b621c665b92bfa0fb0f477f1bdd8f0f8263fa205e3fd0ecfb08490f7dce672b4->enter($__internal_b621c665b92bfa0fb0f477f1bdd8f0f8263fa205e3fd0ecfb08490f7dce672b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_7464572c45f63bd37956b1d5dbfd76d3a483e2a5d4fe72b8841fb7feff7233ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7464572c45f63bd37956b1d5dbfd76d3a483e2a5d4fe72b8841fb7feff7233ea->enter($__internal_7464572c45f63bd37956b1d5dbfd76d3a483e2a5d4fe72b8841fb7feff7233ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 95
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 98
        $this->displayBlock('sidebar', $context, $blocks);
        // line 109
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "            </div>
        ";
        
        $__internal_7464572c45f63bd37956b1d5dbfd76d3a483e2a5d4fe72b8841fb7feff7233ea->leave($__internal_7464572c45f63bd37956b1d5dbfd76d3a483e2a5d4fe72b8841fb7feff7233ea_prof);

        
        $__internal_b621c665b92bfa0fb0f477f1bdd8f0f8263fa205e3fd0ecfb08490f7dce672b4->leave($__internal_b621c665b92bfa0fb0f477f1bdd8f0f8263fa205e3fd0ecfb08490f7dce672b4_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_c439501a4802b7c635a6e33560f213a5ae86edc8845708874f0e7abb359e7209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c439501a4802b7c635a6e33560f213a5ae86edc8845708874f0e7abb359e7209->enter($__internal_c439501a4802b7c635a6e33560f213a5ae86edc8845708874f0e7abb359e7209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2165f494648b7d360b779b6a5c6ce697adb56a49a4358bb865fb1134383730fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2165f494648b7d360b779b6a5c6ce697adb56a49a4358bb865fb1134383730fc->enter($__internal_2165f494648b7d360b779b6a5c6ce697adb56a49a4358bb865fb1134383730fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 92
        echo "                    </div>
                </nav>
            ";
        
        $__internal_2165f494648b7d360b779b6a5c6ce697adb56a49a4358bb865fb1134383730fc->leave($__internal_2165f494648b7d360b779b6a5c6ce697adb56a49a4358bb865fb1134383730fc_prof);

        
        $__internal_c439501a4802b7c635a6e33560f213a5ae86edc8845708874f0e7abb359e7209->leave($__internal_c439501a4802b7c635a6e33560f213a5ae86edc8845708874f0e7abb359e7209_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_6a564e3d7a1e310be490e68f2f4254dd131c63690be579fda1def1279132842e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a564e3d7a1e310be490e68f2f4254dd131c63690be579fda1def1279132842e->enter($__internal_6a564e3d7a1e310be490e68f2f4254dd131c63690be579fda1def1279132842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_fc5eeb337df6318011d56b7d3cbb430d0c21da26a789f0049e9bddf523598ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5eeb337df6318011d56b7d3cbb430d0c21da26a789f0049e9bddf523598ae0->enter($__internal_fc5eeb337df6318011d56b7d3cbb430d0c21da26a789f0049e9bddf523598ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_fc5eeb337df6318011d56b7d3cbb430d0c21da26a789f0049e9bddf523598ae0->leave($__internal_fc5eeb337df6318011d56b7d3cbb430d0c21da26a789f0049e9bddf523598ae0_prof);

        
        $__internal_6a564e3d7a1e310be490e68f2f4254dd131c63690be579fda1def1279132842e->leave($__internal_6a564e3d7a1e310be490e68f2f4254dd131c63690be579fda1def1279132842e_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_6d36ed4f1bee9edc675df3e4076f6c4ef249730e1f3f99ef14997189b2dd0d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d36ed4f1bee9edc675df3e4076f6c4ef249730e1f3f99ef14997189b2dd0d73->enter($__internal_6d36ed4f1bee9edc675df3e4076f6c4ef249730e1f3f99ef14997189b2dd0d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_5fe7976a2d3828e28bc54e4b150223b607dbd19c664d118df39005f690c1365a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe7976a2d3828e28bc54e4b150223b607dbd19c664d118df39005f690c1365a->enter($__internal_5fe7976a2d3828e28bc54e4b150223b607dbd19c664d118df39005f690c1365a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 80
        $this->displayBlock('user_menu', $context, $blocks);
        // line 89
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_5fe7976a2d3828e28bc54e4b150223b607dbd19c664d118df39005f690c1365a->leave($__internal_5fe7976a2d3828e28bc54e4b150223b607dbd19c664d118df39005f690c1365a_prof);

        
        $__internal_6d36ed4f1bee9edc675df3e4076f6c4ef249730e1f3f99ef14997189b2dd0d73->leave($__internal_6d36ed4f1bee9edc675df3e4076f6c4ef249730e1f3f99ef14997189b2dd0d73_prof);

    }

    // line 80
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_0ee83938a6b1e9eb4323fdc4530f14353f594ffbfcb082e59ab2af3449f4c176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee83938a6b1e9eb4323fdc4530f14353f594ffbfcb082e59ab2af3449f4c176->enter($__internal_0ee83938a6b1e9eb4323fdc4530f14353f594ffbfcb082e59ab2af3449f4c176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_0da3155f8b1b30ce0c663da1f99098feacc6db43c547c3c41c527d51a2d6d843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da3155f8b1b30ce0c663da1f99098feacc6db43c547c3c41c527d51a2d6d843->enter($__internal_0da3155f8b1b30ce0c663da1f99098feacc6db43c547c3c41c527d51a2d6d843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 81
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 83
        if ((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()))) : (""))) {
            // line 84
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 88
        echo "                                ";
        
        $__internal_0da3155f8b1b30ce0c663da1f99098feacc6db43c547c3c41c527d51a2d6d843->leave($__internal_0da3155f8b1b30ce0c663da1f99098feacc6db43c547c3c41c527d51a2d6d843_prof);

        
        $__internal_0ee83938a6b1e9eb4323fdc4530f14353f594ffbfcb082e59ab2af3449f4c176->leave($__internal_0ee83938a6b1e9eb4323fdc4530f14353f594ffbfcb082e59ab2af3449f4c176_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_58c2fcb5c94155965c16f867a34e669f6e359264a8ef9801bcdbe512c978d46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c2fcb5c94155965c16f867a34e669f6e359264a8ef9801bcdbe512c978d46b->enter($__internal_58c2fcb5c94155965c16f867a34e669f6e359264a8ef9801bcdbe512c978d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6a41abb2e298140e48dd04fb45c59137dc8cc37d9f8c931a2183d45cf43c9a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a41abb2e298140e48dd04fb45c59137dc8cc37d9f8c931a2183d45cf43c9a93->enter($__internal_6a41abb2e298140e48dd04fb45c59137dc8cc37d9f8c931a2183d45cf43c9a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                <section class=\"sidebar\">
                    ";
        // line 100
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 107
        echo "                </section>
            ";
        
        $__internal_6a41abb2e298140e48dd04fb45c59137dc8cc37d9f8c931a2183d45cf43c9a93->leave($__internal_6a41abb2e298140e48dd04fb45c59137dc8cc37d9f8c931a2183d45cf43c9a93_prof);

        
        $__internal_58c2fcb5c94155965c16f867a34e669f6e359264a8ef9801bcdbe512c978d46b->leave($__internal_58c2fcb5c94155965c16f867a34e669f6e359264a8ef9801bcdbe512c978d46b_prof);

    }

    // line 100
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_92e957dbd97d5ad49b7165227977a0fdd6bb8a8d5ddc0d04ffd9117a85ea19cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e957dbd97d5ad49b7165227977a0fdd6bb8a8d5ddc0d04ffd9117a85ea19cd->enter($__internal_92e957dbd97d5ad49b7165227977a0fdd6bb8a8d5ddc0d04ffd9117a85ea19cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_178988db11a70f1a71184f96811c62946815b7f1323630cd4e0341b9174f6080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178988db11a70f1a71184f96811c62946815b7f1323630cd4e0341b9174f6080->enter($__internal_178988db11a70f1a71184f96811c62946815b7f1323630cd4e0341b9174f6080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 101
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 102
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 105
        echo "
                    ";
        
        $__internal_178988db11a70f1a71184f96811c62946815b7f1323630cd4e0341b9174f6080->leave($__internal_178988db11a70f1a71184f96811c62946815b7f1323630cd4e0341b9174f6080_prof);

        
        $__internal_92e957dbd97d5ad49b7165227977a0fdd6bb8a8d5ddc0d04ffd9117a85ea19cd->leave($__internal_92e957dbd97d5ad49b7165227977a0fdd6bb8a8d5ddc0d04ffd9117a85ea19cd_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_d58b8878678e106142742bd1c22d3f0e20c4cbafb95d603e7fb4d3694adc3a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58b8878678e106142742bd1c22d3f0e20c4cbafb95d603e7fb4d3694adc3a5f->enter($__internal_d58b8878678e106142742bd1c22d3f0e20c4cbafb95d603e7fb4d3694adc3a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d4f7b3f26e7d01957e6b61b70be2ce03a080fc233b0e7e0a7d304bf8792ebd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f7b3f26e7d01957e6b61b70be2ce03a080fc233b0e7e0a7d304bf8792ebd2f->enter($__internal_d4f7b3f26e7d01957e6b61b70be2ce03a080fc233b0e7e0a7d304bf8792ebd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 116
        echo "
                <section class=\"content-header\">
                ";
        // line 118
        $this->displayBlock('content_header', $context, $blocks);
        // line 121
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 130
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 133
        $this->displayBlock('main', $context, $blocks);
        // line 134
        echo "                </section>
            ";
        
        $__internal_d4f7b3f26e7d01957e6b61b70be2ce03a080fc233b0e7e0a7d304bf8792ebd2f->leave($__internal_d4f7b3f26e7d01957e6b61b70be2ce03a080fc233b0e7e0a7d304bf8792ebd2f_prof);

        
        $__internal_d58b8878678e106142742bd1c22d3f0e20c4cbafb95d603e7fb4d3694adc3a5f->leave($__internal_d58b8878678e106142742bd1c22d3f0e20c4cbafb95d603e7fb4d3694adc3a5f_prof);

    }

    // line 113
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_29268cab2a47119fbaad5bdd222e9bb866ee24f1474b64d36f886d12c21520fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29268cab2a47119fbaad5bdd222e9bb866ee24f1474b64d36f886d12c21520fd->enter($__internal_29268cab2a47119fbaad5bdd222e9bb866ee24f1474b64d36f886d12c21520fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_c8eb87a576f482b0e1c46a79a50858a57387d628a2d12682542f5a69cc6af21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8eb87a576f482b0e1c46a79a50858a57387d628a2d12682542f5a69cc6af21f->enter($__internal_c8eb87a576f482b0e1c46a79a50858a57387d628a2d12682542f5a69cc6af21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 114
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_c8eb87a576f482b0e1c46a79a50858a57387d628a2d12682542f5a69cc6af21f->leave($__internal_c8eb87a576f482b0e1c46a79a50858a57387d628a2d12682542f5a69cc6af21f_prof);

        
        $__internal_29268cab2a47119fbaad5bdd222e9bb866ee24f1474b64d36f886d12c21520fd->leave($__internal_29268cab2a47119fbaad5bdd222e9bb866ee24f1474b64d36f886d12c21520fd_prof);

    }

    // line 118
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_719df374e5043a121f475b17dc409b7fa7e9148a60521ba64eb4040d1f16b53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719df374e5043a121f475b17dc409b7fa7e9148a60521ba64eb4040d1f16b53f->enter($__internal_719df374e5043a121f475b17dc409b7fa7e9148a60521ba64eb4040d1f16b53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_acb0dca705b0ce3ac31c71ad8da6e34536e2387df94e91d020f121f45f737399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb0dca705b0ce3ac31c71ad8da6e34536e2387df94e91d020f121f45f737399->enter($__internal_acb0dca705b0ce3ac31c71ad8da6e34536e2387df94e91d020f121f45f737399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 119
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_acb0dca705b0ce3ac31c71ad8da6e34536e2387df94e91d020f121f45f737399->leave($__internal_acb0dca705b0ce3ac31c71ad8da6e34536e2387df94e91d020f121f45f737399_prof);

        
        $__internal_719df374e5043a121f475b17dc409b7fa7e9148a60521ba64eb4040d1f16b53f->leave($__internal_719df374e5043a121f475b17dc409b7fa7e9148a60521ba64eb4040d1f16b53f_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8d9984df6453500303033bb5a3bc3aed2daa648ead187f9c1b47aad96ae3d506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9984df6453500303033bb5a3bc3aed2daa648ead187f9c1b47aad96ae3d506->enter($__internal_8d9984df6453500303033bb5a3bc3aed2daa648ead187f9c1b47aad96ae3d506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_1a2460d4005ea0f8157b1f27e9f11fa57bfad09f3cc6d12a0f2d6687b14d994e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2460d4005ea0f8157b1f27e9f11fa57bfad09f3cc6d12a0f2d6687b14d994e->enter($__internal_1a2460d4005ea0f8157b1f27e9f11fa57bfad09f3cc6d12a0f2d6687b14d994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_1a2460d4005ea0f8157b1f27e9f11fa57bfad09f3cc6d12a0f2d6687b14d994e->leave($__internal_1a2460d4005ea0f8157b1f27e9f11fa57bfad09f3cc6d12a0f2d6687b14d994e_prof);

        
        $__internal_8d9984df6453500303033bb5a3bc3aed2daa648ead187f9c1b47aad96ae3d506->leave($__internal_8d9984df6453500303033bb5a3bc3aed2daa648ead187f9c1b47aad96ae3d506_prof);

    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_76ac4b310c7a3c4dce5f78abca897bf1a905d8549a5f698bb1c432a95ec3dc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ac4b310c7a3c4dce5f78abca897bf1a905d8549a5f698bb1c432a95ec3dc66->enter($__internal_76ac4b310c7a3c4dce5f78abca897bf1a905d8549a5f698bb1c432a95ec3dc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_71e42f544bd4d13b850e10a6b07823fb370613ddda3cec32ef3294351f78bbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e42f544bd4d13b850e10a6b07823fb370613ddda3cec32ef3294351f78bbfe->enter($__internal_71e42f544bd4d13b850e10a6b07823fb370613ddda3cec32ef3294351f78bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 122
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 123
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 129
        echo "                ";
        
        $__internal_71e42f544bd4d13b850e10a6b07823fb370613ddda3cec32ef3294351f78bbfe->leave($__internal_71e42f544bd4d13b850e10a6b07823fb370613ddda3cec32ef3294351f78bbfe_prof);

        
        $__internal_76ac4b310c7a3c4dce5f78abca897bf1a905d8549a5f698bb1c432a95ec3dc66->leave($__internal_76ac4b310c7a3c4dce5f78abca897bf1a905d8549a5f698bb1c432a95ec3dc66_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_47091c9a3e9ee07c084b6187fc47b11ede28faef2f6e93027b9a411333c4f56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47091c9a3e9ee07c084b6187fc47b11ede28faef2f6e93027b9a411333c4f56e->enter($__internal_47091c9a3e9ee07c084b6187fc47b11ede28faef2f6e93027b9a411333c4f56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ae17d4d12aba8c12dc50eb84cfcac4d4c5b1751299a80a5c0e1ced99a0fcb226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae17d4d12aba8c12dc50eb84cfcac4d4c5b1751299a80a5c0e1ced99a0fcb226->enter($__internal_ae17d4d12aba8c12dc50eb84cfcac4d4c5b1751299a80a5c0e1ced99a0fcb226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ae17d4d12aba8c12dc50eb84cfcac4d4c5b1751299a80a5c0e1ced99a0fcb226->leave($__internal_ae17d4d12aba8c12dc50eb84cfcac4d4c5b1751299a80a5c0e1ced99a0fcb226_prof);

        
        $__internal_47091c9a3e9ee07c084b6187fc47b11ede28faef2f6e93027b9a411333c4f56e->leave($__internal_47091c9a3e9ee07c084b6187fc47b11ede28faef2f6e93027b9a411333c4f56e_prof);

    }

    // line 140
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_09ac3e56fd1b7899dab35c61a3b786d064c104bc8b1952a88e4dfd1249e246e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ac3e56fd1b7899dab35c61a3b786d064c104bc8b1952a88e4dfd1249e246e3->enter($__internal_09ac3e56fd1b7899dab35c61a3b786d064c104bc8b1952a88e4dfd1249e246e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_a465c6f4ba3ee6c423ef3a270be3c5a44c9c219bc13d4f3944987fbb627d1733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a465c6f4ba3ee6c423ef3a270be3c5a44c9c219bc13d4f3944987fbb627d1733->enter($__internal_a465c6f4ba3ee6c423ef3a270be3c5a44c9c219bc13d4f3944987fbb627d1733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_a465c6f4ba3ee6c423ef3a270be3c5a44c9c219bc13d4f3944987fbb627d1733->leave($__internal_a465c6f4ba3ee6c423ef3a270be3c5a44c9c219bc13d4f3944987fbb627d1733_prof);

        
        $__internal_09ac3e56fd1b7899dab35c61a3b786d064c104bc8b1952a88e4dfd1249e246e3->leave($__internal_09ac3e56fd1b7899dab35c61a3b786d064c104bc8b1952a88e4dfd1249e246e3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  729 => 140,  712 => 133,  702 => 129,  695 => 125,  691 => 123,  688 => 122,  679 => 121,  650 => 119,  641 => 118,  628 => 114,  619 => 113,  608 => 134,  606 => 133,  601 => 130,  598 => 121,  596 => 118,  592 => 116,  589 => 113,  580 => 112,  569 => 105,  567 => 102,  565 => 101,  556 => 100,  545 => 107,  543 => 100,  540 => 99,  531 => 98,  521 => 88,  515 => 86,  509 => 84,  507 => 83,  501 => 81,  492 => 80,  480 => 89,  478 => 80,  474 => 78,  465 => 77,  452 => 71,  443 => 70,  434 => 69,  422 => 92,  420 => 77,  415 => 74,  413 => 69,  406 => 65,  402 => 63,  393 => 62,  382 => 136,  380 => 112,  375 => 109,  373 => 98,  368 => 95,  366 => 62,  363 => 61,  354 => 60,  321 => 58,  310 => 145,  301 => 143,  297 => 142,  294 => 141,  292 => 140,  288 => 138,  286 => 60,  276 => 58,  267 => 57,  246 => 30,  237 => 29,  225 => 43,  222 => 42,  219 => 29,  210 => 28,  195 => 25,  192 => 24,  183 => 23,  170 => 15,  164 => 13,  155 => 12,  137 => 10,  126 => 147,  124 => 57,  117 => 53,  113 => 52,  109 => 50,  104 => 48,  99 => 47,  97 => 46,  94 => 45,  92 => 28,  89 => 27,  87 => 23,  84 => 22,  75 => 20,  71 => 19,  68 => 18,  66 => 12,  61 => 10,  50 => 2,  47 => 1,);
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
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    {% if app.user|default %}
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}
