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
IncludeTemplateLangFile(__FILE__);
if($arResult['OK']){
    echo $arResult['OK'];
}
?>
<div id="podbor" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="h5 modal-title"><?=GetMessage("FORM_TITLE")?></div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container">
                        <div class="row action_text">
                            <p class="bold"><?=GetMessage("ACTION_TEXT")?></p>
                            <p><?=GetMessage("NEXT_STEP", array("#SUM#" => "<span class=\"sale\">50</span>"))?></p>
                            <p class="p_sale">Ваша скидка: <span class="sale_ready"></span> руб.</p>
                        </div>
                    </div>
                    <form id="form_quick_chooze" class="form" method="post">
                        <input type="hidden" name="sessid" id="sessid" value="<?=bitrix_sessid()?>">
                        <input type="hidden" name="whole_price" id="whole_price" value=""/>
                        <input type="hidden" name="sale" id="whole_sale" value=""/>
                    <div class="container">
                        <div class="progress row">
                            <div class="progress-bar" id="progress" role="progressbar" aria-valuenow="0"
                                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                <span class="sr-only">0%</span>
                            </div>
                        </div>
                    </div>
                    <div id="modal_1" style="display:block" data-num="1" class="modal-body podbor_uslugi">
                        <div class="h5"><?=GetMessage("CHOOZE_MATERIAL")?></div>
                        <p class="doptitle"><?=GetMessage("CHOOZE_MATERIAL2")?></p>
                        <input name="material" type="hidden" data-price="" value="laminirovanny"/>
                        <div class="flex_wrapper material filled_by_jscript">
                        </div>
                    </div>
                    <div id="modal_2" data-num="2" class="modal-body podbor_uslugi">
                        <div class="h5"><?=GetMessage("CHOOZE_QUALITY")?></div>
                        <p class="doptitle"><?=GetMessage("CHOOZE_QUALITY2")?></p>
                        <input name="quality" type="hidden" value="360 dpi"/>
                        <div class="flex_wrapper quality filled_by_jscript">
                        </div>
                    </div>
                    <div id="modal_3" data-num="3" class="modal-body podbor_uslugi">
                        <div class="h5"><?=GetMessage("SET_SIZE")?></div>
                        <div id="order_block">
                            <div class="order_line form-group row" data-sid="order_width">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group animated-labels">
                                        <label for="order_width"><?=GetMessage("SET_WIDTH")?><span class="required-star">*</span></label>
                                        <div class="input">
                                            <input type="text" name="order_width[]" class="order_width form-control for_count required " value="" aria-required="true">
                                            <!--i class="fa fa-arrows-h"></i-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group animated-labels">
                                        <label for="order_height"><?=GetMessage("SET_HEIGHT")?><span class="required-star">*</span></label>
                                        <div class="input">
                                            <input type="text" name="order_height[]" class="order_height form-control for_count required " value="" aria-required="true">
                                            <!--i class="fa fa-arrows-v"></i-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group animated-labels">
                                        <label for="order_quan"><?=GetMessage("SET_QUANTITY")?><span class="required-star">*</span></label>
                                        <div class="input">
                                            <input type="number" name="order_quan[]" min="1" max="100" class="order_quan form-control for_count required " value="1" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <!--div class="col-sm-12 col-md-3">
                                    <div class="form-group animated-labels">
                                        <label for="order_square"><?=GetMessage("SET_METRAZH")?><sup>2</sup>:</label>
                                        <div class="input">
                                            <input type="text" name="order_square[]" class="order_square form-control" value=""/>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                        </div>
                            <p class="btns-under-size"><button type="button" id="dupl" class="btn btn-default">Добавить ещё</button></p>
                    </div>
                    <div id="modal_4" data-num="4" class="modal-body podbor_uslugi">

                        <div class="h5"><?=GetMessage("POST_PRINT")?></div>
                        <p class="doptitle"><?=GetMessage("POST_PRINT2")?></p>
                        <div class="flex_wrapper post_obrabotka filled_by_jscript">
                        </div>
                    </div>
                    <div id="modal_5" data-num="5" class="modal-body podbor_uslugi">

                        <div class="h5"><?=GetMessage("DOP_SERVICE")?></div>
                        <div class="flex_wrapper dop_uslugi">
                        </div>
                    </div>
                    <div id="modal_6" data-num="6" class="modal-body podbor_uslugi">
                        <!--p><?=GetMessage("PRICE")?><span id="prev_price"></span></p-->
                        <div class="h5"><?=GetMessage("LEAVE_CONTS")?></div>
                        <p><?=GetMessage("CALLBACK_SALE", array("#SUM2#" => "250 руб."))?></p>
                        <div class="row" data-sid="order_conts">
                            <div class="col-sm-12 col-md-6 col-md-offset-3">
                                <div class="form-group animated-labels">
                                    <label for="order_conts"><?=GetMessage("PHONE")?><span class="required-star">*</span></label>

                                    <div class="input">
                                        <input type="text" id="order_conts" name="PHONE" class="form-control required phone" value="" aria-required="true">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="form-group animated-labels">
                                    <label for="order_conts"><?=GetMessage("NAME")?></label>
                                    <div class="input">
                                        <input type="text" id="order_name" name="order_name" class="form-control" value="">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="form-groop clearfix animated-labels">
                                    <div class="licence_block bx_filter">
                                        <input type="checkbox" id="licenses_popup2" name="licenses_popup2" required="" value="" aria-required="true">
                                        <label for="licenses_popup2"><?=GetMessage("AGREE1")?><a href="/include/licenses_detail.php" target="_blank"><?=GetMessage("AGREE2")?></a><br>
                                        </label>
                                    </div>
                                    <div class="subm_but">
                                        <button id="quick_submit" class="btn-lg btn btn-default" type="submit"><?=GetMessage("SEND")?></button><br>
                                        <input type="hidden" name="chooze_submit" value="<?=GetMessage("SEND")?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" id="goAhead"><?=GetMessage("RESUME")?></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <span id="modal_open" data-toggle="modal" data-target="#podbor" onclick="yaCounter45543462.reachGoal('konversiya')"><?=GetMessage("COUNT_IT")?></span>