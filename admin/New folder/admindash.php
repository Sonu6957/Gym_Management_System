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
?>
