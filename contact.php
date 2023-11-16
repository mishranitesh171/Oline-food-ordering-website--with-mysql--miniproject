<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Taste | Food ordering</title>
    <link rel="icon" type="image" href="#">
    <link rel="stylesheet" href="../css/contact.css">
    
    <!-------------------------ICON LINK HERE----------------------------------------->
    
    <script src="https://kit.fontawesome.com/a699bcecaa.js" crossorigin="anonymous"></script>
    <!-------------------------FONT FAMILY LINK START HERE--------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-------------------------FONT FAMILY LINK END HERE------------------------------------------>

    <!--------------------------MENU BAR START HERE-------------------------------------------->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!--------------------------MENU BAR END HERE-------------------------------------------->
    <style>



/*-------------------------STYLE SECTION START HERE-------------------------------*/
*{
    box-sizing: border-box;
    margin: 0;
    list-style: none;
}
header{
    display: flex;
    width: 100%;
    height: 9vh;
    /*background-image: linear-gradient(to right, red , blue);*/
    background-color: aliceblue;
    justify-content: end;
    animation-name: head;
    animation-duration:1s;
    animation-iteration-count: infinite;
}
/*
@keyframes head {
    0%{
        background-image: linear-gradient(to right, rgb(167, 232, 16) , blue);
    }
    25%{
        background-image: linear-gradient(to left, red , blue);
    }
    50%{
        background-image: linear-gradient(to top, rgb(141, 7, 136) , rgb(3, 33, 16));
    }
    75%{
        background-image: linear-gradient(to right, rgb(0, 0, 0) , blue);
    }
    100%{
        background-image: linear-gradient(to bottom, red , rgb(242, 15, 170));
    }
}
*/ 
.logo{
    position: absolute;
    top: 1%;
    left: 1%;
}

nav ul li{
    flex: 1;
    display: inline-block;
    list-style: none;
    margin: 5px 5px 0px 5px;
    text-align: center;
    line-height: 55px;
    font-size: 2px;
}
nav ul li a{
    text-decoration: none;
    color: #f6099f;
    font-size: 18px;
    padding-right: 10px;
    transition: 0.5s;
    
}
nav ul li a:hover{
border: 1px solid #f6099f;
background-color: rgb(245, 241, 244); 
border-radius: 5px;
padding: 5px;
}
#cart:hover{
border: 1px solid #f6099f;
background-color: rgb(245, 241, 244); 
border-radius: 5px;
padding: 5px; 
}
/*-----css for menu icon start here*/
nav .fa{
  display: none;
}

/*-----css for menu icon end here*/
/***********************************SECTION 1 START HERE****************************************/
.bg-img{
  background: url(../image/contact/background\ dine-out.jpg) no-repeat fixed;
  height: 500px;
  background-size:cover;
  background-position-x: right;
  background-position-y: center;
  
}
.book-a-table{
  padding-top: 200px;
  font-size: 30px;
  font-weight: 600;
  color: white;
  opacity: 1 !important;
  text-align: center;
}

.bg-section1{
  
  background-color: black;
  opacity: 0.7;
  font-family: 'Berkshire Swash', cursive;
  height: 500px;
}











/***********************************SECTION 1 END HERE******************************************/


