<?$APPLICATION->IncludeComponent(
	"bitrix:search.title",
	"corp",
	Array(
		"CATEGORY_0" => array("iblock_aspro_digital_content"),
		"CATEGORY_0_TITLE" => GetMessage("S_CONTENT"),
		"CATEGORY_0_iblock_aspro_digital_catalog" => array(0=>"all",),
		"CATEGORY_0_iblock_aspro_digital_content" => array("40"),
		"CATEGORY_OTHERS_TITLE" => GetMessage("S_OTHER"),
		"CHECK_DATES" => "Y",
		"CONTAINER_ID" => "title-search_fixed",
		"INPUT_ID" => "title-search-input_fixed",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => SITE_DIR."search/",
		"PREVIEW_HEIGHT" => "25",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PREVIEW_WIDTH" => "25",
		"PRICE_CODE" => "",
		"PRICE_VAT_INCLUDE" => "Y",
		"SHOW_INPUT" => "Y",
		"SHOW_INPUT_FIXED" => "Y",
		"SHOW_OTHERS" => "Y",
		"SHOW_PREVIEW" => "Y",
		"TOP_COUNT" => "5",
		"USE_LANGUAGE_GUESS" => "Y"
	)
);?>