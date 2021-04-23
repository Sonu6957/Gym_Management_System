<?php
session_start();
include('../dbcon.php');
{
    if(isset($_SESSION['uid']))
    {
        echo" ";
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
  }?>
  <?php
include('home.php');
?>
<!--Branches-->
<html>
<head>
  <style>
.editbutton{font-weight: 700!important;
    font-size: 20px;
    position: absolute;
    line-height: 12px;
    text-align: center;
    top: 88px;
    width: 68px;
    height: 33px;
    outline: none;
    padding: 3px 15px!important;
    width: auto!important;
    margin: 0!important;
    -ms-flex-item-align: end;
    align-self: flex-end;
    white-space: nowrap;
    background-color: #00CB12;
    color: white;
    border-radius: 5px!important;
    border: 1px solid #00CB12;
    right: 3.2%;
}
.editbutton:hover{
  transform: scale(1.1);
}
.delbutton{font-weight: 700!important;
    font-size: 20px;
    position: absolute;
    line-height: 13px;
    text-align: center;
    top: 171px;
    width: 80px;
    height: 33px;
    outline: none;
    padding: 3px 6px!important;
    margin: 0!important;
    -ms-flex-item-align: end;
    align-self: flex-end;
    white-space: nowrap;
    background-color: #00CB12;
    color: white;
    border-radius: 5px!important;
    border: 1px solid #00CB12;
    right: 3.2%;
}
.delbutton:hover{
  transform: scale(1.1);
}
</style>
</head>
<body>
<a href="addbranches.php" style="color:white;text-decoration:none;"><button  class="editbutton" type="button"><span>Add</span></button></a>
<div class="container"style="margin-left: 38px">
  <div class="row align-items-center">
  <?php
  $qry="SELECT * FROM `branch`";
$fetch=mysqli_query($con,$qry);
while($data=mysqli_fetch_assoc($fetch)){
        ?>
          <div class="col" style="flex:0;padding-right: calc(var(--bs-gutter-x)*3)">
      <div class="card" style="width: 18rem;    margin-top: 27px;">
        <div class="card-body" style="
          width: 301px;
          height: 208px;
      ">
          <h5 class="card-title" style="margin-left: 14px;"><img class="pin"style="height: 20px;
          transform: rotate(-40deg);
          top: 17px;
          left: 6px;
          position: absolute;"src="https://www.flaticon.com/svg/static/icons/svg/149/149059.svg"style="height: 20px" style="width: 20px"><?php echo$data['Branch_Name']?></h5>
          <brc>
          <h6 class="card-subtitle mb-2 text-muted"style="
          margin-top: 10px;
          margin-left: 8px;
      ">Branch Code: <?php echo$data['Branch_Code']?></h6></brc><hr>
          <p class="card-text">
            <img src="https://www.flaticon.com/svg/static/icons/svg/684/684908.svg"style="height: 20px" style="width: 20px"> <?php echo$data['Address']?>
            <br>
            <sp style="
          position: absolute;
          margin-top: 24px;
      ">
            <img src="https://www.flaticon.com/svg/static/icons/svg/483/483947.svg"style="height: 20px" style="width: 20px"><pn style="
          position: absolute;
          margin-left: 11px;
          margin-top: 4px;"><?php echo$data['Phone_No.']?></pn></p>
      </sp>  
      <a href="branchdelfunc.php?brc=<?php echo$data['Branch_Code'];?>"style="color:white;text-decoration:none;"><button name="deletef" class="delbutton" type="submit"><span>Delete</span></button></a>
        </div>
      </div>
      </div>
      <?php
}
?>
</body>
</html>


  
