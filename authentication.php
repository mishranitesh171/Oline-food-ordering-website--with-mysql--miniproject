
<!--------------------------------------------CODE FOR INPUT PASS INTO DATABASE---------------------------->
<?php
    // Check if the registration form is submitted
session_start();

    // Get the submitted form data

     $conn=mysqli_connect('localhost','root');
    // if($conn){
    //     echo"yes1";
    // }
    // else{
    //     echo"no";
    // }
    mysqli_select_db($conn,'food-order');

    $usename=$_POST['user'];
    $password=($_POST['password']);
$sql="SELECT *FROM tbl_login WHERE email_id='$usename' AND password='$password'";
//execute the query
$res = mysqli_query($conn, $sql);
//count rows to check whather the user exits or not 
$count=mysqli_num_rows($res);

    

    
    if($count==0){
         $_SESSION['username']= $usename;
         header('location:index.php');
        
    }
    else{
        // $_SESSION['order']="<div class='error1'> failed to  create account</div>";
        // header('location:'.SITEURL);
        header('location:login1.php');
    }

?>
