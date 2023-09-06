<?php
$arrPrep = [];
if (!empty($arResult['SEARCH'])) {
    foreach ($arResult['SEARCH'] as $key=>$item) {
        $grab = GetIBlockElement($item["ITEM_ID"]);
        $img = CFile::GetPath($grab['PREVIEW_PICTURE']);

        $arResult["SEARCH"][$key]["PROPERTIES"]["PRICE"] = $grab["PROPERTIES"]["PRICE"];
        $arResult["SEARCH"][$key]["PROPERTIES"]["STOCK_COUNT"] = $grab["PROPERTIES"]["STOCK_COUNT"];

        $arResult["SEARCH"][$key]["IMG"] = $img;
    }
}

