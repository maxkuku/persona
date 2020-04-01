<?php
function pr($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
function monRP($month_int){
    switch((int)$month_int){
        case 1:
            $r = "января";
            break;
        case 2:
            $r = "февраля";
            break;
        case 3:
            $r = "марта";
            break;
        case 4:
            $r = "апреля";
            break;
        case 5:
            $r = "мая";
            break;
        case 6:
            $r = "июня";
            break;
        case 7:
            $r = "июля";
            break;
        case 8:
            $r = "августа";
            break;
        case 9:
            $r = "сентября";
            break;
        case 10:
            $r = "октября";
            break;
        case 11:
            $r = "ноября";
            break;
        case 12:
            $r = "декабря";
            break;
        default:
            $r = "error " . (int)$month_int . " month int";
            break;
    }
    return $r;
}

/**
 * @param $str
 * @return mixed
 */
function urlRusDecode($str)
{
    $to = array("а", "б", "в", "г", "д", "е", "ё", "ж", "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ы", "ь", "э", "ю", "я", "А", "Б", "В", "Г", "Д", "Е", "Ё", "Ж", "З", "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Ъ", "Ы", "Ь", "Э", "Ю", "Я");
    $from = array("%D0%B0", "%D0%B1", "%D0%B2", "%D0%B3", "%D0%B4", "%D0%B5", "%D1%91", "%D0%B6", "%D0%B7", "%D0%B8", "%D0%B9", "%D0%BA", "%D0%BB", "%D0%BC", "%D0%BD", "%D0%BE", "%D0%BF", "%D1%80", "%D1%81", "%D1%82", "%D1%83", "%D1%84", "%D1%85", "%D1%86", "%D1%87", "%D1%88", "%D1%89", "%D1%8A", "%D1%8B", "%D1%8C", "%D1%8D", "%D1%8E", "%D1%8F", "%D0%90", "%D0%91", "%D0%92", "%D0%93", "%D0%94", "%D0%95", "%D0%81", "%D0%96", "%D0%97", "%D0%98", "%D0%99", "%D0%9A", "%D0%9B", "%D0%9C", "%D0%9D", "%D0%9E", "%D0%9F", "%D0%A0", "%D0%A1", "%D0%A2", "%D0%A3", "%D0%A4", "%D0%A5", "%D0%A6", "%D0%A7", "%D0%A8", "%D0%A9", "%D0%AA", "%D0%AB", "%D0%AC", "%D0%AD", "%D0%AE", "%D0%AF");
    return str_ireplace($from,$to,$str);
}

/**
 * категории / теги вручную
 */
function links_n()
{
    $links_n = [
        ["dikaya-ryba", "Дикая рыба", "дикая рыба"],
        ["krasnaya-ryba", "Красная рыба", "красная рыба"],
        ["temnyy-shokolad", "Темный шоколад", "темный шоколад"],
        ["olivkovoe-maslo-holodnogo-otzhima", "Оливковое масло холодного отжима", "оливковое масло холодного отжима"],
        ["morskaya-ryba", "Морская рыба", "морская рыба"],
        ["rechnaya-ryba", "Речная рыба", "речная рыба"],
        ["morskoy-okun", "Морской окунь", "морской окунь"],
        ["file-lososya", "Филе лосося", "филе лосося"],
        ["kunzhutnoe-maslo", "Кунжутное масло", "кунжутное масло"],
        ["mindalnoe-maslo", "Миндальное масло", "миндальное масло"],
        ["chir", "Чир", "чир"],
        ["sardiny", "Сардины", "сардины"],
        ["anchousy", "Анчоусы", "анчоусы"],
        ["soevyj-sous", "Соевый соус", "соевый соус"],
        ["fermerskiy-syr", "Фермерский сыр", "фермерский сыр"],
        ["riet", "Риет", "риет"],
        ["nalim", "Налим", "налим"],
        ["makrel", "Макрель", "макрель"],
        ["zamorozhennaya-syomga", "Замороженная семга", "замороженная семга"],
        ["svezhemorozhenaya-ryba", "Свежемороженая рыба", "свежемороженая рыба"],
        ["ryba-kapitan", "Рыба Капитан", "рыба капитан"],
        ["file-syomgi", "Филе сёмги", "филе семги"],
        ["ryba-v-masle", "Рыба в масле", "рыба в масле"],
        ["elitniy-shokolad", "Элитный шоколад", "элитный шоколад"],
        ["osetr-goryachego-kopcheniya", "Осетр горячего копчения", "осётр горячего копчения"],
        ["shveycarskiy-syr", "Швейцарский сыр", "швейцарский сыр"],
        ["francuzskie-syry", "Французские сыры", "французские сыры"],
        ["ikra-krasnaya", "Икра красная", "икра красная"],
        ["omul-holodnogo-kopcheniya", "Омуль холодного копчения", "омуль холодного копчения"],
        ["gorbusha-holodnogo-kopcheniya", "Горбуша холодного копчения", "горбуша холодного копчения"],
        ["zamorozhennyj-kalmar", "Замороженный кальмар", "замороженный кальмар"],
        ["forel-holodnogo-kopcheniya", "Форель холодного копчения", "форель холодного копчения"],
        ["keta-holodnogo-kopcheniya", "Кета холодного копчения", "кета холодного копчения"],
        ["skumbriya-holodnogo-kopcheniya", "Скумбрия холодного копчения", "скумбрия холодного копчения"],
        ["ryba-mech", "Рыба-меч", "рыба-меч"],
        ["ochishchennye-krevetki", "Очищенные креветки", "очищенные креветки"],
        ["muksun-holodnogo-kopcheniya", "Муксун холодного копчения", "муксун холодного копчения"],
        ["zubatka-goryachego-kopcheniya", "Зубатка горячего копчения", "зубатка горячего копчения"],
        ["krevetki-bez-golovy", "Креветки без головы", "креветки без головы"],
        ["paltus-holodnogo-kopcheniya", "Палтус холодного копчения", "палтус холодного копчения"],
        ["rybnye-delikatesy", "Рыбные деликатесы", "рыбные деликатесы"],
        ["steyk-syomgi", "Стейк сёмги", "стейк сёмги"],
        ["steyk-treski", "Стейк трески", "стейк трески"],
        ["varenye-krevetki", "Вареные креветки", "вареные креветки"],
        ["nerka-holodnogo-kopcheniya", "Нерка холодного копчения", "нерка холодного копчения"],
        ["krevetki-suhoy-zamorozki", "Креветки сухой заморозки", "креветки сухой заморозки"],
        ["podarochnye-nabory", "Подарочные наборы", "подарочные наборы"],
        ["vareno-morozhennye-krevetki", "Варено-мороженные креветки", "варено-мороженные креветки"],
        ["solenaya-krasnaya-ryba", "Соленая красная рыба", "соленая красная рыба"],
        ["delikatesy", "Деликатесы", "деликатесы"],
        ["spinka-treski", "Спинка трески", "спинка трески"],
        ["syrovyalenyy-okorok", "Сыровяленый окорок", "сыровяленый окорок"],
        ["syrovyalenaya-kolbasa", "Сыровяленая колбаса", "сыровяленая колбаса"],
        ["podarochnye-produktovye-nabory", "Подарочные продуктовые наборы", "подарочные продуктовые наборы"],
        ["kopchenoe-myaso", "Копченое мясо", "копченое мясо"],
        ["morskie-delikatesy", "Морские деликатесы", "морские деликатесы"],
        ["kolbasy-i-delikatesy", "Колбасы и деликатесы", "колбасы и деликатесы"],
        ["gorkiy-shokolad", "Горький шоколад", "горький шоколад"],
        ["podarochnye-korziny", "Подарочные корзины", "подарочные корзины"],
        ["dikie-krevetki", "Дикие креветки", "дикие креветки"],
        ["lobstery", "Лобстеры", "лобстеры"],
        ["lobstery-langusty", "Лобстеры и лангусты", "лобстеры и лангусты"],

        /*очень важно, чтоб не было заглавных букв 2-го элемента каждой строки*/
    ];
    return $links_n;
}

/**
 *
 * для страниц категорий, сделанных вручную
 * (например https://shop.lamaree.ru/catalog/stolovyj-serviz-na-6-person/)
 * на которых невозможно сделать выборку товаров по названию или описанию
 * выборка производится по тегам. Функция выбирает все товары,
 * у которых указанный (можно по-русски) тег
 */
function get_ids_by_tag($tag)
{
    $tags = array();
    $res = sql_query("SELECT ct_tag, cl_el_id FROM sb_clouds_tags LEFT JOIN sb_clouds_links ON ct_id=cl_tag_id WHERE ct_tag LIKE ?s ORDER BY ct_tag", $tag);
    foreach ($res as $row) {
        $tags[] = $row[1]; // get item ids in array
    }
    return implode(",", $tags);
}


/**
 * @param $tovar_id
 * @return array
 * расставляет товарам теги если товар попал в нужную категорию
 * теги и список категорий получаем по links_n
 */
function add_return_link_tag($tovar_id)
{

    $links_n = links_n();
    $line = "";


    foreach ($links_n as $ln) {


        $this_tag = $ln[2];

        $res = sql_query('SELECT ct_tag, COUNT(cl_el_id), cl_el_id FROM sb_clouds_tags LEFT JOIN sb_clouds_links ON ct_id=cl_tag_id WHERE cl_el_id = ? GROUP BY ct_id ORDER BY ct_tag', $tovar_id);

        foreach($res as $r) {
            if ($this_tag == $r[0]) {
                if (strpos($line, $this_tag) == false) {
                    $line .= "<a id=\"tovar_id_" . $tovar_id . "\" class=\"item-tag\" href=\"/catalog/" . $ln[0] . "/\">" . strtolower($ln[2]) . "</a>";
                }
            }
        }

    }


    return $line;
}


function links(){
    $arr = array(
        array("лосос", "losos", "лосось"),
        array("осетр", "osetr", "осётр"),
        array("форел", "forel", "форель"),
        array("орюшк", "korushka", "корюшка"),
        array("тунец", "tunec", "тунец"),
        array("тунц", "tunec", "тунец"),
        array("палтус", "paltus", "палтус"),
        array("сельд", "seld", "сельдь"),
        array("каракатиц", "karakatica", "каракатица"),
        array("треск", "treska", "треска"),
        array("семг", "semga", "сёмга"),
        array("сёмг", "semga", "сёмга"),
        array("камбал", "kambala", "камбала"),
        array("нерк", "nerka", "нерка"),
        array("стейк", "rybnye-steyki", "рыбные стейки"),
        array("креветк", "krevetki", "креветки"),
        array("красн рыб", "krasnaya-ryba", "красная рыба"),
        array("осетр икр", "ikra-osetr", "осетровая икра"),
        array("кальмар", "calmary", "кальмары"),
        array("осьминог", "osminog", "осьминог"),
        array("сибас", "sibas", "сибас"),
        array("дорад", "dorada", "дорада"),
        array("угорь", "ugor", "угорь"),
        array("угр", "ugor", "угорь"),
        array("скумбр", "skumbriya", "скумбрия"),
        array("щук", "schuka", "щука"),
        array("барабуль", "barabulka", "барабулька"),
        array("амчатск краб", "kamchatskij-krab", "камчатский краб"),
        array("реветки тигров", "tigrovye-krevetki", "тигровые креветки"),
        array("кета", "keta", "кета"),
        array("кеты", "keta", "кета"),
        array("судак", "sudak", "судак"),
        array("рыба-попугай", "ryba-popugaj", "рыба-попугай"),
        array("нельм", "nelma", "нельма"),
        array("горчиц", "gorchica", "горчица"),
        array("ижонск горчиц", "dizhonskaya-gorchica", "дижонская горчица"),
        array("козий", "kozij-syr", "козий сыр"),
        array("козьего", "kozij-syr", "козий сыр"),
        array("шоколад конфет", "shokoladnye-konfety", "шоколадные конфеты"),
        array("орск рыб", "morskaya-ryba", "морская рыба"),
        array("ечн рыб", "rechnaya-ryba", "речная рыба"),
        array("овеч сыр", "ovechiy-syr", "овечий сыр"),
        array("мясо краб", "myaso-kraba", "мясо краба"),
        array("винный", "vinny-uksus", "винный уксус"),
        array("северн реветк", "severnye-krevetki", "северные креветки"),
        array("ргентин креветк", "argentinskiye-krevetki", "аргентинские креветки"),
        array("сыр плесен", "syr-s-plesenju", "сыр с плесенью"),
        array("мяс гребешк", "myaso-grebeshka", "мясо гребешка"),
        array("иле тун", "file-tunca", "филе тунца"),
        array("алту инекор", "paltus-sinekotiy", "палтус синекорый"),
        array("иле щук", "file-schuki", "филе щуки"),
        array("иле удак", "file-sudaka", "филе судака"),
        array("иле реск", "file-treski", "филе трески"),
        array("тушка удак", "tushka-sudaka", "тушка судака"),
        array("черн околад", "cherniy-shokolad", "черный шоколад"),
        array("бел шоколад", "beliy-shokolad", "белый шоколад"),
        array("молочн околад", "molochnyj-shokolad", "молочный шоколад"),
        array("околад", "shokolad", "шоколад"),
        array("охл семг", "ohlazhdennaya-semga", "охлажденная семга"),
        //осетр
        array("икр без консервант", "ikra-bez-konservantov", "икра без консервантов"),
        array("филе", "file-ryby", "филе рыбы"),
        array("фаланг краб", "falangi-kraba", "фаланги краба"),
        array("грюйер", "syr-gryujer", "сыр грюйер"),
        //array("сыр российск", "rossijskij-syr", "российский сыр"),
        //array("швейцар сыр", "shveycarskiy-syr", "швейцарский сыр"),
        array("черн трюфел", "chernyj-tryufel", "черный трюфель"),
        array("бел трюфел", "belyj-tryufel", "белый трюфель"),
        array("полутверд сыр", "polutverdye-syry", "полутврердые сыры"),
        //array("ранцузск сыр", "francuzskie-syry", "французские сыры"),
        array("радужн форел", "raduzhnaya-forel", "радужная форель"),
        array("морож креветк", "zamorozhennye-krevetki", "замороженные креветки"),
        array("морск язык", "morskoy-yazyk", "морской язык"),
        array("морск ерш", "morskoy-ersh", "морской ерш"),
        array("ледяная рыба", "ledyanaya-ryba", "ледяная рыба"),
        array("кефал", "kefal", "кефаль"),
        array("рапан мяс", "myaso-rapany", "мясо рапаны"),
        array("орюшк ялен", "koryushka-vyalenaya", "корюшка вяленая"),
        array("лосос икр", "lososevaya-ikra", "лососевая икра"),
        array("икр горбуш", "ikra-gorbushi", "икра горбуши"),
        array("икр кет", "ikra-kety", "икра кеты"),
        //array("икр крас", "ikra-krasnaya", "икра красная"),
        array("икр форел", "ikra-foreli", "икра форели"),
        array("горбуш", "gorbusha", "горбуша"),
        array("омул", "omul", "омуль"),
        array("морск коктейл", "morskoy-kokteyl", "морской коктейль"),
        array("пармезан", "parmezan", "пармезан"),
        array("марлин", "marlin", "марлин"),
        array("тюрбо", "tyurbo", "тюрбо"),
        array("солнечник", "solnechnik", "солнечник"),
        array("убатк", "zubatka", "зубатка"),
        array("пагр", "pagr", "пагр"),
        array("калкан", "kalkan", "калкан"),
        array("пикш", "piksha", "пикша"),
        array("сайд", "sayda", "сайда"),
        array("муксун", "muksun", "муксун"),
        array("красн кревет", "krasnye-krevetki", "красные креветки"),
        array("ряпушк", "ryapushka", "ряпушка"),
        array("хек", "hek", "хек"),
        array("устрицы", "svezhie-ustricy", "свежие устрицы"),
        array("лисичк", "lisichki", "лисички")
        #array("свежеморож", "svezhemorozhenaya-ryba", "свежемороженная рыба"),
    );
    return $arr;
}



function set_tags($inp){


    $arr = links();
    $arr_n = array();
    $links_n = links_n();
    //$b = "";
    $b_arr = array();

    foreach($links_n as $l){
        array_push($arr_n, array($l[2], $l[0], $l[2]));
    }


    // для какой-то цели убран массив arr_n
    //$arr_all = array_merge($arr, $arr_n);  // совместить массивы links и links_n
    $arr_all = $arr;
    $inp = " " . mb_strtolower($inp); // to determine if first letter


    foreach($arr_all as $a){

        $arr_str = explode(' ', $a[0]);


        $z = 0;
        $sovpalo = array();

        foreach($arr_str as $z => $slovo_v_linke){

            if (strpos($inp, strtolower($slovo_v_linke)) > 0) {
                $sovpalo[$z] = "yes";
                $z++;

            } else {
                $sovpalo[$z] = "no";
            }

        }




        if (!in_array("no", $sovpalo)) {
            $b_arr[] = "<a class=\"tager\" href=\"/catalog/" . $a[1] . "/\">" . $a[2] . "</a>";
        }


    }




    return array_unique($b_arr);
}


/**
 * @param $src
 * @param $w
 * @param $h
 * @return string
 * сохраняет изображение требуемого размера в папку /images/products/cache с указанием
 * размеров в имени файла, в последующем его использует
 */
function resi($src,$w,$h) /** не работает в списке каталога товар Хит */
{
    $im_array = explode('/', str_replace('//shop.lamaree.ru','',$src));

    $folder = "/" . $im_array[1] . "/" . $im_array[2] . "/cache/";
    $file = end($im_array);
    $root_path = "/home/d/dlmlru/shop_beta/public_html";


    $size1 = filesize($root_path . $folder . 'N_' . $w . "x" . $h . "_" . $file);
    $size2 = filesize($root_path . $src);



    if(is_file( $root_path . $folder . 'N_' . $w . "x" . $h . "_" . $file) == false
    || $size1 == $size2) {

        //$inFile = $root_path . "/" . $im_array[1] . "/" . $im_array[2] . "/" . $src;
        ///home/d/dlmlru/shop_beta/public_html(/images/products//images/products)/zhir-utinyj-rossiya-s-m-utkino1_b1.jpg


        $inFile = $root_path . $src;



        $outFile = $folder . 'N_' . $w . "x" . $h . "_" . $file;
        if(is_file($inFile)) {
            $image = new Imagick($inFile);
            $image->thumbnailImage($w, $h);
            $image->writeImage($root_path . $outFile);
        }
        else{
            $fp = fopen('/home/d/dlmlru/shop_beta/public_html/cms/plugins/own/pl_import/prog/import_prog.log', 'a+');
            fwrite($fp, $inFile . " in File in sbFunctions.inc.php on line " . __LINE__ . "\n");
            fclose($fp);
        }
        return $folder . 'N_' . $w . "x" . $h . "_" . $file;
    }else{
        return $folder . 'N_' . $w . "x" . $h . "_" . $file;
    }
}


function besi($src,$w,$h)
{

    $root_path = "/home/d/dlmlru/shop_beta/public_html";

    if(is_file($root_path . $src)) {

        $im_array = explode('/', $src);
        $a = array_slice($im_array, -3, 1);
        $b = array_slice($im_array, -2, 1);
        $folder = "/" . $a[0] . "/" . $b[0] . "/cache/";
        $file = end($im_array);


        $date_source_file = date ("d-F-Y H-i-s", filemtime($root_path . $src));
        $date_croped_file = date ("d-F-Y H-i-s", filemtime($root_path . $folder . 'N_' . $w . "x" . $h . "_" . $file));


        /*if (!is_file($root_path . $folder . 'N_' . $w . "x" . $h . "_" . $file)) {
            $inFile = $root_path . "/" . $a[0] . "/" . $b[0] . "/" . $file;
            $outFile = $folder . 'N_' . $w . "x" . $h . "_" . $file;
            #return $inFile;
            #exit();
            $image = new Imagick($inFile);
            $image->thumbnailImage($w, $h);
            $image->writeImage($root_path . $outFile);
            return $folder . 'N_' . $w . "x" . $h . "_" . $file;
        } else {
            return $folder . 'N_' . $w . "x" . $h . "_" . $file ;
        }*/


        /*$len = $image->getImageLength();*/


        if (is_file($root_path . $folder . 'N_' . $w . "x" . $h . "_" . $file)) {
            return $folder . 'N_' . $w . "x" . $h . "_" . $file ;
        }
        else{
            $inFile = $root_path . "/" . $a[0] . "/" . $b[0] . "/" . $file;
            $outFile = $folder . 'N_' . $w . "x" . $h . "_" . $file;
            #return $inFile;
            #exit();
            $image = new Imagick($inFile);
            $image->thumbnailImage($w, $h);
            $image->writeImage($root_path . $outFile);
            return $folder . 'N_' . $w . "x" . $h . "_" . $file;
        }


    }
    else{
        return "/images/tpl/no_photo.png";
    }
}



/**
 * @param $src
 * @param $w
 * @param $h
 * @return string
 * сохраняет изображение требуемого размера С ДРУГИМ ИМЕНЕМ В ОТЛИЧИЕ ОТ resi, в последующем его использует
 * можно не использовать после изменений в resi, но сама функция используется в детальной карточке товара
 */
function big_resi($src,$w,$h)
{
    $im_array = explode('/', $src);
    $folder = "/" . $im_array[1] . "/" . $im_array[2] . "/";
    $file = end($im_array);
    $root_path = "/home/d/dlmlru/shop_beta/public_html";

    if(!is_file( $root_path . "/images/products/" . 'Big_'. $file)) {
        $inFile = $root_path . $src;
        $outFile = $folder . 'Big_' . $file;
        $image = new Imagick($inFile);
        $image->thumbnailImage($w, $h);
        $image->writeImage($root_path . $outFile);
        return $folder . 'Big_' . $file;
    }else{
        return $folder . 'Big_' . $file;
    }
}


# example <img src="echo resi('/images/products/DSC08794_КМГ613_1600.jpg', 200, 133);" width="200"/>




//find item category. ID of item

function find_cat($id) {
    global $dbc;
    $query2 = "SELECT link_cat_id FROM sb_catlinks WHERE link_el_id = '$id'";
    $data2 = mysqli_query($dbc, $query2);
    $cat_id = array();
    if (mysqli_num_rows($data2) > 1) {
        while ($row2 = mysqli_fetch_array($data2)) {
            if ($row2['link_cat_id'] != '1520' && $row2['link_cat_id'] != '1534') {
                $cat_id[] = $row2['link_cat_id'];
            }
        }
    }
    else {
        $row2 = mysqli_fetch_array($data2);
        $cat_id[] = $row2['link_cat_id'];
    }

    $cat_line = implode(',', $cat_id);
    $query3 = "SELECT cat_url, cat_title FROM sb_categs WHERE cat_id IN ( $cat_line )";
    $data3 = mysqli_query($dbc, $query3);
    $line = "";
    while ($row3 = mysqli_fetch_array($data3)) {
        if(strpos($line, $row3['cat_url']) == false) {
            $line .= "<a class=\"cat-tag\" href=\"".$row3['cat_url']."\">".$row3['cat_name']."</a>";
        }
    }
    return $line;
}



// find item category code by ID of item

function find_cat_code($id) {

    $line = array();
    $cat_id = array();
    $data2 = sql_query("SELECT link_cat_id FROM sb_catlinks WHERE link_el_id = ?d", $id);



    foreach ($data2 as $d){
        $cat_id[] = $d[0];
    }


    $data3 = sql_query("SELECT cat_url, cat_title, cat_left, cat_right, cat_level FROM sb_categs WHERE cat_id IN ( ?s ) AND cat_ident = ?s", implode(',', $cat_id), 'pl_plugin_1');


    $data4 = sql_query("SELECT cat_url, cat_title FROM sb_categs WHERE cat_left < ?d AND cat_right > ?d AND cat_ident = ?s AND cat_level = ?d", $data3[0][2], $data3[0][3], 'pl_plugin_1', ((int)$data3[0][4] - 1));

    foreach ($data4 as $dd){
        $line[] = $dd[0];
    }

    return $line;
}



function full_item_path($sb_id, $item_chpu) {
    //get chpu of category

    global $dbc;

    $query2 = "SELECT link_cat_id FROM sb_catlinks WHERE link_el_id = '$sb_id'";
    $data2 = mysqli_query($dbc, $query2);
    if (mysqli_num_rows($data2) > 1) {
        while ($row2 = mysqli_fetch_array($data2)) {
            if ($row2['link_cat_id'] != '1520' && $row2['link_cat_id'] != '1534') {
                $cat_id = $row2['link_cat_id'];
            }
        }
    } else {
        $row2 = mysqli_fetch_array($data2);
        $cat_id = $row2['link_cat_id'];
    }

    $query3 = "SELECT cat_url, cat_title FROM sb_categs WHERE cat_id = '$cat_id'";
    $data3 = mysqli_query($dbc, $query3);
    $row3 = mysqli_fetch_array($data3);
    $cat_chpu = $row3['cat_url'];


    return $cat_chpu . "/" . $item_chpu;
}


# getGood usage:
# strictly commas, spaces and quotes usage
# echo getGood("РРО093,МР296,СС093")
# and if one item - echo getGood("РРО093")

function getGood($artikul){

    global $dbc;
    $data = 0;

    if($artikul) {
        $artLine = str_replace(",", "','", $artikul);
        $query = "SELECT * FROM sb_plugins_1 WHERE user_f_55 IN('" . $artLine . "') AND p_active = 1";

        $data = mysqli_query($dbc, $query);
    }

    $line = "";

    if(mysqli_num_rows($data) > 0) {
        $i = 0;

        $line .= "<div class='paste_wrap'>";

        while ($row = mysqli_fetch_array($data)) {

            $sb_id = $row["p_id"]; // sb id
            $c_id = $row['p_title']; //1c id
            $item_chpu = $row['p_url'];  //chpu
            $price = $row['p_price1']; //price
            $price2 = $row['p_price2']; //price2
            $name = $row['user_f_2'];  //name
            $image = $row['user_f_19'];  //image
            $articul = $row['user_f_55']; // артикул
            $sell_unit = $row['user_f_3'];
            $hit = $row['user_f_14'];
            switch ($sell_unit) {
                case 1:
                    $sell_unit = 'кг';
                    break;
                case 2:
                    $sell_unit = 'шт';
                    break;
                case 270:
                    $sell_unit = 'упак';
                    break;

            }


            //get chpu of category
            $query2 = "SELECT link_cat_id FROM sb_catlinks WHERE link_el_id = '$sb_id'";
            $data2 = mysqli_query($dbc, $query2);
            if (mysqli_num_rows($data2) > 1) {
                while ($row2 = mysqli_fetch_array($data2)) {
                    if ($row2['link_cat_id'] != '1520' && $row2['link_cat_id'] != '1534') {
                        $cat_id = $row2['link_cat_id'];
                    }
                }
            } else {
                $row2 = mysqli_fetch_array($data2);
                $cat_id = $row2['link_cat_id'];
            }

            $query3 = "SELECT cat_url, cat_title FROM sb_categs WHERE cat_id = '$cat_id'";
            $data3 = mysqli_query($dbc, $query3);
            $row3 = mysqli_fetch_array($data3);
            $cat_chpu = $row3['cat_url'];
            $cat_title = $row3['cat_title'];






            $full_chpu = '/catalog/full/' . $cat_chpu . '/' . $item_chpu . '/';

            $line .= '
<script>
function send_detail_click_'.$sb_id.'(){
    gtag(\'event\', \'view_item\', {
        "items": [
            {
                "id": "'.$articul.'",
                "name": "'.$name.'",
                "list_name": "News View",
                "brand": "La Maree",
                "category": "'.$cat_title.'",
                "variant": "'.$_SERVER['REQUEST_URI'].'",
                "list_position": 1,
                "quantity": 1,
                "price": '.$price.'
            }
        ]
    });
}

function send_add_to_basket_'.$sb_id.'(){
    gtag(\'event\', \'add_to_cart\', {
        "items": [
            {
                "id": "'.$articul.'",
                "name": "'.$name.'",
                "list_name": "News Add to Basket",
                "brand": "La Maree",
                "category": "'.$cat_title.'",
                "variant": "'.$_SERVER['REQUEST_URI'].'",
                "list_position": 1,
                "quantity": 1,
                "price": '.$price.'
            }
        ]
    });
add_rating('.$sb_id.');
}
</script>            
<div class="catalog-item" data-artikul="'.$articul.'" data-title="'.htmlentities($name).'" data-price="'.$price.'">
    <div class="catalog-item-actions">
    </div>
    <a href="'.$full_chpu.'" onclick="send_detail_click_'.$sb_id.'()">
        <div class="catalog-item-container" data-artikul="'.$articul.'">
            <div class="item-img-container"><img class="catalog-item-img" src="'.besi($image,248,165).'" alt="'.$name.'"></div>
            <span class="catalog-item-name">'.$name.'</span>
<span class="catalog-item-price"><span class="price-num">'.$price.'</span> руб./'.$sell_unit.'.</span>


<!--div class="catalog-item-btns">
    <div class="catalog-item-add-to-basket btn-blue" id="id_'.$sb_id.'" onclick="send_add_to_basket_'.$sb_id.'()">в корзину</div><div class="add-to-favorites" id="fav_'.$sb_id.'">
        <svg class="icon-heart">
            <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="#icon-heart"></use>
        </svg>
    </div>
</div-->
';

            if(mob_detect()){
                $line .= '<div class="catalog-item-btns">
                        <button id="minus_' . $sb_id . '">–</button>
                        <input type="text" id="quan_' . $sb_id . '" value="1" size="2">
                        <button id="plus_' . $sb_id . '">+</button>
                    <span class="catalog-item-add-to-basket btn-blue" data-quan="1" id="id_' . $sb_id . '" onclick="send_add_to_basket_' . $sb_id . '(); yaCounter17166961.reachGoal(\'vkorziny\'); return true;">купить</span></div>';
            }
            else {

                $line .= '<div class="catalog-item-btns">
                        <div class="catalog-item-add-to-basket btn-blue" data-quan="1" id="id_' . $sb_id . '" onclick="send_add_to_basket_' . $sb_id . '()">в корзину</div><div class="add-to-favorites" id="fav_' . $sb_id . '">
                            <svg class="icon-heart">
                                <use xlink:href="#icon-heart"></use>
                            </svg>
                        </div>
                    </div>';

            }


$line .= '
</div>
</a>
<script type="application/ld+json">
    {
        "@context" : "https://schema.org",
        "@type" : "Product",
        "name" : "' . str_replace("\\", "/", $name) . '",
        "image" : "https://shop.lamaree.ru'.$image.'",
        "offers" : {
        "@type" : "Offer",
        "price" : "'.$price.'",
        "url" : "https://shop.lamaree.ru'.$full_chpu.'",
        "priceCurrency" : "руб",
        "availability" : "http://schema.org/InStock"
        },
        "description" : "'.$cat_title.'" 
    }
</script>
<script>
    gtag("event", "view_item_list", {
        "items": [
            {
                "id": "'.$c_id.'",
                "name": "'.$name.'",
                "list": "News List View",
                "brand": "La Maree",
                "category": "'.$cat_title.'",
                "variant": "'.$_SERVER['REQUEST_URI'].'",
                "list_position": 1,
                "quantity": 1,
                "price": '.$price.'
            }
        ]
    });
</script>
</div>
';
        $i++;
        }

        $line .= "</div><div style=\"clear:both;float:none\"></div>";

    }
    else {
        $line .= "";
    }

    return $line;

}


