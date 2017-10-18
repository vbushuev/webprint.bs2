<?php

/* /Applications/AMPPS/www/webprint.bs2/themes/vsb/layouts/default.htm */
class __TwigTemplate_a65a07ddd9672dc602531f4adfea0a7e14bcdf80c53bf449f05e3f15002d3e59 extends Twig_Template
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
        echo "<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0, minimal-ui\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">

    <!-- <meta name=\"csrf-token\" content=\"BYmSNRf2FLncc28L788SSnBb3z00Lfw0eKzlYReV\"> -->
    <link rel=\"icon\" type=\"image/png\" href=\"/modules/backend/assets/images/favicon.png\">
    <title data-title-template=\"%s CMS | OctoberCMS\">Giprint</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/semantic.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/ad.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/breadcrumb.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/button.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/card.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/checkbox.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/comment.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/container.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/dimmer.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/divider.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/dropdown.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/embed.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/feed.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/flag.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/form.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/grid.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/header.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/icon.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/image.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/input.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/item.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/label.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/list.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/loader.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/menu.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/message.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/modal.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/nag.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/popup.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/progress.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/rail.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/rating.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/reset.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/reveal.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/search.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/segment.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/shape.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/sidebar.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/site.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/statistic.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/step.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/sticky.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/tab.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/table.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/transition.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/video.min.css");
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.min.css");
        echo "\">
    ";
        // line 59
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 60
        echo "</head>
<body>
    ";
        // line 62
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 63
        echo "
    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/semantic.min.js");
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/accordion.min.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/api.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/checkbox.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/colorize.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/dimmer.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/dropdown.min.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/embed.min.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/form.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/modal.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/nag.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/progress.min.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/rating.min.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/search.min.js");
        echo "\"></script>
    <script src=\"";
        // line 80
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/shape.min.js");
        echo "\"></script>
    <script src=\"";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/sidebar.min.js");
        echo "\"></script>
    <script src=\"";
        // line 82
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/site.min.js");
        echo "\"></script>
    <script src=\"";
        // line 83
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/state.min.js");
        echo "\"></script>
    <script src=\"";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/sticky.min.js");
        echo "\"></script>
    <script src=\"";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/tab.min.js");
        echo "\"></script>
    <script src=\"";
        // line 86
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/transition.min.js");
        echo "\"></script>
    <script src=\"";
        // line 87
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/video.min.js");
        echo "\"></script>
    <script src=\"";
        // line 88
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/visibility.min.js");
        echo "\"></script>
    <script src=\"";
        // line 89
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/semantic/components/visit.min.js");
        echo "\"></script>

    <script src=\"";
        // line 91
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/script.js");
        echo "\"></script>

    ";
        // line 93
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 94
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 95
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/webprint.bs2/themes/vsb/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 95,  346 => 94,  339 => 93,  334 => 91,  329 => 89,  325 => 88,  321 => 87,  317 => 86,  313 => 85,  309 => 84,  305 => 83,  301 => 82,  297 => 81,  293 => 80,  289 => 79,  285 => 78,  281 => 77,  277 => 76,  273 => 75,  269 => 74,  265 => 73,  261 => 72,  257 => 71,  253 => 70,  249 => 69,  245 => 68,  241 => 67,  237 => 66,  233 => 65,  229 => 63,  227 => 62,  223 => 60,  220 => 59,  216 => 58,  212 => 57,  208 => 56,  204 => 55,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  176 => 48,  172 => 47,  168 => 46,  164 => 45,  160 => 44,  156 => 43,  152 => 42,  148 => 41,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0, minimal-ui\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">

    <!-- <meta name=\"csrf-token\" content=\"BYmSNRf2FLncc28L788SSnBb3z00Lfw0eKzlYReV\"> -->
    <link rel=\"icon\" type=\"image/png\" href=\"/modules/backend/assets/images/favicon.png\">
    <title data-title-template=\"%s CMS | OctoberCMS\">Giprint</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/semantic.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/ad.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/breadcrumb.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/button.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/card.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/checkbox.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/comment.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/container.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/dimmer.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/divider.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/dropdown.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/embed.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/feed.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/flag.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/form.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/grid.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/header.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/icon.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/image.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/input.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/item.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/label.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/list.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/loader.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/menu.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/message.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/modal.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/nag.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/popup.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/progress.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/rail.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/rating.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/reset.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/reveal.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/search.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/segment.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/shape.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/sidebar.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/site.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/statistic.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/step.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/sticky.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/tab.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/table.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/transition.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/semantic/components/video.min.css'|theme}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/style.min.css'|theme}}\">
    {% styles %}
</head>
<body>
    {% page %}

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
    <script src=\"{{'assets/semantic/semantic.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/accordion.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/api.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/checkbox.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/colorize.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/dimmer.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/dropdown.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/embed.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/form.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/modal.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/nag.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/popup.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/progress.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/rating.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/search.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/shape.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/sidebar.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/site.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/state.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/sticky.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/tab.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/transition.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/video.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/visibility.min.js'|theme}}\"></script>
    <script src=\"{{'assets/semantic/components/visit.min.js'|theme}}\"></script>

    <script src=\"{{'assets/js/script.js'|theme}}\"></script>

    {% framework extras %}
    {% scripts %}
</body>
</html>", "/Applications/AMPPS/www/webprint.bs2/themes/vsb/layouts/default.htm", "");
    }
}
