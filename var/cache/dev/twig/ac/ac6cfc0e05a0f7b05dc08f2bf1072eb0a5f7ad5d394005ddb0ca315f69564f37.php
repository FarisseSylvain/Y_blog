<?php

/* ::base.html.twig */
class __TwigTemplate_7639c67a3a35faf6d191281d20ec396a8ad2ad907a3896b0e29f278f2afa0a76 extends Twig_Template
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
        $__internal_d2a14e99c4030b42f904e745168e29c460edd49a6e4b1591781aaa0a5ac34fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a14e99c4030b42f904e745168e29c460edd49a6e4b1591781aaa0a5ac34fd8->enter($__internal_d2a14e99c4030b42f904e745168e29c460edd49a6e4b1591781aaa0a5ac34fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a515741106fca3b36d28de6038a7127de1137131f2d86d144c2db030dc2f88fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a515741106fca3b36d28de6038a7127de1137131f2d86d144c2db030dc2f88fe->enter($__internal_a515741106fca3b36d28de6038a7127de1137131f2d86d144c2db030dc2f88fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d2a14e99c4030b42f904e745168e29c460edd49a6e4b1591781aaa0a5ac34fd8->leave($__internal_d2a14e99c4030b42f904e745168e29c460edd49a6e4b1591781aaa0a5ac34fd8_prof);

        
        $__internal_a515741106fca3b36d28de6038a7127de1137131f2d86d144c2db030dc2f88fe->leave($__internal_a515741106fca3b36d28de6038a7127de1137131f2d86d144c2db030dc2f88fe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4e834956089ab8619906a4a5397a9b08f12766f0ac7824ee10a60c48144aa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e834956089ab8619906a4a5397a9b08f12766f0ac7824ee10a60c48144aa2d->enter($__internal_f4e834956089ab8619906a4a5397a9b08f12766f0ac7824ee10a60c48144aa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da72819a1707f971840929271b52449259fdcd0ac7acf51cd7ccf30fc8448346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da72819a1707f971840929271b52449259fdcd0ac7acf51cd7ccf30fc8448346->enter($__internal_da72819a1707f971840929271b52449259fdcd0ac7acf51cd7ccf30fc8448346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ynovblog";
        
        $__internal_da72819a1707f971840929271b52449259fdcd0ac7acf51cd7ccf30fc8448346->leave($__internal_da72819a1707f971840929271b52449259fdcd0ac7acf51cd7ccf30fc8448346_prof);

        
        $__internal_f4e834956089ab8619906a4a5397a9b08f12766f0ac7824ee10a60c48144aa2d->leave($__internal_f4e834956089ab8619906a4a5397a9b08f12766f0ac7824ee10a60c48144aa2d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8def06c047c364fe13cb70cb48258dff909669cb7ba8121231eb360a7c89bade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8def06c047c364fe13cb70cb48258dff909669cb7ba8121231eb360a7c89bade->enter($__internal_8def06c047c364fe13cb70cb48258dff909669cb7ba8121231eb360a7c89bade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8e8098d84aaa2a0fc893c71ece8448f8d211f35e3149b1edfcd212f9c84e1a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8098d84aaa2a0fc893c71ece8448f8d211f35e3149b1edfcd212f9c84e1a5f->enter($__internal_8e8098d84aaa2a0fc893c71ece8448f8d211f35e3149b1edfcd212f9c84e1a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_8e8098d84aaa2a0fc893c71ece8448f8d211f35e3149b1edfcd212f9c84e1a5f->leave($__internal_8e8098d84aaa2a0fc893c71ece8448f8d211f35e3149b1edfcd212f9c84e1a5f_prof);

        
        $__internal_8def06c047c364fe13cb70cb48258dff909669cb7ba8121231eb360a7c89bade->leave($__internal_8def06c047c364fe13cb70cb48258dff909669cb7ba8121231eb360a7c89bade_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4bfdf5b6cc451edeef9a97615f87c3e4de5ca1d8b82a11f092b6f27f44676259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfdf5b6cc451edeef9a97615f87c3e4de5ca1d8b82a11f092b6f27f44676259->enter($__internal_4bfdf5b6cc451edeef9a97615f87c3e4de5ca1d8b82a11f092b6f27f44676259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_bead286c4d50b24a1b5d065ef19d9062b838d3aca9a14dceb2eee25eabe05387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bead286c4d50b24a1b5d065ef19d9062b838d3aca9a14dceb2eee25eabe05387->enter($__internal_bead286c4d50b24a1b5d065ef19d9062b838d3aca9a14dceb2eee25eabe05387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_bead286c4d50b24a1b5d065ef19d9062b838d3aca9a14dceb2eee25eabe05387->leave($__internal_bead286c4d50b24a1b5d065ef19d9062b838d3aca9a14dceb2eee25eabe05387_prof);

        
        $__internal_4bfdf5b6cc451edeef9a97615f87c3e4de5ca1d8b82a11f092b6f27f44676259->leave($__internal_4bfdf5b6cc451edeef9a97615f87c3e4de5ca1d8b82a11f092b6f27f44676259_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_84a7bcf2e5b91f1f22a231efc4fffeefc3726fa8ccca95ce6c13580c45bd055f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a7bcf2e5b91f1f22a231efc4fffeefc3726fa8ccca95ce6c13580c45bd055f->enter($__internal_84a7bcf2e5b91f1f22a231efc4fffeefc3726fa8ccca95ce6c13580c45bd055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_7baaf929bf5c1489f59fbcb13a86489983afa91aa2fea4616154aacaba6e841e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baaf929bf5c1489f59fbcb13a86489983afa91aa2fea4616154aacaba6e841e->enter($__internal_7baaf929bf5c1489f59fbcb13a86489983afa91aa2fea4616154aacaba6e841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">ynovblog</a>";
        
        $__internal_7baaf929bf5c1489f59fbcb13a86489983afa91aa2fea4616154aacaba6e841e->leave($__internal_7baaf929bf5c1489f59fbcb13a86489983afa91aa2fea4616154aacaba6e841e_prof);

        
        $__internal_84a7bcf2e5b91f1f22a231efc4fffeefc3726fa8ccca95ce6c13580c45bd055f->leave($__internal_84a7bcf2e5b91f1f22a231efc4fffeefc3726fa8ccca95ce6c13580c45bd055f_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_97b1966ef751f9dde1a95bd4833daa2a1cfd7bd676d941bdd2266d13ba97bdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b1966ef751f9dde1a95bd4833daa2a1cfd7bd676d941bdd2266d13ba97bdf6->enter($__internal_97b1966ef751f9dde1a95bd4833daa2a1cfd7bd676d941bdd2266d13ba97bdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_b24f8bbe31affa7edb3f4c47ae7f1c42d64bbddd3e77205afd7bdda31fcf0dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24f8bbe31affa7edb3f4c47ae7f1c42d64bbddd3e77205afd7bdda31fcf0dff->enter($__internal_b24f8bbe31affa7edb3f4c47ae7f1c42d64bbddd3e77205afd7bdda31fcf0dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">creating a blog in Symfony</a>";
        
        $__internal_b24f8bbe31affa7edb3f4c47ae7f1c42d64bbddd3e77205afd7bdda31fcf0dff->leave($__internal_b24f8bbe31affa7edb3f4c47ae7f1c42d64bbddd3e77205afd7bdda31fcf0dff_prof);

        
        $__internal_97b1966ef751f9dde1a95bd4833daa2a1cfd7bd676d941bdd2266d13ba97bdf6->leave($__internal_97b1966ef751f9dde1a95bd4833daa2a1cfd7bd676d941bdd2266d13ba97bdf6_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f1dd27ac788dbabf038eeaeddb7ae91833748d4e2d6f46f9bb56640095ed95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f1dd27ac788dbabf038eeaeddb7ae91833748d4e2d6f46f9bb56640095ed95->enter($__internal_d2f1dd27ac788dbabf038eeaeddb7ae91833748d4e2d6f46f9bb56640095ed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56134e5b436d256008ef52da70d9ed681e71ac26a37846f0c802fe95ec60cc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56134e5b436d256008ef52da70d9ed681e71ac26a37846f0c802fe95ec60cc88->enter($__internal_56134e5b436d256008ef52da70d9ed681e71ac26a37846f0c802fe95ec60cc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56134e5b436d256008ef52da70d9ed681e71ac26a37846f0c802fe95ec60cc88->leave($__internal_56134e5b436d256008ef52da70d9ed681e71ac26a37846f0c802fe95ec60cc88_prof);

        
        $__internal_d2f1dd27ac788dbabf038eeaeddb7ae91833748d4e2d6f46f9bb56640095ed95->leave($__internal_d2f1dd27ac788dbabf038eeaeddb7ae91833748d4e2d6f46f9bb56640095ed95_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6d5e2fdcb0c0b4b68eed1b50cf6b8ea43136c38f57ffb6e61cca3ef8954e0939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5e2fdcb0c0b4b68eed1b50cf6b8ea43136c38f57ffb6e61cca3ef8954e0939->enter($__internal_6d5e2fdcb0c0b4b68eed1b50cf6b8ea43136c38f57ffb6e61cca3ef8954e0939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_2365e2f6074bad1231129751233f5ff1b60c4a600f3b6337d3fbf531a5af1c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2365e2f6074bad1231129751233f5ff1b60c4a600f3b6337d3fbf531a5af1c5a->enter($__internal_2365e2f6074bad1231129751233f5ff1b60c4a600f3b6337d3fbf531a5af1c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2365e2f6074bad1231129751233f5ff1b60c4a600f3b6337d3fbf531a5af1c5a->leave($__internal_2365e2f6074bad1231129751233f5ff1b60c4a600f3b6337d3fbf531a5af1c5a_prof);

        
        $__internal_6d5e2fdcb0c0b4b68eed1b50cf6b8ea43136c38f57ffb6e61cca3ef8954e0939->leave($__internal_6d5e2fdcb0c0b4b68eed1b50cf6b8ea43136c38f57ffb6e61cca3ef8954e0939_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c20d77524754823a9d2cf1ee8dbe3f15c5f50d020579fcf79a3d9541a7a9b755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20d77524754823a9d2cf1ee8dbe3f15c5f50d020579fcf79a3d9541a7a9b755->enter($__internal_c20d77524754823a9d2cf1ee8dbe3f15c5f50d020579fcf79a3d9541a7a9b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_065fbe21a9092a3730b59d6f164ae66db21136c1ef9039d32015b9de2dfcd310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065fbe21a9092a3730b59d6f164ae66db21136c1ef9039d32015b9de2dfcd310->enter($__internal_065fbe21a9092a3730b59d6f164ae66db21136c1ef9039d32015b9de2dfcd310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony blog - created by <a href=\"http://www.ynov.com\">ynov</a>
                ";
        
        $__internal_065fbe21a9092a3730b59d6f164ae66db21136c1ef9039d32015b9de2dfcd310->leave($__internal_065fbe21a9092a3730b59d6f164ae66db21136c1ef9039d32015b9de2dfcd310_prof);

        
        $__internal_c20d77524754823a9d2cf1ee8dbe3f15c5f50d020579fcf79a3d9541a7a9b755->leave($__internal_c20d77524754823a9d2cf1ee8dbe3f15c5f50d020579fcf79a3d9541a7a9b755_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c28f9b7561ef51e12751d6407a6047d648dcfd4ae3885e12e6d356323c258a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c28f9b7561ef51e12751d6407a6047d648dcfd4ae3885e12e6d356323c258a5->enter($__internal_4c28f9b7561ef51e12751d6407a6047d648dcfd4ae3885e12e6d356323c258a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c0f16ec9a99d69e391c953d46d66a04a2043012e5c634ec7147a40e7ef9dda08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f16ec9a99d69e391c953d46d66a04a2043012e5c634ec7147a40e7ef9dda08->enter($__internal_c0f16ec9a99d69e391c953d46d66a04a2043012e5c634ec7147a40e7ef9dda08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0f16ec9a99d69e391c953d46d66a04a2043012e5c634ec7147a40e7ef9dda08->leave($__internal_c0f16ec9a99d69e391c953d46d66a04a2043012e5c634ec7147a40e7ef9dda08_prof);

        
        $__internal_4c28f9b7561ef51e12751d6407a6047d648dcfd4ae3885e12e6d356323c258a5->leave($__internal_4c28f9b7561ef51e12751d6407a6047d648dcfd4ae3885e12e6d356323c258a5_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\app/Resources\\views/base.html.twig");
    }
}
