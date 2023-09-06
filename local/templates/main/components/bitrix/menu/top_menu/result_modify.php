<?php
$arPrepItems = [];
if (!empty($arResult)) {
    foreach ($arResult as $key => $item) {
        if ($item['DEPTH_LEVEL'] === 1) {
            $arPrepItems[] = $item;
        } else {
            $keyArr = array_keys($arPrepItems);
            $lastItem = $keyArr[count($keyArr) - 1];
            $arPrepItems[$lastItem]['subitems'][] = $item;
        }
    }
}
$arResult = $arPrepItems;
