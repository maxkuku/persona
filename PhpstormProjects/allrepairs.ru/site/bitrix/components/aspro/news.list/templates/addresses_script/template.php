<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
IncludeTemplateLangFile(__FILE__);
foreach($arResult["ITEMS"] as $i=>$arItem):?>
    marker<?=$i?> = DG.marker([<?=$arItem['PROPERTIES']['CENTER']['VALUE']?>], {icon: myIcon}).addTo(map)
    marker<?=$i?>.on('click', function(e) {
        document.getElementById("ADDRESS").value = "<?=$arItem['NAME']?>";
    });
<?endforeach;
