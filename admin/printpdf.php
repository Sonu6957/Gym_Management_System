<?php
include('../mpdf/vendor/autoload.php');
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
$mpdf = new \Mpdf\Mpdf();
$css=file_get_contents('pdfstyle.css');
$month=$_GET['monthly'];
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
    $html='
    <div class="contact">
    <span>
    Fitness Club Private Ltd, Parallel to R.V Road, <br>
    #1, Deewan N Madhava Rao Road,<br>
    Basavanagudi, Bengaluru<br>
    9635879961
    </div>
    <img src="logo1.png" style="width:70mm;height:10mm;left:10px"/>
    <table class="table table-dark table-striped">
 <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Payment</th>       
    </tr>
    
    </thead>';
    $count=0;
    $sumfee=0;
    while($data=mysqli_fetch_assoc($runmonth))
    { //to get fees
      
      $qryfee="SELECT `Fees` FROM `workout` WHERE `Workout_Type`='".$data['Workout_Type']."'";
      $runfee=mysqli_query($con,$qryfee);
      $datafee=mysqli_fetch_assoc($runfee);
      $sumfee=$sumfee+$datafee['Fees'];
        $count++;
        $html.='<tbody>
        <tr>
          
          <th width=20px>'.$data['Name'].'</th>
          <td>'.$data['Email_id'].'</td>
          <td>'.$datafee['Fees'].'</td>
          <td>'.$data['Payment Date'].'</td>';
         if($data['Status']=='Paid'){
            $html.='<td class="p">'.$data['Status'].'</td>'; 
          }
          
          $html.='</tr> </tbody>';
        }
        
    $html.='</table>';
    $html.='<div class="k">
        <span>Total</span></div> <div class="k1"><span>'.$sumfee.'</span></div>';
   
                }
            
?>
<?php
$mpdf->WriteHTML("$css",1);
$mpdf->WriteHTML("$html",2);
$mpdf->Output();
?>