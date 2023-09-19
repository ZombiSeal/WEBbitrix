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







