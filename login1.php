<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>seek coding</title>
    <link rel="stylesheet" href="style4.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    
</head>
<body>
    <video autoplay muted loop id="myVideo">
        <source src="style4.mp4" type="video/mp4">
        
      </video>
    
    <div class="full-page">
        <div class="sub-page">
       
            <div class="navigation-bar">
                <div class="logo">
                    <a href='photography.html'>FOOD &TASTE</a>
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href=''>Home</a></li>
                        <li><a href=''>Contact</a></li>
                        <li><a href=''>Contact</a></li>
                        <li><a href=''>Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-1">
                    <div class="form-box">
                        <div class="form">
                            <form class="login-form" action="authentication.php" method="post">
                                <center><h1 class="main-heading">Login Form</h1></center>
				                <input type="text" name="user"placeholder="user name"/>
				                <input type="password"placeholder="password"/>
				                <button type="submit">LOGIN</button>


				                <p class="message">Not Registered? <a href="#">Register</a></p>
				            </form>
                            <form class="register-form"action="registration.php" method="post">
                                <center><h1 class="main-heading">Register Form</h1></center>
				                <input type="text" name="fname" placeholder="First name"/>
                                <input type="text" name="lname" placeholder="last name"/>
				                <input type="text" name="email"  placeholder="email-id"/>
				                <input type="number" name="mobilenumber" placeholder="mobile_number"/>
                                <input type="password" name="newpassword" placeholder="password"/>
                                
                            

				                <button type="submit">REGISTER</button>
				                <p class="message">Already Registered?<a href="#">Login</a>
				                </p>
				            </form>
			             </div>
	                </div>
                </div>
                <div class="col-1">
                    <p class='defination'>Login <br> HTML,CSS And J<br>Vi<br></p>
                </div>
            </div>
        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
    </script>
    <script>
        $('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
    </script>
</body>
</html>


