<?php
include("branches.php");
?>
<?php
include('../dbcon.php');
if(isset($_POST['Update']))
{
    $name=$_POST['brname'];
    $address=$_POST['bradd'];
	$phone=$_POST['brphone'];
	$qry="INSERT INTO `branch`(`Branch_Name`, `Address`, `Phone_No.`) VALUES ('$name','$address','$phone')";
  $run=mysqli_query($con,$qry);
  if($run){
      ?>
      <script>
      window.open('branches.php','_self');
      </script>
      <?php
  }
  else
    {
        ?>
					<script>alert('Data not inserted ');
					</script>	
					<?php
    }
}
?>
 <div class="col">
    <style>
        .textbox {
            width: 43%;
    overflow: hidden;
    font-size: 2px;
   
    color: white;

  }
  .textbox input {
       
       border : none;
       outline : none;
       background : none;
       color: #212529;
       float : left;
   
     }
     .updatebutton
     {font-weight: 700!important;
    font-size: 20px;
    position: absolute;
    line-height: 12px;
    text-align: center;
    bottom:1%%;
    
    height: 38px;
    outline: none;
    padding: 2px 15px!important;
    width: auto!important;
    margin: 0!important;
    -ms-flex-item-align: end;
    align-self: flex-end;
    white-space: nowrap;
    background-color: #00CB12;
    color: white;
    border-radius: 5px!important;
    border: 1px solid #00CB12;
    right: -82.8%;
}
.updatebutton:hover{
  transform: scale(1.1);
}
    </style>

    <div class="hideadd"
    style="
    position: absolute;
    right: 3.2%;
    top: 88px;
    width: 73px;
    height: 37px;
    background-color: white;
">
</div>

    <form action="addbranches.php" method="post">
      <div class="card" style="width: 18rem;    margin-top: 27px;">
        <div class="card-body" style="
          width: 301px;
          height: 208px;
      ">
          <h5 class="card-title"style="margin-left: 14px;"><img class="pin"style="height: 20px;
          transform: rotate(-40deg);
          top: 17px;
          left: 6px;
          position: absolute;"src="https://www.flaticon.com/svg/static/icons/svg/149/149059.svg"style="height: 20px" style="width: 20px">Branch Name:</h5>
          <div class="textbox" style="position: absolute;top: 6%;left: 56%;">
      <input type="text" name="brname" value="" style="font-size:1.25rem ;font-weight: 650; " required="true"></input>
      </div>
      <div class="line" style="
    background-color: #212529;
    width: 126px;
    height: 2px;
    position: absolute;
    top: 40px;
    left:159px;
    "></div>

          <brc>
          <h6 class="card-subtitle mb-2 text-muted"style="
          margin-top: 10px;
          margin-left: 8px;
          color: #6c757d00!important;
      ">Branch Code: </h6></brc><hr>
          <p class="card-text">
            <img src="https://www.flaticon.com/svg/static/icons/svg/684/684908.svg"style="height: 20px" style="width: 20px"> Address: 
            <div class="textbox" style="position: absolute;top: 46%;left: 36%;width:64%;">
      <input type="text" name="bradd" value="" style="font-size:1rem ;font-weight: 400; " required="true"></input>
      <div class="line" style="
    background-color: #212529;
    width: 174px;
    height: 2px;
    position: absolute;
    top: 24px;"></div>
</div>
            
            <sp style="
          position: absolute;
          margin-top: 3px;
      ">
            <img src="https://www.flaticon.com/svg/static/icons/svg/483/483947.svg"style="height: 20px" style="width: 20px"></img></sp><pn style="
          position: absolute;
          margin-left: 24px;
          margin-top: 10px;"required="true">Phone no.</pn>
          <div class="textbox" style="position: absolute;top: 71%;left: 40%;width:56%;">
      <input type="text" pattern="\d*" maxlength="10" name="brphone" value="" style="font-size:1rem ;font-weight: 400; "></input>

      <div class="line" style="
    background-color: #212529;
    width: 174px;
    height: 2px;
    position: absolute;
    top: 24px;"></div>  
    </div>
    <div style="color:white;text-decoration:none;"><input name="Update" value="Update" class="updatebutton" type="submit" required="true"></div>
    </form>     
      </div>
      </div>
