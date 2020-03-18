<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/specs/style.css");
$APPLICATION->SetTitle("Специалисты");
?>
<style>
    @media(max-width: 430px){
        h1, .wrap > div, .wrap > div + a {
            margin: 10px;
        }
        #footer .wrap > div{
            margin: auto;
        }
    }
</style>
<div class="page-header">
    <?if(BANNER_ALL == "Y"):?>
        <div class="banner">
            <a href="/treatment/stelki/">
                <p>Спецпредложение! Индивидуальные ортопедические стельки со скидкой 40%!</p>
            </a>
        </div>
    <?endif?>
</div>
<div class="wrap">
    <h1><?$APPLICATION->ShowTitle(false)?></h1>
<div>
<?$APPLICATION->IncludeComponent(
	"dlin:news.detail",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"PREVIEW_PICTURE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["CODE"],
		#"ELEMENT_ID" => $_REQUEST["ID"],
        "FIELD_CODE" => array("PREVIEW_PICTURE", ""),
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "specs",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("","detail","opyt",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>
</div>
    <a href="/specs/" class="btn btn-green">Все специалисты</a>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>