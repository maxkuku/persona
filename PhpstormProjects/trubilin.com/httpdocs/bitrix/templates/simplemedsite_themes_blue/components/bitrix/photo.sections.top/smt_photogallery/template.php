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
<?$countSection = 0;?>
<?foreach($arResult["SECTIONS"] as $arSection):?>
	<?
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_ADD"), array('ICON' => 'bx-context-toolbar-create-icon'));
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction('section_'.$arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')));
	?>
	<section class="smt-widget<?=($countSection)?'':' smt-widget_no-margin'?>">
		<header>
			<h2 class="smt-widget__header smt-widget__header_normal" id="<?=$this->GetEditAreaId('section_'.$arSection['ID']);?>"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></h2>
		</header>
		<div class="smt-widget__content">
			<?if(!empty($arSection["ITEMS"])):?>
			<div class="smt-photo-gallery">
				<div class="container-fluid container-fluid_no-padding">
				<? $count = 0; ?>
				<? $lineCount = $arParams["LINE_ELEMENT_COUNT"]; ?>
				<?foreach($arSection["ITEMS"] as $arItem):?>
				<?if(is_array($arItem)):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>
				<?if($count%$lineCount == 0):?>
					<div class="row">
				<?endif;?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="smt-photo-gallery__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="smt-photo-item"><?if(is_array($arItem["PICTURE"])):?><a class="smt-photo-item__image-content" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"><img
											class="smt-photo-item__image"
											src="<?=$arItem["PICTURE"]["SRC"]?>"
											width="<?=$arItem["PICTURE"]["WIDTH"]?>"
											height="<?=$arItem["PICTURE"]["HEIGHT"]?>"
											alt="<?=$arItem["PICTURE"]["ALT"]?>"
											title="<?=$arItem["PICTURE"]["TITLE"]?>"
										/><div class="smt-photo-item__over"><span class="smt-photo-item__icon glyphicon glyphicon-zoom-in"></span></div></a>
								<?endif?>
								<div class="smt-photo-item__content">
									<div class="smt-photo-item__text">
										<?=$arItem["NAME"]?><?if($arParams["USE_RATING"] && $arItem["PROPERTIES"]["rating"]["VALUE"]) echo "(".$arItem["PROPERTIES"]["rating"]["VALUE"].")"?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<? $count +=1; ?>
					<?if($count%2 == 0):?>
						<div class="clearfix visible-sm-block"></div>
					<?endif?>
					<?if($count%$lineCount == 0):?>
						</div>
					<?endif;?>
				<?endif;?>
				<?endforeach?>
				<?if($count%$lineCount != 0):?>
				</div>
				<?endif;?>
				</div>
			</div>
			<?endif?>
		</div>
		<?if(!empty($arSection["ITEMS"])):?>
		<div class="smt-widget__pagination text-center">
			<a class="btn smt-btn-border smt-btn-sm text-uppercase" href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=GetMessage("SMT_BPSTC_ALL_PHOTO")?></a>
		</div>
		<?endif?>
	</section>
<?$countSection += 1;?>
<?endforeach;?>

