<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
 </head>
<style>
     body {
    width: 100%;
    min-height: 100vh;
    background-image: url("uff.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

    h1{
        box-shadow:0 0 20px rgba(0,0,0,0.3);
        border-radius:5px;
    }
 a{
     font-size:40px;
     color:grey;
 }
</style>

<body>
    <?php   echo "<h1> Hey !! Welcome " . $_SESSION['username'] . "</h1>"; ?>

    <a href="lout.php">Logout</a>
</body>
</html>