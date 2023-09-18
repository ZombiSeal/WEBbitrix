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

<!--<div class="search-form">-->
<!--<form action="--><?php //=$arResult["FORM_ACTION"]?><!--">-->
<!--	<table border="0" cellspacing="0" cellpadding="2" align="center">-->
<!--		<tr>-->
<!--			<td align="center">--><?//if($arParams["USE_SUGGEST"] === "Y"):?><!----><?//$APPLICATION->IncludeComponent(
//				"bitrix:search.suggest.input",
//				"",
//				array(
//					"NAME" => "q",
//					"VALUE" => "",
//					"INPUT_SIZE" => 15,
//					"DROPDOWN_SIZE" => 10,
//				),
//				$component, array("HIDE_ICONS" => "Y")
//			);?><!----><?//else:?><!--<input type="text" name="q" value="" size="15" maxlength="50" />--><?//endif;?><!--</td>-->
<!--		</tr>-->
<!--		<tr>-->
<!--			<td align="right"><input name="s" type="submit" value="--><?php //=GetMessage("BSF_T_SEARCH_BUTTON");?><!--" /></td>-->
<!--		</tr>-->
<!--	</table>-->
<!--</form>-->
<!--</div>-->