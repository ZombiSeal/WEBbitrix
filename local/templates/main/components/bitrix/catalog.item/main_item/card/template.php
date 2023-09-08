<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>
<?php
//echo "<pre>";
//var_dump($item['DISPLAY_PROPERTIES']);
//echo "<pre>";

?>
<div class="item">
    <a class="products-item" href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $productTitle ?>"
       data-entity="image-wrapper">
        <div class="products-item__pic">
            <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="">
        </div>
        <h2 class="products-item__title"><?= $item['NAME'] ?></h2>

        <?php if (!empty($item['DISPLAY_PROPERTIES'])): ?>
            <ul class="products-item__options" data-entity="props-block">
                <?php foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty): ?>
                    <li>
                                            <span class="left">
                                                <?= $displayProperty['NAME'] ?>
                                            </span>
                        <span class="right">
											<?= (is_array($displayProperty['DISPLAY_VALUE'])
                                                ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                                : $displayProperty['DISPLAY_VALUE']) ?>
										</span>
                    </li>

                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </a>
</div>