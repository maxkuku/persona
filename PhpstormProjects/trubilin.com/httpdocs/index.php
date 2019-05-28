<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Клиника коррекции зрения профессора Трубилина ");
$APPLICATION->SetPageProperty("keywords", "клиника коррекции зрения, микрохирургия глаза, диагностик, центр, москва");
$APPLICATION->SetPageProperty("description", "Клиника семейной офтальмологии профессора Трубилина – действительно семейная клиника. Мы – это семья офтальмологов, много лет занимающаяся лечением глазных заболеваний.");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Центр микрохирургии глаза профессора Трубилина");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"smt_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "smt_slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "29",
		"IBLOCK_TYPE" => "smt_promo",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "12",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"BUTTON",1=>"LINK",2=>"STYLE",3=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?>
<div class="smt-benefit-block">
	<h1>Клиника коррекции зрения</h1>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"smt_benefit",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "30",
		"IBLOCK_TYPE" => "smt_promo",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"NEWS_COUNT" => "3",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"LINK",1=>"ICON",),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?> <br>
	<p>
		Хорошее зрение – это природный дар, которым обладает далеко не каждый, поскольку существует множество причин, вызывающих ряд офтальмологических заболеваний. Наша клиника коррекции зрения предоставляет широкий спектр услуг по диагностике и лечению кератоконуса, глаукомы, катаракты, а также осуществляет подбор очков и средств для оптической коррекции. Клиника Семейной Офтальмологии оснащена новейшим оборудованием, что позволяет проводить диагностику с высокой точностью. На практике мы применяем только безопасные инновационные технологии для хирургического лечения, используя лишь современные методы коррекции зрения.
	</p>
</div>
 <?$APPLICATION->IncludeFile(
    SITE_DIR."smt_include/doctors.php",
    Array(),
    Array("MODE"=>"text", "SHOW_BORDER"=>false)
);?>
<div class="block_main">
	<div class="block_icons1 block_1">
        <img src="/bitrix/images/img-11.17/5.webp" onerror="this.onerror=null; this.src='/bitrix/images/img-11.17/5.png'">
        <!--img src="/bitrix/images/img-11.17/5.png" class="img_icon1" alt=""-->
		<p>
			Научный подход в каждодневной практике
		</p>
	</div>
	<div class="block_icons1 block_2">
        <img src="/bitrix/images/img-11.17/6.webp" onerror="this.onerror=null; this.src='/bitrix/images/img-11.17/6.png'">
        <!--img src="/bitrix/images/img-11.17/6.png" class="img_icon2" alt=""-->
		<p>
			Опыт работы в крупнейших Федеральных центрах
		</p>
	</div>
	<div class="block_icons1 block_3">
        <img src="/bitrix/images/img-11.17/7.webp" onerror="this.onerror=null; this.src='/bitrix/images/img-11.17/7.png'">
        <!--img src="/bitrix/images/img-11.17/7.png" class="img_icon3" alt=""-->
		<p>
			Европейское дополнительное профессиональное образование
		</p>
	</div>
	<div class="block_icons1 block_4">
        <img src="/bitrix/images/img-11.17/8.webp" onerror="this.onerror=null; this.src='/bitrix/images/img-11.17/8.png'">
        <!--img src="/bitrix/images/img-11.17/8.png" class="img_icon4" alt=""-->
		<p>
			Семейные традиции в профессиональной сфере
		</p>
	</div>
</div>
 <?$APPLICATION->IncludeFile(
    SITE_DIR."smt_include/banner.php",
    Array(),
    Array("MODE"=>"text", "SHOW_BORDER"=>false)
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>