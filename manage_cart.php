<?php include('partials-font/menu.php');?>
<?php

//check whaether food id is set or not
if(isset($_GET['food_id']))
{
    //get the food id and details of the selected food
$food_id=$_GET['food_id'];
//get details of selected food  
$sql="SELECT * FROM tbl_food WHERE id=$food_id";
//execute the query
$res=mysqli_query($conn,$sql);
//count the rows
$count=mysqli_num_rows($res);
//check whether the data is available or not
if($count==1){
    //get the data from database
$row=mysqli_fetch_assoc($res);

$title=$row['title'];
$price=$row['price'];
$image_name=$row['image_name'];

}
else{

    header('location:'.SITEURL);
}
}
else{
    //redirect page 
    header('location:'.SITEURL);
}
?>