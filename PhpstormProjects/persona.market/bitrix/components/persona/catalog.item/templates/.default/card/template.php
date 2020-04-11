<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>

<?#pr($component)?>

		<div id="item_<?=$item['ID']?>" class="product-thumb thumbnail">
			<div class="stickers-box">
			</div>
			<div class="image">
				<a href="<?=$item['DETAIL_PAGE_URL']?>">
                    <?if($item['PREVIEW_PICTURE']['SRC']):?>
                    <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>" title="<?=$item['PREVIEW_PICTURE']['TITLE']?>" width="248" height="260" class="img-responsive center-block">
                    <?else:?>
                        <span style="background: url(/bitrix/templates/persona/images/Persona_sign_gold_01_1.jpg) no-repeat center / contain;    width: 100%; height: 260px; display: block;">&nbsp;</span>
                    <?endif?>
                    </a>
                <div style="display:none" data-entity="quantity-block"><?=['PROPERTIES']['quantity_cust']['VALUE']?></div>


			</div>


            <div class="caption">
                <div class="name">
                    <a href="<?=$item['DETAIL_PAGE_URL']?>" data-toggle="tooltip"  data-original-title="Бренд: <?=$item['PROPERTIES']['brand']['VALUE']?>" title="Бренд: <?=$item['PROPERTIES']['brand']['VALUE']?>"><?=$item['NAME']?></a>
                </div>
                <button class="btn btn-addtocart qview" onclick="qview('<?=$item['ID']?>')" data-toggle="tooltip" title="" data-original-title="Быстрый просмотр">
                    <i class="fa fa-eye fa-fw"></i>
                </button>
                <!--p class="description"><?
                    $str = $item['DETAIL_TEXT'];
                    echo TruncateText($str, 120);
                    ?></p-->




                <div class="stickers sticker_rectangle sticker_left">
                    <?if($item['PROPERTIES']['hit']['VALUE']):?>
                    <div class="sticker_bestseller">
                        <div>Хит</div>
                    </div>
                    <?endif?>
                </div>


                <?if($item['PROPERTIES']['sale']['VALUE']>0):?>
                <div class="price">
					<span class="price-old"><?=$item['PROPERTIES']['price']['VALUE']?>
                        <span class="sr-only">р.</span>
						<!--span class="roboto-forced ruble" aria-hidden="true" style="display:none;     font-weight: 400;"></span--><!--&nbsp;-->
                    </span>
                    <span class="price-new"><?=$item['PROPERTIES']['sale']['VALUE']?>
                        <span class="sr-only">р.</span>
                        <span class="roboto-forced ruble" aria-hidden="true" style="display:none;     font-weight: 400;"></span>
                    </span>
                </div>
                <?else:?>
                <div class="price">
					<span class="price-new"><?=$item['PROPERTIES']['price']['VALUE']?>
                        <span class="sr-only">р.</span>
                        <span class="roboto-forced ruble" aria-hidden="true" style="display:none;"></span>&nbsp;
                    </span>
                </div>
                <?endif?>



                <?$r = CatalogItemComponent::choozeFeedback($item['ID']);
                # r[0] - rating, r[1] - feeds?>
                <p class="rating">
                    <? for ($i = 1; $i <= 5; $i++): ?>
                        <? if ($i <= $r[0]): ?>
                            <i class="fa fa-star-o active"></i>
                        <? else: ?>
                            <i class="fa fa-star-o"></i>
                        <? endif ?>
                    <? endfor ?>
                    
                    &nbsp;&nbsp;<?=($r[4]=="")?$r[1] . " отзыв(ов)":$r[4]?>
                </p>
            </div>

            <div class="buttons">
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-addtocart" style=" display: none; " onclick="addPreOrder('', '<?=$item['ID']?>');"><i class="fa fa-bell"></i> <span>Уведомить</span></button>
                    <button type="button" class="btn btn-addtocart wid-cont" onclick="cart.add(<?=$item['ID']?>, 1);" title="В корзину"><i class="fa fa-plus fa-fw"></i>&nbsp;&nbsp;В корзину </button>

                        <button type="button" class="btn btn-addtocart dropdown-toggle pull-right" data-toggle="dropdown">
                            <i class="fa fa-angle-down caretalt"></i>
                        </button>
                        <ul class="dropdown-menu addtocart-additional">
                            <li><a onclick="fastorder('<?=$item['ID']?>')"><i class="fa fa-bolt fa-fw"></i>&nbsp;&nbsp;Быстрый заказ</a></li>
                            <li><a onclick="wishlist.add('<?=$item['ID']?>');return false;" title="В избранное"><i class="fa fa-heart-o fa-fw"></i>&nbsp;&nbsp;В избранное</a></li>
                            <!--li><a rel="nofollow" onclick="compare.add('<?=$item['ID']?>');return false;" title="В сравнение"><i class="fa fa-balance-scale fa-fw"></i>&nbsp;&nbsp;В сравнение</a></li-->
                        </ul>

                </div>
            </div>

            <div class="clearfix"></div>
        </div>
