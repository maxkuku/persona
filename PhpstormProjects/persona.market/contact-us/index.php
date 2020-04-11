<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>




<div class="container"></div>
    <div class="row">
        <div class="col-sm-12 wrap">
            <div class="shops clearfix">
                <div class="shops-title">Наши пункты самовывоза</div>
                <div class="clearfix">
                    <div class="shops-list mCustomScrollbar">
                        <? $APPLICATION->IncludeComponent(
	"persona:news.list", 
	"addresses", 
	array(
		"IBLOCK_ID" => "15",
		"NEWS_COUNT" => "10020",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"PROPERTY_CODE" => array(
			0 => "CENTER",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"COMPONENT_TEMPLATE" => "addresses",
		"IBLOCK_TYPE" => "news",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
); ?>

                    </div>
                    <div class="shops-map">
                        <div class="shops-map-image">
                            <div id="map" style="height: 600px"></div>
                        </div>
                    </div>
                </div>
                <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
                <script type="text/javascript">
                    window.map;

                    DG.then(function () {
                        window.map = DG.map('map', {
                            center: [55.742136,37.6255092],
                            zoom: 15
                        });

                        myIcon = DG.icon({
                            iconUrl: '/upload/medialibrary/4ad/4ada64dd4d6b62363fb0fecc3ecd9ee1.png',
                            iconSize: [40, 46]
                        });

                        <? $APPLICATION->IncludeComponent(
                        "persona:news.list",
                        "addresses_script",
                        Array(
                            "IBLOCK_ID" => "15",
                            "NEWS_COUNT" => "10020",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "PROPERTY_CODE" => array(
                                0 => "CENTER",
                                1 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "COMPONENT_TEMPLATE" => "addresses",
                            "IBLOCK_TYPE" => "news",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "DETAIL_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "SET_TITLE" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "STRICT_SECTION_CHECK" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        )
                    ); ?>

                    });
                </script>
            </div>
        </div>
    </div>
</div>




    <h2>Телефоны</h2>

    <ul>
        <li>Телефон/факс:
            <ul>
                <li><b><? $APPLICATION->IncludeFile(
							SITE_DIR . "include/phone.php",
							Array(),
							Array( "MODE" => "html" )
						); ?></b> </li>
            </ul>
        </li>

        <li>Телефоны:
            <ul>
                <li><b><? $APPLICATION->IncludeFile(
							SITE_DIR . "include/phone.php",
							Array(),
							Array( "MODE" => "html" )
						); ?></b>
                </li>
                <li><b><? $APPLICATION->IncludeFile(
							SITE_DIR . "include/phone2.php",
							Array(),
							Array( "MODE" => "html" )
						); ?></b>
                </li>
            </ul>
        </li>
    </ul>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>