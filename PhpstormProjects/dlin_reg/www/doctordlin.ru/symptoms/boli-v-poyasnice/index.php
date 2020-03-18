<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Диагностика и лечение боли в пояснице");
$APPLICATION->SetPageProperty("title", "Боли в пояснице");
$APPLICATION->SetTitle("Боли в пояснице");
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
                    <p>АКЦИЯ! Индивидуальные ортопедические стельки со скидкой 40%!</p>
                </a>
            </div>
        <?endif?>
    </div>

        <div class="wrap" itemscope="" itemtype="http://schema.org/Article" itemprop="articleBody">

        <h1>Диагностика и лечение боли в пояснице</h1>


<p>Боль в пояснице — одна из самых частых жалоб врачу. На поясничный отдел приходится наибольшая нагрузка по сравнению с другими отделами позвоночника, поэтому поясница подвержена травмам. Боль в нижней части поясницы часто является симптомом остеохондроза, радикулита и других болезней. </p>
<h2>Почему болит поясница</h2>
<p>Боль в&nbsp;нижней части спины может возникнуть после усиленной тренировки, долгого пребывания в&nbsp;одной позе или неловкого движения. К&nbsp;факторам риска появления боли в&nbsp;пояснице относятся:</p>
<ul>
<li>постоянное вождение или работа за&nbsp;компьютером;</li>
<li>работа, связанная с&nbsp;большой физической нагрузкой, стрессами;</li>
<li>усиленные тренировки в&nbsp;тренажёрном зале;</li>
<li>работа в&nbsp;положении сидя или стоя;</li>
<li>беременность и&nbsp;недавние роды;</li>
<li>избыточный вес.</li>
</ul>
<p>Часто боль проходит самостоятельно. Если поясница болит периодически или постоянно, это может быть признаком заболевания. Без правильного лечения боль внизу спины может привести к&nbsp;серьёзным последствиям&nbsp;&mdash; в&nbsp;том числе, к&nbsp;операции на&nbsp;позвоночнике.</p>

<h2>Какие болезни вызывают боль в&nbsp;пояснице</h2>
<p>Боль в&nbsp;пояснице делится на&nbsp;первичную и&nbsp;вторичную.<br /> Первичный болевой синдром вызывают непосредственно заболевания позвоночника:</p>
<ul>
<li>остеохондроз поясничного отдела позвоночника (⅓ всех случаев);</li>
<li>протрузия межпозвонкового диска и&nbsp;межпозвонковая грыжа;</li>
<li>спондилоартроз, спондилёз, спондилолистёз.</li>
</ul>
<p>Вторичный болевой синдром возникает не&nbsp;из-за позвоночника, а&nbsp;из-за других проблем в&nbsp;организме. Его вызывают разнообразные причины:</p>
<ul>
<li>перелом вследствие остеопороза;</li>
<li>опухоль в&nbsp;просвете позвоночного канала;</li>
<li>перелом позвоночника после травмы;</li>
<li>длительное напряжение мышц;</li>
<li>анатомически узкий позвоночный канал;</li>
<li>сколиоз, кифоз, кифосколиоз, болезнь Шейермана-Мау;</li>
<li>ревматический артрит, псориатический артрит, остеоартрит;</li>
<li>остеомиелит, дисцит, туберкулёз позвоночника;</li>
<li>пиелонефрит, мочекаменная болезнь;</li>
	<li>осложнённое течение беременности.</li>
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