
<!DOCUMENT html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Fitness Club</title>
       <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #00CB12"  href="../index.php">Fitness Club</a>
    <div class="package" style="position: absolute;
    left: 12%;
    top: 10px;
    width: 9%;">
          <a class="nav-link " aria-current="page" style="
    /* position: absolute; */
    color: rgba(255,255,255,.55);
    left: 106px;
" href="../Package.php">Packages</a>
</div>
<a class="nav-link " aria-current="page" href="adminlayout.php" style="
    
    color: rgba(255,255,255,.55);
    left: 125px;
    position: absolute;
    left: 20%;
    top: 10px;
    width: 9%;"
">Workouts</a>
   
      <a href="../members\sign_up.php"><button type="button" class="btn btn-success" >Sign-Up </button></a>
     
 
  </div>
</nav>
    <style>
    *{
      font-family: 'Montserrat', sans-serif;

    }
      .btn-primary:hover {
    color: #fff;
    background-color: black;
    border-color: #00CB12;
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
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
   
  </style>

  </head>
  <body>
<!--Cards-->

<h1 class="text-center">Workouts </h1>
<hr>

<div class="container">
  <div class="row align-items-center">
    <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1602083974023-5a3637743453?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGFlcm9iaWNzfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Aerobics</h5>
    <h6 class="card-title">Calories</h6>
    <div class="pan">
 <img class=" fade-in-image image-width" alt="250" src="https://cdn-images.cure.fit/www-curefit-com/image/upload/fl_progressive,f_auto,q_auto:eco,c_fit/dpr_2/image/icons/cult/calorie.png" style="height: 25px" style="width: 20px">
<div class="calory number" style=" position: absolute;
    left: 47px;
    top: 237px;">425 in 45mins</div>
</div>
  <p class="card-text">

  Increases the efficiency of the body’s intake of oxygen, thereby stimulating the cardiovascular system, developing endurance, and reducing body fat. </p>
  </div>
</div>
</div>

    <div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1535743686920-55e4145369b9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzh8fGd5bXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Boot-Camp</h5> 
    <h6 class="card-title">Calories</h6>
    <div class="pan">
 <img class=" fade-in-image image-width" alt="250" src="https://cdn-images.cure.fit/www-curefit-com/image/upload/fl_progressive,f_auto,q_auto:eco,c_fit/dpr_2/image/icons/cult/calorie.png" style="height: 25px" style="width: 20px">
<div class="calory number" style=" position: absolute;
    left: 47px;
    top: 237px;">649 in 45mins</div>
</div>
  <p class="card-text">
  Includes a fairly intense mix of aerobic, strength training and speed elements within each class session.</p>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1554284126-aa88f22d8b74?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjd8fGd5bXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Calisthenics</h5>
   <h6 class="card-title">Calories</h6>
    <div class="pan">
 <img class=" fade-in-image image-width" alt="250" src="https://cdn-images.cure.fit/www-curefit-com/image/upload/fl_progressive,f_auto,q_auto:eco,c_fit/dpr_2/image/icons/cult/calorie.png" style="height: 25px" style="width: 20px">
<div class="calory number" style=" position: absolute;
    left: 47px;
    top: 237px;">389 in 45mins</div>
</div>
  <p class="card-text">
  Designed to improve strength, flexibility, agility, balance, coordination, and aerobic conditioning-just about every skill you need to be a fit human being.</p>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1606335543042-57c525922933?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjZ8fGtpY2slMjBib3hpbmd8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Kick Boxing</h5>
   <h6 class="card-title">Calories</h6>
    <div class="pan">
 <img class=" fade-in-image image-width" alt="250" src="https://cdn-images.cure.fit/www-curefit-com/image/upload/fl_progressive,f_auto,q_auto:eco,c_fit/dpr_2/image/icons/cult/calorie.png" style="height: 25px" style="width: 20px">
<div class="calory number" style=" position: absolute;
    left: 47px;
    top: 265px;">590 in 45mins</div>
</div>
  <p class="card-text">
 All punches and kicks are thrown into the air or onto pads.Challenges your technique, endurance, and above all, concentration. </p>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1447452001602-7090c7ab2db3?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8eW9nYSUyMG1lbnxlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Yoga</h5>
    <h6 class="card-title">Calories</h6>
    <div class="pan">
 <img class=" fade-in-image image-width" alt="250" src="https://cdn-images.cure.fit/www-curefit-com/image/upload/fl_progressive,f_auto,q_auto:eco,c_fit/dpr_2/image/icons/cult/calorie.png" style="height: 25px" style="width: 20px">
<div class="calory number" style=" position: absolute;
    left: 47px;
    top: 265px;">180 in 45mins</div>
</div>
  <p class="card-text">
 Great way to work on your flexibility and both physical and mental strength. Involves paying attention to your breath, which can help you relax.</p>
  </div>
</div>
</div>

<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6mDG9QSZWM24ApROMMe3FQP4KftwXOH3GeA&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Zumba</h5>
   <h6 class="card-title">Calories</h6>
    <div class="pan">
 <img class=" fade-in-image image-width" alt="250" src="https://cdn-images.cure.fit/www-curefit-com/image/upload/fl_progressive,f_auto,q_auto:eco,c_fit/dpr_2/image/icons/cult/calorie.png" style="height: 25px" style="width: 20px">
<div class="calory number" style=" position: absolute;
    left: 47px;
    top: 265px;">566 in 45mins</div>
</div>
  <p class="card-text">
  Pretty much the most awesome workout ever. Dance to great music, with great people, and burn a ton of calories without even realizing it.</p>
</div>
</div>
</div>
</div>



  
  </body>
</html>