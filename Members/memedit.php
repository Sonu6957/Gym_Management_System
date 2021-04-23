<?php
session_start();
include('../dbcon.php');
{
    if(isset($_SESSION['uid']))
    {   $qryinitial="SELECT `Email_Id` FROM `membersignin` WHERE `Memid` ='".$_SESSION['uid']."'";
      $runqryinitial=mysqli_query($con,$qryinitial);
      $memdata=mysqli_fetch_assoc($runqryinitial);
      $em=$memdata['Email_Id'];
      $qry="SELECT * FROM `member` WHERE `Email_id`='$em'";
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
include('memlayout.php');
?>
<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
    top: 72px;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>
<div class="container">
    <div class="main-body">
    
         
          <!-- Profile pic -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" style="height: 100%;">
                <div class="card-body" >
                  <div class="d-flex flex-column align-items-center text-center">
                  <?php
  if($data['Sex']=="Female"){
    ?>
  <img class="rounded-circle" src="female.png" width="150"alt="Admin">
  <?php
  }
  else{
    ?>
  <img class="rounded-circle" src="male.png" width="150"alt="Admin">
  <?php
  }
  ?>
                    <div class="mt-3">
                      <h4><?php echo $data['Name'] ?></h4>
                      <p class="text-secondary mb-1"><?php echo $data['Sex'] ?></p>
                      <p class="text-muted font-size-sm"><?php echo $data['Email_id'] ?></p>
                      <form action="memeditfunc.php" method="post">
                    </div>
                  </div>
                </div>
                </div>          
            </div>
            <div class="col-md-8">
              <div class="card mb-3"  style="
    top: 72px;
    height: 95%;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="name" value="<?php echo $data['Name'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    
                    <div class="col-sm-9 text-secondary">
                    <input type="text" name="email" value="<?php echo $data['Email_id'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" pattern="[0-9]{10,12}"  maxlength="10" name="phone" value="<?php echo $data['Phone_no'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="number" name="age" value="<?php echo $data['Age'] ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Trainer</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['Trainer_Name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Workout</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['Workout_Type'] ?>
                    <input type="hidden" name="memid" value="<?php echo $data['Member_Id']?>">
     <input type="hidden" name="mememail" value="<?php echo $data['Email_id'];?>">
     <a href="memedit.php">  <button type="submit" style="
    position: absolute;
    top: 102%;
    left: 90%;
    width: 11%;" class="btn btn-success " >Update</button></a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
             </form>
            </div>
          </div>
        </div>
    </div>