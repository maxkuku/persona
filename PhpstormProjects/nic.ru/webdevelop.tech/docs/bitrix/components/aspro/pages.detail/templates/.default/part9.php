
<?if($arResult['PROPERTIES']['about_on']['VALUE']=='Да'){?>

<?$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"front-company",
		Array(
			"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
			"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
			"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
			"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
			"IBLOCK_TYPE" => "aspro_digital_content",
			"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_static"][0],
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "PREVIEW_PICTURE",
				3 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "PROPS",
			),
			"DETAIL_URL"	=>	"",
			"SECTION_URL"	=>	"",
			"META_KEYWORDS" => "",
			"META_DESCRIPTION" => "",
			"BROWSER_TITLE" => "",
			"DISPLAY_PANEL" => "N",
			"SET_CANONICAL_URL" => "N",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"ADD_ELEMENT_CHAIN" => "N",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "N",
			"USE_PERMISSIONS" => "N",
			"GROUP_PERMISSIONS" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "",
			"PAGER_SHOW_ALL" => "N",
			"CHECK_DATES" => "N",
			"ELEMENT_ID" => "135",
			"ELEMENT_CODE" => "",
			"IBLOCK_URL" => "",
		),
		false
);?>

<?}?>