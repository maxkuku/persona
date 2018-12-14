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
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <td class="text-center" width="35%">Изображение</td>
        <td class="text-left">Наименование товара</td>
    </tr>
    </thead>
    <tbody>
	<?foreach($arResult["ITEMS"] as $arItem):?>
            <tr>
                <td class="text-center">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                alt="<?=$arItem["NAME"]?>"
                                title="<?=$arItem["NAME"]?>"></a>
                </td>
                <td class="text-left"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><br>
                    <?if($arItem["PROPERTIES"]['sale']['VALUE']):?>
                    <div class="price">
					<span class="price-old">&nbsp;5400 <span class="sr-only">р.</span>
						<span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>&nbsp;</span> <span class="price-new">5200 <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></span>
                    </div>
                    <?else:?>
                    <?=$arItem["PROPERTIES"]["price"]["VALUE"]?> <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>
                    <?endif?>
                    <br>
                    <button type="button" onclick="cart.add('<?=$arItem["ID"]?>');" data-toggle="tooltip" title="В корзину"
                            class="btn btn-primary" data-original-title="В корзину"><i
                                class="fa fa-shopping-cart"></i> Добавить в корзину</button>

                    <a onclick="wishlist.remove(<?=$arItem["ID"]?>)" data-toggle="tooltip" title="Удалить из списка"
                       class="btn btn-danger" data-original-title="Удалить"><i class="fa fa-times"></i></a>
                </td>
            </tr>
	<?endforeach;?>
    </tbody>
</table>