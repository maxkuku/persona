<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Диагностика и лечение головной боли");
$APPLICATION->SetPageProperty("title", "Головные боли");
$APPLICATION->SetTitle("Головные боли");
$APPLICATION->SetAdditionalCSS($APPLICATION->GetCurDir() . "style.css");
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH ."/js/owl.carousel.js");
?>

    <div class="light-eee">
        <div class="wrap">
            <div class="under-title">
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Бесплатный прием</b><br><span>и диагностика</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Снятие боли</b><br><span>за 1-2 сеанса</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Авторский метод</b><br><span>лечения</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/flags.jpg"/><div>Стажировки в США,<br>Израиле, Германии</div></div>
            </div>
        </div>
    </div>

    <div class="wrap breadcrumbs">
        <? $APPLICATION->IncludeComponent("dlin:breadcrumb", ".default", array(), false); ?>
    </div>
    <div class="wrap page-header">
        <?if(BANNER_ALL == "Y"):?>
            <div class="banner">
                <a href="/treatment/stelki/">
                    <p><?=SPEC_BANNER_TEXT?></p>
                </a>
            </div>
        <?endif?>
    </div>

        <div class="wrap" itemscope="" itemtype="http://schema.org/Article" itemprop="articleBody">

        <h1>Диагностика и лечение головной боли</h1>


<p>Нет человека, который бы хоть раз в жизни не страдал от головных болей. Но вы будете поражены медицинской статистике, которая заявляет, что ежегодно во всем мире фиксируются миллионы случаев, когда пациенты обращаются с нестерпимой или сильной головной болью.</p>

<p><strong>В настоящее время боль в голове может быть вызвана следующими факторами:</strong></p>

<ul>
	<li>резкое изменение погодных условий (у здоровых людей);</li>
	<li>переутомление и недосыпание (у здоровых людей);</li>
	<li>внутричерепное давление;</li>
	<li>мигрень;</li>
	<li>головная боль напряжения;</li>
	<li>&laquo;хортоновская&raquo; боль;</li>
	<li>шейно-головные боли;</li>
	<li>черепно-мозговые травмы.</li>
</ul>

<p>Поэтому, почувствовав сильную боль в области головы и шеи, головокружение и слабость, вам стоит немедленно обратиться к врачу. С другой стороны, особое внимание стоит уделить хронической головной боли и её лечению.</p>

<p><strong>В настоящее время существует множество подходов к лечению мигрени и других видов боли, однако их можно отнести в следующие группы:</strong></p>

<ul>
	<li>быстрое избавление от боли;</li>
	<li>долгосрочное лечение.</li>
</ul>

<h2>Методы лечения головной боли</h2>

<p>Быстрыми методами избавления от мигрени пользовался практически каждый человек, сталкивавшийся с такой проблемой. Чаще всего, пациент глотает &laquo;волшебную&raquo; пилюлю и уже через 15-20 минут чувствует облегчение. Среди наиболее популярных медикаментозных средств &laquo;от головы&raquo; можно увидеть аспирин, парацетамол, ибупрофен, темпалгин и т.д. Принимая данные медикаменты, стоит помнить, что они лишь помогают снять сами спазмы сосудов головного мозга, однако бессильны перед сильным головокружением, общей слабостью, давлением и тошнотой. Кроме того такие лекарственные средства лишь временно блокируют боль, но не устраняют причину её появления. А это значит, что после окончания времени воздействия препарата, головная боль может снова посетить вас.</p>

<p>К наиболее популярным методам &laquo;народной медицины&raquo;, которые могут помочь снять боли в области головы, являются холодные компрессы. За счет более низкой температуры, они сужают сосуды и уменьшают пульсирующие боли. С другой стороны, можно принять горячий душ, способствующий расслаблению мышц головы и шеи.</p>

<p>Если вы хотите забыть о болях в области головы и шеи, тошноте и головокружении, тогда мы рекомендуем вам долгосрочные методы лечения мигрени.</p>

<p>Боль и головокружение, лечением которых занимаются квалифицированные доктора тщательно диагностируются, после чего ведущий специалист вам назначит индивидуальный курс терапии. При этом мы применяем мануальную терапию и специальные виды массажа. Данные методы направлены на нормализацию кровообращения в области головы и шеи.</p>


