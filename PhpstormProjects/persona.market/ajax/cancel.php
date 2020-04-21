<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Cancel");

CModule::IncludeModule('iblock');
CModule::IncludeModule('form');


$orderId = htmlspecialchars($_REQUEST['orderId'],3);
$returnUrl = htmlspecialchars($_REQUEST['returnUrl'],3);



$url = "https://".SBER_ADDR.".sberbank.ru/payment/rest/reverse.do?userName=".SBER_LOGIN."&currency=643&language=ru&orderId=" . $orderId . "&password=".SBER_PASS."&pageView=DESKTOP&sessionTimeoutSecs=1200";



$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_POST, true);
curl_setopt($handle, CURLOPT_POSTFIELDS, $postData);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($handle);
curl_close($handle);

echo $output;
