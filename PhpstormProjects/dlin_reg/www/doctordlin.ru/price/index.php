<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Прейскурант клиники Доктора Длина, Москва");
$APPLICATION->SetPageProperty("title", "Прейкурант клиники Доктора Длина");
$APPLICATION->SetTitle("Прейскурант");
$APPLICATION->SetAdditionalCSS($APPLICATION->GetCurDir() . "style.css");
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH ."/js/owl.carousel.js");
?>
    <div style="display:none">
        <div class="date-publishing">
            Дата публикации:
            <time datetime="<?= date("d-m-Y H:i:s", filemtime(__FILE__)) ?>"
                  class="date"><?= date("d-m-Y H:i:s.", filemtime(__FILE__)) ?></time>
            <span class="updated hidden" itemprop="datePublished"><?= date("Y-m-d", filemtime(__FILE__)) ?></span>
        </div>
        <meta itemprop="articleSection" content="<? $APPLICATION->ShowTitle(false) ?>">
        <meta itemprop="url" content="https://doctordlin.ru">
        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
				<span class="vcard hidden">
					<span itemprop="name" class="fn org">Администрация сайта</span>
					<span class="tel">+7(499) 112-25-17</span>
					<span class="note"><? $APPLICATION->ShowTitle(false) ?></span>
					<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"
                          class="adr locality">
                        <span itemprop="addressLocality">Москва, ул. Гарибальди 36</span></span>
				</span>
			</span>
    </div>




    <div class="light-eee">
        <div class="wrap">
            <div class="under-title">
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>5 минут пешком</b><br><span>от метро</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Бесплатная</b><br><span>парковка</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Прием ведется</b><br><span>по записи</span></div></div>
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
                <p>Спецпредложение! Индивидуальные ортопедические стельки со скидкой 40%!</p>
            </a>
        </div>
    <?endif?>
</div>



    <div class="ab">
        <div class="wrap">
            <h2 class="">Стоимость услуг</h2>
            <div class="redtext">
                В клинике предусмотрена гибкая система скидок!
            </div>
        </div>
    </div>


    <div class="wrap">
    <table class="price">
        <?
        $row = 1;
        if (($handle = fopen("price_last.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $num = count($data);
                echo "<tr>";
                $row++;
                for ($c=0; $c < $num; $c++) {
                    if($row == 2) {
                        echo "<th>" . $data[$c] . "</th>";
                    }
                    else {
                        echo "<td";
                        if ($data[1] == "" && $data[2] == "") {
                            echo " colspan='3' class='sub-title'><b>" . $data[0] . "</b></td>";
                            break;
                        } else {
                            echo ">" . $data[$c] . "</td>";
                        }
                    }
                }
                echo "</tr>\n";
            }
            fclose($handle);
        }
        ?>
    </table>
    </div>

<br><br>

<div class="wrap">
    <p>* Не является публичной офертой. Уточняйте цену у оператора колл-центра.</p>
</div>

<br><br>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>