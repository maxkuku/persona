<?if($arResult['PROPERTIES']['calc_on']['VALUE']=='Да'){?>


<script>
jQuery(document).ready(function($){
	
	var rabota1=[<?=($arResult['PROPERTIES']['calc_rabota1']['VALUE']?$arResult['PROPERTIES']['calc_rabota1']['VALUE']:'1500, 3500, 8000,12000')?>];
	var rabota2=[<?=($arResult['PROPERTIES']['calc_rabota2']['VALUE']?$arResult['PROPERTIES']['calc_rabota2']['VALUE']:'2500, 6000, 10000,13500')?>];
	var rabota3=[<?=($arResult['PROPERTIES']['calc_rabota3']['VALUE']?$arResult['PROPERTIES']['calc_rabota3']['VALUE']:'2000, 5000, 9000,15000')?>];
	var rabota4=[<?=($arResult['PROPERTIES']['calc_rabota4']['VALUE']?$arResult['PROPERTIES']['calc_rabota4']['VALUE']:'1500, 3500, 8000,1200')?>];
	
	var material1=[<?=($arResult['PROPERTIES']['material1']['VALUE']?$arResult['PROPERTIES']['material1']['VALUE']:'800, 2000, 3000,8000')?>];
	var material2=[<?=($arResult['PROPERTIES']['material2']['VALUE']?$arResult['PROPERTIES']['material2']['VALUE']:'1500, 4000, 6000,10000')?>];
	var material3=[<?=($arResult['PROPERTIES']['material3']['VALUE']?$arResult['PROPERTIES']['material3']['VALUE']:'1000, 3000, 5000,10000')?>];
	var material4=[<?=($arResult['PROPERTIES']['material4']['VALUE']?$arResult['PROPERTIES']['material4']['VALUE']:'800, 2000, 3000,8000')?>];
	
	var demontag_r1=[<?=($arResult['PROPERTIES']['demontag_r1']['VALUE']?$arResult['PROPERTIES']['demontag_r1']['VALUE']:'300, 600, 800,1800')?>];
	var demontag_r2=[<?=($arResult['PROPERTIES']['demontag_r2']['VALUE']?$arResult['PROPERTIES']['demontag_r2']['VALUE']:'600, 900, 1100,2100')?>];
	var demontag_r3=[<?=($arResult['PROPERTIES']['demontag_r3']['VALUE']?$arResult['PROPERTIES']['demontag_r3']['VALUE']:'500, 800, 1000,2000')?>];
	var demontag_r4=[<?=($arResult['PROPERTIES']['demontag_r4']['VALUE']?$arResult['PROPERTIES']['demontag_r4']['VALUE']:'300, 600, 800,1800')?>];
	
	var demontag_m1=[<?=($arResult['PROPERTIES']['demontag_m1']['VALUE']?$arResult['PROPERTIES']['demontag_m1']['VALUE']:'300, 600, 800,1800')?>];
	var demontag_m2=[<?=($arResult['PROPERTIES']['demontag_m2']['VALUE']?$arResult['PROPERTIES']['demontag_m2']['VALUE']:'600, 900, 1100,2100')?>];
	var demontag_m3=[<?=($arResult['PROPERTIES']['demontag_m3']['VALUE']?$arResult['PROPERTIES']['demontag_m3']['VALUE']:'500, 800, 1000,2000')?>];
	var demontag_m4=[<?=($arResult['PROPERTIES']['demontag_m4']['VALUE']?$arResult['PROPERTIES']['demontag_m4']['VALUE']:'300, 600, 800,1800')?>];
	
	
	function calc(){
		var tip=$("input[name='roomType']:checked").val();
		var clas=$("input[name='remontType']:checked").val();
		var demontag=$("input[name='houseType']:checked").val();
		var metri=parseInt($("#calc_metric").val());
		
		var rab2=0;
		var mat2=0;
		
		if(tip==1){
			var rab1=parseInt(rabota1[clas]);
			var mat1=parseInt(material1[clas]);
			
			if(demontag==1){
				var rab2=parseInt(demontag_r1[clas]);
				var mat2=parseInt(demontag_m1[clas]);
			}
		}
		if(tip==2){
			var rab1=parseInt(rabota2[clas]);
			var mat1=parseInt(material2[clas]);
			
			if(demontag==1){
				var rab2=parseInt(demontag_r2[clas]);
				var mat2=parseInt(demontag_m2[clas]);
			}
		}
		if(tip==3){
			var rab1=parseInt(rabota3[clas]);
			var mat1=parseInt(material3[clas]);
			
			if(demontag==1){
				var rab2=parseInt(demontag_r3[clas]);
				var mat2=parseInt(demontag_m3[clas]);
			}
		}
		if(tip==4){
			var rab1=parseInt(rabota4[clas]);
			var mat1=parseInt(material4[clas]);
			
			if(demontag==1){
				var rab2=parseInt(demontag_r4[clas]);
				var mat2=parseInt(demontag_m4[clas]);
			}
		}
		

		var rab_full=rab1+rab2;
		rab_full=rab_full*metri;
		var mat_full=mat1+mat2;
		mat_full=mat_full*metri;
		var itog=rab_full+mat_full;
		
		
		if(tip && clas && metri){
			$(".calc__result").show();
			
			$("#calc-result").html(rab_full);
			$("#calc-result-mat").html(mat_full);
			$("#calc-result-full").html(itog);
			
		}

		
		
		
		
		return false;
	};
	
	
	
	
	/*$("body").on("change", "input[name='roomType']",function(){
		calc();
	});
	$("body").on("change", "input[name='remontType']",function(){
		calc();
	});
	$("body").on("change", "input[name='houseType']",function(){
		calc();
	});
	
	$("body").on("change", "#calc_metric",function(){
		calc();
	});*/
        $("body").on("click", "#calc_run",function(){
		calc();
	});
        
});
</script>


<div id="part16" class=" <?if($arResult['PROPERTIES']['fon11']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot">
<div class="maxwidth-theme">
		<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['calc_zagolok']['VALUE'];?></h2>	
	
	<div class="b-calc">

    <div class="b-calc-room-type">
        <div class="calc-remont-type__header">1. Выбрать объект или тип помещения:</div>
        <div class="calc-room-type__items">
                
				
			
				
				<div class="calc-room-type__item js-select-item">
                    <label for="calc-id-4">
                                                <div class="calc-room-type__pic">
                            <img alt="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][0];?>" title="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][0];?>" src="<?=($arResult['PROPERTIES']['calc_images']['VALUE'][0]?$arResult['PROPERTIES']['calc_images']['VALUE'][0]:'https://www.remontprofi.ru/files/402/calc-room-2.jpg');?>">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-4" checked="checked" name="roomType" value="1" item="4">
                            <?=($arResult['PROPERTIES']['calc_captions']['VALUE'][0]?$arResult['PROPERTIES']['calc_captions']['VALUE'][0]:'Офис');?>
                        </div>
                    </label>
                </div>
				
				<div class="calc-room-type__item js-select-item">
                    <label for="calc-id-5">
                                                <div class="calc-room-type__pic">
                           <img alt="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][1];?>" title="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][1];?>" src="<?=($arResult['PROPERTIES']['calc_images']['VALUE'][1]?$arResult['PROPERTIES']['calc_images']['VALUE'][1]:'https://www.remontprofi.ru/files/402/calc-room-3.jpg');?>">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-5" name="roomType" value="2" item="5">
                            <?=($arResult['PROPERTIES']['calc_captions']['VALUE'][1]?$arResult['PROPERTIES']['calc_captions']['VALUE'][1]:'Загородный дом');?>
                            
                        </div>
                    </label>
                </div>
				
				
				<div class="calc-room-type__item js-select-item calc-room-type__item--on">
                    <label for="calc-id-3">
                                                <div class="calc-room-type__pic">
                            <img alt="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][2];?>" title="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][2];?>" src="<?=($arResult['PROPERTIES']['calc_images']['VALUE'][2]?$arResult['PROPERTIES']['calc_images']['VALUE'][2]:'https://www.remontprofi.ru/files/402/calc-room-1.jpg');?>">
                           
                            
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-3"  name="roomType" value="3" item="3">
                            <?=($arResult['PROPERTIES']['calc_captions']['VALUE'][2]?$arResult['PROPERTIES']['calc_captions']['VALUE'][2]:'Квартира');?> 
                        </div>
                    </label>
                </div>
               
               
                <div class="calc-room-type__item js-select-item">
                    <label for="calc-id-6">
                                                <div class="calc-room-type__pic">
                            <img alt="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][3];?>" title="<?=$arResult['PROPERTIES']['alt_img_calculator']['VALUE'][3];?>" src="<?=($arResult['PROPERTIES']['calc_images']['VALUE'][3]?$arResult['PROPERTIES']['calc_images']['VALUE'][3]:'https://www.remontprofi.ru/files/402/calc-room-4.jpg');?>">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-6" name="roomType" value="4" item="6">
                           <?=($arResult['PROPERTIES']['calc_captions']['VALUE'][3]?$arResult['PROPERTIES']['calc_captions']['VALUE'][3]:'Ком. помещение');?>
                        </div>
                    </label>
                </div>
				
                    </div>
    </div>

    <div class="b-calc-content-hidden" id="b-calc-content-hidden"></div>

    <div class="b-calc-content">

        <div class="b-calc-remont-type">
            <div class="calc-remont-type__header">2. Класс ремонта:</div>
            <div class="calc-remont-type__content">
                       
                        <div class="calc-remont-type__item">
                            <label for="calc-remont-type-id-1">
                                <input type="radio" name="remontType" value="0" id="calc-remont-type-id-1">
                                Косметический
                            </label>
                        </div>
						
                        <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-2">
                            <input type="radio" name="remontType" value="1"  id="calc-remont-type-id-2">
                            Бюджетный
                        </label>
                        </div>
						
                        <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-3">
                            <input type="radio" name="remontType" value="2" id="calc-remont-type-id-3">
                            Капитальный
                        </label>
                        </div>
						
                        <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-4">
                            <input type="radio" name="remontType" value="3" id="calc-remont-type-id-4">
                            Премиум
                        </label>
                        </div>
            </div>
        </div>

        <div class="b-calc-house-type">
            <div class="calc-house-type__header">3. Демонтажные работы </div>
            <div class="calc-house-type__content">
                            <div class="calc-house-type__item">
                    <label for="calc-house-type-id-1">
                        <input type="radio" name="houseType" value="1" id="calc-house-type-id-1">
                          ДА, нужны демонтажные работы и вывоз мусора
                    </label>
                </div>
                            <div class="calc-house-type__item">
                    <label for="calc-house-type-id-2">
                        <input type="radio" name="houseType"  value="0" id="calc-house-type-id-2">
                        Нет, не нужны демонтажные работы, так как помещение новое.
                    </label>
                </div>
                        </div>
        </div>

        <div class="b-calc-area-type">
            <div class="calc-area-type__header">4. Общая площадь объекта (ремонтируемая площадь), М2</div>
            <div class="calc-area-type__content">
                <div class="calc-remont-type__item">
                    <input type="text" id="calc_metric" style="width: 70%;margin-right: 50px;">
                <input type="button" id="calc_run" class="btn btn-default btn-lg" value="Расчитать" style="height: 37px;line-height: 10px;margin-top: 5px;"></div>
                
            </div>
        </div>

        <div class="calc__result calc-result" style="display: none;">
            <div class="calc__result-item">
                <span class="calc__result-title">Стоимость работ</span>
                <div class="calc__result-price"><span id="calc-result"></span> руб.</div>
            </div>
            <div class="calc__result-item">
                <span class="calc__result-title">Стоимость черновых материалов</span>
                <div class="calc__result-price"><span id="calc-result-mat"></span> руб.</div>
            </div>
            <div class="calc__result-item">
                <span class="calc__result-title">Ориентировочная стоимость ремонта</span>
                <div class="calc__result-price"><span id="calc-result-full"></span> руб.</div>
            </div>
        </div>
    </div>

</div>
	
	
</div>		
</div>


<?}?>