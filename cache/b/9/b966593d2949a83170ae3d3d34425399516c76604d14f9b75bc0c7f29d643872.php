<?php

/* index.html.twig */
class __TwigTemplate_3961d30b84d0877769c0d9c63630d76ea996fd983cfae8bb978f596e4a4ff054 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Its all about TWIG!</title>
    </head>
    <body>
        <h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["heading"]) ? $context["heading"] : null), "html", null, true);
        echo "</h1>
        <p>Welcome ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!</p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  29 => 10,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>Its all about TWIG!</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>{{ heading }}</h1>*/
/*         <p>Welcome {{ name }}!</p>*/
/*     </body>*/
/* </html>*/