/*********************MAPS AND SCHEDULE SECTION START HERE******************************************/
.map-time{
  display: flex;
  margin: 10px;
}
.map{
  justify-content:space-evenly;
  width: 50%;
  
}
.map h3{
  margin: 10px;
  text-align: center;
  font-size: 30px;
  font-family: 'Berkshire Swash', cursive;
}
#mapid{
  padding-left: 50px;
}
iframe{
  margin: 10px;
  border-radius: 10px;
  border: 1px solid #f6099f;
}
.maps{
  -webkit-filter: grayscale(100%);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
   filter: grayscale(100%);
}
.maps:hover{
  -webkit-filter: grayscale(0%);
  -moz-filter: grayscale(0%);
  -ms-filter: grayscale(0%);
  -o-filter: grayscale(0%);
   filter: grayscale(0%);
}
.schedule-image {
  position: relative;
  left: 100px;
  top: 50px;
  -webkit-filter: grayscale(100%);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
   filter: grayscale(100%);
   width: fit-content;
}
 .schedule-time{
  position: relative;
  bottom: 100px;
  left: 100px;
  color: #f6099f;
  font-family: 'Berkshire Swash', cursive;
  text-shadow: 2px 2px 2px black;
}
.schedule-image:hover{
  -webkit-filter: grayscale(0%);
  -moz-filter: grayscale(0%);
  -ms-filter: grayscale(0%);
  -o-filter: grayscale(0%);
   filter: grayscale(0%);
   cursor: pointer;
}
.schedule-time:hover{
   cursor: pointer;
   text-shadow: 2px 2px 2px white;
}
/*********************MAPS AND SCHEDULE SECTION END HERE******************************************/

/*********************LOCATION AND ENQUIRY SECTION START HERE************************************/
.section2{
  display: flex;

}
.address-enquiry-section{
  width: 50%;
}
#address{
  margin: auto;
}
.address-enquiry-section h2{
  text-align: center;
  text-shadow: 2px 2px 5px rgb(255, 255, 255);
  font-family: 'Ubuntu', sans-serif;
  padding: 20px;
}
.address-enquiry-section p{
  font-family: 'Berkshire Swash', cursive;
  text-align: center;
  padding: 5px;
}
.address-enquiry-section .form{
  padding: 20px;
  border-radius: 5px;
  background-color: #fff;
  margin: 50px;
}

input[type=text],input[type=email],input[type=number], input[type=submit],textarea{
  width: 100%;
  padding: 10px;
  margin: 5px;
  resize: none;

}
input[type=submit]{
  background-color: orange;
  cursor: pointer;
  border: 1px solid white;
  border-radius: 5px;
}
input[type=submit]:hover{
  background-color: #f6099f;
}
/*********************LOCATION AND ENQUIRY SECTION END HERE************************************/












/*---Footer section css start----*/
.footer{
  padding: 10px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
  font-family: 'Mukta', sans-serif;
 
}
.col ul{
    padding-left: 0 !important;
  }
.col ul li a{
  text-align: left;
  text-decoration: none;
  text-transform: capitalize;
  color: #fff;
  min-width: auto;
  transition: 0.5s;
}
.col ul li a:hover{
  color: #1b191a;
  text-decoration: underline;
  cursor: pointer;
}
.fa-brands{
  padding-right: 3px;
}
.footer-heading{
  padding-right: 10px;
  font-size: 25px;
  text-decoration: underline;
}
/*---Footer section css End----*/
/*----------MEDIA QUERIES START HERE-------*/
@media(max-width:700px){
  nav ul li{
    display: block;
    
  }
  .nav-links{
    padding-top: 20px;
    position: absolute;
    background: #1b191a;
    min-height: 80vh;
    width: 200px;
    top: 0;
    right:-200px;
    text-align: center;
    z-index: 2;
    color: white;
  }
  
  .row{
    flex: 1;
    flex-direction: column;
    justify-content: space-between;
  }
  /* Footer css start*/
  .footer{
    font-size: 10px;
    justify-content: space-between;
  }
  .col{
    margin: 10px;
    justify-content: space-between;
  }
  .footer-heading{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    
  }
   /*-----css for menu icon start here*/
nav .fa{
  display: block;
  margin: 10px;
  font-size: 22px;
  cursor: pointer;
}
nav .fa-times{
  position: absolute;
  left: 2px;
  top: 3px;
}
nav .fa-bars{
  margin-top: 20px;
}
/*-----css for menu icon end here*/
/*********************media queries for maps and schedule start here******************************/
.map-time{
  flex-direction: column;
  width: 100%;
  margin: 2px;
  padding: 2px;
}
iframe{
  width: 100%;
  height: 50vh;
  margin: 2px;

}
.schedule-image{
  top: 10px;
  left: 10px;
}
.schedule-image img{
  width: 300px;
  padding-left: 50px;
}
.schedule-time{
  font-size: 15px;
  position: relative;
  left: 70px;
}
#mapid{
  width: 100%;
  padding: 10px;
}
/*********************media queries for maps and schedule end here******************************/
/*********************media queries for loacation and enquiry section start here************************************/
.section2{
  flex-direction: column;
}
.address-enquiry-section{
  width: 100%;
}
.address-enquiry-section .form{
  
  margin: 20px;
}
input ,textarea{
  margin-bottom: 5px;
  border: 1px solid grey;
}
/*********************media queries for loacation and enquiry section end here************************************/


}
/*----------------------------MEDIA QUERIES END HERE----------------------------------------------*/


