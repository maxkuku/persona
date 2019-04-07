<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="feedback_on_page" class="tab-pane active">
    <?if(MOB === "Y"){?>
    <div class="flexslider unstyled row front bigs dark-nav" data-plugin-options='{"animation": "slide", "directionNav": false, "controlNav" :true, "animationLoop": true, "slideshow": false, "counts": [4, 3, 2, 1]}'>
        <?}
        else{?>
    <div class="item-views list list-type-block image_left staff-block staff items-list2">
        <?}?>
        <<?=(MOB==="Y")?"ul":"div"?> class="slides items">
        <?foreach($arResult as $arItem){?>
        <<?=(MOB==="Y")?"li":"div"?> class="item shadow clearfix" id="feed_<?=$arItem['FIELDS']['ID']?>">
            <div class="image">
                <div class="dark-color">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['src']?>" alt="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT']?>" class="img-responsive feed-img">
                </div>
            </div>
            <div class="body-info">
                <div class="title-wrapper bottom-props">
                    <div class="title">
                        <div class="dark-color"> <?=$arItem['FIELDS']['NAME']?> </div>
                    </div>
                </div>

                <div class="post"><?=$arItem['FIELDS']['PROPERTY_POST_VALUE']?></div>

                <div class="previewtext">
                    <p><?=$arItem['FIELDS']['PREVIEW_TEXT']?></p>
                </div>
                <hr>
            </div>
        <<?=(MOB==="Y")?"/li":"/div"?>>
        <?}?>
        <<?=(MOB==="Y")?"/ul":"/div"?>>
    </div>
        <?if($arParams['NOT_SHOW_LINK']!="Y"):?>
        <p style="text-align:center; margin-top: 20px;">
            <a href="/kompanija/otzyvy/"><button type="button" class="btn btn-danger">Посмотреть все отзывы</button></a>
        </p>
        <?endif?>
</div>