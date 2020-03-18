<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
?>

<div id="image-frame" class="uk-modal" aria-hidden="true">
    <div class="uk-modal-dialog uk-modal-dialog-lightbox uk-slidenav-position">
        <a class="uk-modal-close uk-close uk-close-alt"></a>
        <div class="uk-lightbox-content"></div>
        <div class="uk-modal-spinner uk-hidden"></div>
    </div>
</div>

<div class="images-certif wrap <?=$arResult['BCOLOR']?>">
<? foreach($arResult['ITEMS'] as $arItem):?>
<a href="<?=$arItem['FILE_BIG']['src']?>" class="mod-ui"  data-uk-lightbox="{group:'group1'}" data-lightbox-type="image">
    <img src="<?=$arItem['FILE_SMALL']['src']?>" alt="Сертификат стоматолога">
</a>
<? endforeach;?>
</div>

<script>
    UIkit.lightbox("#image-frame");
</script>