/*-------------------------STYLE SECTION END HERE--------------------------------->*/

    </style>
  
  
  
  </head>
<body>
    <!-----------------------------------HEADER SECTION START HERE------------------------------->
    <header>
        <label class="logo"><a href="index.html"><img src="../image/logo1.png" alt="food & taste" width="50px" height="50px"></a></label>
           <nav>
            <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
            
            
            <li><a href="aboutus.html">about us</a></li>
            <li><a href="contact.html" style="border: 1px solid #f6099f;
                background-color: #f6099f;
                color: #fff; 
                border-radius: 5px;
                padding: 5px;">Contact</a></li>
            <li><a href="login.html" id="cart"><i class="fa-solid fa-user" style="color: #f6099f;"></i></a></li>
            <li><a href="#" id="cart" ><i class="fa-solid fa-cart-shopping" style="color: #f6099f;"></i></a></li>
            </ul>
             </div> 
             <i class="fa fa-bars" onclick="showMenu()"></i> 
        </nav>
    </header>
    <!-----------------------------------HEADER SECTION END HERE----------------------------> 
   
    <!-----------------------------------MAIN SECTION START HERE---------------------------->



    <section class="bg-img">
      <div class="bg-section1">
        <div class="book-a-table">
            <h1>
                Book A Table
                <br>
                  <a style="text-decoration: none; color: white;" href="tel:+919471610262">+91 947-1610-262</a>
              </h1>
              <img src="../image/contact/frill-free-img_section1.png" alt="">
        </div>
      </div>
    </section>
    
    
    <!-----------------------MAPS AND TIME SECTION START HERE------------------------------>
    <div class="map-time">
      <div class="map" id="mapid">
        <h3>Find Us on Google Map</h3>
       <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quo beatae quasi assumenda, expedita aliquam minima tenetur maiores neque incidunt repellat aut voluptas hic dolorem sequi ab porro, quia error.</p>
       <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.9261796267244!2d76.32910305825727!3d10.048397363057768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c3af991bd11%3A0x3e38680ef20b6f04!2sSoftware%20Block!5e0!3m2!1sen!2sin!4v1684511162578!5m2!1sen!2sin" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="map">
        <div class="schedule-image">
          <img src="../image/contact/food-table-meet.jpg" alt="">
        
          <div class="schedule-time"><h1>Schedule</h1>
              <p>Monday - Saturday | 9AM - 1PM <br>
                Saturday - Sunday | 9AM - 4AM</p>
          </div>
          </div>
       </div>
    </div>
    <!-----------------------MAPS AND TIME SECTION END HERE-------------------------------->
    <!----------------------ENQUIRY SECTION START HERE------------------------------------>

    <section class="enquiry" style="background-color: #fddec6;">
     <div class="section2">
          <div class="address-enquiry-section" id="address">
            <h2>OUR LOCATION</h2>
            <p>
          <i class="fas fa-map-marker-alt" style="color: black;"></i> 388,Food & Taste building complex <br> Pipeline road cochin - 23 , Cusat <br> Kochi kerala (INDIA) <br>
          
          <img src="../image/contact/frill-free-img_section1.png" alt="">
          </p>
            </div>
          <div class="address-enquiry-section">
        <h2>FOR ONLINE ENQUIRY</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, mollitia?</p>
        <div class="form">
        <form action="#" method="post">
          <input type="text" placeholder="Your name" name="yourname" id="yourname" required>
          <input type="email" placeholder="Email Id" name="email" id="email" required>
          <input type="number" placeholder="Contact No." name="contact" id="contact" required>
          <textarea name="message" id="message" cols="20" rows="5" required placeholder="Message"></textarea>
          <input type="submit" value="Send Enquiries">
        </form>
      </div>
        
      </div>
    </div>
    </section>
    <!----------------------ENQUIRY SECTION END HERE-------------------------------------->


    <section class="bg-img">
      <div class="bg-section1">
        <div class="book-a-table">
            <h1>
              Call for All Your​ Reservations
                <br>
                  <a style="text-decoration: none; color: white;" href="tel:+919471610262">+91 947-1610-262</a>
              </h1>
              <img src="../image/contact/frill-free-img_section1.png" alt="">
        </div>
      </div>
    </section>
    
    
    <!-----------------------------------MAIN SECTION END HERE---------------------------->
    
    
    <!-----------------------------FOOTER SECTION START HERE----------------------------------->
