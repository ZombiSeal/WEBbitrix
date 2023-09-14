<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php


use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<head>
    <meta name="description" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="cmsmagazine" content="aa4cc816c3e233bc68ec4386b3eabcf3"/>
    <?php $APPLICATION->ShowHead(); ?>

    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    Asset::getInstance()->addString('<link rel="shortcut icon" href="favicon.png">');

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/libs/font-awesome-4.2.0/css/font-awesome.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/libs/owl-carousel/assets/owl.carousel.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/libs/fancybox/jquery.fancybox.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/libs/easy-responsive-tabs-to-accordion/easy-responsive-tabs.csss");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/libs/slick-1.8.0/slick/slick.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/libs/slick-1.8.0/slick/slick-theme.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/fonts.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/media.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");


    ?>

    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"
            type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init() {
            myMap = new ymaps.Map("ya-map", {
                center: [53.9443346, 27.6099203],
                zoom: 17
            });
            myMap.controls.add(
                new ymaps.control.ZoomControl()
            );
            var myPlacemark = new ymaps.Placemark([53.9443346, 27.6099203], {
                hintContent: 'Тралс',
                balloonContent: 'Минск, Логойский тракт, 15 корпус 4'
            }, {
                iconImageHref: 'images/i/baloon_map.png',
                iconImageSize: [23, 30],
                iconImageOffset: [-12, -30]
            });
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
</head>
<body>

<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<!-- -->
<?php
$arrUrl = explode('/', $APPLICATION->GetCurPage());
?>

<div class="bd-site">
    <div class="b-fixed-footer">
        <div class="b-footer-padding">
            <!-- // -->

            <!-- Мобильное меню -->
            <div class="mobile-aside mobile-aside__nav">
                <div class="mobile-aside__nav__header">
                    <div class="mobile-aside__nav__close">
                        <i></i> Закрыть
                    </div>
                </div>
                <nav class="mobile-aside__nav__body">
                    <ul class="mobile__menu">
                        <li class="has-children">
                            <a href="#" title="">Каталог товаров</a>
                            <ul class="sub-menu">
                                <li><a href="#" title="">Элементы питания</a></li>
                                <li><a href="#" title="">Бытовые аккумуляторы</a></li>
                                <li><a href="#" title="">Зарядные устройства</a></li>
                                <li><a href="#" title="">Индустриальные аккумуляторы</a></li>
                                <li><a href="#" title="">Лампы</a></li>
                                <li><a href="#" title="">Инверторы</a></li>
                                <li><a href="#" title="">Стационарные аккумуляторы</a></li>
                                <li><a href="#" title="">Сервис и ремент аккумуляторов</a></li>
                                <li><a href="#" title="">Портативные аккумуляторы</a></li>
                                <li><a href="#" title="">Светильники</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="">О компании</a></li>
                        <li><a href="#" title="">Партнеры</a></li>
                        <li><a href="#" title="">Торговые марки</a></li>
                        <li><a href="#" title="">Статьи</a></li>
                        <li><a href="#" title="">Контакты</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Мобильные контакты -->
            <div class="mobile-aside mobile-aside__contact">
                <div class="mobile-aside__contact__header">
                    <div class="mobile-aside__contact__close">
                        <i></i> Закрыть
                    </div>
                </div>
                <div class="mobile-aside__contact__body">
                    <ul class="header__contact">
                        <li>
                            <div class="header__contact__label">Отдел элементов <br>питания:</div>
                            <div class="header__contact__data"><a href="tel:+375172693133" title="">+375 (17)
                                    269-31-33</a> <br>office@trals.by
                            </div>
                        </li>
                        <li>
                            <div class="header__contact__label">Отдел герметичных <br>аккумуляторов:</div>
                            <div class="header__contact__data"><a href="tel:+375172693155" title="">+375 (17)
                                    269-31-55</a> <br>indbat@trals.by
                            </div>
                        </li>
                        <li>
                            <div class="header__contact__label">Отдел ламп бытового <br>освещения:</div>
                            <div class="header__contact__data"><a href="tel:+375172693144" title="">+375 (17)
                                    269-31-44</a> <br>lamps@trals.by
                            </div>
                        </li>
                        <li>
                            <div class="header__contact__label">Общий номер: <br>&nbsp;</div>
                            <div class="header__contact__data"><a href="tel:+375172693122" title="">+375 (17)
                                    269-31-22</a> <br>trals@trals.by
                            </div>
                        </li>
                    </ul>
                    <div class="header__address address">
                        <p>Pеспублика Беларусь, 220113, Минск, <br>Логойский тракт, д.15, к.4</p>
                        <a href="#fb-map" class="address__map js-open-modal"
                           title=""><span>Посмотреть на карте</span></a>
                    </div>
                </div>
            </div>

            <header class="header">
                <!-- Шапка верх -->
                <div class="header__top">
                    <div class="container">
                        <ul class="header__contact flex">
                            <li>
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/contacts1.php"
                                    )
                                ); ?>
                            </li>
                            <li>
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/contacts2.php"
                                    )
                                ); ?>
                            </li>
                            <li>
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/contacts3.php"
                                    )
                                ); ?>
                            </li>
                            <li>
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/contacts4.php"
                                    )
                                ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Шапка низ + меню -->
                <div class="header__center clearfix">
                    <div class="container">
                        <div class="flex">
                            <div class="mobile-trigger">
                                <i></i><span>Меню</span>
                            </div>
                            <a href="/" class="header__logo" title="">
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php"
                                    )
                                ); ?>
                            </a>
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top_menu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "submenu",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "top_menu"
                                ),
                                false
                            ); ?>
                            <div class="header__address address">
                                <?php $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/includes/header/adress.php"
                                    )
                                ); ?>
                            </div>
                            <div class="mobile-address-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="main">
                <div class="container">
                    <!-- Хлебные крошки -->
                    <ul class="breadcrums">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:breadcrumb",
                            "main_bread",
                            array(
                                "PATH" => "",
                                "SITE_ID" => "s1",
                                "START_FROM" => "0"
                            )
                        ); ?>
                    </ul>


                    <?php if (CSite::InDir('/catalog/') && count($arrUrl) === 4): ?>
                        <h1>
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "title",
                                "EDIT_TEMPLATE" => ""
                            ),
                                false,
                                array(
                                    "ACTIVE_COMPONENT" => "Y"
                                )
                            ); ?>
                        </h1>
                        <div class="catalog-page">
                            <div class="main__content single-article width-80 catalog-prew">
                                <p>
                                    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                        "AREA_FILE_SHOW" => "page",
                                        "AREA_FILE_SUFFIX" => "description1",
                                        "EDIT_TEMPLATE" => ""
                                    ),
                                        false,
                                        array(
                                            "ACTIVE_COMPONENT" => "Y"
                                        )
                                    ); ?>
                                </p>
                                <p>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_SHOW" => "page",
                                            "AREA_FILE_SUFFIX" => "description2",
                                            "EDIT_TEMPLATE" => ""
                                        )
                                    ); ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

