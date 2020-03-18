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
$this->setFrameMode(true);
?>
<div class="row">
<? $count = 0; ?>
<? $topCount = count($arResult["SECTIONS"]); ?>
<? $lineCount = ceil($topCount/4); ?>
<? $col = 0; ?>

<?foreach ($arResult["SECTIONS"] as $arSection):?>
<?
$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
?>
<?if($count%$lineCount == 0):?>
    <div class="col-md-3 col-sm-6 col-xs-6">
        <ul class="smt-list smt-list_arrow">
<?endif;?>
            <li id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
                <a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a>
            </li>
<? $count +=1; ?>
<?if($count%$lineCount == 0):?>
        </ul>
    </div>
    <?if ($col < 3) { $col += 1; } else { $col = 0; } ?>
    <? $topCount = count($arResult["SECTIONS"]) - $count; ?>
    <? $lineCount = ceil($topCount/(4-$col)); ?>
    <? if (!$lineCount) $lineCount = 1; ?>
<?endif;?>
<?endforeach;?>
<?if($count%$lineCount != 0):?>
        </ul>
    </div>
<?endif;?>
</div>

