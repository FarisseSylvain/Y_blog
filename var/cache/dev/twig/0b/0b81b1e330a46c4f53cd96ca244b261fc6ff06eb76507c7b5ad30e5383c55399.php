<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68c5c78ad60c08541645ec619fc8cd369147d0e133f040165ebc096b12d31ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c5c78ad60c08541645ec619fc8cd369147d0e133f040165ebc096b12d31ce8->enter($__internal_68c5c78ad60c08541645ec619fc8cd369147d0e133f040165ebc096b12d31ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d33e3b5fbe87dab2653c59736d7e3b5adea83dc4b3eb43e74a7c0170b62d6138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33e3b5fbe87dab2653c59736d7e3b5adea83dc4b3eb43e74a7c0170b62d6138->enter($__internal_d33e3b5fbe87dab2653c59736d7e3b5adea83dc4b3eb43e74a7c0170b62d6138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - ynovblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
        
        $__internal_68c5c78ad60c08541645ec619fc8cd369147d0e133f040165ebc096b12d31ce8->leave($__internal_68c5c78ad60c08541645ec619fc8cd369147d0e133f040165ebc096b12d31ce8_prof);

        
        $__internal_d33e3b5fbe87dab2653c59736d7e3b5adea83dc4b3eb43e74a7c0170b62d6138->leave($__internal_d33e3b5fbe87dab2653c59736d7e3b5adea83dc4b3eb43e74a7c0170b62d6138_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b689369684b5a2dae1af877a16abef1747af472b9799de8c4ca709b186d6a889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b689369684b5a2dae1af877a16abef1747af472b9799de8c4ca709b186d6a889->enter($__internal_b689369684b5a2dae1af877a16abef1747af472b9799de8c4ca709b186d6a889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8482d8e4ba1df3b9b258f880cd4646bd53d8d58ad46c0efd4e85957d7c8db827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8482d8e4ba1df3b9b258f880cd4646bd53d8d58ad46c0efd4e85957d7c8db827->enter($__internal_8482d8e4ba1df3b9b258f880cd4646bd53d8d58ad46c0efd4e85957d7c8db827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ynovblog";
        
        $__internal_8482d8e4ba1df3b9b258f880cd4646bd53d8d58ad46c0efd4e85957d7c8db827->leave($__internal_8482d8e4ba1df3b9b258f880cd4646bd53d8d58ad46c0efd4e85957d7c8db827_prof);

        
        $__internal_b689369684b5a2dae1af877a16abef1747af472b9799de8c4ca709b186d6a889->leave($__internal_b689369684b5a2dae1af877a16abef1747af472b9799de8c4ca709b186d6a889_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_783ffda4276ce0a7a3b3a51a1d6aab112d6b6fc883ba71ce44faf3125cbf9d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783ffda4276ce0a7a3b3a51a1d6aab112d6b6fc883ba71ce44faf3125cbf9d6b->enter($__internal_783ffda4276ce0a7a3b3a51a1d6aab112d6b6fc883ba71ce44faf3125cbf9d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b92bb816658918067bc2b009a23e74b137c257c68cfae40454724619eac09e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b92bb816658918067bc2b009a23e74b137c257c68cfae40454724619eac09e4->enter($__internal_3b92bb816658918067bc2b009a23e74b137c257c68cfae40454724619eac09e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3b92bb816658918067bc2b009a23e74b137c257c68cfae40454724619eac09e4->leave($__internal_3b92bb816658918067bc2b009a23e74b137c257c68cfae40454724619eac09e4_prof);

        
        $__internal_783ffda4276ce0a7a3b3a51a1d6aab112d6b6fc883ba71ce44faf3125cbf9d6b->leave($__internal_783ffda4276ce0a7a3b3a51a1d6aab112d6b6fc883ba71ce44faf3125cbf9d6b_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b16477e3c8551dea4357563d2cd3194f52f69707bae010d0d53bc5b81e40f168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16477e3c8551dea4357563d2cd3194f52f69707bae010d0d53bc5b81e40f168->enter($__internal_b16477e3c8551dea4357563d2cd3194f52f69707bae010d0d53bc5b81e40f168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_d2898d752d937543d22eae7638dada6a35a3d3217e31c092f5cc63f7e6fac077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2898d752d937543d22eae7638dada6a35a3d3217e31c092f5cc63f7e6fac077->enter($__internal_d2898d752d937543d22eae7638dada6a35a3d3217e31c092f5cc63f7e6fac077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_d2898d752d937543d22eae7638dada6a35a3d3217e31c092f5cc63f7e6fac077->leave($__internal_d2898d752d937543d22eae7638dada6a35a3d3217e31c092f5cc63f7e6fac077_prof);

        
        $__internal_b16477e3c8551dea4357563d2cd3194f52f69707bae010d0d53bc5b81e40f168->leave($__internal_b16477e3c8551dea4357563d2cd3194f52f69707bae010d0d53bc5b81e40f168_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_694ad259021c177dd0a0595a7e556843d0f84508e874e87f361f92f095037cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694ad259021c177dd0a0595a7e556843d0f84508e874e87f361f92f095037cb4->enter($__internal_694ad259021c177dd0a0595a7e556843d0f84508e874e87f361f92f095037cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_85dd345b9260b46bbdf863be6dbba5a0c76847a30f3e5831f94edccd37fc7560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dd345b9260b46bbdf863be6dbba5a0c76847a30f3e5831f94edccd37fc7560->enter($__internal_85dd345b9260b46bbdf863be6dbba5a0c76847a30f3e5831f94edccd37fc7560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">ynovblog</a>";
        
        $__internal_85dd345b9260b46bbdf863be6dbba5a0c76847a30f3e5831f94edccd37fc7560->leave($__internal_85dd345b9260b46bbdf863be6dbba5a0c76847a30f3e5831f94edccd37fc7560_prof);

        
        $__internal_694ad259021c177dd0a0595a7e556843d0f84508e874e87f361f92f095037cb4->leave($__internal_694ad259021c177dd0a0595a7e556843d0f84508e874e87f361f92f095037cb4_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_be08bb72f343cd5c23fa8dfbd216be4b593ffa8ea611e92408822bb3e807f119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be08bb72f343cd5c23fa8dfbd216be4b593ffa8ea611e92408822bb3e807f119->enter($__internal_be08bb72f343cd5c23fa8dfbd216be4b593ffa8ea611e92408822bb3e807f119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_f5e42367d6aeac0789432fbc742cf92add1663c7aac9b2c9dc96ee16fb08e546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e42367d6aeac0789432fbc742cf92add1663c7aac9b2c9dc96ee16fb08e546->enter($__internal_f5e42367d6aeac0789432fbc742cf92add1663c7aac9b2c9dc96ee16fb08e546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">creating a blog in Symfony</a>";
        
        $__internal_f5e42367d6aeac0789432fbc742cf92add1663c7aac9b2c9dc96ee16fb08e546->leave($__internal_f5e42367d6aeac0789432fbc742cf92add1663c7aac9b2c9dc96ee16fb08e546_prof);

        
        $__internal_be08bb72f343cd5c23fa8dfbd216be4b593ffa8ea611e92408822bb3e807f119->leave($__internal_be08bb72f343cd5c23fa8dfbd216be4b593ffa8ea611e92408822bb3e807f119_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c133f9499ed8e7637a5c2fed6ee23dc72aeac7ce0a016c4039f198823590eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c133f9499ed8e7637a5c2fed6ee23dc72aeac7ce0a016c4039f198823590eb6->enter($__internal_2c133f9499ed8e7637a5c2fed6ee23dc72aeac7ce0a016c4039f198823590eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_171a9c6545ad57c9aa72dce85e2fb8285f0405d6813366a1cd24ee14e82e12d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171a9c6545ad57c9aa72dce85e2fb8285f0405d6813366a1cd24ee14e82e12d6->enter($__internal_171a9c6545ad57c9aa72dce85e2fb8285f0405d6813366a1cd24ee14e82e12d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_171a9c6545ad57c9aa72dce85e2fb8285f0405d6813366a1cd24ee14e82e12d6->leave($__internal_171a9c6545ad57c9aa72dce85e2fb8285f0405d6813366a1cd24ee14e82e12d6_prof);

        
        $__internal_2c133f9499ed8e7637a5c2fed6ee23dc72aeac7ce0a016c4039f198823590eb6->leave($__internal_2c133f9499ed8e7637a5c2fed6ee23dc72aeac7ce0a016c4039f198823590eb6_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_73fb54e8d4dc4bb6a5a713914597975a2a78ec04c4df91a4c798bc8a16a1a43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fb54e8d4dc4bb6a5a713914597975a2a78ec04c4df91a4c798bc8a16a1a43c->enter($__internal_73fb54e8d4dc4bb6a5a713914597975a2a78ec04c4df91a4c798bc8a16a1a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_2087b8bab13e6860aaa2a8451a5e19453d13442c24ae1c3ed3cd34b0fa5cbe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2087b8bab13e6860aaa2a8451a5e19453d13442c24ae1c3ed3cd34b0fa5cbe9e->enter($__internal_2087b8bab13e6860aaa2a8451a5e19453d13442c24ae1c3ed3cd34b0fa5cbe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2087b8bab13e6860aaa2a8451a5e19453d13442c24ae1c3ed3cd34b0fa5cbe9e->leave($__internal_2087b8bab13e6860aaa2a8451a5e19453d13442c24ae1c3ed3cd34b0fa5cbe9e_prof);

        
        $__internal_73fb54e8d4dc4bb6a5a713914597975a2a78ec04c4df91a4c798bc8a16a1a43c->leave($__internal_73fb54e8d4dc4bb6a5a713914597975a2a78ec04c4df91a4c798bc8a16a1a43c_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f396dec1850327074cff712899f804fa665d4accf86c26575db37578138640e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f396dec1850327074cff712899f804fa665d4accf86c26575db37578138640e5->enter($__internal_f396dec1850327074cff712899f804fa665d4accf86c26575db37578138640e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b7c10499ef60451906139be1189ae8e707235cd71d1db770c743b5c33ee7d36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c10499ef60451906139be1189ae8e707235cd71d1db770c743b5c33ee7d36a->enter($__internal_b7c10499ef60451906139be1189ae8e707235cd71d1db770c743b5c33ee7d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony blog - created by <a href=\"http://www.ynov.com\">ynov</a>
                ";
        
        $__internal_b7c10499ef60451906139be1189ae8e707235cd71d1db770c743b5c33ee7d36a->leave($__internal_b7c10499ef60451906139be1189ae8e707235cd71d1db770c743b5c33ee7d36a_prof);

        
        $__internal_f396dec1850327074cff712899f804fa665d4accf86c26575db37578138640e5->leave($__internal_f396dec1850327074cff712899f804fa665d4accf86c26575db37578138640e5_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7e06428a88fa47acf00255d0a906b531267f5eae7eefdd67091e925503bbb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e06428a88fa47acf00255d0a906b531267f5eae7eefdd67091e925503bbb43->enter($__internal_e7e06428a88fa47acf00255d0a906b531267f5eae7eefdd67091e925503bbb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d0022470afbb06257cd0832889b95ed8d8095c29776b06a5d773658f60814956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0022470afbb06257cd0832889b95ed8d8095c29776b06a5d773658f60814956->enter($__internal_d0022470afbb06257cd0832889b95ed8d8095c29776b06a5d773658f60814956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d0022470afbb06257cd0832889b95ed8d8095c29776b06a5d773658f60814956->leave($__internal_d0022470afbb06257cd0832889b95ed8d8095c29776b06a5d773658f60814956_prof);

        
        $__internal_e7e06428a88fa47acf00255d0a906b531267f5eae7eefdd67091e925503bbb43->leave($__internal_e7e06428a88fa47acf00255d0a906b531267f5eae7eefdd67091e925503bbb43_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 53,  275 => 48,  266 => 47,  249 => 43,  232 => 40,  212 => 35,  192 => 34,  178 => 27,  174 => 26,  170 => 25,  166 => 23,  157 => 22,  145 => 13,  141 => 11,  132 => 10,  114 => 6,  102 => 54,  100 => 53,  95 => 50,  93 => 47,  88 => 44,  86 => 43,  82 => 41,  80 => 40,  72 => 35,  68 => 34,  63 => 31,  61 => 22,  50 => 15,  48 => 10,  41 => 6,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>{% block title %}ynovblog{% endblock %} - ynovblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"{{ path('blogger_blog_homepage') }}\">Home</a></li>
                                <li><a href=\"{{ path('blogger_blog_about') }}\">About</a></li>
                                <li><a href=\"{{ path('blogger_blog_contact') }}\">Contact</a></li>
                            </ul>
                        </nav>
                    {% endblock %}
                </div>

                <hgroup>
                    <h2>{% block blog_title %}<a href=\"{{ path('blogger_blog_homepage') }}\">ynovblog</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"{{ path('blogger_blog_homepage') }}\">creating a blog in Symfony</a>{% endblock %}</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}
                    Symfony blog - created by <a href=\"http://www.ynov.com\">ynov</a>
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\app/Resources\\views/base.html.twig");
    }
}
