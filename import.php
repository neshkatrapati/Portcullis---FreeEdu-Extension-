
<?php
	require_once '../lib/mod_lib.php';
	$keys = getConfigKeys(getAuthToken("portcullis"));
	if(!array_key_exists('dbname', $keys) || !array_key_exists('dbpass', $keys) 
	|| !array_key_exists('dbuser', $keys))
	{
		notifyerr("<b >Module Not Configured Properly!</b>");
		redirect("?m=modules");
	}
	
?>