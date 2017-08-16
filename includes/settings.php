<?php
namespace OMGForms\ActiveCampaign\Settings;

function setup() {
	add_action( 'omg-form-settings-hook', __NAMESPACE__ . '\register_form_settings' );
	add_action( 'admin_init', __NAMESPACE__ . '\display_activecampaign_setting_fields' );
}

function display_activecampaign_setting_fields() {
	add_settings_section( 'section', esc_html__( 'ActiveCampaign Settings' ), null, 'activecampaign_options' );

	add_settings_field(
		'activecampaign_api_key',
		'ActiveCampaign API Key',
		__NAMESPACE__ . '\display_activecampaign_key_element',
		'activecampaign_options',
		'section'
	);

	add_settings_field(
		'activecampaign_api_url',
		'ActiveCampaign URL',
		__NAMESPACE__ . '\display_activecampaign_url_element',
		'activecampaign_options',
		'section'
	);

	register_setting( 'activecampaign-section', 'activecampaign_api_key' );
	register_setting( 'activecampaign-section', 'activecampaign_api_url' );

}

function display_activecampaign_key_element() {
	?>
	<input
		type="text"
		size="55"
		name="activecampaign_api_key"
		value="<?php echo get_option( 'activecampaign_api_key' ); ?>"
	/>
	<?php
}

function display_activecampaign_url_element() {
	?>
	<input
		type="text"
		size="55"
		name="activecampaign_api_url"
		value="<?php echo get_option( 'activecampaign_api_url' ); ?>"
	/>
	<?php
}

function register_form_settings() {
	settings_fields( 'activecampaign-section' );
	do_settings_sections( 'activecampaign_options' );
}