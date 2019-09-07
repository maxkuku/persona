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
$this->setFrameMode(true);
?>
<?header('Last-Modified: '. date('D, d M Y H:i:s', $arResult['TIMESTAMP_X']). ' GMT');
$s = CSite::GetByID("s1");
$sname = $s->arResult[0]['NAME'];
?>

<div class="news-detail">



    <?$APPLICATION->AddChainItem($arResult['NAME'], "/articles/" . $arResult['CODE'] . "/");?>
	<?if($arParams["PREVIEW_PICTURE"]!="N" && is_array($arResult["PREVIEW_PICTURE"])):?>
		<!--img
			class="preview_picture"
			border="0"
			src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
			width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
			title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
			/-->
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<? if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}


	/*$entityTypeId = 'ARTICLE';
	$entityId = 1;
	$arVoteResult = CRatings::GetRatingVoteResult($entityTypeId, $entityId);
	if(!empty($arVoteResult))
		echo '<pre>'.print_r($arVoteResult, true).'</pre>';
	else
		echo "За статью ещё не голосовали";*/


	/*$APPLICATION->IncludeComponent("bitrix:rating.vote","mobile_like",
		Array(
			"ENTITY_TYPE_ID" => "BLOG_POST",
			"ENTITY_ID" => $arResult["ID"],
			"OWNER_ID" => $USER->GetID(),
			"USER_HAS_VOTED" => "N",
			"TOTAL_VOTES" => "0",
			"TOTAL_POSITIVE_VOTES" => "0",
			"TOTAL_NEGATIVE_VOTES" => "0",
			"TOTAL_VALUE" => "0",
			"PATH_TO_USER_PROFILE" => "",
		),
		null,
		array("HIDE_ICONS" => "Y")
	);*/



	?>
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Article",
  "author": "<?=$_SERVER['HTTP_HOST']?>",
  "datePublished": "<?=date('Y-m-d\TH:m:i+00:00', strtotime($arResult['TIMESTAMP_X']))?>",
  "dateModified": "<?=date('Y-m-d\TH:m:i+00:00', strtotime($arResult['TIMESTAMP_X']))?>",
  "mainEntityOfPage":"<?=strip_tags($arResult['PREVIEW_TEXT'])?>",
  "headline":"<?=$arResult["NAME"]?>",
  "image":"https://<?=$_SERVER['HTTP_HOST']?><?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>",
  "publisher": [{
  "@type":"Organization",
  "name":"<?=$sname?>",
  "logo":{
    "@type": "ImageObject",
    "name": "akademstomRuLogo",
    "url": "https://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/academ/images/logo-akadem-white.png"
    }
  }],
  "interactionStatistic": [
    {
      "@type": "InteractionCounter",
      "interactionService": {
        "@type": "Website",
        "name": "<?=$_SERVER['HTTP_HOST']?>",
        "url": "https://<?=$_SERVER['HTTP_HOST']?>"
      },
      "interactionType": "http://schema.org/ReadAction",
      "userInteractionCount": "<?=$arResult['SHOW_COUNTER']?>"
    }
  ],
  "name": "<?=$arResult['NAME']?>"
}
</script>
</div>
<?#}
#else{
#    LocalRedirect('404.php');
#}?>