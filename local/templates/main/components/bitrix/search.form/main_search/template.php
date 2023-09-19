<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

<div class="gray-bg">
    <div class="container">
        <form class="search clearfix" action="<?=$arResult["FORM_ACTION"]?>">
            <input class="search__txt" name="q" value="" placeholder="Поиск по названию, артикулу, EAN " type="search">
            <button class="search__submit" type="submit"><span>Найти</span></button>
        </form>
    </div>
</div>

