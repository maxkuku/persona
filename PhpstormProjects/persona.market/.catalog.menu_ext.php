<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
global $aMenuLinks;
CModule::IncludeModule('iblock');
/*$filter = array("IBLOCK_ID" => 4, "!=PROPERTY_BRAND" => false);
$items_sel =  (new CIBlockElement())->GetList([], $filter, array('PROPERTY_BRAND'), 0, [
	'ID',
	'IBLOCK_ID',
	'NAME',
	'CODE',
	'PROPERTY_BRAND']
);
$arResult1['ITEMS_SELECTED'] = $items_sel->SelectedRowsCount();

$brands = Array ( 0 => Array(
            'TEXT' => 'Бренды',
            'LINK' => '/catalog/brands/',
            'PERMISSION' => 'X',
            'ADDITIONAL_LINKS' => Array
                (
                    '/catalog/brands/',
                ),

            'ITEM_TYPE' => 'U',
            'ITEM_INDEX' => '0',
            'PARAMS' => Array
                (
                    'FROM_IBLOCK' => 1,
                    'IS_PARENT' => true,
                    'DEPTH_LEVEL' => 1,
                    'item_id' => 3684082970,
                    'picture_src' => '/bitrix/templates/persona/images/brands-24x24.png',
                    'description' => 'Бренды',
                ),

            'CHAIN' => Array
                (
                    'Бренды',
                ),

            'DEPTH_LEVEL' => 1,
            'IS_PARENT' => true,
        )
);
$i = 1;
$ar = [];
if(!$arResult1['ITEMS_SELECTED'])
	$brands = [];
else
	while($item = $items_sel->Fetch()) {

        #pr($item);

		$ar = Array ( $i => Array (
			'TEXT' => '"' . $item['PROPERTY_BRAND_VALUE'] . '"',
			'LINK' => '/catalog/brands/' . strtolower(rus2translit(['PROPERTY_BRAND_VALUE'])) . '/',
			'PERMISSION' => 'X',
			'ADDITIONAL_LINKS' => Array
			(
				0 => '/catalog/brands/' . strtolower(rus2translit(['PROPERTY_BRAND_VALUE'])) . '/',
			),

			'ITEM_TYPE' => 'U',
			'ITEM_INDEX' => $i,
			'PARAMS' => Array
			(
				'FROM_IBLOCK' => 1,
				'IS_PARENT' => false,
				'DEPTH_LEVEL' => 2,
				'item_id' => '368408297' . $i,
				'picture_src' => '',
				'description' => $item['PROPERTY_BRAND_VALUE'],
			),

			'CHAIN' => Array
			(
				0 => 'Бренды', 1 => $item['PROPERTY_BRAND_VALUE']
			),

			'DEPTH_LEVEL' => 2,
			'IS_PARENT' => false,
		)
    );

		array_merge($brands, $ar);
		$i++;
	}*/


if(!$aMenuLinks)
	$aMenuLinks = [];


if(!$brands)
    $brands = [];


$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"persona:menu.sections",
	"",
	Array(
		"IS_SEF" => "N",
		#"SEF_BASE_URL" => SITE_DIR."catalog/",
		#"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		#"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"IBLOCK_TYPE" => "goods",
		"IBLOCK_ID" => "4",
		"DEPTH_LEVEL" => "3",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		#"PATH" => rtrim(str_replace(SITE_DIR . 'catalog/', '', $APPLICATION->GetCurDir()), '/')
	),
	false
);



$aMenuLinks = array_merge($aMenuLinks, $brands, $aMenuLinksExt);
#pr($aMenuLinks);