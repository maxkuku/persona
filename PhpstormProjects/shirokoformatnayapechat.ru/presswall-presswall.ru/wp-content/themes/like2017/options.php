<?

add_action( 'admin_menu', 'phonemail_menu' );


function phonemail_menu() {
	add_options_page( 'Телефонимэйл опции', 'Телефонимэйл', 'manage_options', 'phonemail', 'phonemail_options' );
	if ( is_admin() ){ // admin actions
		add_action( 'admin_menu', 'phonemail_menu' );
		add_action( 'admin_init', 'register_mysettings' );
	} else {
		// non-admin enqueues, actions, and filters
	}
}


function phonemail_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">
	<h1>Телефонимэйл</h1>';
	echo '<p>Здесь можно настроить контакты: телефон и имэйл.</p>';
	echo '<form method="post" action="options.php"> ';
	settings_fields( 'myoptiongroup' );
	do_settings_sections( 'myoptiongroup' );?>
	<table class="form-table table table-striped">
		<tr valign="top">
			<th scope="row">Телефон для отображения в шапке и т.д.</th>
			<td><input type="text" name="phone" size="60" value="<?php echo esc_attr( get_option('phone') ); ?>" /></td>
		</tr>

		<tr valign="top">
			<th scope="row">E-mail</th>
			<td><input type="text" name="email" size="60" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
		</tr>

		<tr valign="top">
			<th scope="row">Копирайт подвала</th>
			<td><input type="text" size="60" name="footer_copyright" value="<?php echo esc_attr( get_option('footer_copyright') ); ?>" /></td>
		</tr>
	</table>
	<?submit_button();
	echo '</form>';
	echo '</div>';
}


function register_mysettings() { // whitelist options
	register_setting( 'myoptiongroup', 'phone' );
	register_setting( 'myoptiongroup', 'email' );
	register_setting( 'myoptiongroup', 'footer_copyright' );
}