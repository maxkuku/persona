<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<?
$previousLevel = 0;?>
	<div class="col-sm-6 col-md-3">
<?foreach($arResult as $arItem):
    #pr($arItem)?>


	<?if ($previousLevel && $arItem["PARAMS"]["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul><hr class=\"visible-xs\"></div><div class=\"" . $arItem['PARAMS']['DIVIDER'] . "\"></div><div class=\"col-sm-6 col-md-3\">", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["PARAMS"]["IS_PARENT"]):?>

		<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
            <?if($arItem["PARAMS"]["A_LINK"] == "N"):?>
            <div class="footer_name_column"><i class="<?=$arItem["PARAMS"]["I-FA-CLASS"]?>"></i><span><?=$arItem['TEXT']?></span></div>
                <ul class="list-unstyled information">
            <?else:?>
                <div class="footer_name_column"><i class="<?=$arItem["PARAMS"]["I-FA-CLASS"]?>"></i><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></div>
            <?endif?>

		<?else:?>
            <li class="<?if ($arItem["SELECTED"]):?>item-selected<?endif?> depth-1"><i class="fa fa-angle-right"></i><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a></li>

		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
				<li class="item_<?=$arItem["DEPTH_LEVEL"]?>"><i class="fa fa-angle-right"></i><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="<?if ($arItem["SELECTED"]):?> item-selected<?endif?> child"><i class="fa fa-angle-right"></i><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><i class="fa fa-angle-right"></i><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["PARAMS"]["DEPTH_LEVEL"];?>

<?endforeach?>

<?#if ($previousLevel > 1)://close last item tags?>
	<?#=str_repeat("</ul><hr class=\"visible-xs\"></div>", ($previousLevel-1) );?>
<?#endif?>

</div>

<?endif?>