<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Dashboard</title>
    <link href="..\css\stylea.css" rel="stylesheet" type="text/css">    
</head>
<body>
  <!--header area start-->
    <header>
        <div class="left_area">
            <h3>WELCOME TO THE DASHBOARD</h3>
        </div>
        <div class = "right_area">
            <a href="../index.php" class = "logout_btn">Logout</a>
        </div>
    </header>
    <!--header end area-->   
    <!--sidebar start area-->
    <div class="side_bar">
        <center>
            <h3>FITNESS CLUB</h3>
        </center>  
   <div class="details">
       <n id="name">Your Name</n>
   </div>
    <a href="memview.html"><span>Member Details</span></a>
    <span>Payments</span>
    <span>Workout Details</span>
    <span>Branches</span>
    </div>
    <div class="sample">
        <a>sample button</a>
    </div>

  <!--sidebar end area-->
</body>
</html>
<!--<?php
session_start();
    if(isset($_SESSION['uid']))
 {
     echo " ";
 }
 else
 {
     header("location: ..\index.php");
 }
?>-->