<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_13fa1f52125d2e2c3e73bc281ef2c2698c46c5fde1cef9d57146764e6af114c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13fa1f52125d2e2c3e73bc281ef2c2698c46c5fde1cef9d57146764e6af114c9->enter($__internal_13fa1f52125d2e2c3e73bc281ef2c2698c46c5fde1cef9d57146764e6af114c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0d00e44caf5a1a7d77ae3a6fed1af85132fc7ab920efdf4b0df25b0b778aed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d00e44caf5a1a7d77ae3a6fed1af85132fc7ab920efdf4b0df25b0b778aed97->enter($__internal_0d00e44caf5a1a7d77ae3a6fed1af85132fc7ab920efdf4b0df25b0b778aed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13fa1f52125d2e2c3e73bc281ef2c2698c46c5fde1cef9d57146764e6af114c9->leave($__internal_13fa1f52125d2e2c3e73bc281ef2c2698c46c5fde1cef9d57146764e6af114c9_prof);

        
        $__internal_0d00e44caf5a1a7d77ae3a6fed1af85132fc7ab920efdf4b0df25b0b778aed97->leave($__internal_0d00e44caf5a1a7d77ae3a6fed1af85132fc7ab920efdf4b0df25b0b778aed97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_996b2e779e183bad7afacc893fd095177f555ad843903726eea10e826d976cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996b2e779e183bad7afacc893fd095177f555ad843903726eea10e826d976cad->enter($__internal_996b2e779e183bad7afacc893fd095177f555ad843903726eea10e826d976cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17456c46735b36342d2db1f1e74725d57b25e7e719c70ad3f3e4efe150e9de8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17456c46735b36342d2db1f1e74725d57b25e7e719c70ad3f3e4efe150e9de8c->enter($__internal_17456c46735b36342d2db1f1e74725d57b25e7e719c70ad3f3e4efe150e9de8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17456c46735b36342d2db1f1e74725d57b25e7e719c70ad3f3e4efe150e9de8c->leave($__internal_17456c46735b36342d2db1f1e74725d57b25e7e719c70ad3f3e4efe150e9de8c_prof);

        
        $__internal_996b2e779e183bad7afacc893fd095177f555ad843903726eea10e826d976cad->leave($__internal_996b2e779e183bad7afacc893fd095177f555ad843903726eea10e826d976cad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e85abdd13ae68430527b63221d909725bf5afcb07e80a1d69eab98684711a9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85abdd13ae68430527b63221d909725bf5afcb07e80a1d69eab98684711a9ce->enter($__internal_e85abdd13ae68430527b63221d909725bf5afcb07e80a1d69eab98684711a9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca997a4a37da9ae48555740415572f226cb10b354a95db065f0b43963ff8f5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca997a4a37da9ae48555740415572f226cb10b354a95db065f0b43963ff8f5a1->enter($__internal_ca997a4a37da9ae48555740415572f226cb10b354a95db065f0b43963ff8f5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca997a4a37da9ae48555740415572f226cb10b354a95db065f0b43963ff8f5a1->leave($__internal_ca997a4a37da9ae48555740415572f226cb10b354a95db065f0b43963ff8f5a1_prof);

        
        $__internal_e85abdd13ae68430527b63221d909725bf5afcb07e80a1d69eab98684711a9ce->leave($__internal_e85abdd13ae68430527b63221d909725bf5afcb07e80a1d69eab98684711a9ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_270057e0cd1b493ba8b60f7ebbc3123e972fe4be810a7a2100071f3d4281d9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270057e0cd1b493ba8b60f7ebbc3123e972fe4be810a7a2100071f3d4281d9dc->enter($__internal_270057e0cd1b493ba8b60f7ebbc3123e972fe4be810a7a2100071f3d4281d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1071bb8223d88a3ce2f148b587e08626b12c07b92c251acc59b06be8459402ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1071bb8223d88a3ce2f148b587e08626b12c07b92c251acc59b06be8459402ef->enter($__internal_1071bb8223d88a3ce2f148b587e08626b12c07b92c251acc59b06be8459402ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1071bb8223d88a3ce2f148b587e08626b12c07b92c251acc59b06be8459402ef->leave($__internal_1071bb8223d88a3ce2f148b587e08626b12c07b92c251acc59b06be8459402ef_prof);

        
        $__internal_270057e0cd1b493ba8b60f7ebbc3123e972fe4be810a7a2100071f3d4281d9dc->leave($__internal_270057e0cd1b493ba8b60f7ebbc3123e972fe4be810a7a2100071f3d4281d9dc_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
