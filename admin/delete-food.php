<?php
include('../config/constants.php');


if(isset($_GET['id']) && isset($_GET['image_name']))
{

    $id=$_GET['id'];
    $image_name= $_GET['image_name'];
    if($image_name!=""){
        $path="../images/food/".$image_name;
        $remove=unlink($path);
        if($remove==false){
            $_SESSION['upload']="<div class='error'>failed to remove image</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        
        die();
        }
 }
 $sql="DELETE FROM tbl_food WHERE id=$id";
 $res=mysqli_query($conn,$sql);
 if($res==true){
    $_SESSION['delete']="<div class='success'>food deleted successfully.</div>";
    header('location:'.SITEURL.'admin/manage-food.php');
 }
else{
    $_SESSION['delete']="<div class='error'>failed to delete food</div>";
    header('location:'.SITEURL.'admin/manage-food.php');

}

}
else{
    $_SESSION['un']="<div class='error'>unauthorized access.</div>";
    header('location:'.SITEURL.'admin/manage-food.php');  


}
?>