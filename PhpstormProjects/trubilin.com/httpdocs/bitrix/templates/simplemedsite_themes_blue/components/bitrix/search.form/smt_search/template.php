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
$this->setFrameMode(true);?>
<div class="smt-form smt-form_search">
<form class="form-inline" action="<?=$arResult["FORM_ACTION"]?>">
	<div class="form-group">
		<input class="form-control smt-form__search-field" type="text" name="q" value="" size="15" maxlength="50" placeholder="<?=GetMessage("BSF_T_SEARCH_PLACEHOLDER");?>" />
	</div>
	<input class="btn smt-btn smt-form__submit" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
</form>
</div>
<div class="slider_head">Наши врачи</div>
<div class="bxslider">
  <div class="owl-item active">
     <div class="smt-doctor" id="bx_3966226736_287">
			<a href="/doctors/endokrinologi/ivanov-ivan-ivanovich/"><img class="smt-doctor__image" src="/upload/iblock/3ed/3ed70f8a58e1e91d06eb0c9aec54a2bf.jpg" alt="Трубилин Владимир Николаевич ">				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
			
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/endokrinologi/ivanov-ivan-ivanovich/">Трубилин Владимир&nbsp; Николаевич </a></div>
				<div class="smt-doctor__text">
											Главный врач, офтальмохирург<br>					<br>
																/ Доктор медицинских наук, профессор									</div>
			</div>
		</div></div>

  <div class="owl-item active">
     <div class="smt-doctor" id="bx_3966226736_295">
			<a href="/doctors/endokrinologi/poddubnyy-valentin-konstantinovich/"><img class="smt-doctor__image" src="/upload/iblock/656/656c69966dea3350e62df60a1a4d9d8b.jpg" alt="Трубилин Александр Владимирович">				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
			
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/endokrinologi/poddubnyy-valentin-konstantinovich/">Трубилин Александр Владимирович</a></div>
				<div class="smt-doctor__text">
											Директор, офтальмохирург<br>					<br>
																/ Кандидат медицинских наук									</div>
			</div>
		</div></div>


  <div class="owl-item active">
     <div class="smt-doctor" id="bx_3966226736_291">
			<a href="/doctors/pediatr/trubilina-maria-alexandrovna/"><img class="smt-doctor__image" src="/bitrix/images/img-11.17/2.png" alt="Трубилина Мария Александровна">				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
			
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/pediatr/trubilina-maria-alexandrovna/">Трубилина Мария Александровна</a></div>
				<div class="smt-doctor__text">
											Врач-офтальмолог, руководитель оптического направления<br>					
																/ Кандидат медицинских наук									</div>
			</div>
		</div></div>

		<div class="owl-item active">
     <div class="smt-doctor" id="bx_3966226736_288">
			<a href="/doctors/pediatr/petrova-irina-fedorovna/"><img class="smt-doctor__image" src="/upload/iblock/344/3444bff94468064ef23ab20a13f24953.jpg" alt="Трубилина Анна Викторовна">				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
			
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/pediatr/petrova-irina-fedorovna/">Трубилина Анна Викторовна</a></div>
				<div class="smt-doctor__text">
											Врач-офтальмолог, онколог<br>					<br>
																/ Кандидат медицинских наук									</div>
			</div>
		</div></div>

		<div class="owl-item active">
     <div class="smt-doctor" id="bx_3966226736_471">
			<a href="/doctors/pediatr/stepanova-darya-petrovna/"><img class="smt-doctor__image" src="/upload/iblock/c37/c37b352266bfb6a1ae49a9f675ab16bf.jpg" alt="Степанова Дарья Петровна">				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
			
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/pediatr/stepanova-darya-petrovna/">Степанова Дарья Петровна</a></div>
				<div class="smt-doctor__text">
											Врач-офтальмолог<br>	<br><br>													</div>
			</div>
		</div></div>
		
		<div class="owl-item active">
     <div class="smt-doctor" id="bx_3966226736_624">
			<a href="/doctors/pediatr/vinnik-valeriya-yurevna/"><img class="smt-doctor__image" src="/upload/iblock/ce9/ce90b9b9e2f0a11560f18634f5d35319.jpg" alt="Винник Валерия Юрьевна">				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
			
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/pediatr/vinnik-valeriya-yurevna/">Винник Валерия Юрьевна</a></div>
				<div class="smt-doctor__text">
											Врач-офтальмолог<br>	<br><br>													</div>
			</div>
		</div></div>
</div>


