 <?php

// $request_data = $_REQUEST;

//$row_id = 


include_once( 'db.php' );

// make the connection
$con = make_mysql_connection();

$column_names = array_keys ( $_POST );

// var_dump($_POST);

// build query 
$sql = "UPDATE `form` SET ";

$col_count = 0;
foreach( $column_names as $col ) {
	
	if( $col == 'id' ) {
		// do nothing
	}
	else {
		if( $col_count > 0 )
			$sql .= ', ';
		$sql .= "$col = '" . $_POST[ $col ] . "'";
	
		// make sure the commas are going in correctly
		$col_count++;
	}
}

$sql .= " WHERE id = " . $_POST['id'];

// run the query
mysql_query( $sql );

// echo "Update Table SQL = $sql";

// close mysql connection
close_mysql_connection( $con );




?>
