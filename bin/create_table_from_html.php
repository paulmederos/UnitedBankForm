<?php


// get db connection info
require_once( 'db.php' );

// make the connection
make_mysql_connection();

// insert test record
mysql_query( "INSERT INTO test (field1, field2, field3) VALUES ('Peter', 'Griffin', '35')" );

// close the connection
close_mysql_connection();

?>

<h1> Trying to insert a test record. </h1>

<h2> Query = "INSERT INTO test (field1, field2, field3) VALUES ('Peter', 'Griffin', '35')" </h2>