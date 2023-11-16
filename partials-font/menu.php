
<?php include('config/constants.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <!-------------------------ICON LINK HERE----------------------------------------->
    
    <script src="https://kit.fontawesome.com/a699bcecaa.js" crossorigin="anonymous"></script>
     <!--------------------------MENU BAR START HERE-------------------------------------------->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" /> -->

<!-- Bootstrap CDN -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.jpeg" alt="Restaurant Logo" class="img-responsive" > 
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL;?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>contact.php">Contact</a>
                    </li>
                    <li>
                    <a href="<?php echo SITEURL;?>add_cart.php" id="cart" ><i class="fa-solid fa-cart-shopping" style="color: #f6099f;"></i>(0)</a>
                    
                    </li>
                    <li>
                        <a href="<?php echo SITEURL;?>login1.php">login</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->