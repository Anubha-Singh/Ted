<?php 
session_start();
?>
<!Doctype html>
<html lang="en-Us">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
<title>dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/main5.css" type="text/css">
</head>
<body
<?php include('connection.php') ?>
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top flex-md-nowrap p-0 shadow">
<a href="#" class="navbar-brand col-sm-3 col-md-2 mr-0" >TEDXBITSINDRI </a>
<input type="text" placeholder="  Search" class="form-control form-control-dark w-100 "  aria-label="Search">
<ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Logout</a>
    
  </ul>
</nav>
</header>
<main role="main">
<div class="container-fluid">
<div class="row">
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link active" href="#" >
<span data-feather="home"></span>
Dashboard<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link " href="Post.php" >
<span data-feather="home"></span>
POSTS<span class="sr-only">Recent posts</span></a></li>
<li class="nav-item">
<a class="nav-link " href="#" >
<span data-feather="home"></span>
TEAM<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link " href="news.php" >
<span data-feather="home"></span>
Post Images<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link " href="#" >
<span data-feather="home"></span>
Reports<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link" href="#" >
<span data-feather="home"></span>
Integrations<span class="sr-only">(current)</span></a></li>
</ul>
<h6 class="sidebar-heading  text-muted px-3 pt-4"><span>SAVED REPORTS</span></h6>
<ul class="nav flex-column justify-content-between">
<li class="nav-item">
<a class="nav-link " href="#" >
<span data-feather="home"></span>
Current month<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link " href="#" >
<span data-feather="home"></span>
Last quarter<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link " href="#" >
<span data-feather="home"></span>
Social engagement<span class="sr-only">(current)</span></a></li>
<li class="nav-item">
<a class="nav-link " href="#" >
<span data-feather="home"></span>
Year-end sale<span class="sr-only">(current)</span></a></li>
</ul>
</div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>