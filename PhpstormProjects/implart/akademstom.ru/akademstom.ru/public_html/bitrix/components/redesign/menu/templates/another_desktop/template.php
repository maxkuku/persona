<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)):?>
    <div class="menu-from-fam <?=$arParams['CLASS']?>">
        <div class="up-line">
            <ul>
                <?
                $previousLevel = 0;
                foreach($arResult as $arItem):?>
                <?if ($previousLevel && $arItem["PARAMS"]["DL"] < $previousLevel):?>
                    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["PARAMS"]["DL"]));?>
                <?endif?>
                <?if ($arItem["PARAMS"]["IS_PARENT"]):?>
                <?if ($arItem["PARAMS"]["DL"] == 1):?>
                <li class="st1 closed">
                    <a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?> class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?>"><?=$arItem["TEXT"]?></a>
                    <ul>
                        <?else:?>
                        <li<?if ($arItem["SELECTED"]):?> class="item-selected st1"<?endif?>>
                            <a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?> class="parent"><?=$arItem["TEXT"]?></a>
                            <ul>
                                <?endif?>
                                <?else:?>
                                <?if ($arItem["PERMISSION"] > "D"):?>
                                <?if ($arItem["PARAMS"]["DL"] == 1):?>
                                    <li><a <?if($arItem["LINK"]):?>href="<?=(strpos($arItem["LINK"],"tel:")>-1) ?
                                            substr($arItem["LINK"],1) : $arItem['LINK']?>"<?endif?>
                                           class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?><?=$arItem["PARAMS"]["pos"]?>"><?=$arItem["TEXT"]?></a></li>
                                    <?else:?>
                                    <li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?>><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>
                                <?if($arItem["PARAMS"]["pos"]):?>
                            </ul>
        </div>
        <div class="down-line">
            <ul>
                <?endif;?>
                <?else:?>
                    <?if ($arItem["PARAMS"]["DL"] == 1):?>
                        <li><a class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                    <?else:?>
                        <li><a class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                    <?endif?>
                <?endif?>
                <?endif?>
                <?$previousLevel = $arItem["PARAMS"]["DL"];?>
                <?endforeach?>
                <?if ($previousLevel > 1):?>
                    <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                <?endif?>
            </ul>
            <div class="menu-clear-left"></div>
        </div>
    </div>
<?endif?>