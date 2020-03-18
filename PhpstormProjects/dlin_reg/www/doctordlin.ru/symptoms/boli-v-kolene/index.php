<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Диагностика и лечение боли в колене");
$APPLICATION->SetPageProperty("title", "Боли в колене");
$APPLICATION->SetTitle("Боли в колене");
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
    <div class="wrap page-header"
        <?if(BANNER_ALL == "Y"):?>
            <div class="banner">
                <a href="/treatment/stelki/">
                    <p>АКЦИЯ! Индивидуальные ортопедические стельки со скидкой 40%!</p>
                </a>
            </div>
        <?endif?>
    </div>

        <div class="wrap" itemscope="" itemtype="http://schema.org/Article" itemprop="articleBody">>

        <h1>Диагностика и лечение боли в колене</h1>


<p>Боль в коленях — симптом более 200 разных заболеваний. Её может вызвать большая физическая нагрузка, травма, растяжение связок или разрыв мениска. Специалист определит точную причину. При боли в коленях обращайтесь за консультацией к ортопеду или неврологу.</p>

<h2>Причины боли в коленях</h2>
<p>Почему болят колени? Недомогание вызывают травмы и разные заболевания.</p>

<ul>
<li><strong>Гонартроз  &mdash; разрушение хрящевой ткани сустава</strong>. Причина боли в колене в 30&thinsp;% случаев. Болезнь поражает одно или оба колена. Колено болит и ноет при начале движения после сна, долгого отдыха. Вскоре боль проходит. При развитии болезни боль в колене появляется и в состоянии покоя. Человек с трудом сгибает ногу.</li>

<li><strong>Ушиб</strong>. Боль в суставах колена, отёк, гематомы на коже.</li>

<li><strong>Разрыв связок</strong>. Очень сильно болит колено, появляется отёк. Боль усиливается при повороте голени внутрь. При полном разрыве связок сустав становится разболтанным.</li>

<li><strong>Повреждение мениска</strong>. Самая распространённая травма колена. Возникает после неудачного движения во время бега, прыжка, катания на лыжах. Вначале человек чувствует острую боль в колене, он не может выпрямить ногу. Через день колено опухает, отёк нарастает.</li>

<li><strong>Воспаление сухожилий (тендинит)</strong>. Ноющая длительная боль в коленях. Боль усиливается с развитием воспаления. При прощупывании сухожилия возникают болезненные ощущения.</li>

<li><strong>Бурсит &mdash; воспаление околосуставной сумки</strong>. Кожа в области колена краснеет, колено болит и припухает. Человек не может свободно двигать ногой.</li>

<li><strong>Синовит &mdash; воспаление синовиальной оболочки</strong>. Симптомы возникают через несколько часов или суток после травмы. Человек чувствует ноющую боль средней интенсивности. Сустав увеличивается в размере, невозможно свободно сгибать и разгибать ногу. Кожа над суставом не краснеет, температура не повышается.</li>

<li><strong>Артрит &mdash; воспаление коленного сустава</strong>. Боль в колене, ограничение подвижности сустава, припухлость, повышение температуры в области колена, деформация сустава.</li>

<li><strong>Подагра</strong>. Возникает из-за избытка мочевой кислоты в организме. Вызывает острую боль и покраснение одного или двух суставов. Без лечения приступ боли может длиться несколько недель.</li>
</ul>



<h2>Повод срочно обратиться к врачу:</h2>
<ul>
<li>невозможно ступить на ногу;</li>
<li>изменилась форма колена;</li>
<li>колено постоянно болит, повысилась температура;</li>
<li>колено отекло или опухло, кожа вокруг покраснела.</li>
</ul>

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