<?php
include('../dbcon.php');
session_start();
if(isset($_SESSION['uid']))
{
$status=$_POST['payment'];
if($status=="success"){
     $qryinitial="SELECT `Email_Id` FROM `membersignin` WHERE `Memid` ='".$_SESSION['uid']."'";
      $runqryinitial=mysqli_query($con,$qryinitial);
      $memdata=mysqli_fetch_assoc($runqryinitial);
      $em=$memdata['Email_Id'];
      $qry="UPDATE `member` SET `Status`='Paid' WHERE `Email_id`='$em'";
        $runqry=mysqli_query($con,$qry);
        $pdate = "UPDATE `member` SET `Payment Date` = NOW() WHERE `Email_id`='$em'";
        $runpdate=mysqli_query($con,$pdate);
    ?>
    <script>
    alert('Paid');
    window.open('Payment.php','_self');
    </script>
    <?php
}
}
?>