<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)):?>
	<div class="menu">
		<div class="up-line">
			<ul><?
				$previousLevel = 0;
				foreach($arResult as $i => $arItem):?>
				<?if ($previousLevel && $arItem["PARAMS"]["DEPTH_LEVEL"] < $previousLevel):?>
					<?=str_repeat("</ul></li>", ($previousLevel - $arItem["PARAMS"]["DEPTH_LEVEL"]));?>
				<?endif?>
				<?if ($arItem["PARAMS"]["IS_PARENT"]):?>
				<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
				<li id="link_<?=$i?>" class="st1" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>">
					<a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif;?> class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif;?>"><?=$arItem["TEXT"]?></a>
					<ul>
						<?else:?>
						<li id="link_<?=$i?>" class="<?if ($arItem["SELECTED"]):?>item-selected<?endif;?> st1" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>">
							<a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?> class="parent"><?=$arItem["TEXT"]?></a>
                        <ul>
                            <?endif?>
                            <?else:?>
                            <?if ($arItem["PERMISSION"] > "D"):?>
                            <?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
                                <?if($i==9):?>
                                    <li class="divider-red">Имплантация челюсти</li>
                                <?endif?>
                                <?if($i==12):?>
                                    <li class="divider-red">Имплантация зубов</li>
                                <?endif?>
                                <li id="link_<?=$i?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>"><a <?if($arItem["LINK"]):?>href="<?=(strpos($arItem["LINK"],"tel:")>-1) ? substr($arItem["LINK"],1) : $arItem['LINK']?>"<?endif?>
                                <?=($arItem["PARAMS"]["pos"]=="phone")?"onClick=\"yaCounter35248230.reachGoal
                                    ('phoneclick'); ga('send','event','phone','click');\"":"";?>
                                       class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?><?=$arItem["PARAMS"]["pos"]?>"><?=$arItem["TEXT"]?></a></li>
                                <img class="dot" src="<?=SITE_TEMPLATE_PATH?>/imager/dot.png" align="absmiddle"/>
                            <?else:?>
                                <?if($i==9):?>
                                    <li class="divider-red">Имплантация челюсти</li>
                                <?endif?>
                                <?if($i==12):?>
                                    <li class="divider-red">Имплантация зубов</li>
                                <?endif?>
                                <li id="link_<?=$i?>" <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?> data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>">
                                    <a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?>><?=$arItem["TEXT"]?></a></li>
                                <img class="dot" src="<?=SITE_TEMPLATE_PATH?>/imager/dot.png" align="absmiddle"/>
                            <?endif?>
                            <?if($arItem["PARAMS"]["pos"]):?>
                        </ul>
		</div>
		<div class="down-line">
			<ul>
				<?endif;?>
				<?else:?>
					<?if ($arItem["PARAMS"]["DEPTH_LEVEL"] == 1):?>
						<li id="link_<?=$i?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>"><a class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
                        <li id="link_<?=$i?>" data-level="<?=$arItem["PARAMS"]["DEPTH_LEVEL"]?>"><a class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
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
	</div>
<?endif?>