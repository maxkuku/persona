<?
//-- Добавление обработчика события

AddEventHandler("sale", "OnOrderNewSendEmail", "bxModifySaleMails");

//-- Собственно обработчик события

function bxModifySaleMails($orderID, &$eventName, &$arFields)
{
  $arOrder = CSaleOrder::GetByID($orderID);
  
  //-- получаем телефоны и адрес
  $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);
  $phone="";
  $index = ""; 
  $address = "";
  $docs = "";
  while ($arProps = $order_props->Fetch())
  {
    if ($arProps["CODE"] == "PHONE")
    {
       $phone = htmlspecialchars($arProps["VALUE"]);
    }

    if ($arProps["CODE"] == "INDEX")
    {
      $index = $arProps["VALUE"];   
    }

    if ($arProps["CODE"] == "ADDRESS")
    {
      $address = $arProps["VALUE"];
    }
	
	if ($arProps["CODE"] == "DOCS")
    {
      $docs = $arProps["VALUE"];
    }
  }

  $full_address = $index.", ".$address;

  //-- добавляем новые поля в массив результатов
  $arFields["ORDER_DESCRIPTION"] = $arOrder["USER_DESCRIPTION"]; 
  $arFields["PHONE"] =  $phone;
  $arFields["ADDRESS"] = $full_address; 
  $arFields["DOCS"] = $docs; 
}

AddEventHandler('sale', 'OnBeforeBasketAdd', 'detailAdd2basketAddProps');
function detailAdd2basketAddProps(&$fields){
	if($_REQUEST['selectedSize'])
		$fields['PROPS'][] = [
			'NAME' => 'Размер',
            'CODE' => 'SIZE',
            'VALUE' => $_REQUEST['selectedSize']
		];
	if($_REQUEST['selectedLength'])
		$fields['PROPS'][] = [
			'NAME' => 'Длина',
            'CODE' => 'LENGTH',
            'VALUE' => $_REQUEST['selectedLength']
		];
}



	file_put_contents($_SERVER['DOCUMENT_ROOT']."/bitrix/php_interface/test.txt",$APPLICATION->get_cookie("go_from7"));




if(!$param_id = $APPLICATION->get_cookie("go_from7"))
{
	
	CModule::IncludeModule("iblock");	
	
		$res = CIBlockElement::GetList(
											array(), 
											array('IBLOCK_ID'=>29,'ACTIVE'=>'Y'), 
											false, 
											false, 
											array("NAME","PROPERTY_PARAMS"));
		
		while($ar_res = $res->GetNext()){
			
			if(array_key_exists($ar_res['PROPERTY_PARAMS_VALUE'],$_GET)){
				
				$APPLICATION->set_cookie("go_from7", $ar_res['NAME'], time()+60*60*24*30);
			}
		}	
}


AddEventHandler('sale', 'OnOrderSave', 'OnOrderSave');

function OnOrderSave($ID,$arOrder,$orderFields,$isNew){

	global $APPLICATION;
	$param_id = $APPLICATION->get_cookie("go_from7");
	
	if($isNew)
	{
	
		$db_props = CSaleOrderProps::GetList(
			array("SORT" => "ASC"),
			array(
					"PERSON_TYPE_ID" => $arOrder["PERSON_TYPE_ID"],
					"CODE" => "FROM",
				),
			false,
			false,
			array("ID","NAME")
		);

		if ($props = $db_props->Fetch())
		{
			$db_vals = CSaleOrderPropsValue::GetList(
					array(),
					array(
							"ORDER_ID" => $ID,
							"ORDER_PROPS_ID" => $props["ID"]
					)
			);
			if ($arVals = $db_vals->Fetch())
			{
							
				$arFieldsUpdate = array(			  
				   
				   "VALUE" => $param_id
				);
				
				CSaleOrderPropsValue::Update($arVals['ID'], $arFieldsUpdate);
				
			}else{
				
				
				
				$arFields = array(
				   "ORDER_ID" => $ID,
				   "ORDER_PROPS_ID" => $props['ID'],
				   "NAME" => $props['NAME'],
				   "CODE" => "FROM",
				   "VALUE" => $param_id
				);

				CSaleOrderPropsValue::Add($arFields);
				
			}		
		}	
	}
}

AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "DoIBlockAfterSave");
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "DoIBlockAfterSave");
AddEventHandler("catalog", "OnPriceAdd", "DoIBlockAfterSave");
AddEventHandler("catalog", "OnPriceUpdate", "DoIBlockAfterSave");
function DoIBlockAfterSave($arg1, $arg2 = false)
{
 $ELEMENT_ID = false;
 $IBLOCK_ID = false;
 $OFFERS_IBLOCK_ID = false;
 $OFFERS_PROPERTY_ID = false;
 if (CModule::IncludeModule('currency'))
 $strDefaultCurrency = CCurrency::GetBaseCurrency();

 //Check for catalog event
 if(is_array($arg2) && $arg2["PRODUCT_ID"] > 0)
 {
 //Get iblock element
 $rsPriceElement = CIBlockElement::GetList(
 array(),
 array(
 "ID" => $arg2["PRODUCT_ID"],
 ),
 false,
 false,
 array("ID", "IBLOCK_ID")
 );
 if($arPriceElement = $rsPriceElement->Fetch())
 {
 $arCatalog = CCatalog::GetByID($arPriceElement["IBLOCK_ID"]);
 if(is_array($arCatalog))
 {
 //Check if it is offers iblock
 if($arCatalog["OFFERS"] == "Y")
 {
 //Find product element
 $rsElement = CIBlockElement::GetProperty(
 $arPriceElement["IBLOCK_ID"],
 $arPriceElement["ID"],
 "sort",
 "asc",
 array("ID" => $arCatalog["SKU_PROPERTY_ID"])
 );
 $arElement = $rsElement->Fetch();
 if($arElement && $arElement["VALUE"] > 0)
 {
 $ELEMENT_ID = $arElement["VALUE"];
 $IBLOCK_ID = $arCatalog["PRODUCT_IBLOCK_ID"];
 $OFFERS_IBLOCK_ID = $arCatalog["IBLOCK_ID"];
 $OFFERS_PROPERTY_ID = $arCatalog["SKU_PROPERTY_ID"];
 }
 }
 //or iblock which has offers
 elseif($arCatalog["OFFERS_IBLOCK_ID"] > 0)
 {
 $ELEMENT_ID = $arPriceElement["ID"];
 $IBLOCK_ID = $arPriceElement["IBLOCK_ID"];
 $OFFERS_IBLOCK_ID = $arCatalog["OFFERS_IBLOCK_ID"];
 $OFFERS_PROPERTY_ID = $arCatalog["OFFERS_PROPERTY_ID"];
 }
 //or it's regular catalog
 else
 {
 $ELEMENT_ID = $arPriceElement["ID"];
 $IBLOCK_ID = $arPriceElement["IBLOCK_ID"];
 $OFFERS_IBLOCK_ID = false;
 $OFFERS_PROPERTY_ID = false;
 }
 }
 }
 }
 //Check for iblock event
 elseif(is_array($arg1) && $arg1["ID"] > 0 && $arg1["IBLOCK_ID"] > 0)
 {
 //Check if iblock has offers
	$arOffers = CIBlockPriceTools::GetOffersIBlock($arg1["IBLOCK_ID"]);
	if(is_array($arOffers))
	{
		$ELEMENT_ID = $arg1["ID"];
		$IBLOCK_ID = $arg1["IBLOCK_ID"];
		$OFFERS_IBLOCK_ID = $arOffers["OFFERS_IBLOCK_ID"];
		$OFFERS_PROPERTY_ID = $arOffers["OFFERS_PROPERTY_ID"];
	}
 }

 if($ELEMENT_ID)
 {
	static $arPropCache = array();
	if(!array_key_exists($IBLOCK_ID, $arPropCache))
	{
		 //Check for MINIMAL_PRICE property
		 $rsProperty = CIBlockProperty::GetByID("MINIMUM_PRICE", $IBLOCK_ID);
		 $arProperty = $rsProperty->Fetch();
		 if($arProperty)
		 $arPropCache[$IBLOCK_ID] = $arProperty["ID"];
		 else
		 $arPropCache[$IBLOCK_ID] = false;
	}

 if($arPropCache[$IBLOCK_ID])
 {
	 //Compose elements filter
	 if($OFFERS_IBLOCK_ID)
	 {
		 $rsOffers = CIBlockElement::GetList(
		 array(),
		 array(
		 "IBLOCK_ID" => $OFFERS_IBLOCK_ID,
		 "PROPERTY_".$OFFERS_PROPERTY_ID => $ELEMENT_ID,
	 ),
	 false,
	 false,
	 array("ID")
	 );
 while($arOffer = $rsOffers->Fetch())
	$arProductID[] = $arOffer["ID"];

	 if (!is_array($arProductID))
		$arProductID = array($ELEMENT_ID);
	 }
	 else
		$arProductID = array($ELEMENT_ID);

	$minPrice = false;
	$maxPrice = false;
	//Get prices
	$rsPrices = CPrice::GetList(
	array(),
	array(
		"PRODUCT_ID" => $arProductID,
	)
 );
 while($arPrice = $rsPrices->Fetch())
 {
	if (CModule::IncludeModule('currency') && $strDefaultCurrency != $arPrice['CURRENCY'])
	$arPrice["PRICE"] = CCurrencyRates::ConvertCurrency($arPrice["PRICE"], $arPrice["CURRENCY"], $strDefaultCurrency);

	$PRICE = $arPrice["PRICE"];

	if($minPrice === false || $minPrice > $PRICE)
	$minPrice = $PRICE;

	if($maxPrice === false || $maxPrice < $PRICE)
	$maxPrice = $PRICE;
 }

 //Save found minimal price into property
 if($minPrice !== false)
 {
	CIBlockElement::SetPropertyValuesEx(
	$ELEMENT_ID,
	$IBLOCK_ID,
	array(
		"MINIMUM_PRICE" => $minPrice,
		"MAXIMUM_PRICE" => $maxPrice,
	)
 );
 }
 }
 }
}

