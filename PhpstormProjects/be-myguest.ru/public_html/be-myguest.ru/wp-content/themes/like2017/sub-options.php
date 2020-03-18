<?

add_action( 'admin_menu', 'phonemail_menu' );


function phonemail_menu() {
	add_options_page( 'Адрес соцсетей опции', 'Адрес соцсетей', 'manage_options', 'phonemail', 'phonemail_options' );
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
	<h1>Соцсети</h1>';
	echo '<p>Здесь можно настроить соцсети.</p>';
	echo '<form method="post" action="options.php"> ';
	settings_fields( 'myoptiongroup' );
	do_settings_sections( 'myoptiongroup' );?>
	<table class="form-table table table-striped">
		<tr valign="top">
			<th scope="row">ВК</th>
			<td><input type="text" name="vk1" size="60" value="<?php echo esc_attr( get_option('vk1') ); ?>" /></td>
		</tr>

		<tr valign="top">
			<th scope="row">Фэйсбук</th>
			<td><input type="text" name="facebook1" size="60" value="<?php echo esc_attr( get_option('facebook1') ); ?>" /></td>
		</tr>

		<tr valign="top">
			<th scope="row">Инстаграм</th>
			<td><input type="text" size="60" name="instagram1" value="<?php echo esc_attr( get_option('instagram1') ); ?>" /></td>
		</tr>
	</table>
	<?submit_button();
	echo '</form>';
	echo '</div>';
}


function register_mysettings() { // whitelist options
	register_setting( 'myoptiongroup', 'vk1' );
	register_setting( 'myoptiongroup', 'facebook1' );
	register_setting( 'myoptiongroup', 'instagram1' );
}