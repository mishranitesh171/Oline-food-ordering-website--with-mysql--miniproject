<?php include('partials/menu.php'); ?>

      <!-- main content section start -->
<div class="main-content">

<div class="wrapper">
 <h1>Manage Admin</h1>  
 <br>
 <?php  
 if(isset($_SESSION['add']))
 {
      echo $_SESSION['add'];//displaying session message
      unset($_SESSION['add']);//removing session message
 
}
if(isset($_SESSION['delete']))
 {
      echo $_SESSION['delete'];//displaying session message
      unset($_SESSION['delete']);//removing session message
 
}
if(isset($_SESSION['update']))
 {
      echo $_SESSION['update'];//displaying session message
      unset($_SESSION['update']);//removing session message
 
}
if(isset($_SESSION['user-not-found']))
 {
      echo $_SESSION['user-not-found'];//displaying session message
      unset($_SESSION['user-not-found']);//removing session message
 
}
if(isset($_SESSION['pwd-not-change']))
 {
      echo $_SESSION['pwd-not-change'];//displaying session message
      unset($_SESSION['pwd-not-change']);//removing session message
 }
if(isset($_SESSION['change-pwd']))
 {
      echo $_SESSION['change-pwd'];//displaying session message
      unset($_SESSION['change-pwd']);//removing session message
 
}
?>
<br> <br> <br>
  <!-- button to add admin -->
 
 <a href="add-admin.php" class="btn-primary">ADD ADMIN</a>
 <br> <br> <br>

 <table class="tbl-full">
      <tr>
            <th>s.n</th>
            <th>full name</th>
            <th>username</th>
            <th>action</th>
      </tr>
      <?php  
 
 //query toget all admin
 $sql="SELECT *FROM tbl_admin";

 $res = mysqli_query($conn, $sql);
 //check weather the query is executed or not
 if($res==TRUE){
      $count=mysqli_num_rows($res);
      $sn=1;
      if($count>0){
while($rows=mysqli_fetch_assoc($res)){

      $id=$rows['id'];
      $full_name=$rows['full_name'];
      $usename=$rows['usename'];
?>

<tr>
            <td><?php echo $sn++; ?>.</td>
            <td><?php echo $full_name; ?> </td>
            <td> <?php echo $usename ;?> </td>
            <td>
                  <a href=" <?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id;?>" class="btn-primary">change password</a>
            <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id;?>" class="btn-sec">update admin </a>

               <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id;?>" class="btn-danger">delete admin  </a>   
            
            </td>
      </tr>


<?php
      

}
      }
      else{

      }
 }
?>
      
 </table>

</div>
</div>
      <!-- main content section end-->

      <?php include('partials/footer.php'); ?>