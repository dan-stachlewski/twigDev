<?php

/* base.html.twig */
class __TwigTemplate_7903e015754a7a75e283dc1f100ef8460d9b8a48f6f5a1412a21e5c902365181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        <div id=\"content\">
            <!-- This is called BLOCK CONTENT -->
            ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "        </div>
        <div id=\"footer\">
            <!-- This is called BLOCK CONTENT -->
            ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 21
        echo "        </div>
    </body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        echo " 
                <!-- All the code defined in person.html.twig will be displayed here -->
            ";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "                <!-- All the code defined in person.html.twig will be displayed here -->
            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  56 => 18,  48 => 12,  42 => 21,  40 => 18,  35 => 15,  33 => 12,  21 => 2,);
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
/*         <div id="content">*/
/*             <!-- This is called BLOCK CONTENT -->*/
/*             {% block content %} */
/*                 <!-- All the code defined in person.html.twig will be displayed here -->*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div id="footer">*/
/*             <!-- This is called BLOCK CONTENT -->*/
/*             {% block footer %}*/
/*                 <!-- All the code defined in person.html.twig will be displayed here -->*/
/*             {% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
