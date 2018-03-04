<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_c1271c4e35c76d8551456b09cc5fe4c53c52f2e505b31f444dcf3cf5f3d7640f extends Twig_Template
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
        $__internal_fa9f2882ba96d0796b023a1b72a30cca7248ff84994ab18006eac4db3d38348f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9f2882ba96d0796b023a1b72a30cca7248ff84994ab18006eac4db3d38348f->enter($__internal_fa9f2882ba96d0796b023a1b72a30cca7248ff84994ab18006eac4db3d38348f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_b2cc8e42b64cd0c552e2d30d478d109b730ffdcfe3c56b5602471466cb8a0fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cc8e42b64cd0c552e2d30d478d109b730ffdcfe3c56b5602471466cb8a0fc3->enter($__internal_b2cc8e42b64cd0c552e2d30d478d109b730ffdcfe3c56b5602471466cb8a0fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9f2882ba96d0796b023a1b72a30cca7248ff84994ab18006eac4db3d38348f->leave($__internal_fa9f2882ba96d0796b023a1b72a30cca7248ff84994ab18006eac4db3d38348f_prof);

        
        $__internal_b2cc8e42b64cd0c552e2d30d478d109b730ffdcfe3c56b5602471466cb8a0fc3->leave($__internal_b2cc8e42b64cd0c552e2d30d478d109b730ffdcfe3c56b5602471466cb8a0fc3_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b73822cc821115b6935d79ed930d51aef6345f08818fe3c3ed5533b1eb65b5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73822cc821115b6935d79ed930d51aef6345f08818fe3c3ed5533b1eb65b5e5->enter($__internal_b73822cc821115b6935d79ed930d51aef6345f08818fe3c3ed5533b1eb65b5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_589ef1ed73198b6a99148109c50b04500bc555d6517fed2e1c0531b38fde81f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589ef1ed73198b6a99148109c50b04500bc555d6517fed2e1c0531b38fde81f0->enter($__internal_589ef1ed73198b6a99148109c50b04500bc555d6517fed2e1c0531b38fde81f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_589ef1ed73198b6a99148109c50b04500bc555d6517fed2e1c0531b38fde81f0->leave($__internal_589ef1ed73198b6a99148109c50b04500bc555d6517fed2e1c0531b38fde81f0_prof);

        
        $__internal_b73822cc821115b6935d79ed930d51aef6345f08818fe3c3ed5533b1eb65b5e5->leave($__internal_b73822cc821115b6935d79ed930d51aef6345f08818fe3c3ed5533b1eb65b5e5_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_241d956295777b9cdb00250f479de09e633cfb1ade4f00702346ba31696eb484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241d956295777b9cdb00250f479de09e633cfb1ade4f00702346ba31696eb484->enter($__internal_241d956295777b9cdb00250f479de09e633cfb1ade4f00702346ba31696eb484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_0c6b87e3a92c08cf91dacab5dba93f4b13cc82c5cdc4827f83f03fc4c177ae1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6b87e3a92c08cf91dacab5dba93f4b13cc82c5cdc4827f83f03fc4c177ae1a->enter($__internal_0c6b87e3a92c08cf91dacab5dba93f4b13cc82c5cdc4827f83f03fc4c177ae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_0c6b87e3a92c08cf91dacab5dba93f4b13cc82c5cdc4827f83f03fc4c177ae1a->leave($__internal_0c6b87e3a92c08cf91dacab5dba93f4b13cc82c5cdc4827f83f03fc4c177ae1a_prof);

        
        $__internal_241d956295777b9cdb00250f479de09e633cfb1ade4f00702346ba31696eb484->leave($__internal_241d956295777b9cdb00250f479de09e633cfb1ade4f00702346ba31696eb484_prof);

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
", "BloggerBlogBundle::layout.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
