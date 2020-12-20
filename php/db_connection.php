<?php

	Define('SERVER','localhost');
	Define('USERNAME','root');
	Define('PASS','');
	Define('DATABASE','fatwa');
	
	function open_connection()
	{
		$connection = mysqli_connect(SERVER,USERNAME,PASS,DATABASE);

		if(mysqli_connect_errno())
		{
			$errorMessage = "Database connection failed : ". mysqli_connect_error() . " and mysql error number : ".mysqli_connect_errno();
			exit($errorMessage);
		}
		return $connection;
	}
	
	
	function close_connection($connection)
	{
		if(isset($connection))
		{
			mysqli_close($connection);
		}
		
	}



?>