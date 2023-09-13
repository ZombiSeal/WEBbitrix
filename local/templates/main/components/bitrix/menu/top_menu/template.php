<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
require "result_modify.php";
?>
<?php if (!empty($arResult)): ?>
    <ul class="header__menu">
        <?php foreach ($arResult as $item): ?>
            <?php if (!empty($item['subitems'])): ?>
                <li class="has-children">
            <?php else: ?>
                <li>
            <?php endif; ?>
                <a href="<?=$item['LINK']?>"> <?=$item['TEXT']?> </a>
                <?php if (!empty($item['subitems'])): ?>
                    <ul class="sub-menu">
                        <?php foreach ($item['subitems'] as $subitem): ?>
                            <li>
                                <a href="<?= $subitem['LINK']; ?>?sort=id&method=asc"><?=$subitem['TEXT'] ?? '';?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
