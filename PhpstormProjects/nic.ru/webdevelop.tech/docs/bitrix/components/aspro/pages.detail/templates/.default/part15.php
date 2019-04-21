<?if($arResult['PROPERTIES']['viezd_on']['VALUE']=='Да'){?>
<div id="part15" class=" margin0 block-with-bg ">
	<div >
	
	<div class=" vc_inner vc_row-fluid vc_custom_1430893773165">
	
	
	<div class="box-container   vc_row-fluid vc_custom_1488414448912" data-speed="2" data-type="background" style="background-position: 50% -194.984px;">
	<div>
	<div class="inner-flex row">
	
	<div class="wpb_column  col-sm-3">
		<div class="vc_column-inner vc_custom_1488414350989">
			<div class="wpb_wrapper">
				
	<div class="wpb_text_column wpb_content_element">
		<div class="wpb_wrapper">
			<p>

			<?if($arResult['PROPERTIES']['viezd_video']['VALUE']){?>
			
			<?$URL = CFile::GetPath($arResult['PROPERTIES']['viezd_video']['VALUE']);?>
			<?$URL2 = CFile::GetPath($arResult['PROPERTIES']['viezd_video2']['VALUE']);?>
			<?$URL3 = CFile::GetPath($arResult['PROPERTIES']['viezd_video3']['VALUE']);?>
			
				<video  class="video cover " loop="" muted="" autoplay="" style="width:225px;height:145px;">
					<source src="<?=$URL;?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
					<source src="<?=$URL2;?>" type='video/ogg; codecs="theora, vorbis"'>
					<source src="<?=$URL3;?>" type='video/webm; codecs="vp8, vorbis"'>
				</video>
			<?}else{?>
				
			<?}?>

		</div> 
	</div> 
			</div>
		</div>
	</div>
	
	<div class="wpb_column  col-sm-1">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				
			</div>
		</div>
	</div>
	
	<div class="wpb_column  col-sm-6">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				
				

	<div class="wpb_text_column wpb_content_element">
		<div class="wpb_wrapper">
			<?if($arResult['PROPERTIES']['viezd_zagolok']['VALUE']){?>
				<h3 class="text-center" style="color:#fff;"><?=$arResult['PROPERTIES']['viezd_zagolok']['VALUE'];?></h3>
			<?}?>
			<p style="text-align: center;" class="small_text_viezd">
			<span style="color: #ebebeb;"><?=$arResult['PROPERTIES']['viezd_text']['VALUE'];?></span>
			</p>

		</div> 
	</div> 
			</div>
		</div>
	</div>
	
	<div class="wpb_column vc_column_container col-sm-2  ">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
				<div class="">
					<span class="callback-block animate-load twosmallfont colored  btn btn-default2 btn-lg  animate-load" data-event="jqm" data-param-id="19" data-name="callback">ЗАДАТЬ ВОПРОС</span>
				</div>

			</div>
		</div>
	</div>
	
	<div style="clear:both;"></div>
	
	</div></div>
	
	</div>
		
		


</div>
</div>	
</div>

<?}?>
