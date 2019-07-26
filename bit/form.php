<?php

$name = $email = $skill = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $skill= test_input($_POST["skill"]);
  $image=test_input($_POST["file"]);
  $image_w=md5($image);
  $sql="INSERT INTO `Register` (`NAME`, `EMAIL`, `SKILL`, `FILE`) VALUES ('$name', '$email', '$skill', '$image_w');";
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

<h2 class="heading">JOIN OUR TEAM</h2>
<form class="forms" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
 
  <select class="custom-select custom-select-lg mb-3" name="skill" >
  <option selected>YOUR SKILL</option>
  <option value="Photoshop">Photoshop</option>
  <option value="Front End">Front End</option>
  <option value="Back End">Back End</option>
  <option value="Blogging">Blogging</option>
  <option value="Anchoring">Anchoring</option>
</select>
<br><br>
<div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

  
  