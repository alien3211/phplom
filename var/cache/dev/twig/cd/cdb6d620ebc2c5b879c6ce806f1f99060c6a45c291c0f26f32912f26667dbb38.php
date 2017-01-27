<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_c20b1e5c4320908f9cd553974e076de1a83e51aa07f597cd87306c2ba885e6a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d082368b1b5c0069294bb780d7cab20b8528a2feca712424f7c55b61cc41d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d082368b1b5c0069294bb780d7cab20b8528a2feca712424f7c55b61cc41d39->enter($__internal_1d082368b1b5c0069294bb780d7cab20b8528a2feca712424f7c55b61cc41d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        $__internal_cf9222928e254e964573413aba07f9cfba48a309faa9f5987d9e2784ec72dd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9222928e254e964573413aba07f9cfba48a309faa9f5987d9e2784ec72dd50->enter($__internal_cf9222928e254e964573413aba07f9cfba48a309faa9f5987d9e2784ec72dd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 3
        $context["__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 3
($context["__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"] ?? $this->getContext($context, "__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 4
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 3
($context["__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"] ?? $this->getContext($context, "__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"))), "%entity_id%" =>         // line 4
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d082368b1b5c0069294bb780d7cab20b8528a2feca712424f7c55b61cc41d39->leave($__internal_1d082368b1b5c0069294bb780d7cab20b8528a2feca712424f7c55b61cc41d39_prof);

        
        $__internal_cf9222928e254e964573413aba07f9cfba48a309faa9f5987d9e2784ec72dd50->leave($__internal_cf9222928e254e964573413aba07f9cfba48a309faa9f5987d9e2784ec72dd50_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_22b69e3e3945a10801ccc7365cb5edeeedd1f4b1c366b89aa26972d0228adb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b69e3e3945a10801ccc7365cb5edeeedd1f4b1c366b89aa26972d0228adb19->enter($__internal_22b69e3e3945a10801ccc7365cb5edeeedd1f4b1c366b89aa26972d0228adb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_097d77365fc9b983db9c6cd062bee16db624e8bb3deab7573b261b99ead77c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097d77365fc9b983db9c6cd062bee16db624e8bb3deab7573b261b99ead77c9d->enter($__internal_097d77365fc9b983db9c6cd062bee16db624e8bb3deab7573b261b99ead77c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_097d77365fc9b983db9c6cd062bee16db624e8bb3deab7573b261b99ead77c9d->leave($__internal_097d77365fc9b983db9c6cd062bee16db624e8bb3deab7573b261b99ead77c9d_prof);

        
        $__internal_22b69e3e3945a10801ccc7365cb5edeeedd1f4b1c366b89aa26972d0228adb19->leave($__internal_22b69e3e3945a10801ccc7365cb5edeeedd1f4b1c366b89aa26972d0228adb19_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ebdb6918f94209f9f3e09b5f7fbac952b6e580954116565fb53f921ce2f0a029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdb6918f94209f9f3e09b5f7fbac952b6e580954116565fb53f921ce2f0a029->enter($__internal_ebdb6918f94209f9f3e09b5f7fbac952b6e580954116565fb53f921ce2f0a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_1136efe9e71113293a11ac2ec4679f899455137fab170c0960ff43b1c8260384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1136efe9e71113293a11ac2ec4679f899455137fab170c0960ff43b1c8260384->enter($__internal_1136efe9e71113293a11ac2ec4679f899455137fab170c0960ff43b1c8260384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1136efe9e71113293a11ac2ec4679f899455137fab170c0960ff43b1c8260384->leave($__internal_1136efe9e71113293a11ac2ec4679f899455137fab170c0960ff43b1c8260384_prof);

        
        $__internal_ebdb6918f94209f9f3e09b5f7fbac952b6e580954116565fb53f921ce2f0a029->leave($__internal_ebdb6918f94209f9f3e09b5f7fbac952b6e580954116565fb53f921ce2f0a029_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0ad7a831c3fad869a9df04a9fd484aa639b2fb8c98ef134ebf919041d093eca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad7a831c3fad869a9df04a9fd484aa639b2fb8c98ef134ebf919041d093eca4->enter($__internal_0ad7a831c3fad869a9df04a9fd484aa639b2fb8c98ef134ebf919041d093eca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_8fe56ca57b33b0c5c0fa32faaf52e83286d8815d1c92129326f7544cc3412d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe56ca57b33b0c5c0fa32faaf52e83286d8815d1c92129326f7544cc3412d25->enter($__internal_8fe56ca57b33b0c5c0fa32faaf52e83286d8815d1c92129326f7544cc3412d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 3
($context["__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"] ?? $this->getContext($context, "__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6")))) : (        // line 14
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8fe56ca57b33b0c5c0fa32faaf52e83286d8815d1c92129326f7544cc3412d25->leave($__internal_8fe56ca57b33b0c5c0fa32faaf52e83286d8815d1c92129326f7544cc3412d25_prof);

        
        $__internal_0ad7a831c3fad869a9df04a9fd484aa639b2fb8c98ef134ebf919041d093eca4->leave($__internal_0ad7a831c3fad869a9df04a9fd484aa639b2fb8c98ef134ebf919041d093eca4_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_a2293c562b1f69097f528fae0cb4767abd265a70d157ebb5713845df838a736d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2293c562b1f69097f528fae0cb4767abd265a70d157ebb5713845df838a736d->enter($__internal_a2293c562b1f69097f528fae0cb4767abd265a70d157ebb5713845df838a736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9bd07edc768d6371df0a76233696a1bee79d9b4608d9ab1b9a5256748c15ab49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd07edc768d6371df0a76233696a1bee79d9b4608d9ab1b9a5256748c15ab49->enter($__internal_9bd07edc768d6371df0a76233696a1bee79d9b4608d9ab1b9a5256748c15ab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    <div class=\"form-horizontal\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 21
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 3
($context["__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"] ?? $this->getContext($context, "__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6")));
            // line 23
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 27
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 30
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 31
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 3
($context["__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6"] ?? $this->getContext($context, "__internal_6bc8e745921ee74cf9129c6844bc5477d61cab97888472e7a70cb183aa535fb6")));
                // line 31
                echo "</span>
                    ";
            }
            // line 33
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 39
        $this->displayBlock('item_actions', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
    </div>

    ";
        // line 55
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_9bd07edc768d6371df0a76233696a1bee79d9b4608d9ab1b9a5256748c15ab49->leave($__internal_9bd07edc768d6371df0a76233696a1bee79d9b4608d9ab1b9a5256748c15ab49_prof);

        
        $__internal_a2293c562b1f69097f528fae0cb4767abd265a70d157ebb5713845df838a736d->leave($__internal_a2293c562b1f69097f528fae0cb4767abd265a70d157ebb5713845df838a736d_prof);

    }

    // line 39
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_51e2daba942e8285b130c8fd42de97de039e51f35948a2194ef57c412aeb50e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e2daba942e8285b130c8fd42de97de039e51f35948a2194ef57c412aeb50e3->enter($__internal_51e2daba942e8285b130c8fd42de97de039e51f35948a2194ef57c412aeb50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_d1f344e85e239c5a07ce8f5ab6deff735dbf12f618b021dad269dfe5f87135cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f344e85e239c5a07ce8f5ab6deff735dbf12f618b021dad269dfe5f87135cc->enter($__internal_d1f344e85e239c5a07ce8f5ab6deff735dbf12f618b021dad269dfe5f87135cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 40
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 41
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 42
        echo "
                ";
        // line 43
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 44
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 45
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 46
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 47
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 48
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 49
        echo "
            ";
        
        $__internal_d1f344e85e239c5a07ce8f5ab6deff735dbf12f618b021dad269dfe5f87135cc->leave($__internal_d1f344e85e239c5a07ce8f5ab6deff735dbf12f618b021dad269dfe5f87135cc_prof);

        
        $__internal_51e2daba942e8285b130c8fd42de97de039e51f35948a2194ef57c412aeb50e3->leave($__internal_51e2daba942e8285b130c8fd42de97de039e51f35948a2194ef57c412aeb50e3_prof);

    }

    // line 55
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_6abe095b4b627930c16ec6d98ec8fd30472fcdd6d560a805087695bced0de3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abe095b4b627930c16ec6d98ec8fd30472fcdd6d560a805087695bced0de3ce->enter($__internal_6abe095b4b627930c16ec6d98ec8fd30472fcdd6d560a805087695bced0de3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_3c92f05668c8034fec30d3ceb81c5496252b5f2486f06f14da353b6353476d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c92f05668c8034fec30d3ceb81c5496252b5f2486f06f14da353b6353476d48->enter($__internal_3c92f05668c8034fec30d3ceb81c5496252b5f2486f06f14da353b6353476d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 56
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 58
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 59
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 60
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 61
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 62
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 63
        echo "
    ";
        
        $__internal_3c92f05668c8034fec30d3ceb81c5496252b5f2486f06f14da353b6353476d48->leave($__internal_3c92f05668c8034fec30d3ceb81c5496252b5f2486f06f14da353b6353476d48_prof);

        
        $__internal_6abe095b4b627930c16ec6d98ec8fd30472fcdd6d560a805087695bced0de3ce->leave($__internal_6abe095b4b627930c16ec6d98ec8fd30472fcdd6d560a805087695bced0de3ce_prof);

    }

    // line 67
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3dca73984996d7f5a81c104787b43a622fd1d2f63ffd1712964157f8ed169599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dca73984996d7f5a81c104787b43a622fd1d2f63ffd1712964157f8ed169599->enter($__internal_3dca73984996d7f5a81c104787b43a622fd1d2f63ffd1712964157f8ed169599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_2d300c8cc2191bd880405ac3350a08733d1dd27c7e8f16c02eb3bb09bc31ff8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d300c8cc2191bd880405ac3350a08733d1dd27c7e8f16c02eb3bb09bc31ff8b->enter($__internal_2d300c8cc2191bd880405ac3350a08733d1dd27c7e8f16c02eb3bb09bc31ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 68
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_2d300c8cc2191bd880405ac3350a08733d1dd27c7e8f16c02eb3bb09bc31ff8b->leave($__internal_2d300c8cc2191bd880405ac3350a08733d1dd27c7e8f16c02eb3bb09bc31ff8b_prof);

        
        $__internal_3dca73984996d7f5a81c104787b43a622fd1d2f63ffd1712964157f8ed169599->leave($__internal_3dca73984996d7f5a81c104787b43a622fd1d2f63ffd1712964157f8ed169599_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 68,  268 => 67,  257 => 63,  255 => 62,  254 => 61,  253 => 60,  252 => 59,  251 => 58,  249 => 56,  240 => 55,  229 => 49,  227 => 48,  226 => 47,  225 => 46,  224 => 45,  223 => 44,  222 => 43,  219 => 42,  216 => 41,  213 => 40,  204 => 39,  194 => 55,  188 => 51,  186 => 39,  181 => 36,  173 => 33,  169 => 31,  167 => 3,  165 => 31,  163 => 30,  157 => 27,  151 => 23,  149 => 3,  148 => 23,  140 => 21,  136 => 20,  133 => 19,  124 => 18,  111 => 14,  110 => 3,  108 => 14,  105 => 13,  103 => 12,  94 => 11,  76 => 9,  58 => 8,  48 => 6,  46 => 4,  45 => 3,  44 => 4,  43 => 3,  42 => 4,  40 => 3,  38 => 2,  36 => 1,  24 => 6,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "/home/alan/my_project/php/lomweb/vendor/javiereguiluz/easyadmin-bundle/Resources/views/default/show.html.twig");
    }
}
