<?php
	include 'config.php';
	include 'connect-to-db.php';
	
	session_start();
	if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
	{
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$UserLog = mysql_real_escape_string(($_POST['username']));
			$PassLog = strtoupper(hash("sha512", mysql_real_escape_string(($_POST['password']))));
			
			$sql = mysql_query("SELECT * FROM `".$database_name."`.`account` WHERE Name='".$UserLog."' AND Password='".($PassLog)."'",$db_handle) or die(mysql_error());
			$row = mysql_num_rows($sql);
			
			if($row == 1)
			{
				$db_field = mysql_fetch_array($sql);

				if($PassLog == $db_field["Password"])
				{
					$_SESSION['username'] = $UserLog;
					$_SESSION['password'] = $PassLog;
					
					header("location:index.php");
				}
				else
				{
					header("location:index.php?login_error=true");
				}
			}
			else
			{
				header("location:index.php?login_error=true");
			}
		}
		else
		{
			header("location:/news/index/");
		}
	}
	else
	{
		header("location:/index.php");
	}
?>