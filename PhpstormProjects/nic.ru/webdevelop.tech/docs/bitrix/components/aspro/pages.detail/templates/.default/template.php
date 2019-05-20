<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
#error_reporting(E_ALL);
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
$this->addExternalJS(SITE_TEMPLATE_PATH."/components/bitrix/news.detail/page_teplate/parallax.min.js");
?>


<? $poradok = array(); ?>

<? $i = 1; ?>
<? while ($i < 40) { ?>
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






<? if ($arResult['PROPERTIES']['slider_on']['VALUE'] == 'Да') { ?>



    <div class="greyline row margin0 block-with-bg" style="position: relative; z-index: 1;">
        <div class="banners-big front">
            <div class="maxwidth-banner">

                <div class="slider_toppp_video">

                    <video id="player_844" class="video cover" preload="auto" autoplay muted loop style="width:100%;">
                        <source src="/bitrix/templates/aspro-digital/images/video.mp4" type="video/mp4">
                        <source src="/bitrix/templates/aspro-digital/images/video.webm" type="video/webm">
                        <source src="/bitrix/templates/aspro-digital/images/video.ogg" type='video/ogg'>
                        Тег video не поддерживается вашим браузером.
                        <a href="/bitrix/templates/aspro-digital/images/video.mp4">Скачайте видео</a>.
                    </video>

                    <video id="player_845" class="video cover" preload="auto" autoplay muted loop style="width:100%;">
                        <source src="/bitrix/templates/aspro-digital/images/video1.mp4" type="video/mp4">
                        <source src="/bitrix/templates/aspro-digital/images/video1.webm" type="video/webm">
                        <source src="/bitrix/templates/aspro-digital/images/video1.ogg" type='video/ogg'>
                        Тег video не поддерживается вашим браузером.
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
<?endif;?>

<?//Хлебные крошки?>
<?if($arResult['PROPERTIES']['breadcrumb_on']['VALUE'] != 'Нет'):?>
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

    <? foreach ($poradok as $poradok_iteam) { ?>

        <? include('part' . $poradok_iteam['name'] . '.php'); ?>

    <? } ?>

<? } else { ?>

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
    <? #include('part8.php'); ?>

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
<script>

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