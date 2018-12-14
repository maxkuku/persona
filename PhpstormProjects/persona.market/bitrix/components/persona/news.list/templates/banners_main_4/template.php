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

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$res = CIBlockSection::GetByID($arItem["PROPERTIES"]["href"]["VALUE"]);
		if($ar_res = $res->GetNext())
			$sec_url = $ar_res['SECTION_PAGE_URL'];
		?>
					<a href="<?=$sec_url?>" title="<?=$arItem["NAME"]?>"><img
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
        $('#slideshow-b > div').owlCarousel({
            items: 4,
            autoPlay: 3000,
            navigation: true,
            theme: 'carousel',
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            pagination: false
        });
    });
    --></script>