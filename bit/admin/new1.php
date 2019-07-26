<?php
session_start();
$con= mysqli_connect("localhost" ,"root", "", "ted");
if($con)
{
	echo " connection successful" ;
}
else{
	echo "no connection" ;
}


	
	$sql = "  SELECT * FROM admin  ";
	if($res= mysqli_query($con, $sql) ){

	while( $row=mysqli_fetch_assoc($res))
	{
	   if($row["EMAIL"]=="admin")
	   {
		   echo "login successful";
		   header('location:admin.php');
	   }
	   else
		   echo "login failed";
	
		
	}
	mysqli_free_result($res);
	}
	mysqli_close($con);
	
	

?>