<?php

/* No direct access to this file */
if (!defined("WHMCS")) {
	die("This file cannot be accessed directly");
	}
	
/* Sets default server ports & other info for provisioning module */
function ispconfig3_MetaData() {
  return array(
		'DisplayName' => 'ISPConfig 3', // Display name for module
		'APIVersion' => '1.1', // API version 1.1 preferred over version 1.0
		'RequiresServer' => true, // Requires a server to be configured in WHMCS
		'DefaultNonSSLPort' => '8080', // Control Panel non-SSL port
		'DefaultSSLPort' => '8080', // Control Panel SSL port
		);
}

/* Defines the configuration options for WHMCS product module settings tab */
function ispconfig3_ConfigOptions() {
	$configarray = array(
		'Config Option 1' => array(
		  'Description' => 'First config option.'
		  ),
		'Config Option 2' => array(
		  'Description' => 'Second config option.'
		  ),
		'Config Option 3' => array(
		  'Description' => 'Third config option.'
		  ),
		'Config Option 4' => array(
		  'Description' => 'Fourth config option.'
		  )
		);
		
	return $configarray;

}

?>
