<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
<?php
include('admin/connection.php');

$email = $password = $password_w =$msg=$emailErr=$checkbox="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
  $password = test_input($_POST["psw"]);
  $pwd= md5($password);
  $password_w=test_input($_POST["psw-repeat"]);
  $checkbox=isset($_POST['check']);
  $pwd_w=md5($password);
  if($pwd !=$pwd_w)
	$msg="<div class='error'>Password didn't match.Please Enter again</div>";
  $sql="INSERT INTO `login` (`Email`, `Password`) VALUES ('$email', '$pwd') ";
  
  $res= mysqli_query($conn, $sql);
 
  header('location:index.php');
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
	  <div class="mail">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <span class="error"><?php echo $emailErr;?></span>
	  </div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <div class="pass">
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <?php echo $msg; ?>
	  </div>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>



<script src="js/signup.js"></script>

</body>
</html>