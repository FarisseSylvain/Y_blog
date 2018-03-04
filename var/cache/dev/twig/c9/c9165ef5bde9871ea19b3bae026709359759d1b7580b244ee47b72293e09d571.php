<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_e6d0e3b040156b255f4adf9a07617e1501848c7fbf937fceebe823aa89cc6adc extends Twig_Template
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
        $__internal_ba6481a9786720d2d1973c8208484287fe0d16d4fa6bd4da76a028c518dafcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6481a9786720d2d1973c8208484287fe0d16d4fa6bd4da76a028c518dafcf5->enter($__internal_ba6481a9786720d2d1973c8208484287fe0d16d4fa6bd4da76a028c518dafcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_a5149200369615d48609aa59108580479a6bcb1293426f9161b7666bd0432509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5149200369615d48609aa59108580479a6bcb1293426f9161b7666bd0432509->enter($__internal_a5149200369615d48609aa59108580479a6bcb1293426f9161b7666bd0432509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6481a9786720d2d1973c8208484287fe0d16d4fa6bd4da76a028c518dafcf5->leave($__internal_ba6481a9786720d2d1973c8208484287fe0d16d4fa6bd4da76a028c518dafcf5_prof);

        
        $__internal_a5149200369615d48609aa59108580479a6bcb1293426f9161b7666bd0432509->leave($__internal_a5149200369615d48609aa59108580479a6bcb1293426f9161b7666bd0432509_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccf51b3553ffb4282b0a9f4509e9154a664c2f91a3e4c4473b26e834eb30dc44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf51b3553ffb4282b0a9f4509e9154a664c2f91a3e4c4473b26e834eb30dc44->enter($__internal_ccf51b3553ffb4282b0a9f4509e9154a664c2f91a3e4c4473b26e834eb30dc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f78fad2c2ccf90fe008bd0d1ca972121dd7636efd86c5ab22f361b688efa0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f78fad2c2ccf90fe008bd0d1ca972121dd7636efd86c5ab22f361b688efa0ac->enter($__internal_8f78fad2c2ccf90fe008bd0d1ca972121dd7636efd86c5ab22f361b688efa0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_8f78fad2c2ccf90fe008bd0d1ca972121dd7636efd86c5ab22f361b688efa0ac->leave($__internal_8f78fad2c2ccf90fe008bd0d1ca972121dd7636efd86c5ab22f361b688efa0ac_prof);

        
        $__internal_ccf51b3553ffb4282b0a9f4509e9154a664c2f91a3e4c4473b26e834eb30dc44->leave($__internal_ccf51b3553ffb4282b0a9f4509e9154a664c2f91a3e4c4473b26e834eb30dc44_prof);

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
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
