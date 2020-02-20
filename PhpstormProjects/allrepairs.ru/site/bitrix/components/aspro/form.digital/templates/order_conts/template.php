<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/custonscrollbar.css");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/custonscrollbar.js");?>
<div id="page" class="row">
	<div class="full-theme">
		<div class="col-md-6">
			<div class="shops form order<?=($arResult['isFormNote'] == 'Y' ? ' success' : '')?><?=($arResult['isFormErrors'] == 'Y' ? ' error' : '')?>">
				<?=$arResult["FORM_HEADER"]?>
                <div class="shops-title">Закзать услугу</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<?if( $arResult["isIblockDescription"] ){?>
								<div class="description">
									<?if( $arResult["IBLOCK_DESCRIPTION_TYPE"] == "text" ){?>
										<p><?=$arResult["IBLOCK_DESCRIPTION"]?></p>
									<?}else{?>
										<?=$arResult["IBLOCK_DESCRIPTION"]?>
									<?}?>
								</div>
							<?}?>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="row">
								<?if($arResult['isFormErrors'] == 'Y'):?>
									<div class="col-md-12">
										<div class="form-error alert alert-danger">
											<?=$arResult['FORM_ERRORS_TEXT']?>
										</div>
									</div>
								<?endif;?>
								<div class="col-md-12 col-sm-12">
									<?if(is_array($arResult["QUESTIONS"])):?>
										<?foreach( $arResult["QUESTIONS"] as $FIELD_SID => $arQuestion ){
											if( $FIELD_SID == "MESSAGE" ) continue;
											if( $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden' ){
												echo $arQuestion["HTML_CODE"];
											}else{?>
												<?$hidden = ($FIELD_SID == 'ORDER_LIST' || $FIELD_SID == 'SESSION_ID');?>
												<div class="row<?=($hidden ? ' hidden' : '');?>" data-SID="<?=$FIELD_SID?>">
													<div class="col-md-12">
														<div class="form-group animated-labels <?=( $arQuestion['VALUE'] ? "input-filed" : "");?>">
															<?=$arQuestion["CAPTION"]?>
															<div class="input">
																<?=$arQuestion["HTML_CODE"]?>
															</div>
															<?if( !empty( $arQuestion["HINT"] ) ){?>
																<div class="hint"><?=$arQuestion["HINT"]?></div>
															<?}?>
														</div>
													</div>
												</div>
											<?}
										}?>
									<?endif;?>
								</div>
								<?if($arResult["QUESTIONS"]["MESSAGE"]):?>
									<div class="col-md-12 col-sm-12">
										<div class="row" data-SID="MESSAGE">
											<div class="col-md-12">
												<div class="form-group animated-labels <?=($arResult["QUESTIONS"]["MESSAGE"]["VALUE"]["TEXT"] ? 'input-filed' : '');?>">
													<?=$arResult["QUESTIONS"]["MESSAGE"]["CAPTION"]?>
													<div class="input">
														<?=$arResult["QUESTIONS"]["MESSAGE"]["HTML_CODE"]?>
													</div>
													<?if( !empty( $arResult["QUESTIONS"]["MESSAGE"]["HINT"] ) ){?>
														<div class="hint"><?=$arResult["QUESTIONS"]["MESSAGE"]["HINT"]?></div>
													<?}?>
												</div>
											</div>
										</div>
									</div>
								<?endif;?>
								<?if( $arResult["isUseCaptcha"] == "Y" ){?>
									<div class="col-md-12 col-sm-12">
										<div class="row captcha-row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="form-group animated-labels">
													<?=str_replace('for="', 'for="POPUP_', $arResult["CAPTCHA_CAPTION"]);?>
													<div class="input <?=$arResult["CAPTCHA_ERROR"] == "Y" ? "error" : ""?>">
														<?=str_replace('id="', 'id="POPUP_', $arResult["CAPTCHA_FIELD"]);?>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="form-group">
													<div class="captcha-img">
														<?=$arResult["CAPTCHA_IMAGE"]?>
														<span class="refresh"><a href="javascript:;" rel="nofollow"><?=GetMessage("REFRESH")?></a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?}?>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12" style="margin-top: 26px;">
									<?if($arParams["SHOW_LICENCE"] == "Y"):?>
										<div class="licence_block bx_filter">
											<input type="checkbox" id="licenses" name="licenses" required value="Y">
											<label for="licenses">
												<?$APPLICATION->IncludeFile(SITE_DIR."include/licenses_text.php", Array(), Array("MODE" => "html", "NAME" => "LICENSES")); ?>
											</label>
										</div>
									<?endif;?>
									<div class="pull-left">
										<?=str_replace('class="', 'class="btn-lg ', $arResult["SUBMIT_BUTTON"])?>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				<?=$arResult["FORM_FOOTER"]?>
			</div>
		</div>
        <div class="col-md-6" id="map-outer">
            <div class="col-sm-12 wrap">
                <div class="shops row form order">
                    <!--div class="shops-title">Адреса филиалов</div-->
                    <div class="shops-map-div">
                            <div class="shops-map-image">
                                <div id="map" style="height: 400px"></div>
                            </div>
                        </div>
                    <div class="shops-list-div mCustomScrollbar">
                        <? $APPLICATION->IncludeComponent(
                            "aspro:news.list",
                            "addresses",
                            array(
                                "IBLOCK_ID" => "42",
                                "NEWS_COUNT" => "10020",
                                "SORT_BY1" => "SORT",
                                "SORT_ORDER1" => "ASC",
                                "PROPERTY_CODE" => array(
                                    0 => "CENTER",
                                    1 => "",
                                ),
                                "CHECK_DATES" => "Y",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "COMPONENT_TEMPLATE" => "addresses",
                                "IBLOCK_TYPE" => "news",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "FILTER_NAME" => "",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "DETAIL_URL" => "",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "SET_TITLE" => "N",
                                "SET_BROWSER_TITLE" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "STRICT_SECTION_CHECK" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "N",
                                "SHOW_404" => "N",
                                "MESSAGE_404" => ""
                            ),
                            false
                        ); ?>

                    </div>
                    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
                    <script type="text/javascript">
                        window.map;

                        DG.then(function () {
                            window.map = DG.map('map', {
                                center: [55.707765,37.618984],
                                zoom: 15
                            });

                            myIcon = DG.icon({
                                iconUrl: '/upload/CDigital/923/923736fe6a0512ea73627010eea65545.png',
                                iconSize: [46, 46]
                            });

                            <? $APPLICATION->IncludeComponent(
                            "aspro:news.list",
                            "addresses_script",
                            Array(
                                "IBLOCK_ID" => "42",
                                "NEWS_COUNT" => "10020",
                                "SORT_BY1" => "SORT",
                                "SORT_ORDER1" => "ASC",
                                "PROPERTY_CODE" => array(
                                    0 => "CENTER",
                                    1 => "",
                                ),
                                "CHECK_DATES" => "Y",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "COMPONENT_TEMPLATE" => "addresses",
                                "IBLOCK_TYPE" => "news",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "FILTER_NAME" => "",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "DETAIL_URL" => "",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "SET_TITLE" => "N",
                                "SET_BROWSER_TITLE" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "STRICT_SECTION_CHECK" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "N",
                                "SHOW_404" => "N",
                                "MESSAGE_404" => ""
                            )
                        ); ?>

                        });
                    </script>
                </div>
            </div>
        </div>
	</div>
