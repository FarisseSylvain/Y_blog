<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a05fd94a6359356a6386cae59a8a5202960aa81f2d1d0deb6156d94be94aaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a05fd94a6359356a6386cae59a8a5202960aa81f2d1d0deb6156d94be94aaa7->enter($__internal_7a05fd94a6359356a6386cae59a8a5202960aa81f2d1d0deb6156d94be94aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a6d1fb96d5012f505d3f0a9492352e71b358e9797430d02869b90c6ddb217f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d1fb96d5012f505d3f0a9492352e71b358e9797430d02869b90c6ddb217f4f->enter($__internal_a6d1fb96d5012f505d3f0a9492352e71b358e9797430d02869b90c6ddb217f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a05fd94a6359356a6386cae59a8a5202960aa81f2d1d0deb6156d94be94aaa7->leave($__internal_7a05fd94a6359356a6386cae59a8a5202960aa81f2d1d0deb6156d94be94aaa7_prof);

        
        $__internal_a6d1fb96d5012f505d3f0a9492352e71b358e9797430d02869b90c6ddb217f4f->leave($__internal_a6d1fb96d5012f505d3f0a9492352e71b358e9797430d02869b90c6ddb217f4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f65d1cb82ae61c6dcc4b8a4334e7dd6c5f22172aa1a70e4997719be4998a98d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65d1cb82ae61c6dcc4b8a4334e7dd6c5f22172aa1a70e4997719be4998a98d9->enter($__internal_f65d1cb82ae61c6dcc4b8a4334e7dd6c5f22172aa1a70e4997719be4998a98d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_360e2a27dfa21a34b9fa1db196b3081741322d55f9e519d5bc775c69a33f8838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360e2a27dfa21a34b9fa1db196b3081741322d55f9e519d5bc775c69a33f8838->enter($__internal_360e2a27dfa21a34b9fa1db196b3081741322d55f9e519d5bc775c69a33f8838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_360e2a27dfa21a34b9fa1db196b3081741322d55f9e519d5bc775c69a33f8838->leave($__internal_360e2a27dfa21a34b9fa1db196b3081741322d55f9e519d5bc775c69a33f8838_prof);

        
        $__internal_f65d1cb82ae61c6dcc4b8a4334e7dd6c5f22172aa1a70e4997719be4998a98d9->leave($__internal_f65d1cb82ae61c6dcc4b8a4334e7dd6c5f22172aa1a70e4997719be4998a98d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e52bbf87b0f6217d377f118eb257ff706111c75b785fc4a31e584955588b3032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52bbf87b0f6217d377f118eb257ff706111c75b785fc4a31e584955588b3032->enter($__internal_e52bbf87b0f6217d377f118eb257ff706111c75b785fc4a31e584955588b3032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06359bcc5d768985ff293bd74ce54b309468f39c6980798007688421d0bca720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06359bcc5d768985ff293bd74ce54b309468f39c6980798007688421d0bca720->enter($__internal_06359bcc5d768985ff293bd74ce54b309468f39c6980798007688421d0bca720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06359bcc5d768985ff293bd74ce54b309468f39c6980798007688421d0bca720->leave($__internal_06359bcc5d768985ff293bd74ce54b309468f39c6980798007688421d0bca720_prof);

        
        $__internal_e52bbf87b0f6217d377f118eb257ff706111c75b785fc4a31e584955588b3032->leave($__internal_e52bbf87b0f6217d377f118eb257ff706111c75b785fc4a31e584955588b3032_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aec4a1f656ab5e0f6d704764ce48b94b9b97fdffc8f3467f9eec0ba965b23e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec4a1f656ab5e0f6d704764ce48b94b9b97fdffc8f3467f9eec0ba965b23e26->enter($__internal_aec4a1f656ab5e0f6d704764ce48b94b9b97fdffc8f3467f9eec0ba965b23e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8c18fbcf1360da02482464bc1c0d46656c4eee54c49c322bf4316c5ef687b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c18fbcf1360da02482464bc1c0d46656c4eee54c49c322bf4316c5ef687b06->enter($__internal_d8c18fbcf1360da02482464bc1c0d46656c4eee54c49c322bf4316c5ef687b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8c18fbcf1360da02482464bc1c0d46656c4eee54c49c322bf4316c5ef687b06->leave($__internal_d8c18fbcf1360da02482464bc1c0d46656c4eee54c49c322bf4316c5ef687b06_prof);

        
        $__internal_aec4a1f656ab5e0f6d704764ce48b94b9b97fdffc8f3467f9eec0ba965b23e26->leave($__internal_aec4a1f656ab5e0f6d704764ce48b94b9b97fdffc8f3467f9eec0ba965b23e26_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
