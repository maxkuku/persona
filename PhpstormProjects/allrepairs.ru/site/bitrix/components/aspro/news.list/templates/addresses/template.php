<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
IncludeTemplateLangFile(__FILE__);
foreach($arResult["ITEMS"] as $arItem):?>
	<div class="shops-list-item" id="position_<?=$arItem['ID']?>" data-center="[ <?=$arItem['PROPERTIES']['CENTER']['VALUE']?> ]">
		<?list($name, $phone) = explode("/", $arItem['NAME'])?>
		<strong><?=$name?></strong><br>
		<span><?=$phone?></span>
	</div>
    <script>
        var createButton = document.getElementById('position_<?= $arItem['ID']?>');

        createButton.onclick = function() {

            $('.shops-list-item').removeClass("active");

            window.map.panTo([<?=$arItem['PROPERTIES']['CENTER']['VALUE']?>]);

            $('#position_<?= $arItem['ID']?>').addClass("active");
        }
    </script>
<?endforeach;