/**
 * для отображения названия в мобильной карточке товара
 * если есть старая цена, то обрезка подругому
 */
function crop_name($input, $old_price)
{
    $line = "";
    $crop = "";

    if (!$old_price) {
        $long = 80;
    } else {
        $long = 40;
    }


    if (isset($input)) {
        $words_array = explode(" ", $input);

        if (strlen($input) > $long) {
            foreach ($words_array as $i => $word) {
                $line .= $word . " ";

                if (strlen(trim((string)$line)) > $long / 2) {
                    $sliced = array_slice($words_array, 0, $i + 2);
                    $crop = implode(" ", $sliced) . "&hellip;";
                    break;
                }

            }
        } else {
            $crop = $input;
        }
    }

    return $crop;
}



/**
 * для отображения description в карточке товара
 * внутри используется функция get_main_cat_id
 * из этого же файла
 */
function crop_description($id, $input)
{

    if(!$input)
        $input = 0;

    $str = "";

    if (strlen($input) > 120) {

        $pos = 160;
        $crop = $input;
        if (strlen($crop) > 160) {
            $pos = strpos($input, ".", 120) + 1;
        }
        $crop = substr($input, 0, $pos);

    } else {



        $res = sql_query("SELECT user_f_50 FROM sb_plugins_1 WHERE p_id = $id");


        if (strlen($res[0][0]) > 120) {

            $pos = 160;
            $crop = strip_tags($res[0][0]);
            if (strlen($crop) > 160) {
                $pos = strpos($crop, ".", 120) + 1;
            }
            $crop = substr($crop, 0, $pos);
        }
    }


    return trim($crop);

}


