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
<div class="panel panel-default box-product actions">
	<div class="panel-heading"><a href="/catalog/specials/"><?=GetMessage('HEADING')?></a></div>
	<div id="xds-special0" class="panel-body page">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="product-item" data-artikul="<?=$arItem['PROPERTIES']['artikul']['VALUE']?>">
			<div class="image">
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>"
					title="<?=$arItem['NAME']?>">
					<img
						src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"
						alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"
						title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>"
						class="img-responsive">
				</a>
				<?$perc = $arItem['PROPERTIES']['sale']['VALUE'] * 100 / $arItem['PROPERTIES']['price']['VALUE']?>
				<div class="sticker st-sale with-date gradiented">-<?=round(100-$perc)?>%</div>
			</div>
			<div class="caption">
				<div class="name" style="word-wrap: break-word;">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=TruncateText($arItem['PREVIEW_TEXT'], 75)?>... </a>
				</div>
				<div class="price">
					<span class="price-old">&nbsp;<?=$arItem['PROPERTIES']['price']['VALUE']?> <span class="sr-only"><?=GetMessage("RUB")
							?></span>
						<span class="roboto-forced ruble" aria-hidden="true"
							  style="display:none;"></span>&nbsp;</span> <span
						class="price-new"><?=$arItem['PROPERTIES']['sale']['VALUE']?> <span class="sr-only"><?=GetMessage("RUB")
							?></span><span
							class="roboto-forced ruble" aria-hidden="true"
							style="display:none;"></span></span>
				</div>
				
			</div>
			<div class="buttons">
				<div class="btn-group dropup">
					<button type="button" class="btn btn-addtocart "
					        onclick="cart.add('<?=$arItem['ID']?>');" title="<?=GetMessage('IN_BASKET')?>"><i
							class="fa fa-plus fa-fw"></i><?=GetMessage('IN_BASKET')?>
					</button>
					<button class="btn btn-addtocart button-preorder<?=$arItem['ID']?>"
					        type="button" style=" display: none; "
					        onclick="addPreOrder('', '<?=$arItem['ID']?>');"><i
							class="fa fa-bell"></i> <span><?=GetMessage('MENTION')?></span></button>
					<button class="btn btn-addtocart" onclick="qview('<?=$arItem['ID']?>')"
					        data-toggle="tooltip" title=""
					        data-original-title="<?=GetMessage('QUICK_VIEW')?>">
						<i class="fa fa-eye fa-fw"></i>
					</button>
					<button type="button" class="btn btn-addtocart dropdown-toggle"
					        data-toggle="dropdown">
						<i class="fa fa-angle-down caretalt"></i>
					</button>
					<ul class="dropdown-menu addtocart-additional">
						<li><a onclick="fastorder('<?=$arItem['ID']?>')"><i
									class="fa fa-bolt fa-fw"></i><?=GetMessage('FAST_ORDER')?></a></li>
						<li><a onclick="wishlist.add('<?=$arItem['ID']?>');return false;"
						       title="В закладки">
                                <i class="fa fa-heart-o fa-fw"></i><?=GetMessage('IN_BOOKMARKS')?></a></li>
						<li><a rel="nofollow"
						       onclick="compare.add('<?=$arItem['ID']?>');return false;"
						       title="В сравнение">
                                <i class="fa fa-balance-scale fa-fw"></i><?=GetMessage('IN_COMPARE')?></a></li>
					</ul>
				</div>
			</div>
</div>
<?endforeach;?>
	</div>
</div>