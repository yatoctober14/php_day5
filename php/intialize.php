<?php
	
	Define('DOMANNAME',"http://".$_SERVER['HTTP_HOST']."/php_day5/");
	
	function at_public()
	{
		
		return DOMANNAME."public/";
	}
	
	function at_root()
	{
		
		return DOMANNAME;
	}

?>