/* определение мобильного */
function mob_detect() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


# по готовности вставить в /shop_beta/public_html/cms/plugins/pl_basket/prog/pl_basket.php
/*function send_letter_if_basket(){

    if(isset($_SESSION['sbAuth'])){
        $su_email = trim($_SESSION['sbAuth']->getUserEmail());
        $r = $su_email;
    }
    else {
        $r = preg_replace('/[^A-Za-z0-9]+/', '', $_COOKIE['pl_basket_user_id']);
    }
    return $r;
}*/

/*
 * <div class="ff" style="display:none">
<?= send_letter_if_basket()?>
</div>
*/



function return_recipe($name, $kount){
    if(!$kount)
        $kount = 0;

    $res = "";
    $j = 0;
    $okonch = array("ая", "ый", "ое", "ые", "ого", "ой", "ых", "ль",
        "ок", "ка", "ами", "ный", "ная", "ное", "ную", "ки", "ом", "я");
    $name_exploded = explode(" ", $name);

    foreach ($name_exploded as $i=>$name_s_okonchaniem){

        if(strlen($name_s_okonchaniem) > 1) {

            $name = str_replace($okonch, "", $name_s_okonchaniem);
            #$name = $name_s_okonchaniem;



            $get = sql_query('SELECT c.cat_url,
                          n.n_id, n.n_title, n.n_date, n.n_short, n.n_short_foto, n.n_full, n.n_full_foto, n.n_url,
                          n.n_user_id, n.n_pub_start, n.n_pub_end
                          
                          FROM sb_news n, sb_categs c, sb_catlinks l
                          
                          WHERE n.n_title LIKE "'.$name.'%"
                          AND l.link_el_id=n.n_id 
                          AND c.cat_id=l.link_cat_id 
                          AND c.cat_url NOT LIKE ""
                          AND c.cat_level = 2
                          AND c.cat_rubrik = 1');






            foreach ($get as $g):

                if (strlen($get[0][0]) > 1 && $get[0] != $get[1] && strlen($name) > 4) {

                    if ($j < 4) {


                        $res .= "<div id='r_wrap_$j' data-name='" . $name . "' class='recipeItemWrap'>";
                        if ($g[2]) {
                            $res .= "<div class=\"recipeImage\"><a href='/news/detail/" . $g[0] . "/" . $g[8] . "/'><img src=\"" . $g[5] . "\" alt=\"" . $g[2] . "\"/></a></div>";
                        }
                        $res .= "<div class='recipeName'><a target='_blank' href='/news/detail/" . $g[0] . "/" . $g[8] . "/' class='recipeHref'><b>" . $g[2] . "</b></a></div>";
                        $res .= "</div>";


                        $j++;


                    }

                }

            endforeach;


        }
    }
    if($kount > 0)
        return $j;
    else
        return $res;
}



/**
 * Функция возвращает изображение и код CAPTCHA
 *
 * Вызывает класс sbCaptcha.
 *
 * @see sbCaptcha
 * @return array Массив с ссылкой на изображение и кодом CAPTCHA или FALSE в случае ошибки.
 */
function sbProgGetTuring ()
{
	// запрещаем кэширование у модуля, если используется капча
	$GLOBALS['sbCache']->mCacheOff = true;

    require_once(SB_CMS_LIB_PATH.'/prog/sbCaptcha.inc.php');
    $time = sbCaptcha::getCode();

    return array('/cms/admin/captcha.php?turing_id='.$time, $time);
}

/**
 * Функция проверяет указанный код CAPTCHA
 *
 * @param string $value_field Имя поля, содержащего код CAPTCHA.
 * @param string $hash_field Имя поля, содержащего хэш CAPTCHA.
 *
 * @return bool TRUE, если код верный, FALSE в ином случае.
 */
function sbProgCheckTuring ($value_field, $hash_field)
{
    if (isset($_POST[$value_field]) && isset($_POST[$hash_field]) && trim($_POST[$hash_field]) != '' && isset($_SESSION['sb_captcha']))
	{
		$hash = preg_replace('/[^A-Za-z0-9]+/', '', $_POST[$hash_field]);
	    if(isset($_SESSION['sb_captcha'][$hash]) && $_SESSION['sb_captcha'][$hash] == $_POST[$value_field])
	    {
	    	unset($_SESSION['sb_captcha'][$hash]);
	   		return true;
	    }
	}

	return false;
}

/**
 * Функция стартует сессию
 *
 */
function sbProgStartSession()
{
	if (!@session_id())
    {
    	sb_setcookie('sb_start_session', 1);
    	@session_name('SBPROGID');
        @session_start();
    }
}

/**
 * Добавление/редактирование элемента модуля и прописывание связей с разделами
 *
 * Данная функция не проверяет права доступа пользователя к разделу.
 *
 * @param string $table_name Имя таблицы БД, в которую добавляется элемент.
 * @param string $id_name Имя поля, содержащего уникальный идентифкатор элемента.
 * @param array $row Ассоциативный массив со значениями полей элемента (ключи - имена полей, значения - значения полей).
 * @param array $cat_ids Массив идентификаторов разделов, с которыми необходимо прописать связь элемента.
 * @param int $edit_id Идентификатор редактируемого элемента, если < 1 - элемент добавляется.
 * @param int $now_cat Раздел, в котором располагается редактируемый элемент.
 *
 * @return mixed Идентификатор добавленного элемента, FALSE в случае ошибки.
 */
function sbProgAddElement($table_name, $id_name, $row, $cat_ids, $edit_id = -1, $now_cat = 0)
{
	if ($edit_id == -1 && (!is_array($cat_ids) || !isset($cat_ids[0])))
	{
	    return false;
	}

	if($edit_id > 0)
	{
		$res = sql_query('SELECT cat_ident FROM sb_categs WHERE cat_id=?d', $now_cat);
		if ($res)
		{
			list($cat_ident) = $res[0];
		}
		else
		{
			return false;
		}

		//Редактирую элемент
		$res = sql_query('UPDATE ?# SET ?a WHERE ?#=?d', $table_name, $row, $id_name, $edit_id);

		if(!$res)
		{
			return false;
		}

		sql_query('INSERT INTO sb_catchanges (el_id, cat_ident, change_date, change_user_id, action) VALUES (?d, ?, ?d, 0, ?)', $edit_id, $cat_ident, time(), 'edit');

		if (is_array($cat_ids))
		{
			if (count($cat_ids) == 1 && in_array($now_cat, $cat_ids))
			{
				return $edit_id;
			}

			// Узнаю в каком разделе физически находится элемент
			$res = sql_query('SELECT c.cat_id FROM sb_catlinks l, sb_categs c WHERE c.cat_ident=? AND l.link_el_id = ?d AND l.link_cat_id = c.cat_id AND l.link_src_cat_id = 0', $cat_ident, $edit_id);
			if($res && $res[0][0] != '')
			{
				$fiz_cat_id = $res[0][0];
		    }
			else
			{
			    return false;
			}

			if (count($cat_ids) == 1 && in_array($fiz_cat_id, $cat_ids))
			{
				return $edit_id;
			}

		    // Удаляем связи со старыми разделами
		    sql_query('DELETE FROM sb_catlinks WHERE link_el_id = ?d AND (link_cat_id = ?d OR link_src_cat_id = ?d)', $edit_id, $fiz_cat_id, $fiz_cat_id);

			// Ставим связи с новыми разделами
			$root_id = -1;
	    	foreach($cat_ids as $cat_id)
	    	{
	    		if ($root_id == -1)
	    		{
		    		sql_query('INSERT INTO sb_catlinks (link_cat_id, link_el_id, link_src_cat_id) VALUES (?d, ?d, 0)', $cat_id, $edit_id);
	    			$root_id = $cat_id;
			    }
			    else
			    {
			    	sql_query('INSERT INTO sb_catlinks (link_cat_id, link_el_id, link_src_cat_id) VALUES (?d, ?d, ?d)', $cat_id, $edit_id, $root_id);
			    }
	    	}
		}

		return $edit_id;
	}
	else
	{
		$res = sql_query('SELECT cat_ident FROM sb_categs WHERE cat_id=?d', $cat_ids[0]);
		if ($res)
		{
			list($cat_ident) = $res[0];
		}
		else
		{
			return false;
		}

		if (sql_query('INSERT INTO ?# (?#) VALUES (?a)', $table_name, array_keys($row), array_values($row)))
	    {
	    	$id = sql_insert_id();

	    	$root_id = -1;

	    	foreach($cat_ids as $cat_id)
	    	{
	    		if ($root_id == -1)
	    		{
		    		if (sql_query('INSERT INTO sb_catlinks (link_cat_id, link_el_id, link_src_cat_id) VALUES (?d, ?d, 0)', $cat_id, $id))
		    		{
		    			sql_query('INSERT INTO sb_catchanges (el_id, cat_ident, change_date, change_user_id, action) VALUES (?d, ?, ?d, 0, ?)', $id, $cat_ident, time(), 'add');
		    			$root_id = $cat_id;
		    		}
			    }
			    else
			    {
			    	sql_query('INSERT INTO sb_catlinks (link_cat_id, link_el_id, link_src_cat_id) VALUES (?d, ?d, ?d)', $cat_id, $id, $root_id);
			    }
	    	}

	    	if ($root_id != -1)
	    	{
	        	return $id;
	    	}
	    	else
	    	{
	    	    sql_param_query('DELETE FROM ?# WHERE ?#=?d', $table_name, $id_name, $id);
	    	}
	    }
	}

    return false;
}

/**
 * Удаление элемента модуля и удаление связей с разделами
 *
 * Данная функция не проверяет права доступа пользователя к разделу.
 *
 * @param string $table_name Имя таблицы БД, из которой удаляется элемент.
 * @param string $id_name Имя поля, содержащего уникальный идентифкатор элемента.
 * @param array $id_value Значение уникального идентификатора элемента.
 * @param array $cat_ident Идентификатор разделов модуля.
 *
 * @return bool TRUE в случае успеха, FALSE в случае ошибки.
 */
function sbProgDeleteElement($table_name, $id_name, $id_value, $cat_ident)
{
	$res = sql_query('SELECT l.`link_id` FROM `sb_catlinks` AS l, `sb_categs` AS c, ?# AS p
						WHERE c.`cat_ident`=? AND l.`link_cat_id`=c.`cat_id` AND l.`link_el_id`=?d',
						$table_name, $cat_ident, $id_value);
	if (!$res)
	{
		return false;
	}

	$link_ids = array();
	foreach ($res as $value)
	{
		$link_ids[] = $value[0];
	}

	if (!sql_query('DELETE FROM ?# WHERE ?#=?d', $table_name, $id_name, $id_value))
	{
		return false;
	}

	sql_query('DELETE FROM sb_catlinks WHERE link_id IN (?a)', $link_ids);
	sql_query('DELETE FROM sb_catchanges WHERE cat_ident=? AND el_id=?d', $cat_ident, $id_value);

	return true;
}

/**
 * Парсинг BB-кодов в строке.
 *
 * @param string $str Строка, в которой необходимо произвести парсинг.
 * @param string $quote_open Макет для замены кода [quote].
 * @param string $quote_close Макет для замены кода [/quote].
 * @param bool $clear_quotes Вырезать цитаты.
 *
 * @return string Распарсенная строка.
 */
function sbProgParseBBCodes($str, $quote_open = '<div style="border: 1px solid red; border-style: dashed; margin-left: 30px;">Автор: {AUTHOR}, дата: {DATE}', $quote_close = '</div>', $clear_quotes = false)
{
	require_once(SB_CMS_LIB_PATH.'/prog/sbBBCode.inc.php');

	sbBBCodeTags_Quote::set_quote_open($quote_open);
	sbBBCodeTags_Quote::set_quote_close($quote_close);
	sbBBCodeTags_Quote::set_clear_quotes($clear_quotes);

	$str = str_replace('&quot;', '"', $str);
	$bb = new sbBBCode($str);

	return $bb->get_html();
}

/**
 * Возвращает массив для ссылки "подробнее..."
 *
 * Первый элемент массива - URL страницы, второй - расширение файла.
 *
 * @param string $params_page URL страницы.
 * @return array Первый элемент массива - URL страницы, второй - расширение файла.
 */
function sbGetMorePage($params_page)
{
	if (trim($params_page) == '')
	{
		$params_page = $_SERVER['PHP_SELF'];
	}

	if (sb_stripos($params_page, 'http:') !== 0 && sb_stripos($params_page, 'https:') !== 0 && sb_stripos($params_page, '/') !== 0 && sb_stripos($params_page, '\\') !== 0)
	{
		$params_page = '/'.$params_page;
	}

    $more_ar = @parse_url($params_page);
    if (!$more_ar)
    {
    	return array('', '');
    }

    $path = isset($more_ar['path']) ? $more_ar['path'] : '';
	$page = '';

    if ($path != '')
    {
		$path = explode('/', str_replace('\\', '/', $path));
        if (sb_strpos($path[count($path) - 1], '.') !== false)
        {
            $page = array_pop($path);
        }
    }

    if (sbPlugins::getSetting('sb_static_urls') != 1)
    {
    	if ($page == '')
    	{
    		if (sb_substr($params_page, -1) != '/')
                $params_page .= '/';
    	}

    	return array($params_page, '');
    }

	$index_page = sbPlugins::getSetting('sb_directory_index');
	if (trim($index_page) == '')
	{
		$index_page = 'index.php';
	}

	$more_ext = '';

	if ($page == $index_page)
    {
        $params_page = sb_str_replace($page, '', $params_page);
        if (sb_substr($params_page, -1) != '/')
            $params_page .= '/';

        $ext_pos = sb_strrpos($page, '.');
    	if ($ext_pos !== false)
	    	$more_ext = sb_substr($page, $ext_pos + 1);
	    else
	    	$more_ext = 'php';

        return array($params_page, $more_ext);
    }

    $ext_pos = sb_strrpos($page, '.');
    if ($ext_pos !== false)
    {
		$more_ext = sb_substr($page, $ext_pos + 1);
		$ext_pos = sb_strrpos($params_page, '.');
		$params_page = sb_substr($params_page, 0, $ext_pos);
	}
	else
	{
		$more_ext = 'php';
	}

	if (sb_substr($params_page, -1) != '/')
		$params_page .= '/';

    return array($params_page, $more_ext);
}

/**
 * Возвращает SQL-запроса для поиска по текстовым полям.
 *
 * @param string $field_name Имя поля и префикс таблицы БД.
 * @param string $get_name Имя REQUEST-параметра.
 * @param string $filter_compare Искать по вхождению или по полному совпадению.
 * @param string $filter_logic Логика фильтра.
 * @param string $filter_text_logic Логика поиска слов в фразе.
 * @param object $morph_db Использовать морфологию или нет.
 *
 * @return string SQL-запрос для поиска по текстовым полям.
 */
function sbGetFilterTextSql($field_name, $get_name, $filter_compare, $filter_logic, $filter_text_logic, &$morph_db)
{
	$filter_sql = '';
	if (!isset($_REQUEST[$get_name]) || trim($_REQUEST[$get_name]) == '')
	{
		return $filter_sql;
	}

	$_REQUEST[$get_name] = sb_html_entity_decode($_REQUEST[$get_name]);

	if ($filter_compare == 'IN')
    {
		$words = explode(' ', trim($_REQUEST[$get_name]));
	    $filter_sql .= '(';
	    foreach ($words as $word)
	    {
	      	if ($morph_db)
	        {
	        	$morph_words = $morph_db->get_all_forms($word);
	            if (count($morph_words) > 0)
	            {
	            	$filter_sql .= '(';
	            	foreach ($morph_words as $word)
		            {
		            	$filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' LIKE '.$GLOBALS['sbSql']->escape('%'.$word.'%').' OR ';
		            }

		            $filter_sql = sb_substr($filter_sql, 0, -4).') '.$filter_text_logic.' ';
	            }
	            else
	            {
	            	$filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' LIKE '.$GLOBALS['sbSql']->escape('%'.$word.'%').' '.$filter_text_logic.' ';
	            }
	        }
	        else
	        {
	           	$filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' LIKE '.$GLOBALS['sbSql']->escape('%'.$word.'%').' '.$filter_text_logic.' ';
	        }
	    }

	    $filter_sql = sb_substr($filter_sql, 0, -(2 + strlen($filter_text_logic))).') '.$filter_logic.' ';
    }
   	else
  	{
		$filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' = '.$GLOBALS['sbSql']->escape($_REQUEST[$get_name]).' '.$filter_logic.' ';
	}

	return $filter_sql;
}

/**
 * Возвращает SQL-запрос для точного поиска (на равенство) по полям.
 *
 * @param string $field_name Имя поля и префикс таблицы БД.
 * @param string $get_name Имя REQUEST-параметра.
 * @param string $filter_logic Логика фильтра.
 *
 * @return string SQL-запрос для точного поиска (на равенство) по полям.
 */
function sbGetFilterSql($field_name, $get_name, $filter_logic)
{
	$filter_sql = '';
	if (!isset($_REQUEST[$get_name]) || trim($_REQUEST[$get_name]) == '')
	{
		return $filter_sql;
	}

	$filter_sql = $GLOBALS['sbSql']->escape($field_name, true, false)." = '".intval($_REQUEST[$get_name])."' ".$filter_logic.' ';

	return $filter_sql;
}

/**
 * Возвращает SQL-запрос для поиска по полям типа "Число" или "Дата".
 *
 * @param string $field_name Имя поля и префикс таблицы БД.
 * @param string $get_name Имя REQUEST-параметра.
 * @param string $filter_logic Логика фильтра.
 * @param bool $date Тип поля "Число" (FALSE) или "Дата" (TRUE).
 * @param string $date_temp Формат ввода даты.
 *
 * @return string SQL-запрос для поиска по полям типа "Число" или "Дата".
 */
function sbGetFilterNumberSql($field_name, $get_name, $filter_logic, $date = false, $date_temp = '')
{
	$filter_sql = '';

	if (isset($_REQUEST[$get_name]) && trim($_REQUEST[$get_name]) != '')
	{
		$val = explode(',', $_REQUEST[$get_name]);
		if (count($val) == 1)
		{
			if ($date)
			{
				return $GLOBALS['sbSql']->escape($field_name, true, false).' = "'.sb_datetoint($_REQUEST[$get_name], $date_temp).'" AND ';
			}
			else
			{
				return $GLOBALS['sbSql']->escape($field_name, true, false).' = "'.floatval($_REQUEST[$get_name]).'" AND ';
			}
		}
		else
		{
		    //TODO может не отработать на float полях
		    if($date)
            {
                $sql = '(';
                
                foreach ($val as $value)
                {
                    $sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' = "'.sb_datetoint(trim($value), $date_temp).'" OR ';
                }
                
                return sb_substr($sql, 0, -4).') AND ';
            }
            else
            {
                $data = array();
                foreach ($val as $value)
                {
                    $data[] = intval(trim($value));
                }
                $sql = '('.$GLOBALS['sbSql']->escape($field_name, true, false).' IN ('.implode(',', $data).')) AND ';
                
                return $sql;
                //$sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' = "'.floatval(trim($value)).'" OR ';
            }
		}
	}

	$is_low = (isset($_REQUEST[$get_name.'_lo']) && trim($_REQUEST[$get_name.'_lo']) != '');
    $is_high = (isset($_REQUEST[$get_name.'_hi']) && trim($_REQUEST[$get_name.'_hi']) != '');
    if ($is_low || $is_high)
    {
    	$filter_sql .= '(';
    	if ($is_low)
        {
            if ($date)
            {
                $filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' >= "'.sb_datetoint($_REQUEST[$get_name.'_lo'], $date_temp).'" AND ';
            }
            else
            {
                $filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' >= "'.floatval($_REQUEST[$get_name.'_lo']).'" AND ';
            }
        }

        if ($is_high)
        {
            if ($date)
            {
                $filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' <= "'.sb_datetoint($_REQUEST[$get_name.'_hi'], $date_temp).'" AND ';
            }
            else
            {
                $filter_sql .= $GLOBALS['sbSql']->escape($field_name, true, false).' <= "'.floatval($_REQUEST[$get_name.'_hi']).'" AND ';
            }
        }

        $filter_sql = sb_substr($filter_sql, 0, -5).') '.$filter_logic.' ';
    }

    return $filter_sql;
}

/**
 * Возвращает SQL-запрос для фильтрации каталога по идентификаторам товара.
 *
 * string $field_name Имя поля и префикс таблицы БД.
 * string $cookie_name Имя COOKIE-параметра
 * int $plugin_id Идентификатор модуля конструктора модулей для которого применяется фильтр
 */
function sbGetFilterCookieSql($field_name, $cookie_name, $plugin_id)
{
	$filter_sql = '-1';
	if(isset($_COOKIE[$cookie_name]))
	{
		foreach($_COOKIE[$cookie_name] as $key => $value)
		{
			$pl_id = explode('_', $key);
			if($pl_id[0] == $plugin_id)
			{
				$filter_sql .= ','.intval($value);
			}
		}
	}

	return ' AND '.$GLOBALS['sbSql']->escape($field_name, true, false).' IN ('.$filter_sql.')';
}

/**
 * Функция парсинга макета дизайна вывода разделов.
 *
 * @param array $cat_ids Массив идентификаторов выводимых разделов.
 * @param string $cat_ident Идентификатор принадлежности раздела к модулую.
 * @param array $sel_cat_ids Массив идентификаторов выбранных разделов.
 * @param string $option_temp Макет дизайна вывода опции.
 * @param string $select_temp Макет дизайна вывода списка.
 * @param string $closed_right Права доступа к закрытым разделам.
 *
 * @return string Распарсенный вывод разделов.
 */
function sbProgGetCategsList($cat_ids, $cat_ident, $sel_cat_ids, $option_temp, $select_temp, $closed_right)
{
	if (!is_array($sel_cat_ids))
		$sel_cat_ids = array();

	if(!is_array($cat_ids) || count($cat_ids) <= 0)
		return '';

	$res = sql_query('SELECT c.cat_id FROM sb_categs AS c, sb_categs AS c2
							WHERE c2.cat_left <= c.cat_left
							AND c2.cat_right >= c.cat_right
							AND c.cat_ident = ?
							AND c2.cat_ident = ?
							AND c2.cat_id IN (?a)
							ORDER BY c.cat_left', $cat_ident, $cat_ident, $cat_ids);

	if (!$res)
		return '';

	$cat_ids = array();
	foreach ($res as $value)
	{
		$cat_ids[] = $value[0];
	}

	// проверяем права на добавление
    $res = sql_query('SELECT cat_id FROM sb_categs WHERE cat_closed=1 AND cat_id IN (?a)', $cat_ids);
    if($res)
    {
      	$closed_ids = array();
        foreach($res as $value)
        {
            $closed_ids[] = $value[0];
        }

        $cat_ids = sbAuth::checkRights($closed_ids, $cat_ids, $closed_right);

        if(count($cat_ids) < 1)
        {
            return '';
        }
    }

    $res = sql_query('SELECT cat_id, cat_title, cat_level FROM sb_categs WHERE cat_id IN (?a) ORDER BY cat_left', $cat_ids);
	if (!$res)
		return '';

	$first_level = $res[0][2];
    $result = '';
	foreach($res as $value)
	{
	    list($cat_id, $cat_title, $cat_level) = $value;

	    if(in_array($cat_id, $sel_cat_ids))
	    	$selected_str = sb_stripos($option_temp, 'option') !== false ? ' selected="selected"' : ' checked="checked"';
	    else
	    	$selected_str = '';

	    $result .= str_replace(array('{OPT_TEXT}', '{OPT_VALUE}', '{OPT_SELECTED}'), array(str_repeat('&nbsp;', ($cat_level - $first_level) * 2).$cat_title, $cat_id, $selected_str), $option_temp);
	}

	return str_replace('{OPTIONS}', $result, $select_temp);
}

function sbProgCleanXSS($str, $replace = '<!-- sb-xss-removed -->')
{
	if ($replace == '')
		$replace = '<xss>';

	$str = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x19])/', '', $str);

	$search = '/&#[xX]0{0,8}(21|22|23|24|25|26|27|28|29|2a|2b|2d|2f|30|31|32|33|34|35|36|37|38|39|3a|3b|3d|3f|40|41|42|43|44|45|46|47|48|49|4a|4b|4c|4d|4e|4f|50|51|52|53|54|55|56|57|58|59|5a|5b|5c|5d|5e|5f|60|61|62|63|64|65|66|67|68|69|6a|6b|6c|6d|6e|6f|70|71|72|73|74|75|76|77|78|79|7a|7b|7c|7d|7e);?/ie';
	$str = preg_replace($search, "chr(hexdec('\\1'))", $str);
	$search = '/&#0{0,8}(33|34|35|36|37|38|39|40|41|42|43|45|47|48|49|50|51|52|53|54|55|56|57|58|59|61|63|64|65|66|67|68|69|70|71|72|73|74|75|76|77|78|79|80|81|82|83|84|85|86|87|88|89|90|91|92|93|94|95|96|97|98|99|100|101|102|103|104|105|106|107|108|109|110|111|112|113|114|115|116|117|118|119|120|121|122|123|124|125|126);?/ie';
	$str = preg_replace($search, "chr('\\1')", $str);

	$ra1 = array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base', 'onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
	$ra_tag = array('applet', 'meta', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');
	$ra_attribute = array('style', 'onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
	$ra_protocol = array('javascript', 'vbscript', 'expression');

	$str2 = preg_replace('/(&#[xX]?0{0,8}(9|10|13|a|b);)*\s*/i', '', $str);
	$ra = array();

	foreach ($ra1 as $ra1word)
	{
		if (stripos($str2, $ra1word) !== false )
		{
			if (in_array($ra1word, $ra_protocol))
			{
				$ra[] = array($ra1word, 'ra_protocol');
			}
			if (in_array($ra1word, $ra_tag))
			{
				$ra[] = array($ra1word, 'ra_tag');
			}
			if (in_array($ra1word, $ra_attribute))
			{
				$ra[] = array($ra1word, 'ra_attribute');
			}
		}
	}

	if (count($ra) > 0)
	{
		$found = true;
		while ($found == true)
		{
			$str_before = $str;
			for ($i = 0; $i < count($ra); $i++)
			{
				$pattern = '';
				for ($j = 0; $j < strlen($ra[$i][0]); $j++)
				{
					if ($j > 0)
					{
						$pattern .= '((&#[xX]0{0,8}([9ab]);)|(&#0{0,8}(9|10|13);)|\s)*';
					}
					$pattern .= $ra[$i][0][$j];
				}

				switch ($ra[$i][1])
				{
					case 'ra_protocol':
						$pattern .= '((&#[xX]0{0,8}([9ab]);)|(&#0{0,8}(9|10|13);)|\s)*(?=:)';
						break;
					case 'ra_tag':
						$pattern = '(?<=<)' . $pattern . '((&#[xX]0{0,8}([9ab]);)|(&#0{0,8}(9|10|13);)|\s)*(?=[^\da-z])';
						break;
					case 'ra_attribute':
						$pattern .= '[\s\!\#\$\%\&\(\)\*\~\+\-\_\.\,\:\;\?\@\[\/\|\\\\\]\^\`]*(?==)';
						break;
				}
				$pattern = '/' . $pattern . '/i';
				$replacement = substr_replace($ra[$i][0], $replace, 2, 0);

				$str = preg_replace($pattern, $replacement, $str);
				if ($str_before == $str)
				{
					$found = false;
				}
			}
		}
	}

	return $str;
}

/**
 * Добавляет пробелы спереди и в конце переданной строки
 *
 * Используется для вывода облака тегов.
 *
 * @param string $item Строка, к которой добавляются пробелы.
 */
function sbProgSpacer(&$item)
{
	$item = ' '.$item.' ';
}

/**
 * Добавляет клики к баннеру.
 *
 */
function sbProgBannerClick()
{
	$robot = sbIsSearchRobot();
	if($robot)
    {
		return;
	}

	if (isset($_GET['bid']) && $_GET['bid'] != '')
	{
		$res = sql_query('SELECT sb_id, sb_link, sb_statistics FROM sb_banners WHERE sb_id = ?d', $_GET['bid']);
		if($res)
		{
			list($sb_id, $sb_link, $sb_statistics) = $res[0];

			if ($sb_statistics == 1)
			{
				$today = time();
				$year = sb_date('Y', $today);
				$month = sb_date('n', $today);
				$day = sb_date('j', $today);

				sql_query('UPDATE sb_banners_statistics SET sb_count_clicks = sb_count_clicks + 1 WHERE sb_bid=?d AND sb_year = ?d AND sb_month = ?d AND sb_day = ?d', $sb_id, $year, $month, $day);
			}
		}
	}

	if(isset($sb_link) && trim($sb_link) != '')
	{
		header('Location: '.sb_sanitize_header($sb_link));
	}
	else
	{
		header('Location: '.sb_sanitize_header($_SERVER['PHP_SELF']));
	}

	exit(0);
}

/**
 * Возвращает название города по IP-адресу
 *
 * Функция использует сервис ipgeobase (http://www.ipgeobase.ru)
 *
 * @param string $ip IP-адрес.
 * @param bool $reset_cache Использовать кэш или нет.
 * @param string $charset Кодировка, в которую надо перекодировать ответ сервиса
 *
 * @return array Название города, региона, области, страны, широта и долгота или FALSE.
 * 				 Структура массива 'city', 'region', 'district', 'country', 'lat', 'lng'.
 */
function sbProgGetCityByIP($ip = '', $reset_cache = false, $charset = '')
{
	$info = false;
	if(!isset($_COOKIE['sb_geolocation']) || $reset_cache || trim($_COOKIE['sb_geolocation']) == '')
	{
		require_once(SB_CMS_LIB_PATH.'/sbDownload.inc.php');

		$httpRequest = new sbDownload('http://www.ipgeobase.ru:7020/geo?ip='.$ip);
    	$result = $httpRequest->download();

        if ($result != '')
		{
            if ($charset != '' && sb_strtolower($charset) != 'windows-1251')
            {
                $result = iconv('windows-1251', $charset, $result);
                $result = sb_str_replace('Windows-1251', $charset, $result);
            }

			$xml = simplexml_load_string($result);
			if ($xml && isset($xml->ip) && isset($xml->ip->city))
			{
				$info = array();
				$info['country'] = (string) $xml->ip->country;
				$info['city'] = (string) $xml->ip->city;
				$info['region'] = (string) $xml->ip->region;
				$info['district'] = (string) $xml->ip->district;
				$info['lat'] = (string) $xml->ip->lat;
				$info['lng'] = (string) $xml->ip->lng;

				sb_setcookie('sb_geolocation', base64_encode(serialize($info)), time() + 3600 * 24 * 7);
			}
		}

		if ($info === false)
		{
			sb_setcookie('sb_geolocation', 'undefined', time() + 3600 * 24);
		}
	}
	else
	{
		if (trim($_COOKIE['sb_geolocation']) != 'undefined')
		{
		    $cookie = base64_decode(str_replace(' ', '+', ($_COOKIE['sb_geolocation'])));

		    if ($cookie)
		    {
		        $info = unserialize(stripslashes($cookie));
		    }
		}
	}

	return $info;
}

/**
 *
 * Функция определяет является ли тот кто зашел на страницу поисковым роботом.
 * Если переменная $_SERVER['HTTP_USER_AGENT'] не найдена, то функция все равно считает посетителя роботом.
 *
 * @return bool Да, является поисковым роботом (TRUE) или не является роботом (FALSE)
 *
 */
function sbIsSearchRobot()
{
//	если нет user_agent-а то полюбому считаем посетителя роботом.
	if(!isset($_SERVER['HTTP_USER_AGENT']))
	{
		return true;
	}

	$robots = sql_query('SELECT sr_robot FROM sb_search_robots');
	if($robots)
    {
	    foreach ($robots[0] as $robot)
	    {
	        if(isset($_SERVER['HTTP_USER_AGENT']) && $_SERVER['HTTP_USER_AGENT'] != '' && stristr($_SERVER['HTTP_USER_AGENT'], $robot))
	        {
	            return true;
	        }
		}
	}
	return false;
}

/**
 * Функция генерации хэша для строки
 *
 * @param string $str Строка, для которой генерируем хэш.
 */
function sbProgGetHash($str)
{
    $str = $str.sbPlugins::getSetting('sb_site_hash');
    $len = 100 + sb_strlen($str);

    $result = md5($str).sha1($str);

    for($i = 0; $i < $len; $i++)
        $result = md5($result);

    return $result;
}

/**
 * функция получить id родительской главной категории
 * по id дочерней категории
*/
function get_main_cat_id($cat_id)
{
    $result = array();
    $level = 1;
    $query = "SELECT cat_left, cat_right, cat_ident, cat_level, cat_id, cat_title, cat_url FROM sb_categs WHERE cat_id = " . $cat_id;
    $res = sql_query($query);

    if ($res[0][3] == $level) {
        $result = array($cat_id, $res[0][5], $res[0][6]);

    } else {

        $query2 = "SELECT cat_left, cat_right, cat_ident, cat_level, cat_id, cat_title, cat_url FROM sb_categs WHERE cat_left < " . $res[0][0] . " AND cat_right > " . $res[0][1] . " AND cat_ident = '" . $res[0][2] . "' AND cat_level = " . $level;
        $name = sql_query($query2);
        $result = array($name[0][4], $name[0][5], $name[0][6]);
    }
    return $result;
}


function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


function get_average_rating($id){
    $res = sql_query("SELECT MAX(p_price4) FROM sb_plugins_1");
    $sec = sql_query("SELECT COUNT(p_price4) FROM sb_plugins_1 WHERE p_price4 > 0");
    $dec = sql_query("SELECT p_price4 FROM sb_plugins_1 WHERE p_id = ?d", $id);

    # return [max_rating, ratings_count, this_id_times, this_id_rating]
    $r = $dec[0][0] * 5 / $res[0][0];
    return array($res[0][0], $sec[0][0], $dec[0][0], round($r,1));
}



/**
 * Функция выведет массив $GLOBALS['tags_new_array'] для фотрмирования тегов
 * страницы каталога без пагинации
*/

function get_tags_for_catalog($id){
    $tags = array();




    $query = "SELECT * FROM sb_plugins_1 WHERE p_active = 1 and p_id = " . (int)$id;
    $res = sql_query($query);


    if (count($res) > 0) {
        foreach ($res as $i=>$row) {
            $name = $row[16];  //name user_f_2
            /*обработка тегов списков каталога*/
            $tags = set_tags($name);
        }
    }


    if(isset($GLOBALS['tags_new_array'])) {
        foreach ($tags as $t) {
            if (!in_array($t, $GLOBALS['tags_new_array'])) {
                array_push($GLOBALS['tags_new_array'], $t);
            }
        }
    }


    return true;

}



/**
 * CURL
 * j = 1 - вернет array, 0 json
 * offset - “int”, параметр, который задает отступ указателя на первый отзыв из общего
 * списка. Может использоваться для реализации пагинации и динамической загрузки
 * следующей страницы отзывов. Принимаемые значения от 0 до значения
 * “FilteredReviewsTotalCount” (см. ниже). Значение по умолчанию: 0.
 * count - “int”, параметр, который задает количество возвращаемых отзывов. Первым
 * отзывом в возвращаемом списке будет отзыв, на который указывает параметр “offset”.
 * Принимаемые значения от 0 до 20. Значение по умолчанию: 10.
 * filterBy - “string”, параметр, который задает название поля, к которому будет применена
 * фильтрация. Принимаемое значение “Rate”. Значение по умолчанию: “”.
 * filterValues - “string”, параметр, который задает значение или список значений,
 * разделенных запятыми, по которым будет выполнена фильтрация отзывов. Например:
 * filterBy=Rate&filterValues=4,5 вернет только отзывы с рейтингом 4 и 5. Значение по
 * умолчанию: “”.
 * orderBy - “string”, параметр, который задает поле, по которому будет отсортирован
 * список возвращаемых отзывов. Принимаемые значения: “Rate”, “Date”. Значение по
 * умолчанию: “Date”.
 * sortingOrder -“string”, параметр, задающий порядок сортировки, который должен быть
 * применен к списку возвращаемых отзывов. Принимаемые значения: “asc”, “desc”.
 * Значение по умолчанию “desc”.
 */

function get_mneniya($artikul, $j) {
    $id = "f3888bb2-cd06-4745-bb30-68b9642ec9bf";
    if(!$j)
        $j = 0;
    $url = 'https://api.mneniya.pro/v1.3/clients/'.$id.'/reviews/Product/'.urlencode($artikul).'/All';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $page = curl_exec($ch);
    curl_close($ch);

    if($j == 1){
        $r = ( json_decode($page, true, JSON_UNESCAPED_UNICODE) );

        $f = fopen(__DIR__ . "/mneniya_one.log", "w+");
        fwrite($f, date("Y-m-d H:i:s\n") . $page);
        fclose($f);


        return $r;
    }
    else {
        return json_decode($page, 0, JSON_UNESCAPED_UNICODE);
    }
}


function get_rate_num($artikul){
    $id = "f3888bb2-cd06-4745-bb30-68b9642ec9bf";
    $url = 'https://api.mneniya.pro/v1.3/clients/'.$id.'/ratings/Product/' . urlencode($artikul);
    $chr = curl_init($url);
    curl_setopt($chr, CURLOPT_RETURNTRANSFER, 1);
    $page = curl_exec($chr);
    curl_close($chr);
    $rat = ( json_decode($page, true, JSON_UNESCAPED_UNICODE) );
    return $rat;
}


/** rating stars */
function rate($num){
    $line = "";
    for($i = 1; $i < 6; $i++){
        $j = $i + 1;
        if($i <= $num){
            $line .= "<img src=\"https://icon.now.sh/star/16/1a0099\" alt=\"Рейтинг не менее ".$j."\"/>";
        }
        else{
            $line .= "<img src=\"https://icon.now.sh/star_border/16/1a0099\" alt=\"Рейтинг менее ".$j."\"/>";
        }
    }
    return $line;
}


function get_mneniya_all($page) {
    $id = "f3888bb2-cd06-4745-bb30-68b9642ec9bf";
    if(!$page)
        $page = 1;

    $on_page = 10;
    $offset = ($page - 1) * $on_page;
    $count = $on_page;

    $url = 'https://api.mneniya.pro/v1.3/clients/'.$id.'/reviews/Merchant?count='.$count.'&offset='.$offset;
    $ch = curl_init($url);


    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $page = curl_exec($ch);
    curl_close($ch);

    $r = ( json_decode($page, true, JSON_UNESCAPED_UNICODE) );



    $f = fopen(__DIR__ . "/mneniya.log", "w+");
    fwrite($f, date("Y-m-d H:i:s\n") . $page);
    fclose($f);



    return $r;
}




/**
 * функция выдает товар в том виде, в каком система требует
 * для выдачи на страницах вручную
 * нужна заранее определенная функция get_ids_by_tag()
 * а также функция из CMS sql_query()
 * функция resi($image) для ресайза картинок
 */

function get_tovar_by_hand(
    $word_or_tag, # ливочн асл или id если 2
    $by_words_or_tags_or_id, #1 by words 0 by tags 2 by id
    $sort_towards,
    $sort_by,
    $list_view_for_ga, // Popular
    $filter_name,
    $filter_art,
    $order
)
{

    $dop_name_query = "";
    $dop_art_query = "";


    if(!$filter_name)
        $filter_name = false;
    else
        $dop_name_query = " AND user_f_2 LIKE '%".$filter_name."%' ";

    if(!$filter_art)
        $filter_art = false;
    else
        $dop_art_query = " AND user_f_55 LIKE '%".$filter_art."%' ";


    if(!$order)
        $order = false;

    $line = "";
    $tags = array();

    if (!$sort_towards)
        $sort_towards = "DESC";

    if (!$list_view_for_ga)
        $list_view_for_ga = "Default";

    if (!$sort_by)
        $sort_by = "p_price1";






    if ($by_words_or_tags_or_id == 1) {

        # если слов несколько, то разбить по пробелу
        $w_expl = explode(" ", $word_or_tag);

        $dop_query = " 1=1 ";

        foreach ($w_expl as $w_e) {

            $dop_query .= " AND user_f_2 like '%$w_e%' ";

        }


        $query = "SELECT * FROM sb_plugins_1 WHERE 
	    $dop_query
	    $dop_art_query
	    $dop_name_query
	    AND p_active = 1 ORDER BY " . $sort_by . " " . $sort_towards;
    }
    else if ($by_words_or_tags_or_id == 2) {
        $query = "SELECT * FROM sb_plugins_1 WHERE p_active = 1
        $dop_art_query
	    $dop_name_query
        AND p_id = " . (int)$word_or_tag;
    }
    else {

        $tag_ids = get_ids_by_tag($word_or_tag);

        if($tag_ids) {
            $query = "SELECT * FROM sb_plugins_1 WHERE p_id IN (" . $tag_ids . ") 
            $dop_art_query
	        $dop_name_query
            AND p_active = 1 ORDER BY " . $sort_by . " " . $sort_towards;
        }
    }


    if ($res = sql_query($query)){
        $e = 1;
    }



    if (count($res) > 0) {

        foreach ($res as $i=>$row) {

            $sb_id = $row[0]; // sb id p_id
            $c_id = $row[1]; //1c id p_title
            $item_chpu = $row[2];  //chpu p_url
            $price = $row[11]; //price p_price1
            $price3 = $row[13]; //price was p_price3
            $name = str_replace("\\", "/", $row[16]);  //name user_f_2
            $image = $row[24];  //image user_f_19
            $descr = $row[32]; // description
            $articul = $row[38]; // артикул user_f_55
            $rating = $row[14]; //рейтинг p_price4
            $sell_unit = $row[17]; // id единицы товара user_f_3
            #$sell_unit = "шт.";

            $hit = $row[20]; // 1/0 хит продаж user_f_14
            $new = $row[21]; // 1/0 новинка user_f_15
            $action = $row[22]; // 1/0 акция user_f_16













            switch ($sell_unit) {
                case 1:
                    $sell_unit = 'кг';
                    break;
                case 2:
                    $sell_unit = 'шт';
                    break;
                case 207:
                    $sell_unit = 'упак';
                    break;

            }


            //get chpu of category
            $query2 = "SELECT link_cat_id FROM sb_catlinks WHERE link_el_id = ".$sb_id;
            $data2 = sql_query($query2);
            $j = 0;
            $cat_id = 0;
            if (count($data2) > 1) {
                while ($row2 = $data2[$j]) {
                    if ($row2[0] != '1520' && $row2[0] != '1534') { // link_cat_id
                        $cat_id = $row2[0];
                    }
                    $j++;
                }
            } else {
                $row2 = $data2[0];
                $cat_id = $row2[0];
            }

            $query3 = "SELECT cat_url, cat_title FROM sb_categs WHERE cat_id = ".$cat_id." LIMIT 1";
            $data3 = sql_query($query3);
            $row3 = $data3[0];
            $cat_chpu = $row3[0]; // cat_url
            $cat_title = $row3[1]; // cat_title


            $full_chpu = '/catalog/full/' . $cat_chpu . '/' . $item_chpu . '/';

            // 1/0 unset property Popular
            // было свойство товара Популярные. Чтоб убрать лишние
            // данные из базы
            $upd = "UPDATE sb_plugins_1 SET user_f_78 = 0 WHERE p_id = ".$sb_id;

            sql_query($upd);



            /*обработка тегов списков каталога*/



            $tags = set_tags($name);






            $line .= '
        <script>
            function send_detail_click_' . $sb_id . '(){
                gtag("event", "view_item", {
                    "items": [
                        {
                            "id": "' . $articul . '",
                            "name": "' . $name . '",
                            "list_name": "' . $list_view_for_ga . ' View",
                            "brand": "La Maree",
                            "category": "' . $cat_title . '",
                            "variant": "' . $_SERVER["REQUEST_URI"] . '",
                            "list_position": ' . $i . ',
                            "quantity": 1,
                            "price": ' . (int)$price . '
                        }
                    ]
                });
            }

            function send_add_to_basket_' . $sb_id . '(){
                gtag("event", "add_to_cart", {
                    "items": [
                        {
                            "id": "' . $articul . '",
                            "name": "' . $name . '",
                            "list_name": "' . $list_view_for_ga . ' View",
                            "brand": "La Maree",
                            "category": "' . $cat_title . '",
                            "variant": "' . $_SERVER["REQUEST_URI"] . '",
                            "list_position": ' . $i . ',
                            "quantity": 1,
                            "price": ' . (int)$price . '
                        }
                    ]
                });




                add_rating(' . $sb_id . ');




                window.dataLayerYandex.push({
                    "ecommerce": {
                        "currencyCode": "RUB",
                        "add" : {
                            "products" : [
                                {
                                    "id": "' . $articul . '",
                                    "name": "' . $name . '",
                                    "price": ' . (int)$price . ',
                                    "brand": "La Maree",
                                    "category": "' . $cat_title . '",
                                    "variant": "' . $_SERVER["REQUEST_URI"] . '",
                                }
                            ]
                        }
                    }
                });
            }

        </script>

        <div id="item-'.$sb_id.'" class="catalog-item" data-artikul="' . $articul . '" data-title="' . htmlentities($name) . '" data-price="' . $price . '" data-rating="'.(int)$rating.'" data-id="'.(int)$sb_id.'" data-cat-id="'.$cat_id.'" data-goods-count="'.$order.'">
            <div class="catalog-item-actions">';

            if($hit)
                $line .= '<div class="hit-flag">хит</div>';

            if($new)
                $line .= '<div class="new-flag">новинка</div>';

            if($action) {
                $perc = $price*100/$price3;
                $perc = 100 - $perc;
                $perc = round($perc);
                $line .= '<div class="action-flag">'.$perc.'%</div>';
            }

            $line .= '</div>
            <a title="'.$articul.'" href="' . $full_chpu . '" onclick="send_detail_click_' . $sb_id . '()">
                <div class="catalog-item-container" data-artikul="' . $c_id . '">
                    <div class="item-img-container"><img class="catalog-item-img" src="';

            $path = "/home/d/dlmlru/shop_beta/public_html";

            if (is_file($path . $image)) {
                $line .= resi($image, 248, 165);
            } else {
                $line .= "/images/tpl/no_photo.png";
            }

            if(!$action) { # если скидка
                $line .= '" alt="' . $name . '"></div>
                    <span class="catalog-item-name">' . $name . '</span>
                    <span class="catalog-item-price"><span class="price-num">' . $price . '</span> руб./' . $sell_unit . '</span>';
            }
            else {
                $line .= '" alt="' . $name . '"></div>
                    <span class="catalog-item-name">' . $name . '</span>
                    <span class="old-price"><span class="old-price-num old-act-lighted">'.$price3.'</span> руб./'.$sell_unit.'</span>
                    <span class="catalog-item-price"><span class="price-num act-list-lighted">'.$price.' 
</span> руб./'.$sell_unit.'</span>';
            }



            if(get_average_rating($sb_id)[2] < 1){
                $ratingCount = 1;
            }
            else{
                $ratingCount = get_average_rating($sb_id)[2];
            }


            if(mob_detect()){
                $line .= '<div class="catalog-item-btns">
                        <button id="minus_' . $sb_id . '">–</button>
                        <input type="text" id="quan_' . $sb_id . '" value="1" size="2">
                        <button id="plus_' . $sb_id . '">+</button>';
                if($order) {
                    $line .= '<span class="catalog-item-add-to-basket btn-green" data-quan="1" id="id_' . $sb_id . '" >в корзине</span></div>';
                }
                else{
                    $line .= '<span class="catalog-item-add-to-basket btn-blue" data-quan="1" id="id_' . $sb_id . '" onclick="send_add_to_basket_' . $sb_id . '(); yaCounter17166961.reachGoal(\'vkorziny\'); return true;">купить</span></div>';
                }
            }
            else {

                $line .= '<div class="catalog-item-btns">';
                if($order) {
                    $line .= '<div class="catalog-item-add-to-basket btn-green" data-quan="1" id="id_' . $sb_id . '" >в корзине</div><div class="add-to-favorites" id="fav_' . $sb_id . '">
                            <svg class="icon-heart">
                                <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="#icon-heart"></use>
                            </svg>
                        </div>';
                }
                else{
                    $line .= '<div class="catalog-item-add-to-basket btn-blue" data-quan="1" id="id_' . $sb_id . '" onclick="send_add_to_basket_' . $sb_id . '()">в корзину</div><div class="add-to-favorites" id="fav_' . $sb_id . '">
                            <svg class="icon-heart">
                                <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="#icon-heart"></use>
                            </svg>
                        </div>';
                }

            $line .= '</div>';

            }


            $line .= '</div>
            </a>
           
            <script type="application/ld+json">
            {
              "@context" : "https://schema.org",
              "@type" : "Product",
              "name" : "' . str_replace("\\", "/", $name) . '",
              "brand" : "'.$cat_title.'",
              "image" : "https://shop.lamaree.ru'.$image.'",
              "offers" : {
                "@type" : "Offer",
                "price" : "'.$price.'",
                "priceCurrency" : "руб",
                "availability": "https://schema.org/InStock",
                "priceValidUntil": "'.date("Y-m-d", strtotime("+1 week")).'",
                "url": "https://shop.lamaree.ru' . $full_chpu . '"
              },
              "aggregateRating": {
                "@type": "AggregateRating",
                "bestRating": "' . get_average_rating($sb_id)[0] .'",
                "worstRating": "0",
                "ratingCount": "' . $ratingCount . '",
                "ratingValue": "' . get_average_rating($sb_id)[3] . '"
              },
              
              "description" : "'.strip_tags($descr).'",
              "sku" : "'.$articul.'"
            }
            </script>
            <script>
                gtag("event", "view_item_list", {
                    "items": [
                        {
                            "id": "' . $articul . '",
                            "name": "' . $name . '",
                            "list": "' . $list_view_for_ga . ' View",
                            "brand": "La Maree",
                            "category": "' . $cat_title . '",
                            "variant": "' . $_SERVER['REQUEST_URI'] . '",
                            "list_position": ' . $i . ',
                            "quantity": 1,
                            "price": ' . $price . '
                        }
                    ]
                });
            </script>
        </div>

        ';

        }

    }
    else {
        $line .= "No data";
    }


    if(isset($GLOBALS['tags_array'])) {
        #$line .= "<div class=clean style='display:none'>".json_encode($tags, JSON_UNESCAPED_UNICODE)."</div>";
        foreach ($tags as $t) {
            if (!in_array($t, $GLOBALS['tags_array'])) {
                array_push($GLOBALS['tags_array'], $t);
            }
        }
    }


    return $line;


    /*
     * "review": [
                {
                  "@type": "Review",
                  "author": "Customer",
                  "datePublished": "'.date("Y-m-d", strtotime("-1 month")).'",
                  "reviewRating": {
                    "@type": "Rating",
                    "bestRating": "'.$rplus.'",
                    "ratingValue": "'.$rating.'",
                    "worstRating": "0"
                  }
                 }
                ],
     * */
}










/**
 * Функция сетов
 * $id_or_artikul = array() or $art = array();
 * $way = 1/0 - by id or by artikul
 **/

function sets($id_or_artikul, $way, $name){
    $line = "<div class=\"container set-product-list set\">";
    if(!$name)
        $name = false;
    else
        $line .= "<div class=\"set_name\">$name</div>";

    $ids = array();
    $res = array();
    $with_discount = 0;
    $sum = 0;
    $lf = "";
    foreach($id_or_artikul as $i){
        $lf .= "'" . $i . "',";
    }
    $ld = substr($lf,0,-1);

    switch ($way){
        case 1:
            $res = sql_query("SELECT p_id, p_title, p_price1, user_f_2, user_f_55, user_f_19, p_price2 FROM sb_plugins_1 WHERE p_id IN (".$ld.")");
            break;
        case 0:
            $res = sql_query("SELECT p_id, p_title, p_price1, user_f_2, user_f_55, user_f_19, p_price2, p_price3 FROM sb_plugins_1 WHERE user_f_55 IN (".$ld.")");

            break;
        default:
            break;
    }

    foreach($res as $r){
        $line .= '<div id="set_item_'.$r[0].'" class="col-lg-6 col-sm-12 set-item" title="'.$r[4].'">
					<img src="'.$r[5].'" alt="'.$r[3].'" width="136"/>
					<div class="set-wrap"><p class="set-item-name">'.$r[3].'</p>
					<div class="prices">';
                        if($r[2] < $r[7] && $r[7] > 0) {
                            $line .= '<div class="set-item-price">
                                <span class="price">' . $r[7] . ' <span class="smaller">руб.</span></span>
                                <span class="price-text"> — цена в сэте</span></div>';
                        }
						$line .= '<div class="item-outset-price"><span class="price">'.$r[2].'</span> руб.</div>
					</div></div>
				</div>';

        $ids[] = $r[0];
        $sum += $r[2];
        $with_discount += $r[7];
    }

    $line .= '<span class="clearfix"></span>
				<div class="col-lg-12 set-bottom">
				    <div class="waves-wrap"><div class="double-waves"></div>';
				    if($with_discount <> $sum && $with_discount > 0) {
                        $line .= '<div class="set-discount-price"><span>'.$with_discount.'</span> <span class="smaller">руб</span></div>';
                    }
					$line .= '<div class="set-price">'.$sum.' <span class="smaller">руб</span></div>';
				    $line .= '<div class="double-waves"></div></div>';

					$line .= '<div class="add-to-basket-set btn-blue" onclick="set_in_basket(\''.implode(",", $ids).'\')" title="После оформления заказа вы сможете оговорить с менеджером размер порции">Добавить сэт в корзину</div>
						
					</div>
				</div>';


    $line .= "</div>";

    return $line;
}


function sel_relative($id){ // must be string. It may be 01133
    $d = array();
    $r = 0;
    $res = 0;
    $kount = 0;
    $matches = array();
    $sql = "SELECT user_f_8 FROM sb_plugins_2 WHERE user_f_8 LIKE '%$id%'";
    $lines = sql_query($sql); // all strings where id is with itself
    foreach($lines as $line){
        #$l .= $line[0] . "\n";
        preg_match_all('/\d{5}/i', str_replace($id,'',$line[0]), $matches);
        foreach($matches[0] as $m){
            $d[] = $m;
        }
    }

    $s = array_count_values($d);

    foreach($s as $key=>$value){
        if($value > $r){ $res = $key; $kount = $value; }
        $r = $value;
    }
    $title = $res; // gives p_title of an item


    $sql2 = sql_query("SELECT p_id FROM sb_plugins_1 WHERE p_title = ?s", $title);
    $id = $sql2[0][0];

    return array($id, $kount);
}

?>