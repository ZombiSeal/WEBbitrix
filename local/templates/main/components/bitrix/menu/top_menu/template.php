<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
require "result_modify.php";
?>


<?php if (!empty($arResult)): ?>

        <?php foreach ($arResult as $item): ?>
            <?php if (!empty($item['subitems'])): ?>
                <li class="has-children">
            <?php else: ?>
                <li>
            <?php endif; ?>
                <?php if(!empty($item['subitems'])) $item['LINK'] = '#'?>
                <a href="<?=$item['LINK']?>"> <?=$item['TEXT']?> </a>
                <?php if (!empty($item['subitems'])): ?>
                    <ul class="sub-menu">
                        <?php foreach ($item['subitems'] as $subitem): ?>
                            <li>
                                <a href="<?= $subitem['LINK']; ?>"><?=$subitem['TEXT'] ?? '';?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

<?php endif; ?>
