<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <br>
        <?php  
 if(isset($_SESSION['add']))
 {
      echo $_SESSION['add'];//displaying session message if set
      unset($_SESSION['add']);//removing session message
 }
?>
        <form action="" method="POST">
<table class="tbl-30">
    <tr>
        <td>full name</td>
        <td><input type="text" name="full_name" placeholder="enter name "></td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="usename" placeholder="enter your username "></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password" placeholder="enter your password "></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="aad admin" class="btn-sec">
        </td>
    </tr>
    
</table>


    </form>
    </div>
</div>



<?php include('partials/footer.php'); ?>
<?php
//procees the value from form tand save  it in database
//check wheather the summit button is cleared or not
if(isset($_POST['submit']))
{
    //button clicked
    // echo"button clicked";
    //get the data from form
    $full_name = $_POST['full_name'];
  $usename=$_POST['usename'];
   $password=md5($_POST['password']);//password encryption with md5
   //2. sql query to save the data into database
   $sql="INSERT INTO tbl_admin SET
   full_name='$full_name',
   usename='$usename',
   password='$password'
   ";
   //3.execute query and saving data into database
   
 $res = mysqli_query($conn, $sql);
//  or die(mysqli_error());
//4. chechk whaether query is executed data is inserted or not and dispaly approiate message
if($res==TRUE){
    //data inserted
    //echo "data inserted";
    //create a session variable to display message
    $_SESSION['add']="admin added successfully";
    //redirect
    header("location:".SITEURL.'admin/manage-admin.php');
}
else{
    //failed to insert data
    //echo "failed to insert";
     //create a session variable to display message
     $_SESSION['add']="failed to add admin";
     //redirect
     header("location:".SITEURL.'admin/manage-admin.php');
}

}

?>