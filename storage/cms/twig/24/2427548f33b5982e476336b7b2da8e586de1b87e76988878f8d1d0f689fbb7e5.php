<?php

/* /Applications/AMPPS/www/webprint.bs2/themes/vsb/pages/main.htm */
class __TwigTemplate_a47d7a781617073f76d4c440aa1111de2716b807387d96ec59c8528814531206 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['active'] = "order"        ;
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"ui main centered container\">
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = array(0 => "Главная", 1 => "Полиграфия", 2 => "Визитки")        ;
        echo $this->env->getExtension('CMS')->partialFunction("breadcrumb"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    <div class=\"column\">
        Hello Trill
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/webprint.bs2/themes/vsb/pages/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  28 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'navigation' active=\"order\" %}

<div class=\"ui main centered container\">
    {% partial 'breadcrumb' items=[\"Главная\",\"Полиграфия\",\"Визитки\"] %}
    <div class=\"column\">
        Hello Trill
    </div>

</div>", "/Applications/AMPPS/www/webprint.bs2/themes/vsb/pages/main.htm", "");
    }
}