</div>

<script>
	$(document).ready(function(){
		if(arDigitalOptions['THEME']['USE_SALE_GOALS'] !== 'N'){
			var eventdata = {goal: 'goal_order_begin'};
			BX.onCustomEvent('onCounterGoals', [eventdata]);
		}
		$('.order.form form[name="<?=$arResult["IBLOCK_CODE"]?>"]').validate({
			highlight: function( element ){
				$(element).parent().addClass('error');
			},
			unhighlight: function( element ){
				$(element).parent().removeClass('error');
			},
			submitHandler: function( form ){
				if( $('.order.form form[name="<?=$arResult["IBLOCK_CODE"]?>"]').valid() ){
					$(form).find('button[type="submit"]').attr("disabled", "disabled");
					form.submit();
				}
			},
			errorPlacement: function( error, element ){
				error.insertBefore(element);
			},
			messages:{
		      licenses: {
		        required : BX.message('JS_REQUIRED_LICENSES')
		      }
			}
		});

		if(arDigitalOptions['THEME']['PHONE_MASK'].length){
			var base_mask = arDigitalOptions['THEME']['PHONE_MASK'].replace( /(\d)/g, '_' );
			$('.order.form form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.phone').inputmask("mask", { "mask": arDigitalOptions['THEME']['PHONE_MASK'], 'showMaskOnHover': false });
			$('.order.form form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.phone').blur(function(){
				if( $(this).val() == base_mask || $(this).val() == '' ){
					if( $(this).hasClass('required') ){
						$(this).parent().find('div.error').html(BX.message("JS_REQUIRED"));
					}
				}
			});
		}
		
		var sessionID = '<?=bitrix_sessid()?>';
		$('input#SESSION_ID').val(sessionID);
		
		$('.order.form form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.date').inputmask(arDigitalOptions['THEME']['DATE_MASK'], { 'placeholder': arDigitalOptions['THEME']['DATE_PLACEHOLDER'] });

		$("input[type=file]").uniform({ fileButtonHtml: BX.message("JS_FILE_BUTTON_NAME"), fileDefaultHtml: BX.message("JS_FILE_DEFAULT") });

		setTimeout(function(){
		    $('#ADDRESS').attr('title', 'Щелчком по маркеру или адресу на карте заполняется адрес формы')
        });
	});
</script>