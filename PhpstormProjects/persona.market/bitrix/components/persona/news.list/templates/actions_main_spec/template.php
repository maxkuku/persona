<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
#use \Bitrix\Conversion\Internals\MobileDetect;
CModule::IncludeModule("fileman");
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
<?$mob = 0;
/*$detect = new MobileDetect;
if($detect->isMobile()){
    $mob = 1;
}*/
if(CLightHTMLEditor::IsMobileDevice()){
    $mob = 1;
}

?>
<div class="wrapper_actions_line lione<?=$mob?>  <?=(!$mob)?"owl-carousel":""?> owl-theme" id="owl_actions">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <a href="/catalog/detail.php?ID=<?=$arItem['PROPERTIES']['to_good']['VALUE']?>" class="item_actions_line item" style="background: url('<?=$arItem['DETAIL_PICTURE']['SRC']?>') 100% center no-repeat;">
        <div class="item_actions_line_shadow"></div>
        <div class="item_actions_line_wrapper">
            <div class="actions_line_name"><span><?=$arItem['NAME']?></span></div> <!-- wrapper_actions_line -->
            <div class="actions_line_desc">
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <span class="detail_page_actions">подробнее</span>
        </div>
    </a>
<?endforeach;?>
</div>
<?if(!isMobile()):?>
	<script type="text/javascript">
			domReady(function () {
                $("#owl_actions").owlCarousel({
                    navigation: true,
                    navigationText:["",""],
                    autoPlay: 113000,
                    items : 6,
                    //itemsDesktop : [1199,4],
                    itemsDesktopSmall : [1200,4],
                    itemsMobile : [710,2],
                });
            });
		</script>
<?endif?>