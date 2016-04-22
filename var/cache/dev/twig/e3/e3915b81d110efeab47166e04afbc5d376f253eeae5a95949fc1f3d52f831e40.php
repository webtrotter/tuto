<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_93a732d993f626dacb4b541e72313b965f2c02df44fdc9a733c75108260269ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0fc4bc7a3dfb675614024f7b93098250bc830439f83e14bd653104bd278561b9 = $this->env->getExtension("native_profiler");
        $__internal_0fc4bc7a3dfb675614024f7b93098250bc830439f83e14bd653104bd278561b9->enter($__internal_0fc4bc7a3dfb675614024f7b93098250bc830439f83e14bd653104bd278561b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc4bc7a3dfb675614024f7b93098250bc830439f83e14bd653104bd278561b9->leave($__internal_0fc4bc7a3dfb675614024f7b93098250bc830439f83e14bd653104bd278561b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e401994bfb716d457e08cab0ddd19021c9e0dbc2047715b0692dbbc04cae4f07 = $this->env->getExtension("native_profiler");
        $__internal_e401994bfb716d457e08cab0ddd19021c9e0dbc2047715b0692dbbc04cae4f07->enter($__internal_e401994bfb716d457e08cab0ddd19021c9e0dbc2047715b0692dbbc04cae4f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e401994bfb716d457e08cab0ddd19021c9e0dbc2047715b0692dbbc04cae4f07->leave($__internal_e401994bfb716d457e08cab0ddd19021c9e0dbc2047715b0692dbbc04cae4f07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d559cba960f31c8f7358fba1eb5b82cea888c0ddd7a5d809cdcab749e69c2f65 = $this->env->getExtension("native_profiler");
        $__internal_d559cba960f31c8f7358fba1eb5b82cea888c0ddd7a5d809cdcab749e69c2f65->enter($__internal_d559cba960f31c8f7358fba1eb5b82cea888c0ddd7a5d809cdcab749e69c2f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d559cba960f31c8f7358fba1eb5b82cea888c0ddd7a5d809cdcab749e69c2f65->leave($__internal_d559cba960f31c8f7358fba1eb5b82cea888c0ddd7a5d809cdcab749e69c2f65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e611ca50e7520b5b1b4e40ea0e9a0f40d632b4ecb6d4eac4a433973983132c25 = $this->env->getExtension("native_profiler");
        $__internal_e611ca50e7520b5b1b4e40ea0e9a0f40d632b4ecb6d4eac4a433973983132c25->enter($__internal_e611ca50e7520b5b1b4e40ea0e9a0f40d632b4ecb6d4eac4a433973983132c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e611ca50e7520b5b1b4e40ea0e9a0f40d632b4ecb6d4eac4a433973983132c25->leave($__internal_e611ca50e7520b5b1b4e40ea0e9a0f40d632b4ecb6d4eac4a433973983132c25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
