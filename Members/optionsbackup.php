<?php
include('../Members/memlayout.php')
?>
<html>
<style>
body{
  background-color:#F0FFF0;
 font-family: 'Montserrat', sans-serif;
} 
.box h3 {
  text-align: center;
  color: #fff;
  height: 90px;
    border-radius: 600px;
  background-color: #4cf450;
  display: flex;
  flex-direction: column;
  justify-content: center;
   font-family: 'Montserrat', sans-serif;
  font-size: 2rem;
  transition: all 0.2s ease-in-out;
}
.box {
  width: 500px;
  margin: 60px auto;
  transition: all 0.2s ease-in-out;
  
}
.box:hover {
  transform: scale(1.05, 1.05);
}
.box:hover > h3 {
  Background-color: black;
 } 

.fx{
  position:relative;
}
.fx:after{
  transition: all 0.2s ease-in-out;
  border: 0px solid;
  border-color: #333 transparent transparent transparent;
  z-index: -1;
  position: absolute;
  content: "";
  bottom:0;
  width:100%;
  max-width:100%;
  height:20%;
  top: 80%;
  left:0;
  box-sizing:border-box;
} 
.fx:hover:after{
  Border: 15px solid;
  border-color: #333 transparent transparent transparent;
  top: 100%;
  
}
a{
  text-decoration: none;
}


</style>
<body>
<div class="box fx">
 <a href="absL1.php" ><h3>ABS</h3></a>
</div> 
<div class="box fx">
  <a href="fullbodyL1.php" ><h3>Full Body</h3></a>
</div>
<div class="box fx">
  <a href="absL1.php" ><h3>Legs</h3></a>
</div>
<div class="box fx">
  <a href="legL1.php" ><h3>Back</h3></a>
</div>
</body>
</html>