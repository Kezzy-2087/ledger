<?php
	//($_POST);
	
	$itemdescr = $_GET['senddata'];
	//echo $itemdescr;
	# Connecting Host and database 
	$conn = mysqli_connect("localhost","root","","ledgerdb") or die(mysql_error());

	$str = "SELECT * FROM products WHERE itemdescr LIKE '%$itemdescr%'";
	//$str = "SELECT * FROM products";
	$query = mysqli_query($conn,$str);
	
	if (mysqli_num_rows($query)>0){
		echo json_encode(mysqli_fetch_array($query));
	//	echo 1;
	}else if(mysqli_num_rows($query)==0){
		echo 0;
	}
?>