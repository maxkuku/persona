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
?>
<div class="sertif-outer prod">
<div class="sertif-detail" style="background-image:url(<?=$arResult["ITEMS"][0]["FIELDS"]["DETAIL_PICTURE"]["SRC"]?>)" alt="<?=$arResult["ITEMS"][0]["NAME"]?>">
<div id="cur_pr" class="detail-price"><?=$arResult["ITEMS"][0]["PROPERTIES"]["price"]["VALUE"]?></div>
</div>


<div class="sertif-list mCustomScrollbar">
<?foreach($arResult["ITEMS"] as $i => $arItem):?>
<div class="panel panel-default box-product sertif-prod <?=($i==0)?"active":""?>">
	<div class="panel-heading">
	<a><?=$arItem['NAME']?></a>
	</div>
	<div id="xds-special<?=$arItem['ID']?>" class="panel-body sertifikat" style="cursor:pointer">
		<div class="product-item">
			<div class="image">
				<a class="detail_view" data-detail="<?=$arResult["ITEMS"][$i]["FIELDS"]["DETAIL_PICTURE"]["SRC"]?>"
					title="<?=$arItem['NAME']?>" data-price="<?=$arItem['PROPERTIES']['price']['VALUE']?>">
					<img
						src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
						alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"
						title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>"
						class="img-responsive">
				</a>
			</div>
            <?if(strlen($arItem['PREVIEW_TEXT'])){?>
			<div class="caption">
				<div class="capt" style="word-wrap: break-word;">
					<?=$arItem['PREVIEW_TEXT']?>
				</div>
			</div>
            <?}?>
		</div>
	</div>
</div>
<?endforeach;?>
</div>
</div>