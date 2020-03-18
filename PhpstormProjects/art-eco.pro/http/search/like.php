<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск по каталогу");
#echo __DIR__;
# /home/virtwww/w_2315art-ru_25432bcf/http/
if(strlen(htmlspecialchars($_REQUEST['q'],3)) > 0){
    $search = htmlspecialchars($_REQUEST['q'],3);
}






?>
<div class="search_page">
    <form action="" method="get">
        <div class="row">
            <input type="text" class="form_control" name="q" value="<?=$search?>" size="40" style="display:inline-block">&nbsp;<input type="submit" class="btn" value="Искать" style="display:inline-block">
            <input type="hidden" name="how" value="r">
        </div>
    </form>
    <br><br>


<?if($search) {

    CModule::IncludeModule('iblock');


    $query_words = explode(' ', $search);
    $query_words_trans = explode(' ', translit($search));

    if (!isset($query_words[1])) {
        $query_words[1] = '';
        $query_words_trans[1] = '';
    }

    if (!isset($query_words[2])) {
        $query_words[2] = '';
        $query_words_trans[2] = '';
    }

    if (!isset($query_words[3])) {
        $query_words[3] = '';
        $query_words_trans[2] = '';
    }

    $sort = "";
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
    } else {
        $sort = 'ID ASC';
    }


    $q = '%' . $query_words[0] . '%' . $query_words[1] . '%' . $query_words[2] . '%' . $query_words[3] . '%';


    $result = '<div class="search-results-items">';


    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "DETAIL_PICTURE", "PROPERTY_*", "SECTION_NAME");
    $arFilter = Array(
        "IBLOCK_ID"=>[31,30, 28, 19,18],
        "ACTIVE_DATE"=>"Y",
        "ACTIVE"=>"Y",
        array(
            "LOGIC"=>"OR",
            #"ID"=>$q,
            "NAME"=>$q,
            "PREVIEW_TEXT"=>"%$q%",
            "DETAIL_TEXT"=>"%$q%",
            "PROPERTY_TVIDEO_NOTES"=>$q,
            "PROPERTY_TVIDEO_TITLES"=>$q
        ),
    );

    $i = 0;
    $res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, Array("nPageSize" => 50), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();


        $widthPreviewSmall = 100;
        $heightPreviewSmall = 100;
        $num = 0;


        $out = [];

        // find_wrap in init.php

        $out[] = find_wrap($arFields['NAME'], $search);
        $out[] = find_wrap($arFields['PREVIEW_TEXT'], $search);
        $out[] = find_wrap($arFields['DETAIL_TEXT'], $search);
        $out[] = find_wrap($arFields['PROPERTY_TVIDEO_NOTES_VALUE'], $search);
        $out[] = find_wrap($arFields['PROPERTY_TVIDEO_TITLES_VALUE'], $search);









        switch(true){
            case $arFields["PREVIEW_PICTURE"]:
                $file = CFile::ResizeImageGet($arFields["PREVIEW_PICTURE"], array('width' => $widthPreviewSmall, 'height' => $heightPreviewSmall), BX_RESIZE_IMAGE_EXACT, true);
                break;
            case $arFields["DETAIL_PICTURE"]:
                $file = CFile::ResizeImageGet($arFields["DETAIL_PICTURE"], array('width' => $widthPreviewSmall, 'height' => $heightPreviewSmall), BX_RESIZE_IMAGE_EXACT, true);
                break;
            case $arProps['PHOTOS']['VALUE'][0]:
                $file = CFile::ResizeImageGet($arProps['PHOTOS']['VALUE'][0], array('width' => $widthPreviewSmall, 'height' => $heightPreviewSmall), BX_RESIZE_IMAGE_EXACT, true);
                break;
            case $arProps['PHOTOS']['VALUE'][1]:
                $file = CFile::ResizeImageGet($arProps['PHOTOS']['VALUE'][1], array('width' => $widthPreviewSmall, 'height' => $heightPreviewSmall), BX_RESIZE_IMAGE_EXACT, true);
                break;
            default:
                $file['src'] = '/images/no_photo.png';
                break;
        }


        $result .= '
            <div class="item" style="margin-bottom: 60px;" data-iblock="'.$arFields['IBLOCK_ID'].'">
                <div class="item-image" style="float: none; margin-right: 10px; display: inline-block; vertical-align: middle">
                    <img width="' . $widthPreviewSmall . '" height="' . $heightPreviewSmall . '" src="' . $file['src'] . '" alt="' . $arFields['NAME'] . '" />
                </div>
                <div class="item-props" style="display: inline-block; width: 60%; margin-right: 10px; vertical-align:middle">
                    <div class="found-string">';

        foreach($out as $s){
            //$result .= "<p class='found'>".$s."</p>";
        }

        $result .= '</div>
                    <div class="item-name" style="margin: 5px 0; font-weight: bold;">' . $arFields['NAME'] . '</div>';


        if($arProps['CATEGORY']['VALUE']) {


            $ar_Resu = [];
            $infoblock = 31;
            $rs_Section = CIBlockSection::GetList(array('left_margin' => 'asc'), array('IBLOCK_ID' => $infoblock, 'ID'=> $arProps['CATEGORY']['VALUE']), false, array("NAME", "ID"));
            while ( $ar_Section = $rs_Section->Fetch() )
            {
                $ar_Resu[] = "<a href=\"/catalog/list_cat.php?SECTION_ID=".$ar_Section['ID']."\">" . $ar_Section['NAME'] . "</a>";
            }

            $g = array_unique($ar_Resu);


            $result .= '<div class="item-categ"><span>Категория: ' . implode(", ", $g) . '</span></div>';
        }


        $infoblock = $arFields["IBLOCK_ID"];
        $rs_Section = CIBlockSection::GetList(
            array('left_margin' => 'asc'),
            array('IBLOCK_ID' => $infoblock, 'HAS_ELEMENT' => $arFields['ID']),
            false,
            array('ID', 'NAME', 'SECTION_PAGE_URL', 'PICTURE')
        );
        while ( $ar_Section = $rs_Section->Fetch() )
        {
            $link = str_replace('#SECTION_ID#', $ar_Section['ID'], $ar_Section["SECTION_PAGE_URL"]);
            $ar_Sec[] = "<a href=\"".$link."\">" . $ar_Section['NAME'] . "</a>";
        }
        $s = array_unique($ar_Sec);
        if(is_array($s)) {
            $result .= '<div class="item-categ"><span>Раздел: ' . implode(", ", $s) . '</span></div>';
        }





        $linkshop = ($arProps['LINKSHOP']['VALUE'])?$arProps['LINKSHOP']['VALUE']:"";
        if($linkshop)
            $result .= '<div class="item-link"><span><a href="' . $linkshop . '">В магазин</a></span></div>';





        if($arProps['TVIDEO_TITLES']['VALUE']) {
            $result .= '<div class="item-artikul">Видео: ' . implode(", ", $arProps['TVIDEO_TITLES']['VALUE']) . '</div>';
        }




        $href = $arFields['DETAIL_PAGE_URL'];



        $result .= '
                </div>
                <a class="btn" href="'.$href.'" data-id="'.$arFields['ID'].'">Подробнее</a>
            </div>
               <div class="clearfix" style="float:none; clear:both"></div>
            ';

        $i++;
    }

    if($i == 0){
        $result = '<div class="no-results">по данному запросу ничего не найдено</div>';
    }

    echo $result;

}
    ?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
