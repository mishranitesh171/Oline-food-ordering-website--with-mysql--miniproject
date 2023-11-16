<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>update admin</h1>
        <br> <br>
 <?php
 $id=$_GET['id'];

$sql="SELECT *FROM tbl_admin WHERE id= $id";
$res = mysqli_query($conn, $sql);
if($res==TRUE){
    $count=mysqli_num_rows($res);
    
    if($count==1){
         $row=mysqli_fetch_assoc($res);

         $full_name=$row['full_name'];
     $usename=$row['usename'];


    }

else{
    header('location:'.SITEURL.'admin/manage-admin.php');
}

}  ?>





        <form action="" method="POST">
<table class=" tbl-30">
 <tr>
    <td>full name</td>
    <td>
         <input type="text" name="full_name" value="<?php echo $full_name;?> "> 
    </td>
</tr>
<tr>
    <td>username</td>
    <td>
        <input type="text" name="usename" value="<?php echo $usename;?>">
    </td>
</tr>
<tr>
    <td colspan="2">  
         <input type="hidden" name="id" value="<?php echo $id; ?>"> 
<input type="submit" name="submit" value="update Admin" class="btn-sec">
    </td>
</tr>





</table>



        </form>
    </div>
</div>

<?php
if(isset($_POST['submit'])){

  $id=$_POST['id'];
$full_name=$_POST['full_name'];
  $usename=$_POST['usename'];

$sql=" UPDATE tbl_admin SET
full_name='$full_name',
usename='$usename'
WHERE id ='$id'
";
$res = mysqli_query($conn, $sql);
if($res==TRUE){
    $_SESSION['update']="<div class='success'>admin updated successfully </div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}
else{
    $_SESSION['update']="<div class='success'>failed to delete admin </div>";

    header('location:'.SITEURL.'admin/manage-admin.php');
}










}







?>



<?php include('partials/footer.php'); ?>