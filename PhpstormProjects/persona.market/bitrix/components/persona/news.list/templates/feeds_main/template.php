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
<div id="cmswidget-12" class="cmswidget">
	<div class="panel panel-default box-product feeds">
		<div class="panel-heading"><?=GetMessage('HEADING_FEEDS')?></div>
		<div id="record_columns-12" class="panel-body owl-carousel product-carousel">


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<div class="review_item product-item">
			<div class="review_content">
				<div>
					<div class="blog-author"><?=$arItem['NAME']?></div>
					<div class="rating comment_rating">
              <span class="stars">
	              <?for($i=0,$j=1; $i<$arItem['PROPERTIES']['your_rating']['VALUE']; $i++,$j++){?>
	              <?if($j<=$arItem['PROPERTIES']['your_rating']['VALUE']){?>
		              <i class="fa fa-star active"></i>
	              <?}
		              else{?>
			              <i class="fa fa-star"></i>
		              <?}?>
	              <?}?>
              </span>
					</div>
				</div>
				<div class="review_text">
					<?=$arItem['PREVIEW_TEXT']?>
				</div>
				<div class="review_further">
					<a href="<?=$arItem['URL']?>#commentlink_127_3"
					   class="red-link seocms_further "
					   title="<?=$arItem['GOOD']?>"
					   data-cmswidget="12">Читать полностью...</a>
				</div>
			</div>
		</div>

<?endforeach;?>

	</div><!--owl-wrapper-->
				<script type="text/javascript">
				domReady(function () {
					$('#record_columns-12').owlCarousel({
						responsiveBaseWidth: '#record_columns-12',
						itemsCustom: [[0, 1], [448, 1], [464, 2], [484, 2], [668, 3], [848, 4], [1000, 4]],
						theme: 'product-carousel',
						autoPlay: false,
						navigation: true,
						pagination: false,
						touchDrag: true,
						mouseDrag: false,
						navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
					});
				});
			</script>
			</div>
		</div>
