<?
/** функция обрезки текста с тегами до нужной длины символов*/
function my_crop($text, $length, $clearTags = true)
{
    $text = trim($text);
    if ($clearTags === true)
        $text = strip_tags($text);
    if ($length <= 0 || strlen($text) <= $length)
        return $text;
    $out = mb_substr($text, 0, $length);
    $pos = mb_strrpos($out, ' ');
    if ($pos)
        $out = mb_substr($out, 0, $pos);
    return $out.'…';
}

/** post request via CURL */
function post_content ($url,$postdata) {
    $uagent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)";

    $ch = curl_init( $url );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, "application/json");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_USERAGENT, $uagent);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));

    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    $d = $header;
    return $d;
}

define("SMS_SEND", "Y");
define("BANNER_MAIN", "Y");
define("BANNER_ALL", "Y");
define("SPEC_BANNER_TEXT", "Бесплатная консультация: мануальный терапевт, вертебролог, невролог, остеопат");
define("ROOT_PATH", "/var/www/u0616147/data/www/doctordlin.ru/");

/** send sms via special service if sms_send = Y */
function be_sms_connector( $fields ) {


    $body_t = "Запись: " . $fields['AUTHOR'] . ", тел.: " . $fields['TEL'] . ", дата: " . $date = date( 'Y-m-d H:i' );


    /**
     * @var  $k
     * @var  $v
     *
     * "AUTHOR" => htmlspecialchars($_REQUEST['AUTHOR'],3),
     * "TEL" => htmlspecialchars($_REQUEST['TEL'],3),
     */


    /**79252936760*/
    #$api_url = "https://sms.ru/sms/send?api_id=8B552C02-8705-0B75-0264-604AD6E596AD&to=79067272710&msg=$body&json=1";




    $ch = curl_init("https://sms.ru/sms/send");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        "api_id" => "AC03B972-C11E-DFB7-0B90-018C7907DDDC",
        "to" => "79646425137",
        #"msg" => iconv("windows-1251", "utf-8", $body_t),
        "msg" => $body_t,
        "json" => 1
    )));
    $body = curl_exec($ch);
    curl_close($ch);

    $msg = "";
    $json = json_decode($body);
    if ($json) {
        # print_r($json);
        if ($json->status == "OK") {
            foreach ($json->sms as $phone => $data) {
                if ($data->status == "OK") {
                    $msg .= "Сообщение на номер $phone успешно отправлено. ";
                    $msg .= "ID сообщения: $data->sms_id. ";
                    $msg .= "";
                } else {
                    $msg .=  "Сообщение на номер $phone не отправлено. ";
                    $msg .=  "Код ошибки: $data->status_code. ";
                    $msg .=  "Текст ошибки: $data->status_text. ";
                    $msg .=  "";
                }
            }
            $msg .=  "Баланс после отправки: $json->balance руб.";
            $msg .=  "";
        } else {
            $msg .=  "Запрос не выполнился. ";
            $msg .=  "Код ошибки: $json->status_code. ";
            $msg .=  "Текст ошибки: $json->status_text. ";
        }
    } else {

        $msg .=  "Запрос не выполнился. Не удалось установить связь с сервером. ";

    }

    $fp = fopen(__DIR__ . '/sms.log', "a+");
    fwrite($fp, "SMS sent: $msg, $body_t, $date\r\n");



    /**79252936760*/
    #$api_url = "https://sms.ru/sms/send?api_id=AC03B972-C11E-DFB7-0B90-018C7907DDDC&to=79252936760&msg=$body&json=1";
    #$request = post_content( $api_url, array( 'msg' => $body ) );
    #$res = json_decode( $request,true );





}


define("PERCENT_RECOMEND", 94);

?>