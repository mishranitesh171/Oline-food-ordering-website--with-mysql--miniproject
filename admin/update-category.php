<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
<h1>update category</h1>
<br><br>
<?php 
//check whaether the id is set or not
if(isset($_GET['id'])){
    //get
    $id=$_GET['id'];

    $sql="SELECT *FROM tbl_category WHERE id=$id";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count==1){

$row=mysqli_fetch_assoc($res);
$title=$row['title'];
$current_image = $row['image_name'];
$featured=$row['featured'];
$active=$row['active'];

    
        //     $_SESSION['login']="<div class='success'> login successful.</div>";
          // $_SESSION['user']=$usename;//to check whaether the user login or not and logout will unset it
        
        // //redirct to home page dashbord
        //     header('location:'.SITEURL.'admin/');
        }
        else{
            $_SESSION['no-category-found']="<div class='error'> category not found</div>";
          //redirect to home page dashboard
          header('location:'.SITEURL.'admin/manage-category.php');
        }
        }
else{
    header('location:'.SITEURL.'admin/manage-category.php');
}

?>
<form action="" method="POST" enctype="multipart/form-data">
<table class="tbl-30">
    <tr>
        <td>title:</td>
        <td>
            <input type="text" name="title" value="<?php echo $title; ?>"> 
        </td>
    </tr>
    <tr>
        <td>current image:</td>
        <td>
           
        <?php 
        if($current_image != ""){
?>

<img src="<?php echo SITEURL;?>images/category/<?php echo $current_image;?>"width="150px">

            <?php 

        }
        else{
            echo"<div class='error'> image not added</div>";
        }
        
        ?>
        </td>
    </tr>
    <tr>
        <td>New image:</td>
        <td>
            <input type="file" name="image" value="">
        </td>
    </tr>
    <tr>
        <td>Featured:</td>
        <td>
            <input <?php if($featured=="Yes"){echo "checked";}?> type="radio" name="featured" valuue="Yes">Yes
            <input <?php if($featured=="No"){echo "checked";}?> type="radio" name="featured" valuue="No">No
        </td>
    </tr>
    <tr>
        <td>Active:</td>
        <td>
            <input <?php if($active=="Yes"){echo "checked";}?> type="radio" name="active" valuue="Yes">Yes
            <input <?php if($active=="No"){echo "checked";}?>type="radio" name="active" valuue="No">No
        </td>
    </tr>

    <tr>
        <td>
            <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" name="submit" value="update category" class="btn-sec">
        </td>
    </tr>
</table>
</form>
<?php

if(isset($_POST['submit'])){
   // echo "clicked";
  // 1.get all valure from our form
$id=$_POST['id'];
$title=$_POST['title'];
$current_image=$_POST['current_image'];
$featured=$_POST['featured'];
$active=$_POST['active'];

$sql2="UPDATE  tbl_category SET
title='$title',
featured='$featured',
active='$active'
WHERE id=$id

";


$res2 = mysqli_query($conn, $sql);
if($res2==true){
    $_SESSION['update']="<div class='success '> category updated succfeully</div>";
    //redirect to home page dashboard
      header('location:'.SITEURL.'admin/manage-category.php');
}
else{
    $_SESSION['update']="<div class='error '> failed to upadte category.</div>";
    //redirect to home page dashboard
      header('location:'.SITEURL.'admin/manage-category.php');
}

}
?>
    </div>
</div>





<?php include('partials/footer.php'); ?>