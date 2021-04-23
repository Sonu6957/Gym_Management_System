<?php
include('../Members/memlayout.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
      .btn-primary:hover {
    color: #fff;
    background-color: black;
    border-color: #00CB12;
} 
    button:focus {
  outline: none;
}    
        
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: black;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: #00CB12;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: 7.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}  
      .btn1
        { 
            display: inline-block; 
            width: 100px;
            height:50px;
             text-align: center;
            position: absolute;
            top:62px; 
            background-color: #00CB12;
            color:black;
            user-select: none;
            vertical-align: middle;
            cursor: pointer;
             padding: .375rem .75rem;
            -webkit-user-select: none;
            -moz-user-select: none;
            border: 1px solid transparent;
            font-weight:400;
            border-color: #00CB12
            font-size: 1rem;
            margin-left: 1160px;
            border-radius: 7.25rem; 
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }  
  </style>

    <title>fullbodyL2</title>
  </head>
  <body>
    <!--Navbar
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #00CB12"  href="#">Fitness Club</a>
     <div class = "right_area">
    <button type="button" class="btn btn-outline-success">Back</button>
  </div> 
  </div></nav>-->

  <!--Cards-->
  <h1 class="text-center">Level 2 </h1>
      
  <div>     
  <a href="fullbodyL1.php"><button type="button" class="btn1 btn-outline-success " >Level 1</button></a>
      </div> 
<hr>
<div class="container">
  <div class="row align-items-center">
    <div class="col">
  <div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTKdpgAr5SDuYiQ1ihq3GCSLu2KTkXKqyS_A&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jump Squats</h5>
    <p class="card-text">45 seconds</p>    
  </div>
</div>
</div>

 <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREfh69v5sZwLp0bg40erw48ukTBJgR9gnKVw&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Back Lunges</h5>
    <p class="card-text">45 seconds</p>  
  </div>
</div>
</div>

 <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiftUNtd6k2nM7UI6_AniXuZ4H4o-ShdGOVg&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Leg Raises</h5>
    <p class="card-text">45 seconds</p>
  </div>
</div>
</div>

 <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQs6FxTjYLqFFUWLF1OmNNZjjbMtRNDehX1eA&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Push-ups</h5>
    <p class="card-text">45 seconds</p>   
  </div>
</div>
</div>

 <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1pIaItlyP0sxA9MU6yjLrq9mXf83MfQadgw&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Crunches</h5>
    <p class="card-text">45 seconds</p>   
  </div>
</div>
</div>

 <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVzxMYfqYXjFuqbAIfJVYUCohUpimfZDVgYQ&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Extended Inchworm</h5>
    <p class="card-text">45 seconds</p>    
  </div>
</div>
</div>
</div>
</div>

   

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