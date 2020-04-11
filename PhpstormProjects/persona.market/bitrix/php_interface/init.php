<?

define('GOODS', 4);


function pr($a){
	echo "<pre>";
	print_r($a);
	echo "</pre>";
}
function siteURL()
{
$protocol = (!empty($_SERVER['HTTPS'])
             && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'].'/';
return $protocol.$domainName;
}

$protocol = (!empty($_SERVER['HTTPS'])
             && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

define( 'PROTOCOL', $protocol );
define( 'SITE_URL', siteURL() );
define( 'MIN_ORDER_PRICE', 990 );
define( 'COUNTDOWN', '2039-08-31' );
define( 'PHONE', "+7 (499) 938-42-43" );
define( 'PHONE2', "+7 (499) 938-42-43" );
define( 'WHATSAPP_PHONE_SIMPLE', "79776105832" );
define( 'WHATSAPP_PHONE', "+7 (977) 610-58-32" );
define( 'EMAIL', "info@persona.market" );
define( 'COMPANY_NAME', "«Персона» маркет" );
define( 'POSTAL_CODE', "101000" );
define( 'SCHEDULE', "Пн-Вс с 10.00 – 22.00" );
define( 'CITY_ADDR', "Россия, г. Москва" );
define( 'STREET_ADDR', "ул. Большая Полянка, 30, стр. 1" );
define( 'BIG_ADDR', "Москва, м. Полянка, Большая Полянка, 30, стр. 1" );
define( 'COMP_NAME', "«Персона» маркет" );
define( 'SLOGAN', "ПЕРСОНА МАРКЕТ - косметика и уход для волос" );
define( 'PERCENT_SALE_DELIVERY', "20" ); # процент скидки при заказе с доставкой





function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


function rus2translit($string) {
	$converter = array(
		'а' => 'a',   'б' => 'b',   'в' => 'v',
		'г' => 'g',   'д' => 'd',   'е' => 'e',
		'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
		'и' => 'i',   'й' => 'y',   'к' => 'k',
		'л' => 'l',   'м' => 'm',   'н' => 'n',
		'о' => 'o',   'п' => 'p',   'р' => 'r',
		'с' => 's',   'т' => 't',   'у' => 'u',
		'ф' => 'f',   'х' => 'h',   'ц' => 'c',
		'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
		'ь' => 'j',   'ы' => 'y',   'ъ' => 'j',
		'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

		'А' => 'A',   'Б' => 'B',   'В' => 'V',
		'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
		'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
		'И' => 'I',   'Й' => 'Y',   'К' => 'K',
		'Л' => 'L',   'М' => 'M',   'Н' => 'N',
		'О' => 'O',   'П' => 'P',   'Р' => 'R',
		'С' => 'S',   'Т' => 'T',   'У' => 'U',
		'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
		'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
		'Ь' => 'j',   'Ы' => 'Y',   'Ъ' => 'j',
		'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
		' ' => '_',   '№' => 'No'
	);
	return strtr($string, $converter);
}
function str2url($str) {
	$str = rus2translit($str);
	$str = strtolower($str);
	$str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
	$str = trim($str, "-");
	return $str;
}

function returnResultCache($timeSeconds, $cacheId, $callback, $arCallbackParams = '') {
	$obCache = new CPHPCache();
	$cachePath = '/'.SITE_ID.'/'.$cacheId;
	if( $obCache->InitCache($timeSeconds, $cacheId, $cachePath) ) {
		$vars = $obCache->GetVars();
		$result = $vars['result'];
	}
	elseif( $obCache->StartDataCache()  ) {
		$result = $callback($arCallbackParams);
		$obCache->EndDataCache(array('result' => $result));
	}
	return $result;
}

# for items in order. Show'em all!
function show_all(){
    $BX_USER_ID = $_COOKIE['BX_USER_ID'];
	global $USER;
	global $DB;
	$FORM_ID = 2;
	$ITEM = [];
	$price = 0;
	$quan  = 0;
	$json = [];


	# у одного заказа в форме несколько строк
	# выберем все строки с id сессии

	$res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND USER_TEXT = '$BX_USER_ID'");





	if($res->SelectedRowsCount() > 0) {

		$arAnswer1 = [];
		while ( $arAnswer = $res->Fetch() ) {
			$arAnswer1[] = $arAnswer['RESULT_ID'];
		}
		$ids = implode( ',', $arAnswer1 );
		# FIELD_ID = 8 -> item ID, 10 -> price, 9 -> discount/sale
		$res1      = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 8" );
		$res2      = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 10" );
		$res3      = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 9" );



		while ( $idAnswer = $res1->Fetch()
            AND $priceAnswer = $res2->Fetch()
            AND $saleAnswer = $res3->Fetch() ) {
			$x = $idAnswer['USER_TEXT'];
			$ITEM[$x]['ITEM'] = [$idAnswer['USER_TEXT'], $priceAnswer['USER_TEXT']];
			$ITEM[$x]['ID'] = $idAnswer['USER_TEXT'];
			$ITEM[$x]['SALE'] += $saleAnswer['USER_TEXT'];
			$ITEM[$x]['PRICE'] += $priceAnswer['USER_TEXT'];
			$ITEM[$x]['QUAN']++;
			$price += $priceAnswer['USER_TEXT'];
			$quan++;
		}



	}



	$json['button'] = '<span class="products" data-quan="'.$quan.'"><b>'.$quan.'</b> товаров, </span>
								<span class="prices">на <b>'.$price.'
										<span class="sr-only">р.</span>
										<span class="roboto-forced ruble" aria-hidden="true" style="display:none"></span>
									</b>
								</span>';


	if(htmlspecialchars($_REQUEST['removeFbasket'],3) == "Y"){
        $json['button'] .= '<script>location.reload()</script>';
    }


	foreach ($ITEM as $it){
		$res = CIBlockElement::GetByID($it['ID']);
		if($ar_res = $res->GetNext()) {
			$im         = $ar_res['PREVIEW_PICTURE'];
			$ar['FILE'] = CFile::ResizeImageGet( $im, array( 'width'  => 47,
			                                                 'height' => 47
			), BX_RESIZE_IMAGE_PROPORTIONAL, true );


			$json['line'] .= '<div class="well well-sm products">
						<div class="product">
							<div class="row">
								<div class="col-sm-6">
									<div class="image">
									<a href="/catalog/detail.php?ID=' . $ar_res["ID"] . '"><img src="' . $ar['FILE']['src'] . '" alt="' . $ar_res["NAME"] . '" title="' . $ar_res["NAME"] . '" class="img-thumbnail">
									</a>
									</div>
									<div class="name cartCell">
										<div class="cartCellContent">
											<a href="/catalog/detail.php?ID=' . $ar_res["ID"] . '">' . $ar_res["NAME"] . '</a>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="row">
										<div class="col-xs-5 cartCell">
											<div class="cartCellContent pquantity">
												<div class="input-group popup-quantity">
													<span class="input-group-btn">
														<button class="btn btn-sm btn-default" type="button" onclick="cart.updatePopup(\'' . $ar_res["ID"] . '\',\'-1\');">-</button>
													</span>
													<input type="text" class="form-control input-sm" value="' . $it["QUAN"] . '" >
													<span class="input-group-btn">
														<button class="btn btn-sm btn-default" type="button" onclick="cart.updatePopup(\'' . $ar_res["ID"] . '\',\'1\');">+</button>
													</span>
												</div>
											</div>
										</div>
										<div class="col-xs-5 cartCell pprice">
											<div class="cartCellContent">
												' . $it["PRICE"] . ' <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>	</div>
										</div>
										<div class="col-xs-2 cartCell text-center">
											<div class="cartCellContent">
												<a href="#" onclick="cart.remove(\'' . $ar_res["ID"] . '\');return false;" title="Удалить" class=""><i class="fa fa-trash-o fa-lg"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="cartMask"><div><div><!--i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i-->В корзине пусто</div></div></div>
					</div>';
		}
	}
	$json['totals'] = '<div class="totals text-center">
						<a class="popupTotal collapsed" data-toggle="collapse" href="#total-more" title="Подробнее">В корзине <big><b>'.$quan.'</b></big> товаров, на <big><b>'.$price.' <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></b></big>&nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
						<div id="total-more" class="collapse">
							<table class="table table-condensed">
																<tbody><tr>
									<td class="text-right" style="width: 50%"><strong>Предварительная стоимость</strong></td>
									<td class="text-left" style="width: 50%">'.$price.' <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></td>
								</tr>
																<tr>
									<td class="text-right" style="width: 50%"><strong>Итого</strong></td>
									<td class="text-left" style="width: 50%">'.$price.' <span class="sr-only">р.</span><span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span></td>
								</tr>
															</tbody></table>
						</div>
					</div>';

	echo json_encode($json, JSON_UNESCAPED_UNICODE );
}





// файл /bitrix/php_interface/init.php
// регистрируем обработчик
AddEventHandler("search", "BeforeIndex", Array("SearchIndexClass", "BeforeIndexHandler"));

class SearchIndexClass
{
	// создаем обработчик события "BeforeIndex"
	function BeforeIndexHandler($arFields)
	{
		// элемент инфоблока GOODS = 4 (не раздел)
		if($arFields["MODULE_ID"] == "iblock" && $arFields["PARAM2"] == GOODS && substr($arFields["ITEM_ID"], 0, 1) != "S")
		{
			$arFields["PARAMS"]["iblock_section"] = array();
			//Получаем разделы привязки элемента (их может быть несколько)
			$rsSections = CIBlockElement::GetElementGroups($arFields["ITEM_ID"], true);
			while($arSection = $rsSections->Fetch())
			{
				$nav = CIBlockSection::GetNavChain(GOODS, $arSection["ID"]);
				while($ar = $nav->Fetch()) {
					//Сохраняем в поисковый индекс
					$arFields["PARAMS"]["iblock_section"][] = $ar["ID"];
				}
			}
		}
		//Всегда возвращаем arFields
		return $arFields;
	}
}


// замена логина на email
// и так сделано яваскриптом в форме регистрации, но для надежности и здесь
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserUpdateHandler");
AddEventHandler("main", "OnBeforeUserUpdate", "OnBeforeUserUpdateHandler");
function OnBeforeUserUpdateHandler(&$arFields)
{
	$arFields["LOGIN"] = $arFields["EMAIL"];
	return $arFields;
}


function mob_detect() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

if(mob_detect()){
    define("MOB",1);
}
