<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

# use \Bitrix\Main\Data\Cache;


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
$this->setFrameMode(true);
$this->addExternalCss("https://fonts.googleapis.com/css?family=Montserrat&display=swap");
$this->addExternalCss(SITE_TEMPLATE_PATH."/css/customscrollbar.css");
$this->addExternalJS(SITE_TEMPLATE_PATH."/components/bitrix/news.detail/page_teplate/parallax.min.js");
$this->addExternalJS(SITE_TEMPLATE_PATH."/js/customscrollbar.js");
$this->addExternalJS(SITE_TEMPLATE_PATH."/js/jquery.fancybox-media.js");




/*$cache = Cache::createInstance(); // получаем экземпляр класса
if ($cache->initCache(7200, "cache_key")) { // проверяем кеш и задаём настройки
    $vars = $cache->getVars(); // достаем переменные из кеша
}
elseif ($cache->startDataCache()) {*/


?>
<? $poradok = array(); ?>
<? $i = 1; ?>
<? while ($i < 41) { ?>
    <? if ($arResult['PROPERTIES']['poradok' . $i]['VALUE']) { ?>
        <?
        $poradok[$i]['nomer'] = $arResult['PROPERTIES']['poradok' . $i]['VALUE'];
        $poradok[$i]['name'] = $i;
        ?>
    <? } ?>
    <? $i++; ?>		
<? } ?>			
<?php
foreach ($poradok as $v)
    $rate[] = $v['nomer'];
