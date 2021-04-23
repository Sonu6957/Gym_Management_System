<?php
include('../dbcon.php');
$name=$_POST['name'];
  $age=$_POST['age'];
  
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $memid=$_POST['memid'];
  $mememail=$_POST['mememail'];
  $qry="UPDATE `member` SET `Name`='$name',`Age`='$age',`Phone_no`='$phone',`Email_id`='$email' WHERE `Member_Id`=$memid";
  $run=mysqli_query($con,$qry);
  $qry1="UPDATE `membersignin` SET `Email_Id`='$email'WHERE `Email_Id`='$mememail'";
  $run1=mysqli_query($con,$qry1);  
  $qry2="UPDATE `sign_up` SET `Name`='$name',`Age`='$age',`Phone_no`='$phone',`Email_Id`='$email' WHERE `Email_Id`='$mememail'";
  $run2=mysqli_query($con,$qry2); 
  if($run2==true){
      ?>
      <script>
      alert('Data Updated');
      window.open('memdash.php','_self' );
      </script>
   <?php 
  }
  ?>