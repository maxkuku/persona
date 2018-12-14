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
<div class="sertif-outer">
<div class="sertif-detail" style="background-image:url(<?=$arResult["ITEMS"][0]["FIELDS"]["DETAIL_PICTURE"]["SRC"]?>)" alt="<?=$arResult["ITEMS"][0]["NAME"]?>">
<div id="cur_pr" class="detail-price"><?=$arResult["ITEMS"][0]["PROPERTIES"]["price"]["VALUE"]?></div>
</div>


<div class="sertif-list">
<?foreach($arResult["ITEMS"] as $i => $arItem):?>
<div class="panel panel-default box-product sertif <?=($i==0)?"active":""?>">
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
						<div class="price-sert"><?=$arItem['PROPERTIES']['price']['VALUE']?></div>
				</a>
			</div>
			<div class="caption">
				<div class="capt" style="word-wrap: break-word;">
					<?=$arItem['PREVIEW_TEXT']?>
				</div>
				<div class="price">
					<span class="price-span">&nbsp;<?=$arItem['PROPERTIES']['price']['VALUE']?> <span class="sr-only"><?=GetMessage("RUB")
							?></span>
						<span class="roboto-forced ruble" aria-hidden="true"
							  style="display:none;"></span>&nbsp;</span>
				</div>
			</div>
			<!--div class="buttons">
				<div class="btn-group dropup">
					<button type="button" class="btn btn-addtocart"
					        onclick="cart.add('<?=$arItem['ID']?>');" title="<?=GetMessage('IN_BASKET')?>"><i
							class="fa fa-plus fa-fw"></i><?=GetMessage('IN_BASKET')?>
					</button>
				</div>
			</div-->
		</div>
	</div>
</div>
<?endforeach;?>
</div>
</div>