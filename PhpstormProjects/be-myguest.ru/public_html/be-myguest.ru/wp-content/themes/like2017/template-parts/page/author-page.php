<?php
/** template part for displaying page content in page.php */

if ( htmlspecialchars( $_REQUEST['send'], 3 ) && htmlspecialchars( $_REQUEST['agree'], 3 ) == "on" ) {
	$current_user = wp_get_current_user();

	$have_jurlico = get_user_meta( $current_user->ID, 'organization', false );

	if ( $have_jurlico && $org = htmlspecialchars($_REQUEST['jurlico'][0], 3 )):
		update_user_meta( $current_user->ID, 'organization', $org, "" );
	else:
		add_user_meta( $current_user->ID, 'organization', $org, true );
	endif;

	$have_phone = get_user_meta( $current_user->ID, 'phone', false );

	if ( $have_phone && $phone = htmlspecialchars($_REQUEST['phone'], 3 )):
		update_user_meta( $current_user->ID, 'phone', $phone, "" );
	else:
		add_user_meta( $current_user->ID, 'phone', $phone, true );
	endif;

}
?><div class="wrap un-flex author-cabinet-wrap">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'author-cabinet',
		'menu_class'     => 'author-cabinet',
		'depth'          => 1,
		'link_before'    => '<span class="link-text">',
		'link_after'     => '</span>',
	) );
	?>
</div><?

#TODO: remove this span
echo "<span style='display:none'>template template-parts page author-page</span>";?>
<article id="post-<?php the_ID(); ?>" <?php post_class("author-page"); ?> data-page="author-page">
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <div class="author">
		<?php
		the_content();
		$current_user = wp_get_current_user();
            ?>
		<?if( is_user_logged_in($current_user->ID) ){?>
            <p class="greeting">Ваш личный кабинет, <?=$current_user->user_nicename?></p>

            <?global $vars; pr($vars)?>

            <div class="author-wrap">
                <form action="<?=$_SERVER['REQUEST_URI']?>" method="get">
                    <div class="formwrap">
                <div id="fio">
                    <formgroup>
                        <label>Телефон <input id="phone" type="tel" name="phone" value="<?=get_user_meta($current_user->ID,'phone',true);?>" required/></label>
                        <label>ФИО <input id="fio" type="text" name="fio" readonly value="<?=$current_user->user_firstname?> <?=$current_user->user_lastname?>"/></label>
                        <label>E-mail <input id="email" type="email" name="email" value="<?=$current_user->user_email?>" readonly/></label>
                        <label>Адрес <input id="address" type="text" name="address" value="<?=get_user_meta( $current_user->ID, "address", true );?>"/></label>
                    </formgroup>
                </div>
                <div id="jurloco">
                    <formgroup>
                        <br><label for="jurloco"><input id="jurlico" type="radio" name="jurlico[]" value="fizlico"/> Физическое лицо </label><br/>
                        <br><label for="fizlico"><input id="fizlico" type="radio" name="jurlico[]" value="jurlico"/> Юридическое лицо </label><br/>
                        <br><label for="ip"><input id="ip" type="radio" name="jurlico[]" value="ip"/> Индивидуальный предприниматель </label><br/>
                        <br><label for="agree"><input id="agree" type="checkbox" name="agree" value="on" required/> Согласен с условиями </label><br/>
                    </formgroup>
                </div>
                    </div>



	            <div id="fiz-wrap" class="formwrap">
		            <formgroup>
			            <label for="many"><input id="many" type="checkbox" name="many" value="on" />
				            Могу проводить несколько экскурсий одновременно </label><br/>
			            <p>Данные для перевода</p>
			            <label>Р/с <input id="rs" type="text" name="rs"
			                            value="<?=get_user_meta( $current_user->ID, "user_rs", true );?>"/></label>
			            <label>Наименование банка <input id="bank_name" type="text" name="bank_name"
			                                 value="<?=get_user_meta( $current_user->ID, "bank_name", true );
			                                 ?>"/></label>
			            <label>К/с <input id="ks" type="text" name="user_ks" value="<?=get_user_meta(
					            $current_user->ID, "user_ks", true );?>"/></label>
		            </formgroup>
		            <formgroup>
			            <label>ФИО получателя <input id="fio_poluch" type="text" name="fio_poluch"
			                              value="<?=get_user_meta( $current_user->ID, "fio_poluch", true );?>"/></label>
			            <label>БИК банка <input id="bank_bik" type="text" name="bank_bik"
			                                             value="<?=get_user_meta( $current_user->ID, "bank_bik", true );
			                                             ?>"/></label>
			            <label>КПП банка <input id="kpp_bank" type="text" name="kpp_bank" value="<?=get_user_meta(
					            $current_user->ID, "kpp_bank", true );?>"/></label>
			            <label>ИНН банка <input id="inn_bank" type="text" name="inn_bank" value="<?=get_user_meta(
					            $current_user->ID, "inn_bank", true );?>"/></label>
		            </formgroup>
	            </div>


	                <div id="jur-wrap" class="formwrap">
		                <formgroup>
			                <p>Данные юрлица</p>
			                <label>ИНН/КПП <input id="innkpp" type="text" name="innkpp"
			                                  value="<?=get_user_meta( $current_user->ID, "innkpp", true );?>"/></label>
			                <label>Наименование <input id="jur_name" type="text" name="jur_name"
			                                                 value="<?=get_user_meta( $current_user->ID, "jur_name",
				                                                 true );
			                                                 ?>"/></label>
			                <label>Юридический адрес <input id="jur_addr" type="text" name="jur_addr"
			                                                value="<?=get_user_meta(
					                $current_user->ID, "jur_addr", true );?>"/></label>
		                </formgroup>
		                <formgroup>
			                <label>ФИО получателя <input id="fio_poluch" type="text" name="fio_poluch"
			                                             value="<?=get_user_meta( $current_user->ID, "fio_poluch", true );?>"/></label>
			                <label>БИК банка <input id="bank_bik" type="text" name="bank_bik"
			                                        value="<?=get_user_meta( $current_user->ID, "bank_bik", true );
			                                        ?>"/></label>
			                <label>КПП банка <input id="kpp_bank" type="text" name="kpp_bank" value="<?=get_user_meta(
					                $current_user->ID, "kpp_bank", true );?>"/></label>
			                <label>ИНН банка <input id="inn_bank" type="text" name="inn_bank" value="<?=get_user_meta(
					                $current_user->ID, "inn_bank", true );?>"/></label>
		                </formgroup>
	                </div>


                    <div class=""><button id="send_fio" type="button" name="send" value="Y">Изменить</div>
            </form>
            </div>
		<?}else{
			?>

                <p class="greeting">Если вы уже с нами <a href="/wp-admin">ВОЙТИ В ЛИЧНЫЙ КАБИНЕТ</a></p>


		<?}

		?>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
<div class="wrap un-flex author-menu-wrap">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'author-header',
		'menu_class'     => 'author-menu',
		'depth'          => 1,
		'link_before'    => '<span class="link-text">',
		'link_after'     => '</span>',
	) );
	?>
</div>