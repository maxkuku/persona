<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("«Персона» маркет");
$APPLICATION->SetTitle( "«Персона» маркет" ); ?><div class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div id="menu-home-helper">
				</div>
			</div>
			<div class="col-md-9">
				 <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"banners_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => false,
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "banners",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "120",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Баннеры",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"href",1=>"",),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC"
	)
);?>
				<div class="row custom-blocks">
					<div class="col-sm-4">
						<div class="custom-block">
 <a href="bonus">
							<div class="image">
 <img alt="Акции и скидки" src="/bitrix/templates/persona/images/bonus-icon-50x50.png">
							</div>
							<div class="text">
								<div class="title">
									 Лояльность для любимых клиентов
								</div>
								<p style="word-wrap: break-word;">
									 Накопительная бонусная система
								</p>
							</div>
 </a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="custom-block">
 <a href="payment-delivery"> </a>
							<div class="image">
 <a href="payment-delivery"><img alt="Ресурс 2.png" src="/upload/medialibrary/af3/af36ae58bced8b655b4fd5208bc5f19f.png" title="Ресурс 2.png"> </a>
							</div>
							<div class="text">
								<div class="title">
									 ПЕРСОНАльные консультации
								</div>
								<p style="word-wrap: break-word;">
									 Косметика, которая подойдет именно Вам
								</p>
 <a href="payment-delivery"> </a>
							</div>
 <a href="payment-delivery"> </a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="custom-block">
 <a href="http://persona.market/payment-delivery">
							<div class="image">
 <img alt="Бесплатная доставка" src="/bitrix/templates/persona/images/free-delivery-icon-50x50.png">
							</div>
							<div class="text">
								<div class="title">
									 Бесплатная доставка и самовывоз
								</div>
								<p style="word-wrap: break-word;">
									 По Москве бесплатно при заказе от 3000 рублей
								</p>
							</div>
 </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		 <?/*$APPLICATION->IncludeComponent("bitrix:menu", "catalog_top", array(
					"ROOT_MENU_TYPE" => "top",
					"MENU_CACHE_TYPE" => "Y",
					"MENU_CACHE_TIME" => "36000000",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "3",
					"CHILD_MENU_TYPE" => "",
					"IS_PARENT" => "N",
					"USE_EXT" => "Y",
					"ALLOW_MULTI_SELECT" => "N"
				),
					false
				);*/

             $arrFilter = array ("!=PROPERTY_brand"=>false);
			$APPLICATION->IncludeComponent(
				"persona:brand_menu",
				"brands_menu_name",
				Array("IBLOCK_ID"=>4, "FULL"=>"Y")
			);

            ?>
		<div class="row action-main-spec">
			<div class="col-md-12">
				 <!--owl actions carousel--> <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"actions_main_spec",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "recomend_main",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"DETAIL_PICTURE",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "actions_main",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Рекомендуемые",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"to_good",1=>"",2=>"",3=>"",),
		"SEF_MODE" => "Y",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-md-9">
				 <!--for recomend--> <? $arrFilter = array("=PROPERTY_RECOMEND" => "1")?> <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"recomend_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "recomend_main",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"DETAIL_PICTURE",2=>"",),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "goods",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Рекомендуемые",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"artikul",1=>"price",2=>"sale",3=>"",),
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
		"STRICT_SECTION_CHECK" => "N"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'N'
)
);?> <!--for hits--> <? $arrFilter = array("=PROPERTY_HIT" => "1")?> <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"hits_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"PREVIEW_PICTURE",),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "goods",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Хиты",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"price",1=>"artikul",2=>"sale"),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC"
	)
);?>
				<div class="home_text">
					 Вы заслуживаете лучшего! Так разрешите себе иметь сногсшибательный вид, покупая средства професионального ухода за волосами и телом по приемлемым ценам. Это уникальная возможность навсегда проститься с малоэффективной и изжившей себя косметикой из супермаркета!
					<div style="text-align: center;">
						<h2>Богатый выбор </h2>
					</div>
					 Наши клиенты не задумываются над тем, где купить качественные косметические средства, эффект которых способен приятно поразить. Мы знаем, что вам нужно для того, чтобы выглядеть на все 200%, не беспокоясь о том, как сэкономить. Наш онлайн-маркет предлагает вам широчайший выбор косметики для прекрасного и сильного пола. Ассортимент составляют популярные мировые бренды по суперценам:
					<ol>
						<li>Средства для химической завивки, кератиновых процедур и ламинирования</li>
						<li>
						Продукция для окрашивания, тонирования и осветления волос</li>
						<li>
						Ухаживающая косметика для волос (шампуни, маски, спреи, бальзамы)</li>
						<li>
						Стайлинги и укладки</li>
						<li>
						Краски для ресниц и бровей</li>
						<li>Парикмахерский инструментарий.</li>
					</ol>
					<ol>
					</ol>
					<div style="text-align: center;">
						<h3>Почему мы? </h3>
					</div>
					 Персона Маркет – территория профессиональных парикмахеров и тех, кто привык делать ставку в пользу высших результатов, качества и новаций в Beauty-сегменте, а также предпочитает выглядеть безупречно. На весь ассортимент продукции имеются сертификаты безопасности и соответствия требованиям всех международных нормативов. Мы сотрудничаем только с проверенными официальными поставщиками мировых брендов. Купить косметику и инструменты у нас – значит существенно сэкономить время и средства. В высокоскоростном жизненном ритме каждая свободная минута – дороже золота.
					<div style="text-align: center;">
						<h3>Как купить? </h3>
					</div>
					 Сделать заказа на сайте – дело 2-3 минут. Ваша задача довольно проста – заполняете блок своими контактными данными, выбираете удобный способ доставки и оплаты. А если есть вопросы, можно в любое время суток связаться с нашим консультантом по телефону, представленному на сайте.
					<hr>
				</div>
				 <!--feeds--> <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"feeds_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "otzyv",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Отзывы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"FOR_WHAT",1=>"YOUR_VALUE",),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC"
	)
);?>
			</div>
			<div id="column-right" class="col-sm-4 col-md-4">
				<div class="visible-xs text-right col-show-button">
					 <a class="btn btn-default btn-block" id="show-modules-col-right" >
							<i class="fa fa-eye show-icon"></i>
							<i class="fa fa-eye-slash hid-icon"></i> Правая колонка</a>
				</div>
				<div id="col-right-modules" class="hid-col-right">
					 <!--for actions--> <? $arrFilter = array(">PROPERTY_SALE" => "0")?> <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"actions_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"PREVIEW_PICTURE",),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => false,
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "goods",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Акции",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"price",1=>"artikul",2=>"sale"),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC"
	)
);?> <!--for recent--> <? $arrFilter = array("=PROPERTY_RECENT" => "1")?>
                    <?$APPLICATION->IncludeComponent(
	"persona:recent.real",
	"",
	Array(
		"LIMIT" => "8",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"PREVIEW_PICTURE",),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => false,
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "goods",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "1",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Последние",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"price",1=>"artikul",2=>"sale",),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
					<div id="cmswidget-8" class="cmswidget">
						<div class="panel panel-default">
                            <div class="panel-heading"><a href="/texts/">Статьи</a></div>
							<div class="seocmspro_content record_columns coloring_record_columns">
								 <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"articles_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "articles_main",
		"DETAIL_FIELD_CODE" => array(0=>"SHOW_COUNTER",1=>"",),
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"DETAIL_PICTURE",2=>"SHOW_COUNTER",3=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Последние",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
							</div>
						</div>
					</div>
				</div>
			</div>
			 <script>
					domReady(function () {
						$('#show-modules-col-right').click(function () {
							$('#col-right-modules').toggleClass('show');
							$(this).toggleClass('open');
						});
					});
				</script>
		</div>
		<div class="row">
			 <?$show_partners = "N";
            if($show_partners == "Y"):?>
			<div class="col-sm-12" id="home_position_3">
				<div id="carousel0" class="carousel <?=(MOB!=1)?"owl-carousel":""?>>
					 <?

                    if ($handle = opendir( __DIR__ . '/bitrix/templates/persona/images/partners/')) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                                $i++;
                                /*сломано*/
                                ?>
					<div class="item text-center">
                        <a href="echosline">
                            <img src="<?=$entry?>" alt="Persona-market partner <?=$i?>" class="img-responsive">
                        </a>
                    </div>
					 <?
                            }
                        }
                        closedir($handle);
                    }
                    else{
                        echo "No pics in partners :(\r\n";
                    }

                    ?>
            <?if(MOB!=1):?>
            <script type="text/javascript">
                        domReady(function(){
                            $('#carousel0').owlCarousel({
                                items: 6,
                                autoPlay: 3000,
                                navigation: true,
                                theme: 'carousel',
                                navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                pagination: false
                            });
                        });
                    </script>
                    <?endif?>
				</div>
			</div>
			 <?endif;?>
			<!--div class="row">
				<div style="text-align: center;">
					<h2>Тематические статьи</h2>
				</div>
			</div>
			<div class="col-sm-12" id="articles-position">
				 <?/*$APPLICATION->IncludeComponent(
	"persona:news.list",
	"bot_articles_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"PREVIEW_PICTURE",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => false,
		"IBLOCK_ID" => "11",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Рекомендуемые",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"price",1=>"artikul",2=>"sale"),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC"
	)
);*/?>
			</div-->
			<div class="col-sm-12 wrap">
				<div class="shops clearfix">
					<div class="shops-title">
						 Наши пункты самовывоза
					</div>
					<div class="clearfix">
						<div class="shops-list mCustomScrollbar">
							 <?$APPLICATION->IncludeComponent(
	"persona:news.list",
	"addresses",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"COMPONENT_TEMPLATE" => "addresses",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10020",
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
		"PROPERTY_CODE" => array(0=>"CENTER",1=>"",),
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
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
						</div>
						<div class="shops-map">
							<div class="shops-map-image">
								<div id="map">
								</div>
							</div>
						</div>
					</div>
					 <script src="//maps.api.2gis.ru/2.0/loader.js"></script>
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
		 <script type="text/javascript">domReady(function () {
				$(function () {
					$('#menu-home-helper').css({'min-height': $('#menu-list').outerHeight() - 20});
				});
			});
         </script>
	</div>
</div><? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ); ?>