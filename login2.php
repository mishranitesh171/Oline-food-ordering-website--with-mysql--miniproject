<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food And Taste | Login page</title>
    <link rel="icon" type="image" href="../image/logo1.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@500&display=swap" rel="stylesheet">
<style>
*{
    box-sizing: border-box;
    margin: 0%;
}
body{
    background: #dbdee4;
    background: url(../image/login.jpg) no-repeat fixed;
    height: 500px;
    background-size:cover;
    background-position-x: right;
    background-position-y: center;
}
.main{
    display: flex;
    margin: auto;
    padding: 10%;
    justify-content: space-between;
}
.login{
    padding: 50px;
}
input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
}
input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
      
input[type=submit] {
        width: 100%;
        background-color: #1877f2;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: cubic-bezier(0.075, 0.82, 0.165, 1);
      }
      
input[type=submit]:hover {
        background-color: #45a049;
        
    }
#forgot-password{
    text-align: center;
    font-size: 20px;
    text-decoration: none;
}
#forgot-password:hover{
    text-decoration:underline;
}
button{
    width: 100%;
    background-color: #42b72a;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor:pointer;
}
button:hover {
    background-color: #45a049;
}
#log{
    background-color: aliceblue;
    border-radius: 5px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
}
h2{
    color: rgb(27, 26, 26);
    font-family: 'DynaPuff', cursive;
}
img{
margin-left: 25%;
vertical-align: auto;
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 900px) {
   .main{
    flex-direction: column;
   }
   img{
    margin: auto;
    max-width: 150px;
    max-height: 150px;
   }
   a{
    font-size: 10px;
    text-align: center;
    padding-left: 0px;
   }
   input[type=text]{
    width: 100%;
    padding: 12px ;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   }
}










</style>




</head>
<body>
    <div class="main">

        <div class="login">
            <label class="logo"><img src="../images/logo.jpeg" alt="food & taste" width="200px" height="200px"></label>
            <br>
            <h2 class="quotes" style="color: rgb(246, 9, 159); text-shadow: 1px 1px 1px black;padding-top: 20px;">Sorry—I’m in a relationship. With food.</h2>
        </div>
        <div class="login" onsubmit="return validation()" id="log">
            <form action="../food-order3/authentication.php" name="form" method="post">
                <input type="text" name="emailid" id="email" required placeholder="Email address or phone number">
                <input type="password" name="password" id="password" required placeholder="Password">
                <input type="submit" name="submit" value="Log in">
                <br>
                <a href="forgot.html" id="forgot-password">Forgotten Password ?</a>
                <br>
                <hr>
                
            </form>
            <a href="createnewaccount.php">
                <br>
                <button value="Create new account">Create new account
                </button>
                </a>
        </div>


    </div>
        <!--------------------------LOGIN AND PASSWORD VALIDATION----------------->
        <script>  
            function validation()  
            {  
                var id=document.form.emailid.value;  
                var ps=document.form.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>