<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_70847bd64c244c82117511969502ff8469bad419e00b426a79d98b4ff3e09342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
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
        $__internal_53396bf57f4fb02f95f2e0f4938e6a79a123611030e5f262a075572a740e55fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53396bf57f4fb02f95f2e0f4938e6a79a123611030e5f262a075572a740e55fd->enter($__internal_53396bf57f4fb02f95f2e0f4938e6a79a123611030e5f262a075572a740e55fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $__internal_f2f35cea6bc101c512b918a724522f7618f9ae68da9bc4869108b1b2e8332854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f35cea6bc101c512b918a724522f7618f9ae68da9bc4869108b1b2e8332854->enter($__internal_f2f35cea6bc101c512b918a724522f7618f9ae68da9bc4869108b1b2e8332854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53396bf57f4fb02f95f2e0f4938e6a79a123611030e5f262a075572a740e55fd->leave($__internal_53396bf57f4fb02f95f2e0f4938e6a79a123611030e5f262a075572a740e55fd_prof);

        
        $__internal_f2f35cea6bc101c512b918a724522f7618f9ae68da9bc4869108b1b2e8332854->leave($__internal_f2f35cea6bc101c512b918a724522f7618f9ae68da9bc4869108b1b2e8332854_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_db828f649056616a2f761285ddf1175d2375d14d8b04c2bdd7237c76906edec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db828f649056616a2f761285ddf1175d2375d14d8b04c2bdd7237c76906edec9->enter($__internal_db828f649056616a2f761285ddf1175d2375d14d8b04c2bdd7237c76906edec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_466f8529c939e11561e17ed3fedd9808f7ba7f57e755d88f6889d1bc19bf524a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466f8529c939e11561e17ed3fedd9808f7ba7f57e755d88f6889d1bc19bf524a->enter($__internal_466f8529c939e11561e17ed3fedd9808f7ba7f57e755d88f6889d1bc19bf524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_466f8529c939e11561e17ed3fedd9808f7ba7f57e755d88f6889d1bc19bf524a->leave($__internal_466f8529c939e11561e17ed3fedd9808f7ba7f57e755d88f6889d1bc19bf524a_prof);

        
        $__internal_db828f649056616a2f761285ddf1175d2375d14d8b04c2bdd7237c76906edec9->leave($__internal_db828f649056616a2f761285ddf1175d2375d14d8b04c2bdd7237c76906edec9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0093f79ba82c17b9fc17a61470a0cad3ea38d54435552ffc087b3c70846148e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0093f79ba82c17b9fc17a61470a0cad3ea38d54435552ffc087b3c70846148e->enter($__internal_d0093f79ba82c17b9fc17a61470a0cad3ea38d54435552ffc087b3c70846148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4128e54a9ee23e1fdad99db78f5d175c69d14b0e10e95a5815349852349bb6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4128e54a9ee23e1fdad99db78f5d175c69d14b0e10e95a5815349852349bb6bf->enter($__internal_4128e54a9ee23e1fdad99db78f5d175c69d14b0e10e95a5815349852349bb6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_4128e54a9ee23e1fdad99db78f5d175c69d14b0e10e95a5815349852349bb6bf->leave($__internal_4128e54a9ee23e1fdad99db78f5d175c69d14b0e10e95a5815349852349bb6bf_prof);

        
        $__internal_d0093f79ba82c17b9fc17a61470a0cad3ea38d54435552ffc087b3c70846148e->leave($__internal_d0093f79ba82c17b9fc17a61470a0cad3ea38d54435552ffc087b3c70846148e_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}About{% endblock%}

{% block body %}
    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
{% endblock %}", "BloggerBlogBundle:Page:about.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/about.html.twig");
    }
}
