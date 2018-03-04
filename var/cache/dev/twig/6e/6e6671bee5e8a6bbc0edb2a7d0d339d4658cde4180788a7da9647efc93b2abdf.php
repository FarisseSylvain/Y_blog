<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eec7c5a175274f120b3298441dd427c4a089461ce7cd3067f67080610c0eb955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1de795c46962a2a46a1ec14181ef71324044cf04a2a90649a59395e6b7c63f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de795c46962a2a46a1ec14181ef71324044cf04a2a90649a59395e6b7c63f80->enter($__internal_1de795c46962a2a46a1ec14181ef71324044cf04a2a90649a59395e6b7c63f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e47835ddfcf0885b6ed96fb2f355046c2ddc04ba3de1d2f5fca92c8741738973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47835ddfcf0885b6ed96fb2f355046c2ddc04ba3de1d2f5fca92c8741738973->enter($__internal_e47835ddfcf0885b6ed96fb2f355046c2ddc04ba3de1d2f5fca92c8741738973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de795c46962a2a46a1ec14181ef71324044cf04a2a90649a59395e6b7c63f80->leave($__internal_1de795c46962a2a46a1ec14181ef71324044cf04a2a90649a59395e6b7c63f80_prof);

        
        $__internal_e47835ddfcf0885b6ed96fb2f355046c2ddc04ba3de1d2f5fca92c8741738973->leave($__internal_e47835ddfcf0885b6ed96fb2f355046c2ddc04ba3de1d2f5fca92c8741738973_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4fc6ecdba42463bd0b1041bab0b16848b8eeff6d25a840eeacb266faf5b493b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fc6ecdba42463bd0b1041bab0b16848b8eeff6d25a840eeacb266faf5b493b->enter($__internal_e4fc6ecdba42463bd0b1041bab0b16848b8eeff6d25a840eeacb266faf5b493b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7524d6bb7840bb63a687d5ced77bf0c682a0efdff71f083869fec30e97fa0259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7524d6bb7840bb63a687d5ced77bf0c682a0efdff71f083869fec30e97fa0259->enter($__internal_7524d6bb7840bb63a687d5ced77bf0c682a0efdff71f083869fec30e97fa0259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7524d6bb7840bb63a687d5ced77bf0c682a0efdff71f083869fec30e97fa0259->leave($__internal_7524d6bb7840bb63a687d5ced77bf0c682a0efdff71f083869fec30e97fa0259_prof);

        
        $__internal_e4fc6ecdba42463bd0b1041bab0b16848b8eeff6d25a840eeacb266faf5b493b->leave($__internal_e4fc6ecdba42463bd0b1041bab0b16848b8eeff6d25a840eeacb266faf5b493b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
