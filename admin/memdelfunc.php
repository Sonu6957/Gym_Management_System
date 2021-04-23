<?php
include('../dbcon.php');
$id=$_GET['id'];
//get email id
$qryinitial="SELECT `Email_id` FROM `member` WHERE `Member_Id`='$id'";
$runqryinitial=mysqli_query($con,$qryinitial);
$data=mysqli_fetch_assoc($runqryinitial);
$email=$data['Email_id'];
//delete from member
$qry=" DELETE FROM `member` WHERE `Member_Id`='$id'";
$run=mysqli_query($con,$qry);
//delete from membersignin
$qrymemsignin=" DELETE FROM `membersignin` WHERE `Email_Id`='$email'";
$runqrymemsignin=mysqli_query($con,$qrymemsignin);
//delete from signup
$qrymemsignup="DELETE FROM `sign_up` WHERE `Email_Id`='$email'";
$runqrymemsignup=mysqli_query($con,$qrymemsignup);
  if($runqrymemsignup==true){
      ?>
      <script>
      alert('Data Deleted');
      window.open('memupdate.php','_self' );
      </script>
   <?php 
  }
  ?>