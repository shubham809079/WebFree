<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	
	 if(isset($_POST['login']))
  {
      $con=mysqli_connect("localhost","root","","project") or die("connection failed");
      $email=$_POST['username'];
      $psw=$_POST['password'];
      
      $query="SELECT * FROM `idpwd` WHERE username='$email' AND password='$psw'";
      $run=mysqli_query($con,$query);
      $count=mysqli_num_rows($run);
      if($count>0)
      {
		  
          $row=mysqli_fetch_assoc($run);
		  echo $row['user-type'];
          if($row['user-type']=='Admin')
          {
             echo"<script>window.location.href ='admin.php'</script>";
          }
          else
          {
            echo"<script>window.location.href ='userhome.php'</script>";
          }
      }
      else
      {
          echo "invalid user";
      }
  }
?>