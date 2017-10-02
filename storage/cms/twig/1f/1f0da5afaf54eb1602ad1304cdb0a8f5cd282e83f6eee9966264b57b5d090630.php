<?php

/* /Applications/AMPPS/www/webprint.bs2/themes/goeroe-semantic-october/layouts/default.htm */
class __TwigTemplate_354fa4e6775c9b5ebfd927d304c3f79fbee3ce5bee96cbdf61706974ef484bb4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title></title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <!-- Place favicon.ico in the root directory -->
    
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/dist/semantic.min.css", 1 => "assets/less/magic.less"));
        // line 16
        echo "\" />
        ";
        // line 17
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 18
        echo "    </head>
    <body>
        <!-- Add your magic here -->
        ";
        // line 21
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 22
        echo "        
        <script src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/vendor/jquery.min.js", 1 => "assets/dist/semantic.min.js", 2 => "assets/js/magic.js"));
        // line 27
        echo "\"></script>
        ";
        // line 28
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 29
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 30
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/webprint.bs2/themes/goeroe-semantic-october/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  63 => 29,  56 => 28,  53 => 27,  51 => 23,  48 => 22,  46 => 21,  41 => 18,  38 => 17,  35 => 16,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title></title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
        <!-- Place favicon.ico in the root directory -->
    
        <link rel=\"stylesheet\" href=\"{{[
            'assets/dist/semantic.min.css',
            'assets/less/magic.less'
        ]|theme }}\" />
        {% styles %}
    </head>
    <body>
        <!-- Add your magic here -->
        {% page %}
        
        <script src=\"{{[
            'assets/js/vendor/jquery.min.js',
            'assets/dist/semantic.min.js',
            'assets/js/magic.js',
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
    </body>
</html>", "/Applications/AMPPS/www/webprint.bs2/themes/goeroe-semantic-october/layouts/default.htm", "");
    }
}
