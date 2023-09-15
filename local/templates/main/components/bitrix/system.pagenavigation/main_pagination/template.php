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
$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$symbol = "?";
if(isset($_GET['sort']) && isset($_GET['method']))
{
    $symbol = "&";
    $arResult["sUrlPath"] = '?sort=' . $_GET['sort'] . '&method=' . $_GET['method'];
}

?>

<div class="pagination">
    <?if ($arResult["NavPageNomer"] > 1):?>
         <?if($arResult["bSavePage"]):?>
            <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"] . $symbol?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_begin")?></a>
            <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"] . $symbol?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
        <?else:?>
            <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"]?>"><?=GetMessage("nav_begin")?></a>
            <?if ($arResult["NavPageNomer"] > 2):?>
                <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"] . $symbol?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
            <?else:?>
                <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"]?>"><?=GetMessage("nav_prev")?></a>
            <?endif?>
        <?endif?>
    <?else:?>

        <p class="pagination__link"><?=GetMessage("nav_begin")?></p>
        <p class="pagination__link"><?=GetMessage("nav_prev")?></p>

    <?endif?>

    <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

        <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>

            <p class="pagination__link pagination__link_active"><?=$arResult["nStartPage"]?></p>
        <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>

            <a target="_self" class="pagination__link num" href="<?=$arResult["sUrlPath"]?>"><?=$arResult["nStartPage"]?></a>
        <?else:?>

            <a target="_self" class="pagination__link num" href="<?=$arResult["sUrlPath"] . $symbol?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
        <?endif?>

        <?$arResult["nStartPage"]++?>
    <?endwhile?>

    <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"] . $symbol?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_next")?></a>&nbsp;
        <a target="_self" class="pagination__link" href="<?=$arResult["sUrlPath"] . $symbol?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_end")?></a>
    <?else:?>

        <p class="pagination__link"><?=GetMessage("nav_next")?></p>
        <p class="pagination__link"><?=GetMessage("nav_end")?></p>
    <?endif?>
</div>




