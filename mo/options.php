<?php
include('../Members/memlayout.php')
?>
<style>
	*{
	font-family: 'Montserrat', sans-serif;

}

	.btna {
  border: none; /* Remove borders */
  color: black; 
/* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  background-image: url(abs.jpg);
  width: 293px;
    height: 150px;    
    margin-left: 500px;
    text-shadow: 2px 2px 8px #F0FFF0;


}
.btnf {
  border: none; /* Remove borders */
  color: black; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  background-image: url(fullbody.jpg);
  width: 293px;
    height: 150px;
      margin-left: 500px;
text-shadow: 2px 2px 8px #F0FFF0;
}
   

.btnw {
  border: none; /* Remove borders */
  color:#black;
  font-size:  /* Add a text color */

  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  background-image: url(leg.jpg);
  width: 293px;
    height: 150px;    
    margin-left: 500px;
    text-shadow: 2px 2px 8px #F0FFF0;

}
.btnb {
  border: none; /* Remove borders */
  color: black; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  background-image: url(back.jpg);
  width: 293px;
  height: 150px;    
  margin-left: 500px;
  text-shadow: 2px 2px 8px #F0FFF0;

 
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}
body{
	background-image: url(bg.jpg);
	backdrop-filter: blur(7px);
}
button : hover,a:hover{
	opacity: 0.7;
}


</style>
<link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
<body>
	<div class="container">
	<div class="row align-items-center">
    <div class="col">
<button class="btna success"><a href="absL1.php" ><h1>ABS Workout</h1></button></a>
</div>
<br>
<div class="col">
<button class="btnf success"><a href="fullbodyL1.php" ><h1>Full Body Workout</h1></button></a>
</div>
<br>
<div class="col">
<button class="btnw success"><a href="legL1.php" ><h1>Legs Workout</h1></button></a>
</div>
<br>
<div class="col">
<button class="btnb success"><a href="backL1.php" ><h1>Back Workout</h1></button></a>
</div>
</div>
</div>

</body>