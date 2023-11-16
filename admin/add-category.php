<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
<h1> ADD category</h1>
<br><br>

 <?php 

if(isset($_SESSION['add']))
{
echo $_SESSION['add'];
unset($_SESSION['add']);

}
if(isset($_SESSION['upload']))
{
echo $_SESSION['upload'];
unset($_SESSION['upload']);

}


?>    
<br><br>
<!-- add category from starts -->
 <form action=""method="POST" enctype="multipart/form-data">

<table class="tbl-30">
    <tr>
        <td>Title:</td>
        <td> 
            <input type="text" name="title" placeholder="ctaegory title">
        </td>
    </tr>
    <tr>
      <td>select image:</td>  
      <td>
        <input type="file" name="image">
      </td>
    </tr>
<tr>
    <td>Featured</td>
    <td>
    <input type="radio" name="featured"  value="Yes">Yes
    <input type="radio" name="featured"  value="No">No
</td>
</tr>
<tr>
    <td>Active:</td>
    <td>
    <input type="radio" name="active"  value="Yes">Yes
    <input type="radio" name="active"  value="No">No
</td>
</tr>
<tr>
    <td colspan="2">

    <input type="submit" name="submit"  value="Add category" class="btn-sec">
    
</td>
</tr>



</table>
</form> 


<!-- add category from ends -->
 <?php
if(isset($_POST['submit'])){

    
$title=$_POST['title'];

if(isset($_POST['featured'])){
    $featured=$_POST['featured'];
}
else{
    $featured="No";
}
if(isset($_POST['active']))
{
    $active=$_POST['active'];
}
else{
    $active="No";
}

//print_r($_FILES['image']);

//die();

 if(isset($_FILES['image']['name'])){

    $image_name=$_FILES['image']['name'];
if( $image_name != "")
{
//get the extension of image
    $ext = end(explode('.',$image_name));
   //rename image
    $image_name="Food_Category_".rand(000,999).'.'.$ext;
//upload image
    $source_path=$_FILES['image']['tmp_name'];
 $destination_path="../images/category/".$image_name;
 //finally upload the image
 
 $upload=move_uploaded_file($source_path,$destination_path);


// check wheater the image uploaded or not
 if($upload==false){
    $_SESSION['upload']="<div class='error'>failed to upload image </div>";
    header('location:'.SITEURL.'admin/add-category.php');
die();
}
}

}
else{

$image_name="";

}

$sql="INSERT INTO tbl_category SET
title='$title',
image_name='$image_name',
featured='$featured',
active='$active'
";
$res = mysqli_query($conn,$sql);
if($res==TRUE){


    $_SESSION['add']="<div class='success'>category Added successfully</div>";
    header('location:'.SITEURL.'admin/manage-category.php');
}
else{

    $_SESSION['add']="<div class='error'>category failed added</div>";
    header('location:'.SITEURL.'admin/add-category.php');


}


}





?>    






    </div>
</div>

<?php include('partials/footer.php'); ?>