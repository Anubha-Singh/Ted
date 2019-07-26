<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN</title>
<link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
<?php
include('admin/connection.php');

$email = $password =$emailErr=$checkbox="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
  $password = test_input($_POST["psw"]);
  $pwd= md5($password);
  
  $checkbox=isset($_POST['check']);
  $sql="SELECT * FROM  login ";
  if($res= mysqli_query($conn, $sql) ){
  while($row=mysqli_fetch_assoc($res))
  {      
           echo $row["Email"]; 
	  if($row["Email"]==$email)
	  { if($row["Password"]==$pwd)
		  {
			  header('location:index.php');
              
		  }
	  }
	  else 
	  {
		  echo "login failed";
	  }
  }
  mysqli_free_result($res);
  }
  mysqli_close($conn);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/login.png" style="width:80px;height:120px;" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>Email id</b></label>
      <input type="text" placeholder="Enter Email Id" name="email"  autocomplete= "off" required><span class="error"><?php echo $emailErr ?></span>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" autocomplete= "off" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script src="js/login.js"></script>

</body>
</html>