<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты - группа строительных компаний Роспрофстрой");
$APPLICATION->SetPageProperty("description", "Контакты и адреса компании Роспрофстрой");
$APPLICATION->SetTitle("Контакты");?>

    <div class="row margin0 block-with-bg margin_bot" id="side-con">
	<?$APPLICATION->IncludeComponent(
	"aspro:form.digital",
	"order_conts",
	array(
		"IBLOCK_TYPE" => "aspro_digital_content",
		"IBLOCK_ID" => "14",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"SHOW_LICENCE" => "N",
		"LICENCE_TEXT" => $arTheme["LICENCE_TEXT"],
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"AJAX_OPTION_ADDITIONAL" => "",
		"0" => "",
		"SUCCESS_MESSAGE" => $successMessage,
		"SEND_BUTTON_NAME" => "Отправить",
		"SEND_BUTTON_CLASS" => "btn btn-default",
		"DISPLAY_CLOSE_BUTTON" => "Y",
		"POPUP" => "Y",
		"CLOSE_BUTTON_NAME" => "Закрыть",
		"CLOSE_BUTTON_CLASS" => "jqmClose btn btn-default bottom-close",
		"COMPONENT_TEMPLATE" => "order",
		"CACHE_GROUPS" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
    );?>
    </div>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>