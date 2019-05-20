<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {die();}
IncludeTemplateLangFile( __FILE__ );

\Bitrix\Main\Loader::includeModule('fileman');
if(CLightHTMLEditor::IsMobileDevice()){
    $mob = 1;
}?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><? $APPLICATION->ShowTitle(false) ?></title>
	<meta property="og:title" content="<? $APPLICATION->ShowTitle() ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] ?>/ ">
	<meta property="og:image" content="<?= SITE_TEMPLATE_PATH ?>/lang/ru/logo.gif">
	<meta property="og:site_name" content="<?= COMPANY_NAME?> "/>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192"
	      href="<?= SITE_TEMPLATE_PATH ?>/images/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/images/favicon-16x16.png">
	<link rel="manifest" href="https://persona.market/manifest.json">
	<link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/images/safari-pinned-tab.svg" color="#eb3e41">
	<meta name="apple-mobile-web-app-title" content="persona.market">
	<meta name="application-name" content="persona.market">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= SITE_TEMPLATE_PATH ?>/images/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"/>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/bal_style.css" type="text/css"/>
    <link rel="stylesheet"  href="<?= SITE_TEMPLATE_PATH?>/customscrollbar.css" type="text/css"/>
	<script type="text/javascript">
		var domReady = function (callback) {
			document.readyState === "interactive"
			|| document.readyState === "complete" ? callback() : document.addEventListener("DOMContentLoaded", callback);
		};
	</script>
	<? $APPLICATION->ShowHead();
	CJSCore::Init(array('ajax', 'window'));
    ?>
</head>
<?if($APPLICATION->GetCurPage() == '/'){
   $class = "home-page";
}
else{
    $adr = array_splice(explode("/", $_SERVER["REQUEST_URI"]),-2,1);
    $class = $adr[0];
}?>
<body class="<?=$class?> <?=($mob)?"mob":"desktop"?>" <?php #if (!isset($_COOKIE['popup'])) { echo "onLoad=\"window.open('/cookie-information.php');\""; } ?>>
    
