<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<div class="wrap"><h1><? $APPLICATION->ShowTitle(false)?></h1></div>
<div class="left-right-wrap">
<div class="article-block">
Text article
</div>
<div class="side-block" data-sticky-container>
    <div class="side-wrapper">
    Text side block
    </div>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>