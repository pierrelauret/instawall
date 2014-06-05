<?php

/* DC3InstawallBundle:Event:new.html.twig */
class __TwigTemplate_aee77cd0e24f603656a6972a29b7835e78f56279d230fff1dfc7441d5b66dfd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'maps' => array($this, 'block_maps'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_maps($context, array $blocks = array())
    {
        // line 3
        echo "<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places\"></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<h1>Event creation</h1>
    <input id=\"pac-input\" class=\"controls\" type=\"text\"
        placeholder=\"Enter a location\">
    <div id=\"type-selector\" class=\"controls\">
      <input type=\"radio\" name=\"type\" id=\"changetype-all\" checked=\"checked\">
      <label for=\"changetype-all\">All</label>

      <input type=\"radio\" name=\"type\" id=\"changetype-establishment\">
      <label for=\"changetype-establishment\">Establishments</label>

      <input type=\"radio\" name=\"type\" id=\"changetype-geocode\">
      <label for=\"changetype-geocode\">Geocodes</label>
    </div>
    <div id=\"map-canvas\"></div>

    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("event");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "DC3InstawallBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  57 => 24,  40 => 9,  37 => 8,  32 => 3,  29 => 2,);
    }
}
