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
IncludeTemplateLangFile(__FILE__);

foreach($arResult["ITEMS"] as $arItem):?>
	<?#pr($arItem)?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="content-records">
		<div class="image-box">
			<div class="blog-image">
				<div class="image">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"
					   title="<?=$arItem['NAME']?>"
					   class="modal_8 " data-cmswidget="8" data-template_modal="">
                        <? if ( is_file ( $arItem['PREVIEW_PICTURE']['SRC'] ) ) { ?>
                            <img
                                    src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
                                    alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"
                                    title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>"
                                    class="img-responsive">
                        <? }
                        else { ?>
                            <img src="/upload/resize_cache/iblock/51e/248_260_1/Persona_sign_gold_01_1.jpg" alt="<?=$arItem['NAME']?>"/>
                        <? } ?>
					</a>
				</div>
			</div>
		</div>
		<div class="caption-box">
			<div class="name">
				<div class="title_record_widget">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="modal_8 "
					   data-cmswidget="8" data-template_modal=""><?=$arItem['NAME']?></a>
				</div>
			</div>
			<div class="article-details">
				<div class="article-detail w-news-date">
					<i class="fa fa-clock-o fa-fw"></i>&nbsp;<?$arParams["DATE_CREATE"]="j F Y";
					echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp
					($arElement["DATE_CREATE"], CSite::GetDateFormat()));?>
				</div>
				<?if($arItem['SHOW_COUNTER']):?>
				<div class="article-detail w-news-viewed">
					<i class="fa fa-eye fa-fw"></i>&nbsp;<span
						title="Просмотров:"><?=$arItem['SHOW_COUNTER']?></span>
				</div>
				<?endif?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?endforeach;