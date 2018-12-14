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
	<div id="slideshow-b" class="slideshow banners">
	<div>
		<?# TODO: поставить ссылку на iblock?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
					<a href="<?=$arItem["PROPERTY_HREF_VALUE"]?>"><img
						class="detail_picture"
						border="0"
						src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
						width="<?=$arItem["DETAIL_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["DETAIL_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
	<?endforeach;?>
	</div>
	</div>
<script type="text/javascript"><!--
    domReady(function () {
        $('#slideshow-b > div').nivoSlider({
			effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
			animSpeed: 400,                 // Slide transition speed
			pauseTime: 6000,                // How long each slide will show
			startSlide: 0,                  // Set starting Slide (0 index)
			directionNav: true,             // Next & Prev navigation
			controlNav: true,               // 1,2,3... navigation
			controlNavThumbs: false,        // Use thumbnails for Control Nav
			pauseOnHover: true,             // Stop animation while hovering
			manualAdvance: false,           // Force manual transitions
			prevText: ' ',               // Prev directionNav text
			nextText: ' ',               // Next directionNav text
			randomStart: false,             // Start on a random slide
			beforeChange: function () {
			},     // Triggers before a slide transition
			afterChange: function () {
			},      // Triggers after a slide transition
			slideshowEnd: function () {
			},     // Triggers after all slides have been shown
			lastSlide: function () {
			},        // Triggers when last slide is shown
			afterLoad: function () {
			}         // Triggers when slider has loaded
		});
    });
    --></script>