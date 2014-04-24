<?php

/* DC3InstawallBundle:Default:about.html.twig */
class __TwigTemplate_5f05769edf9ca1f2da183eb242e453c150d71f81474c818ae06c8b7f71676298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "InstaWall";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " <div class=\"container\">
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
       \t <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">InstaWall</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">Home</a></li>
            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
          </ul>
          <ul class=\"nav navbar-nav pull-right\">
\t          <li><a href=\"/users/sign_up\">Sign Up</a></li>
\t          <li class=\"divider-vertical\"></li>
\t          <li class=\"dropdown\">
\t            <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Sign In <strong class=\"caret\"></strong></a>
\t            <div class=\"dropdown-menu\" style=\"padding: 15px; \">
\t\t             <form action=\"[YOUR ACTION]\" method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t  <input id=\"user_username\" style=\"margin-bottom: 15px;\" type=\"text\" name=\"username\" placeholder=\"username\" size=\"30\" />
\t\t\t\t\t  <input id=\"user_password\" style=\"margin-bottom: 15px;\" type=\"password\" name=\"password\" placeholder=\"password\" size=\"30\" />
\t\t\t\t\t  <input id=\"user_remember_me\" style=\"float: left; margin-right: 10px;\" type=\"checkbox\" name=\"user[remember_me]\" value=\"1\" />
\t\t\t\t\t  <label class=\"string optional\" for=\"user_remember_me\">Remember me</label>
\t\t\t\t\t 
\t\t\t\t\t  <input class=\"btn btn-primary\" style=\"clear: left; width: 100%; height: 32px; font-size: 13px;\" type=\"submit\" name=\"commit\" value=\"Sign In\" />
\t\t\t\t\t</form>
\t            </div>
\t          </li>
\t\t  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class=\"container\">
    
      <!-- Main component for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
        <h1>About</h1>
        <p>We wanted to create an entirely new experiment that harness the power of social network, and  change how people interact with it in the real world. INSTAWALL is the culmination of that idea.</p>
<p>INSTAWALL makes your events looks good IRL*, it encourage people to take pictures of them, making it fun and interactive for your guests.</p>
<p>We loved the idea that something is auto-promoted by the people living something. With the power of instagram, the pictures will share, like and coment to their friends, your event will go beyond your event.</p>
<p>So to be more simple, INSTAWALL use the API of Instagram, it’s a simple web pages that your can run in any recent browser.</p>
<p>*in real life</p>
        <p>
          <a class=\"btn btn-lg btn-primary\" href=\"../../components/#navbar\" role=\"button\">Try it now »</a>
        </p>
      </div>

    </div>
    
 </div>

    ";
    }

    public function getTemplateName()
    {
        return "DC3InstawallBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  28 => 3,  38 => 8,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  24 => 3,  87 => 25,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 18,  43 => 6,  41 => 5,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 22,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
