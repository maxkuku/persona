<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
if(count($arResult['ITEMS'])>0):


?>
<div class="eee" id="eee">
        	<div class="wrap swipe">
            <div class="h2"><?=$arParams["TITLE"]?></div>
            	<div class="item-wrap articles">
                <div class="items-move">
                <? foreach ($arResult['ITEMS'] as $arItem):?>
                
                <div id="elt_<?=$arItem['ID']?>" class="item">
                <a href="/articles/<?=$arItem['CODE']?>/">
                    <div class="item-img"><img src="<?=$arItem['FILE']['src']?>" width="<?=$arItem['FILE']['width']?>" alt="<?=$arItem['PREVIEW_PICTURE']['DESCRIPTION']?>"/></div>
                    <div><b><?=$arItem['NAME']?></b></div>
                    <? /*my_crop is in /bitrix/php_inteface/init.php */ ?>
                    <!--div><?=my_crop($arItem['PREVIEW_TEXT'],300)?></div-->
				</a>
                </div>
                <? endforeach?>
                </div><!--items-move-->
                </div>
                <a class="art_nav prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
                <a class="art_nav next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
            </div>
        </div><!--eee-->
<? endif;?>        