<?php

// RoundCube plugin authres_status default settings
//
// If you wish to protect certain variables to be overriden by the user, add them to 
// dont_override in your main config/config.inc.php
//
// Set to true to enable authentication result column in message list, default false
$config['enable_authres_status_column'] = {enable_authres_status_column};

// Set to true to use internal DKIM verifier, default false
// (only when a signature sfound but no auth. results header)
//$config['use_fallback_verifier'] = false;

// Set the statuses that should be shown
// 
// Available statuses:
//	STATUS_NOSIG -> Show an icon for emails without a signature
//	STATUS_NORES -> Show an icon for emails with a signature but no authentication results header
//	STATUS_PASS  -> Show an icon if all signatures have passed validation
//	STATUS_PARS  -> Show an icon if at least one signature passed validation
//	STATUS_THIRD -> Show an icon for third party signatures
//	STATUS_WARN  -> Show an icon when the signature temporary failed
//	STATUS_FAIL  -> Show an icon when the signature permanently failed
//	STATUS_ALL   -> Show an icon for all statuses
//
// statuses should be prefixed by 'authres_status::'
//
// default value: authres_status::STATUS_ALL & ~authres_status::STATUS_NOSIG
//
//$config['show_statuses'] = authres_status::STATUS_ALL & ~authres_status::STATUS_NOSIG;

// To only show authentication results from mta's you trust, add their authserv-id's here
//$config['trusted_mtas'] = array('your.mta.hostname');
