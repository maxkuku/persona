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
<?if(count($arResult)>0){
    IncludeTemplateLangFile(__FILE__);?>
<div class="uslugi-bottom">
    <h3><?=GetMessage("PRIMERY")?></h3>

<div class="small-gallery-block myportfolio" data-code="<?=htmlspecialchars($_REQUEST['ELEMENT_CODE'],3)?>" data-id="<?=$arResult['articleID']['ID']?>">
    <div class="flexslider unstyled row front bigs dark-nav" data-plugin-options='{"animation": "slide", "directionNav": false, "controlNav" :true, "animationLoop": true, "slideshow": false, "counts": [4, 3, 2, 1]}'>
        <ul class="slides items">
            <?foreach($arResult as $arItem):?>
                <li class="col-md-3 item article-item">
                    <div>
                        <img src="<?=$arItem['PREVIEW_PICTURE']['src']?>" class="img-responsive inline" title="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']?>" alt="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT']?>" />
                    </div>
                    <a href="<?=$arItem['DETAIL_PICTURE']['src']?>" class="fancybox dark_block_animate" title="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT']?>" rel="gallery" target="_blank"></a>
                </li>
            <?endforeach;?>
        </ul>
    </div>
</div>

</div>
<?}?>
