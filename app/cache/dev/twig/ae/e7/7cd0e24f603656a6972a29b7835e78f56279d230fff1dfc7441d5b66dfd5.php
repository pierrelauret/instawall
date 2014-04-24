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
        return array (  118 => 46,  53 => 21,  236 => 122,  186 => 78,  172 => 74,  165 => 72,  152 => 67,  137 => 58,  129 => 53,  84 => 26,  77 => 22,  65 => 14,  181 => 44,  167 => 15,  153 => 13,  148 => 9,  104 => 42,  100 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 46,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  28 => 3,  38 => 8,  26 => 6,  201 => 92,  196 => 84,  183 => 82,  171 => 23,  166 => 71,  163 => 62,  158 => 70,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 38,  91 => 30,  62 => 23,  49 => 20,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 15,  56 => 22,  24 => 1,  87 => 25,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 30,  78 => 26,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 25,  69 => 25,  47 => 9,  40 => 9,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 8,  139 => 5,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 32,  98 => 34,  96 => 35,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 18,  43 => 6,  41 => 5,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 83,  189 => 71,  187 => 84,  182 => 66,  176 => 34,  173 => 65,  168 => 72,  164 => 59,  162 => 71,  154 => 58,  149 => 51,  147 => 58,  144 => 62,  141 => 48,  133 => 45,  130 => 44,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 35,  95 => 28,  92 => 21,  86 => 28,  82 => 27,  80 => 19,  73 => 19,  64 => 28,  60 => 6,  57 => 24,  54 => 10,  51 => 24,  48 => 13,  45 => 17,  42 => 10,  39 => 9,  36 => 8,  33 => 4,  30 => 3,);
    }
}
