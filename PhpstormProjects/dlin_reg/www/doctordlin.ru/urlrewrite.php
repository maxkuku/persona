<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/articles/(.*)/(.*)#",
		"RULE" => "CODE=\$1",
		"ID" => "",
		"PATH" => "/articles/detail.php",
	),
);

?>