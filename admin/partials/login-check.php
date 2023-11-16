<?php


if(!isset($_SESSION['user'])){




    $_SESSION['no']="<div class='error text-center'> please login to access Admin panel</div>";
    header('location:'.SITEURL.'admin/login.php');

}


?>
