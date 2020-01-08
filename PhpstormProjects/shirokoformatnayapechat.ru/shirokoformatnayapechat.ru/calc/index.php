<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "расчет широкоформатной печати");
$APPLICATION->SetPageProperty("description", "Расчет стоимости широкоформатной печати на калькуляторе. Звоните ☎ +7 (495) 121-79-29");
$APPLICATION->SetPageProperty("keywords", "расчет широкоформатной печати");
$APPLICATION->SetPageProperty("title", "Расчет стоимости широкоформатной печати в Москве");
$APPLICATION->SetTitle("Калькулятор стоимости широкоформатной печати");
$APPLICATION->SetAdditionalCSS('dop.css');
?>
<div id="frame" class="container">

</div>

<script>
    function send_post(url) {
        var post = {};
        post['ajax'] = 'Y';
        post['rand'] = Math.random();

        var node = BX('frame');



        if (!!node) {
            BX.ajax.post(
                url,
                post,
                function (data) {
                    node.innerHTML = data;
                    if (url != "") {
                        var key = url.substring(0, url.indexOf('.'));
                        var a = $('#' + key);
                        console.log('key: ' + key + ', a: ' + a);
                        $('.side-menu li').removeClass('active');
                        a.parents('li').addClass('active');
                    }
                }
            );

        }
    }
    <?if(strlen(htmlspecialchars($_REQUEST['type'],3))>0):?>
    send_post('<?=htmlspecialchars($_REQUEST['type'],3)?>.php');
    <?else:?>
    send_post('calc.php');
    <?endif?>
</script>

<script>
$(document).ready(function(){
    var str = '<aside class="sidebar">' +
        '<ul class="nav nav-list side-menu">' +
        '<li>' +
        '<a id="calc" onclick="send_post(' + "\'calc.php\'" + ')">Расчет стоимости печати баннера</a>' +
        '</li>' +
        '<li>' +
        '<a id="bumaga" onclick="send_post(' + "\'bumaga.php\'" + ')">Расчет стоимости печати на бумаге</a>' +
        '</li>' +
        '<li>' +
        '<a id="samokl" onclick="send_post(' + "\'samokl.php\'" + ')">Расчет печати на самоклящейся пленке</a>' +
        '</li>' +
        '<li>' +
        '<a id="tkan" onclick="send_post(' + "\'tkan.php\'" + ')">Расчет печати на ткани</a>' +
        '</li>' +
        '<li>' +
        '<a id="pvh" onclick="send_post(' + "\'pvh.php\'" + ')">Расчет печати на ПВХ</a>' +
        '</li>' +
        '</ul>' +
        '</aside>';
    $('.left-menu-md').append(str);
});
</script>

<?$APPLICATION->IncludeComponent(
	"aspro:form.digital",
	"calc_banner_form",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CLOSE_BUTTON_CLASS" => "btn btn-primary",
		"CLOSE_BUTTON_NAME" => "Закрыть",
		"COMPONENT_TEMPLATE" => "calc_banner_form",
		"DISPLAY_CLOSE_BUTTON" => "Y",
		"IBLOCK_ID" => "48",
		"IBLOCK_TYPE" => "aspro_digital_form",
		"LICENCE_TEXT" => "btn btn-primary",
		"SEND_BUTTON_CLASS" => "btn btn-primary",
		"SEND_BUTTON_NAME" => "Отправить",
		"SHOW_LICENCE" => "Y",
		"SUCCESS_MESSAGE" => "Спасибо! Ваша заявка отправлена!"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>