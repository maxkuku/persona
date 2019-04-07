<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
/* ?whole_price=2160
&sale=250
&material=laminirovanny
&laminirovanny=on
&quality=360+dpi
&dpi360=on
&order_width=3000
&order_height=1200
&order_quan=2
&order_square=7.2
&liuvers=liuvers
&liuvers=on
&kray=
&shnur=
&v_razmer=
&karman=karman
&karman=on
&PHONE=45646546456+test
&licenses_popup=Y
&chooze_submit=Отправить */

$mat_switch = "";
switch(htmlspecialchars($_REQUEST['material'],3)){
    case "laminirovanny":
        $mat_switch = "Ламинированный";
        break;
    case "litoy":
        $mat_switch = "Литой";
        break;
    case "setka":
        $mat_switch = "Баннерная сетка";
        break;
    case "svetoblock":
        $mat_switch = "Баннер светоблокирующий";
        break;
    case "svetorassey":
        $mat_switch = "Баннер свеорассеивающий";
        break;
    default:
        $mat_switch = "Не указано";
        break;
}

$phone = htmlspecialchars($_REQUEST['PHONE'],3);
$name = htmlspecialchars($_REQUEST['order_name'],3);
$sale = htmlspecialchars($_REQUEST['sale'],3);
$quality = htmlspecialchars($_REQUEST['quality'],3);

foreach($_REQUEST['order_width'] as $i=>$v) {
	$width[$i]  = htmlspecialchars( $_REQUEST['order_width'][$i], 3 );
	$height[$i] = htmlspecialchars( $_REQUEST['order_height'][$i], 3 );
	$quan[$i] = htmlspecialchars( $_REQUEST['order_quan'][$i], 3 );
}

$liuvers = htmlspecialchars($_REQUEST['liuvers'],3)?"Да":"";
$shnur = htmlspecialchars($_REQUEST['shnur'],3)?"Да":"";
$v_razmer = htmlspecialchars($_REQUEST['v_razmer'],3)?"Да":"";
$karman = htmlspecialchars($_REQUEST['karman'],3)?"Да":"";
$kray = htmlspecialchars($_REQUEST['kray'],3)?"Да":"";
$bez = htmlspecialchars($_REQUEST['bez'],3)?"Да":"";
$dostavka = htmlspecialchars($_REQUEST['dostavka'],3)?"Да":"";
$montazh2 = htmlspecialchars($_REQUEST['montazh2'],3)?"Да":"";
$design = htmlspecialchars($_REQUEST['design'],3)?"Да":"";
$agree = htmlspecialchars($_REQUEST['licenses_popup2'],3)?"Да":"";

if(strlen(htmlspecialchars($_REQUEST['chooze_submit'],3)) == 9){
    $line = "";


    $line .= "Контакт: " . htmlspecialchars($_REQUEST['PHONE'],3) . "\r\n";
    $line .= "Имя: " . htmlspecialchars($_REQUEST['order_name'],3) . "\r\n";
    $line .= "Скидка: " . htmlspecialchars($_REQUEST['sale'],3) . " руб.\r\n";
    $line .= "Материал: " . $mat_switch . "\r\n";
    $line .= "Качество печати: " . htmlspecialchars($_REQUEST['quality'],3) . "\r\n";


	foreach($width as $i=>$v) {
		$j = $i+1;
		$line .= "Ширина (" . $j . "), мм: " . $v . "\r\n";
		$line .= "Высота (" . $j . "), мм: " . $height[$i] . "\r\n";
		$line .= "Количество (" . $j . "): " . $quan[$i] . "\r\n";
	}

    if($liuvers)
        $line .= "Люверсы: " . $liuvers . "\r\n";

    if($shnur)
        $line .= "Усиление шнуром: " . $shnur . "\r\n";

    if($v_razmer)
        $line .= "Резка в размер: " . $v_razmer . "\r\n";

    if($karman)
        $line .= "Проклейка карманов: " . $karman . "\r\n";

    if($kray)
        $line .= "Проклейка краев: " . $kray . "\r\n";

	if($bez)
		$line .= "Без доп. обработки: " . $bez . "\r\n";

    if($dostavka)
		$line .= "Доставка: " . $dostavka . "\r\n";

    if($montazh2)
        $line .= "Монтаж: " . $montazh2 . "\r\n";

    if($design)
        $line .= "Дизайн: " . $design . "\r\n";

    $line .= "Согласие на обработку данных: " . $agree . "\r\n";

    /*foreach ($_REQUEST as $key => $value) {
        $line .= "Параметр " . htmlspecialchars($key, 3) . " – " . htmlspecialchars($value, 3) . "<br>";
    }*/



	#print_r(get_defined_vars());
	#exit();




    $arEventFields = array(
        "ID"                  => SITE_ID,
        "MESSAGE"             => $line,
        #"EMAIL_TO"            => 'mk@place-print.ru',
        "EMAIL_TO"            => '1217929@mail.ru',
        "DATE_CREATE"         => date('Y-m-d H:i'),
    );
    $arrSITE =  SITE_ID;
    if(htmlspecialchars($_REQUEST['sessid'],3) === bitrix_sessid()) {
        if (CEvent::Send("QUICK_SEND_FORM_ADMIN", $arrSITE, $arEventFields)) {
            $arResult["OK"] = "<script>alert('".GetMessage("THANK")." <p id=\"more\">".GetMessage("ORDER_MORE")."</p>')</script>";
        }
    }
    else{
        $arResult["OK"] = "<script>alert('".GetMessage("ERR_SEND")."')</script>";
    }
}

$this->includeComponentTemplate();