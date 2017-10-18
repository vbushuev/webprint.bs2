<?php

/* /Applications/AMPPS/www/webprint.bs2/themes/vsb/partials/breadcrumb.htm */
class __TwigTemplate_cb89ab8075ba6e5208c1a1ecf6f3f400d9516a29f9e11189a8b8dba7ade5c022 extends Twig_Template
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
        // line 1
        echo "<div class=\"ui breadcrumb container medium\">
    ";
        // line 2
        $context["i"] = 1;
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        ";
            if ((twig_length_filter($this->env, ($context["items"] ?? null)) == ($context["i"] ?? null))) {
                // line 5
                echo "            <a class=\"active section\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
        ";
            } else {
                // line 7
                echo "            <a class=\"section\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
            <i class=\"right angle icon divider\"></i>
        ";
            }
            // line 10
            echo "        ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/webprint.bs2/themes/vsb/partials/breadcrumb.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  48 => 11,  45 => 10,  38 => 7,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb container medium\">
    {% set i = 1 %}
    {% for item in items %}
        {% if items|length == i %}
            <a class=\"active section\">{{item}}</a>
        {% else%}
            <a class=\"section\">{{item}}</a>
            <i class=\"right angle icon divider\"></i>
        {% endif%}
        {% set i = i+1 %}
    {% endfor %}
</div>", "/Applications/AMPPS/www/webprint.bs2/themes/vsb/partials/breadcrumb.htm", "");
    }
}
