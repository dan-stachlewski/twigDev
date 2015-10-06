<?php

/* person.html.twig */
class __TwigTemplate_b13561c11f37035919ff597eff19d1f588f98180a1f6db2f9f5c27cad994ac1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "person.html.twig", 8);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<h2>BLOCK Content</h2>
<p>My Name: <strong>";
        // line 15
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["firstName"]) ? $context["firstName"] : null)), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["lastName"]) ? $context["lastName"] : null)), "html", null, true);
        echo "</p>
<p>Address: <strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "streetAddress", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "city", array()), "html", null, true);
        echo "</strong></p>
<p>Phone Numbers:</p>
<ol>
 ";
        // line 21
        echo "   
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 23
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo " </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "No Phones have been found!
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ol>
";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "<h2>BLOCK Footer</h2>
<p>My Name: <strong>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["firstName"]) ? $context["firstName"] : null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["lastName"]) ? $context["lastName"] : null)), "html", null, true);
        echo "</p>
<p>Address: <strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "streetAddress", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "city", array()), "html", null, true);
        echo "</strong></p>
<p>Phone Numbers:</p>
<ol>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 41
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo " </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "Add the dates for change of years
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  114 => 43,  104 => 41,  99 => 40,  91 => 37,  85 => 36,  82 => 35,  79 => 33,  74 => 27,  67 => 25,  57 => 23,  52 => 22,  49 => 21,  41 => 16,  35 => 15,  32 => 14,  29 => 12,  11 => 8,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {#*/
/* The line below uses the html code and */
/*  block content and places the below code */
/*  within the 'id' i.e; content or footer*/
/* #}*/
/* {% extends "base.html.twig" %}*/
/* {#*/
/* Run the Block named Content*/
/* #}*/
/* {% block content %}*/
/* {#created new template as below:#}*/
/* <h2>BLOCK Content</h2>*/
/* <p>My Name: <strong>{{ firstName|lower }}, {{ lastName|upper }}</p>*/
/* <p>Address: <strong>{{ address.streetAddress }}, {{ address.city }}</strong></p>*/
/* <p>Phone Numbers:</p>*/
/* <ol>*/
/*  {#*/
/* Example of a foreach stmnt using Twig Syntax*/
/* #}   */
/* {% for phone in phoneNumbers %}*/
/* <li> {{ phone.type }}: {{ phone.number }} </li>*/
/* {% else %}*/
/* No Phones have been found!*/
/* {% endfor %}*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {#*/
/* Run the Block named Footer*/
/* #}*/
/* {% block footer %}*/
/* {#created new template as below:#}*/
/* <h2>BLOCK Footer</h2>*/
/* <p>My Name: <strong>{{ firstName }}, {{ lastName|upper }}</p>*/
/* <p>Address: <strong>{{ address.streetAddress }}, {{ address.city }}</strong></p>*/
/* <p>Phone Numbers:</p>*/
/* <ol>*/
/* {% for phone in phoneNumbers %}*/
/* <li> {{ phone.type }}: {{ phone.number }} </li>*/
/* {% else %}*/
/* Add the dates for change of years*/
/* {% endfor %}*/
/* </ol>*/
/* {% endblock %}*/
