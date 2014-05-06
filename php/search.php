<?php

include 'DBclass.php';
$db = new DBclass();



if( isset($_GET['searchkey']) )
{
	$searchkey = $_GET['searchkey'];
	$sql = "SELECT * FROM products WHERE productName LIKE ('$searchkey')";
	
	$searchresutl = $db->query($sql);
	
}

?>