
<?if($arResult['PROPERTIES']['consutacia_on']['VALUE']=='Да'){?>
<div id="part17" class=" <?if($arResult['PROPERTIES']['fon12']['VALUE']=='Да'){?>greyline<?}?> row margin0">
	<?$APPLICATION->IncludeComponent(
		"aspro:form.digital", 
		"front-block", 
		array(
			"IBLOCK_TYPE" => "aspro_digital_form",
			"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_form"]["aspro_digital_consultation"][0],
			"USE_CAPTCHA" => "N",
			"IS_PLACEHOLDER" => "N",
			"SHOW_LICENCE" => $arTheme["SHOW_LICENCE"]["VALUE"],
			"SUCCESS_MESSAGE" => "<p>Спасибо! Ваше сообщение отправлено!</p>",
			"SEND_BUTTON_NAME" => "Задать вопрос",
			"SEND_BUTTON_CLASS" => "btn btn-default",
			"DISPLAY_CLOSE_BUTTON" => "Y",
			"CLOSE_BUTTON_NAME" => "Обновить страницу",
			"CLOSE_BUTTON_CLASS" => "btn btn-default refresh-page",
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_JUMP" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "100000",
			"AJAX_OPTION_ADDITIONAL" => ""
		),
		false
	);?>
</div>

<?}?>