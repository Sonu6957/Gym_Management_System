<?php
include('../dbcon.php');
$name=$_POST['name'];
  $age=$_POST['age'];
  $sex=$_POST['sex'];
  $phone=$_POST['phonen'];
  $email=$_POST['email'];
  $memid=$_POST['memid'];
  if(!empty($_POST['wokout'])){
  $workout=$_POST['wokout'];
  }
  if(empty($_POST['wokout'])){
    $workout=$_POST['defaultworkout'];
  }
  $mememail=$_POST['mememail'];
  $qry="UPDATE `member` SET `Name`='$name',`Age`='$age',`Sex`='$sex',`Phone_no`='$phone',`Email_id`='$email',`Workout_Type`='$workout' WHERE `Member_Id`=$memid";
  $run=mysqli_query($con,$qry);
  $qry1="UPDATE `membersignin` SET `Email_Id`='$email'WHERE `Email_Id`='$mememail'";
  $run1=mysqli_query($con,$qry1);  
  $qry2="UPDATE `sign_up` SET `Name`='$name',`Age`='$age',`Sex`='$sex',`Phone_no`='$phone',`Email_Id`='$email',`Workout_Type`='$workout' WHERE `Email_Id`='$mememail'";
  $run2=mysqli_query($con,$qry2); 
  $qrytwo="UPDATE member M,trainer T SET M.Trainer_Name= T.Name WHERE T.Training=M.Workout_Type";
  $runqrytwo=mysqli_query($con,$qrytwo);
  if($runqrytwo==true){
      ?>
      <script>
      alert('Data Updated');
      window.open('updatedata.php?id=<?php echo $memid;?>','_self' );
      </script>
   <?php 
  }
  ?>