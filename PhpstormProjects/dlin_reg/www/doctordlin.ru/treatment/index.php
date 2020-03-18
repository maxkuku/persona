<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мы лечим");
?><div class="wrap page-header">
	<div class="wrap breadcrumbs">
		<? $APPLICATION->IncludeComponent("dlin:breadcrumb", ".default", array(), false); ?>
	</div>
</div>
<div>
	<?
	$files = scandir(__DIR__);
	foreach($files as $f){
		if($f != "." AND $f != ".." AND $f != "images" AND $f != "") {
			$text = file_get_contents($f . '/index.php');

			/**
			 * заголовок в SetTitle. В h1 не везде
			 */
			$h    = substr($text, strpos($text, 'SetTitle("'), 200);
			$hand = substr($h, 10, strpos($h, '")') - 10);

			if($hand) {
				$title = $hand;

				$begin_point = strpos($text, 'h1');
				$text_crop   = substr($text, $begin_point);


				$img_text_crop   = substr( $text_crop, strpos( $text_crop, 'src="' ));
				$length_num = strpos($img_text_crop, '>');
				$src = substr( $img_text_crop, 0, $length_num );

				echo $src . "<br>";

				/**
				 *  есть так, и есть так
				 * images/2019/09/6d66418e82f40b5ca49799a788023031
				 * images/protruzia
				 */
				$src_expl = explode('/', $src);
				if(count($src_expl) > 2){

				}
			}
		}
	}
	?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>