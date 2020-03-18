<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** $arResult */?>
<div id="modal-form" class="uk-modal">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<div class="uk-modal-header">Заказать звонок / Запись</div>
		<div id="form-content">
            <?if($arResult['ERR']){
                $error = implode("<br>", $arResult['ERR'])?>
                <div class="uk-alert-danger"><?=$error?></div>
                <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                        $("#modal-form").show();
                    });
                </script>
            <?}?>
            <?if($arResult['SUC']){
                $suc = implode("<br>", $arResult['SUC'])?>
                <div class="uk-alert-success"><?=$suc?></div>
                <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                        $("#modal-form").show();
                    });
                </script>
            <?}?>
			<form id="feedback" class="uk-form uk-form-stacked" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="uk-form-row">
						<legend>Ваше имя</legend>
						<input type="text" name="AUTHOR" class="uk-form-width-medium" required></div>
					<div class="uk-form-row">
						<legend>Ваш телефон</legend>
						<input type="tel" name="TEL" class="uk-form-width-medium" required></div>
                    <!--div class="uk-form-row">
                    	<div class="uk-form-file"><? /*$APPLICATION->IncludeComponent("bitrix:main.file.input", "drag_n_drop",
                     array(
                       "INPUT_NAME"=>"PIC",
                       "MULTIPLE"=>"N",
                       "MODULE_ID"=>"iblock",
                       "MAX_FILE_SIZE"=>"5000000",//5000000 25mb
                       "ALLOW_UPLOAD"=>"I", 
                       "INPUT_CAPTION" => "Загрузить рентген (фото)",
                       "INPUT_VALUE" => $_POST["PIC"],
                     ),
                     false
               );*/?></div-->
               		<div class="uk-form-row">
                    	<input type="checkbox" name="agree" checked required/>
                        <label for="agree">Я согласен на обработку моих <a href="/policy/" target="_blank">персональных данных</a> <font color="red">*</font></label>
                    </div>   
					<div class="uk-form-row">
						<input type="submit" name="submit"
						       class="uk-form-width-medium uk-button-primary uk-button btn btn-primary"
						       value="Отправить"></div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<script>
    $(document).ready(function(){
        $("#feedback").submit(function(){
            yaCounter51498530.reachGoal('zapis');
            ga('send', 'event', 'form', 'zapis');
            return true;
        });
    });
    /*$(document).ready(function(){
        $('#modal-form input[type=submit]').click(function(e){
            e.preventDefault();
            if($('[name=TEL]').val().length === 16 && $('[name=TEL]').val().indexOf('_') < 0){
                $('#feedback').submit();
            }
        })
    });*/
</script>