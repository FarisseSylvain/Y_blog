<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbb1f5b7aae572400f245b112382c9cba444da9d1688a52dc9fed82c9d26fb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb1f5b7aae572400f245b112382c9cba444da9d1688a52dc9fed82c9d26fb1b->enter($__internal_cbb1f5b7aae572400f245b112382c9cba444da9d1688a52dc9fed82c9d26fb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dbdb797516c770c49d1fa3d94d9ea0220bd61657946aebed386f507cb6720a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdb797516c770c49d1fa3d94d9ea0220bd61657946aebed386f507cb6720a6b->enter($__internal_dbdb797516c770c49d1fa3d94d9ea0220bd61657946aebed386f507cb6720a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cbb1f5b7aae572400f245b112382c9cba444da9d1688a52dc9fed82c9d26fb1b->leave($__internal_cbb1f5b7aae572400f245b112382c9cba444da9d1688a52dc9fed82c9d26fb1b_prof);

        
        $__internal_dbdb797516c770c49d1fa3d94d9ea0220bd61657946aebed386f507cb6720a6b->leave($__internal_dbdb797516c770c49d1fa3d94d9ea0220bd61657946aebed386f507cb6720a6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea232294885a8f6ad60c1637a88bfafec06544eec514d8ef9b0ad650c61b346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea232294885a8f6ad60c1637a88bfafec06544eec514d8ef9b0ad650c61b346->enter($__internal_cea232294885a8f6ad60c1637a88bfafec06544eec514d8ef9b0ad650c61b346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c917c3c164da3b27f185ac46d49118ae0b71968784abff03437bd48f91530f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c917c3c164da3b27f185ac46d49118ae0b71968784abff03437bd48f91530f7->enter($__internal_4c917c3c164da3b27f185ac46d49118ae0b71968784abff03437bd48f91530f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4c917c3c164da3b27f185ac46d49118ae0b71968784abff03437bd48f91530f7->leave($__internal_4c917c3c164da3b27f185ac46d49118ae0b71968784abff03437bd48f91530f7_prof);

        
        $__internal_cea232294885a8f6ad60c1637a88bfafec06544eec514d8ef9b0ad650c61b346->leave($__internal_cea232294885a8f6ad60c1637a88bfafec06544eec514d8ef9b0ad650c61b346_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_41b221f47fed1bb2e1603fd4b4d5185a9a986eab4d46cc7479be4dcf23c10c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b221f47fed1bb2e1603fd4b4d5185a9a986eab4d46cc7479be4dcf23c10c89->enter($__internal_41b221f47fed1bb2e1603fd4b4d5185a9a986eab4d46cc7479be4dcf23c10c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89d6c1aff2aceb8d60a1011c9cf232efa0da5a271757c1cf10e2bb224a1dd293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d6c1aff2aceb8d60a1011c9cf232efa0da5a271757c1cf10e2bb224a1dd293->enter($__internal_89d6c1aff2aceb8d60a1011c9cf232efa0da5a271757c1cf10e2bb224a1dd293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_89d6c1aff2aceb8d60a1011c9cf232efa0da5a271757c1cf10e2bb224a1dd293->leave($__internal_89d6c1aff2aceb8d60a1011c9cf232efa0da5a271757c1cf10e2bb224a1dd293_prof);

        
        $__internal_41b221f47fed1bb2e1603fd4b4d5185a9a986eab4d46cc7479be4dcf23c10c89->leave($__internal_41b221f47fed1bb2e1603fd4b4d5185a9a986eab4d46cc7479be4dcf23c10c89_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_262e8331660346a7d11034cd36e3c08248411cc489b6a8a6ec01ebda4f812246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262e8331660346a7d11034cd36e3c08248411cc489b6a8a6ec01ebda4f812246->enter($__internal_262e8331660346a7d11034cd36e3c08248411cc489b6a8a6ec01ebda4f812246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f341bc1b4c79dfd136748cb0037e1bc42c006d3fdf4101d080909eb812425498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f341bc1b4c79dfd136748cb0037e1bc42c006d3fdf4101d080909eb812425498->enter($__internal_f341bc1b4c79dfd136748cb0037e1bc42c006d3fdf4101d080909eb812425498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f341bc1b4c79dfd136748cb0037e1bc42c006d3fdf4101d080909eb812425498->leave($__internal_f341bc1b4c79dfd136748cb0037e1bc42c006d3fdf4101d080909eb812425498_prof);

        
        $__internal_262e8331660346a7d11034cd36e3c08248411cc489b6a8a6ec01ebda4f812246->leave($__internal_262e8331660346a7d11034cd36e3c08248411cc489b6a8a6ec01ebda4f812246_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
