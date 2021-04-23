<?php
include('dbcon.php');
if(isset($_POST['submitbtn']))
{
	$email=trim($_POST['esignin']);
	$password=$_POST['signinpass'];
	$qry = "SELECT * FROM `adminsignin` WHERE `Email_Id` ='$email' AND `Password` = '$password'";
  $run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($run)
		{
			if($row <1)
				{
					$qryone="SELECT * FROM `membersignin` WHERE `Email_Id` ='$email' AND `Password` = '$password'";
					$runqryone=mysqli_query($con,$qryone);
					if(mysqli_num_rows($runqryone)<1)
					{
					?>
					<script>alert('Username or Password not matched');
					window.open('index.php','_self');
					</script>	
					<?php 
					}
					else
					{
          $data = mysqli_fetch_assoc($runqryone);
          session_start();
					$_SESSION['uid']=$data['Memid'];
					header("location:members\memdash.php");
					}
				}	
			else
			{
				$data = mysqli_fetch_assoc($run);	
					session_start();
          $_SESSION['uid']=$data['Email_Id'];
					header("location:admin\admindash.php");		
			}	
		}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    

    
    <style>
      
      .btn-primary:hover {
    color: #fff;
    background-color: black;
    border-color: #00CB12;
}
</style>

    <title>Home</title>
  </head>
  <body>
   <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #00CB12"  href="#">Fitness Club</a>
    <div class="package" style="position: absolute;
    left: 12%;
    top: 10px;
    width: 9%;">
          <a class="nav-link " aria-current="page" style="
    /* position: absolute; */
    color: rgba(255,255,255,.55);
    left: 106px;
" href="Package.php">Packages</a>
</div>

          <a class="nav-link " aria-current="page" href="admin/adminlayout.php" style="
    
    color: rgba(255,255,255,.55);
    left: 125px;
    position: absolute;
    left: 20%;
    top: 10px;
    width: 9%;"
">Workouts</a>
        
        
   
      <a href="members\sign_up.php"><button type="button" class="btn btn-success" >Sign-Up </button></a>
     
 
  </div>
</nav>

   <!--Corousel-->
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="H1.jpg" class="d-block w-100" style="height: 500px" style="width: 200px"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="H2.jpg" class="d-block w-100" style="height: 500px "style="width:200px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="H3.jpg" class="d-block w-100" style="height: 500px "style="width:200px" alt="...">
    </div>
  </div>
 
 
</div>

   <!--Login-->
   
 <form action="index.php" method="post">
  <div class="loginbox">
    <div id="LOGINSIGNIN">
      <span>LOGIN</span>
    </div>
    <div class="login-details">
      <div class="textbox">
      <input type="text" placeholder="E-mail ID" name="esignin" value="" style="font-size:21px ">
      </div>
      <div class="textbox1">
      <input type="Password" placeholder="Password" name="signinpass" value="" style="font-size:21px ">
      </div>
        <input type="submit" class="button" name="submitbtn" value="Sign-In">
  </div>
  
  </div></form>


   <!--About-->
    <section id="about" class="container">
      <h1>About</h1><hr>
     <div class="row">
        <div class="col-sm-2 services-column">
         
          <p>We make fitness fun and easy. We have best in class trainers and offer group workouts ranging from yoga to Boxing. You’ll find a wide variety of workout formats from Boxing to Yoga that focus on strength, muscle endurance, flexibility, stamina & balance. So mix it up, pick formats that help you achieve your personal fitness goals.We can assure you that your sessions will be more fun, interesting and less monotonous. Our centers are located in some of the most prime locations in these cities.  </p></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>