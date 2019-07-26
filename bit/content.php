<?php include('admin/connection.php')?>
 
<?php
    
	$title=$image=$description="";
	$sql = "  SELECT * FROM Post ORDER BY ID DESC LIMIT 1";
	if($res= mysqli_query($conn, $sql) ){

	while( $row=mysqli_fetch_assoc($res))
	{
	  
		$title=$row["Title"];
		$description=$row["Description"];
	

		
	}
	mysqli_free_result($res);
	}
	$qry = "  SELECT * FROM `imagepost`ORDER BY ID DESC LIMIT 1";
	if($rem= mysqli_query($conn, $qry) ){

	while( $ro=mysqli_fetch_assoc($rem))
	{
	  
		
		$image=base64_encode($ro["image"]);
		
	}
	mysqli_free_result($rem);
	}

	
	?>
   <div class="card" style="width: 35rem;">
   <div class="image">  
   <img src="images/infinity.jpg"class="card-img-top" alt="..." >
   </div>
   <span class="badge  badge-dark text-white">Coming Soon</span>
    <div class="card-body">
    <h1 class="card-header text-danger"><?php echo $title ;?></h1>
    <p class="card-text"><?php echo $description;?></p><a href="blog.php"> Read more</a>
  </div>
</div>