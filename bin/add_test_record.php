<?php


// get db connection info
include_once( 'db.php' );

// make the connection
$con = make_mysql_connection();

// insert test record
$result = mysql_query( "INSERT INTO test (field1, field2, field3) VALUES ('Peter', 'Griffin', '35')" );
// $result = mysql_query( "SELECT * FROM test" );

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

// close mysql connection
close_mysql_connection( $con );

?>

<h1> Trying to insert a test record. </h1>

<h2> Query = "INSERT INTO test (field1, field2, field3) VALUES ('Peter', 'Griffin', '35')" </h2>

<p> result =  <?php echo $result; ?> </p>