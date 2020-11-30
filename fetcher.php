<?php
	//($_POST);
	
	$itemdescr = $_GET['senddata'];
	
	# Connecting Host and database 
	$conn = mysqli_connect("localhost","root","","ledgerdb") or die(mysql_error());

	$str = "SELECT * FROM products WHERE itemdescr='$itemdescr'";
	
	
	$query = mysqli_query($conn,$str);
	if (mysqli_num_rows($query)==1){
		echo json_encode(mysqli_fetch_assoc($query));
	}else{
		echo 0;
	}
	
?>