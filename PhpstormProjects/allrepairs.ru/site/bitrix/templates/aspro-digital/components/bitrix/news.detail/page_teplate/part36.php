<? if ($arResult['PROPERTIES']['viezd_on']['VALUE'] == 'Да') { ?>

    <div id="part36" class=" margin0 block-with-bg ">
        <div >

            <div class=" vc_inner vc_row-fluid vc_custom_1430893773165">

                <div class="box-container vc_row-fluid vc_custom_1488414448912" data-speed="2" data-type="background" style="background-position: 50% -194.984px;">
                    <div>
                        <div class="inner-flex row" style="display: flex;">

                            <div class="wpb_column flex-center col-sm-3">

                                <?
                                if ($arResult['PROPERTIES']['banner04_file_left']['VALUE']) {                              
                                        ?>

                                        <video  class="video cover " loop="" muted="" autoplay="">
                                            <source src="<?= $arResult['PROPERTIES']['banner04_file_left']['VALUE']; ?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                                        </video>

                              <?
                                }
                                ?>

                            </div>

                            <div class="wpb_column flex-center col-sm-1">
                                <?
                                if ($arResult['PROPERTIES']['banner04_file_center']['VALUE']) {                                   
                                ?>
                                <div class="center-img left" style="background-image: url(<?= $arResult['PROPERTIES']['banner04_file_center']['VALUE']; ?>);">&nbsp;</div>
                                        <?
                                }
                                ?>
                            </div>
                            <div class="wpb_column  col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">

                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <? if ($arResult['PROPERTIES']['banner04_title']['VALUE']) { ?>
                                                    <h3 class="text-center" style="color:#fff;"><?= $arResult['PROPERTIES']['banner04_title']['~VALUE']; ?></h3>
                                                <? } ?>
                                                <p style="text-align: center;" class="small_text_viezd">
                                                    <span style="color: #ebebeb;"><?= $arResult['PROPERTIES']['banner04_text']['~VALUE']['TEXT']; ?></span>
                                                </p>

                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column flex-center col-sm-1">
                                <?
                                if ($arResult['PROPERTIES']['banner04_file_center']['VALUE']) {
                                  
                                        ?>

                                       <div class="center-img right" style="background-image: url(<?= $arResult['PROPERTIES']['banner04_file_center']['VALUE']; ?>);">&nbsp;</div>

                                        <?
                                }
                                ?>

                            </div>
                            <div class="wpb_column col-sm-3 flex-center">
                                <?
                                if ($arResult['PROPERTIES']['banner04_file_right']['VALUE']) {
                                 ?>

                                        <img src="<?= $arResult['PROPERTIES']['banner04_file_right']['VALUE']; ?>">

                                <?
                                }
                                ?>
                            </div>

                            <div style="clear:both;"></div>

                        </div></div>

                </div>




            </div>
        </div>	
    </div>

<? } ?>
