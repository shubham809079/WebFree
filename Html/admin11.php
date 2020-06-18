<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
   
<title>Admin Form</title>
<style type="text/css">
	.Signup-form {
		width: 400px;
    	margin: 50px auto;
	}
    .Signup-form form {
    	margin-bottom: 15px;
        background: #548063;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .Signup-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
	
	body
	{
		background-image: url("../Images/login.jpg");
	}
</style>
</head>

<body>
<div class="Signup-form">
    <form action="regestration.php" method="post">
        <h2 class="text-center">Form</h2> 
		
		
		
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name of web series" required="required" name="name">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Genre of web series" required="required" name="genre">
        </div>
		
        <div class="form-group">
            <input type="text" class="form-control" placeholder="durstion " required="required" name="duration">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder=" rating" required="required" name="rate">
        </div>
		
		<div class="form-group">
			<span>Choose file</span>
		<input type="file">
		</div>
		<div class="form-group" name="vdo">
            <button type="submit" class="btn btn-primary btn-block"  style="margin-top:20px;">Uploads</button>
        </div>
		</div>
        
               
    </form>
    
	
	<?php
if(isset($_POST['upload']))
{
$target_dir = "Video/";
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