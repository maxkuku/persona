<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Список желаний");
$APPLICATION->SetAdditionalCSS("/wishlist/style.css");
?>
<?php
$no_goods = "N";
$wasCook = htmlspecialchars($_COOKIE['wishPersona'],3);
if($wasCook){
    $cookArr = explode(',', $wasCook);
} else
{
    $no_goods = "Y";
}

?>
    <div class="row">
        <div id="content" class="<?if($no_goods == "N"):?>col-sm-9 col-md-9<?endif?>">
            <div class="table-responsive wishlist">
                <?php


                if($wasCook){
                    $cookArr = explode(',', $wasCook);


                    $arFilter = array("ID"=>$cookArr);

                    $APPLICATION->IncludeComponent(
                        "persona:news.list",
                        "wishlist",
                        Array(
                            "IBLOCK_TYPE"                     => "goods",
                            "IBLOCK_ID"                       => "4",
                            "NEWS_COUNT"                      => "120",
                            "SORT_BY1"                        => "SORT",
                            "SORT_ORDER1"                     => "ASC",
                            "FILTER_NAME"                     => "arFilter",
                            "FIELD_CODE"                      => array( 0 => "DETAIL_PICTURE", ),
                            "PROPERTY_CODE"                   => array( 0 => "href", 1 => "price", ),
                            "CHECK_DATES"                     => "Y",
                            "DETAIL_URL"                      => "",
                            "AJAX_MODE"                       => "N",
                            "AJAX_OPTION_SHADOW"              => "Y",
                            "AJAX_OPTION_JUMP"                => "N",
                            "AJAX_OPTION_STYLE"               => "Y",
                            "AJAX_OPTION_HISTORY"             => "N",
                            "CACHE_TYPE"                      => "A",
                            "CACHE_TIME"                      => "36000000",
                            "CACHE_FILTER"                    => "N",
                            "CACHE_GROUPS"                    => "Y",
                            "PREVIEW_TRUNCATE_LEN"            => "",
                            "ACTIVE_DATE_FORMAT"              => "d.m.Y",
                            "DISPLAY_PANEL"                   => "N",
                            "SET_TITLE"                       => "N",
                            "SET_STATUS_404"                  => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                            "ADD_SECTIONS_CHAIN"              => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                            "PARENT_SECTION"                  => "",
                            "PARENT_SECTION_CODE"             => "",
                            "DISPLAY_TOP_PAGER"               => "N",
                            "DISPLAY_BOTTOM_PAGER"            => "N",
                            "PAGER_TITLE"                     => "Баннеры",
                            "PAGER_SHOW_ALWAYS"               => "N",
                            "PAGER_TEMPLATE"                  => "",
                            "PAGER_DESC_NUMBERING"            => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                            "PAGER_SHOW_ALL"                  => "N",
                            "DISPLAY_DATE"                    => "Y",
                            "DISPLAY_NAME"                    => "Y",
                            "DISPLAY_PICTURE"                 => "Y",
                            "DISPLAY_PREVIEW_TEXT"            => "Y",
                            "AJAX_OPTION_ADDITIONAL"          => "",
                            "HIDE_LINK_WHEN_NO_DETAIL"        => false
                        )
                    );

                } else
                {
                    echo "Нет товаров в списке";
                }

                ?>
            </div>
            <div class="buttons clearfix">
                <div class="pull-right"><a href="/"
                                           class="btn btn-primary">Продолжить покупки</a></div>
            </div>
        </div>
        <?if($no_goods == "N"):?>
        <div id="column-right" class="col-sm-4 col-md-3">
            <div class="visible-xs text-right col-show-button">
                <a class="btn btn-default btn-block" id="show-modules-col-right"><i class="fa fa-eye show-icon"></i><i
                            class="fa fa-eye-slash hid-icon"></i> Правая колонка</a>
            </div>
            <div id="col-right-modules" class="hid-col-right">

                <!--modules-->
                <? $APPLICATION->IncludeComponent(
                    "persona:news.list",
                    "actions_main",
                    Array(
                        "IBLOCK_TYPE"                     => "goods",
                        "IBLOCK_ID"                       => "4",
                        "NEWS_COUNT"                      => "20",
                        "SORT_BY1"                        => "SORT",
                        "SORT_ORDER1"                     => "ASC",
                        "FILTER_NAME"                     => "arrFilter",
                        "FIELD_CODE"                      => array(
                            0 => "DETAIL_PICTURE",
                            1 => "PREVIEW_PICTURE", ),
                        "PROPERTY_CODE"                   => array(
                            0 => "price",
                            1 => "artikul",
                            2 => "sale" ),
                        "CHECK_DATES"                     => "Y",
                        "DETAIL_URL"                      => "",
                        "AJAX_MODE"                       => "N",
                        "AJAX_OPTION_SHADOW"              => "Y",
                        "AJAX_OPTION_JUMP"                => "N",
                        "AJAX_OPTION_STYLE"               => "Y",
                        "AJAX_OPTION_HISTORY"             => "N",
                        "CACHE_TYPE"                      => "A",
                        "CACHE_TIME"                      => "36000000",
                        "CACHE_FILTER"                    => "N",
                        "CACHE_GROUPS"                    => "Y",
                        "PREVIEW_TRUNCATE_LEN"            => "",
                        "ACTIVE_DATE_FORMAT"              => "d.m.Y",
                        "DISPLAY_PANEL"                   => "N",
                        "SET_TITLE"                       => "N",
                        "SET_STATUS_404"                  => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                        "ADD_SECTIONS_CHAIN"              => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                        "PARENT_SECTION"                  => "",
                        "PARENT_SECTION_CODE"             => "",
                        "DISPLAY_TOP_PAGER"               => "N",
                        "DISPLAY_BOTTOM_PAGER"            => "N",
                        "PAGER_TITLE"                     => "Рекомендуемые",
                        "PAGER_SHOW_ALWAYS"               => "N",
                        "PAGER_TEMPLATE"                  => "",
                        "PAGER_DESC_NUMBERING"            => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                        "PAGER_SHOW_ALL"                  => "N",
                        "DISPLAY_DATE"                    => "Y",
                        "DISPLAY_NAME"                    => "Y",
                        "DISPLAY_PICTURE"                 => "Y",
                        "DISPLAY_PREVIEW_TEXT"            => "Y",
                        "AJAX_OPTION_ADDITIONAL"          => "",
                        "HIDE_LINK_WHEN_NO_DETAIL"        => false
                    )
                ); ?>

            </div>
        </div>
        <?endif?>
        <script>
            domReady(function () {
                $('#show-modules-col-right').click(function () {
                    $('#col-right-modules').toggleClass('show');
                    $(this).toggleClass('open');
                });
            });
        </script>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>