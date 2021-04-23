<?php
session_start();
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
}
?>
<?php
include('home.php');
include('../dbcon.php');
$sid=$_GET['id'];
$qry="SELECT * from `member` where `Member_Id`='$sid'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run);
?>
<!--Update Data-->
<html>
<body>
<style>
td {
 padding: 15px 20px;
 text-align: left;
}
.header{
    margin-left: 20%;
    margin-top: 4%;
    border-radius: 13px 13px 0px 0px;
    width: 56%;
    background-color: #89898e;
    height: 52px;
}
tr:nth-child(even){
    background:#dedede;
}
table{
    margin-left:20%;
    caption-side: bottom;
    font-family: Arial, Helvetica, sans-serif;
  width: 56%;
}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
.editbutton{font-weight: 700!important;
    font-size: 16px;
    position: absolute;
    line-height: 12px;
    text-align: center;
    outline: none;
    padding: 8px 16px!important;
    width: auto!important;
    margin: 0!important;
    -ms-flex-item-align: end;
    align-self: flex-end;
    white-space: nowrap;
    background-color: #00CB12;
    color: white;
    border-radius: 2px!important;
    border: 1px solid #00CB12;
    right: 240px;
    
}
.editbutton:hover{
    transform: scale(1.1);
}
.profile{
    font-size: 31px;
    position: absolute;
    font-weight: 700;
    left: 44%;
    top: 17%;
    font-family: emoji;
    color: #2bef4c;
}
                    </style>
<form action="updatedatafunc.php" method="post">
<div class="header"></div>
<div class="profile">PROFILE</div>
<table>
     <tr><td>Name :</td>
         <td><input type="text" name="name" value="<?php echo $data['Name'];?>"></td>
     </tr>
     <tr><td>Age :</td>
     <td><input type="number" name="age" value="<?php echo $data['Age'];?>"></td>
     </tr>
     <tr><td>Gender : </td>
     <td><input type="text" name="sex" value="<?php echo $data['Sex'];?>"></td>
     </tr>
     <tr><td>Phone no.</td>
     <td><input type="text" pattern="[0-9]{10,12}"  maxlength="10"  name="phonen" value="<?php echo $data['Phone_no'];?>"></td>
      </tr>
      
      <tr><td>Email-Id :</td>
     <td><input type="text" name="email" value="<?php echo $data['Email_id'];?>"></td>
      </tr>
     <tr><td>Trainer Name : </td>
     <td><?php echo $data['Trainer_Name'];?></td>
     </tr>
     <tr>
     <td>Workout :</td>
     <td>
     <div class="dropdown">
                <select type="text" name="wokout" style="
    width: 47%;
    height: 31px;"class="dropbtn" required="true">
                    <div class="dropdown-content">
                        <option  class= "button" selected value="<?php echo $data['Workout_Type'];?>" disabled><?php echo $data['Workout_Type'];?></option> 
                        <option  class= "button"  value = "Aerobics">Aerobics</option>
                        <option  class= "button"  value = "Boot-Camp">Boot-Camp</option>
                        <option  class= "button"  value = "Calisthenics">Calisthenics</option>
                        <option  class= "button"  value = "Kick Boxing">Kick Boxing</option>
                        <option  class= "button"  value = "Yoga">Yoga</option>
                        <option  class= "button"  value = "Zumba">Zumba</option>
                </select>   
            </div>
            </td>
     
     <input type="hidden" name="memid" value="<?php echo $data['Member_Id']?>">
     <input type="hidden" name="mememail" value="<?php echo $data['Email_id'];?>">
     <input type="hidden" name="defaultworkout" value="<?php echo $data['Workout_Type'];?>">
     </tr>
</table>
<button class="editbutton" type="submit"><span>Update</span></button></a></td>
</form>

     
</body>
</html>