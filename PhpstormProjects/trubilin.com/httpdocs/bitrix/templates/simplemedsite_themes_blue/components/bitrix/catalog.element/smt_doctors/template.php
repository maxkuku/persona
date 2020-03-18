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
$this->setFrameMode(true);
?>
<div class="smt-doctor-detail">
<script>
$( document ).ready(function() {
    
if(location.href.indexOf("petrova-irina-fedorovna")+1)
{
	$("#form_1").css("display","none");
}
if(location.href.indexOf("trubilina-anna-vladimirovna")+1)
{
	$("#form_1").css("display","none");
}
if(location.href.indexOf("kosteneva-svetlana-nikolaevna")+1)
{
	$("#form_1").css("display","none");
}

});

	</script>
    <div class="container-fluid container-fluid_no-padding">
        <div class="row">
            <div class="col-md-3"><?if($arResult["PREVIEW_PICTURE"]):?><a class="smt-doctor-detail__image-content smt-photo-popup" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"><img class="smt-doctor-detail__image" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>">
                    <div class="smt-doctor-detail__over"><span class="smt-doctor-detail__icon glyphicon glyphicon-zoom-in"></span></div></a>
                <div class="smt-doctor-detail__name">
                    <p><?if($arResult["DISPLAY_PROPERTIES"]["EXP"]["DISPLAY_VALUE"]):?>
                            <?=$arResult["DISPLAY_PROPERTIES"]["EXP"]["NAME"]?>
                            <?=$arResult["DISPLAY_PROPERTIES"]["EXP"]["DISPLAY_VALUE"]?>
                        <?endif?>
                        <?if($arResult["DISPLAY_PROPERTIES"]["DEGREE"]["DISPLAY_VALUE"]):?>
                            / <?=$arResult["DISPLAY_PROPERTIES"]["DEGREE"]["DISPLAY_VALUE"]?>
                        <?endif?></p>
                </div><?endif?>
            </div>
            <div class="col-md-9">
                <div class="smt-doctor-detail__content">
                    <div class="smt-doctor-detail__text">
                        <section class="smt-widget smt-widget_no-margin">
                            <header>
                                <h2 class="smt-widget__header smt-widget__header_normal smt-doctor-detail__header"><?=GetMessage("SMT_BCEC_SECTION_INFO")?></h2>
                            </header>
                            <div class="smt-widget__content">
                                <?if(strlen($arResult["DETAIL_TEXT"])>0):?>
                                    <?if($arResult["DETAIL_TEXT_TYPE"] == 'text'):?>
                                        <p><?=$arResult["DETAIL_TEXT"]?></p>
                                    <?else:?>
                                        <?=$arResult["DETAIL_TEXT"]?>
                                    <?endif?>
                                <?else:?>
                                    <?if($arResult["PREVIEW_TEXT_TYPE"] == 'text'):?>
                                        <p><?=$arResult["PREVIEW_TEXT"]?></p>
                                    <?else:?>
                                        <?=$arResult["PREVIEW_TEXT"]?>
                                    <?endif?>
                                <?endif?>
                                <div class="panel-group smt-panel-group" id="smt-accordion">
                                    <?if($arResult["DISPLAY_PROPERTIES"]["WORK_EXP"]["DISPLAY_VALUE"]):?>
                                    <div class="panel smt-panel-primary smt-panel-primary_in">
                                        <div class="panel-heading">
                                            <div class="panel-title"><a data-toggle="collapse" href="#smt-accordion-item-exp-work"><?=$arResult["DISPLAY_PROPERTIES"]["WORK_EXP"]["NAME"]?></a></div>
                                        </div>
                                        <div class="panel-collapse collapse in" id="smt-accordion-item-exp-work">
                                            <div class="panel-body">
                                                <?=$arResult["DISPLAY_PROPERTIES"]["WORK_EXP"]["DISPLAY_VALUE"]?>
                                            </div>
                                        </div>
                                    </div>
                                    <?endif?>
                                    <?if($arResult["DISPLAY_PROPERTIES"]["SPEC"]["DISPLAY_VALUE"]):?>
                                        <div class="panel smt-panel-primary">
                                            <div class="panel-heading">
                                                <div class="panel-title"><a data-toggle="collapse" href="#smt-accordion-item-spec"><?=$arResult["DISPLAY_PROPERTIES"]["SPEC"]["NAME"]?></a></div>
                                            </div>
                                            <div class="panel-collapse collapse" id="smt-accordion-item-spec">
                                                <div class="panel-body">
                                                    <?=$arResult["DISPLAY_PROPERTIES"]["SPEC"]["DISPLAY_VALUE"]?>
                                                </div>
                                            </div>
                                        </div>
                                    <?endif?>
                                    <?if($arResult["DISPLAY_PROPERTIES"]["EDU"]["DISPLAY_VALUE"]):?>
                                        <div class="panel smt-panel-primary">
                                            <div class="panel-heading">
                                                <div class="panel-title"><a data-toggle="collapse" href="#smt-accordion-item-edu"><?=$arResult["DISPLAY_PROPERTIES"]["EDU"]["NAME"]?></a></div>
                                            </div>
                                            <div class="panel-collapse collapse" id="smt-accordion-item-edu">
                                                <div class="panel-body">
                                                    <?=$arResult["DISPLAY_PROPERTIES"]["EDU"]["DISPLAY_VALUE"]?>
                                                </div>
                                            </div>
                                        </div>
                                    <?endif?>
                                    <?if($arResult["DISPLAY_PROPERTIES"]["SCHEDULE"]["DISPLAY_VALUE"]):?>
                                        <div class="panel smt-panel-primary">
                                            <div class="panel-heading">
                                                <div class="panel-title"><a data-toggle="collapse" href="#smt-accordion-item-schedule"><?=$arResult["DISPLAY_PROPERTIES"]["SCHEDULE"]["NAME"]?></a></div>
                                            </div>
                                            <div class="panel-collapse collapse" id="smt-accordion-item-schedule">
                                                <div class="panel-body">
                                                    <?=$arResult["DISPLAY_PROPERTIES"]["SCHEDULE"]["DISPLAY_VALUE"]?>
                                                </div>
                                            </div>
                                        </div>
                                    <?endif?>
                                </div>
                            </div>
                        </section>
                        <!--section id="form_1" class="smt-widget smt-widget_no-margin">
                            <header>
                                <div class="smt-widget__header smt-widget__header_normal"><? /*$APPLICATION->IncludeFile(
                                        SITE_DIR."smt_include/order_header.php",
                                        Array(),
                                        Array("MODE"=>"text", "SHOW_BORDER" => false)
                                    );*/?></div>
                            </header>
                            <div class="smt-widget__content">
                                <div class="smt-form">
                                    <?/*$APPLICATION->IncludeFile(
                                        SITE_DIR."smt_include/doctors_form.php",
                                        Array(),
                                        Array("MODE"=>"html", "SHOW_BORDER" => false)
                                    );*/?>
                                </div>
                            </div>
                        </section-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