array_multisort($rate, SORT_ASC, $poradok);
?>
<div class="right_dok">
<span class="link" title="Заказать звонок">
<span class="animate-load" data-event="jqm" data-param-id="19" data-name="callback"><i class="svg inline  svg-inline-call" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
<defs>
<style>.bccls-1{fill:#969ba4;fill-rule:evenodd}</style>
</defs>
<path class="bccls-1" d="M14,9A7,7,0,0,0,7,2V0a9,9,0,0,1,9,9H14ZM12,9H10A3,3,0,0,0,7,6V4A5,5,0,0,1,12,9Zm2,4.053a0.507,0.507,0,0,0-.03-0.209,1.761,1.761,0,0,0-.756-0.526c-0.567-.318-1.145-0.626-1.7-0.954a2.049,2.049,0,0,0-.886-0.457c-0.607,0-1.493,1.8-2.031,1.8a2.139,2.139,0,0,1-.856-0.388A9.9,9.9,0,0,1,3.672,8.254,2.134,2.134,0,0,1,3.284,7.4c0-.537,1.8-1.421,1.8-2.026a2.045,2.045,0,0,0-.458-0.885C4.3,3.932,3.99,3.356,3.672,2.789a1.753,1.753,0,0,0-.528-0.755A0.5,0.5,0,0,0,2.935,2a4.427,4.427,0,0,0-1.384.308A2.617,2.617,0,0,0,.5,3.525,3.789,3.789,0,0,0-.011,5.373a7.646,7.646,0,0,0,.687,2.6A9.291,9.291,0,0,0,1.5,9.714,16.788,16.788,0,0,0,6.28,14.483a9.3,9.3,0,0,0,1.742.825,7.672,7.672,0,0,0,2.608.685,3.8,3.8,0,0,0,1.851-.507A2.618,2.618,0,0,0,13.7,14.434,4.416,4.416,0,0,0,14,13.053Z"></path>
</svg>
</i></span>
</span>
<span class="link" title="Задать вопрос">
<span class="animate-load" data-event="jqm" data-param-id="18" data-name="question"><i class="svg inline  svg-inline-ask" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14">
<defs>
<style>.cls-1{fill:#222;fill-rule:evenodd}</style>
</defs>
<path data-name="ask" class="cls-1" d="M1898,414h-14a2,2,0,0,1-2-2V402a2,2,0,0,1,1.95-2,1.025,1.025,0,0,1,.22,0h13.69a1,1,0,0,1,.25.011A2,2,0,0,1,1900,402v10A2,2,0,0,1,1898,414Zm-11.47-12,4.49,4.482L1895.5,402h-8.97Zm11.47,0.5-6.17,6.173a1.26,1.26,0,0,1-1.63,0l-6.2-6.2V412h14v-9.5Z" transform="translate(-1882 -400)"></path>
</svg>
</i></span>
</span>
<span class="link dark-color animate-load border shadow" title="Ближайший офис" data-event="jqm" data-param-id="16" data-name="order_services">
<span>
<svg width="17" height="22" viewBox="0 0 17 22">
<path class="cls-1" d="M1755.96,608.018l0.01,0.012c-5.72,6.178-5.97,7.97-5.97,7.97h-1c-0.55-1.678-4.09-5.867-5.47-7.453A8.5,8.5,0,1,1,1755.96,608.018ZM1749.5,596a6.5,6.5,0,0,0-6.5,6.5,6.418,6.418,0,0,0,1.02,3.464L1744,606c0.08,0.065,1.11,1.545,3.06,3.754a15.174,15.174,0,0,1,2.35,3.246h0.15a13.294,13.294,0,0,1,2.41-3.25A32.028,32.028,0,0,0,1755,606l-0.02-.036A6.418,6.418,0,0,0,1756,602.5,6.5,6.5,0,0,0,1749.5,596Zm0,11a4.5,4.5,0,1,1,4.5-4.5A4.5,4.5,0,0,1,1749.5,607Zm0-7a2.5,2.5,0,1,0,2.5,2.5A2.5,2.5,0,0,0,1749.5,600Z" transform="translate(-1741 -594)"></path>
</svg>
</span>
</span>
</div>
<? if ($arResult['PROPERTIES']['slider_on']['VALUE'] == 'Да') { ?>
    <div class="greyline row margin0 block-with-bg" style="position: relative; z-index: 1;">
        <div class="banners-big front">
            <div class="maxwidth-banner">

                <div class="slider_toppp_video">

                    <video id="player_844" class="video cover" preload="auto" autoplay muted loop style="width:100%;">
                        <source src="/bitrix/templates/aspro-digital/images/video.mp4" type="video/mp4">
                        <!--source src="/bitrix/templates/aspro-digital/images/video.webm" type="video/webm"-->
                        <!--source src="/bitrix/templates/aspro-digital/images/video.ogg" type='video/ogg'-->
                        <a href="/bitrix/templates/aspro-digital/images/video.mp4">Скачайте видео</a>.
                    </video>

                    <video id="player_845" class="video cover" preload="auto" autoplay muted loop style="width:100%;">
                        <source src="/bitrix/templates/aspro-digital/images/video1.mp4" type="video/mp4">
                        <!--source src="/bitrix/templates/aspro-digital/images/video1.webm" type="video/webm"-->
                        <!--source src="/bitrix/templates/aspro-digital/images/video1.ogg" type='video/ogg'-->
                        <a href="/bitrix/templates/aspro-digital/images/video.mp4">Скачайте видео</a>.
                    </video>

                </div>



                <div class="flexslider unstyled slider_toppp " data-plugin-options='{"directionNav": true, "customDirection": ".nav-carousel a", "controlNav": true, "slideshow": true, "animation": "slide", "direction": "horizontal", "slideshowSpeed": 5000, "animationSpeed": 600, "animationLoop": true}'>


                    <ul class="slides items">

    <? $i = 0; ?>	
    <? foreach ($arResult['PROPERTIES']['slider_stroka1']['VALUE'] as $iteam) { ?>	
                            <li class="item" data-slide_index="0" >
                                <div class="text_videoo maxwidth-theme">
                                    <div class="row light ">

                                        <div class="col-md-12 text">
                                            <div class="inner">
                                                <div class="text-block"><?= $iteam; ?></div>
                                                <div class="title"><?= $arResult['PROPERTIES']['slider_stroka2']['VALUE'][$i]; ?></div> 
                                                <div class="text-block"><?= $arResult['PROPERTIES']['slider_stroka3']['VALUE'][$i]; ?></div>

                                                <span class="animate-load twosmallfont colored  white btn-default btn" data-event="jqm" data-param-id="<?= $arResult['PROPERTIES']['slider_but_id1']['VALUE'][$i]; ?>" data-name="<?= $arResult['PROPERTIES']['slider_but_ssilka1']['VALUE'][$i]; ?>"><?= $arResult['PROPERTIES']['slider_but_text1']['VALUE'][$i]; ?></span>
                                                <span onclick="return location.href = '<?= $arResult['PROPERTIES']['slider_but_ssilka2']['VALUE'][$i]; ?>'"    class="callback-block animate-load twosmallfont colored  blue btn-default btn"><?= $arResult['PROPERTIES']['slider_but_text2']['VALUE'][$i]; ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
        <? $i++; ?>
    <? } ?>

                    </ul>

                    <div class="maxwidth-theme">
                        <div class="col-md-12">
                            <div class="nav-carousel">
                                <ul class="flex-direction-nav">
                                    <li class="flex-nav-prev">
                                        <a href="javascript:void(0)" class="flex-prev"><span>Prev</span></a>
                                    </li>
                                    <li class="flex-nav-next">
                                        <a href="javascript:void(0)" class="flex-next"><span>Next</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<? } ?>
<?//Заголовок?>
<?if(!empty($arResult['PROPERTIES']['zgolovok_h1']['VALUE'])):?>
	<div class="<?if($arResult['PROPERTIES']['zgolovok_fon']['VALUE'] != 'Нет'):?>greyline<?endif;?> row margin0 block-with-bg" style="position: relative; z-index: 2;">
		<h1 class="text-center"><?=$arResult['PROPERTIES']['zgolovok_h1']['VALUE'];?></h1>
	</div>
<?endif;
//Хлебные крошки
if($arResult['PROPERTIES']['breadcrumb_on']['VALUE'] != 'Нет'):?>
	<div class="<?if($arResult['PROPERTIES']['breadcrumb_fon']['VALUE'] != 'Нет'):?>greyline<?endif;?> row margin0 block-with-bg" style="position: relative; z-index: 2;">
		<div class="maxwidth-theme">
			<?if(!empty($arResult['PROPERTIES']['nav_breadcrumb']['VALUE'])):?>
				<?=$arResult['PROPERTIES']['nav_breadcrumb']['~VALUE']["TEXT"];?>
			<?else:?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:breadcrumb", 
				"corp-spoc", 
				array(
					"START_FROM" => "0",
					"PATH" => "",
					"SITE_ID" => "s1",
					"COMPONENT_TEMPLATE" => "corp-spoc"
				),
				false
			);?>
			<?endif;?>
		</div>
	</div>
<?endif;?>
<? if ($arResult['PROPERTIES']['poradok_on']['VALUE'] == 'Да') { ?>
    <div style="display:none" id="porhid"><?print_r($poradok)?></div>
    <? foreach ($poradok as $poradok_iteam) { ?>
        <? include('part' . $poradok_iteam['name'] . '.php'); ?>
    <? } ?>
<? }
else { ?>
    <? //Преимущества ?>
    <? include('part2.php'); ?>
    <? //Текст вкладки ?>
    <? include('part3.php'); ?>
    <? //Преимущества иконки ?>
    <? include('part4.php'); ?>
    <? //Цена и класс ?>
    <? include('part5.php'); ?>
    <? //процесс работ ?>
    <? include('part6.php'); ?>
    <? //паралакс1 ?>
    <? include('part7.php'); ?>
    <? //Прайс ?>
    <? include('part8.php'); ?>
    <? //О компании ?>
    <? include('part9.php'); ?>
    <? //Портфолио ?>
    <? include('part10.php'); ?>
    <? //Фото ?>
    <? include('part11.php'); ?>
    <? //Видео ?>
    <? include('part12.php'); ?>
    <? //паралакс2 ?>
    <? include('part13.php'); ?>
    <? //Схема работы ?>
    <? include('part14.php'); ?>
    <? //Выезд замерщика ?>
    <? include('part15.php'); ?>
    <? //Калькулятор ?>
    <? include('part16.php'); ?>
    <? //Консультация ?>
    <? include('part17.php'); ?>
    <? //Клиенты ?>
    <? include('part18.php'); ?>
    <? //Сертификаты ?>
    <? include('part19.php'); ?>
    <? //Доп услуги ?>
    <? include('part20.php'); ?>
    <? //Доп направления2 ?>
    <? include('part29.php'); ?>
    <? //Доп направления ?>
    <? include('part21.php'); ?>
    <? //НАШИ ПРЕИМУЩЕСТВА ?>
    <? include('part22.php'); ?>
    <? //Текст(блок1) ?>
    <? include('part23.php'); ?>
    <? //Текст(блок2) ?>
    <? include('part24.php'); ?>
    <? //Текст(блок3) ?>
    <? include('part25.php'); ?>
    <? //iframe ?>
    <? include('part40.php'); ?>
    <? //Текст(блок4) ?>
    <? include('part26.php'); ?>
    <? //Текст(блок5) ?>
    <? include('part27.php'); ?>
    <? //Текст(блок6) ?>
    <? include('part28.php'); ?>
    <? //Баннер01 ?>
    <? include('part30.php'); ?>
    <? //Баннер02 ?>
    <? include('part31.php'); ?>
    <? //Баннер03 ?>
    <? include('part32.php'); ?>
    <? //Аккордион01 ?>
    <? include('part33.php'); ?>
    <? //Аккордион02 ?>
    <? include('part34.php'); ?>
    <? //Аккордион03 ?>
    <? include('part35.php'); ?>
    <? //Баннер04 ?>
    <? include('part36.php'); ?>
    <? //Видео	?>
    <? include('part37.php'); ?>
    <? //Видео2 ?>
    <? include('part38.php'); ?>
    <? //Подменю ?>
    <? include('part39.php'); ?>
<?
}
?>
<script>/*
	$(".submenu-wrapper").hide();
	
	$(document).ready(function(){
				var tch = true;
				
				$(".child").hover(function () {
					var ElementID = $(this).data("element");
					$("#"+ElementID+"_sub").slideToggle("slow");

					if(tch){
						$("#"+ElementID+"_sub").show();
						//$("#"+ElementID+"_sub").find(".submenu-wrapper").show("slow");
						$("#"+ElementID).addClass("active");
						tch = false;
					}
					else{
						//$("#sub"+ElementID+"_sub").show();
						//$("#"+ElementID+"_sub").find(".submenu-wrapper").show("slow");
						$("#"+ElementID).removeClass("active");
						tch = true;
					}
					
					
					$("#"+ElementID+"_sub").hover(function () {
						var ElementID = $(this).data("element");
						$("#"+ElementID+"2").slideToggle("slow");
						$("#"+ElementID+"2").show();
						
						
					});
				});
				
			})
		*/	
/*BACKUP*/
	$(".submenu-wrapper").hide();
	$(document).ready(function(){
        var tch = true;

        $(".child").hover(function () {
            var ElementID = $(this).data("element");
            $("#"+ElementID+"_sub").slideToggle("slow");

            if(tch){
                $("#"+ElementID+"_sub").show();
                $("#"+ElementID+"_sub").find(".submenu-wrapper").show("slow");
                $("#"+ElementID).addClass("active");
                tch = false;
            }
            else{
                $("#sub"+ElementID+"_sub").show();
                $("#"+ElementID+"_sub").find(".submenu-wrapper").show("slow");
                $("#"+ElementID).removeClass("active");
                tch = true;
            }
        });
    })
</script>
<?/*

    $cache->endDataCache(array("key" => "value")); // записываем в кеш
}*/
# cache
?>