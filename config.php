<?php
$server="localhost";
$username="root";
$password="";
$database="login";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo " <script> alert('connection failed...') </script>";
}

?>