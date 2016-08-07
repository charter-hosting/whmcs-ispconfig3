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

function ispconfig3_CreateAccount($params) {

    /* The variables listed below are passed into all module functions */

    $serviceid = $params["serviceid"]; // Unique ID of the product/service in the WHMCS Database
    $pid = $params["pid"]; // Product/Service ID
    $producttype = $params["producttype"]; // Product Type: hostingaccount, reselleraccount, server or other
    $domain = $params["domain"];
	$username = $params["username"];
	$password = $params["password"];
    $clientsdetails = $params["clientsdetails"]; // Array of clients details - firstname, lastname, email, country, etc...
    $customfields = $params["customfields"]; // Array of custom field values for the product
    $configoptions = $params["configoptions"]; // Array of configurable option values for the product

    /* Product module option settings from ConfigOptions array above */
    $configoption1 = $params["configoption1"];
    $configoption2 = $params["configoption2"];
    $configoption3 = $params["configoption3"];
    $configoption4 = $params["configoption4"];

    /* Additional variables if the product/service is linked to a server */
    $server = $params["server"]; // True if linked to a server
    $serverid = $params["serverid"];
    $serverip = $params["serverip"];
    $serverusername = $params["serverusername"];
    $serverpassword = $params["serverpassword"];
    $serveraccesshash = $params["serveraccesshash"];
    $serversecure = $params["serversecure"]; // If set, SSL Mode is enabled in the server config

	/* Code to perform action goes here... */

	if ($successful) {
		$result = "success";
	} else {
		$result = "Error Message Goes Here...";
	}
	return $result;

}

function ispconfig3_TerminateAccount($params) {

	/* Code to perform action goes here... */

    if ($successful) {
		$result = "success";
	} else {
		$result = "Error Message Goes Here...";
	}
	return $result;

}

function ispconfig3_SuspendAccount($params) {

	/* Code to perform action goes here... */

    if ($successful) {
		$result = "success";
	} else {
		$result = "Error Message Goes Here...";
	}
	return $result;

}

function ispconfig3_UnsuspendAccount($params) {

	/* Code to perform action goes here... */

    if ($successful) {
		$result = "success";
	} else {
		$result = "Error Message Goes Here...";
	}
	return $result;

}

function ispconfig3_ChangePassword($params) {

	/* Code to perform action goes here... */

    if ($successful) {
		$result = "success";
	} else {
		$result = "Error Message Goes Here...";
	}
	return $result;

}

function ispconfig3_ChangePackage($params) {

	/* Code to perform action goes here... */

    if ($successful) {
		$result = "success";
	} else {
		$result = "Error Message Goes Here...";
	}
	return $result;

}

function ispconfig3_ClientArea($params) {

    # Output can be returned like this, or defined via a clientarea.tpl template file (see docs for more info)

	$code = '<form action="http://'.$serverip.'/controlpanel" method="post" target="_blank">
<input type="hidden" name="user" value="'.$params["username"].'" />
<input type="hidden" name="pass" value="'.$params["password"].'" />
<input type="submit" value="Login to Control Panel" />
<input type="button" value="Login to Webmail" onClick="window.open(\'http://'.$serverip.'/webmail\')" />
</form>';
	return $code;

}

function ispconfig3_AdminLink($params) {

	$code = '<form action=\"http://'.$params["serverip"].'/controlpanel" method="post" target="_blank">
<input type="hidden" name="user" value="'.$params["serverusername"].'" />
<input type="hidden" name="pass" value="'.$params["serverpassword"].'" />
<input type="submit" value="Login to Control Panel" />
</form>';
	return $code;

}

function ispconfig3_LoginLink($params) {

	echo "<a href=\"http://".$params["serverip"]."/controlpanel?gotousername=".$params["username"]."\" target=\"_blank\" style=\"color:#cc0000\">login to control panel</a>";

}

?>
