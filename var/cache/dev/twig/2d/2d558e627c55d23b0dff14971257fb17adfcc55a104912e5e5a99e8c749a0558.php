<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_e58e07ee0184d6f499b4d1088e3fa4fdd7cc34a7b44ab45d7fe529e430ba8bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91ea6444522d13eeba043a417ffd7c9461e2f7192c1d946e4f227c5bf0a66731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ea6444522d13eeba043a417ffd7c9461e2f7192c1d946e4f227c5bf0a66731->enter($__internal_91ea6444522d13eeba043a417ffd7c9461e2f7192c1d946e4f227c5bf0a66731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_be115a9dfdcf5c8b01c34e2deb591780a88f928046267de4bcd80b7382ac9765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be115a9dfdcf5c8b01c34e2deb591780a88f928046267de4bcd80b7382ac9765->enter($__internal_be115a9dfdcf5c8b01c34e2deb591780a88f928046267de4bcd80b7382ac9765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91ea6444522d13eeba043a417ffd7c9461e2f7192c1d946e4f227c5bf0a66731->leave($__internal_91ea6444522d13eeba043a417ffd7c9461e2f7192c1d946e4f227c5bf0a66731_prof);

        
        $__internal_be115a9dfdcf5c8b01c34e2deb591780a88f928046267de4bcd80b7382ac9765->leave($__internal_be115a9dfdcf5c8b01c34e2deb591780a88f928046267de4bcd80b7382ac9765_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a448d92b01d305656f0391f17cf0c7f3ecbd9d28ea97d64b39d8be09ec9c040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a448d92b01d305656f0391f17cf0c7f3ecbd9d28ea97d64b39d8be09ec9c040->enter($__internal_9a448d92b01d305656f0391f17cf0c7f3ecbd9d28ea97d64b39d8be09ec9c040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2537f8acb0c37fd440f52deb7a158a338a2810621e6e18056e05f51d3f913249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2537f8acb0c37fd440f52deb7a158a338a2810621e6e18056e05f51d3f913249->enter($__internal_2537f8acb0c37fd440f52deb7a158a338a2810621e6e18056e05f51d3f913249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_2537f8acb0c37fd440f52deb7a158a338a2810621e6e18056e05f51d3f913249->leave($__internal_2537f8acb0c37fd440f52deb7a158a338a2810621e6e18056e05f51d3f913249_prof);

        
        $__internal_9a448d92b01d305656f0391f17cf0c7f3ecbd9d28ea97d64b39d8be09ec9c040->leave($__internal_9a448d92b01d305656f0391f17cf0c7f3ecbd9d28ea97d64b39d8be09ec9c040_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_78a5d707653b90f7d52cd021116137d38adae477dbf427e231a6fb746eafacd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a5d707653b90f7d52cd021116137d38adae477dbf427e231a6fb746eafacd4->enter($__internal_78a5d707653b90f7d52cd021116137d38adae477dbf427e231a6fb746eafacd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bc3a0f761287c94840d45114fb76c241792b7fe8646bd2f013e8ea6d8893b717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3a0f761287c94840d45114fb76c241792b7fe8646bd2f013e8ea6d8893b717->enter($__internal_bc3a0f761287c94840d45114fb76c241792b7fe8646bd2f013e8ea6d8893b717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_bc3a0f761287c94840d45114fb76c241792b7fe8646bd2f013e8ea6d8893b717->leave($__internal_bc3a0f761287c94840d45114fb76c241792b7fe8646bd2f013e8ea6d8893b717_prof);

        
        $__internal_78a5d707653b90f7d52cd021116137d38adae477dbf427e231a6fb746eafacd4->leave($__internal_78a5d707653b90f7d52cd021116137d38adae477dbf427e231a6fb746eafacd4_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  67 => 9,  55 => 6,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"{{ asset('bundles/bloggerblog/css/blog.css')}}\" type=\"text/css\" rel=\"stylesheet\"/>
{% endblock %}

{% block sidebar %}
    Sidebar content
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
