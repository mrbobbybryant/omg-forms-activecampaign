<?php

if ( !defined( 'OMG_FORMS_ACTIVECAMPAIGN_DIR' ) ) {
	define( 'OMG_FORMS_ACTIVECAMPAIGN_DIR', dirname( __FILE__ ) );
}

if ( !defined( 'OMG_FORMS_ACTIVECAMPAIGN_FILE' ) ) {
	define( 'OMG_FORMS_ACTIVECAMPAIGN_FILE', __FILE__ );
}

if ( file_exists( OMG_FORMS_ACTIVECAMPAIGN_DIR . '/vendor' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}

require_once OMG_FORMS_ACTIVECAMPAIGN_DIR . '/includes/settings.php';

\OMGForms\ActiveCampaign\Settings\setup();