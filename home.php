<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>login suceesful<?php echo $_SESSION['username'];?></h2>
    <a href="logout.php">logout</a>
</body>
</html>