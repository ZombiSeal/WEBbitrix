<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<div class="container">
    <?php
    $APPLICATION->IncludeComponent("bitrix:catalog.section.list","",
        Array(
            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
            "VIEW_MODE" => "TILE",
            "SHOW_PARENT_NAME" => "Y",
            "IBLOCK_TYPE" => "catalog",
            "IBLOCK_ID" => "5",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_CODE" => "",
            "SECTION_URL" => "",
            "COUNT_ELEMENTS" => "Y",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
            "TOP_DEPTH" => "2",
            "SECTION_FIELDS" => "",
            "SECTION_USER_FIELDS" => "",
            "ADD_SECTIONS_CHAIN" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_NOTES" => "",
            "CACHE_GROUPS" => "Y"
        )
    );?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>