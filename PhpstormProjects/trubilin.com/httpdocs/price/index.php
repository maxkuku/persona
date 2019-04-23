<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "клиника, микрохирургия глаза, цены, офтальмология");
$APPLICATION->SetPageProperty("description", "Клиника семейной офтальмологии в Москве - стоимость на услуги , цены на консультацию по микрохирургии глаза и диагностику.");
$APPLICATION->SetPageProperty("title", "Цены на услуги офтальмологической клиники микрохирургии глаза");
$APPLICATION->SetTitle("Цены на услуги в офтальмологической клинике");
?><?$APPLICATION->IncludeComponent(
	"bitrix:photo.sections.top",
	"smt_price",
	Array(
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"ELEMENT_COUNT" => "1000",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "arrFilter",
		"IBLOCK_ID" => "40",
		"IBLOCK_TYPE" => "smt_clinic",
		"LINE_ELEMENT_COUNT" => "1",
		"PROPERTY_CODE" => array(0=>"PRICE",1=>"DOP_PRICE",),
		"SECTION_COUNT" => "1000",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_SORT_FIELD" => "sort",
		"SECTION_SORT_ORDER" => "asc",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"UF_OPEN",1=>"",)
	)
);?>
<h2>От чего зависит&nbsp;стоимость услуг на микрохирургические операции в офтальмологии</h2>
<p>
	 Обратившись в Клинику Семейной Офтальмологии, вы обязательно оцените высокий уровень квалификации наших специалистов и теплую, домашнюю атмосферу. Мы заботимся о вашем здоровье и делаем все для того, чтобы вы смогли воспринимать мир в ярких красках, радуясь каждому дню, поэтому предоставляем широкий спектр услуг в области микрохирургии глаза. Наша клиника оснащена инновационным оборудованием, позволяющим проводить диагностику и лечение на высоком профессиональном уровне. Хирургическое вмешательство является многоэтапным процессом, поэтому окончательная цена лечения зависит от уровня сложности лечения и необходимости проведения дополнительных исследований, методами которых располагает современная офтальмология.
</p>
<ul>
	<li><a href="http://www.trubilin.com/uslugi/lazernaya-korrektsiya-zreniya/">Лазерная коррекция зрения</a></li>
	<li><a href="http://www.trubilin.com/price/apparatnoe-lechenie.php">Аппаратное лечение</a></li>
	<li><a href="http://www.trubilin.com/uslugi/udalenie-katarakty/">Операции по поводу катаракты</a></li>
</ul><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>