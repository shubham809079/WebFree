<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js">
</script>	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<title>User HomePage</title>
<style type="text/css">

	a,p{ 	
		color:white;
		}
		.row{
		margin-top:40px; 
		}
		.crousel{
		margin-top:40px;
		}
		
		

</style>
</head>

<body>


   <nav class="navbar navbar-expand" style="background-color:#6a7f96;">
  <a class="navbar-brand" href="#">WebFree</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="userhome.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="series.html">TV Series</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MOVIE
		  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="movies.html">Bollywood</a>
          <a class="dropdown-item" href="hollymovie.html">Hollywood</a>
		  <a class="dropdown-item" href="#">Telugu</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Trending</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.html">Signout</button></a>
    </form>
  </div>
</nav>


<div class="crousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Images/dede.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Images/misson.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Images/dhamal.png" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="../Images/junglee.png" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="../Images/super.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 
</div>
</div>
<div class="row top-buffer">


<div class="container">
<h2>popular in web series </h2>

<div class="row">
    <?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	
 $con=new mysqli($servername, $username, $password, $dbname);
 $query="SELECT * FROM `video`";
 $run=mysqli_query($con,$query);
 while($row=mysqli_fetch_assoc($run))
 {
 ?>
 <div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<!--<img src="../Images/sacred.webp" class="card-img-top" alt="..." style="width:18rem; height:280px;">-->
	<video width="200" height="280" controls>
	<source src="uploadVideo/<?php echo $row['video'] ?>" type="video/mp4">
  
	Your browser does not support the video tag.
	</video>
	<div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ?></h5>
	<h5 class="card-title"><?php echo $row['rating'] ?></h5>
    <h5 class="card-title"><?php echo $row['duration'] ?></h5>
	</div>
	</div>
	</div>
 
 <?php
 
   
 }  
?>
	



<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/familyman.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Family Man</h5>
    <a href="../video/series/family.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/kota.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Kota Factory</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/pitchers.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Pitchers</h5>
    <a href="../video/series/tvf.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>
</div>


<h2>Bollywood Movies</h2>



<div class="row">

<div class="row">
<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/race2.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Race 2</h5>
    <a href="../video/series/sacred.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/citylights.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">City Lights</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/Bangbang.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Bang Bang</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/gabbar.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Gabbar</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>
</div>



<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/raazi.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Razzi</h5>
    <a href="../video/bolly/razzi.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/dishoom.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Disshoom</h5>
    <a href="../video/series/sacred.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/bolly/raees.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Raees</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/pitchers.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Villain</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>
</div>


<h2>Hollywood Movies</h2>
<div class="row">
<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/blackpanther.webp" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Black Panther</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/dunkirk.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Dunkirk</h5>
    <a href="../video/dunkrik.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/gravity.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Gravity</h5>
    <a href="../video/gravity.mp4" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/hulk.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Hulk</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>
</div>



<div class="row">
<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/kongskullisland.jpeg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Kongs Kull Island</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/londanhasfallen.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Londan  Has Fallen</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/midway.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Mid Way</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
	<img src="../Images/holly/noah.jpg" class="card-img-top" alt="..." style="width:18rem; height:280px;">
	<div class="card-body">
    <h5 class="card-title">Noah</h5>
    <a href="#" class="btn btn-primary">watch</a>
	</div>
	</div>
</div>
</div>

</div>


</div>


<!--Footer for Webfree-->

<footer class="page-footer font-small mdb-color pt-4">

  <div class="container-fluid text-center text-md-left" style="margin-top:-40px">

    <div class="row text-center text-md-left mt-3 pb-3" style="background-color:#6a7f96;">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
        <p>Here you can can watch the latest viedos ,movies ,webseries ,TV,. 
          consectetur
          adipisicing elit.</p>
      </div>
     
      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">Videos</a>
        </p>
        <p>
          <a href="movies.html">Movie</a>
        </p>
        <p>
          <a href="series.html">Webseries</a>
        </p>
        <p>
          <a href="#!">Tv</a>
        </p>
      </div>
     
      <hr class="w-100 clearfix d-md-none">

      
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="login.html">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

  
      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> MH-H University of Hyderabad</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>Shubhammcmt@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i>+91 8090799678</p>
        <p>
          <i class="fas fa-print mr-3"></i> +91 7820888183</p>
      </div>
   

    </div>

  </div>

</footer>


</body>