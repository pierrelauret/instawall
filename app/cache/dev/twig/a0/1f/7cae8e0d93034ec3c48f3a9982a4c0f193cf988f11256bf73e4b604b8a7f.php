<?php

/* ::base.html.twig */
class __TwigTemplate_a01f7cae8e0d93034ec3c48f3a9982a4c0f193cf988f11256bf73e4b604b8a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'maps' => array($this, 'block_maps'),
            'body' => array($this, 'block_body'),
            'photostack' => array($this, 'block_photostack'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
\t\t<![endif]-->
\t\t";
        // line 23
        $this->displayBlock('maps', $context, $blocks);
        // line 24
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "264d38f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_264d38f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/264d38f_modernizr.min_1.js");
            // line 29
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "264d38f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_264d38f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/264d38f_classie_2.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "264d38f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_264d38f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/264d38f_photostack_3.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "264d38f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_264d38f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/264d38f_maps_4.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "264d38f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_264d38f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/264d38f.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 30
        echo "\t
    </head>
    <body style screen_capture_injected=\"true\">
\t   
\t\t    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "     
        <script src=\"https://code.jquery.com/jquery.js\"></script>
        ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "47493b0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_47493b0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/47493b0_main_1.js");
            // line 42
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "47493b0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_47493b0_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/47493b0_bootstrap_2.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "47493b0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_47493b0_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/47493b0_script_3.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "47493b0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_47493b0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/47493b0.js");
            echo "\t\t    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 44
        echo "\t\t";
        $this->displayBlock('photostack', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "InstaWall";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ed2d014_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ed2d014_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ed2d014_bootstrap_1.css");
            // line 13
            echo "\t            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
\t        ";
        } else {
            // asset "ed2d014"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ed2d014") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ed2d014.css");
            echo "\t            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
\t        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        ";
    }

    // line 23
    public function block_maps($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 44
    public function block_photostack($context, array $blocks = array())
    {
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
        return array (  181 => 44,  176 => 34,  171 => 23,  167 => 15,  153 => 13,  148 => 9,  145 => 8,  139 => 5,  133 => 45,  130 => 44,  104 => 42,  100 => 37,  96 => 35,  94 => 34,  88 => 30,  56 => 29,  51 => 24,  49 => 23,  38 => 16,  36 => 8,  24 => 1,  236 => 122,  196 => 84,  193 => 83,  186 => 78,  172 => 74,  165 => 72,  162 => 71,  158 => 70,  152 => 67,  144 => 62,  137 => 58,  129 => 53,  119 => 46,  112 => 42,  105 => 38,  98 => 34,  91 => 30,  84 => 26,  77 => 22,  68 => 15,  65 => 14,  37 => 10,  33 => 4,  30 => 5,);
    }
}
