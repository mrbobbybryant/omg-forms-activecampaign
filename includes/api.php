<?php
namespace OMGForms\ActiveCampaign\Settings;

use OMGForms\ActiveCampaign\Helpers;

function save_form_as_activecampaign( $result, $args, $form ) {
	if ( $form[ 'form_type' ] === 'activecampaign' ) {

		$ac_url = get_option( 'activecampaign_api_url' );
		$ac_key = get_option( 'activecampaign_api_key' );

		$ac = new \ActiveCampaign( $ac_url, $ac_key );

		$contact = Helpers\prepare_activecampaign_form_fields( $args );

		$contact = Helpers\maybe_set_list_name( $contact, $form, $ac );

		$contact = apply_filters( 'omg-form-activecampaign-pre-save', $contact, $args, $form );

		$contact_sync = $ac->api("contact/sync", $contact);

		if ( 1 !== $contact_sync->success ) {
			$result = new \WP_Error(
				'omg_form_activecampaign_fail',
				'Activecampaign Error: Failed to add user to list.',
				array( 'status' => 400, 'error' => $contact_sync )
			);
		} else {
			$result = true;
		}
	}

	return $result;
}
add_filter( 'omg_forms_save_data', __NAMESPACE__ .  '\save_form_as_activecampaign', 10, 3 );