<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_aa184fca0df3a9f151263b561a93d3778cc84905a07bc4930ee325a49d260fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa184fca0df3a9f151263b561a93d3778cc84905a07bc4930ee325a49d260fba->enter($__internal_aa184fca0df3a9f151263b561a93d3778cc84905a07bc4930ee325a49d260fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b7c7f0ea9b649c27bb2b8b8611c46edc90ff02d8fc68e93bb531db099a4ea470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c7f0ea9b649c27bb2b8b8611c46edc90ff02d8fc68e93bb531db099a4ea470->enter($__internal_b7c7f0ea9b649c27bb2b8b8611c46edc90ff02d8fc68e93bb531db099a4ea470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa184fca0df3a9f151263b561a93d3778cc84905a07bc4930ee325a49d260fba->leave($__internal_aa184fca0df3a9f151263b561a93d3778cc84905a07bc4930ee325a49d260fba_prof);

        
        $__internal_b7c7f0ea9b649c27bb2b8b8611c46edc90ff02d8fc68e93bb531db099a4ea470->leave($__internal_b7c7f0ea9b649c27bb2b8b8611c46edc90ff02d8fc68e93bb531db099a4ea470_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14d80afe4cc606ff071029715f5151c66d2868f48ece859eaa9559ed104ab065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d80afe4cc606ff071029715f5151c66d2868f48ece859eaa9559ed104ab065->enter($__internal_14d80afe4cc606ff071029715f5151c66d2868f48ece859eaa9559ed104ab065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4205f94d2b1dafb77fb4188048ff1147edcf5338495be33bdeaa6483578956c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4205f94d2b1dafb77fb4188048ff1147edcf5338495be33bdeaa6483578956c9->enter($__internal_4205f94d2b1dafb77fb4188048ff1147edcf5338495be33bdeaa6483578956c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4205f94d2b1dafb77fb4188048ff1147edcf5338495be33bdeaa6483578956c9->leave($__internal_4205f94d2b1dafb77fb4188048ff1147edcf5338495be33bdeaa6483578956c9_prof);

        
        $__internal_14d80afe4cc606ff071029715f5151c66d2868f48ece859eaa9559ed104ab065->leave($__internal_14d80afe4cc606ff071029715f5151c66d2868f48ece859eaa9559ed104ab065_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0940ec25fda2fdc4761464aa8349c377a2a93848c91931b3d648523e6776c850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0940ec25fda2fdc4761464aa8349c377a2a93848c91931b3d648523e6776c850->enter($__internal_0940ec25fda2fdc4761464aa8349c377a2a93848c91931b3d648523e6776c850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2bb01032d32c6032e265a369790144145b8e44f9a0aace4f008f49ee8ab2a37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb01032d32c6032e265a369790144145b8e44f9a0aace4f008f49ee8ab2a37f->enter($__internal_2bb01032d32c6032e265a369790144145b8e44f9a0aace4f008f49ee8ab2a37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2bb01032d32c6032e265a369790144145b8e44f9a0aace4f008f49ee8ab2a37f->leave($__internal_2bb01032d32c6032e265a369790144145b8e44f9a0aace4f008f49ee8ab2a37f_prof);

        
        $__internal_0940ec25fda2fdc4761464aa8349c377a2a93848c91931b3d648523e6776c850->leave($__internal_0940ec25fda2fdc4761464aa8349c377a2a93848c91931b3d648523e6776c850_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb1de97d84c6911191bd61dc1b558fc00284b025b2e2b446d92580e058cf2b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1de97d84c6911191bd61dc1b558fc00284b025b2e2b446d92580e058cf2b0d->enter($__internal_bb1de97d84c6911191bd61dc1b558fc00284b025b2e2b446d92580e058cf2b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc6d56ba521361864da3886a67f49d48b58dd8655f3928ec19e8439953740232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6d56ba521361864da3886a67f49d48b58dd8655f3928ec19e8439953740232->enter($__internal_fc6d56ba521361864da3886a67f49d48b58dd8655f3928ec19e8439953740232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fc6d56ba521361864da3886a67f49d48b58dd8655f3928ec19e8439953740232->leave($__internal_fc6d56ba521361864da3886a67f49d48b58dd8655f3928ec19e8439953740232_prof);

        
        $__internal_bb1de97d84c6911191bd61dc1b558fc00284b025b2e2b446d92580e058cf2b0d->leave($__internal_bb1de97d84c6911191bd61dc1b558fc00284b025b2e2b446d92580e058cf2b0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
