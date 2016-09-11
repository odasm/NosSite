<?php

	$db_handle = mysql_connect($database_hoster, $database_user, $database_password) or die(mysql_error());
	mysql_select_db($database_name , $db_handle);


?>