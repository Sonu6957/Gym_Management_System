<?php
    session_start();
    include('../dbcon.php');
    if(isset($_SESSION['uid']))
    {
    echo " ";
    }
    else
    {
    header("location: ..\index.php");
    }   
    
?>
<?php
include('home.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>PAYMENT</title>
<style>
      .btn-primary:hover {
    color: #fff;
    background-color: black;
    border-color: #00CB12;
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: black;
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
 .table 
 {
  table-layout: fixed;
  width: 1000px; 
  text-align: center;
  margin-left: auto; 
  margin-right: auto;
  margin-top: 90px;
  color: #00CB12
 }
 
  </style>



  </head>
  <body>
    <!--navbar
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #00CB12"  href="#">Fitness Club</a>
     <div class = "right_area">
    <button type="button" class="btn btn-outline-success">Back</button>
  </div> 
  </div></nav>-->

<br>
 <h1 style="text-align: center;">Payment Details</h1>
<!--Search bar-->
<form action="checkpayment.php" method="post">
 <formd class="d-flex"style="margin-left: 995px;" >
        <input class="form-control me-2" type="search" name="mememail" placeholder="Email-Id" aria-label="Search" style="width: 251px;left: 40%;position: absolute;top: 31%;">
        <button class="btn btn-outline-success"  name="searchbutton" type="submit" style="
    left: 59%;
    top: 31%;
    position: absolute;">Search</button>
        </formd>
        <button class="btn btn-outline-success" type="submit" name="showall" style="margin-top: -68px;margin-left: 20px;">All Payments</button>
<button class="btn btn-outline-success" type="submit" name="pending" style="margin-top: -68px;margin-left: 20px;">Pending Payments</button>
<select type="text" name="monthly" class="dropbtn" style="
    position: absolute;
    left: 73%;
    top: 137px;
    height: 25px;
    width: 9%;" >
                    <div class="dropdown-content">
                        <option  class= "button"  value="" selected disabled>Select Month</option>
                        <option  class= "button"  value = "January">January</option>
                        <option  class= "button"  value = "February">February</option>
                        <option  class= "button"  value = "March">March</option>
                        <option  class= "button"  value = "April">April</option>
                        <option  class= "button"  value = "May">May</option>
                        <option  class= "button"  value = "June">June</option>
                        <option  class= "button"  value = "July">July</option>
                        <option  class= "button"  value = "August">August</option>
                        <option  class= "button"  value = "September">September</option>
                        <option  class= "button"  value = "October">October</option>
                        <option  class= "button"  value = "November">November</option>
                        <option  class= "button"  value = "December">December</option>
                    </div>
                </select>   
                <button class="btn btn-outline-success"  name="billbutton" type="submit" style="
    left: 82.5%;
    top: 21%;
    position: absolute;
    height: 32px;
    padding-top: 3px;">Generate Bill</button>
</form>

<style>
  .table tbody {
    border-color:green;
  }
</style>
<?php
            
                if(isset($_POST['showall']))
            {  
                
                $qryall="SELECT * FROM `member`";
                $runall=mysqli_query($con,$qryall);

                
                if(mysqli_num_rows($runall)<1)
                {
        ?>
                    <script>alert('No data');
                    window.open('checkpayment.php','_self');
                    </script> <?php
                }
                else
                { ?>
<!--table-->
<table class="table table-dark table-striped" >
 <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
               
    </tr>
    </thead><!--table-->
               
  <?php
                    $count=0;
                    while($dataall=mysqli_fetch_assoc($runall))
                    { //to get fees
                      
                      $qryfee="SELECT `Fees` FROM `workout` WHERE `Workout_Type`='".$dataall['Workout_Type']."'";
                      $runfee=mysqli_query($con,$qryfee);
                      $datafee=mysqli_fetch_assoc($runfee);
                        $count++;
                        ?>

  <tbody>
    <tr>
      <td scope="row"><?php echo $count;?></td>
      <td><?php echo $dataall['Name'];?></td>
      <td><?php echo $dataall['Email_id'];?></td>
      <td><?php echo $datafee['Fees'];?></td>
      <td><?php echo $dataall['Payment Date'];?></td>
      <?php if($dataall['Status']=='Not Paid'){?>
      <td style="color: red;border-bottom-color: snow;"><?php echo $dataall['Status'];?></td>
      <?php
      }
      elseif($dataall['Status']=='Paid'){?>
        <td style="color: #00CB12;border-bottom-color: snow;"><?php echo $dataall['Status'];?></td>
        <?php
      }
      ?>
    </tr>
    <?php 

                    }
                ?>
  </tbody> 
    </table> 
<?php
                    
                  }
     }
                
?>
<!--Pending Payments-->
<?php
            
                if(isset($_POST['pending']))
            {  
                
                $qry="SELECT * FROM `member` WHERE `Status`='Not Paid'";
                $run=mysqli_query($con,$qry);

                
                if(mysqli_num_rows($run)<1)
                {
        ?>
                    <script>alert('No data');
                    window.open('checkpayment.php','_self');
                    </script> <?php
                }
                else
                { ?>
<!--table-->
<table class="table table-dark table-striped" >
 <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
               
    </tr>
    </thead>
                        
  <?php
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    { //to get fees
                      
                      $qryfee="SELECT `Fees` FROM `workout` WHERE `Workout_Type`='".$data['Workout_Type']."'";
                      $runfee=mysqli_query($con,$qryfee);
                      $datafee=mysqli_fetch_assoc($runfee);
                        $count++;
                        ?>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $data['Name'];?></td>
      <td><?php echo $data['Email_id'];?></td>
      <td><?php echo $datafee['Fees'];?></td>
      <td><?php echo $data['Payment Date'];?></td>
      <td style="color: red;border-bottom-color: snow;"><?php echo $data['Status'];?></td>
    </tr>
    <?php 
                    }
                ?>
  </tbody> 
                    </table> 

<?php
                    
                  }
                }
?>
<!--For Search -->
<?php
            include('..\dbcon.php');
                if(isset($_POST['searchbutton']))
            {  
                $email=trim($_POST['mememail']);
                $qryemail="SELECT * FROM `member` WHERE `Email_id`='$email'";
                $runemail=mysqli_query($con,$qryemail);

                
                if(mysqli_num_rows($runemail)<1)
                {
        ?>
                    <script>alert('No data');
                    window.open('checkpayment.php','_self');
                    </script> <?php
                }
                else
                { ?>
<!--table-->
<table class="table table-dark table-striped" >
 <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
               
    </tr>
    </thead>
                
  <?php
                    $count=0;
                    while($data=mysqli_fetch_assoc($runemail))
                    { //to get fees
                      
                      $qryfee="SELECT `Fees` FROM `workout` WHERE `Workout_Type`='".$data['Workout_Type']."'";
                      $runfee=mysqli_query($con,$qryfee);
                      $datafee=mysqli_fetch_assoc($runfee);
                        $count++;
                        ?>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $data['Name'];?></td>
      <td><?php echo $data['Email_id'];?></td>
      <td><?php echo $datafee['Fees'];?></td>
      <td><?php echo $data['Payment Date'];?></td>
      <?php if($data['Status']=='Not Paid'){?>
      <td style="color: red;border-bottom-color: snow;"><?php echo $data['Status'];?></td>
      <?php
      }
      elseif($data['Status']=='Paid'){?>
        <td style="color: #00CB12;border-bottom-color: snow;"><?php echo $data['Status'];?></td>
        <?php
      }
      ?>
    </tr>
    <?php 
                    }
                ?>
  </tbody>  
</table>
<?php
                    
                  }
                }
?>



<!--For Bill -->
<?php
            include('..\dbcon.php');
                if(isset($_POST['billbutton']))
            {  
                $month=trim($_POST['monthly']);
                $qrymonth="SELECT * FROM `member` WHERE monthname(`Payment Date`)='$month'";
                $runmonth=mysqli_query($con,$qrymonth);                
                if(mysqli_num_rows($runmonth)<1)
                {
        ?>
                    <script>alert('No data');
                    window.open('checkpayment.php','_self');
                    </script> <?php
                }
                else
                { 
                ?>
<!-- button-->
<a href="printpdf.php?monthly=<?php echo $month;?>"><button class="btn btn-outline-success"  name="printpdf" type="submit" style="
    left: 88.5%;
    top: 40%;
    position: absolute;
    height: 32px;
    padding-top: 3px;
    width: 6%;">Print</button></a>
<!--table-->
<table class="table table-dark table-striped"  >
 <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>
               
    </tr>
    </thead>
                
  <?php
                    $count=0;
                    $sumfee=0;
                    while($data=mysqli_fetch_assoc($runmonth))
                    { //to get fees
                      
                      $qryfee="SELECT `Fees` FROM `workout` WHERE `Workout_Type`='".$data['Workout_Type']."'";
                      $runfee=mysqli_query($con,$qryfee);
                      $datafee=mysqli_fetch_assoc($runfee);
                      $sumfee=$sumfee+$datafee['Fees'];
                        $count++;
                      
                        ?>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $data['Name'];?></td>
      <td><?php echo $data['Email_id'];?></td>
      <td><?php echo $datafee['Fees'];?></td>
      <td><?php echo $data['Payment Date'];?></td>
      <?php if($data['Status']=='Paid'){?>
        <td style="color: #00CB12;border-bottom-color: snow;"><?php echo $data['Status'];?></td>
      <?php
      }
      ?>
    </tr>
    <?php 
                    }
                ?>
     <tr><td colspan="5">Total</td><td><?php echo $sumfee ?></td></tr>
  </tbody>  
</table>
<?php
                    
                  }
                }
?>
</body>
</html>