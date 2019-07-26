<?php
include('connection.php');

$id = $title = $description = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $id = test_input($_POST["id"]);
  $title = test_input($_POST["title"]);
  $description= test_input($_POST["description"]);
  
  
  $sql=" INSERT INTO `post` (`ID`, `Title`, `Description`) VALUES ('$id ','$title','$description')";
  $res= mysqli_query($conn, $sql);
  header('location:../index.php');
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 class="heading">Add Posts</h2>
<form class="forms" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Id :<input type="number" name="id">
  <br><br>
  Title: <input type="text" name="title">
  <br><br>
 

  Description:<textarea name="description" rows="20" cols="40"></textarea>
<br><br>
  <input type="submit" name="add" value="Add">  
</form>
