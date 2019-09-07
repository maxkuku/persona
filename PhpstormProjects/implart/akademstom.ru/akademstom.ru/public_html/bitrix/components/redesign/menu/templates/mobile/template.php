<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul id="vertical-multilevel-menu">
<?
foreach($arResult as $arItem):?>
	<li class="<?if($arItem["PARAMS"]["DL"] == 2){ echo "second ";}?> <?if ($arItem["SELECTED"]):?>root-item-selected<?endif?> root-item">
    	<a<? if($arItem['LINK']){?> href="<?=$arItem['LINK']?>"<? }?>><?=$arItem['TEXT']?></a>
    </li>
<? endforeach;?>

<li id="search-li">
	<form action="/search/">
    	<input name="q"/>
        <span><i class="fa fa-search" aria-hidden="true"></i></span>
    </form>
</li>

</ul>
<?endif?>
