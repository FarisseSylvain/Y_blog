<?php

/* BloggerBlogBundle:Default:index.html.twig */
class __TwigTemplate_cee944d2dca00f9629a134b0ff98d0f393c7a4059b76368aff9e59cb8551dcd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffec98eea07a3c25dfb187e42fcfae14fa277f1714c5737cce15fe56665fdf6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffec98eea07a3c25dfb187e42fcfae14fa277f1714c5737cce15fe56665fdf6b->enter($__internal_ffec98eea07a3c25dfb187e42fcfae14fa277f1714c5737cce15fe56665fdf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        $__internal_bd72b5007f98814b7737097ccf1d97f3c8dc18c12e40a98fc3a8587372590379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd72b5007f98814b7737097ccf1d97f3c8dc18c12e40a98fc3a8587372590379->enter($__internal_bd72b5007f98814b7737097ccf1d97f3c8dc18c12e40a98fc3a8587372590379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
  <head>
    <title>Y_Blog</title>
  </head>
  <body>
    Hello World!
  </body>
</html>
";
        
        $__internal_ffec98eea07a3c25dfb187e42fcfae14fa277f1714c5737cce15fe56665fdf6b->leave($__internal_ffec98eea07a3c25dfb187e42fcfae14fa277f1714c5737cce15fe56665fdf6b_prof);

        
        $__internal_bd72b5007f98814b7737097ccf1d97f3c8dc18c12e40a98fc3a8587372590379->leave($__internal_bd72b5007f98814b7737097ccf1d97f3c8dc18c12e40a98fc3a8587372590379_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <head>
    <title>Y_Blog</title>
  </head>
  <body>
    Hello World!
  </body>
</html>
", "BloggerBlogBundle:Default:index.html.twig", "C:\\wamp64\\www\\Cours_B2\\Symfony\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
