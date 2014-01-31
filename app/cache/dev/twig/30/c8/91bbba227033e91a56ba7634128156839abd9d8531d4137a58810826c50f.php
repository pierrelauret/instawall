<?php

/* DC3InstawallBundle:Default:index.html.twig */
class __TwigTemplate_30c891bbba227033e91a56ba7634128156839abd9d8531d4137a58810826c50f extends Twig_Template
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
        echo "    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
       \t <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">InstaWall</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("home_page");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a></li>
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
\t\t\t\t\t  <label class=\"string optional\" for=\"user_remember_me\"> Remember me</label>
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
        <h1>Navbar example</h1>
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
    ";
    }

    public function getTemplateName()
    {
        return "DC3InstawallBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  56 => 21,  49 => 17,  38 => 8,  35 => 7,  29 => 3,);
    }
}
