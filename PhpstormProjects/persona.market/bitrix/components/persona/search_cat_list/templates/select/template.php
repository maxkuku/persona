<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
}

if ( empty( $arResult['SECTIONS'] ) ) {
	return;
}


foreach ($arResult['SECTIONS'] as $sec){?>
    <option id="<?=str_replace("_", "-", strtolower(rus2translit($sec[1])))?>-s"><?=$sec[1]?></option>
<?}