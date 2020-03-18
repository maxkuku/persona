<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="contacts row">
	<div class="soc_seti row">
 <a href="https://vk.com/artecocompany" target="_blank"><img src="/images/vk.png"></a> <a href="https://twitter.com/artecocompany" target="_blank"><img src="/images/tw.png"></a> <a href="https://www.facebook.com/artecocompany/" target="_blank"><img src="/images/fb.png"></a> <a href="https://www.instagram.com/artecocompany/?hl=ru" target="_blank"><img src="/images/inst.png"></a>
	</div>
	<div class="map_block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	array(
	"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.75627271891972;s:10:\"yandex_lon\";d:37.59584289947498;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.59540301719662;s:3:\"LAT\";d:55.75655405010504;s:4:\"TEXT\";s:43:\"Столовый переулок, дом 6\";}}}",	// Данные, выводимые на карте
		"MAP_HEIGHT" => "810",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "520",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	)
);?>
	</div>
	<div class="map_block_mobile">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	array(
	"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.75627271891972;s:10:\"yandex_lon\";d:37.59584289947498;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.59540301719662;s:3:\"LAT\";d:55.75655405010504;s:4:\"TEXT\";s:43:\"Столовый переулок, дом 6\";}}}",	// Данные, выводимые на карте
		"MAP_HEIGHT" => "200",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	)
);?>
	</div>
	<div class="inform_block">
		<h2>Адрес офиса</h2>
		<div class="contacts_address">
			 121069, Москва, Россия<br>
			 Столовый переулок, дом 6,<br>
			 этаж 2, комната 207<br>
		</div>
		<div class="contacts_phones">
			 <?$APPLICATION->IncludeFile(SITE_DIR."include/phones.php",Array(),Array("MODE"=>"php"));?>
		</div>
 <a href="mailto:info@aecmos.com" class="mail">mailto:info@aecmos.com</a>
		<div class="controls row">
			 <a class="btn recall_link" >обратный звонок</a>
		</div>
		<div class="way_instruction">
			<b><br>
 </b><br>
 <b>Маршрут от станций метро:</b><br>
 <span style="color:#308800">ТВЕРСКАЯ</span>, <span style="color:#7688a0">ЧЕХОВСКАЯ</span>, <span style="color:#800392">ПУШКИНСКАЯ</span>
			<p>
				 Вниз по Тверскому бульвару до перекрестка со светофорами. Далее до ул Большая Никитская прямо в переулок до Столового переулка направо. Дом 6. Парадный вход с деревянной дверью. Нажать звонок домофона.
			</p>
		</div>
		<div class="way_instruction">
 <b>Маршрут от станций метро:</b><br>
 <span style="color:#059ff5">АЛЕКСАНДРОВСКИЙ САД</span>, <span style="color:#f91400">БИБЛИОТЕКА им ЛЕНИНА</span>, <span style="color:#7688a0">БОРОВИЦКАЯ</span>
			<p>
				 Выход на улицу пройти до кинотеатра "Художественный". По подземному переходу направо к Никитскому бульвару. Пешком 5 минут вверх до сложного перекрестка со светофорами. С Никитского бульвара налево по Большой Никитской. Мимо церкви прямо в переулок к Столовому переулку. Дом 6. Подъезд с красивой деревянной дверью. Позвонить в домофон.
			</p>
		</div>
		<div class="way_instruction">
 <b>Маршрут от станций метро:</b><br>
 <span style="color:#059ff5">АРБАТСКАЯ</span>, <span style="color:#134ab1">АРБАТСКАЯ</span>
			<p>
				 Выйти на улицу Воздвиженка. Далее идти по ней в сторону улицы Новый Арбат. После пересечения Гоголевского бульвара перейти на другую сторону улицы Новый Арбат по подземному переходу. Свернуть в Мерзляковский переулок и идти по нему до пересечения со Скатертным переулком, повернуть налево. Далее первый поворот направо в Медвежий переулок и первый поворот налево в Столовый переулок. Идти прямо. Дом 6. Парадный вход с деревянной дверью. Нажать звонок домофона.
			</p>
			<p>
 <img width="192" src="/images/IMG_7131-15-10-18-11-53.JPG" height="256"><br>
			</p>
		</div>
 <b>Созвонитесь с нами заранее для заказа вам пропуска</b>
	</div>
</div>
<div class="contacts row">
	<div class="map_block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	array(
	"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.768438980505316;s:10:\"yandex_lon\";d:37.51930153845421;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.524215237286;s:3:\"LAT\";d:55.768293854466;s:4:\"TEXT\";s:53:\"ул.1-я Магистральная, д.17, стр.1\";}}}",	// Данные, выводимые на карте
		"MAP_HEIGHT" => "545",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "520",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	)
);?>
	</div>
	<div class="map_block_mobile">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	array(
	"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.768438980505316;s:10:\"yandex_lon\";d:37.51930153845421;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.524215237286;s:3:\"LAT\";d:55.768293854466;s:4:\"TEXT\";s:53:\"ул.1-я Магистральная, д.17, стр.1\";}}}",	// Данные, выводимые на карте
		"MAP_HEIGHT" => "200",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	)
);?>
	</div>
	<div class="inform_block">
		<h2>Адрес склада</h2>
		<div class="contacts_address">
			 121069, Москва, Россия<br>
			 ул.1-я Магистральная, д.17, стр.1
		</div>
		<div class="contacts_phones">
 <a href="+79299518654">+7 (929) 951-86-54 (Елена)</a>
			для заказа пропуска сообщить марку и номер машины.
		</div>
		<div class="way_instruction">
			<p>
				 Склад находится на пересечении улиц 1-й Магистральной и 5-й Магистральной.<br>
				 Заезд со стороны 2-го Магистрального тупика.<br>
				 Напротив заправочной станции ЛукОйл, синие ворота.<br>
 <br>
 <b>Просьба предварительно позвонить кладовщику.</b>
			</p>
		</div>
		<div class="photos">
 <img src="/images/storage_photo_1.jpg"> <img src="/images/storage_photo_2.jpg"><br>
		</div>
	</div>
</div>
 &nbsp;
<h2>Реквизиты</h2>
 <br>
 ООО "АРТ-ЭКО"<br>
 ИНН:&nbsp;7703764891<br>
 ОГРН:&nbsp;1127746199140<br>
 Юр. адрес:&nbsp;121069, г. Москва, Столовый переулок, д.6,&nbsp;этаж 2, комната 207<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>