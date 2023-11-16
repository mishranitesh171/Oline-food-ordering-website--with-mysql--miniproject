<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>
        <br> <br>
        <?php
if(isset($_SESSION['upload']))
{
echo $_SESSION['upload'];
unset($_SESSION['upload']);

}
 ?>





        <form action="" method="POST" enctype="multipart/form-data">
    <table class="tbl-30"> 

<tr>
    <td>Title</td>
    <td>
        <input type="text" name="title" placeholder="title of the food">
    </td>
</tr>
<tr>
    <td>Description:</td>
    <td>
        <textarea name="description"  cols="30" rows="5" placeholder="Description of Food"></textarea>
    </td>
</tr>
<tr>
    <td>PRICE:</td>
    <td>
        <input type="number" name="price">
    </td>
</tr>
<tr>
    <td>select image:</td>
    <td>
        <input type="file" name="image">
    </td>
</tr>
<tr>
<td>category:</td>
<td>
<select name="category" id="">
    <?php
$sql="SELECT *FROM tbl_category";
$res=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($res);
           if($count>0){
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $title=$row['title'];
        ?>

        <option value="<?php echo $id;?>"><?php echo $title;?></option>
        
        
            <?php
    }
}
else{
?>
    <option value="0">NO category Found</option>

<?php
}
?>


        </select>

</td>
</tr>
<tr>
    <td>Featured:</td>
    <td>
        <input type="radio" name="featured" value="Yes">Yes
        <input type="radio" name="featured" value="No">No
    </td>
</tr>
<tr>
    <td>active:</td>
    <td>
    <input type="radio" name="active" value="Yes">Yes
        <input type="radio" name="active" value="No">No
    </td>
</tr>
<tr>
    <td colspan="2">
        <input type="submit" name="submit" value="Add Food" class="btn-sec">
    </td>
</tr>
</table>
</form>

<?php
//to check whaether button is clicked or not
if(isset($_POST['submit'])){
   // echo "clicked";
//1.get data from form
$title=$_POST['title'];
$description=$_POST['description'];
$price=$_POST['price'];
$category=$_POST['category'];

if(isset($_POST['featured'])){
    $featured= $_POST['featured'];
}
else{
    $featured="No";
}
if(isset($_POST['active'])){
    $actve=$_POST['active'];
}else{
$active="No";
}

//2.upload image

if(isset($_FILES['image']['name'])){
    $image_name=$_FILES['image']['name'];
    
    if($image_name!=""){
         $ext= end(explode('.',$image_name));
//create new name of image
$image_name="Food-Name-".rand(0000,9999).".".$ext;
$source_path=$_FILES['image']['tmp_name'];
$destination_path="../images/food/".$image_name;
//finally upload the image

$upload=move_uploaded_file($source_path,$destination_path);
if($upload==false){
    $_SESSION['upload']="<div class='error'>failed to upload image </div>";
    header('location:'.SITEURL.'admin/add-food.php');
die();
}
}
}
 else
 {
        $image_name= "";
 }
//3.insert into database
//create a sql query
$sql2="INSERT INTO tbl_food SET 
title='$title',
description='$description',
price='$price',
image_name='$image_name',
category_id='$category',
featured='$featured',
active='$active'";
$res2=mysqli_query($conn,$sql2);
if($res2==true){
    $_SESSION['add']="<div class='success '> food add successfully</div>";
    header('location:'.SITEURL.'admin/manage-food.php');
}
else{
    $_SESSION['add']="<div class='error '> food add successfully</div>";
    header('location:'.SITEURL.'admin/manage-food.php');
}




//4.redirect with message to manage food page
}

?>




</div>
</div>
<?php include('partials/footer.php');?>