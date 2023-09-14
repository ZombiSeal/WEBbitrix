<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>

</div>
</div>
</div>
<footer class="footer">
    <!-- Подвал верх -->
    <div class="footer__top">
        <div class="container">
            <div id="back_top" class="back_top"></div>
            <div class="row">
                <div class="width-28">
                    <a href="/" class="mob-hidden footer__logo" title="">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php"
                            )
                        ); ?>                    </a>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/about.php"
                        )
                    ); ?>
                </div>
                <div class="width-72">
                    <nav class="footer__nav">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "bottom_menu"
                            ),
                            false
                        ); ?>
                    </nav>
                    <ul class="footer__contact flex">
                        <li class="address">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/adress.php"
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/time_work.php"
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/footer/contacts.php"
                                )
                            ); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Подвал копирайт -->
    <div class="footer__copyright">
        <div class="container">
            <div class="flex">
                <p>© 2002-2017 ООО «Trals.by». Все права защищены</p>
                <a class="go-site-map" href="#" title="">Карта сайта</a>
                <p>Разработка сайта: <a href="#" class="" title="">webcompany.by</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- -->
</div>
<!-- // -->

<!-- Модальная карта -->
<div id="fb-map" class="g-modal-win" style="display: none;">
    <div class="g-modal-win__content">
        <div class="modal__address"><span>Адрес:</span> Республика Беларусь, индекс 220113, г.Минск, Лагойский тракт,
            д.15, к.4
        </div>
        <div id="ya-map" class="ya-map"></div>
        <div class="clearfix">
            <div class="modal__phone">
                <div class="title">Номера телефонов:</div>
                <p>Отдел елементов питания: <span><a href="tel:+37517312693133"
                                                     title="">+375 (17) 31-269-31-33</a></span> <br class="mob-hidden">Отдел
                    герметичных аккумулятор: <span><a href="tel:+375172693155" title="">+375 (17) 269-31-55</a></span>
                    <br class="mob-hidden">
                    Отдел лапм бытового освещения: <span><a href="tel:+375172693144"
                                                            title="">+375 (17) 269-31-44</a></span> <br
                            class="mob-hidden">Общий номер: <span><a href="tel:+375172693132" title="">+375 (17) 269-31-32</a></span>
                </p>
            </div>
            <div class="modal__time">
                <div class="title">Время работы:</div>
                <p>понедельник — пятница: <span>с 9:00 до 19:00</span> <br>суббота: <span>с 10:00 до 17:00</span> <br>воскресенье:
                    <span>выходной</span></p>
            </div>
        </div>
    </div>
</div>

<?php
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/jquery/jquery-1.7.1.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/jquery/jquery-migrate-1.2.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/owl-carousel/owl.carousel.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/fancybox/jquery.fancybox.pack.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/jquery/jquery-ui-1.8.11.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/easy-responsive-tabs-to-accordion/easyResponsiveTabs.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/libs/slick-1.8.0/slick/slick.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/custom-ui-slider.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.ui.touch-punch.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/common.js");


?>
</body>
</html>