<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (CModule::IncludeModule("main")):

	$arEventFields = array(
		"AUTHOR"           => htmlspecialcharsEx($_REQUEST['AUTHOR']),
		"TEL"              => htmlspecialcharsEx($_REQUEST['TEL']),
		"PIC"              => htmlspecialcharsEx($_REQUEST['PIC']),
		"REF"              => urldecode(htmlspecialcharsEx($_SERVER['REQUEST_URI'])),
		"SOURCE"           => htmlspecialcharsEx($_REQUEST['SOURCE']),
		"EMAIL_TO"         => COption::GetOptionString('main', 'email_from')
	);

	if(htmlspecialchars($_REQUEST['submit'],3)<>""){
		if(strlen(htmlspecialchars($_REQUEST['AUTHOR'],3))>2
		   && strlen(htmlspecialchars($_REQUEST['AUTHOR'],3))<100){
			if(strlen(trim(htmlspecialchars($_REQUEST['TEL'],3))) == 16 && strpos(htmlspecialchars($_REQUEST['TEL'],3), '_') === false){
				
				$file = CFile::GetFileArray($arEventFields['PIC']);
				$site = $_SERVER["HTTP_HOST"];
				$href = $file['src'];
				if($arEventFields['PIC']):
				$arEventFields['LINK'] = '<a href="https://' . $site . '' . $file['SRC'] . '" target="_blank">Файл ID: ' . $arEventFields['PIC'] . '</a>';
				endif;
				

				if(htmlspecialchars($_REQUEST['AUTHOR'],3) !== 'test'):

                    if (CEvent::Send("FEEDBACK_FORM", "s1", $arEventFields)) {
                        $arResult['SUC'][] = "Сообщение отправлено. Спасибо";


                        $fields['AUTHOR'] = htmlspecialcharsEx($_REQUEST['AUTHOR']);
                        $fields['TEL'] = htmlspecialcharsEx($_REQUEST['TEL']);
                        /* in /bitrix/php_interface/init.php */
                        if (SMS_SEND == "Y")
                            be_sms_connector($fields);


                    }else {
                        if (DEBUG == 1)
                            $arResult['ERR'][] = "!message sent, " . __FILE__ . " " . __LINE__;

                    }

                else:
                    $arResult['SUC'][] = "good";
                endif;

			}
			else{
				$arResult['ERR'][] = "Не правильно введен телефон";
			}
		}else{
			$arResult['ERR'][] = "Пустое имя или очень длинное имя";
		}
	}

endif;
$this->includeComponentTemplate();