<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<div id="modal-form" class="uk-modal">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<div class="uk-modal-header">Записаться на прием</div>
		<div id="form-content">
			<form method="post" class="uk-form uk-form-stacked" onsubmit="yaCounter35248230.reachGoal('zapis'); ga('send', 'event', 'form', 'zapis');">
				<fieldset>
					<div class="uk-form-row">
						<input type="hidden" name="REF" value="<?=urldecode(urldecode($_SERVER['REQUEST_URI']))?>"/>
						<input type="text" class="uk-form-width-large" name="AUTHOR" size="20" class="uk-form-width-medium"
						       placeholder="ФИО&nbsp;пациента"
						       required></div>
					<div class="uk-form-row">
						<input type="tel" class="uk-form-width-large" name="TEL" size="20" class="uk-form-width-medium"
						       placeholder="Контактный&nbsp;телефон" required></div>
					<div class="uk-form-row">
						<textarea type="text" class="uk-form-width-medium" name="SOURCE"
						   class="uk-form-width-large" placeholder="Причина&nbsp;обращения"></textarea></div>
					<div class="uk-form-row agree">
						Нажимая кнопку, я соглашаюсь на <a href="//famdental.ru/agreement" target="_blank">обработку
							персональных данных</a>
					</div>
					<div class="uk-form-row">
						<input type="submit" name="submit"
						       class="uk-form-width-large uk-button-primary uk-button uk-button-alert"
						       value="Отправить заявку"
							></div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
	var modal = UIkit.modal("#modal-form");
	<?if(!empty($arResult['ERR'])):?>
		$('#form-content').text("<?=implode("<br/>",$arResult['ERR'])?>");
		modal.show();
	<?elseif(!empty($arResult['SUC'])):?>
		$('#form-content').text("<?=$arResult['SUC']?>");
		modal.show();
	<?endif?>
	});
</script>