</div>

    <div class="picture-wrap">
        <div class="bd-opacity"></div>
        <div class="wrap">
            <h2>Бесплатная консультация и диагностика врача</h2>
            <div class="free-cons">
                <ul>
                    <li>Мануальный терапевт</li>
                    <li class="divider"></li>
                    <li>Вертебролог</li>
                    <li class="divider"></li>
                    <li>Остеопат</li>
                    <li class="divider"></li>
                    <li>Невролог</li>
                </ul>
            </div>
            <p>На консультации мы проводим тщательную диагностику всего позвоночника и каждого сегмента. Мы точно определяем какие сегменты и нервные корешки вовлечены и вызывают симптомы боли. По итогам консультации даем подробные рекомендации по лечению и если необходимо назначаем дополнительную диагностику.</p>
            <div class="three">
                <div><span>1</span><p>Проведем функциональную диагностику позвоночника</p></div>
                <div><span>2</span><p>Выполним манипуляцию, существенно облегчающую боль</p></div>
                <div><span>3</span><p>Составим индивидуальную программу лечения</p></div>
            </div>

            <div class="rec" data-uk-modal="{target:'#modal-form'}" data-target="#modal-form"><span>Запишитесь на бесплатный прием</span></div>
        </div>
    </div>




    <div class="wrap">
        <div class="block quote bluebordered">
            <img src="images/gr-ok.webp" id="gr_doc"
                 onerror="this.onerror=null; this.src='images/gr-ok.jpg'">
            <p>Нас рекомендуют 94% пациентов.<br>
               Спасибо за доверие ваш выбор.</p>
        </div>
    </div>








<div class="lightgrey">
	<div class="wrap">
<?$APPLICATION->IncludeComponent(
		            "dlin:news.list",
		            "youtube_slider",
		            Array(
		                "VARIANT" => "light",
			            "ACTIVE_DATE_FORMAT" => "",
			            "ADD_SECTIONS_CHAIN" => "N",
			            "AJAX_MODE" => "N",
			            "AJAX_OPTION_ADDITIONAL" => "",
			            "AJAX_OPTION_HISTORY" => "N",
			            "AJAX_OPTION_JUMP" => "N",
			            "AJAX_OPTION_STYLE" => "Y",
			            "CACHE_FILTER" => "N",
			            "CACHE_GROUPS" => "Y",
			            "CACHE_TIME" => "36000000",
			            "CACHE_TYPE" => "A",
			            "CHECK_DATES" => "Y",
			            "DETAIL_URL" => "",
			            "DISPLAY_BOTTOM_PAGER" => "N",
			            "DISPLAY_DATE" => "N",
			            "DISPLAY_NAME" => "Y",
			            "DISPLAY_PICTURE" => "N",
			            "DISPLAY_PREVIEW_TEXT" => "Y",
			            "DISPLAY_TOP_PAGER" => "N",
			            "FIELD_CODE" => array("DETAIL_TEXT","DETAIL_PICTURE",""),
			            "FILTER_NAME" => "",
			            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
			            "IBLOCK_ID" => "13",
			            "IBLOCK_TYPE" => "specs",
			            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			            "INCLUDE_SUBSECTIONS" => "N",
			            "MESSAGE_404" => "",
			            "NEWS_COUNT" => "20",
			            "PAGER_BASE_LINK_ENABLE" => "N",
			            "PAGER_DESC_NUMBERING" => "N",
			            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			            "PAGER_SHOW_ALL" => "N",
			            "PAGER_SHOW_ALWAYS" => "N",
			            "PAGER_TEMPLATE" => ".default",
			            "PAGER_TITLE" => "Новости",
			            "PARENT_SECTION" => "",
			            "PARENT_SECTION_CODE" => "",
			            "PREVIEW_TRUNCATE_LEN" => "",
			            "PROPERTY_CODE" => array("",""),
			            "SET_BROWSER_TITLE" => "N",
			            "SET_LAST_MODIFIED" => "N",
			            "SET_META_DESCRIPTION" => "N",
			            "SET_META_KEYWORDS" => "N",
			            "SET_STATUS_404" => "N",
			            "SET_TITLE" => "N",
			            "SHOW_404" => "N",
			            "SORT_BY1" => "SORT",
			            "SORT_BY2" => "SORT",
			            "SORT_ORDER1" => "ASC",
			            "SORT_ORDER2" => "ASC",
			            "STRICT_SECTION_CHECK" => "N"
		            )
	            );?>
	</div>
</div>







<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>