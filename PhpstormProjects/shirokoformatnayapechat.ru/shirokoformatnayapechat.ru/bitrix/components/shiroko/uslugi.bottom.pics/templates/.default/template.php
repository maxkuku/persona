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
<?/** if mobile && count elems more then 4 then Control-nav: true*/?>
<div class="small-gallery-block myportfolio" data-serv="<?=htmlspecialchars($_SERVER['PHP_SELF'],3)?>" data-code="<?=htmlspecialchars($_REQUEST['ELEMENT_CODE'],3)?>" data-id="<?=$arResult['articleID']['ID']?>">
    <div class="flexslider unstyled row front bigs dark-nav uslugi-bottom" data-plugin-options='{"animation": "slide", "directionNav": <?=(MOB=="Y")?"true":(count($arResult)>4)?"true":"false"?>, "controlNav" :false, "animationLoop": true, "slideshow": true, "counts": [4, 3, 2, 1]}'>
        <ul class="slides items uslugi-bottom-pics">
            <?$r = 0; $ban = [];?>
	<?foreach($arResult as $arItem):?>
        <? /* если картинка предназначена именно для этого раздела*/
            #print_r( $arItem['PROPS']['show']['VALUE'] );
        if(in_array(htmlspecialchars($_SERVER['PHP_SELF'],3), $arItem['PROPS']['show']['VALUE'])):?>
        <li class="col-md-3 item">
            <div>
                <img src="<?=$arItem['PREVIEW_PICTURE']['src']?>" class="img-responsive inline" title="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']?>" alt="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT']?>" />
            </div>
            <a href="<?=$arItem['DETAIL_PICTURE']['src']?>" class="fancybox dark_block_animate" title="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT']?>" rel="gallery" target="_blank"></a>
        </li>
        <?  $ban[$r]['@type'] = "ListItem";
            $ban[$r]['position'] = $r;
            $ban[$r]['name'] = $arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT'];
            $ban[$r]['image'] = "http://" . $_SERVER['HTTP_HOST'] . $arItem['DETAIL_PICTURE']['src'];
            $ban[$r]['url'] = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "?pic=" . $r?>
            <?$r++?>
        <?endif?>
    <?endforeach;?>
        </ul>
    </div>
</div>
<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"ItemList",
  "itemListElement":
  <?=json_encode($ban, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);?>
}
</script>