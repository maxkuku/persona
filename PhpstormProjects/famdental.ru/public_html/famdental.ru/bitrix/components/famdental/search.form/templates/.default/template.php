<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>


<form class="uk-form form-404-search" action="<?=$arResult["FORM_ACTION"]?>">

	<fieldset data-uk-margin>
		<legend></legend>
		<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
			"bitrix:search.suggest.input",
			"",
			array(
				"NAME" => "q",
				"VALUE" => "",
				"INPUT_SIZE" => 95,
				"DROPDOWN_SIZE" => 10,
			),
			$component, array("HIDE_ICONS" => "Y")
		);?><?else:?><input type="text" name="q" value="" size="95" maxlength="50" placeholder="Поиск по сайту"
			/><?endif;?>
		<input name="s" class="uk-button uk-button-success" type="submit" value="Искать" />
	</fieldset>

</form>


