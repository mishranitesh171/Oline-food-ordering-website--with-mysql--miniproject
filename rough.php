




<?php include("connection.php") ?>

<?php
if(isset($_POST['submit'])){


    $usename=$_POST['emailid'];
    $password=md5($_POST['password']);
$sql="SELECT *FROM tbl_login WHERE email_id='$usename' AND password='$password'";
//execute the query
$res = mysqli_query($conn, $sql);
//count rows to check whather the user exits or not 
$count=mysqli_num_rows($res);
if($count==1){

    echo "<h1><center> duplictae data</center></h1>";  

    
  //  $_SESSION['login']="<div class='success'> login successful.</div>";
//$_SESSION['user']=$usename;//to check whaether the user login or not and logout will unset it

//redirct to home page dashbord
   // header('location:'.SITEURL.'admin/');
}
else{
  
   echo "<h1><center> login successful </center></h1>";  
     //
    
   // $_SESSION['login']="<div class='error text-center'> username or password did not match</div>";
  //redirect to home page dashboard
   // header('location:'.SITEURL.'admin/login.php');
}



}
?>