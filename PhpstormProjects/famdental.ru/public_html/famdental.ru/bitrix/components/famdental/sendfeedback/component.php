<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();



if (CModule::IncludeModule("main")):

	$arEventFields = array(
		"AUTHOR"           => htmlspecialcharsEx($_REQUEST['AUTHOR']),
		"TEL"              => htmlspecialcharsEx($_REQUEST['TEL']),
		"REF"              => urldecode(htmlspecialcharsEx($_REQUEST['REF'])),
		"SOURCE"           => htmlspecialcharsEx($_REQUEST['SOURCE']),
		"EMAIL_TO"         => ADMINEMAIL
	);

	if(htmlspecialchars($_REQUEST['submit'],3)<>""){
		if(strlen(htmlspecialchars($_REQUEST['AUTHOR'],3))>2
		   && strlen(htmlspecialchars($_REQUEST['AUTHOR'],3))<100){
			if(strlen(trim(htmlspecialchars($_REQUEST['TEL'],3))) == 18){

				if (CEvent::Send("FEEDBACK_FORM", "s1", $arEventFields)):
					$arResult['SUC'] = "Сообщение отправлено. Спасибо";
				else:
					if(DEBUG == 1)
						$arResult['ERR'][] = "!message sent, " . __FILE__ . " " . __LINE__ ;
				endif;

			}else{
				$arResult['ERR'][] = "Не правильно введен телефон";
			}
		}else{
			$arResult['ERR'][] = "Пустое имя или очень длинное имя";
		}
	}

endif;
$this->includeComponentTemplate();



