<?header('Last-Modified: '. date('D, d M Y H:i:s', filemtime(__FILE__)). ' GMT');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Специалисты клиники Доктора Длина, Москва");
$APPLICATION->SetPageProperty("title", "Специалисты");
$APPLICATION->SetTitle("Наши специалисты");
$APPLICATION->SetAdditionalCSS($APPLICATION->GetCurDir()."style.css");
?>
<div class="wrap breadcrumbs">
    <?$APPLICATION->IncludeComponent( "dlin:breadcrumb", ".default", array(), false );?>
</div>


    <div class="light-eee">
        <div class="wrap">
            <div class="under-title">
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>5 минут пешком</b><br><span>от метро</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Бесплатная</b><br><span>парковка</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Прием ведется</b><br><span>по записи</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/flags.jpg"/><div>Стажировки в США,<br>Израиле, Германии</div></div>
            </div>
        </div>
    </div>


<div class="wrap page-header">
    <?if(BANNER_ALL == "Y"):?>
        <div class="banner">
            <a href="/treatment/stelki/">
            <p>Спецпредложение! Индивидуальные ортопедические стельки со скидкой 40%!</p>
            </a>
        </div>
    <?endif?>
</div>
    <div style="display:none">
        <div class="date-publishing">
            Дата публикации: <time datetime="<?=date ("d-m-Y H:i:s", filemtime(__FILE__))?>" class="date"><?=date ("d-m-Y H:i:s.", filemtime(__FILE__))?></time>
            <span class="updated hidden" itemprop="datePublished"><?=date ("Y-m-d", filemtime(__FILE__))?></span>
        </div>
        <meta itemprop="articleSection" content="<?$APPLICATION->ShowTitle(false)?>">
        <meta itemprop="url" content="https://doctordlin.ru">
        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
				<span class="vcard hidden">
					<span itemprop="name" class="fn org">Администрация сайта</span>
					<span class="tel">+7(499) 112-25-17</span>
					<span class="note"><? $APPLICATION->ShowTitle(false)?></span>
					<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="adr locality">
                        <span itemprop="addressLocality">Москва, ул. Гарибальди 36</span></span>
				</span>
			</span>
    </div>
<div class="wrap page-page" itemscope="" itemtype="http://schema.org/Article" itemprop="articleBody">

    <?$APPLICATION->IncludeComponent(
	"dlin:news.list", 
	"specs_brt_main", 
	array(
		"ACTIVE_DATE_FORMAT" => "",
        "ELEMENT_ID" => array(130,131,132,158,165,166,167), // ID врачей
		"COLOR" => "efefef",
		"H2" => "",
		"SHORT" => "Y",
		"VARIANT" => "flexed",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "specs",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "120",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "opyt",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "specs_brt_main"
	),
	false
);?>




</div>



<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>