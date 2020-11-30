<?php

extract($_POST);
$dateled= 	strtoupper($dateled);


$conn = mysqli_connect("localhost","root","","ledgerdb") or die(mysql_error());

$str = "SELECT dateled FROM ledgerinfo WHERE dateled ='$dateled'";
$query = mysqli_query($conn,$str);
if (mysqli_num_rows($query)==1){
    echo "Entry Successful - Note: date exists";
}else{
    # Insert record as a new record
   $str = "INSERT INTO ledgerinfo(dateled,timeled,itemdescr,particulars,quantity,price,trantype,cusname) VALUES 
            ('$dateled','$timeled','$itemdescr','$particulars','$quantity','$price','$trantype','$cusname')";
             echo "Entry Successful";
	}
    
        $query = mysqli_query($conn,$str);
?>