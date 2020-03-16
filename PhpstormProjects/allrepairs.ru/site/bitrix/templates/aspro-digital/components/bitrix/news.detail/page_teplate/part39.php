<?//Заголовок вертикального меню?>
<?if(!empty($arResult['PROPERTIES']['submenu_zagolovok_h2']['VALUE'])):?>
	<div class="<?if($arResult['PROPERTIES']['submenu_zagolovok_h2_fon']['VALUE'] != 'Нет'):?>greyline<?endif;?> row margin0 block-with-bg" style="position: relative; z-index: 2;">
		<h2 class="submenu-h2"><?=$arResult['PROPERTIES']['submenu_zagolovok_h2']['VALUE'];?></h2>
	</div>
<?endif;?>
<?if ($arResult['PROPERTIES']['submenu_on']['VALUE'] == 'Да') {?>
	<div id="part39" class="container " style="padding-bottom: 0; position: relative; z-index: 2;">
		<div class="row <?if($arResult['PROPERTIES']['submenu_greyline']['VALUE'] == 'Да'):?>greyline<?endif;?>">
			<div class="maxwidth-theme" style="background-color: white;">
				<div class="col-md-3 col-sm-3 hidden-xs hidden-sm left-menu-md" style="padding-left: 0;">
					<aside>
						<?//Меню?>
						<ul class="nav nav-list side-menu">
							<?$subid=0; $ckey=0; $skey=0; $sskey=0; $ssskey=0;?>
							<?foreach($arResult['PROPERTIES']['submenu_values']['VALUE'] as $key => $title):?>
								<?unset($ckey); $ckey = $key+1;?>
								<li class="<?if(stristr($APPLICATION->GetCurPage(), $arResult['PROPERTIES']['submenu_links']['VALUE'][$key])):?>active<?endif;?>child" data-element="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid?>" id="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid?>">
									<a href="<?if(isset($arResult['PROPERTIES']['submenu_links']['VALUE'][$key])):?><?=$arResult['PROPERTIES']['submenu_links']['VALUE'][$key]?><?else:?>#<?endif;?>"><?=$title;?></a>
									<?//уровень 1?>
									<?if(isset($arResult['PROPERTIES']['submenu_values_1']['VALUE'])):?>	
										<div class="submenu-wrapper" data-element="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub"?>" id="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub"?>">
											<ul class="submenu">
												<?foreach($arResult['PROPERTIES']['submenu_values_1']['VALUE'] as $key => $title):?>
													<?if(empty(explode($ckey."_", $title)[1])) continue; else $title = explode($ckey."_", $title)[1];?>
													<?unset($skey); $skey = $key+1;?>
													<li class="<?if(stristr($APPLICATION->GetCurPage(), $arResult['PROPERTIES']['submenu_links_1']['VALUE'][$key])):?>active<?endif;?>childe">
														<a href="<?if(isset($arResult['PROPERTIES']['submenu_links_1']['VALUE'][$key])):?><?=$arResult['PROPERTIES']['submenu_links_1']['VALUE'][$key]?><?else:?>#<?endif;?>"><?=$title;?></a>
														<?//уровень 2?>
														<?if(isset($arResult['PROPERTIES']['submenu_values_2']['VALUE'])):?>	
															<div class="submenu-wrapper" data-element="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub2"?>" id="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub2"?>">
																<ul class="submenu">
																	<?foreach($arResult['PROPERTIES']['submenu_values_2']['VALUE'] as $key => $title):?>
																		<?if(empty(explode($skey."_", $title)[1])) continue; else $title = explode($skey."_", $title)[1];?>
																		<?unset($sskey); $sskey = $key+1;?>
																		<li class="<?if(stristr($APPLICATION->GetCurPage(), $arResult['PROPERTIES']['submenu_links_2']['VALUE'][$key])):?>active<?endif;?>childe">
																			<a href="<?if(isset($arResult['PROPERTIES']['submenu_links_2']['VALUE'][$key])):?><?=$arResult['PROPERTIES']['submenu_links_2']['VALUE'][$key]?><?else:?>#<?endif;?>"><?=$title;?></a>
																			<?//уровень 3?>
																			<?if(isset($arResult['PROPERTIES']['submenu_values_3']['VALUE'])):?>	
																				<div class="submenu-wrapper" data-element="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub3"?>" id="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub3"?>">
																					<ul class="submenu">
																						<?foreach($arResult['PROPERTIES']['submenu_values_3']['VALUE'] as $key => $title):?>
																							<?if(empty(explode($sskey."_", $title)[1])) continue; else $title = explode($sskey."_", $title)[1];?>
																							<?unset($ssskey); $ssskey = $key+1;?>
																							<li class="<?if(stristr($APPLICATION->GetCurPage(), $arResult['PROPERTIES']['submenu_links_3']['VALUE'][$key])):?>active<?endif;?>childe">
																								<a href="<?if(isset($arResult['PROPERTIES']['submenu_links_3']['VALUE'][$key])):?><?=$arResult['PROPERTIES']['submenu_links_3']['VALUE'][$key]?><?else:?>#<?endif;?>"><?=$title;?></a>
																								<?//уровень 4?>
																								<?if(isset($arResult['PROPERTIES']['submenu_values_4']['VALUE'])):?>	
																									<div class="submenu-wrapper" data-element="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub4"?>" id="<?=$arResult['PROPERTIES']['submenu_values']["CODE"].$subid."_sub4"?>">
																										<ul class="submenu">
																											<?foreach($arResult['PROPERTIES']['submenu_values_4']['VALUE'] as $key => $title):?>
																												<?if(empty(explode($ssskey."_", $title)[1])) continue; else $title = explode($ssskey."_", $title)[1];?>
																												<li class="<?if(stristr($APPLICATION->GetCurPage(), $arResult['PROPERTIES']['submenu_links_4']['VALUE'][$key])):?>active<?endif;?>childe">
																													<a href="<?if(isset($arResult['PROPERTIES']['submenu_links_4']['VALUE'][$key])):?><?=$arResult['PROPERTIES']['submenu_links_4']['VALUE'][$key]?><?else:?>#<?endif;?>"><?=$title;?></a>
																												</li>
																											<?endforeach;?>
																										</ul>
																									</div>
																								<?endif;?>
																							</li>
																						<?endforeach;?>
																					</ul>
																				</div>
																			<?endif;?>
																		</li>
																	<?endforeach;?>
																</ul>
															</div>
														<?endif;?>
													</li>
												<?endforeach;?>
											</ul>
										</div>
									<?endif;?>
								</li>
							<?$subid++;?>
							<?endforeach;?>
						</ul>
						
						<?//Задать вопрос?>
						<div class="ask_a_question fixed" style="top: 82px; bottom: auto; margin-bottom: 0;">
							<div class="inner">
								<div class="text-block">
									Наши специалисты ответят на любой интересующий вопрос по услуге
								</div>
							</div>
							<div class="outer">
								<span>
									<span class="btn btn-default btn-lg white animate-load" data-event="jqm" data-param-id="18" data-name="question">
										<span>Задать вопрос</span>
									</span>
								</span>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 content-md">
					<div class="main-section-wrapper">
						<span id="submenu_text">
							<?echo $arResult["PROPERTIES"]["submenu_text"]["~VALUE"]["TEXT"]?>
							<?if($arResult['PROPERTIES']['submenu_more']['VALUE']):?>
								<div class="previewtext_hide text1_0 more" style="display: none;">
									<?echo $arResult["PROPERTIES"]["submenu_more"]["~VALUE"]["TEXT"]?>
								</div><br>
								<div class="link-block-more">
									<a href="#" class="btn-inline sm rounded black read_next2" title=".text1_0"> <span class="span1">Читать далее</span> <span class="span2" style="display:none;">Скрыть</span> <i class="fa fa-angle-right"></i></a>
								</div>
							<?endif;?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?}?>