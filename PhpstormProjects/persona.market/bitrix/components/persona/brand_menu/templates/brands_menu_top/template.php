<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
}

if ( empty( $arResult['ALL_ITEMS'] ) ) {
	return;
}


CJSCore::Init();
$GLOBALS['brandmenuitems'] = 0;
?>
<div class="top-nav brand-menu-top">
    <div class="container top-menu-container">
        <ul id="top-menu-list" class="top-menu">
			<? foreach ( $arResult["ALL_ITEMS"] as $itemID => $arLink ): ?>
            
			<? if ( $arLink["DEPTH_LEVEL"] == 1 ) { ?>
			<? if ( $prevIndex > $arLink["DEPTH_LEVEL"] ) { ?>
    </div>
</div>
    </div>
    </li>
<? } ?>
<li class="top_menu_onelevel <? if ( $arLink["SELECTED"] ): ?>current<? endif ?><? if ( $arLink['IS_PARENT'] == "Y" ): ?> dropdown<? endif ?>">
    <a class="<? if ( $arLink['IS_PARENT'] == "Y" ) { ?>with-child<? } ?>"
       href="<?= $arLink["LINK"] ?>"><?= $arLink["NAME"] ?></a>
    <div class="sub_menu_new lvlnew1">
        <div class="triviewmenunew"></div>
		<?
		if ( $arLink['IS_PARENT'] == "Y" ) { ?>
        <div class="sub_menu_item first-sub">
            <!--span>По категориям</span-->
            <div class="list_href_menu">
				<? } ?>
				<? }
                elseif ( $arLink['DEPTH_LEVEL'] > 1 ) { ?>
                    <a href="<?= $arLink["LINK"] ?>"><?= $arLink["NAME"] ?></a>
                    <?$GLOBALS['brandmenuitems']++?>
				<? } ?>

				<? $prevIndex = $arLink["DEPTH_LEVEL"]; ?>

				<? endforeach; ?>
                </ul>
                <div class="tri-menu-wrap">
                    <div id="header-menu">
                        <a class="btn" href="/sertifikat_prod/"><span>Сертификаты</span></a>
                        <a class="btn" href="/contact-us/"><span>Контакты</span></a>
                        <a class="btn" href="/payment-delivery/"><span>Оплата и доставка</span></a>

                    </div>
                </div>
                <div class="pull-right">
                    <div class="btn-group lk-block">
                        <button type="button" class="btn dropdown-toggle gradiented" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user icon"></i>
                            <span class="hidden-md hidden-sm hidden-xs">&nbsp;&nbsp;Личный кабинет&nbsp;</span>
                            <span class="fa fa fa-angle-down caretalt"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/auth/"><i class="fa fa-sign-in fa-fw dropdown-menu-icon"></i>&nbsp;&nbsp;Авторизация</a>
                            </li>
                            <li><a href="/auth/registration//"><i class="fa fa-pencil fa-fw dropdown-menu-icon"></i>&nbsp;&nbsp;Регистрация</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="btn-group side-one gradiented">
                    <a class="btn" href="/wishlist/" id="wishlist-total">
                        <i class="fa fa-heart icon"></i>&nbsp;&nbsp;
                        <?$wasCook = htmlspecialchars($_COOKIE['wishPersona'],3);
                        if($wasCook) {
                            $cookArr = explode(',', $wasCook);
                            $count = count($cookArr);
                        } else { $count = 0;} ?>
                        <span class="badge"><?=$count?></span></a>
                </div>
            </div>
        </div>