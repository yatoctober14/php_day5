<?php

$connection = mysqli_connect('localhost','root','','fatwa');

		if(mysqli_connect_errno())
		{
			$errorMessage = "Database connection failed : ". mysqli_connect_error() . " and mysql error number : ".mysqli_connect_errno();
			exit($errorMessage);
		}
		
		$qurey = "SELECT * FROM specialize";
		
		$results = mysqli_query($connection, $qurey);
		if($results == false)
		{
			exit ("query failed may be your syntax is wrong");
		}		
		echo var_dump($results);
		$count = mysqli_num_rows($results);
		//echo $count;
		
		// $records = mysqli_fetch_row($results);
		// echo var_dump($records);
		// echo "<br>";
		// echo "$records[0], $records[1], $records[2]"."<br>";
		
		// for($i=0; $i<$count;$i++)
		// {
			// $record = mysqli_fetch_row($results);
			// echo "<br>";
			// echo "$record[0], $record[1], $record[2]"."<br>";
		// }
		
		// for($i=0; $i<$count;$i++)
		// {
			// $record = mysqli_fetch_assoc($results);
			// echo "<br>";
			// echo "{$record["id"]}, {$record["name_ar"]}, {$record["name_en"]}"."<br>";
		// }
		
		while($record = mysqli_fetch_assoc($results))
		{
			echo "<br>";
			echo "{$record["id"]}, {$record["name_ar"]}, {$record["name_en"]}"."<br>";
		}
		
		mysqli_free_result($results);
		
		


mysqli_close($connection);




?>