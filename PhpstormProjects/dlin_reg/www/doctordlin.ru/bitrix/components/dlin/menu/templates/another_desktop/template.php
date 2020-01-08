<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)):?>
    <div class="menu-from-fam">
        <div class="up-line">
            <ul>
                <?
                $previousLevel = 0;
                foreach($arResult as $arItem):?>
                <?if ($previousLevel && $arItem["PARAMS"]["DL"] < $previousLevel):?>
                    <?=str_repeat("</ul></li><div class='divider'>|</div>", ($previousLevel - $arItem["PARAMS"]["DL"]));?>
                <?endif?>
                <?if ($arItem["PARAMS"]["IS_PARENT"]):?>
                <?if ($arItem["PARAMS"]["DL"] == 1):?>
                <li class="st1 closed">

                    <a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?> class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?>"><i class="fa <?=$arItem["PARAMS"]["FA"]?>"></i><?=$arItem["TEXT"]?></a>
                    <ul>
                        <?else:?>
                        
                        <li<?if ($arItem["SELECTED"]):?> class="item-selected <?if($arItem["LINK"]!='/treatment/'):?>st1<?else:?>pr1<?endif?>"<?endif?>>
                            <a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?> class="parent"><?=$arItem["TEXT"]?></a>
                            <ul>
                                <?endif?>
                                <?else:?>
                                <?if ($arItem["PERMISSION"] > "D"):?>
                                <?if ($arItem["PARAMS"]["DL"] == 1):?>
                                    <li class="li2"><a <?if($arItem["LINK"]):?>href="<?=(strpos($arItem["LINK"],"tel:")>-1) ?
                                            substr($arItem["LINK"],1) : $arItem['LINK']?>"<?endif?>
                                           class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?><?=$arItem["PARAMS"]["pos"]?>"><i class="fa <?=$arItem["PARAMS"]["FA"]?>"></i><?=$arItem["TEXT"]?></a></li><div class='divider'>|</div>
                                    <?else:?>
                                    <? if ($arParams['MAX_LEVEL']>1):?>
                                    <li class="<?if ($arItem["SELECTED"]):?>item-selected<?endif?> li5"><a <?if($arItem["LINK"]):?>href="<?=$arItem["LINK"]?>"<?endif?>><i class="fa <?=$arItem["PARAMS"]["FA"]?>"></i><?=$arItem["TEXT"]?></a></li>
                                    <? endif ?>
                                    <?endif?>
                                <?if($arItem["PARAMS"]["pos"]):?>
                            </ul>

        </div>
        <div class="down-line">
            <ul>
                <?endif;?>
                <?else:?>
                    <?if ($arItem["PARAMS"]["DL"] == 1):?>
                        <li class="li3"><a class="<?if ($arItem["SELECTED"]):?>root-item-selected<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                    <?else:?>
                        <li class="li4"><a class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
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