<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

?>
<div class="single-product">
    <div class="single-product__top row">
        <div class="width-48">
            <div class="tovar-picts">
                <!-- Слайдер миниатюр -->
                <div class="tovar-picts__slider-wr">
                    <div class="slider-for">
                        <?php
                        if (!empty($arResult['MORE_PHOTO'])):
                            foreach ($arResult['MORE_PHOTO'] as $PHOTO):
                                ?>
                                <div><a rel="example_group" href="<?= $PHOTO['SRC'] ?>" class="js-img-modal"
                                        title=""><img
                                                src="<?= $PHOTO['SRC'] ?>" alt=""/></a></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="slider-nav">
                        <?php
                        if (!empty($arResult['MORE_PHOTO'])):
                            foreach ($arResult['MORE_PHOTO'] as $PHOTO):
                                ?>
                                <div><img src="<?= $PHOTO['SRC'] ?>" alt=""/></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- END Слайдер миниатюр -->
            </div>
        </div>
        <div class="width-52">
            <h1 class="mob-hidden"> <?= $arResult['NAME'] ?> </h1>
            <div class="sku">Артикул: <span><?= $arResult['PROPERTIES']['ARTICLE']['VALUE']; ?></span></div>

            <?php if (!empty($arResult['DISPLAY_PROPERTIES'])): ?>
                <div class="short-desc">
                    <h3><?= GetMessage("SHORT_DESCRIPTION"); ?></h3>
                    <ul class="short-desc__list">
                        <?php foreach ($arResult['DISPLAY_PROPERTIES'] as $property): ?>
                            <?php if (isset($arParams['MAIN_BLOCK_PROPERTY_CODE'][$property['CODE']])): ?>
                                <li><?= $property['NAME']; ?>: <span><?= $property['VALUE']; ?></span></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="price">
                <h3><?= GetMessage("PRICE"); ?> </h3>
                <ul class="price__list">
                    <li>Прейскурант, безналичный
                        <div class="right"><?= $arResult['PROPERTIES']['PRICE']['VALUE']; ?> б.р.</div>
                    </li>
                    <li>Предоплата, безналичный <span>-15%</span>
                        <div class="right"><?= $arResult['PROPERTIES']['PRICE']['VALUE']; ?> б.р</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="single-product__options">
        <?php if (!empty($arResult['DETAIL_TEXT'])): ?>
            <div class="long-desc">
                <h2><?= GetMessage("DESCRIPTION"); ?></h2>
                <p> <?= $arResult['DETAIL_TEXT'] ?> </p>
            </div>
        <?php endif; ?>

        <?php if (!empty($arResult['DISPLAY_PROPERTIES'])): ?>

            <div class="options-data">
                <h2><?= GetMessage("PROPERTIES"); ?></h2>
                <ul class="options-data__list">
                    <?php foreach ($arResult['DISPLAY_PROPERTIES'] as $property): ?>
                        <li>
                            <div class="left"><?= $property['NAME']; ?>:</div>
                            <div class="right"><?= $property['VALUE']; ?></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        <?php endif; ?>

    </div>
</div>

