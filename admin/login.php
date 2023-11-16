<?php include('../config/constants.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login foof-order-system</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">LOGIN</h1>
        <br><br>
        <?php

        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        //  if(isset($_SESSION['no'])){
        //      echo $_SESSION[' no'];
        //      unset($_SESSION['no']);

        //  }



        ?>
        <br><br>

<!-- login form start from -->
<form action="" method="POST" class="text-center">
    username:<br>
    <input type="text" name="usename" placeholder="enter username">
<br> <br>
password:<br>
<input type="password" name="password"placeholder="enter password">
<br> <br>
<input type="submit" name="submit" value="login" class="btn-primary">

<br><br>


</form>


<!-- login form ends from -->

        <p  class="text-center"> <a href="#">nitesh mishra</a></p>
        <br>
        
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){


    $usename=$_POST['usename'];
    $password=md5($_POST['password']);
$sql="SELECT *FROM tbl_admin WHERE usename='$usename' AND password='$password'";
//execute the query
$res = mysqli_query($conn, $sql);
//count rows to check whather the user exits or not 
$count=mysqli_num_rows($res);
if($count==1){



    
    $_SESSION['login']="<div class='success'> login successful.</div>";
$_SESSION['user']=$usename;//to check whaether the user login or not and logout will unset it

//redirct to home page dashbord
    header('location:'.SITEURL.'admin/');
}
else{
    $_SESSION['login']="<div class='error text-center'> username or password did not match</div>";
  //redirect to home page dashboard
    header('location:'.SITEURL.'admin/login.php');
}



}





?>