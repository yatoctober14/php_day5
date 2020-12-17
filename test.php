<?php

$connection = mysqli_connect('localhost','root','','fatwa');

		if(mysqli_connect_errno())
		{
			$errorMessage = "Database connection failed : ". mysqli_connect_error . " and mysql error number : ".mysqli_connect_errno();
			exit($errorMessag);
		}
		


mysqli_close($connection);




?>