<footer style="background-color: rgb(246, 9, 159);">
    <div class="footer">
    <div class="col">
          <h3 class="footer-heading">Food & Taste</h3>
          <ul>
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">Feature</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">About</a></li>
          </ul>

        </div>
        <div class="col">
          <h3 class="footer-heading">Important Links</h3>
          <ul>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Categories</li>
            <li><a href="#">Grocery</li>
            <li><a href="../html/login.html">Login</li>
            <li><a href="../html/createnewaccount.html">Signin</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footer-heading">Consumer Policy</h3>
          <ul>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footer-heading">Connect With Us</h3>
          <ul>
            <li><a href="#"><i class="fa-brands fa-facebook" style="color: #fff;"> </i>Facebook</a></li>
            <li><a href="#"><i class="fa-brands fa-twitter" style="color: #fff;"> </i>Twitter</a></li>
            <li><a href="#"><i class="fa-brands fa-instagram" style="color: #fff;"> </i>Instagram</a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin" style="color: #fff;"> </i>Linkedln</a></li>
            <li><a href="#"><i class="fa-brands fa-youtube" style="color: #fff;"> </i>Youtube</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footer-heading">Feedback</h3>
          <a href="mailto:amitkumar03022004@gmail.com"><button class="feedback-btn" style="padding: 4px 6px;cursor: pointer; background-color: #fff;border-radius: 5px;border: 1px solid #f6099f;">Send us</button></a>
          <h3 class="footer-heading">Coroporate Office</h3>
          <p class="coroporate-address">388,Food & Taste complex Building <br>
          cochin - 23 ,Kochi , kerala (INDIA)</p>
          <p> <a href="tel:+919471610262" style="color: #1b191a; text-decoration: none;">Phone : +91 947-1610-262</a>
            <br>
            <a href="mailto:amitkumar03022004@gmail.com" style="color:#1b191a;text-decoration: none;">Email:amitkumar03022004@gmail.com</a>
          </p>
        </div>
      </div>
      <hr style="color: #fff;">
      <p style="text-align: center;" >© 2023 Food & Taste, Inc. All rights reserved.</p>
      </footer>
      <!-----------------------------FOOTER SECTION END HERE------------------------------------->
      
     <!------------------------------JAVASCRIPT FOR TOGGLE MENU START HERE----------------------------->  
     <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu(){
        navLinks.style.right="0";
        navLinks.style.transition="0.5s";
      }
      function hideMenu(){
        navLinks.style.right="-200px";
      }
     </script> 
     <!------------------------------JAVASCRIPT FOR TOGGLE MENU END HERE----------------------------->   
</body>
</html>