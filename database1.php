<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

	
	
$connection=mysqli_connect("localhost","root","","fyp");

if ( !$connection ) {
		die("Connection failed : " . mysql_error());
	}
	
	

?>