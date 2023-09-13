<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);

$templateData = array(
    'TEMPLATE_THEME' => $this->GetFolder() . '/themes/' . $arParams['TEMPLATE_THEME'] . '/colors.css',
    'TEMPLATE_CLASS' => 'bx-' . $arParams['TEMPLATE_THEME']
);

//if (isset($templateData['TEMPLATE_THEME'])) {
//    $this->addExternalCss($templateData['TEMPLATE_THEME']);
//}
//$this->addExternalCss("/bitrix/css/main/bootstrap.css");
//$this->addExternalCss("/bitrix/css/main/font-awesome.css");

?>
<div class="width-25 aside mobile-filters">

    <form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action=""
          method="get">
        <div class="aside__filter accordion">
            <div class="aside__filter__item btn-wr mob-hidden">
                <a class="btn gray" href="#"><?= GetMessage("CT_BCSF_DEL_FILTER") ?></a> <!-- Сброс фильтра ???? -->
            </div>
            <? foreach ($arResult["HIDDEN"] as $arItem): ?>
                <input type="hidden" name="<? echo $arItem["CONTROL_NAME"] ?>" id="<? echo $arItem["CONTROL_ID"] ?>"
                       value="<? echo $arItem["HTML_VALUE"] ?>"/>
            <? endforeach; ?>
            <?
            //not prices
            foreach ($arResult["ITEMS"] as $key => $arItem) {
                if (
                    empty($arItem["VALUES"])
                    || isset($arItem["PRICE"])
                )
                    continue;

                if (
                    $arItem["DISPLAY_TYPE"] === SectionPropertyTable::NUMBERS_WITH_SLIDER
                    && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                )
                    continue;
                ?>

                <div class="aside__filter__item">
                    <div class="aside__filter__item__title accordion-item"><?= $arItem["NAME"] ?></div>
                    <div class="aside__filter__item__var data">
                        <?
                        $arCur = current($arItem["VALUES"]);
                        switch ($arItem["DISPLAY_TYPE"]) {
                            case SectionPropertyTable::NUMBERS_WITH_SLIDER://NUMBERS_WITH_SLIDER
                                ?>
                                <div class="filter__attrs cr-filter__price">
                                    <dl class="b-filter-attr j-slider_range" from="20" to="1500">
                                        <dd class="filter-attr__value slider-input">
                                            <div class="filter__textlabel slider-input__left">
                                                <span class="dscr"><?= GetMessage("CT_BCSF_FILTER_FROM") ?></span>
                                                <span class="g-form__inputwrap">
														<input class="g-form__text" name="filter[price][from]"
                                                               value="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>"
                                                               maxlength="11" placeholder="<?= $arItem["VALUES"]["MIN"]["VALUE"] ?>" type="text">
													</span>
                                            </div>
                                            <div class="filter__textlabel slider-input__right">
                                                <span class="dscr"><?= GetMessage("CT_BCSF_FILTER_TO") ?></span>
                                                <span class="g-form__inputwrap">
														<input class="g-form__text" name="filter[price][to]"
                                                               maxlength="11" placeholder="<?= $arItem["VALUES"]["MAX"]["VALUE"] ?>" type="text">
													</span>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>

                                <?
                                break;
                            case SectionPropertyTable::NUMBERS://NUMBERS
                                ?>
                                <div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
                                    <i class="bx-ft-sub"><?= GetMessage("CT_BCSF_FILTER_FROM") ?></i>
                                    <div class="bx-filter-input-container">
                                        <input
                                                class="min-price"
                                                type="text"
                                                name="<? echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                                id="<? echo $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                                value="<? echo $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?>"
                                                size="5"
                                                onkeyup="smartFilter.keyup(this)"
                                        />
                                    </div>
                                </div>
                                <div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
                                    <i class="bx-ft-sub"><?= GetMessage("CT_BCSF_FILTER_TO") ?></i>
                                    <div class="bx-filter-input-container">
                                        <input
                                                class="max-price"
                                                type="text"
                                                name="<? echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                                id="<? echo $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                                value="<? echo $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?>"
                                                size="5"
                                                onkeyup="smartFilter.keyup(this)"
                                        />
                                    </div>
                                </div>
                                <?
                                break;
                            case SectionPropertyTable::CHECKBOXES_WITH_PICTURES://CHECKBOXES_WITH_PICTURES
                                ?>
                                <div class="col-xs-12">
                                    <div class="bx-filter-param-btn-inline">
                                        <? foreach ($arItem["VALUES"] as $val => $ar): ?>
                                            <input
                                                    style="display: none"
                                                    type="checkbox"
                                                    name="<?= $ar["CONTROL_NAME"] ?>"
                                                    id="<?= $ar["CONTROL_ID"] ?>"
                                                    value="<?= $ar["HTML_VALUE"] ?>"
                                                <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                            />
                                            <?
                                            $class = "";
                                            if ($ar["CHECKED"])
                                                $class .= " bx-active";
                                            if ($ar["DISABLED"])
                                                $class .= " disabled";
                                            ?>
                                            <label for="<?= $ar["CONTROL_ID"] ?>"
                                                   data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                   class="bx-filter-param-label <?= $class ?>"
                                                   onclick="smartFilter.keyup(BX('<?= CUtil::JSEscape($ar["CONTROL_ID"]) ?>')); BX.toggleClass(this, 'bx-active');">
												<span class="bx-filter-param-btn bx-color-sl">
													<? if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])): ?>
                                                        <span class="bx-filter-btn-color-icon"
                                                              style="background-image:url('<?= $ar["FILE"]["SRC"] ?>');"></span>
                                                    <? endif ?>
												</span>
                                            </label>
                                        <? endforeach ?>
                                    </div>
                                </div>
                                <?
                                break;
                            case SectionPropertyTable::CHECKBOXES_WITH_PICTURES_AND_LABELS://CHECKBOXES_WITH_PICTURES_AND_LABELS
                                ?>
                                <div class="col-xs-12">
                                    <div class="bx-filter-param-btn-block">
                                        <? foreach ($arItem["VALUES"] as $val => $ar): ?>
                                            <input
                                                    style="display: none"
                                                    type="checkbox"
                                                    name="<?= $ar["CONTROL_NAME"] ?>"
                                                    id="<?= $ar["CONTROL_ID"] ?>"
                                                    value="<?= $ar["HTML_VALUE"] ?>"
                                                <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                            />
                                            <?
                                            $class = "";
                                            if ($ar["CHECKED"])
                                                $class .= " bx-active";
                                            if ($ar["DISABLED"])
                                                $class .= " disabled";
                                            ?>
                                            <label for="<?= $ar["CONTROL_ID"] ?>"
                                                   data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                   class="bx-filter-param-label<?= $class ?>"
                                                   onclick="smartFilter.keyup(BX('<?= CUtil::JSEscape($ar["CONTROL_ID"]) ?>')); BX.toggleClass(this, 'bx-active');">
												<span class="bx-filter-param-btn bx-color-sl">
													<? if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])): ?>
                                                        <span class="bx-filter-btn-color-icon"
                                                              style="background-image:url('<?= $ar["FILE"]["SRC"] ?>');"></span>
                                                    <? endif ?>
												</span>
                                                <span class="bx-filter-param-text"
                                                      title="<?= $ar["VALUE"]; ?>"><?= $ar["VALUE"]; ?><?
                                                    if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
                                                        ?> (<span
                                                            data-role="count_<?= $ar["CONTROL_ID"] ?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
                                                    endif; ?></span>
                                            </label>
                                        <? endforeach ?>
                                    </div>
                                </div>
                                <?
                                break;
                            case SectionPropertyTable::DROPDOWN://DROPDOWN
                                $checkedItemExist = false;
                                ?>
                                <div class="col-xs-12">
                                    <div class="bx-filter-select-container">
                                        <div class="bx-filter-select-block"
                                             onclick="smartFilter.showDropDownPopup(this, '<?= CUtil::JSEscape($key) ?>')">
                                            <div class="bx-filter-select-text" data-role="currentOption">
                                                <?
                                                foreach ($arItem["VALUES"] as $val => $ar) {
                                                    if ($ar["CHECKED"]) {
                                                        echo $ar["VALUE"];
                                                        $checkedItemExist = true;
                                                    }
                                                }
                                                if (!$checkedItemExist) {
                                                    echo GetMessage("CT_BCSF_FILTER_ALL");
                                                }
                                                ?>
                                            </div>
                                            <div class="bx-filter-select-arrow"></div>
                                            <input
                                                    style="display: none"
                                                    type="radio"
                                                    name="<?= $arCur["CONTROL_NAME_ALT"] ?>"
                                                    id="<? echo "all_" . $arCur["CONTROL_ID"] ?>"
                                                    value=""
                                            />
                                            <? foreach ($arItem["VALUES"] as $val => $ar): ?>
                                                <input
                                                        style="display: none"
                                                        type="radio"
                                                        name="<?= $ar["CONTROL_NAME_ALT"] ?>"
                                                        id="<?= $ar["CONTROL_ID"] ?>"
                                                        value="<? echo $ar["HTML_VALUE_ALT"] ?>"
                                                    <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                                />
                                            <? endforeach ?>
                                            <div class="bx-filter-select-popup" data-role="dropdownContent"
                                                 style="display: none;">
                                                <ul>
                                                    <li>
                                                        <label for="<?= "all_" . $arCur["CONTROL_ID"] ?>"
                                                               class="bx-filter-param-label"
                                                               data-role="label_<?= "all_" . $arCur["CONTROL_ID"] ?>"
                                                               onclick="smartFilter.selectDropDownItem(this, '<?= CUtil::JSEscape("all_" . $arCur["CONTROL_ID"]) ?>')">
                                                            <? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
                                                        </label>
                                                    </li>
                                                    <?
                                                    foreach ($arItem["VALUES"] as $val => $ar):
                                                        $class = "";
                                                        if ($ar["CHECKED"])
                                                            $class .= " selected";
                                                        if ($ar["DISABLED"])
                                                            $class .= " disabled";
                                                        ?>
                                                        <li>
                                                            <label for="<?= $ar["CONTROL_ID"] ?>"
                                                                   class="bx-filter-param-label<?= $class ?>"
                                                                   data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                                   onclick="smartFilter.selectDropDownItem(this, '<?= CUtil::JSEscape($ar["CONTROL_ID"]) ?>')"><?= $ar["VALUE"] ?></label>
                                                        </li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?
                                break;
                            case SectionPropertyTable::DROPDOWN_WITH_PICTURES_AND_LABELS://DROPDOWN_WITH_PICTURES_AND_LABELS
                                ?>
                                <div class="col-xs-12">
                                    <div class="bx-filter-select-container">
                                        <div class="bx-filter-select-block"
                                             onclick="smartFilter.showDropDownPopup(this, '<?= CUtil::JSEscape($key) ?>')">
                                            <div class="bx-filter-select-text fix" data-role="currentOption">
                                                <?
                                                $checkedItemExist = false;
                                                foreach ($arItem["VALUES"] as $val => $ar):
                                                    if ($ar["CHECKED"]) {
                                                        ?>
                                                        <? if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])): ?>
                                                            <span class="bx-filter-btn-color-icon"
                                                                  style="background-image:url('<?= $ar["FILE"]["SRC"] ?>');"></span>
                                                        <? endif ?>
                                                        <span class="bx-filter-param-text">
																<?= $ar["VALUE"] ?>
															</span>
                                                        <?
                                                        $checkedItemExist = true;
                                                    }
                                                endforeach;
                                                if (!$checkedItemExist) {
                                                    ?><span class="bx-filter-btn-color-icon all"></span> <?
                                                    echo GetMessage("CT_BCSF_FILTER_ALL");
                                                }
                                                ?>
                                            </div>
                                            <div class="bx-filter-select-arrow"></div>
                                            <input
                                                    style="display: none"
                                                    type="radio"
                                                    name="<?= $arCur["CONTROL_NAME_ALT"] ?>"
                                                    id="<? echo "all_" . $arCur["CONTROL_ID"] ?>"
                                                    value=""
                                            />
                                            <? foreach ($arItem["VALUES"] as $val => $ar): ?>
                                                <input
                                                        style="display: none"
                                                        type="radio"
                                                        name="<?= $ar["CONTROL_NAME_ALT"] ?>"
                                                        id="<?= $ar["CONTROL_ID"] ?>"
                                                        value="<?= $ar["HTML_VALUE_ALT"] ?>"
                                                    <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                                />
                                            <? endforeach ?>
                                            <div class="bx-filter-select-popup" data-role="dropdownContent"
                                                 style="display: none">
                                                <ul>
                                                    <li style="border-bottom: 1px solid #e5e5e5;padding-bottom: 5px;margin-bottom: 5px;">
                                                        <label for="<?= "all_" . $arCur["CONTROL_ID"] ?>"
                                                               class="bx-filter-param-label"
                                                               data-role="label_<?= "all_" . $arCur["CONTROL_ID"] ?>"
                                                               onclick="smartFilter.selectDropDownItem(this, '<?= CUtil::JSEscape("all_" . $arCur["CONTROL_ID"]) ?>')">
                                                            <span class="bx-filter-btn-color-icon all"></span>
                                                            <? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
                                                        </label>
                                                    </li>
                                                    <?
                                                    foreach ($arItem["VALUES"] as $val => $ar):
                                                        $class = "";
                                                        if ($ar["CHECKED"])
                                                            $class .= " selected";
                                                        if ($ar["DISABLED"])
                                                            $class .= " disabled";
                                                        ?>
                                                        <li>
                                                            <label for="<?= $ar["CONTROL_ID"] ?>"
                                                                   data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                                   class="bx-filter-param-label<?= $class ?>"
                                                                   onclick="smartFilter.selectDropDownItem(this, '<?= CUtil::JSEscape($ar["CONTROL_ID"]) ?>')">
                                                                <? if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])): ?>
                                                                    <span class="bx-filter-btn-color-icon"
                                                                          style="background-image:url('<?= $ar["FILE"]["SRC"] ?>');"></span>
                                                                <? endif ?>
                                                                <span class="bx-filter-param-text">
																	<?= $ar["VALUE"] ?>
																</span>
                                                            </label>
                                                        </li>
                                                    <? endforeach ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?
                                break;
                            case SectionPropertyTable::RADIO_BUTTONS://RADIO_BUTTONS
                                ?>
                                <div class="col-xs-12">
                                    <div class="radio">
                                        <label class="bx-filter-param-label"
                                               for="<? echo "all_" . $arCur["CONTROL_ID"] ?>">
												<span class="bx-filter-input-checkbox">
													<input
                                                            type="radio"
                                                            value=""
                                                            name="<? echo $arCur["CONTROL_NAME_ALT"] ?>"
                                                            id="<? echo "all_" . $arCur["CONTROL_ID"] ?>"
                                                            onclick="smartFilter.click(this)"
                                                    />
													<span class="bx-filter-param-text"><? echo GetMessage("CT_BCSF_FILTER_ALL"); ?></span>
												</span>
                                        </label>
                                    </div>
                                    <? foreach ($arItem["VALUES"] as $val => $ar): ?>
                                        <div class="radio">
                                            <label data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                   class="bx-filter-param-label" for="<? echo $ar["CONTROL_ID"] ?>">
													<span class="bx-filter-input-checkbox <? echo $ar["DISABLED"] ? 'disabled' : '' ?>">
														<input
                                                                type="radio"
                                                                value="<? echo $ar["HTML_VALUE_ALT"] ?>"
                                                                name="<? echo $ar["CONTROL_NAME_ALT"] ?>"
                                                                id="<? echo $ar["CONTROL_ID"] ?>"
															<? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
															onclick="smartFilter.click(this)"
                                                        />
														<span class="bx-filter-param-text"
                                                              title="<?= $ar["VALUE"]; ?>"><?= $ar["VALUE"]; ?><?
                                                            if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
                                                                ?>&nbsp;(<span
                                                                    data-role="count_<?= $ar["CONTROL_ID"] ?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
                                                            endif; ?></span>
													</span>
                                            </label>
                                        </div>
                                    <? endforeach; ?>
                                </div>
                                <?
                                break;
                            case SectionPropertyTable::CALENDAR://CALENDAR
                                ?>
                                <div class="col-xs-12">
                                    <div class="bx-filter-parameters-box-container-block">
                                        <div class="bx-filter-input-container bx-filter-calendar-container">
                                            <? $APPLICATION->IncludeComponent(
                                                'bitrix:main.calendar',
                                                '',
                                                array(
                                                    'FORM_NAME' => $arResult["FILTER_NAME"] . "_form",
                                                    'SHOW_INPUT' => 'Y',
                                                    'INPUT_ADDITIONAL_ATTR' => 'class="calendar" placeholder="' . FormatDate("SHORT", $arItem["VALUES"]["MIN"]["VALUE"]) . '" onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
                                                    'INPUT_NAME' => $arItem["VALUES"]["MIN"]["CONTROL_NAME"],
                                                    'INPUT_VALUE' => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
                                                    'SHOW_TIME' => 'N',
                                                    'HIDE_TIMEBAR' => 'Y',
                                                ),
                                                null,
                                                array('HIDE_ICONS' => 'Y')
                                            ); ?>
                                        </div>
                                    </div>
                                    <div class="bx-filter-parameters-box-container-block">
                                        <div class="bx-filter-input-container bx-filter-calendar-container">
                                            <? $APPLICATION->IncludeComponent(
                                                'bitrix:main.calendar',
                                                '',
                                                array(
                                                    'FORM_NAME' => $arResult["FILTER_NAME"] . "_form",
                                                    'SHOW_INPUT' => 'Y',
                                                    'INPUT_ADDITIONAL_ATTR' => 'class="calendar" placeholder="' . FormatDate("SHORT", $arItem["VALUES"]["MAX"]["VALUE"]) . '" onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
                                                    'INPUT_NAME' => $arItem["VALUES"]["MAX"]["CONTROL_NAME"],
                                                    'INPUT_VALUE' => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
                                                    'SHOW_TIME' => 'N',
                                                    'HIDE_TIMEBAR' => 'Y',
                                                ),
                                                null,
                                                array('HIDE_ICONS' => 'Y')
                                            ); ?>
                                        </div>
                                    </div>
                                </div>
                                <?
                                break;
                            default://CHECKBOXES
                                ?>
                                <ul class="checkbox">
                                    <? foreach ($arItem["VALUES"] as $val => $ar): ?>
                                        <li>
                                            <label>
                                                <input id="<? echo $ar["CONTROL_ID"] ?>"
                                                       name="<? echo $ar["CONTROL_NAME"] ?>"
                                                       value="<? echo $ar["HTML_VALUE"] ?>"
                                                       type="checkbox"
                                                       onclick="smartFilter.click(this)"
                                                    <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                                >
                                                <span><?= $ar["VALUE"]; ?></span>
                                            </label>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            <?
                        }
                        ?>
                    </div>
                </div>
                <?
            }
            ?>
            <div class="aside__filter__item btn-wr mob-hidden">
<!--                <a class="btn gray" href="#">--><?php //= GetMessage("CT_BCSF_DEL_FILTER") ?><!--</a> <!-- Сброс фильтра ???? -->
                <input
                        class="btn gray"
                        type="submit"
                        id="del_filter"
                        name="del_filter"
                        value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
                />
                <div class="bx-filter-popup-result <?if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
                    <?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.(int)($arResult["ELEMENT_COUNT"] ?? 0).'</span>'));?>
                    <span class="arrow"></span>
                    <br/>
                    <a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
    $.getScript("/local/templates/main/assets/js/common.js");
    $.getScript("/local/templates/main/assets/js/custom-ui-slider.js");
</script>

