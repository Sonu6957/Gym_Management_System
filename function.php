<?php
include('dbcon.php');
function getData($id,$table){
    include('dbcon.php');
    $array = array();
    $q=mysqli_query($con,"SELECT * FROM `$table` WHERE `Admin_ID`=$id");
    if($q){
    while($r = mysqli_fetch_assoc($q))
    { 
        $array['Name']=$r['Name'];
        $array['Gender']=$r['Gender'];
        $array['Phone No']=$r['Phone No'];
        $array['Age']=$r['Age'];
        $array['Email_ID']=$r['Email_ID'];
    }
}
 return $array;
}
function getID($email){
    include('dbcon.php');
    $qry="SELECT `Admin_ID` FROM `admin` WHERE `Email_ID`=$email";
    $run=mysqli_query($con,$qry);
    if($run){
    while( $r = mysqli_fetch_assoc( $run) ){

      return $r['Admin_ID'];
    }
}
}
?>