<?php
	include 'config.php';
	include 'connect-to-db.php';
	
	session_start();
	if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
	{
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordRepeat']))
		{
			$User = ($_POST['username']);
			$Pass = ($_POST['password']);
			$PassRep = ($_POST['passwordRepeat']);
			$impossible_time = "0001-0-01T01:00:00";
			$encrypt = strtoupper(hash("sha512", "$Pass"));	
			
			$link = "register.php?";
			
			if($Pass != $PassRep) // Check Password
			{
				$link .= "pass_rep_error=Die Passwörter müssen gleich sein!";
			}
			else
			{
				if(strlen($User) < 5 || strlen($User) > 16) // USERNAME CHECK
				{
					if(strlen($link) > 13) $link .= "&";
						$link .= "user_error=Dein Benutzername ist zu kurz!";
				}
				else
				{
					if(strlen($Pass) < 8 || strlen($Pass) > 16) //PASSWORD CHECK
					{
						if(strlen($link) > 13) $link .= "&";
						$link .= "pass_error=Dein Passwort ist zu kurz!";
					}
					else // CHECK ACCOUNT EXSIST
					{
						$sql = mysql_query("SELECT * FROM `".$database_name."`.`account` WHERE Name='".$User."'",$db_handle);
						$row = mysql_num_rows($sql);
						
						if($row != 0)
						{
							if(strlen($link) > 13) $link .= "&";
							$link .= "user_error=Benutzername wird bereits benutzt.";
						}
					}
				}
			}
			
			if(strlen($link) == 13)
			{                        	
				mysql_query("INSERT INTO `".$database_name."`.`account` (`AccountId`, `Authority`, `LastCompliment`, `LastSession`, `Name`, `Password`) VALUES (NULL, '0', '$impossible_time', '0','$User', '$encrypt')",$db_handle) || die(mysql_error());
				
				$_SESSION['username'] = $User;
				$_SESSION['password'] = $Pass;
				
				header("location:/news/index/");
			}
			else
			{
				header("location:".$link);
			}
		}
		else
		{
			include '/user/register/index.php';
		}
	}
	else 
	{
		header("location:/news/index/");
	}
?>