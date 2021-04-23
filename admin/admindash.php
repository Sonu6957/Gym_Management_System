<?php
session_start();
include('../dbcon.php');
{
    if(isset($_SESSION['uid']))
    {   $qry="SELECT * FROM `admin` WHERE `Email_ID`='".$_SESSION['uid']."'";
        $fetch=mysqli_query($con,$qry);
        $data=mysqli_fetch_assoc($fetch);
    }
    else
    {
        ?>
        <script>
            alert('Please Login');
            window.open('../index.php','_self');
        </script>
    <?php
    }
}
?>
<?php
include('home.php');
?>
<html>
<head>
<style>
.btn{
  margin-right: 20px;
}
</style>
<link rel="stylesheet" href="lock.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>
<body>


<div class="login-section">
  <?php
  if($data['Gender']=="Female"){
    ?>
  <img class="form-img" src="ady1.png" alt="">
  <?php
  }
  else{
    ?>
  <img class="form-img" src="ady.png" alt="">
  <?php
  }
  ?>

  
  <div class="form-wrapper">
  <div style="top: 138px;position: absolute;color: #212529;font-size: 48px;left: 37%;font-family: sans-serif;font-weight: 700";>Welcome <?php echo$data['Name']?></div>

  <form action="" class="form1" style="
    font-family: 'Montserrat', sans-serif;
    margin-left: 41px;
    margin-top: 14px
">
      
        <div class="input-group">
        <label for="Email" class="label">Email ID :<sp><?php echo$data['Email_ID']?></sp></label>
        <br>
        <label for="Age" class="label">Age :<sp><?php echo$data['Age']?></sp></label>
        <br>
         <label for="sex" class="label">Gender :<sp><?php echo$data['Gender']?></sp></label>
        <br>
         <label for="Phone" class="label">Phone Number :<sp><?php echo$data['Phone No']?></sp></label>
      </div>
      </form>  
  </div>
</body>
</html>