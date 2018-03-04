<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_69caa9670a9cbf5cabc655a2533016c30be85c1f21e356980f3f53bbfeaf364a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c34f416fdc9d627ded9cf3d9b72867115c5016d38737b0aa4cd7d97859c73616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34f416fdc9d627ded9cf3d9b72867115c5016d38737b0aa4cd7d97859c73616->enter($__internal_c34f416fdc9d627ded9cf3d9b72867115c5016d38737b0aa4cd7d97859c73616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $__internal_078ec75376094c2e9030bb3421cc5c78307fa1fe9d1956c5361c40e3ae3afecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078ec75376094c2e9030bb3421cc5c78307fa1fe9d1956c5361c40e3ae3afecc->enter($__internal_078ec75376094c2e9030bb3421cc5c78307fa1fe9d1956c5361c40e3ae3afecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c34f416fdc9d627ded9cf3d9b72867115c5016d38737b0aa4cd7d97859c73616->leave($__internal_c34f416fdc9d627ded9cf3d9b72867115c5016d38737b0aa4cd7d97859c73616_prof);

        
        $__internal_078ec75376094c2e9030bb3421cc5c78307fa1fe9d1956c5361c40e3ae3afecc->leave($__internal_078ec75376094c2e9030bb3421cc5c78307fa1fe9d1956c5361c40e3ae3afecc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_976da64391d2ad82435170db3340527cb411e93c0c3a8fce034a9d7cadc719bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976da64391d2ad82435170db3340527cb411e93c0c3a8fce034a9d7cadc719bb->enter($__internal_976da64391d2ad82435170db3340527cb411e93c0c3a8fce034a9d7cadc719bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69e26b6029384b30bb56b8e20fef5c5ebc5d30bb373679f260e5089b5753a63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e26b6029384b30bb56b8e20fef5c5ebc5d30bb373679f260e5089b5753a63b->enter($__internal_69e26b6029384b30bb56b8e20fef5c5ebc5d30bb373679f260e5089b5753a63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_69e26b6029384b30bb56b8e20fef5c5ebc5d30bb373679f260e5089b5753a63b->leave($__internal_69e26b6029384b30bb56b8e20fef5c5ebc5d30bb373679f260e5089b5753a63b_prof);

        
        $__internal_976da64391d2ad82435170db3340527cb411e93c0c3a8fce034a9d7cadc719bb->leave($__internal_976da64391d2ad82435170db3340527cb411e93c0c3a8fce034a9d7cadc719bb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6712c7402bceb85dbb8f01a949337728dc1b1a34c6b0dadfe27db50821b8f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6712c7402bceb85dbb8f01a949337728dc1b1a34c6b0dadfe27db50821b8f18->enter($__internal_b6712c7402bceb85dbb8f01a949337728dc1b1a34c6b0dadfe27db50821b8f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fdbb3132637bdc00538b3c767486583a62e991d0ae51d654e2d4d619f65daf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdbb3132637bdc00538b3c767486583a62e991d0ae51d654e2d4d619f65daf7->enter($__internal_4fdbb3132637bdc00538b3c767486583a62e991d0ae51d654e2d4d619f65daf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact ynovblog</h1>
    </header>

    <p>Want to contact ynovblog?</p>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "blogger")));
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
      ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'row');
        echo "
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "

      ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4fdbb3132637bdc00538b3c767486583a62e991d0ae51d654e2d4d619f65daf7->leave($__internal_4fdbb3132637bdc00538b3c767486583a62e991d0ae51d654e2d4d619f65daf7_prof);

        
        $__internal_b6712c7402bceb85dbb8f01a949337728dc1b1a34c6b0dadfe27db50821b8f18->leave($__internal_b6712c7402bceb85dbb8f01a949337728dc1b1a34c6b0dadfe27db50821b8f18_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 21,  104 => 20,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact ynovblog</h1>
    </header>

    <p>Want to contact ynovblog?</p>
    {{ form_start(form, { 'attr': { 'class': 'blogger' }}) }}
      {{ form_errors(form) }}
      {{ form_row(form.name) }}
      {{ form_row(form.email) }}
      {{ form_row(form.subject) }}
      {{ form_row(form.body) }}
      {{ form_widget(form.submit) }}

      {{ form_rest(form) }}
    {{ form_end(form) }}
{% endblock %}
", "BloggerBlogBundle:Page:contact.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
