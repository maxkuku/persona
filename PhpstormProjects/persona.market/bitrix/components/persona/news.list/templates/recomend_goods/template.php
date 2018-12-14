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

<div class="panel panel-default box-product recomend">
	<div class="panel-heading"><?=GetMessage('HEADING_RECOMEND')?></div>
	<div id="xds-featured0" class="panel-body owl-carousel product-carousel">
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
			</div>
			<div class="caption">
				<div class="name" style="word-wrap: break-word;">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=strip_tags(TruncateText($arItem['PREVIEW_TEXT'], 75))?>... </a>
				</div>
				<div class="price">
					<?=$arItem['PROPERTIES']['price']['VALUE']?> <span class="sr-only"><?=GetMessage("RUB")
						?></span><span
						class="roboto-forced ruble" aria-hidden="true"
						style="display:none;"></span>
                    <button class="btn btn-addtocart qview" onclick="qview('<?=$arItem['ID']?>')"
                            data-toggle="tooltip" title=""
                            data-original-title="<?=GetMessage('QUICK_VIEW')?>">
                        <i class="fa fa-eye fa-fw"></i>
                    </button>
                </div>
			</div>
			<div class="buttons">
				<div class="btn-group dropup">
					<button type="button" class="btn btn-addtocart "
					        onclick="cart.add('<?=$arItem['ID']?>');" title="В корзину"><i
							class="fa fa-plus fa-fw"></i><?=GetMessage('IN_BASKET')?>
					</button>
					<button class="btn btn-addtocart button-preorder<?=$arItem['ID']?>"
					        type="button" style=" display: none; "
					        onclick="addPreOrder('', '<?=$arItem['ID']?>');"><i
							class="fa fa-bell"></i> <span><?=GetMessage('MENTION')?></span></button>

					<button type="button" class="btn btn-addtocart dropdown-toggle"
					        data-toggle="dropdown">
						<i class="fa fa-angle-down caretalt"></i>
					</button>
					<ul class="dropdown-menu addtocart-additional">
						<li><a onclick="fastorder('<?=$arItem['ID']?>')"><i
									class="fa fa-bolt fa-fw"></i><?=GetMessage('FAST_ORDER')?></a></li>
						<li><a onclick="wishlist.add('<?=$arItem['ID']?>');return false;"
						       title="В закладки"><i
									class="fa fa-heart-o fa-fw"></i><?=GetMessage('IN_BOOKMARKS')?></a></li>
						<!--li><a rel="nofollow"
						       onclick="compare.add('<?=$arItem['ID']?>');return false;"
						       title="В сравнение"><i
									class="fa fa-balance-scale fa-fw"></i><?=GetMessage('IN_COMPARE')?></a></li-->
					</ul>
				</div>
			</div>
		</div>

<?endforeach;?>
		
	</div>
	<script type="text/javascript">
		domReady(function () {
			$('#xds-featured0').owlCarousel({
				responsiveBaseWidth: '#xds-featured0',
				itemsCustom: [[0, 1], [448, 2], [668, 3], [848, 4], [1000, 5]],
				theme: 'product-carousel',
				navigation: true,
				slideSpeed: 200,
				paginationSpeed: 300,
				stopOnHover: true,
				touchDrag: true,
				mouseDrag: false,
				navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
				pagination: false,
				autoPlay: false
			});
			$('#xds-featured-clock-m0-p115').countdown('2018-08-31', function (event) {
				$(this).html(event.strftime('%D дн. %H:%M:%S'));
			});
		});
	</script>
</div>