<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Register");

CModule::IncludeModule('iblock');
CModule::IncludeModule('form');

$token = TOKEN;
$amount = htmlspecialchars($_REQUEST['amount'],3);
$orderNumber = htmlspecialchars($_REQUEST['orderNumber'],3);
$returnUrl = htmlspecialchars($_REQUEST['returnUrl'],3);

$city = htmlspecialchars($_REQUEST['city'],3);
$index = htmlspecialchars($_REQUEST['index'],3);
$usercomm = htmlspecialchars($_REQUEST['usercomm'],3);
$delivery = htmlspecialchars($_REQUEST['delivery'],3);
$useraddr = htmlspecialchars($_REQUEST['useraddr'],3);

$params = [
    "username"=>htmlspecialchars($_REQUEST['username'],3),
    "userphone"=>htmlspecialchars($_REQUEST['userphone'],3),
    "email"=>htmlspecialchars($_REQUEST['email'],3),
    "index"=>$index,
    "city"=>$city,
    "usercomm"=>$usercomm,
    "delivery"=>$delivery,
    "useraddr"=>$useraddr,
];




$fp = fopen(ROOT_NO_SLASH . '/basket/register_order.log', 'a+');
fwrite($fp, date('Y-m-d H:i:s') . ", получено параметры - " . implode(" ", $params) . "\n");
fclose($fp);






$url = "https://".SBER_ADDR.".sberbank.ru/payment/rest/register.do?amount=" . intval($amount) . "00&currency=643&language=ru&orderNumber=" . $orderNumber . "&token=" . $token . "&returnUrl=" . $returnUrl . "&pageView=DESKTOP&sessionTimeoutSecs=1200";



# полученные результаты записать в форму конечного заказа, убрать товары из корзины и вывести спасибо
# функция в init.php
move_to_form_3($params);



$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_POST, true);
curl_setopt($handle, CURLOPT_POSTFIELDS, $postData);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($handle);
curl_close($handle);

echo $output;
