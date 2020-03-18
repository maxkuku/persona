<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<div id="modal-form" class="uk-modal">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<div class="uk-modal-header">Записаться на прием</div>
		<div id="form-content">
			<form class="uk-form uk-form-stacked">
				<fieldset>
					<div class="uk-form-row">
						<legend>Ваше имя</legend>
						<input type="text" name="AUTHOR" class="uk-form-width-medium" required></div>
					<div class="uk-form-row">
						<legend>Ваш телефон</legend>
						<input type="tel" name="TEL" class="uk-form-width-medium" required></div>
					<div class="uk-form-row">
						<input type="submit" name="submit"
						       class="uk-form-width-medium uk-button-primary uk-button"
						       value="Отправить"></div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<script>
	var modal = UIkit.modal("#modal-form");
	<?if(!empty($arResult['ERR'])):?>
		$('#form-content').text("<?=implode("<br/>",$arResult['ERR'])?>");
		modal.show();
	<?elseif(!empty($arResult['SUC'])):?>
		$('#form-content').text(<?=$arResult['SUC']?>)
		modal.show();
	<?endif?>
</script>