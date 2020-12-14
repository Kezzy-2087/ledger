<?php 
	extract($_POST);

	# Connecting Host and database 
	$conn = mysqli_connect("localhost","root","","ledgerdb") or die(mysql_error());
	 
	$str = "SELECT * FROM journal ORDER BY timeled ASC";
	$query = mysqli_query($conn,$str);
	if (mysqli_num_rows($query)>0){
		$tbl="";
		$sno = 0;
		while($row=mysqli_fetch_array($query)){
			$sno++;
			$dateled			= $row['dateled'];
			$timeled			= $row['timeled'];
			$itemdecsr			= $row['itemdecsr'];
			$particulars		= $row['particulars'];
			$quantitee 			= $row['quantitee'];
			$price 				= $row['price'];
			$trantype 			= $row['trantype'];
			$cusname 			= $row['cusname'];
			
			$tbl.="<tr>";
				$tbl.="<td style='width:50px;'>$sno</td>";
				$tbl.="<td style='width:70px;'>$Date</td>";
				$tbl.="<td style='width:70px;'>$timeled</td>";
				$tbl.="<td style='width:100px;'>$Description</td>";
				$tbl.="<td style='width:200px;'>$Particulars</td>";
				$tbl.="<td style='width:60px;'>$Transaction Type</td>";
				$tbl.="<td style='width:80px;'>$DR</td>";
				$tbl.="<td style='width:80px;'>$CR</td>";
				$tbl.="<td style='width:100px;'>$Balance</td>";
			$tbl.="</tr>";	
		}
		$tbl = trim($tbl);
		echo $tbl;
	}else{
		echo 0;
	}
?>