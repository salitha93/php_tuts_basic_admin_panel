<?php

	$dbhost = "localhost";
	$dbuser = "admin";
	$dbpass = "admin4321";
	$db 	= "php_tuts_basic_admin_panel";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	// Check connection 
	
	if($conn->connect_error){
		echo "Connection was failed";
	}
	
	// Remove this else code once database is connected otherwise everypage connected to database will show connection made on top. 
	
	else{
		
		echo "Connection made";
		
	}
?>

<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
