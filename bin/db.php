 <?php

// db connection info
$servername = "127.0.0.1";
$database = "servicesofamerica";
$username = "root";
$password = "";
$con = null;

function make_mysql_connection() {
	global $con, $database;
	
	$con = mysql_connect( "127.0.0.1", "root" );
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	// echo 'Connected successfully. Selecting database ' . $database;
	
	mysql_select_db( $database, $con );
	
	return $con;
}

function close_mysql_connection( $con ) {
	mysql_close($con);
}




?>
