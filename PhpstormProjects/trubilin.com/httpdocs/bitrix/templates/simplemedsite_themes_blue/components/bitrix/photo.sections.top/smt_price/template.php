<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="smt-form">
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control smt-search-live" type="text" placeholder="<?=GetMessage('SMT_BPSC_PLACEHOLDER_LIVE_SEARCH')?>" name="smt_live_search">
        </div>
    </form>
</div>
<div class="panel-group smt-panel-group smt-panel-group_colored smt-panel-group_services">
<?$countSection = 0;
$dop = "N";?>
<?foreach($arResult["SECTIONS"] as $arSection):?>
	<?
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_ADD"), array('ICON' => 'bx-context-toolbar-create-icon'));
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction('section_'.$arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')));
	?>
    <?
    $isOpenSection = (isset($arSection["UF_OPEN"]) && $arSection["UF_OPEN"]) || $countSection == 0;
    ?>
    <div class="panel smt-panel-primary <?if($isOpenSection):?>smt-panel-primary_in<?endif?>">
        <div class="panel-heading">
            <div class="panel-title" id="<?=$this->GetEditAreaId('section_'.$arSection['ID']);?>"><a name="smt-accordion-primary-item-<?=$arSection['ID']?>"></a><a data-toggle="collapse" href="#smt-accordion-primary-item-<?=$arSection['ID']?>"><?=$arSection["NAME"]?></a></div>
        </div>
        <div class="panel-collapse collapse <?if($isOpenSection):?>in<?endif?>" id="smt-accordion-primary-item-<?=$arSection['ID']?>">
            <div class="panel-body">
					<? $dop = "N";
                    #echo "<div style='display:none'>";
					foreach($arSection["ITEMS"] as $pr){
					    if($pr['PROPERTIES']['DOP_PRICE']['VALUE'] != ''){
							$dop = "Y";
							#echo "prvalue - " . $pr['PROPERTIES']['DOP_PRICE']['VALUE'] . ", dop - " . $dop . "<br>";
						}
					}?>
					<?# echo "</div>"?>

                <table class="table table-striped table-hover smt-table smt-table_services">
                    <thead>
                    <tr>
						<?if($dop === "N"):?>
                        <th width="70%"><?=GetMessage("SMT_BPSC_HEADER_SERVICE")?></th>
                        <th width="30%"><?=GetMessage("SMT_BPSC_HEADER_PRICE")?> (<?=$arParams["CURRENCY"]?$arParams["CURRENCY"]:GetMessage("SMT_BPSC_HEADER_CURRENCY")?>)</th>
						<?else:?>
						<th width="60%"><?=GetMessage("SMT_BPSC_HEADER_SERVICE")?></th>
						<th width="20%">к.м.н (<?=$arParams["CURRENCY"]?$arParams["CURRENCY"]:GetMessage("SMT_BPSC_HEADER_CURRENCY")?>)</th>
						<th width="20%">профессор (<?=$arParams["CURRENCY"]?$arParams["CURRENCY"]:GetMessage("SMT_BPSC_HEADER_CURRENCY")?>)</th>
						<?endif?>
                    </tr>
                    </thead>
                    <tbody class="hideseek-data">
                    <?if(!empty($arSection["ITEMS"])):?>
                    <?foreach($arSection["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <td><?=$arItem["NAME"]?></td>
                        <td><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?></td>
						<?if($dop === "Y"):?>
						<td><?=$arItem["PROPERTIES"]["DOP_PRICE"]["VALUE"]?></td>
						<?endif?>
                    </tr>
                    <?endforeach?>
                    <?endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?$countSection += 1;
$dop = "N";?>
<?endforeach;?>
</div>
<script type="text/javascript">
    +function ($) {
        'use strict';

        $(document).ready(function () {
            var activeCollapse = $(location.hash);
            activeCollapse && activeCollapse.collapse('show');
        });
    }(jQuery);
</script>