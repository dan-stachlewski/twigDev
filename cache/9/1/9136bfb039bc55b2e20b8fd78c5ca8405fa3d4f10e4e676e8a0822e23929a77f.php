<?php

/* person.html.twig */
class __TwigTemplate_b13561c11f37035919ff597eff19d1f588f98180a1f6db2f9f5c27cad994ac1e extends Twig_Template
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
        // line 3
        echo "<p>My Name: <strong>";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) ? $context["firstName"] : null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["lastName"]) ? $context["lastName"] : null)), "html", null, true);
        echo "</p>
<p>Address: <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "streetAddress", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "city", array()), "html", null, true);
        echo "</strong></p>
<p>Phone Numbers:</p>
<ol>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phoneNumbers"]) ? $context["phoneNumbers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 8
            echo "<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "type", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo " </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "No Phones have been found!
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ol>";
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
        return array (  56 => 12,  49 => 10,  39 => 8,  34 => 7,  26 => 4,  19 => 3,);
    }
}
/* {# Twig Template from the JSON Wiki Example #}*/
/* {# https://en.wikipedia.org/wiki/JSON #}*/
/* <p>My Name: <strong>{{ firstName }}, {{ lastName|upper }}</p>*/
/* <p>Address: <strong>{{ address.streetAddress }}, {{ address.city }}</strong></p>*/
/* <p>Phone Numbers:</p>*/
/* <ol>*/
/* {% for phone in phoneNumbers %}*/
/* <li> {{ phone.type }}: {{ phone.number }} </li>*/
/* {% else %}*/
/* No Phones have been found!*/
/* {% endfor %}*/
/* </ol>*/
