<?php

/* /Applications/AMPPS/www/webprint.bs2/themes/vsb/partials/navigation.htm */
class __TwigTemplate_afc433c473ebef9827987b47c85eaba3de346088a7844a508b9bb7813491d8c1 extends Twig_Template
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
        echo "<div class=\"ui borderless menu stackable massive six item\">
    <div class=\"ui dropdown item ";
        // line 2
        if ((($context["active"] ?? null) == "order")) {
            echo " active ";
        }
        echo "\" href=\"/\">
        Заказ
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            <a class=\"item\">Готовые шаблоны</a>
            <a class=\"item\">Онлайн Конструктор</a>
            <a class=\"item\">По Вашему макету</a>
        </div>
    </div>
    <a class=\"item ";
        // line 11
        if ((($context["active"] ?? null) == "products")) {
            echo " active ";
        }
        echo "\" href=\"/products\">Полиграфия</a>
    <a class=\"item ";
        // line 12
        if ((($context["active"] ?? null) == "papers")) {
            echo " active ";
        }
        echo "\" href=\"/paper\">Бумага</a>
    <a class=\"item ";
        // line 13
        if ((($context["active"] ?? null) == "prices")) {
            echo " active ";
        }
        echo "\" href=\"/prices\">Цены</a>
    <a class=\"item ";
        // line 14
        if ((($context["active"] ?? null) == "contacts")) {
            echo " active ";
        }
        echo "\" href=\"/contacts\">Контакты</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/webprint.bs2/themes/vsb/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  48 => 13,  42 => 12,  36 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui borderless menu stackable massive six item\">
    <div class=\"ui dropdown item {% if active=='order' %} active {% endif %}\" href=\"/\">
        Заказ
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            <a class=\"item\">Готовые шаблоны</a>
            <a class=\"item\">Онлайн Конструктор</a>
            <a class=\"item\">По Вашему макету</a>
        </div>
    </div>
    <a class=\"item {% if active=='products' %} active {% endif %}\" href=\"/products\">Полиграфия</a>
    <a class=\"item {% if active=='papers' %} active {% endif %}\" href=\"/paper\">Бумага</a>
    <a class=\"item {% if active=='prices' %} active {% endif %}\" href=\"/prices\">Цены</a>
    <a class=\"item {% if active=='contacts' %} active {% endif %}\" href=\"/contacts\">Контакты</a>
</div>", "/Applications/AMPPS/www/webprint.bs2/themes/vsb/partials/navigation.htm", "");
    }
}
