<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)): ?>
    <ul class="footer__menu clearfix">
        <?php foreach ($arResult as $item): ?>
            <li>
                <a href="<?=$item['LINK']?>"> <?=$item['TEXT']?> </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
