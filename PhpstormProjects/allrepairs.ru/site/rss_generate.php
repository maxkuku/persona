<? header('Content-Type: application/rss+xml; charset=utf-8');
require_once('phpQuery.php');
function get_xml_page($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
}

$list = array(
    ".",
    "..",
    "ajax",
    "articles",
    "bitrix",
    "css",
    "form",
    "images",
    "include",
    "js",
    "projects",
    "search",
    "sitemap",
    "upload",
    "video",
);
function pr($a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            continue;
            #$results[] = $path;
        } else if (
            $value != "." &&
            $value != ".." &&
            $value != "ajax" &&
            $value != "articles" &&
            $value != "bitrix" &&
            $value != "css" &&
            $value != "form" &&
            $value != "images" &&
            $value != "include" &&
            $value != "js" &&
            $value != "search" &&
            $value != "sitemap" &&
            $value != "upload" &&
            $value != "video" &&
            $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}


#list_them('/home/srv80203/site/', $list);

$folders = array();
$path = '/home/srv80203/site/';

$f = getDirContents($path);



$write = htmlspecialchars($_REQUEST['write'],3);
$l = htmlspecialchars($_REQUEST['l'],3);




# /rss_generate.php?l=1 to print on screen
# /rss_generate.php?l=1&write=1 to write a file
if($l == 1) {



$begin = '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:yandex="http://news.yandex.ru" xmlns:turbo="http://turbo.yandex.ru">
  <channel>' . "\n";
$end = '</channel>
</rss>';

if($write == 1){
    $fp = fopen("rss_write.php", "w+");
    fwrite($fp, $begin);
}
else{
    echo $begin . "\n";
}
#die($begin);












    foreach ($f as $i => $page) {
        #if ( $i >= 0 && $i < 273 ) {
        $search_string = '.main';
        $addr = "https://www.allrepairs.ru/" . str_replace('/home/srv80203/site/', '', $page) . "/";
        $results_page = get_xml_page($addr);

        #echo $addr . "\n";

        $results = phpQuery::newDocument($results_page);

        $elements = $results->find($search_string);


        $images = $results->find(".image");
        foreach ($images as $image) {
            $info['images'][] = pq($image)->html();
        }


        #var_dump($elements->html()); exit();


        #$prices = $results->find(".price-4-col");
        $info = array();
        $found = 0;
        foreach ($elements as $element) {
            if (pq($element)->find('h1')->text()) {
                $info['title'] = pq($element)->find('h1')->text();
            }

            #if (pq($element)->attr('class') == 'body-info') {
            if (pq($element)->attr('class') == 'main') {
                #$info['text'] = trim(pq($element)->find('.previewtext')->html());
                $info['images'][] = pq($element)->find('img')->attr('src');
            }
            $info['text'] = trim($elements->html());
        }
        /* prices
        foreach ($prices as $price) {
            $info['prices'][] = pq($price)->html();
        }

        if ($info['prices'][0] == "") {
            $prices2 = $results->find(".wpb_wrapper");
            foreach ($prices2 as $price2) {
                $info['prices'][] = pq($price2)->html();
            }
        }*/


        $ex = '
    <item turbo="true">
      <title>' . $info['title'] . '</title>
      <link>' . $addr . '</link>
      <turbo:content>
        <![CDATA[
          <header>
            <h1>' . $info['title'] . '</h1>
            <h2>Роспрофстрой</h2>' . "\n";


        if ($info['images'][0]) {
            $ex .= '<figure><img src="https://www.allrepairs.ru' . $info['images'][0] . '"/ alt="' . $info['title'] . '"></figure>';
        } else if ($info['images'][1]) {
            $ex .= '<figure><img src="https://www.allrepairs.ru' . $info['images'][1] . '"/ alt="' . $info['title'] . '"></figure>';
        }
        else {
            $e2e4 = 1;
        }

        $ex .= "\n" . '<menu>
            <a href="https://www.allrepairs.ru/remont/">Ремонт</a>
            <ul class="dropdown-menu">
    <li>
        <a href="https://www.allrepairs.ru/remont-ofisov/" title="Ремонт офисов">Ремонт офисов<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-pomeshcheniy/" title="Ремонт помещений">Ремонт помещений<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-moskovskaya-oblast/" title="Ремонт Московская область">Ремонт Московская область<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-kottedzhey/" title="Ремонт коттеджей">Ремонт коттеджей<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-domov/" title="Ремонт домов">Ремонт домов<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-kvartir/" title="Ремонт квартир">Ремонт квартир<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-restoranov/" title="Ремонт ресторанов">Ремонт ресторанов</a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont/remont-gostinits/" title="Ремонт гостиниц">Ремонт гостиниц<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-zdaniy/" title="Ремонт зданий">Ремонт зданий<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-sklada/" title="Ремонт склада">Ремонт склада<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/remont-magazinov/" title="Ремонт магазинов">Ремонт магазинов<span class="arrow"><i></i></span></a>
    </li>
</ul>
            <a href="https://www.allrepairs.ru/otdelka/">Отделка</a>
            <ul class="dropdown-menu">
    <li>
        <a href="https://www.allrepairs.ru/otdelka/otdelka-pomeshcheniy/" title="Отделка помещений">Отделка помещений<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/otdelka-doma/" title="Отделка дома">Отделка дома<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/vnutrennyaya-otdelka/" title="Внутренняя отделка">Внутренняя отделка<span class="arrow"><i></i></span></a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/otdelka-sten/" title="Отделка стен">Отделка стен</a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/otdelka-ofisov/" title="Отделка офисов">Отделка офисов<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/otdelka/dekorativnaya-otdelka/" title="Декоративная отделка">Декоративная отделка</a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/otdelochnye-raboty/" title="Отделочные работы">Отделочные работы</a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/otdelka-tsekha/" title="Отделка цеха">Отделка цеха</a>
    </li>
</ul>
            <a href="https://www.allrepairs.ru/uslugi/">Услуги</a>
            <ul class="dropdown-menu">
    <li class=" ">
        <a href="https://www.allrepairs.ru/uslugi/demontazhnye-raboty/" title="Демонтажные работы">Демонтажные работы</a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/stroitelstvo-i-rekonstruktsiya/" title="Строительство и реконструкция">Строительство и реконструкция<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/uslugi/montazh-gipsokartona/" title="Монтаж гипсокартона">Монтаж гипсокартона<span class="arrow"><i></i></span></a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/uslugi/ukladka-plitki/" title=" Укладка плитки"> Укладка плитки<span class="arrow"><i></i></span></a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/uslugi/ukladka-laminata-tsena/" title="Укладка ламината цена">Укладка ламината цена</a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/remont/remontno-otdelochnye-raboty/" title="Ремонтно отделочные работы">Ремонтно отделочные работы</a>
    </li>
</ul>
    <a href="https://www.allrepairs.ru/dizayn/">Дизайн</a>
    <ul class="dropdown-menu">
    <li class=" ">
        <a href="https://www.allrepairs.ru/dizayn-interera/" title="Дизайн интерьера">Дизайн интерьера</a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/dizayn-domov/" title="Дизайн домов">Дизайн домов</a>
    </li>
    <li class="dropdown-submenu ">
        <a href="https://www.allrepairs.ru/dizayn-proekt-ofisa/" title="Дизайн проект офиса">Дизайн проект офиса<span class="arrow"><i></i></span></a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/dizayn-kvartiry/" title="Дизайн квартиры">Дизайн квартиры</a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/dizayn/stili-dizayna/" title="Стили дизайна">Стили дизайна</a>
    </li>
</ul>
    <a href="https://www.allrepairs.ru/stroitelstvo/">Строительство</a>
    <ul class="dropdown-menu">
    <li class=" ">
        <a href="https://www.allrepairs.ru/stroitelstvo-domov/" title="Строительство домов">Строительство домов</a>
    </li>
    <li class=" ">
        <a href="https://www.allrepairs.ru/stroitelstvo-kottedzhey/" title="Строительство коттеджей">Строительство коттеджей</a>
    </li>
    <li>
        <a href="https://www.allrepairs.ru/stroitelstvo-remont-spa/" title="Строительство ремонт СПА(SPA)">Строительство ремонт СПА(SPA)</a>
    </li>
</ul>
            <a href="https://www.allrepairs.ru/company/">Компания</a>
            <a href="https://www.allrepairs.ru/projects/">Фото</a>
            <ul class="dropdown-menu">
            <li class=" ">
            <a href="https://www.allrepairs.ru/video/" title="Видео">Видео</a>
            </li>
            </ul>
            <a href="https://www.allrepairs.ru/contacts/">Контакты</a>
              
            </menu>
          </header>
          <div class=main>' . $info['text'] . '</div>'."\n";

        /* prices
        if (count($info['prices']) > 0) {

            $from = array("/upload/", "href=\"/");
            $to = array("https://www.allrepairs.ru/upload/", "href=\"https://www.allrepairs.ru/");

            $ex .= '<p>' . str_replace($from, $to, implode('', $info['prices'])) . '</p>';
        }*/

        $ex .= '<div data-block="widget-feedback" data-stick="false">
            <div data-block="chat" data-type="vkontakte" data-url="https://vk.com/gkrosprofstroy"></div>
            <div data-block="chat" data-type="facebook" data-url="https://www.facebook.com/groups/rosprofstroy/"></div>
          </div>
          <p>Контакты: <a href="https://www.allrepairs.ru/contacts/">Москва, Даниловский район, улица Большая Тульская, дом 10 стр 9.</a></p>
          <p>Телефон: <a href="+74959686990">+7 (495) 968-69-90</a></p>
          <p>Обязательно приходите к нам на чашку ароматного кофе. Совместно обсудим ваши проект и предложим рекомендации и решения по проекту!</p>
        ]]>
      </turbo:content>
    </item>
  ';

        if($write == 1){
            fwrite($fp, $ex);
        }
        else{
            echo $ex . "\n";
        }



        #break;
        #}

    }

    if($write == 1){
        fwrite($fp, $end);
        fclose($fp);
    }
    else{
        echo $end . "\n";
    }
}

#pr($info['prices']);
#pr($images);
#pr($info);