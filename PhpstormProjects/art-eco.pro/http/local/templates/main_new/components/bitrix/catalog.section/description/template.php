<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');
?>
<pre><?
    // if($GLOBALS['USER']->IsAdmin()){
    // print_r($arResult);
    // }
    ?>
</pre>
<div class="brand_description row">
    <img src="<?= CFile::GetPath($arResult['UF_LOGO']) ?>"/><br/><br/>

    <?= $arResult['DESCRIPTION'] ?>
    <? if ($arResult['NAME'] == 'Halyard Health'): ?>
        <br/>
        <a href="/Information Note - ART-ECO 2018.pdf" target="_blank"
           style="border:2px solid #0060ad;margin-bottom:20px;display: block;">
            <img src="/images/Information-Note.jpg"/>
        </a>
        <ul class="pdf">
            <li><a href="/Information Note - ART-ECO 2018.pdf" download>Скачать официальное письмо Halyard Health</a>
            </li>
            <li><a href="/Гастростома в паллиативной педиатрии. 20 вопросов и ответов.pdf" download>Скачать FAQ</a></li>
        </ul>
        <br/>
        <b>Уход и замена гастростомической трубки</b><br/>
        <div class="player">

            <? $APPLICATION->IncludeComponent(
                "bitrix:player",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "PLAYER_TYPE" => "auto",
                    "PATH" => "/uhod_i_zamena.mp4",
                    "SIZE_TYPE" => "absolute",
                    "WIDTH" => "216",
                    "HEIGHT" => "160",
                    "AUTOSTART" => "N",
                    "AUTOSTART_ON_SCROLL" => "N",
                    "REPEAT" => "none",
                    "VOLUME" => "90",
                    "MUTE" => "N",
                    "START_TIME" => "0",
                    "PLAYBACK_RATE" => "1",
                    "PRELOAD" => "N",
                    "SHOW_CONTROLS" => "Y",
                    "SKIN_PATH" => "/bitrix/components/bitrix/player/videojs/skins",
                    "SKIN" => "",
                    "ADVANCED_MODE_SETTINGS" => "N",
                    "PLAYER_ID" => ""
                ),
                false
            ); ?>

        </div>
        <small>Источник: <a href="http://f-sma.ru/368.html#cut">СМА Семьи</a></small>
        <br/><br/>
        <b>Кормление через гастростому</b> <br/>
        <div class="player">

            <? $APPLICATION->IncludeComponent(
                "bitrix:player",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "PLAYER_TYPE" => "auto",
                    "PATH" => "/kormlenie.mp4",
                    "SIZE_TYPE" => "absolute",
                    "WIDTH" => "216",
                    "HEIGHT" => "160",
                    "AUTOSTART" => "N",
                    "AUTOSTART_ON_SCROLL" => "N",
                    "REPEAT" => "none",
                    "VOLUME" => "90",
                    "MUTE" => "N",
                    "START_TIME" => "0",
                    "PLAYBACK_RATE" => "1",
                    "PRELOAD" => "N",
                    "SHOW_CONTROLS" => "Y",
                    "SKIN_PATH" => "/bitrix/components/bitrix/player/videojs/skins",
                    "SKIN" => "",
                    "ADVANCED_MODE_SETTINGS" => "N",
                    "PLAYER_ID" => ""
                ),
                false
            ); ?>

        </div>
        <small>Источник: <a href="http://f-sma.ru/368.html#cut">СМА Семьи</a></small>


    <? endif ?>
</div>

