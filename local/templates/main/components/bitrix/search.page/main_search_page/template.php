<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
    die();
}
/** @global CMain $APPLICATION */
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponent $component */
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:search.form",
    "main_search",
    Array(
        "PAGE" => "#SITE_DIR#search.php",
        "USE_SUGGEST" => "N"
    )
);?>




<?// if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
///** @var array $arParams */
///** @var array $arResult */
///** @global CMain $APPLICATION */
///** @global CUser $USER */
///** @global CDatabase $DB */
///** @var CBitrixComponentTemplate $this */
///** @var string $templateName */
///** @var string $templateFile */
///** @var string $templateFolder */
///** @var string $componentPath */
///** @var CBitrixComponent $component */
//?>
<?php
//require "result_modifier.php";
//echo "<pre>";
//var_dump($arResult);
//echo "<pre>";
//?>


<!--<div class="gray-bg">-->
<!--    <div class="container">-->
<!--        <form class="search clearfix" action="" method="get">-->
<!--            <input class="search__txt" name="q" value="" placeholder="Поиск по названию, артикулу, EAN " type="search">-->
<!--            <button class="search__submit" name="s" type="submit"><span>Найти</span></button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="catalog-area container">-->
<!--    <div class="catalog-area__header">-->
<!--        <div class="title">Подбор по параметрам</div>-->
<!--        <div class="sort mob-hidden">-->
<!--            <div class="label">Сначала:</div>-->
<!--            <ul class="sort__opt">-->
<!--                <li><a href="" title="">Дешёвые</a></li>-->
<!--                <li><a href="" title="">Дорогие</a></li>-->
<!--                <li class="selected"><a href="" title="">Все</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="mobile-filter-trigger"></div>-->
<!--    </div>-->
<!--    <div class="clearfix">-->
<!--        <div class="width-75">-->
<!--            <div class="clearfix catalog-list">-->
<!--                --><?// if ($arResult["ERROR_CODE"] != 0): ?>
<!--                    <p>--><?php //= GetMessage("SEARCH_ERROR") ?><!--</p>-->
<!--                    --><?// ShowError($arResult["ERROR_TEXT"]); ?>
<!--                    <p>--><?php //= GetMessage("SEARCH_CORRECT_AND_CONTINUE") ?><!--</p>-->
<!--                    <br/><br/>-->
<!--                    <p>--><?php //= GetMessage("SEARCH_SINTAX") ?><!--<br/><b>--><?php //= GetMessage("SEARCH_LOGIC") ?><!--</b></p>-->
<!--                    <table border="0" cellpadding="5">-->
<!--                        <tr>-->
<!--                            <td align="center" valign="top">--><?php //= GetMessage("SEARCH_OPERATOR") ?><!--</td>-->
<!--                            <td valign="top">--><?php //= GetMessage("SEARCH_SYNONIM") ?><!--</td>-->
<!--                            <td>--><?php //= GetMessage("SEARCH_DESCRIPTION") ?><!--</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td align="center" valign="top">--><?php //= GetMessage("SEARCH_AND") ?><!--</td>-->
<!--                            <td valign="top">and, &amp;, +</td>-->
<!--                            <td>--><?php //= GetMessage("SEARCH_AND_ALT") ?><!--</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td align="center" valign="top">--><?php //= GetMessage("SEARCH_OR") ?><!--</td>-->
<!--                            <td valign="top">or, |</td>-->
<!--                            <td>--><?php //= GetMessage("SEARCH_OR_ALT") ?><!--</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td align="center" valign="top">--><?php //= GetMessage("SEARCH_NOT") ?><!--</td>-->
<!--                            <td valign="top">not, ~</td>-->
<!--                            <td>--><?php //= GetMessage("SEARCH_NOT_ALT") ?><!--</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td align="center" valign="top">( )</td>-->
<!--                            <td valign="top">&nbsp;</td>-->
<!--                            <td>--><?php //= GetMessage("SEARCH_BRACKETS_ALT") ?><!--</td>-->
<!--                        </tr>-->
<!--                    </table>-->
<!---->
<!--                --><?// elseif (count($arResult["SEARCH"]) > 0): ?>
<!---->
<!--                --><?// foreach ($arResult["SEARCH"] as $arItem): ?>
<!--                    <div class="item">-->
<!--                        <a href="--><?php //= $arItem['URL'] ?><!--" class="products-item">-->
<!--                            <div class="products-item__pic">-->
<!--                                <img src="--><?php //= $arItem['IMG'] ?><!--" alt="">-->
<!--                            </div>-->
<!--                            <h2 class="products-item__title">--><?php //= $arItem["TITLE"] ?><!--</h2>-->
<!--                            <ul class="products-item__options">-->
<!--                                --><?php //foreach ($arItem['PROPERTIES'] as $prop): ?>
<!--                                    <li>-->
<!--                                        <span class="left">--><?php //= $prop['NAME'] ?><!--</span>-->
<!--                                        <span class="right">--><?php //= $prop['VALUE'] ?><!--</span>-->
<!--                                    </li>-->
<!--                                --><?php //endforeach; ?>
<!--                            </ul>-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!--                --><?// endforeach; ?>
<!--            </div>-->
<!---->
<!--            --><?// if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
<!---->
<!--            --><?// else: ?>
<!--                --><?// ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); ?>
<!--            --><?// endif; ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->





