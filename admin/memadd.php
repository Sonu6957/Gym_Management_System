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
include ('../dbcon.php');
include('home.php');
$msg="";
if(isset($_POST['register']))
{ $email=$_POST['email'];
  $name=$_POST['name'];
  $age=$_POST['age'];
  $sex=$_POST['sex'];
  $phone=$_POST['phonen'];
  $password=$_POST['password'];
  $workout=$_POST['workout'];
  //Check email validity
  $qryc = "SELECT `Email_Id` FROM `membersignin` WHERE `Email_Id` ='$email'";
  $runc=mysqli_query($con,$qryc);
  $rowc=mysqli_num_rows($runc);
  if($rowc>0){
      $msg="This email-Id already exists.Please choose different one!!";
  }
  else{
  $qry="INSERT INTO `sign_up`(`Email_Id`, `Name`, `Password`, `Phone_no`, `Age`, `Sex`,`Workout_Type`) VALUES ('$email','$name','$password','$phone','$age','$sex','$workout')";
  $run=mysqli_query($con,$qry);
  $qryone="INSERT INTO `member`(`Name`,`Age`,`Sex`,`Phone_no`,`Email_id`,`Workout_Type`)SELECT `Name`,`Age`,`Sex`,`Phone_no`,`Email_id`,`Workout_Type` FROM `sign_up`s1 where s1.`Ssid`=(select max(Ssid)from `sign_up` s2)";
  $runqryone=mysqli_query($con,$qryone);
  $qrytwo="UPDATE member M,trainer T SET M.Trainer_Name= T.Name WHERE T.Training=M.Workout_Type";
  $runqrytwo=mysqli_query($con,$qrytwo);
  $qrythree="INSERT INTO `membersignin`(`Email_Id`,`Password`) VALUES ('$email' ,'$password')";
  $runthree=mysqli_query($con,$qrythree);
  if($runthree)
    {
            ?>
                    <script>alert('Registered Successfully');
                    window.open('admindash.php','_self');
                    </script>   
                    <?php
        
    }
    else
    {
        ?>
                    <script>alert('Data not inserted');
                    </script>   
                    <?php
    }
  }
}
?>
<html>
<head> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dim.css"/>
    <style>
        .dropdown{
                display: block;
            width: 100%;
            font-family: $font-family;
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            transition: 0.3s;
            background:white;
        }

        .dropdown:hover .dropdown-content 
        {
            display: block;
        }
        .button:hover
        {
            background-color: #757575;
            color:#fff;
        }
  
        .dropdown-content
         {
            display: none;
            width: 100%;
            position: absolute;
            margin-left: 0px;
            background-color: #fff;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }
        .dropbtn {
            text-align: left;
            color: #858585;
            margin-left: 0px;
            background-color: white;
            width: 340;
            height: 55;
            border-color: white;
            opacity: 90;
            border: 0;
            align: center;
            align-content: start;
        }
        select{
            padding: 1em 2em 1em 1em;
        }
        option{
            background-color:black;
        }
        .right_area {
    position: relative;
    top: 4px;
    left: 13px;
    width: 100%;
    height: 0px;
    margin-top: 0px;
    background: transparent;
}
.signup_btn {
    border: 4px solid #4cf450;
    background: transparent;
    float: left;
    margin-right: 0;
    margin-top: -1px;
    padding: 4px 1px 4px 0px;
    border-radius: 30px;
    text-align: center;
    width: 113px;
    opacity: 0;
    transform: translate3d(0, 200px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
}
        .button {
            background-color: #fff
        }
        @keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}
.dropbtn {
            
    text-align: left;
    color: #858585;
    margin-left: 0px;
    background-color: white;
    width: 340px;
    height: 55px;
    font-family:"Roboto";
    border-color: white;
    opacity: 90;
    border: 0;
    align: center;
    align-content: start;
        }
</style>
</head> 

<div class="user">
    <header class="user__header">
        
        <h1 class="user__title">Register Here</h1>
    </header>
    <div id="error" style="
    color: red;
    margin-top: 6px;
    FONT-SIZE: 14px;"><?php echo $msg?></div>
    
    <form class="form" action="memadd.php" method="post">
            <div class="form__group">
            
                <input type="text" name="name" placeholder="Name" class="form__input" required="true">
            </div>

            <div class="form__group">
                
                    <input type="number" name="age" placeholder="Age" class="form__input"required="true">
                </div>
                <div class="dropdown">
                <select type="text" name="sex" class="dropbtn"required="true">
                    <div class="dropdown-content">
                        <option  class= "button" selected disabled name = "submit">Sex</option> 
                        <option  class= "button"  value = "Male">Male</option>
                        <option  class= "button"  value = "Female">Female</option>
                </select>   
            </div>

            <div class="form__group">
                
                    <input type="text" pattern="[0-9]{10,12}"  maxlength="10" name="phonen" placeholder="Phone Number" class="form__input"required="true">
                </div>
                
            <div class="form__group">
                <input type="email" name="email"placeholder="Email" class="form__input"required="true">
            </div>
        <div class="dropdown">
                <select type="text" name="workout" class="dropbtn" required="true">
                    <div class="dropdown-content">
                        <option  class= "button" selected disabled name = "submit">Work-out</option> 
                        <option  class= "button"  value = "Aerobics">Aerobics</option>
                        <option  class= "button"  value = "Boot-Camp">Boot-Camp</option>
                        <option  class= "button"  value = "Calisthenics">Calisthenics</option>
                        <option  class= "button"  value = "Kick Boxing">Kick Boxing</option>
                        <option  class= "button"  value = "Yoga">Yoga</option>
                        <option  class= "button"  value = "Zumba">Zumba</option>
                    </div>
                </select>   
            </div>
            <div class="form__group">
                <input type="password" name="password"placeholder="Password" class="form__input" required="true">
            </div>
            <input type="submit"name="register"class="moonie"value="REGISTER" style="
    display: block;
    width: 100%;
    padding: 20px;
    font-family: &quot;Roboto&quot;;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background:#00CB12;
    transition: 0.3s;
    
    &:hover {
    background: darken(#ABA194, 5%);">    
    </form>
</div>
</html>
