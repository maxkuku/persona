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
define( 'COUNTDOWN', '2019-08-31' );


$useragent=$_SERVER['HTTP_USER_AGENT'];
#define( 'MOB', 0 );
if(preg_match('/(android|bbd+|meego).+mobile|avantgo|bada/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)/|plucker|pocket|psp|series(4|6)0|symbian|treo|up.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw-(n|u)|c55/|capi|ccwa|cdm-|cell|chtm|cldc|cmd-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc-s|devi|dica|dmob|do(c|p)o|ds(12|-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(-|_)|g1 u|g560|gene|gf-5|g-mo|go(.w|od)|gr(ad|un)|haie|hcit|hd-(m|p|t)|hei-|hi(pt|ta)|hp( i|ip)|hs-c|ht(c(-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i-(20|go|ma)|i230|iac( |-|/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |/)|klon|kpt |kwc-|kyo(c|k)|le(no|xi)|lg( g|/(k|l|u)|50|54|-[a-w])|libw|lynx|m1-w|m3ga|m50/|ma(te|ui|xo)|mc(01|21|ca)|m-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|-([1-8]|c))|phil|pire|pl(ay|uc)|pn-2|po(ck|rt|se)|prox|psio|pt-g|qa-a|qc(07|12|21|32|60|-[2-7]|i-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55/|sa(ge|ma|mm|ms|ny|va)|sc(01|h-|oo|p-)|sdk/|se(c(-|0|1)|47|mc|nd|ri)|sgh-|shar|sie(-|m)|sk-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h-|v-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl-|tdg-|tel(i|m)|tim-|t-mo|to(pl|sh)|ts(70|m-|m3|m5)|tx-9|up(.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas-|your|zeto|zte-/i',substr($useragent,0,4))){
    define( 'MOB', 1 );
}


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
	#$SESSION_ID = end(explode('=', bitrix_sessid_get()));
	global $USER;
	global $DB;
	$FORM_ID = 2;
	$ITEM = [];
	$price = 0;
	$quan  = 0;
	$json = [];
    $RIDS = "";

	# если авторизован, то выберем все незаконченные формы
	if($USER->GetID()) {
		$forms = $DB->Query("SELECT ID FROM b_form_result WHERE FORM_ID = ".$FORM_ID." AND USER_ID = " . $USER->GetID());

		while ($form = $forms->Fetch()) {
			$RIDS_ARR[] = $form['ID'];
		}
		$RIDS = implode(",", $RIDS_ARR);
	}



	# у одного заказа в форме несколько строк
	# выберем все строки с id сессии
	if(strlen($RIDS) > 0) {
		$res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND USER_TEXT = '$BX_USER_ID' OR RESULT_ID IN ($RIDS)");
	}
	else{
		$res = $DB->Query("SELECT RESULT_ID FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND USER_TEXT = '$BX_USER_ID'");
	}




	if($res->SelectedRowsCount() > 0) {

		$arAnswer1 = [];
		while ( $arAnswer = $res->Fetch() ) {
			$arAnswer1[] = $arAnswer['RESULT_ID'];
		}
		$ids = implode( ',', $arAnswer1 );
		# FIELD_ID = 8 -> item ID, 10 -> price
		$res1       = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 8" );
		$res2      = $DB->Query( "SELECT USER_TEXT FROM b_form_result_answer WHERE FORM_ID = ".$FORM_ID." AND RESULT_ID IN ($ids) AND FIELD_ID = 10" );



		while ( $idAnswer = $res1->Fetch() AND $priceAnswer = $res2->Fetch() ) {
			$x = $idAnswer['USER_TEXT'];
			$ITEM[$x]['ITEM'] = [$idAnswer['USER_TEXT'], $priceAnswer['USER_TEXT']];
			$ITEM[$x]['ID'] = $idAnswer['USER_TEXT'];
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
														<button class="btn btn-sm btn-default" type="button" onclick="cart.updatePopup(\'' . $ar_res["ID"] . '\',\'0\');">-</button>
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
