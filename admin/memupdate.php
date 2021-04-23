<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
    echo " ";
    }
    else
    {
    header("location: ..\index.php");
    }   
    include('home.php');
?>
      
<style>
                    td {
 padding: 15px 20px;
 text-align: center;
}
th{
    border-radius: 13px 13px 0px 0px;
    text-align: center;
    height: 43px;
    padding: 15px 27px 11px 18px;
    background-color: #89898e;
}
tr:nth-child(even){
    background:#dedede;
}
td:nth-child(3){
    text-align:center;
    
}
th:nth-child(4){
    border-radius:0px 13px 0px 0px;;
}
th:nth-child(3){
    border-radius:13px 0px 0px 0px;
}
table{
    margin-left: 11%;
    margin-top: 4%;
    caption-side: bottom;
    font-family: Arial, Helvetica, sans-serif;
  width: 72%;
}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
.editbutton{
    margin-left: 34px;
    font-weight: 700!important;
    font-size: 16px;
    line-height: 12px;
    text-align: center;
    outline: none;
    padding: 8px 16px!important;
    width: auto!important;
    -ms-flex-item-align: end;
    align-self: flex-end;
    white-space: nowrap;
    background-color: #00CB12;
    color: white;
    border-radius: 2px!important;
    border: 1px solid #00CB12;
    
}
.editbutton:hover{
    transform:scale(1.1);
}
.editbutton1{
    margin-left: 23px;
    font-weight: 700!important;
    font-size: 16px;
    
    line-height: 12px;
    text-align: center;
    outline: none;
    padding: 8px 16px!important;
    width: auto!important;
    -ms-flex-item-align: end;
    align-self: flex-end;
    white-space: nowrap;
    background-color: #00CB12;
    color: white;
    border-radius: 2px!important;
    border: 1px solid #00CB12;    
}
.editbutton1:hover{
    transform:scale(1.1);
}
.searchallbutton{
    font-size:20px;
                border-radius: 9px;
                background-color: #00CB12;
                color:white;
                border-color: #00CB12;
                border-bottom: #00CB12;
                padding-bottom: 5px;
                width: 89px;
                margin-left: 10px;
}
input.searchallbutton:hover{
                background-color:#198754;
                border-color: #198754;
                transform:scale(1.1);

            }
                    </style>
    <style>
            ul li span{
                width: 106px;
            }

            }
            .searchbar Member-Nametext{
                margin-left:200px;
                font-size:19px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

            }
            .searchbar Member-Nameplaceholder{
                font-size: 20px;
                text-align: center;
                text-decoration: none;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            }
            .searchbutton{
                font-size:20px;
                border-radius: 9px;
                background-color: #00CB12;
                color:white;
                border-color: #00CB12;
                border-bottom: #00CB12;
                padding-bottom: 5px;
                width: 89px;
                
            }
            input.searchbutton:hover{
                background-color:#198754;
                border-color: #198754;
                transform:scale(1.1);
            }
            headname.headname{
                color:blue;
            }
    </style>
    <form style="height: 10px;"action="memupdate.php" method="post">
        <div class="searchbar" style="margin-top: 20px;margin-left: 32%;">
                    <Member-Nametext>Email Id:</Member-Nametext>
                    <Member-Nameplaceholder> <input type="text" name="mememail" value="" font-size="30px" style="width: 31%;"></Member-Nameplaceholder>
                    <Searchbtn><input class="searchbutton" type="submit" name="searchbutton" value="Search" font-size="2px"></Searchbtn>
                    <showall><input class="searchallbutton" type="submit" name="showall" value="Show All" font-size="2px"></showall>
        </div>
    </form>   
    <?php
            include('..\dbcon.php');
                if(isset($_POST['searchbutton']))
            {  
                $email=trim($_POST['mememail']);
                $qry="SELECT * FROM `member` WHERE `Email_id`='$email'";
                $run=mysqli_query($con,$qry);

                
                if(mysqli_num_rows($run)<1)
                {
        ?>
                    <script>alert('No data');
                    window.open('memupdate.php','_self');
                    </script> <?php
                }
                else
                {  ?>
                    
                    <table>
    <col style="width:10%">
    <col style="width:12%">
    <col style="width:15%">
    <col style="width:15%">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email Id</th>
        <th> </th>
    </tr>
                    <?php
                   
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    {
                        $count++;
                        ?>
                        <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $data['Name'];?></td>
                        <td><?php echo $data['Email_id'];?></td>
                        <td><a href="updatedata.php?id=<?php echo$data['Member_Id'];?>"><button class="editbutton" type="button"><span>Edit</span></button></a>
                        <a href="memdelfunc.php?id=<?php echo$data['Member_Id'];?>"><button class="editbutton1" type="button"><span>Delete</span></button></a></td>
                        </tr>
                        <?php 
                    }
                ?>
                </table>
                <?php
                }
}
?>

            <?php
            if(isset($_POST['showall']))
            {  
                $qry1="SELECT * FROM `member`";
                $run1=mysqli_query($con,$qry1);

                
                if(mysqli_num_rows($run1)<1)
                {
        ?>
                    <script>alert('No data');
                    window.open('memupdate.php','_self');
                    </script> <?php
                }
                else
                {  ?>
                    
                    <table>
    <col style="width:10%">
    <col style="width:12%">
    <col style="width:15%">
    <col style="width:15%">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email Id</th>
        <th> </th>
    </tr>
                    <?php
                   
                    $count=0;
                    while($data1=mysqli_fetch_assoc($run1))
                    {
                        $count++;
                        ?>
                        <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $data1['Name'];?></td>
                        <td><?php echo $data1['Email_id'];?></td>
                        <td><a href="updatedata.php?id=<?php echo$data1['Member_Id'];?>"><button class="editbutton" type="button"><span>Edit</span></button></a>
                        <a href="memdelfunc.php?id=<?php echo$data1['Member_Id'];?>"><button class="editbutton1" type="button"><span>Delete</span></button></a></td>
                        </tr>
                        <?php  
                    }
                ?>
                </table>
                <?php  
                }
            }
?>     