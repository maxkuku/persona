<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/site_fv/clinic/photogallery/#",
		"RULE" => "",
		"ID" => "bitrix:photo",
		"PATH" => "/clinic/photogallery/index.php",
	),
	array(
		"CONDITION" => "#^/site_fv/clinic/photogallery/#",
		"RULE" => "",
		"ID" => "bitrix:photo",
		"PATH" => "/site_fv/clinic/photogallery/index.php",
	),
	array(
		"CONDITION" => "#^/specialization/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/specialization/index.php",
	),
	array(
		"CONDITION" => "#^/clinic/promo/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/clinic/promo/index.php",
	),
	array(
		"CONDITION" => "#^/clinic/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/clinic/news/index.php",
	),
    array(
        "CONDITION" => "#^/doctors/#",
        "RULE" => "",
        "ID" => "bitrix:catalog",
        "PATH" => "/doctors/index.php",
    ),
	/*array(
        'CONDITION' => '#^/doctors/([\\w-_]+)/.*#',
        'RULE' => 'ELEMENT_CODE=$1',
        'ID' => '',
        'PATH' => '/doctors/index.php',
        'SORT' => 100,
	),*/
	array(
		"CONDITION" => "#^/service/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/service/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>