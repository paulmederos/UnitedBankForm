<?php


// get db connection info
include_once( 'db.php' );

// make the connection
$con = make_mysql_connection();

// insert test record
mysql_query( "INSERT INTO form VALUES ()" );
$result = mysql_query( "SELECT MAX(id) FROM form" );
// $result = mysql_query( "SELECT * FROM test" );

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}
else { 
	$row = mysql_fetch_row( $result );
	
	// print out the id of the row just inserted...
	echo $row[0];
}

// close mysql connection
close_mysql_connection( $con );

?>