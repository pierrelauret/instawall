<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_209a9f1ec51167b50bd78f768c6418a825540d9818121391b813c99fdb7f420f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  90 => 31,  76 => 28,  113 => 54,  81 => 34,  58 => 24,  118 => 46,  53 => 18,  236 => 121,  186 => 77,  172 => 73,  165 => 71,  152 => 66,  137 => 57,  129 => 52,  84 => 30,  77 => 27,  65 => 13,  181 => 44,  167 => 14,  153 => 12,  148 => 9,  104 => 42,  100 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 39,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 45,  102 => 32,  71 => 24,  67 => 26,  63 => 25,  59 => 14,  28 => 3,  38 => 8,  26 => 9,  201 => 92,  196 => 83,  183 => 82,  171 => 22,  166 => 71,  163 => 62,  158 => 69,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 29,  62 => 20,  49 => 14,  94 => 32,  89 => 33,  85 => 25,  75 => 17,  68 => 26,  56 => 22,  24 => 1,  87 => 25,  31 => 3,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 38,  78 => 34,  46 => 14,  44 => 12,  27 => 4,  79 => 18,  72 => 27,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 8,  139 => 5,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 41,  108 => 36,  101 => 36,  98 => 45,  96 => 38,  83 => 25,  74 => 30,  66 => 24,  55 => 23,  52 => 18,  50 => 18,  43 => 6,  41 => 5,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 82,  189 => 71,  187 => 84,  182 => 66,  176 => 34,  173 => 65,  168 => 72,  164 => 59,  162 => 70,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 45,  130 => 44,  125 => 44,  122 => 43,  116 => 41,  112 => 41,  109 => 34,  106 => 50,  103 => 32,  99 => 35,  95 => 28,  92 => 21,  86 => 28,  82 => 27,  80 => 29,  73 => 19,  64 => 25,  60 => 22,  57 => 24,  54 => 10,  51 => 22,  48 => 13,  45 => 16,  42 => 10,  39 => 10,  36 => 8,  33 => 4,  30 => 3,);
    }
}