<div id="page-wrapper">
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<header>
        <div class="container text-center">
            <h1><? $APPLICATION->IncludeFile( SITE_DIR . "include/company_slogan.php", Array(), Array( "MODE" => "html" ) ); ?></h1>

            <div class="pull-left">
                <div class="inline-block">
                </div>
                <div class="inline-block">
                </div>
            </div>

            <div class="pull-left">
                <div class="btn-group">
                    <div class="prmn-cmngr" data-confirm="true">
                        <div class="prmn-cmngr__content">
                            <div class="prmn-cmngr__title">
                                <a class="prmn-cmngr__city btn">
                                    <span class="glyphicon glyphicon-map-marker icon"></span> Москва </a>
                            </div>
                        </div>
                        <div class="prmn-cmngr__confirm prmn-cmngr__popup" style="display: none;">
                            Ваш город — <span class="prmn-cmngr__confirm-city">Москва</span><br>
                            Угадали?
                            <div class="prmn-cmngr__confirm-btns">
                                <input class="prmn-cmngr__confirm-btn btn btn-primary" value="Да" type="button"
                                       data-value="yes">
                                <input class="prmn-cmngr__confirm-btn btn" value="Нет" type="button"
                                       data-value="no">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="width">
            <div class="container">
            <div class="row logo-line">
                <div class="col-sm-12 col-sm-4 text-left-md">
                    <ul class="list-unstyled pay-icons">
                        <li>
                            <a target="_blank" href="https://vk.com/"><img src="<?=SITE_TEMPLATE_PATH?>/images/vk-48.png" alt="Сообщество ВКонтакте" class="img-responsive"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/persona?lang=ru"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/twitter-4-48.png" alt="Сообщество Twitter" class="img-responsive"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/"><img src="<?=SITE_TEMPLATE_PATH?>/images/facebook-4-48.png" alt="Сообщество Facebook" class="img-responsive"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://plus.google.com/"><img src="<?=SITE_TEMPLATE_PATH?>/images/google-plus-4-48.png" alt="Сообщество Google Plus" class="img-responsive"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-sm-4">
                    <div id="logo">
                        <a href="/" title="Главная"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo-market-w.png"
                                                         title="Персона Market магазин косметики для волос и тела"
                                                         alt="Персона Market магазин косметики для волос и тела" class="img-responsive"></a>
                    </div>
                </div>
                <div class="phone-outer col-sm-4 text-right-md">
                    <div id="phone">
                        <div class="phone">
                            <i class="fa fa-phone icon mirrored"></i>
                            <span data-toggle="dropdown" class="main-phone">
              							<span class="two-small-phones">
								<?= PHONE?><br>
						                </span>
							<span class="fa fa fa-angle-down caretalt"></span>
						</span>
                            <ul class="dropdown-menu allcontacts">
                                <li><a class="btn-callback" onclick="callback();"><i class="fa fa-share"></i>&nbsp;&nbsp;Перезвонить
                                        мне</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="tel:<?=PHONE?>">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/phone1.png" class="max16"
                                             alt="<?=PHONE?>"> <?=PHONE?>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?= PHONE2 ?>">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/phone2.png" class="max16"
                                             alt="<?= PHONE2 ?>"> <?= PHONE2 ?></a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=<?=WHATSAPP_PHONE_SIMPLE?>" class="whatsapp"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="20"> <?=WHATSAPP_PHONE?></a>
                                </li>
                                <li class="divider"></li>
                                <!--li>
                                    <div class="schedule">
                                        <i class="fa fa-clock-o fu"></i>&nbsp;
                                        Заказы online круглосуточно
                                    </div>
                                </li-->
                                <li>
                                    <a href="mailto:<?=EMAIL?>" target="_blank"><i class="fa fa-envelope-o fu"></i>&nbsp;
										<?= EMAIL ?></a>
                                </li>
                            </ul>
							<? $APPLICATION->IncludeFile(
								SITE_DIR . "include/schedule.php",
								Array(),
								Array( "MODE" => "html" )
							); ?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
		<div id="top" class="row">
			<? $arrFilter = array ("!=PROPERTY_brand"=>false);
			$APPLICATION->IncludeComponent(
				"persona:brand_menu",
				"brands_menu_top",
				Array("IBLOCK_ID"=>4)
                    /*контакты и оплата и доставка в шаблоне brand_menu*/
			); ?>
		</div>
		<div class="container">
			<div class="row menu-line">
				<div class="col-sm-12 col-md-7 col-md-push-3 search-box">
					<div id="search" class="input-group">
						<!--div class="input-group-btn categories">
							<button id="change_category" type="button" class="btn dropdown-toggle"
							        data-toggle="dropdown">
								<span class="category-name">Везде&nbsp;</span>&nbsp;<span
									class="fa fa fa-angle-down caretalt"></span>
							</button>

                            <?$APPLICATION->IncludeComponent("persona:search_cat_list", "", array(), false);?>

							<input id="selected_category" type="hidden" name="category_id" value="0">
						</div-->
						<input type="text" name="search" value="" placeholder="Поиск товара по каталогу"
						       class="form-control" autocomplete="off">

						<div class="input-group-btn">
							<button type="button" class="btn gradiented" id="search-button">
                                <i class="fa fa-search"></i>Найти
							</button>
						</div>
                        <div class="autocomplete-suggestions"></div>
					</div>
					<script type="text/javascript">
						domReady(function () {
							$('#search a').click(function () {
								$("#selected_category").val($(this).attr('id'));
								$('#change_category').html('<span class="category-name">' + $(this).html() + '&nbsp;</span>&nbsp;<span class="fa fa fa-angle-down caretalt"></span>');
							});
						});
					</script>
				</div>
				<div class="col-sm-6 col-sm-push-6 col-md-2 col-md-push-3 cart-box">
					<div id="cart" class="btn-group btn-block">
						<button type="button" data-toggle="modal" data-target="#modal-cart"
						        data-loading-text="Загрузка..." class="btn btn-primary btn-block dropdown-toggle">
							<i class="fa fa-angle-down"></i>
							<span id="cart-total"><span class="products"><b>0</b> товаров, </span>
								<span class="prices">на <b>0
										<span class="sr-only">р.</span>
										<span class="roboto-forced ruble" aria-hidden="true" style="display:none"></span>
									</b>
								</span>
							</span>
						</button>
					</div>
					<script type="text/javascript">
						domReady(function () {
							$('body').append($('#modal-cart'));
						});

						domReady(function () {
							$('#modal-cart').on('hidden.bs.modal', function (e) {
								$(this).find('.alert').remove();
							});

						});
					</script>
				</div>
				<div class="col-sm-6 col-sm-pull-6 col-md-3 col-md-pull-9 menu-box">
					<nav id="menu" class="btn-group btn-block <?if($APPLICATION->GetCurPage() == "/" && !$mob):?>open<?endif?>">

						<button type="button" class="btn btn-menu btn-block gradiented bordered dropdown-toggle" data-toggle="dropdown"
						        <?if($APPLICATION->GetCurPage() == "/"):?>aria-expanded="true"<?endif?>>
                            <i class="fa fa-bars"></i><span onclick="location.href='/catalog/'">Каталог товаров</span>
						</button>
						<? # bitrix/templates/persona/components/bitrix/menu/vert_multi
                        $APPLICATION->IncludeComponent("bitrix:menu", "vert_multi", Array(
	"ROOT_MENU_TYPE" => "catalog",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "Y",	// Тип кеширования
		"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>

						<div id="menuMask"></div>
						<script>domReady(function () {
								$('#menu-list').hover(function () {
									$('body').addClass('blured')
								}, function () {
									$('body').removeClass('blured')
								});
							});</script>
					</nav>
				</div>
			</div>
		</div>
	</header>






	<div id="content-wrapper">
		<div id="content-inner">
			<div id="workarea-wrapper">
				<div id="workarea">
					<div id="workarea-inner">

    



                        <?if($APPLICATION->GetCurPage() != "/"):?>
                        <div class="container">
	                        <?$APPLICATION->IncludeComponent(
                            "bitrix:breadcrumb",
                            "not_main_page",
                            array(
                                "PATH" => "",
                                "SITE_ID" => "s1",
                                "START_FROM" => "1",
                                "COMPONENT_TEMPLATE" => "not_main_page"
                            ),
                            false
                        );?>




                    <?if($APPLICATION->GetCurPage() == '/catalog/'){?>
                    <h1><?$APPLICATION->ShowTitle(false);?></h1>
                    <?}?>


                    <div class="row">
                        <?if(CSite::InDir('/catalog/')){?>
                        <div class="filter-left col-sm-2 col-xs-12">
                            <div class="form_group" id="vid-tovara-select">
                                <div class="filter-header">
                                    <span>Вид товара</span>
                                </div>
                                <div class="select-wrap">
                                    <select name="vid_tovara" class="form-control">
                                    <option value="off">Выберите</option>
                                    <?$res = $DB->Query("SELECT DISTINCT VALUE FROM `b_iblock_element_property` WHERE IBLOCK_PROPERTY_ID = 29 ORDER BY VALUE");
                                    while ($ob = $res->Fetch()):
                                        $name = $ob['VALUE'];
                                        $en_name = rus2translit($name)?>
                                        <option id="<?=$en_name?>_opt" value="<?=$name?>"/><?=$name?></option>
                                    <?endwhile;
                                    ?>
                                    </select>
                                </div>
                            </div>





                            <div class="form_group" id="dlya-select">
                                <div class="filter-header">
                                    <span>Предназначение</span>
                                </div>
                                <div class="select-wrap">
                                    <select name="dlya_tovara" class="form-control">
                                        <option value="off">Выберите</option>
                                        <?$APPLICATION->IncludeComponent("persona:search_cat_list", "select", array(), false);?>
                                    </select>
                                </div>
                            </div>






                            <div id="brand-checkbox" class="form_group">
                                <div class="filter-header">
                                    <span>Бренд</span>
                                </div>
                                <? $arrFilter = array ("!=PROPERTY_brand"=>false);
                                $APPLICATION->IncludeComponent(
                                    "persona:brand_menu",
                                    "brands_menu_select",
                                    Array("IBLOCK_ID"=>4)
                                ); ?>
                            </div>
                            <p class="show_all"><a href="#" title="" class=""></a></p>
                            <style>
                                div#brand-checkbox.active {
                                    height: <?=$GLOBALS['brandmenuitems'] * 28?>px;
                                }

                            </style>



                            <script>
                                domReady(function () {
                                    $('.show_all a').click(function (e) {
                                        e.preventDefault();
                                        $('#brand-checkbox').toggleClass('active');
                                    });
                                });
                            </script>


                            <div id="price-checkbox" class="form_group">
                                <div class="filter-header">
                                    <span>Цена</span>
                                </div>
                                <?$res = $DB->Query("SELECT MAX(VALUE) AS vmax FROM `b_iblock_element_property` WHERE IBLOCK_PROPERTY_ID = 2 AND VALUE REGEXP '^-?[0-9]+$'");
                                $ob = $res->Fetch();
                                $max = $ob['vmax'];
                                $res = $DB->Query("SELECT MIN(VALUE) AS vmin FROM `b_iblock_element_property` WHERE IBLOCK_PROPERTY_ID = 2 AND VALUE REGEXP '^-?[0-9]+$' AND VALUE > 0");
                                $ob1 = $res->Fetch();
                                $min = $ob['vmin'];
                                $dist = 0;
                                if(($max - $min) > 0)
                                    $dist = ( $max - $min ) / 5;
                                ?>
                                <script>
                                    window.dist = '<?=$dist?>';
                                </script>
                                <div><label for="price1_chk">
                                    <i class="fa fa-check fa-square-o"></i>
                                    <i class="fa fa-check fa-check-square-o" style="display: none"></i>
                                    <input id="price1_chk" type="checkbox" name="price" value="<?=$min?>"/> До <?=$min?> </label></div>
                                <? $l = 2;
                                for ($i = $min + $dist - 1;  $i < $max - $dist; $i += $dist):
                                    ?>
                                    <div><label for="price<?=$l?>_chk">
                                            <i class="fa fa-check fa-square-o"></i>
                                            <i class="fa fa-check fa-check-square-o" style="display: none"></i>
                                            <input id="price<?=$l?>_chk" type="checkbox" name="price" value="<?=round($i/100)*100?>"/> <?=round($i/100)*100?></label></div>
                                    <?
                                $l++;
                                endfor;?>
                                <?if(($max - 500) > $min):?>
                                <div>
                                    <label for="price<?=$l?>_chk">
                                        <i class="fa fa-check fa-square-o"></i>
                                        <i class="fa fa-check fa-check-square-o" style="display: none"></i>
                                        <input id="price<?=$l?>_chk" type="checkbox" name="price" value="<?=$max - 500?>"/> Более <?=$max - 500?></label>
                                </div>
                                <?endif?>
                            </div>
                        </div>
                        <?$fil = "Y"?>
                        <?}?>

                        <div id="content" class="<?=($fil=="Y")?"col-sm-10":"col-sm-12"?> col-xs-12">

                        <?endif?>