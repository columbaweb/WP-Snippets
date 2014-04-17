<?php

// Default options values
$cb_options = array(
	'contacts_phone' => '',	
	'contacts_email' => '',
	'contacts_address' => '',
	'social_twitter' => '',
	'social_facebook' => '',
	'social_google' => '',
	'social_linkedin' => '',
);

if ( is_admin() ) : // Load only if we are viewing an admin page

# Register settings and call sanitation functions
	function cb_register_settings() {
		register_setting( 'cb_theme_options', 'cb_options', 'cb_validate_options' );
	}
	add_action( 'admin_init', 'cb_register_settings' );

# Add theme options page to the addmin menu
	function cb_theme_options() {
		add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'cb_theme_options_page' );
	}
	add_action( 'admin_menu', 'cb_theme_options' );

# Function to generate options page
	function cb_theme_options_page() {
		global $cb_options, $cb_categories, $cb_layouts;

		if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

		<div class="wrap" id="options-page">
			<?php 
# Display page name and an icon if it has been provided
			screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>"; ?>

			<?php if ( false !== $_REQUEST['updated'] ) : ?>
				<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
			<?php endif; // If the form has just been submitted, this shows the notification ?>

			<form method="post" action="options.php">
				<?php $settings = get_option( 'cb_options', $cb_options ); ?>

				<?php settings_fields( 'cb_theme_options' );
				/* This function outputs some hidden fields required by the form,
				including a nonce, a unique number used to ensure the form has been submitted from the admin page
				and not somewhere else, very important for security */ ?>
				<fieldset>
					<legend>Contact Details</legend>
<!-- contact phone -->
					<label for="contacts_phone">Phone number:</label>
					<input id="contacts_phone" name="cb_options[contacts_phone]" type="text" value="<?php  esc_attr_e($settings['contacts_phone']); ?>" />

<!-- email address -->
					<label for="contacts_email">Email address:</label>
					<input id="contacts_email" name="cb_options[contacts_email]" type="text" value="<?php  esc_attr_e($settings['contacts_email']); ?>" />           

<!-- address -->
					<label for="contacts_address">Address:</label>
					<textarea id="intro_text" name="cb_options[contacts_address]" rows="5" cols="30"><?php echo stripslashes($settings['contacts_address']); ?></textarea>          
				</fieldset>

				<fieldset>
					<legend>Social Links</legend>
<!-- twitter -->
					<label for="social_twitter">Twitter:</label>
					<input id="social_twitter" name="cb_options[social_twitter]" type="text" value="<?php  esc_attr_e($settings['social_twitter']); ?>" />	

<!-- facebook -->
					<label for="social_facebook">Facebook:</label>
					<input id="social_facebook" name="cb_options[social_facebook]" type="text" value="<?php  esc_attr_e($settings['social_facebook']); ?>" />	              

<!-- google -->
					<label for="social_google">Google+:</label>
					<input id="social_google" name="cb_options[social_google]" type="text" value="<?php  esc_attr_e($settings['social_google']); ?>" />	

<!-- linked in -->
					<label for="social_linkedin">Linked In:</label>
					<input id="social_linkedin" name="cb_options[social_linkedin]" type="text" value="<?php  esc_attr_e($settings['social_linkedin']); ?>" />	
				</fieldset>	

				<fieldset class="submit"><input type="submit" class="button-primary" value="Save Options" /></fieldset>
			</form>
		</div>

	<?php
	}

	function cb_validate_options( $input ) {
		global $cb_options;

		$settings = get_option( 'cb_options', $cb_options );
		$input['contacts_phone'] = wp_filter_nohtml_kses( $input['contacts_phone'] );
		$input['contacts_email'] = wp_filter_nohtml_kses( $input['contacts_email'] );
		$input['contacts_address'] = wpautop( $input['contacts_address'] );
		$input['social_twitter'] = wp_filter_nohtml_kses( $input['social_twitter'] );
		$input['social_facebook'] = wp_filter_nohtml_kses( $input['social_facebook'] );
		$input['social_google'] = wp_filter_nohtml_kses( $input['social_google'] );
		$input['social_linkedin'] = wp_filter_nohtml_kses( $input['social_linkedin'] );

		return $input;
	}

endif;  // EndIf is_admin()
