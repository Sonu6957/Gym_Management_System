
<?php
session_start();
include('memlayout.php');
include('../dbcon.php');
{
    if(isset($_SESSION['uid']))
    { $qryinitial="SELECT `Email_Id` FROM `membersignin` WHERE `Memid` ='".$_SESSION['uid']."'";
      $runqryinitial=mysqli_query($con,$qryinitial);
      $memdata=mysqli_fetch_assoc($runqryinitial);
      $em=$memdata['Email_Id'];
      $qry="SELECT * FROM `member` WHERE `Email_id`='$em'";
        $fetch=mysqli_query($con,$qry);
        $data=mysqli_fetch_assoc($fetch);
      $qrypayment="SELECT `Fees` from `workout` where `Workout_Type`='".$data['Workout_Type']."'";
      $fetchqrypayment=mysqli_fetch_assoc(mysqli_query($con,$qrypayment));
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
<title>Payments</title>
<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900);
@import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,200,300,500,600,700,900);
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  flex-direction: column;
}

* {
  box-sizing: border-box;
}

html {
  background-color: white;
  font-family: "Lato", sans-serif;
}

.price h1 {
  font-weight: 300;
  color: #18C2C0;
  letter-spacing: 2px;
}

.card {
  margin-top: 30px;
    margin-bottom: 30px;
    width: 520px;
    height: 400px;
    box-shadow: 2px 4px 12px #0d0c0c;
}
.card .row {
  height: 25%;
  --bs-gutter-x: 0;
  display: block;
    width: 100%;
    border-bottom: 1.2px solid #171a3d;
}
.card .row:last-child {
  border: none;
}
.card .paypal {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.card .details {
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.card .paypal, .card .credit {
  background-color: white;
}
.card .cardholder, .card .number, .card .details {
  background-color: white;
}

.paypal .left, .paypal .right, .credit .left, .credit .right {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  width: auto;
}
.paypal .left, .credit .left {
  float: left;
  margin-left: 43px;
}
.paypal .left label, .credit .left label {
  margin-left: -4px;
  font-size: 1rem;
  cursor: pointer;
  font-weight: 700;
  letter-spacing: 0.5px;
  color: #292b52;
}
.paypal .left input[type=radio], .credit .left input[type=radio] {
  visibility: hidden;
}
.paypal .left .radio, .credit .left .radio {
  position: absolute;
  top: -2px;
  left: -20px;
  border: 3px solid #414365;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: #292B52;
  transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
.paypal .left .radio::before, .credit .left .radio::before {
  position: absolute;
  content: "";
  border-radius: 50%;
  top: 5px;
  left: 5px;
  width: 9px;
  height: 9px;
  background-color: transparent;
  transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
.paypal .right, .credit .right {
  float: right;
  margin-right: 48px;
  margin-left: 0;
}
.paypal .right img, .credit .right img {
  width: 42px;
  height: 30px;
  margin-left: 10px;
}

input[type=radio]:checked ~ .radio {
  border: 3px solid #90E1E3;
  background-color: #18C2C0;
}
input[type=radio]:checked ~ .radio::before {
  background-color: #fff;
}

.cardholder .info, .number .info {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  margin-left: 40px;
  width:auto;
}
.cardholder .info label, .number .info label {
  display: inline-block;
  letter-spacing: 0.5px;
  color: #171a3d;
  width: 100px;
}
.cardholder .info input, .number .info input {
  display: inline-block;
  max-width: 300px;
  width: 300px;
  background-color: transparent;
  font-family: "Source Code Pro";
  border: none;
  outline: none;
  margin-left: 50px;
  color: #171a3d;
}
.cardholder .info input::-moz-placeholder, .number .info input::-moz-placeholder {
  font-family: "Source Code Pro";
  color: #444880;
}
.cardholder .info input:-ms-input-placeholder, .number .info input:-ms-input-placeholder {
  font-family: "Source Code Pro";
  color: #444880;
}
.cardholder .info input::placeholder, .number .info input::placeholder {
  font-family: "Source Code Pro";
  color: #444880;
}

#cardnumber::-moz-placeholder {
  letter-spacing: 2px;
}

#cardnumber:-ms-input-placeholder {
  letter-spacing: 2px;
}

#cardnumber, #cardnumber::placeholder {
  letter-spacing: 2px;
}

.details .left, .details .right {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
.details .left {
  float: left;
  padding-left: 40px;
  width: 50%;
  
}
.details .left label {
  letter-spacing: 0.5px;
  color: #171a3d;
  width: 100px;
  margin-right: 20px;
  font-size: 14px;
}
.details .left select {
  font-family: "Source Code Pro";
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background: transparent;
  border: none;
  outline: none;
  color: #444880;
  font-size: small;
}
.details .left span {
  font-family: "Source Code Pro";
  color: #444880;
  margin: 0 2px;
}
.details .right {
  float: right;
  width: 50%;
}
.details .right label {
  margin-right: 20px;
  color: #171a3d;
}
.details .right input {
  text-align: center;
  width: 50px;
  font-family: "Source Code Pro";
  cursor: pointer;
  background: transparent;
  border: none;
  outline: none;
  color: #171a3d;
}
.details .right input::-moz-placeholder {
  font-family: "Source Code Pro";
  color: #444880;
}
.details .right input:-ms-input-placeholder {
  font-family: "Source Code Pro";
  color: #444880;
}
.details .right input::placeholder {
  font-family: "Source Code Pro";
  color: #444880;
}
.details .right span {
  text-align: center;
  display: inline-block;
  font-family: "Source Code Pro";
  cursor: pointer;
  margin-left: 50px;
  color: #18C2C0;
  width: 24px;
  height: 24px;
  border: 2px solid #18C2C0;
  border-radius: 50%;
}

.button button {
  font-size: 1.2rem;
  font-weight: 400;
  letter-spacing: 1px;
  width: 520px;
  background-color: #18C2C0;
  border: none;
  color: #fff;
  padding: 18px;
  border-radius: 5px;
  outline: none;
  transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
.button button:hover {
  background-color: #15aeac;
}
.button button:active {
  background-color: #139b99;
}
.button button i {
  font-size: 1.2rem;
  margin-right: 5px;
}
</style>
<form action="paymentfunc.php" method="post">
<div class="container">
    <div class="price">
        <h1>Awesome, that's <?php echo $fetchqrypayment['Fees']?>!</h1>
    </div>
    <div class="card__container">
        <div class="card" style="
    border-radius: 8px 6px 6px 8px;
">
           <!-- <div class="row paypal">
                <div class="left">
                    <input id="pp" type="radio" name="payment" />
                    <div class="radio"></div>
                    <label for="pp">Paypal</label>
                </div>
                <div class="right">
                    <img src="paypal.jpg" alt="paypal" />
                </div>
            </div>-->
            <div class="row credit" style="
    border-radius: 8px 6px 0px 0px;
">
                <div class="left">
                    <input id="cd" type="hidden" name="payment" value="success"/>
                    
                    <label for="cd">Debit/ Credit Card</label>
                </div>
                <div class="right">
                    <img src="visa.png" alt="visa" />
                    <img src="mastercard.png" alt="mastercard" />
                    <img src="rupay.png" alt="amex" />
                    <img src="maestro.png" alt="maestro" />
                </div>
            </div>
            <div class="row cardholder">
                <div class="info">
                    <label for="cardholdername">Name</label>
                    <input placeholder="Cardholder name" id="cardholdername" type="text" required="true"/>
                </div>
            </div>
            <div class="row number">
                <div class="info">
                    <label for="cardnumber">Card number</label>
                    <input id="cardnumber" type="text" pattern="[0-9]{16,19}" maxlength="19" placeholder="0000-0000-0000-0000"required="true"/>
                </div>
            </div>
            <div class="row details" style="
    border-radius: 0px 0px 6px 8px;
">
                <div class="left">
                    <label for="expiry-date">Expiry</label>
                    <select id="expiry-date" required="true">
                        <option>MM</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span>/</span>
                     <select id="expiry-date" required="true">
                        <option>YYYY</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2016">2031</option>
                        <option value="2017">2032</option>
                        <option value="2018">2033</option>
                        <option value="2019">2034</option>
                    </select>
                </div>
                <div class="right">
                    <label for="cvv">CVC/CVV</label>
                    <input type="password" maxlength="4" placeholder="123" required="true"/>
                    <span data-balloon-length="medium" data-balloon="The 3 or 4-digit number on the back of your card." data-balloon-pos="up">i</span>
                </div>
            </div>
        </div>
    </div>
    <div class="button">
        <button type="submit"><i class="ion-locked"></i> Confirm and Pay</button>
    </div>
</form>
</div>