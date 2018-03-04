<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_ab547ffab8b10c5bb28e5d26a0e33155b45a17a9a379ada1151e55dbdde9e293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e87072dda7291d3c3cfc414f56900a81770eef5590b4bb006c976b6f2a47098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e87072dda7291d3c3cfc414f56900a81770eef5590b4bb006c976b6f2a47098->enter($__internal_1e87072dda7291d3c3cfc414f56900a81770eef5590b4bb006c976b6f2a47098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_8477f6fc0b97bc57b9260d3fd486571adcd23bf8e540b9b623414da16c11bcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8477f6fc0b97bc57b9260d3fd486571adcd23bf8e540b9b623414da16c11bcaf->enter($__internal_8477f6fc0b97bc57b9260d3fd486571adcd23bf8e540b9b623414da16c11bcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e87072dda7291d3c3cfc414f56900a81770eef5590b4bb006c976b6f2a47098->leave($__internal_1e87072dda7291d3c3cfc414f56900a81770eef5590b4bb006c976b6f2a47098_prof);

        
        $__internal_8477f6fc0b97bc57b9260d3fd486571adcd23bf8e540b9b623414da16c11bcaf->leave($__internal_8477f6fc0b97bc57b9260d3fd486571adcd23bf8e540b9b623414da16c11bcaf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cdf5675d6effc64ab1a54a992b34f5bc4a12c43470c1fc168c2fcd2262ed1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdf5675d6effc64ab1a54a992b34f5bc4a12c43470c1fc168c2fcd2262ed1e4->enter($__internal_3cdf5675d6effc64ab1a54a992b34f5bc4a12c43470c1fc168c2fcd2262ed1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12d49a090bc8087309bfbeab4a8a3490350710f130df96bb26fc2aa9f1311810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d49a090bc8087309bfbeab4a8a3490350710f130df96bb26fc2aa9f1311810->enter($__internal_12d49a090bc8087309bfbeab4a8a3490350710f130df96bb26fc2aa9f1311810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_12d49a090bc8087309bfbeab4a8a3490350710f130df96bb26fc2aa9f1311810->leave($__internal_12d49a090bc8087309bfbeab4a8a3490350710f130df96bb26fc2aa9f1311810_prof);

        
        $__internal_3cdf5675d6effc64ab1a54a992b34f5bc4a12c43470c1fc168c2fcd2262ed1e4->leave($__internal_3cdf5675d6effc64ab1a54a992b34f5bc4a12c43470c1fc168c2fcd2262ed1e4_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body %}
    Blog homepage
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
