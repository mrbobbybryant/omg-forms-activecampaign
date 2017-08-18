<?php
namespace OMGForms\ActiveCampaign\Helpers;

function prepare_activecampaign_form_fields( $args ) {
	$fields = get_activecampaign_allowed_fields();

	return array_reduce( array_keys( $args ), function( $acc, $key ) use ( $fields, $args ) {
		$field_name = format_field_name( $key );

		if ( in_array( $field_name, $fields) ) {

			$acc[ $field_name ] = $args[ $key ];
		}
		return $acc;
	}, get_default_fields() );
}

function get_activecampaign_allowed_fields() {
	$fields = [
		'email',
		'first_name',
		'last_name',
		'tags',
		'phone',
		'orgname'
	];

	return apply_filters( 'omg-form-activecampaign-approved-fields', $fields );
}

function format_field_name( $field_key ) {
	return str_replace( 'omg-forms-', '', $field_key );
}

function get_default_fields() {
	$default = [];
	$default[ 'status' ] = 1;
	return $default;
}

function maybe_set_list_name( $contact, $form, \ActiveCampaign $ac ) {
	if ( ! isset( $form[ 'list_name' ] ) || empty( $form[ 'list_name' ] ) ) {
		return $contact;
	}

	$list = $ac->api("list/list_", [ "filters[name]" => $form[ 'list_name' ] ]);

	if ( ! isset( $list->http_code ) && 200 !== $list->http_code ) {
		return new \WP_Error(
			'omg_form_activecampaign_fail',
			'Activecampaign Error: Unable to find list.',
			array( 'status' => 400 )
		);
	}

	$list_id = $list->{'0'}->id;
	$contact[ "p[{$list_id}]" ] = $list_id;

	return $contact;
}