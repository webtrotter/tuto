<?php

/* base.html.twig */
class __TwigTemplate_5443748eebd0aeb78275e994451ce04e6cd17d3c1d7b0614377b0e6d53523681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edce8e975c699bf1e849b92a23efd58ea98294a73d8208f540c1f439765e9645 = $this->env->getExtension("native_profiler");
        $__internal_edce8e975c699bf1e849b92a23efd58ea98294a73d8208f540c1f439765e9645->enter($__internal_edce8e975c699bf1e849b92a23efd58ea98294a73d8208f540c1f439765e9645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_edce8e975c699bf1e849b92a23efd58ea98294a73d8208f540c1f439765e9645->leave($__internal_edce8e975c699bf1e849b92a23efd58ea98294a73d8208f540c1f439765e9645_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c12f5460523e66761f75b7811f7fddb9c7a32416685e08c3f39779fe1f8a2d2f = $this->env->getExtension("native_profiler");
        $__internal_c12f5460523e66761f75b7811f7fddb9c7a32416685e08c3f39779fe1f8a2d2f->enter($__internal_c12f5460523e66761f75b7811f7fddb9c7a32416685e08c3f39779fe1f8a2d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c12f5460523e66761f75b7811f7fddb9c7a32416685e08c3f39779fe1f8a2d2f->leave($__internal_c12f5460523e66761f75b7811f7fddb9c7a32416685e08c3f39779fe1f8a2d2f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a048592291d4ff209f8d4977d69c5f10e7de318de18c0fdc2cf914eb8aed8770 = $this->env->getExtension("native_profiler");
        $__internal_a048592291d4ff209f8d4977d69c5f10e7de318de18c0fdc2cf914eb8aed8770->enter($__internal_a048592291d4ff209f8d4977d69c5f10e7de318de18c0fdc2cf914eb8aed8770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a048592291d4ff209f8d4977d69c5f10e7de318de18c0fdc2cf914eb8aed8770->leave($__internal_a048592291d4ff209f8d4977d69c5f10e7de318de18c0fdc2cf914eb8aed8770_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eccae4e7f45723ba3bad9a105ae81f40cec285675621330df5dd2b350d6e0bc1 = $this->env->getExtension("native_profiler");
        $__internal_eccae4e7f45723ba3bad9a105ae81f40cec285675621330df5dd2b350d6e0bc1->enter($__internal_eccae4e7f45723ba3bad9a105ae81f40cec285675621330df5dd2b350d6e0bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eccae4e7f45723ba3bad9a105ae81f40cec285675621330df5dd2b350d6e0bc1->leave($__internal_eccae4e7f45723ba3bad9a105ae81f40cec285675621330df5dd2b350d6e0bc1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_250572f7a1c1eab152f4304fcbbfb284e948d8fbd7e7149df43b0f3ed052876f = $this->env->getExtension("native_profiler");
        $__internal_250572f7a1c1eab152f4304fcbbfb284e948d8fbd7e7149df43b0f3ed052876f->enter($__internal_250572f7a1c1eab152f4304fcbbfb284e948d8fbd7e7149df43b0f3ed052876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_250572f7a1c1eab152f4304fcbbfb284e948d8fbd7e7149df43b0f3ed052876f->leave($__internal_250572f7a1c1eab152f4304fcbbfb284e948d8fbd7e7149df43b0f3ed052876f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
