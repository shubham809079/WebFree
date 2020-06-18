<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css">

    <title>Upload</title>
	<style>
	
body
	{
		background-image: url("login.jpg");
	}
	
	
	</style>
	
	
  </head>
  <body>
  
  
  <nav class="navbar navbar-expand" style="background-color:#6a7f96;">
  <a class="navbar-brand" href="index.html" style="color:white;">WebFree</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">ADMIN <span class="sr-only">(current)</span></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="userhome.php">HOME</a>
      </li>
	   </li>
	   <li class="nav-item">
        <a class="nav-link" href="#">(SHUBHAM SINGH)</a>
      </li>
      
     
    </ul>
  
	<form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.html">Signout</button></a>
    </form>
    
  </div>
</nav>

  
  
  
  

  
    <div class="col-lg-6"style="height: 500px" >
       <form   method="post" enctype="multipart/form-data">
            <div class="container" >
              <h1>Upload file</h1>
              <hr>
          <label for="email"><b>Name of Web Series</b></label>
              <input type="text" placeholder="Enter the name" name="name" required>
               <br>
              <label for="email"><b>Genre</b></label>
              <input type="text" placeholder="Genre" name="genre" required>
              <br>
              <label for="email"><b>Duration</b></label>
              <input type="text" placeholder="Enter Duration" name="duration" required>
            <br>
              <label for="psw"><b>Rating</b></label>
              <input type="text" placeholder="Enter rating" name="rate" required>
            
<br>
              <label for="psw"><b>Video</b></label>
              <input type="file"  name="vdo" required>
          
              
              <hr>
              
          
              <button type="submit" class="registerbtn" name="upload">upload</button>
            </div>
            
            
          </form>
        </div> 

   
<?php
if(isset($_POST['upload']))
{
$target_dir = "uploadVideo/";
$name=$_POST['name'];
$genre=$_POST['genre'];
$duration=$_POST['duration'];
$rate=$_POST['rate'];
$vdo=$_FILES["vdo"]["name"];
$target_file = $target_dir . basename($_FILES["vdo"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$con=mysqli_connect("localhost","root","","project") or die("connection failed");
// Check if file already exists
$uploadOk=1;
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if($imageFileType != "mp4" && $imageFileType != "mov" && $imageFileType != "wmv"
&& $imageFileType != "gif" ) {
    echo "Sorry, only mp4,mov,wmv files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $query="INSERT INTO `video`(`name`, `genre`, `duration`, `rating`, `video`) VALUES ('$name','$genre','$duration','$rate','$vdo')";
    if (move_uploaded_file($_FILES["vdo"]["tmp_name"], $target_file) && mysqli_query($con,$query)) {
        echo "The file ". basename( $_FILES["vdo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
  </body>
</html>