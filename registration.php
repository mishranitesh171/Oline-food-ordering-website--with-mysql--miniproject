
<!--------------------------------------------CODE FOR INPUT PASS INTO DATABASE---------------------------->
<?php
    // Check if the registration form is submitted
session_start();
header('location:login1.php');
    // Get the submitted form data

    $conn=mysqli_connect('localhost','root');
    if($conn){
        echo"yes1";
    }
    else{
        echo"no";
    }
    mysqli_select_db($conn,'food-order');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email_id = $_POST['email'];
    $mobile_Number = $_POST['mobilenumber'];
    $password = md5($_POST['newpassword']);


    

    $sql="INSERT INTO  tbl_login SET
    
    fname='$fname',
    lname='$lname',
    email_id='$email_id',
    mobile_number='$mobile_Number',
    password='$password'
    ";
    $res2=mysqli_query($conn,$sql);
    if($res2==true){
       //  $_SESSION['order']="<div class='success1 text-center'> account created successfully</div>";
        //header('location:'.SITEURL);
        echo "yes";
    }
    else{
        // $_SESSION['order']="<div class='error1'> failed to  create account</div>";
        // header('location:'.SITEURL);
        echo "no";
    }

?>