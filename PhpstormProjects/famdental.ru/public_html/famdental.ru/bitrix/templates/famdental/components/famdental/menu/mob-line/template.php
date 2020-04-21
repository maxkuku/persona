<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<div class="mob-line">
			<ul>
				<li class="first-menu-name">
					<span class="menu-sign active">☰</span>
					<span class="menu-sign">✕</span>
					<span class="menu-name">МЕНЮ</span>
				</li><?
				$previousLevel = 0;
				foreach($arResult as $i => $arItem):?>
				<?if ($previousLevel && $arItem["PARAMS"]["DEPTH_LEVEL"] < $previousLevel):?>
					<?=str_repeat("</ul></li>", ($previousLevel - $arItem["PARAMS"]["DEPTH_LEVEL"]));?>
				<?endif?>
				<?if ($arItem["PARAMS"]["IS_PARENT"]):?>
				<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
				<li id="link_<?=$i?>" class="<?=$arItem["PARAMS"]["subclass"]?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>">
					<a href="<?=($arItem["LINK"])?$arItem["LINK"]:"#"?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?> closed"><?=$arItem["TEXT"]?></a><!--span class="sclosed" uk-icon="icon: chevron-right"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-right"><polyline fill="none" stroke-width="1" points="7 4 13 10 7 16"></polyline></svg></span><span class="sopened" uk-icon="icon: chevron-down"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-down"><polyline fill="none" stroke-width="1" points="16 7 10 13 4 7"></polyline></svg></span-->
                    <ul>
						<?else:?>
						<li id="link_<?=$i?>" <?if ($arItem["SELECTED"]):?> class="item-selected "<?endif?> data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>">
							<a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
							<ul>
								<?endif?>
								<?else:?>
								<?if ($arItem["PERMISSION"] > "D"):?>
								<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
									<li id="link_<?=$i?>" class="<?=$arItem["PARAMS"]["subclass"]?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>">
										<a href="<?=(strpos($arItem["LINK"],"tel:")>-1) ?
											substr($arItem["LINK"],1) : $arItem['LINK']?>" <?=
										($arItem["PARAMS"]["pos"]=="phone")?"onClick=\"yaCounter35248230.reachGoal
										('phoneclick'); ga('send','event','phone','click');\"":"";?> class="<?if
										($arItem["SELECTED"]):?>root-item-selected<?endif?><?=$arItem["PARAMS"]["pos"]?>"><?=$arItem["TEXT"]?></a></li>
								<?else:?>
									<li id="link_<?=$i?>" <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?> data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
								<?endif?>
				<?else:?>
					<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
						<li id="link_<?=$i?>" class="<?=$arItem["PARAMS"]["subclass"]?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>"><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
						<li id="link_<?=$i?>" class="<?=$arItem["PARAMS"]["subclass"]?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
				<?endif?>
				<?endif?>
				<?$previousLevel = $arItem["PARAMS"]["DEPTH_LEVEL"];
				$i++;?>
				<?endforeach?>
				<?if ($previousLevel > 1):?>
					<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
				<?endif?>
			</ul>
			<div class="menu-clear-left"></div>
	</div>
<?endif?>