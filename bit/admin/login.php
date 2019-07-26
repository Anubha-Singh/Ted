
<!DOCTYPE html>
<head>
<title>Admin login Page</title>
<? php include ('link.php')?>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<header>
<div class="container center-div shadow">
<div class="heading text-center text-dark" >ADMIN LOGIN PAGE </div>
<div class="container row d-flex flex-row justify-content-between">
<div class="admin-form shadow p-2">
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="form-group">
<label>Email Id</label>
<input type="text" name="email" value=" " class="form-control" autocomplete="off">
</div>
<div class="form-group">
<label>Password</label>
<input type="text" name="paas" value=" " class="form-control" autocomplete="off">
</div>
<input type="submit" class="btn btn-success" name="submit">
</form>

</div>
</div>
</div>

</body>
</html>
<?php
include('connection.php');

$email= $password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email= test_input($_POST["email"]);
  $password = test_input($_POST["paas"]);
  $sql = "  SELECT * FROM admin ";
  if($res= mysqli_query($conn, $sql))
  {while($row=mysqli_fetch_assoc($res))
	  {
		  if($row["EMAIL"]==$email)
		    {if($row["PASSWORD"]==$password)
             header('location:admin.php');
		     }
		 else
		    { echo "<div class='error'>Invalid Input</div>";
		  
	        }
  
}
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>