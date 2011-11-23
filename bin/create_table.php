 <?php

$request_data = $_REQUEST;

// var_dump( $_POST );

include_once( 'db.php' );

// make the connection
$con = make_mysql_connection();
// if (!$result) {
//     echo "Could not successfully run query ($sql) from DB: " . mysql_error();
//     exit;
// }


$column_names = array_keys ( $_POST );

// CREATE TABLE `test` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `field1` varchar(50) DEFAULT NULL,
//   `field2` varchar(50) DEFAULT NULL,
//   `field3` varchar(50) DEFAULT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

// build query 
$sql = "CREATE TABLE `form` ( `id` int(11) NOT NULL AUTO_INCREMENT";

foreach( $column_names as $col ) {
	$sql .= ", `$col` varchar(50) DEFAULT NULL";
}
	
$sql .= ", PRIMARY KEY (`id`) )";

echo "Create Table SQL = $sql";

// close mysql connection
close_mysql_connection( $con );


?>
