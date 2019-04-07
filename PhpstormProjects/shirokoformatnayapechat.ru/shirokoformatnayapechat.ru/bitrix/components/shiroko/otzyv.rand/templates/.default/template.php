<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="feedback_on_page" class="tab-pane active">
    <div class="item-views list list-type-block image_left staff-block staff items-list2">
        <?foreach($arResult as $arItem){?>
        <div class="item shadow clearfix" id="feed_<?=$arItem['FIELDS']['ID']?>">
            <div class="image">
                <div class="dark-color">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['src']?>" alt="<?=$arItem["IPROPERTY_VALUES"]['ELEMENT_PREVIEW_PICTURE_FILE_ALT']?>" class="img-responsive feed-img">
                </div>
            </div>
            <div class="body-info">
                <div class="title-wrapper bottom-props">
                    <div class="title">
                        <a class="dark-color"> <?=$arItem['FIELDS']['NAME']?> </a>
                    </div>
                </div>

                <div class="post"><?=$arItem['FIELDS']['PROPERTY_POST_VALUE']?></div>

                <div class="previewtext">
                    <p><?=$arItem['FIELDS']['PREVIEW_TEXT']?></p>
                </div>
                <hr>
            </div>
        </div>
        <?}?>
    </div>

    <p style="text-align:center; margin-top: 20px;">
        <a href="/kompanija/otzyvy/"><button type="button" class="btn btn-danger">Посмотреть все отзывы</button></a>
    </p>

</div>