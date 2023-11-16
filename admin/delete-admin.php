<?php
//1. get the id of admin to be deleted
include('../config/constants.php');
 $id=$_GET['id'];


//2.create sql query to delete admin
$sql="DELETE FROM tbl_admin WHERE id=$id";

$res = mysqli_query($conn,$sql);

//3. redirect to manage admin page with message (success/error)

if($res==TRUE){
   // echo "admin deleted";
$_SESSION['delete']="<div class='success'>admin deleted successfully </div>";
header('location:'.SITEURL.'admin/manage-admin.php');
}

else{

    //echo "failedto  admin";
    $_SESSION['delete']="<div>, class='error'admin NOY deleted successfully</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}

?>