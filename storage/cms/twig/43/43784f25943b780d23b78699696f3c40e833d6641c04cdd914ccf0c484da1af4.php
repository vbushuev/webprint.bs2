<?php

/* /Applications/AMPPS/www/webprint.bs2/themes/vsb/pages/contacts.htm */
class __TwigTemplate_14ec371b6a8267f2a3c8ecb8ec5c52a734c26206811246822165db54b247eae0 extends Twig_Template
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
        $context['__cms_partial_params']['active'] = "contacts"        ;
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"ui main container\">

    ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = array(0 => "Главная", 1 => "Контакты")        ;
        echo $this->env->getExtension('CMS')->partialFunction("breadcrumb"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    <h2 class=\"ui dividing header\">
        Контакты
        <a class=\"anchor\" id=\"header\"></a>
    </h2>
    <div class=\"ui grid two column centered stackable\">
        <div class=\"one column row\">
            <div class=\"ui column\">

            </div>
        </div>
        <div class=\"two column row\">
            <div class=\"ui column segment\">
                <div class=\"ui list\">
                    <div class=\"item\">
                        <i class=\"marker icon\"></i>
                        123001, Москва, ул. Большая Садовая, д. 5, стр. 1-2, подъезд №3, кабинет 130, подняться на второй этаж.
                    </div>
                    <div class=\"item\">
                        <a href=\"tel:+74955055047\">
                            <i class=\"phone icon\"></i>
                            +7(495) 505 50 47
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"tel:+79636250050\">
                            <i class=\"phone icon\"></i>
                            +7(963) 625 00 50
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"tel:+74992515588\">
                            <i class=\"phone icon\"></i>
                            +7(499) 251 55 88
                        </a>
                    </div>
                    <div class=\"item inline\">
                        <a href=\"mailto:info@giprint.ru\"><i class=\"mail icon\"></i> info@giprint.ru</a>
                    </div>
                    <div class=\"item\">
                        <i class=\"clock icon\"></i>
                        10:00-19:00
                    </div>
                </div>
                <div class=\"ui message\">
                    <h6 class=\"header dividing\">Как найти наш офис?</h6>
                    <p>Пройдите до конца здания, поверните в арку, пройдите через шлагбаум. Вход в типографию – первый подъезд со стороны двора (он угловой). К нам можно заехать и на автомобиле, только предварительно (за 2 часа) закажите пропуск.</p>
                    <p>Мы ждём вас!</p>
                </div>
            </div>
            <div class=\"ui column\">
                <form >
                    <div class=\"ui form\">
                        <h3 class=\"ui header diviing\">Обратная связь</h3>
                        <div class=\"fields\">
                            <div class=\"field eight wide\">
                                <label>Ваш email</label>
                                <input type=\"email\" name=\"email\" placeholder=\"email\" />
                            </div>
                            <div class=\"field eight wide\">
                                <label>Телефон</label>
                                <input type=\"text\" name=\"phone\" placeholder=\"телефон\" />
                            </div>
                        </div>
                        <div class=\"field\">
                            <label>Сообщение</label>
                            <textarea name=\"message\"></textarea>
                        </div>
                        <div class=\"inline field\">
                            <div class=\"ui checkbox\">
                                <input type=\"checkbox\" tabindex=\"0\" class=\"hidden\">
                                <label>Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности. <a href=\"#\">Подробнее...</a></label>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"ui labeled icon button primary\">
                            Отправить
                            <i class=\"send icon\"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"one column row\">
            <div class=\"ui column segment basic\">
                <p>Центральная Типография находится рядом с метро, в самом центре - всего в двух минутах ходьбы от станции «Маяковская». Таким образом, к нам легко добраться как на автомобиле, так и общественным транспортом из любой точки города.
    Расположение типографии на Маяковской, в центре столицы, где сосредоточена вся деловая жизнь Москвы, позволяет нам быть активными участниками важных событий в мире полиграфии, оперативно принимать заказы и столь же оперативно их выполнять.
    Не нужно ехать на другой конец Москвы, чтоб получить качественную полиграфию, нет необходимости искать пути и прокладывать утомительные маршруты с несколькими пересадками – наша типография на Маяковской всегда «под боком», ведь все пути рано или поздно сходятся в центре города.
    Богатый парк оборудования позволяет нам работать с крупными тиражами и широким перечнем продукции. Но для размещения многочисленных станков и механизмов необходима обширная территория, которую типография в центре физически не способна обеспечить. Поэтому в сердце столицы расположен наш офис, а адрес производства – Москва, ул. Верхняя, 34 (помещение тракторного института). Крупногабаритные грузы вы можете забирать прямо оттуда (типография на м. Белорусская), минуя свойственные центру заторы. Схему проезда смотрите здесь. Обратите внимание: ВАМ ПОНАДОБИТСЯ ПРОПУСК, заказать который необходимо не позднее, чем за сутки.</p>
            </div>
        </div>
    </div>

</div>
";
        // line 97
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/webprint.bs2/themes/vsb/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 97,  33 => 5,  28 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'navigation' active=\"contacts\" %}
<div class=\"ui main container\">

    {% partial 'breadcrumb' items=[\"Главная\",\"Контакты\"] %}
    <h2 class=\"ui dividing header\">
        Контакты
        <a class=\"anchor\" id=\"header\"></a>
    </h2>
    <div class=\"ui grid two column centered stackable\">
        <div class=\"one column row\">
            <div class=\"ui column\">

            </div>
        </div>
        <div class=\"two column row\">
            <div class=\"ui column segment\">
                <div class=\"ui list\">
                    <div class=\"item\">
                        <i class=\"marker icon\"></i>
                        123001, Москва, ул. Большая Садовая, д. 5, стр. 1-2, подъезд №3, кабинет 130, подняться на второй этаж.
                    </div>
                    <div class=\"item\">
                        <a href=\"tel:+74955055047\">
                            <i class=\"phone icon\"></i>
                            +7(495) 505 50 47
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"tel:+79636250050\">
                            <i class=\"phone icon\"></i>
                            +7(963) 625 00 50
                        </a>
                    </div>
                    <div class=\"item\">
                        <a href=\"tel:+74992515588\">
                            <i class=\"phone icon\"></i>
                            +7(499) 251 55 88
                        </a>
                    </div>
                    <div class=\"item inline\">
                        <a href=\"mailto:info@giprint.ru\"><i class=\"mail icon\"></i> info@giprint.ru</a>
                    </div>
                    <div class=\"item\">
                        <i class=\"clock icon\"></i>
                        10:00-19:00
                    </div>
                </div>
                <div class=\"ui message\">
                    <h6 class=\"header dividing\">Как найти наш офис?</h6>
                    <p>Пройдите до конца здания, поверните в арку, пройдите через шлагбаум. Вход в типографию – первый подъезд со стороны двора (он угловой). К нам можно заехать и на автомобиле, только предварительно (за 2 часа) закажите пропуск.</p>
                    <p>Мы ждём вас!</p>
                </div>
            </div>
            <div class=\"ui column\">
                <form >
                    <div class=\"ui form\">
                        <h3 class=\"ui header diviing\">Обратная связь</h3>
                        <div class=\"fields\">
                            <div class=\"field eight wide\">
                                <label>Ваш email</label>
                                <input type=\"email\" name=\"email\" placeholder=\"email\" />
                            </div>
                            <div class=\"field eight wide\">
                                <label>Телефон</label>
                                <input type=\"text\" name=\"phone\" placeholder=\"телефон\" />
                            </div>
                        </div>
                        <div class=\"field\">
                            <label>Сообщение</label>
                            <textarea name=\"message\"></textarea>
                        </div>
                        <div class=\"inline field\">
                            <div class=\"ui checkbox\">
                                <input type=\"checkbox\" tabindex=\"0\" class=\"hidden\">
                                <label>Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности. <a href=\"#\">Подробнее...</a></label>
                            </div>
                        </div>
                        <button type=\"submit\" class=\"ui labeled icon button primary\">
                            Отправить
                            <i class=\"send icon\"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"one column row\">
            <div class=\"ui column segment basic\">
                <p>Центральная Типография находится рядом с метро, в самом центре - всего в двух минутах ходьбы от станции «Маяковская». Таким образом, к нам легко добраться как на автомобиле, так и общественным транспортом из любой точки города.
    Расположение типографии на Маяковской, в центре столицы, где сосредоточена вся деловая жизнь Москвы, позволяет нам быть активными участниками важных событий в мире полиграфии, оперативно принимать заказы и столь же оперативно их выполнять.
    Не нужно ехать на другой конец Москвы, чтоб получить качественную полиграфию, нет необходимости искать пути и прокладывать утомительные маршруты с несколькими пересадками – наша типография на Маяковской всегда «под боком», ведь все пути рано или поздно сходятся в центре города.
    Богатый парк оборудования позволяет нам работать с крупными тиражами и широким перечнем продукции. Но для размещения многочисленных станков и механизмов необходима обширная территория, которую типография в центре физически не способна обеспечить. Поэтому в сердце столицы расположен наш офис, а адрес производства – Москва, ул. Верхняя, 34 (помещение тракторного института). Крупногабаритные грузы вы можете забирать прямо оттуда (типография на м. Белорусская), минуя свойственные центру заторы. Схему проезда смотрите здесь. Обратите внимание: ВАМ ПОНАДОБИТСЯ ПРОПУСК, заказать который необходимо не позднее, чем за сутки.</p>
            </div>
        </div>
    </div>

</div>
{% partial 'footer'%}", "/Applications/AMPPS/www/webprint.bs2/themes/vsb/pages/contacts.htm", "");
    }
}
