<?php
include('../dbcon.php');
$code=$_GET['brc'];
$qryc=" DELETE FROM `branch` WHERE `Branch_Code`='$code'";
$runc=mysqli_query($con,$qryc);
if($runc==true){
    ?>
    <script>
    window.open('branches.php','_self' );
    </script>
 <?php 
}
?>